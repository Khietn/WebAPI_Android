<?php

use Illuminate\Http\Request;
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
Route::get('/cau-hoi','CauHoiController@indexAPI');
Route::get('/nguoi-choi','NguoiChoiController@indexAPI');
Route::get('/nguoi-choi/{id}','NguoiChoiController@getAPI');

Route::get('/linh-vuc','LinhVucController@indexAPI');
Route::get('/linh-vuc/{id}','LinhVucController@getAPI');

Route::get('/goi-credit','GoiCreditController@indexAPI');
Route::get('/goi-credit/{id}','GoiCreditController@getAPI');

Route::get('/chi-tiet','ChiTietLuotChoiController@indexAPI');
Route::get('/chi-tiet/{id}','ChiTietLuotChoiController@getAPI');

Route::get('/cau-hinh-diem-cau-hoi','CauHinhDiemCauHoiController@indexAPI');
Route::get('/cau-hinh-diem-cau-hoi/{id}','CauHinhDiemCauTroiController@getAPI');

Route::get('/cau-hinh-app','CauHinhAppController@indexAPI');
Route::get('/cau-hinh-app/{id}','CauHinhAppController@getAPI');

Route::get('/cau-hinh-tro-giup','CauHinhTroGiupController@indexAPI');
Route::get('/cau-hinh-tro-giup/{id}','CauHinhTroGiupController@getAPI');

Route::get('/chi-tiet-luot-choi','ChiTietLuotChoiController@indexAPI');
Route::get('/chi-tiet-luot-choi/{id}','ChiTietLuotChoiController@getAPI');

Route::get('/lich-su-mua-credit','LichSuMuaCreditController@indexAPI');
Route::get('/lich-su-mua-credit/{id}','LichSuMuaCreditController@getAPI');

Route::get('/luot-choi','LuotChoiController@indexAPI');
Route::get('/luot-choi/{id}','LuotChoiController@getAPI');

Route::get('/quan-tri-vien','QuanTriVienController@indexAPI');
Route::get('/quan-tri-vien/{id}','QuanTriVienController@getAPI');
