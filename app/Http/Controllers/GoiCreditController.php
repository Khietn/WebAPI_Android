<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GoiCreditModel;
class GoiCreditController extends Controller
{
   public function data()
   {
    $GoiCredit= GoiCreditModel::all();
    return view('GoiCredit',compact('GoiCredit'));
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $GoiCredit=DB::table('goi_credit')->get();
        return view('GoiCredit',compact('GoiCredit'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('GoiCredit');

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
        $GoiCredit=new GoiCreditModel();
        $GoiCredit->ten_goi=$request->ten_goi;
        $GoiCredit->credit=$request->credit;
        $GoiCredit->so_tien=$request->so_tien;
        $GoiCredit->save();

        return redirect('goi-credit')->with('success','Thêm Mới Thành Công !');
    }
    public function updatestatus(Request $request,$id)
    {
        if($request->xoa==0)
        {
            $GoiCredit=GoiCreditModel::where('id',$id)->update(['xoa'=>1]);
        }
        else
        {
            $GoiCredit=GoiCreditModel::where('id',$id)->update(['xoa'=>0]);
        }
        return redirect('goi-credit')->with('success','Xóa Thành Công ! ');

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
        $GoiCredit=GoiCreditModel::find($id);
        $GoiCredit->save();
        return view('sua-goi-credit', compact('GoiCredit'));
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
        $GoiCredit = GoiCreditModel::findOrFail($id);
        $GoiCredit->ten_goi=$request->input('ten_goi_moi');
        $GoiCredit->credit=$request->input('credit_moi');
        $GoiCredit->so_tien=$request->input('so_tien_moi');
        $GoiCredit->save();
        return redirect('goi-credit')->with('success','Cập Nhật Thành Công !');

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
