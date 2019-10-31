<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\NguoiChoiModel;

class NguoiChoiController extends Controller
{
    public function data()
    {
        $NguoiChoi=NguoiChoiModel::all();
        return view ('NguoiChoi',compact('NguoiChoi'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $NguoiChoi=DB::table('nguoi_choi')->get();
        return view('NguoiChoi',compact('NguoiChoi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('form-nguoi-choi-them-moi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*  $ten_dang_nhap=$request->ten_dang_nhap;
        $qtv=NguoiChoiModel::where('ten_dang_nhap',$ten_dang_nhap)->first();
        if(Auth::attempt(['ten_dang_nhap'=>$ten_dang_nhap]))
        {
            return redirect('form-them-moi-nguoi-choi')->with('success','Tài Khoản Đã Tồn tại');
        }
        else
        {
        */
            $NguoiChoi=new NguoiChoiModel;
            $NguoiChoi->ten_dang_nhap=$request->ten_dang_nhap;
            $NguoiChoi->mat_khau=$request->mat_khau;
            $NguoiChoi->email=$request->email;
            $NguoiChoi->hinh_dai_dien=$request->hinh_dai_dien;
            $NguoiChoi->diem_cao_nhat=$request->diem_cao_nhat;
            $NguoiChoi->credit=$request->credit;
            $NguoiChoi->save();
    
            return redirect('nguoi-choi')->with('success','thêm mới thành công');
    //    }
        
      // if(NguoiChoiModel::where('ten_dang_nhap',$request->ten_dang_nhap)==0)
     //  {
       
      // }
      // else{
      //     return redirect('form-them-moi-nguoi-choi')->with('success','Tài Khoản Đã Tồn tại');
      // }
    }
    public function updatestatus(Request $request,$id)
    {
        if($request->xoa==0)
        {
            $NguoiChoi=NguoiChoiModel::where('id',$id)->update(['xoa'=>1]);
        }
        else
        {
            $NguoiChoi=NguoiChoiModel::where('id',$id)->update(['xoa'=>0]);
        }
        return redirect('nguoi-choi')->with('success','xóa thành công');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $NguoiChoi = NguoiChoiModel::findOrFail($id);
        $NguoiChoi->ten = $request->txtTenEdit;
        $NguoiChoi->save();
        return redirect('linh-vuc/danh-sach')->with('success',"Success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
