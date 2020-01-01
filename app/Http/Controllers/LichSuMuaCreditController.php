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
        $ls = LichSuMuaCreditModel::
        join('goi_credit','lich_su_mua_credit.goi_credit_id','=','goi_credit.id')
        ->where('nguoi_choi_id',$id)
        ->select('lich_su_mua_credit.*','goi_credit.ten_goi')
        ->get();
        return response()->json($ls);


    }
    public function laytencredit(Request $request){
        $id=$request->query("goi_credit_id");
        $ls= GoiCreditModel::select("ten_goi")->where(["id"=>$id])->get();
        return response()->json($ls);
        // $ide = $request->query("linh_vuc_id");
        // $cauhoi = CauHoiModel::where('linh_vuc_id',$ide)->get();
        // return CauHoiResource::collection($cauhoi);
      
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
