<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\CauHinhTroGiupModel;

class CauHinhTroGiupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $ch = CauHinhTroGiupModel::all();
        return view('CauHinhTroGiup',compact('ch'));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ch = new CauHinhTroGiupModel;
        $ch->loai_tro_giup = $request->loai_tro_giup;
        $ch->thu_tu = $request->thu_tu;
        $ch->credit = $request->credit;
        $ch->save();
        return redirect('cau-hinh-tro-giup')->with('success','Thêm cấu hình trợ giúp thành công');
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
        $ch = CauHinhTroGiupModel::findOrFail($id);
        $ch->loai_tro_giup = $request->loai_tro_giup;
        $ch->thu_tu = $request->thu_tu;
        $ch->credit = $request->credit;
        $ch->save();
        return redirect('cau-hinh-tro-giup')->with('success','Cập nhật cấu hình trợ giúp thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function updateS(Request $request,$id){
        if($request->hiddenXoa == 0){
            $cauHinh = CauHinhTroGiupModel::where('id',$id)->update(['xoa'=>1]);
            return redirect('cau-hinh-tro-giup')->with('success','Xóa cấu hình thành công');
        }
        else{
            $cauHinh = CauHinhTroGiupModel::where('id',$id)->update(['xoa'=>0]);
            return redirect('cau-hinh-tro-giup')->with('success','Khôi phục cấu hìnhthành công');
        }
    }
}
