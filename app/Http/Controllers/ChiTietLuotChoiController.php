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
        return view('ChiTietLuotChoi');
    }

    
    public function indexAPI(){
        $ct= ChiTietLuotChoiModel::all();
        return ChiTietLuotChoiResource::collection($ct);
    }
    public function getAPI($id){
        $ct = ChiTietLuotChoiModel::find($id);
        return new ChiTietLuotChoiResource($ct);
    }
}
