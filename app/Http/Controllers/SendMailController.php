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
        $player = NguoiChoiModel::select('ten_dang_nhap','mat_khau')
        ->where('email',$request->query('email'))->get();

       
        $player[0]->mat_khau=Str::random(6);
        $player[0]->save();
        Mail::to($request->query('email'))->send(new ForgotPasswordMail($player[0]));
        return response()->json($player[0]);
        //php artisan config:cache
    }
}
