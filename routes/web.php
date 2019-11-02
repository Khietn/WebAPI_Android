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
Route::get('testsua',function(){
	return view('form-sua-linh-vuc');
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
	Route::post('them-moi','CauHoiController@store')->name('cau-hoi.them');
	Route::get('danh-sach/chinh-sua/{id}','CauHoiController@edit')->name('cau-hoi.danh-sach.chinh-sua');
});


// code khiem
Route::get('testlogout', function () {
    return view('logout');
});
Route::get('khiem', function () {
    return view('layouts/Master');
});
Route::get('/index/Register', function () {
    return view('Register');
});
Route::get('/index/login', function(){
	return view('Login');
});
//Chứng thực
Route::middleware('auth')->group(function(){
	Route::get('trangchu', function () {
		return view('layouts/Master');
	})->name('trang-chu');
	Route::get('/index/Database','LinhVucController@data');
Route::prefix('linh-vuc')->group(function(){
	Route::get('/index/Database','LinhVucController@data')->name('danhsach');
	Route::get('{id}','LinhVucController@UpdateStatus')->name('linh-vuc.xoa');
 	Route::get('them-moi','LinhVucController@create')->name('linh-vuc.them-moi');
 	Route::post('them-moi','LinhVucController@store')->name('linh-vuc.xl-them-moi');
 }); 
 Route::get('nguoi-choi','NguoiChoiController@data')->name('nguoi-choi.table');
Route::prefix('nguoi-choi')->group(function(){
	Route::get('nguoi-choi','NguoiChoiController@data')->name('nguoi-choi.table');	
	Route::get('nguoi-choi/{id}','NguoiChoiController@updatestatus')->name('nguoi-choi.xoa');
	Route::get('them-moi','NguoiChoiController@create')->name('nguoi-choi.them-moi');
	Route::post('them-moi','NguoiChoiController@store')->name('nguoi-choi.tm-them-moi');
});
Route::get('goi-credit','GoiCreditController@data')->name('goi-credit.table');
Route::prefix('goi-credit')->group(function(){
	Route::get('goi-credit/{id}','GoiCreditController@updatestatus')->name('goi-credit.xoa');
	Route::get('them-moi','GoiCreditController@create')->name('goi-credit.them-moi');
	Route::post('them-moi','GoiCreditController@store')->name('goi-credit.tm-them-moi');
});
Route::prefix('luot-choi')->group(function(){
	Route::get('ds/luotchoi','LuotChoiController@data')->name('danhsach-luotchoi');
});
Route::prefix('chi-tiet-luot-choi')->group(function(){
	Route::get('ds/chitiet-luotchoi','ChiTietLuotChoiController@data')->name('danhsach-chitiet-luotchoi');
});
Route::prefix('lich-su-mua-credit')->group(function(){
	Route::get('ds/lichsumuacredit','LichSuMuaCreditController@data')->name('danhsach-lichsumuacredit');
});
Route::prefix('quan-tri-vien')->group(function(){
	Route::get('ds/quantrivien','QuanTriVienController@data')->name('danhsach-quantrivien');
});
Route::prefix('cau-hinh-app')->group(function(){
	Route::get('ds/cauhinhapp','CauHinhAppController@data')->name('danhsach-cauhinhapp');
});
Route::prefix('cau-hinh-diem-cau-hoi')->group(function(){
	Route::get('ds/cauhinhdiemcauhoi','CauHinhDiemCauHoiController@data')->name('danhsach-cauhinhdiemcauhoi');
});
Route::prefix('cau-hinh-tro-giup')->group(function(){
	Route::get('ds/cauhinhtrogiup','CauHinhTroGiupController@data')->name('danhsach-cauhinhtrogiup');
});
Route::prefix('cau-hoi')->group(function(){
	Route::get('danh-sach','CauHoiController@index')->name('cau-hoi.danh-sach');
	Route::post('them-moi','CauHoiController@store')->name('cau-hoi.them');
});
});
//Kết Thúc Chứng Thực
 //dang nhap
 Route::get('laythongtin','QuanTriVienController@layThongTin');
 Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap');
 Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');
 Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');

// Route::get('/index/Database','LinhVucController@data');
// Route::prefix('linh-vuc')->group(function(){
// 	Route::get('/index/Database','LinhVucController@data')->name('danhsach');
//  	Route::get('them-moi','LinhVucController@create')->name('linh-vuc.them-moi');
//  	Route::post('them-moi','LinhVucController@store')->name('linh-vuc.xl-them-moi');
//  }); 
//sau
// Route::get('Nguoi-Choi','NguoiChoiController@index');

// Route::get('test',function(){
// 	return view('form-nguoi-choi-them-moi');
// });
// Route::get('nguoi-choi','NguoiChoiController@data')->name('nguoi-choi.table');
// Route::prefix('nguoi-choi')->group(function(){	
// 	Route::get('{id}','NguoiChoiController@updatestatus')->name('nguoi-choi.xoa');
// 	Route::get('them-moi','NguoiChoiController@create')->name('nguoi-choi.them-moi');
// 	Route::post('them-moi','NguoiChoiController@store')->name('nguoi-choi.tm-them-moi');
// });
// Route::get('goicredit',function(){
// 	return view('GoiCredit');
// });

// Route::prefix('goi-credit')->group(function(){
// 	Route::get('goi-credit','GoiCreditController@data')->name('goi-credit.table');
// 	Route::get('{/id}','GoiCreditController@updatestatus')->name('goi-credit.xoa');
// 	Route::get('them-moi','GoiCreditController@create')->name('goi-credit.them-moi');
// 	Route::post('them-moi','GoiCreditController@store')->name('goi-credit.tm-them-moi');
	
// });
// Route::get('goi-credit','GoiCreditController@data')->name('goi-credit.table');














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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
