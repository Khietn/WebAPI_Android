<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CauHoiModel;    
class CauHoiController extends Controller
{
    //
    public function index(){
        $dsCauHoi = CauHoiModel::paginate(10);
        return view('cau-hoi',compact('dsCauHoi'));
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
}
