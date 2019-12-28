<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cau-hoi/{id}','CauHoiController@getAPI'); 
Route::get('/cau-hoi','CauHoiController@getAPIe'); //api/cau-hoi?linh_vuc_id=.... lay theo linh vuc


Route::get('/nguoi-choi','NguoiChoiController@getAPIa'); // "api/nguoi-choi?username=...&password=..." lay theo Username + password
Route::post('/nguoi-choi1','NguoiChoiController@getAPI');
Route::post('/them-nguoi-choi','NguoiChoiController@storeAPI');
Route::put('/chinh-sua-nguoi-choi','NguoiChoiController@editAPI');
Route::get('/test','NguoiChoiController@getallAPI');
Route::get('/apinguoichoi','NguoiChoiController@LayAPI');
Route::get('/bang-xep-hang','NguoiChoiController@rankAPI');
Route::post('/cap-nhat-nguoi-choi','NguoiChoiController@CapNhatNguoiChoi');

Route::get('/linh-vuc','LinhVucController@indexAPI'); //Lay het tat ca linh vuc
Route::get('/linh-vuc/{id}','LinhVucController@getAPI'); //Lay linh vuc theo ID

Route::get('/goi-credit','GoiCreditController@indexAPI');// Lay het tat ca goi-credit "api/goi-credit"
Route::get('/id-goi-credit','GoiCreditController@getAPI'); //Lay goi credit theo ID

Route::get('/chi-tiet','ChiTietLuotChoiController@indexAPI');// Lay het tat ca chi tiet luot choi
Route::get('/chi-tiet/{id}','ChiTietLuotChoiController@getAPI'); 

Route::get('/cau-hinh-diem-cau-hoi','CauHinhDiemCauHoiController@indexAPI'); // Cau hinh diem cau hoi
Route::get('/cau-hinh-diem-cau-hoi/{id}','CauHinhDiemCauTroiController@getAPI');

Route::get('/cau-hinh-app','CauHinhAppController@indexAPI'); //Cau hinh app
Route::get('/cau-hinh-app/{id}','CauHinhAppController@getAPI');

Route::get('/cau-hinh-tro-giup','CauHinhTroGiupController@indexAPI'); //Cau hinh tro giup
Route::get('/cau-hinh-tro-giup/{id}','CauHinhTroGiupController@getAPI');

Route::get('/chi-tiet-luot-choi','ChiTietLuotChoiController@indexAPI'); //
Route::get('/chi-tiet-luot-choi/{id}','ChiTietLuotChoiController@getAPI');
Route::post('/them-chi-tiet','ChiTietLuotChoiController@storeAPI');

Route::get('/lich-su-mua-credit','LichSuMuaCreditController@indexAPI');
Route::get('/lich-su-mua-credit/{id}','LichSuMuaCreditController@getAPI');

Route::get('/luot-choi','LuotChoiController@indexAPI'); 
Route::get('/luot-choi/{id}','LuotChoiController@getAPI'); 
Route::post('/them-luot-choi','LuotChoiController@storeAPI');


Route::get('/quan-tri-vien','QuanTriVienController@indexAPI'); 
Route::get('/quan-tri-vien/{id}','QuanTriVienController@getAPI'); 
