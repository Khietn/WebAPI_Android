<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('abc',function(){
	$admin=DB::table('_quan_tri_vien')->select('ten_dang_nhap')->get();
	return $admin;
	foreach($admin as $value){
		echo $value->ten_dang_nhap;
	}

});
//khiet
Route::prefix('linh-vuc')->group(function(){
	Route::get('them-moi','LinhVucController@create')->name('linh-vuc.them-moi');
	Route::post('them-moi','LinhVucController@store')->name('linh-vuc.xl-them-moi');
	Route::get('danh-sach','LinhVucController@index')->name('linh-vuc.danh-sach');
	Route::match(['PUT','PATCH'],'danh-sach/{id}/edit','LinhVucController@update')->name('linh-vuc.danh-sach.cap-nhat');
	Route::get('danh-sach/{id}/edit', 'LinhVucController@edit')->name('linh-vuc.danh-sach.chinh-sua');
	Route::get('danh-sach/{id}/d','LinhVucController@UpdateStatus')->name('linh-vuc.danh-sach.xoa');
});

Route::prefix('cau-hoi')->group(function(){
	Route::get('danh-sach','CauHoiController@index')->name('cau-hoi.danh-sach');
});


// code khiem

Route::get('/index/Register', function () {
    return view('Register');
});
Route::get('/index/login', function(){
	return view('Login');
});
Route::get('/index/Database','LinhVucController@data');
Route::prefix('linh-vuc')->group(function(){
 	Route::get('them-moi','LinhVucController@create')->name('linh-vuc.them-moi');
 	Route::post('them-moi','LinhVucController@store')->name('linh-vuc.xl-them-moi');
 });

//sau
Route::get('Nguoi-Choi','NguoiChoiController@index');