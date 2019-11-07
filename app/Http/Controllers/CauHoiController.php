<?php

namespace App\Http\Controllers;
use App\LinhVucModel;
use Illuminate\Http\Request;
use App\CauHoiModel;    
class CauHoiController extends Controller
{
    //
    public function index(){
        $dsCauHoi = CauHoiModel::paginate(10);
        $linhVuc = LinhVucModel::all();
        return view('cau-hoi',compact('dsCauHoi','linhVuc'));
    }
    public function store(Request $request){
        $cauHoi = new CauHoiModel;
        $cauHoi->noi_dung= $request->noi_dung;
        $cauHoi->linh_vuc_id=$request->linh_vuc;
        $cauHoi->phuong_an_a=$request->phuong_an_a;
        $cauHoi->phuong_an_b=$request->phuong_an_b;
        $cauHoi->phuong_an_c=$request->phuong_an_c;
        $cauHoi->phuong_an_d=$request->phuong_an_d;
        $cauHoi->dap_an=$request->dap_an;
        $cauHoi->xoa=0;
        $cauHoi->save();
        // return redirect('linh-vuc/danh-sach');
        return redirect('cau-hoi/danh-sach')->with('success','Thêm mới thành công');
    }

    public function edit($id){
        $cauhoi = CauHoiModel::findOrFail($id);
        return view('cap-nhat-cau-hoi',compact('cauhoi'));
    }
    public function update(Request $request){
        $id = $request->hiddenID;
        $cauHoi= CauHoiModel::findOrFail($id);
        $cauHoi->noi_dung= $request->noi_dung;
        $cauHoi->linh_vuc_id=$request->linh_vuc;
        $cauHoi->phuong_an_a=$request->phuong_an_a;
        $cauHoi->phuong_an_b=$request->phuong_an_b;
        $cauHoi->phuong_an_c=$request->phuong_an_c;
        $cauHoi->phuong_an_d=$request->phuong_an_d;
        $cauHoi->dap_an=$request->dap_an;
        $cauHoi->save();
        return redirect('cau-hoi/danh-sach')->with('success','Cập nhật thành công');
    }
    public function updateStatus(Request $request){
        $id = $request->hiddenID;
        if($id == 0){
            $cauHoi = CauHoiModel::where('id',$id)->update(['xoa'=>1]);
        }
        else{
            $cauHoi = CauHoiModel::where('id',$id)->update(['xoa'=>0]);
        }
        return redirect('cau-hoi/danh-sach')->with('success',"Xóa câu hỏi Thành Công!");
    }
}
