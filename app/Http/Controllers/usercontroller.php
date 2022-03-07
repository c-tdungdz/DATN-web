<?php

namespace App\Http\Controllers;

use App\chitietdattour;
use App\chitietdatphong;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\dondat;
use App\khachsan;
use App\tour;

class usercontroller extends Controller
{
    public function tourUser(Request $request){
        $id_user = $request->id;

        $dondat = DB::table('dondat')->where('id_user',$id_user)->whereNotNull('id_ctdtour')->get();
        $ctdtour = DB::table('chitietdattour')->get();
        $tour = DB::table('tour')->get();
        
        // $test= "";
        // $test2= "";
        // foreach ($dondat as $dt) {
        //     foreach($ctdtour as $ct) {
        //         if($dt->id_ctdtour == $ct->id ) {
        //             foreach ($tour as $value ) {
        //                 if($ct->id_tour == $value->id) {
        //                 $test = $value->tentour;
        //                 $test2 = $dt->id_user;
        //                     // $dt->tongtien;
        //                 }
        //             }
        //         }
        //     }
        // }

        // return $dondat;

        return view('user.usertour',compact('dondat'));
    }

    public function infoTourUser(Request $request) {
        $id_ctdondat = $request->id;
        $dondat = dondat::where('id_ctdtour',$id_ctdondat)->first();
        $ctdtour = chitietdattour::where('id',$id_ctdondat)->first();
        $tour = tour::where('id',$ctdtour->id_tour)->first();  
        return view('user.info-user-tour',compact('id_ctdondat','ctdtour','tour','dondat'));
    }


    public function hotelUser(Request $request){
        $id_user = $request->id;

        $dondat = DB::table('dondat')->where('id_user',$id_user)->whereNotNull('id_ctdphong')->get();
        $ctdphong = DB::table('chitietdatphong')->get();
        $khachsan = DB::table('khachsan')->get();
        
        return view('user.userhotel',compact('dondat'));
    }

    public function infoHotelUser(Request $request) {
        $id_ctdondat = $request->id;
        $dondat = dondat::where('id_ctdphong',$id_ctdondat)->first();
        $ctdphong = chitietdatphong::where('id',$id_ctdondat)->first();
        $khachsan = khachsan::where('id',$ctdphong->id_khachsan)->first();  
        return view('user.info-user-hotel',compact('id_ctdondat','ctdphong','khachsan','dondat'));
    }
}
