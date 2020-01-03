<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ChiTietLuotChoiModel;
use App\Http\Resources\ChiTietLuotChoiResource;

class ChiTietLuotChoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function data()
    {
        $chitiet = ChiTietLuotChoiModel::all();

        return view('ChiTietLuotChoi',compact('chitiet'));
    }

    public function search(Request $request){
        $chitiet = ChiTietLuotChoiModel::where('luot_choi_id',$request
                                        ->query('luot_choi_id'))
                                        ->get();
        return view('ChiTietLuotChoi',compact('chitiet'));
    }

   
    
    public function indexAPI(){
        $ct= ChiTietLuotChoiModel::all();
        return ChiTietLuotChoiResource::collection($ct);
    }
    public function getAPI($id){
        $ct = ChiTietLuotChoiModel::find($id);
        return new ChiTietLuotChoiResource($ct);
    }
    public function storeAPI(Request $request){
        $ctt = new ChiTietLuotChoiModel;
        $ctt->luot_choi_id = $request->luot_choi_id;
        $ctt->cau_hoi_id = $request->cau_hoi_id;
        $ctt->phuong_an = $request->phuong_an;
        $ctt->diem = $request->diem;
        $ctt->save();
        return response()->json($ctt);
    }
}
