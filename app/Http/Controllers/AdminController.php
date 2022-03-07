<?php

namespace App\Http\Controllers;

use App\dondat;
use App\tour;
use App\khachsan;
use App\chitietdattour;
use App\chitietdatphong;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class AdminController extends Controller
{ 
    public function getmaster() {
        return view('admin.master');
    }

    public function getadmin() {
        return view('admin.dieukhien');
    }
    public function adminLogin () {
        return view('pageadmin.login');
    }

    
   /*< ------------------PAGE-ADMIN-----------------------> */

   public function admin() {
    return view('pageadmin.dieukhien');
}

/*< ------------------ AD-TOUR-----------------------> */
public function addtour(){
    return view('pageadmin.add_tour');
}

/*< ------------------ ADD-TOUR-----------------------> */
public function postaddtour(Request $request){

    $tentour = $request->txt_tentour;
    $gioithieu = $request->txt_gioithieu;
    $hinhanh = $request->txt_hinhanh;
    $gia = $request->txt_gia;
    $ngaydi = $request->txt_ngaydi;
    $noikhoihanh = $request->txt_noikhoihanh;
    $socho = $request->txt_socho;
    $songaydi = $request->txt_songaydi;

    $tour = new tour;

    $tour['tentour'] = $tentour;
    $tour['gioithieu'] = $gioithieu;
    $tour['hinhanh'] = $hinhanh;
    $tour['gia'] = $gia;
    $tour['ngaydi'] = date($ngaydi);
    $tour['noikhoihanh'] = $noikhoihanh;
    $tour['socho'] = $socho;
    $tour['songaydi'] = $songaydi;
    
    $tour->save();
    $tour = tour::all();
    return view('pageadmin.show_tour',compact('tour'));
}


/*< ------------------ SHOW-TOUR-----------------------> */
public function showtour(){
    $tour = tour::all();
    return view('pageadmin.show_tour',compact('tour'));
}

/*< ------------------ EDIT-TOUR-----------------------> */
    public function get_edit_tour($id ) {

    $tour = tour::where('id',$id)->get();
    return view('pageadmin.edit_tour',compact('tour'));
}

public function post_edit_tour(Request $request,$id) {

    $tour = tour::find($id);

    $tentour = $request->txt_tentour;
    $gioithieu = $request->txt_gioithieu;
    $hinhanh = $request->txt_hinhanh;
    $gia = $request->txt_gia;
    $ngaydi = $request->txt_ngaydi;
    $noikhoihanh = $request->txt_noikhoihanh;
    $socho = $request->txt_socho;
    $songaydi = $request->txt_songaydi;

    $tour['tentour'] = $tentour;
    $tour['gioithieu'] = $gioithieu;
    $tour['hinhanh'] = $hinhanh;
    $tour['gia'] = $gia;
    $tour['ngaydi'] = date($ngaydi);
    $tour['noikhoihanh'] = $noikhoihanh;
    $tour['socho'] = $socho;
    $tour['songaydi'] = $songaydi;
    $tour->save();
    $tour = tour::all();

    return view('pageadmin.show_tour',compact('tour'));
}


/*< ------------------ DELETE-TOUR-----------------------> */
    public function deletetour($id) {
    $tour = tour::find($id);
    $tour->delete();
    $tour = tour::all();
    return view('pageadmin.show_tour',compact('tour'));
}





/*< ------------------ ADD-KHÁCH SẠN-----------------------> */
public function addkhachsan(){
    return view('pageadmin.add_khachsan');
}

public function postaddkhachsan(Request $request){

    $tenkhachsan = $request->txt_tenkhachsan;
    $hinhanh = $request->txt_hinhanh;
    $gia = $request->txt_gia;
    $gioithieu = $request->txt_gioithieu;
    $danhgia = $request->txt_danhgia;
    $diachi= $request->txt_diachi;
    $sdt= $request->txt_sdt;

    $khachsan = new khachsan;

    $khachsan['tenkhachsan'] = $tenkhachsan;
    $khachsan['hinhanh'] = $hinhanh;
    $khachsan['gia'] = $gia;
    $khachsan['gioithieu'] = $gioithieu;
    $khachsan['danhgia'] = $danhgia;
    $khachsan['diachi'] = $diachi;
    $khachsan['sdt'] = $sdt;

    $khachsan->save();
    $khachsan = khachsan::all();
    return view('pageadmin.show_khachsan',compact('khachsan'));
}


/*< ------------------ SHOW- KHÁCH SẠN-----------------------> */
public function showkhachsan(){
    $khachsan = khachsan::all();
    return view('pageadmin.show_khachsan',compact('khachsan'));
}


/*< ------------------ EDIT-KHÁCH SẠN-----------------------> */
    public function get_edit_khachsan($id ) {

    $khachsan = khachsan::where('id',$id)->get();
    return view('pageadmin.edit_khachsan',compact('khachsan'));
}

public function post_edit_khachsan(Request $request,$id) {

    $khachsan = khachsan::find($id);

    $tenkhachsan = $request->txt_tenkhachsan;
    $hinhanh = $request->txt_hinhanh;
    $gia = $request->txt_gia;
    $gioithieu = $request->txt_gioithieu;
    $danhgia = $request->txt_danhgia;
    $diachi= $request->txt_diachi;
    $sdt= $request->txt_sdt;

    $khachsan['tenkhachsan'] = $tenkhachsan;
    $khachsan['hinhanh'] = $hinhanh;
    $khachsan['gia'] = $gia;
    $khachsan['gioithieu'] = $gioithieu;
    $khachsan['danhgia'] = $danhgia;
    $khachsan['diachi'] = $diachi;
    $khachsan['sdt'] = $sdt;

    $khachsan->save();
    $khachsan = khachsan::all();

    return redirect()->route('showkhachsan',compact('khachsan'));

}


/*< ------------------ DELETE-KHÁCH SẠN-----------------------> */
    public function deletekhachsan($id) {
    $khachsan = khachsan::find($id);
    $khachsan->delete();
    $khachsan = khachsan::all();
    return view('pageadmin.show_khachsan',compact('khachsan'));
}



/*< ------------------ HÓA ĐƠN-----------------------> */
public function getdondattour() {
    // $id 
    $dondattour = DB::table('dondat')->whereNotNull('id_ctdtour')->paginate(7);
    return view('pageadmin.dondattour',compact('dondattour'));
}



/*< ------------------XÁC NHẬN ĐƠN ĐẶT TOUR-----------------------> */
public function xacnhanhoadontour(Request $request) {
    $id = $request->id;
    $stt = $request->stt;

    DB::table('dondat')
        ->where('id', $id)
        ->update(['daxacnhan' => $stt]);
}

/*< ------------------ XÁC NHẬN ĐƠN ĐẶT KHÁCH SẠN-----------------------> */
public function xacnhanhoadonphong(Request $request) {
    $id = $request->id;
    $stt = $request->stt;

    DB::table('dondat')
        ->where('id', $id)
        ->update(['daxacnhan' => $stt]);
}

    /*< ------------------ XÁC NHẬN ĐƠN ĐẶT TOUR-----------------------> */
public function chitietdondattour(Request $req) {
    $chitietdondattour = dondat::where('id',$req->iddondattour)->first();
    $thongtinkhachhang = User::where('id', $chitietdondattour->id_user)->first();
    $thongtintour = chitietdattour::where('id', $chitietdondattour->id_ctdtour)->first();
    $tour = tour::where('id', $thongtintour->id_tour)->first();
    return view('pageadmin.chitietdondattour',compact('chitietdondattour','thongtinkhachhang','tour','thongtintour'));
}


/*< ------------------ XÁC NHẬN ĐƠN ĐẶT PHÒNG-----------------------> */
public function getdondatphong() {
    // $id 
    $dondatphong = DB::table('dondat')->whereNotNull('id_ctdphong')->paginate(7);
    return view('pageadmin.dondatphong',compact('dondatphong'));
}
public function chitietdondatphong(Request $req) {
    $chitietdondatphong = dondat::where('id',$req->iddondatphong)->first();
    $thongtinkhachhang = User::where('id', $chitietdondatphong->id_user)->first();
    $thongtinkhachsan = chitietdatphong::where('id', $chitietdondatphong->id_ctdphong)->first();
    $khachsan = khachsan::where('id', $thongtinkhachsan->id_khachsan)->first();
    return view('pageadmin.chitietdondatphong',compact('chitietdondatphong','thongtinkhachhang','khachsan','thongtinkhachsan'));
}

public function xoaDonTour (Request $request) {
    $id = $request->id;
    $dondat = dondat::find($id);
    $dondat->delete();
    $dondat = dondat::all();
    return redirect()->route('dondattour');
}

public function xoaDonHotel (Request $request) {
    $id = $request->id;
    $dondat = dondat::find($id);
    $dondat->delete();
    $dondat = dondat::all();
    return redirect()->route('dondatks');
}
}
