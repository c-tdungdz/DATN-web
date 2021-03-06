<?php

namespace App\Http\Controllers;

use App\chitietdatphong;
use App\chitietdattour;
use App\khachsan;
use App\tour;
use App\dondat;
use App\slider;
use App\binhluan;
use App\binhluantour;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class viewcontroller extends Controller
{
    public function getmaster() {
        return view ('master.master');
    }
    public function trangchu() {
        $slider = slider::all();
        $khachsan = khachsan::all();
        $tour = tour::all();
        return view('page.trangchu', compact('slider','khachsan','tour'));
    }
    public function chitietks(Request $request) {
        $chitietks = khachsan::where('id',$request->id)->first();
        return view('page.chitietks', compact('chitietks'));
    }

/*< ------------------TOUR-----------------------> */
    public function chitiettour(Request $req) {
        $chitiettour = tour::where('id',$req->id)->first();
        return view('page.chitiettour', compact('chitiettour'));
    }

    public function postchitiettour(Request $request) {
        
        $id_tour_ajax = $request->id_tour;
        $ten = $request->ten;
        $idtour = $request->idtour;
        $noidung = $request->ndcmt;
        
        if(!empty($noidung)){
        $binhluantour = new binhluantour;

        $binhluantour['ten'] = $ten; 
        $binhluantour['id_tour'] = $idtour; 
        $binhluantour['noidung'] = $noidung;
        
        $binhluantour->save();
        }
        else{

        $binhluantour = binhluantour::where('id_tour',$id_tour_ajax)->get();
        
        $showbl = '';
        foreach($binhluantour as $bl) {
        $showbl.= '<div class="tencmt">'.$bl->ten.'</div> 
        <ul class="ratings-2">
            <li class="star-2"></li>
            <li class="star-2"></li>
            <li class="star-2"></li>
            <li class="star-2"></li>
            <li class="star-2"></li>
        </ul>        
        <div class="nd-cmt"> '.$bl->noidung.'</div>        
        <hr>';
        }
        return $showbl; 
    } 
    }


    public function xacnhandattour(Request $req) {
        $chitiettour = tour::where('id',$req->id)->first();
        return view('page.xacnhandattour', compact('chitiettour'));
    }
    public function postxacnhandattour(Request $request) {
        
        $id = $request->id;
        $idtour = $request->idtour; 
        $gia = $request->gia; 
        $songuoi = $request->songuoi;


        $ctdtour = new chitietdattour;

        $ctdtour['id_tour'] = $idtour;
        $ctdtour['songuoi'] = $songuoi;
        $ctdtour->save();

        
        $dondat = new dondat;
        $dondat['id_user'] = $id;
        $dondat['ngaydat'] = date('Y-m-d');
        $dondat['tongtien'] = $gia;
        $dondat['id_ctdtour'] = $ctdtour->id ;
        $dondat['id_ctdphong'] = null;
        $dondat['daxacnhan'] = null;
        $dondat->save();

        return redirect()->back()->with('dattourthanhcong', '?????t tour th??nh c??ng, Nh??n vi??n c???a ch??ng t??i s??? li??n h??? v???i b???n sau 15 ph??t, chi ph?? s??? ???????c thanh to??n khi l??m th??? t???c checkin');
    }
/*< ------------------ END TOUR-----------------------> */
/*< ---------------------------------------------------> */



/*< ------------------ KH??CH S???N-----------------------> */
    public function postchitietks(Request $request) {

        $id_ks_ajax = $request->id_ks;

        $ten = $request->ten_cmt;
        $idks = $request->idks;
        $noidung = $request->ndcmt_ks;

        if(!empty($noidung)){
            $binhluan = new binhluan;

            $binhluan['ten'] = $ten; 
            $binhluan['id_khachsan'] = $idks; 
            $binhluan['noidung'] = $noidung;
            
            $binhluan->save();
        }
        else{

        $binhluan= binhluan::where('id_khachsan',$id_ks_ajax)->get();
        
        $showbl = '';
        foreach($binhluan as $bl) {
        $showbl .= '<div class="tencmt">'.$bl->ten.'</div> 
        <ul class="ratings-2">
            <li class="star-2"></li>
            <li class="star-2"></li>
            <li class="star-2"></li>
            <li class="star-2"></li>
            <li class="star-2"></li>
        </ul>        
        <div class="nd-cmt"> '.$bl->noidung.'</div>        
        <hr>';
        }
        echo $showbl; 
    }
    }

    public function xacnhandat(Request $req) {
        $chitietks = khachsan::where('id',$req->id)->first();
        return view('page.xacnhandat', compact('chitietks'));
    }
    public function postxacnhandat(Request $request) {
        
        $id = $request->id;
        $idks = $request->idks; 
        $gia = $request->gia; 
        $sophong = $request->sophong;

        $ctdp = new chitietdatphong;

        $ctdp['id_khachsan'] = $idks;
        $ctdp['sophong'] = $sophong;
        $ctdp->save();

        
        $dondat = new dondat;
        $dondat['id_user'] = $id;
        $dondat['ngaydat'] = date('Y-m-d');
        $dondat['tongtien'] = $gia;
        $dondat['id_ctdtour'] = null ;
        $dondat['id_ctdphong'] = $ctdp->id;
        $dondat['daxacnhan'] = null;
        $dondat->save();


        return redirect()->back()->with('dattourthanhcong', '?????t ph??ng th??nh c??ng, Nh??n vi??n c???a ch??ng t??i s??? li??n h??? v???i b???n sau 15 ph??t, chi ph?? s??? ???????c thanh to??n khi l??m th??? t???c checkin');
        ;
    }
    /*< ------------------ END-KH??CH S???N-----------------------> */
    /*< -------------------------------------------------------> */
    


    public function dsyeuthich(Request $req) {
        $chitietks = khachsan::where('id',$req->id)->first();
        return view('page.chitietdatks', compact('chitietks'));
    }

    public function alltour() {
        $tour = tour::all();
        return view('page.alltour',compact('tour'));
    }
    public function allhotel() {
        $hotel = khachsan::all();
        return view('page.allhotel',compact('hotel'));
    }
    public function taikhoan() {
        $nguoidung = User::where('id', Auth::user()->id)->get();
        return view('user.taikhoan',compact('nguoidung'));
    }

    public function dangxuat() {
        Auth::logout();
        return redirect()->route('trangchu');
    }
    public function dangky() {
        return view('user.dangky');
    }

    public function postdangky(Request $request) {
        
        // $validate = $request->validate(
        // [
        //     'email'=>'required|email|unique:users,email',
        //     'matkhau'=>'required|min:6|max:20',
        //     'ten' => 'required',
        //     'matkhau2' => 'required|same:matkhau'
        // ],
        // [
        //     'email.required' => 'Vui l??ng nh???p email',
        //     'email.email' => 'Kh??ng ????ng ?????nh d???ng email',
        //     'email.unique' => 'Email ???? c?? ng?????i s??? d???ng',
        //     'matkhau.required' => 'Vui l??ng nh???p m???t kh???u',
        //     'matkhau2.same' => 'M???t kh???u kh??ng gi???ng nhau',
        //     'matkhau.min' => 'M???t kh???u ??t nh???t 6 k?? t???'
        // ]);

            $taikhoan = $request->taikhoan;
            $matkhau = $request->matkhau;
            $ten = $request->ten;
            $email = $request->email;
            $sdt = $request->sdt;
            $diachi = $request->diachi;
    
            $nguoidung = new User();
    
            $nguoidung['name'] = $taikhoan;
            $nguoidung['password'] = Hash::make($matkhau);
            $nguoidung['username'] = $ten;
            $nguoidung['email'] = $email; 
            $nguoidung['sdt'] = $sdt; 
            $nguoidung['diachi'] = $diachi;
            
            $nguoidung->save();
            return redirect()->back()->with('thanhcong','T???o t??i kho???n th??nh c??ng');
    }

    public function dangnhap() {
        return view('user.dangnhap');
    }

    public function postdangnhap(Request $request) {

    $arr = ['name' => $request->taikhoan,'password' => $request->matkhau];

         if(Auth::attempt($arr)) {
            
            return redirect()->route('trangchu');
         }
         else { 
            return redirect()->back()->with(['flag'=> 'danger', 'message'=> '????ng nh???p kh??ng th??nh c??ng']);
         }
    }


}
