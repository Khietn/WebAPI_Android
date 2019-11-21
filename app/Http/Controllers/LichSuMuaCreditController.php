<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LichSuMuaCreditResource;
use App\LichSuMuaCreditModel;

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
        $ls = GoiCreditModel::find($id);
        return new LichSuMuaCreditResource($ls);
    }
}
