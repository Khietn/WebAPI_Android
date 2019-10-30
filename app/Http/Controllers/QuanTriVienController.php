<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\QuanTriVienModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class QuanTriVienController extends Controller
{
    protected $redirectTo = 'linh-vuc';
    public function dangNhap(){
        return view ('Login');
    }
    public function xuLyDangNhap(Request  $request){
         //return "hello";
         $ten_dang_nhap = $request->ten_dang_nhap;
         $mat_khau = $request->mat_khau;
         $qtv=QuanTriVienModel::where('ten_dang_nhap',$ten_dang_nhap)->first();
         if(Auth::attempt(['ten_dang_nhap' => $ten_dang_nhap,'password' => $mat_khau]))
         {
            return redirect()->route('trang-chu'); 
         }
         return "Đăng Nhập Không Thành Công";
        //  if($qtv==null)
        //  {
        //      return 'Sai tên đăng nhập';
        //  }
        //  if(!Hash::check($mat_khau,$qtv->mat_khau)){
        //      return "Sai mật khẩu";
        //  }
        //  return "Đăng Nhập Thành Công!";      
    }
    public function layThongTin(){
        //return Auth::user();// lấy ra tất cả thông tin
        return Auth::id();//lấy ra id

    }
    public function dangXuat(){
         Auth::logout();
         return redirect()->route('dang-nhap');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
