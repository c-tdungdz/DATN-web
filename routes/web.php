<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('master','viewcontroller@getmaster');

Route::get('trangchu','viewcontroller@trangchu')->name('trangchu');

Route::get('dsyeuthich','viewcontroller@dsyeuthich')->name('dsyeuthich');

Route::get('alltour','viewcontroller@alltour');
Route::get('allhotel','viewcontroller@allhotel');

Route::get('taikhoan','viewcontroller@taikhoan')->name('taikhoan');

/*<------------------- NGƯỜI DÙNG -------------------->*/

Route::get('dangnhap','viewcontroller@dangnhap');
Route::post('dangnhap','viewcontroller@postdangnhap')->name('dangnhap');

Route::get('dangky','viewcontroller@dangky');
Route::post('dangky','viewcontroller@postdangky')->name('dangky');

Route::get('dangxuat','viewcontroller@dangxuat')->name('dangxuat');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/*<------------------- END - NGƯỜI DÙNG -------------------->*/


/*<------------------- CHI TIẾT VÀ ĐẶT KHÁCH SẠN -------------------->*/
Route::get('chitietks/{id}','viewcontroller@chitietks');
Route::post('chitietks/{id}','viewcontroller@postchitietks')->name('chitietks');

Route::get('xacnhandat/{id}','viewcontroller@xacnhandat');
Route::post('xacnhandat/{id}','viewcontroller@postxacnhandat')->name('xacnhandat');

Route::get('dondatks/{id}','viewcontroller@dondatks')->name('dondatks');
Route::post('dondatks','viewcontroller@postdondatks')->name('dondatks');

/*<------------------- END CT VÀ KS -------------------->*/
/*<------------------- --------------------------------->*/



/*<------------------- CHI TIẾT VÀ ĐẶT TOUR-------------------->*/

Route::get('chitiettour/{id}','viewcontroller@chitiettour')->name('chitiettour');
Route::post('chitiettour/{id}','viewcontroller@postchitiettour')->name('chitiettour');

Route::get('xacnhandattour/{id}','viewcontroller@xacnhandattour');
Route::post('xacnhandattour/{id}','viewcontroller@postxacnhandattour')->name('xacnhandattour');

/*<------------------- END CT VÀ ĐT -------------------->*/
/*<------------------------------------------------------->*/


/*<------------------- PAGE ADMIN -------------------->*/

Route::get('admin','AdminController@admin')->name('admin');
Route::get('admin-login','AdminController@adminLogin')->name('admin');

Route::get('addtour','AdminController@addtour')->name('addtour');
Route::post('addtour','AdminController@postaddtour')->name('addtour');
Route::get('showtour','AdminController@showtour')->name('showtour');

Route::get('edittour/{id}','AdminController@get_edit_tour');
Route::post('edittour/{id}','AdminController@post_edit_tour');
Route::get('deletetour/{id}','AdminController@deletetour')->name('deletetour');


Route::get('xoadon-tour/{id}','AdminController@xoaDonTour')->name('xoadontour');
Route::get('xoadon-hotel/{id}','AdminController@xoaDonHotel')->name('xoadonks');



/*<-------------------END-ADMIN -------------------->*/


/*<------------------- KHÁCH SẠN -------------------->*/
Route::get('addkhachsan','AdminController@addkhachsan')->name('addkhachsan');
Route::post('addkhachsan','AdminController@postaddkhachsan')->name('addkhachsan');
Route::get('showkhachsan','AdminController@showkhachsan')->name('showkhachsan');

Route::get('editkhachsan/{id}','AdminController@get_edit_khachsan');
Route::post('editkhachsan/{id}','AdminController@post_edit_khachsan');
Route::get('deletekhachsan/{id}','AdminController@deletekhachsan')->name('deletekhachsan');

/*<------------------- -------END-KHÁCH SẠN-------- -------------------->*/


/*<------------------- HÓA ĐƠN -------------------->*/
Route::get('dondattour','AdminController@getdondattour')->name('dondattour');
Route::get('chitietdondattour/{iddondattour}','AdminController@chitietdondattour');

Route::post('xacnhanhoadontour','AdminController@xacnhanhoadontour');

Route::get('dondatphong','AdminController@getdondatphong')->name('dondatks');
Route::get('chitietdondatphong/{iddondatphong}','AdminController@chitietdondatphong');
Route::post('xacnhanhoadonphong','AdminController@xacnhanhoadonphong');

/*<------------------- END-HÓA ĐƠN -------------------->*/
/*<------------------- --------------------------------->*/


/*<------------------- USER -------------------->*/
Route::get('tour-user/{id}','usercontroller@tourUser');
Route::get('info-tour-user/{id}','usercontroller@infoTourUser');


Route::get('hotel-user/{id}','usercontroller@hotelUser');
Route::get('info-hotel-user/{id}','usercontroller@infoHotelUser');

/*<------------------- --------------------------------->*/

