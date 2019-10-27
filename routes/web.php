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
Route::prefix('linh-vuc')->group(function(){
	Route::get('them-moi','LinhVucController@create')->name('linh-vuc.them-moi');
	Route::post('them-moi','LinhVucController@store')->name('linh-vuc.xl-them-moi');
	Route::get('danh-sach','LinhVucController@index')->name('linh-vuc.danh-sach');
	Route::match(['PUT','PATCH'],'danh-sach/{id}/edit','LinhVucController@update')->name('linh-vuc.danh-sach.cap-nhat');
	Route::get('danh-sach/{id}/edit', 'LinhVucController@edit')->name('linh-vuc.danh-sach.chinh-sua');
	Route::get('danh-sach/{id}/d','LinhVucController@UpdateStatus')->name('linh-vuc.danh-sach.xoa');
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
Route::get('nguoi-choi/linh-vuc',function(){
	return view('form-nguoi-choi-them-moi');
});















Route::get('xinchao',function(){
	return view('xinchao2');
});


Route::get('master',function(){
	return view('Master-page/master');
});

Route::get('/', function () {
	return view('welcome');
});
Route::get('foo', function () {
	return 'Hello World';
});
Route::get('/user', 'UserController@index');
Route::get('ho-ten/{ten}/{maso?}',function($ten,$maso=""){
	return "Hello " . $ten ." - ". $maso;
})->where(["ten"=>"[a-zA-Z]+","maso"=>"[0-9]{10}"]); //{1,10)}

Route::get('view',function(){
	$hoten="Trung Khiet";
	$bietdanh= "Myth";
	return view('xinchao',compact('hoten','bietdanh'));
});

//Controller
Route::get('a','MyController@ShowMyInfo');
//Define controller - Chuyen huong den trang khac
Route::get('my-phone',['as'=>'phone',function(){
	return "0934965324";
}]);
//Group
Route::group(['prefix'=>'my-info'],function(){
	Route::get('name',function(){
		return view('xinchao');
	});
	Route::get('phone',function(){
		echo "My phone:0934965324";
	});
	Route::get('address',function(){
		echo "My address: Dong Nai City";
	});
});

//View
View::share('title','My info');

