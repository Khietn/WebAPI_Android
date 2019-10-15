<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class MyController extends Controller
{
	public function ShowMyInfo(){
		echo "Name: Khiet - Age: 22";
		return redirect()->route("phone"); /*CHuyen huong den trang my-phone */
	}
	public function GetAdminName(){
		$admin = DB::table('_quan_tri_vien')->select('ten_dang_nhap')->get();
		foreach($admin as $value){
			echo $value->ten_dang_nhap;
		}
	}


}
?>