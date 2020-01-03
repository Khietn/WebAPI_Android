<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LuotChoiResource;
use App\LuotChoiModel;


class LuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
         $luotchoi=LuotChoiModel::all();
         return view ('LuotChoi',compact('luotchoi'));
    }

    public function indexAPI(){
        $luotchoi= LuotChoiModel::all();
        return LuotChoiResource::collection($luotchoi);
    }
    public function getAPI($id){
        $luotchoi = LuotChoiModel::find($id);
        return new LuotChoiResource($luotchoi);
    }
    public function storeAPI(Request $request){
        $luotchoi = new LuotChoiModel;
        $luotchoi->nguoi_choi_id = $request->nguoi_choi_id;
        $luotchoi->so_cau = $request->so_cau;
        $luotchoi->diem = $request->diem;
        $luotchoi->ngay_gio = now();
        $luotchoi->save();
        return response()->json($luotchoi);
    }

}
