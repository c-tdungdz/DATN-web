@extends('master.master')
<link rel="stylesheet" href="../public/css/alltour.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@section('content')
    <div class="container">
        <div class="row">
            <h3 style="margin: 20px 0px"> TẤT CẢ KHÁCH SẠN    </h3>
        </div>
        @foreach ($hotel as $item)
            <div class="tour">
                <div class="row">
                    <div class="col-4">
                    <img src="./image/{{ $item->hinhanh }}" alt="">
                    </div>

                   <div class="col-4" >
                       <ul>
                       <li> Tên khách sạn : {{ $item->tenkhachsan }} </li>
                       <li> Giới thiệu :<span class="line-clamp"> {{ $item->gioithieu }} </span></li>
                       <li> Địa chỉ : {{ $item->diachi }}</li>
                       <li>Đánh giá : <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div> </li>
                       <li>Liên hệ: 0{{ $item->sdt }}</li>
                       </ul>
                    </div>

                   <div class="col-4" >
                    <ul>
                        <li style="margin-bottom: 20px"> <span style="font-weight: 600;"> Giá Tour</span>: <span style="color: red; font-weight: 600;">  {{ number_format($item->gia) }} </span> </li>
                        <a href="@if(Auth::check()) {{ 'chitietks/'.$item->id }} @else {{ route('dangnhap') }} @endif" class="btn btn-success set-send"> <span class="cangiua">Xem chi tiết </a> </span>       
                    </ul>
                   </div>
                </div>
        </div>
        <div class="khoangcach"></div> 
        @endforeach
    </div>
@endsection
<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".tour").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>