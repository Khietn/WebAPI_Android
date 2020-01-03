<?php

namespace App\Http\Controllers;
use App\LinhVucModel;
use Illuminate\Http\Request;
use App\CauHoiModel;   
 use Illuminate\Support\Facades\Validator;
use App\Http\Resources\CauHoiResource;

class CauHoiController extends Controller
{
    //
    public function index(){
        $dsCauHoi = CauHoiModel::paginate(10);
        $linhVuc = LinhVucModel::all();
        return view('cau-hoi',compact('dsCauHoi','linhVuc'));
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'noi_dung'=>'required',
            'phuong_an_a'=>'required',
            'phuong_an_b'=>'required',
            'phuong_an_c'=>'required',
            'phuong_an_d'=>'required',
            'dap_an'=>'required',
        ],[
            'required'=>':attribute không được để trống',
        ]);
            //$validator = Validator::make($input, $rules, $messages);
            //$mess=[''=>'ádaa']
        if ($validator->fails()) {
            return redirect('cau-hoi/danh-sach')->withErrors($validator)->withInput();
        }
        else{
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
    }

    public function edit($id){
        $cauhoi = CauHoiModel::findOrFail($id);
        return view('cap-nhat-cau-hoi',compact('cauhoi'));
    }
    public function update(Request $request){
        $validator = Validator::make($request->all(),[
            'noi_dung'=>'required',
            'phuong_an_a'=>'required',
            'phuong_an_b'=>'required',
            'phuong_an_c'=>'required',
            'phuong_an_d'=>'required',
            'dap_an'=>'required',
        ],[
            'required'=>':attribute không được để trống',
        ]);
            //$validator = Validator::make($input, $rules, $messages);
            //$mess=[''=>'ádaa']
        if ($validator->fails()) {
            return redirect('cau-hoi/danh-sach')->withErrors($validator)->withInput();
        }
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

    public function search(Request $request){
        $dsCauHoi = CauHoiModel::where('noi_dung','like',"%".$request->query('noi_dung').'%')->paginate(10);
        $linhVuc = LinhVucModel::all();
        return view('cau-hoi',compact('dsCauHoi','linhVuc'));
    }

    public function updateS(Request $request,$id){
        if($request->hiddenXoa == 0){
            $cauHoi = CauHoiModel::where('id',$id)->update(['xoa'=>1]);
            return redirect('cau-hoi/danh-sach')->with('success','Xóa câu hỏi thành công');
        }
        else{
            $cauHoi = CauHoiModel::where('id',$id)->update(['xoa'=>0]);
            return redirect('cau-hoi/danh-sach')->with('success','Khôi phục câu hỏi thành công');
        }
    }

    public function getAPI($id){
        $cauhoi=CauHoiModel::FindOrFail($id);
        return new CauHoiResource($cauhoi);
       // return response()->json($cauhoi);
    }

    public function getAPIe(Request $request){
        $ide = $request->query("linh_vuc_id");
        $cauhoi = CauHoiModel::where('linh_vuc_id',$ide)->get();
        return CauHoiResource::collection($cauhoi);
    }
}
