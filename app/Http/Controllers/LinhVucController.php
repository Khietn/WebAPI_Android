<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LinhVuc;
class LinhVucController extends Controller
{
    public function UpdateStatus($id,Request $request){
        if($request->txtXoa == 0){
            $linhVuc = LinhVuc::where('id',$id)->update(['xoa'=>1]);
        }
        else{
            $linhVuc = LinhVuc::where('id',$id)->update(['xoa'=>0]);
        }
        return redirect('linh-vuc/danh-sach')->with('success',"Success");
    }
    /*
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dsLinhVuc = LinhVuc::paginate(10);
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
        $linhVuc = new LinhVuc;
        $linhVuc->ten = $request->txtTen;
        $linhVuc->save();
        return redirect('linh-vuc/danh-sach');
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
        $linhVuc = LinhVuc::findOrFail($id);
        return view('Master-page.edit', compact('linhVuc'));
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
        $linhVuc = LinhVuc::findOrFail($id);
        $linhVuc->ten = $request->txtTenEdit;
        $linhVuc->save();
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
        //

    }
}
