<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVucModel;
class LinhVucController extends Controller
{
    public function data()
    {
        $linhVuc=LinhVucModel::all();
        return view ('linh-vuc',compact('linhVuc'));
    }
    
    public function UpdateStatus($id,Request $request){
        if($request->txtXoa == 0){
            $linhVuc = LinhVucModel::where('id',$id)->update(['xoa'=>1]);
        }
        else{
            $linhVuc = LinhVucModel::where('id',$id)->update(['xoa'=>0]);
        }
        return redirect('/index/Database')->with('success',"Xóa Lĩnh Vực Thành Công!");
    }
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dsLinhVuc = LinhVucModel::paginate(10);
        return view('Master-page/aaa',compact('dsLinhVuc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('form-linh-vuc');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
            $linhVuc = new LinhVucModel;
            $linhVuc->ten= $request->ten_linh_vuc;
            $linhVuc->save();           
            return redirect('/index/Database')->with('success','Thêm Mới Thành Công !');
        
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
        $linhVuc = LinhVucModel::findOrFail($id);
        return view('form-sua-linh-vuc', compact('linhVuc'));
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
        $linhVuc = LinhVucModel::findOrFail($id);
        $linhVuc->ten = $request->input('ten_linh_vuc_moi');
        $linhVuc->save();
        return redirect('/index/Database')->with('success',"Sửa Thành Công");
        //return redirect()->action('LinhVucController@data')->with('success',"Sửa Thành Công");
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
}
