<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\ForgotPasswordMail;
use App\NguoiChoiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SendMailController extends Controller
{
    public function sendForgotPassword(Request $request){
    
       $player=NguoiChoiModel::where('email',$request->email)
                            ->where('ten_dang_nhap',$request->ten_dang_nhap)
                            ->update(['mat_khau'=>Str::random(6)]);
       
        if($player==1){
            $c=NguoiChoiModel::where('email',$request->email)->get();
            Mail::to($request->email)->send(new ForgotPasswordMail($c[0]));
            return response()->json($c);
        }
     

        
        return response()->json($player);
        //php artisan config:cache
    }
}
