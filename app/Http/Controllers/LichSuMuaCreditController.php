<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LichSuMuaCreditResource;
use App\LichSuMuaCreditModel;
use App\GoiCreditModel;

class LichSuMuaCreditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        return view ('LichSuMuaCredit');
    }
  

    public function indexAPI(){
        $ls=LichSuMuaCreditModel::all();
        return LichSuMuaCreditResource::collection($ls);
    }

    public function getAPI($id){
        $ls = LichSuMuaCreditModel::where('nguoi_choi_id',$id)->get();
        return response()->json($ls);
    }
    public function themlichsumua(Request $request){
        $ls=new LichSuMuaCreditModel;
        $ls->nguoi_choi_id=$request->nguoi_choi_id;
        $ls->goi_credit_id=$request->goi_credit_id;
        $ls->credit=$request->credit;
        $ls->so_tien=$request->so_tien;
        $ls->save();
        return response()->json($ls);
    }
  
}
