@extends('master.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="../../public/css/chitiet.css">
@section('content')
    <div class="container">
        <div class="row start">
            <div class="col-8 hinhanh"> <img src="./image/{{ $chitietks->hinhanh }}" alt=""></div>
            <div class="col-4">
                <div class="chitiet">
                    <div class="ten"> {{ $chitietks->tenkhachsan }} </div>
                    <div class="fa fa-eye"> {{ rand(50, 500) }} </div>
                    <div class="fa fa-thumbs-up"> {{ rand(50, 100) }}</div>
                    <div class="fa fa-comment"> {{ rand(50, 100) }}</div>
                    <div> <span style="font-weight: 600"> Đánh giá</span> : <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                    </div>
                    <div> <span style="font-weight: 600"> Địa chỉ</span> : {{ $chitietks->diachi }}</div>
                    <div> <span style="font-weight: 600"> Giá mỗi đêm </span>: <span style="color: red; font-weight: 600">
                            {{ number_format($chitietks->gia, 0) }} </span></div>
                    <div> <span style="font-weight: 600"> Liên Hệ</span>: 0{{ $chitietks->sdt }} </span> </div>
                    <hr>
                    <div>
                        <a href="{{ route('dsyeuthich') }}" class="btn btn-success set-send"> <span class="cangiua"> <i
                                    class="fa fa-heart"></i> Thêm vào ưa thích</a> </span>
                        <a href="@if(Auth::check()) {{ 'xacnhandat/'.$chitietks->id }} @else {{ route('dangnhap') }} @endif" class="btn btn-success set-send"> <span class="cangiua"> <i
                                    class="fa fa-shopping-cart"> </i> Đặt Ngay</a> </span>
                    </div>
                    <hr>
                    <div> Bạn cần hỗ trợ ? </div>
                    <div id="lh"> <a href=""><img src="./image/btn-call1.png" alt=""> </a> </div>
                    <div> <a href=""><img src="./image/btn-call2.png" alt=""> </a> </div>
                </div>
            </div>
        </div>
        
        <h3> Hình ảnh liên quan</h3>

        <div class="row halq-ks">
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halq.webp" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halq.webp" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halq1.webp" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halq1.webp" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halq2.webp" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halq2.webp" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halq3.webp" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halq3.webp" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halq4.webp" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halq4.webp" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halq5.webp" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halq5.webp" alt=""/></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12"> 
                <div class="gioithieu"> <p> {{ $chitietks->gioithieu }} </p></div>
            </div>
        </div>

        <div class="row justify-content-beetwen">
            <div class="col-12"> 
                <div class="menu-2" id="tongquan"> 
                    <nav>
                        <a class="me active-2" href="javascript:void(0)"> Tổng quan</a>
                        <a class="me" href="javascript:void(0)"> chi tiết khách sạn</a>
                        <a class="me" href="javascript:void(0)"> chính sách</a>
                        <a class="me" href="javascript:void(0)"> ghi chú</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="phong"> 
            <div class="row">
                <div class="col-3">
                    <img src="./image/phong.jpg" alt="">
                </div>
                <div class="col-5">
                    <ul>
                    <li> PHÒNG DELUXE HƯỚNG VƯỜN</li>
                        <li> Phòng 01 giường lớn hoặc 02 giường đơn.
                            Hướng vườn </li>
                           <li> Diện tích trung bình 46m2. </li>
                        <li>Tối đa 02 người lớn và 02 trẻ em dưới 12 tuổi ở (có phụ thu).</li>
                            <li>Đặt ngay, thanh toán sau</li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li style="margin-bottom: 20px"> <span style="font-weight: 600;"> Giá mỗi đêm </span>: <span style="color: red; font-weight: 600;">  {{ number_format($chitietks->gia) }} </span> </li>
                        <a href="@if(Auth::check()) {{ 'xacnhandat/'.$chitietks->id }} @else {{ route('dangnhap') }} @endif" class="btn btn-success set-send"> <span class="cangiua"> Đặt Ngay</a> </span>       
                    </ul>
                </div>
            </div>
        </div>
        
        <hr>

        <div class="phong"> 
            <div class="row">
                <div class="col-3">
                    <img src="./image/phong.jpg" alt="">
                </div>
                <div class="col-5">
                    <ul>
                    <li> PHÒNG DELUXE HƯỚNG HỒ BƠI</li>
                        <li> Phòng 01 giường lớn hoặc 02 giường đơn.
                            Hướng vườn </li>
                           <li> Diện tích trung bình 46m2. </li>
                        <li>Tối đa 02 người lớn và 02 trẻ em dưới 12 tuổi ở (có phụ thu).</li>
                            <li>Đặt ngay, thanh toán sau</li>
                    </ul>
                </div>
                <div class="col-4">
                    <ul>
                        <li style="margin-bottom: 20px"> <span style="font-weight: 600;"> Giá mỗi đêm </span>: <span style="color: red; font-weight: 600;">  {{ number_format($chitietks->gia) }} </span> </li>
                        <a href="@if(Auth::check()) {{ 'xacnhandat/'.$chitietks->id }} @else {{ route('dangnhap') }} @endif" class="btn btn-success set-send"> <span class="cangiua"> Đặt Ngay</a> </span>       
                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-12">
            <h3> Đánh giá của khách hàng </h3>
            </div>
        </div>

        <div class="phong">
        <div class="row">
                    <div class="col-9">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên của bạn <span style="color: red;"> * </span> </label>
                                <form method="POST">
                                    {{ csrf_field() }}
                                <input type="text" class="form-control" id="tencmt" name="ten-cmt" value="@if(Auth::check()) {{ Auth::user()->username}} @else {{ '' }} @endif">
                                <input type="hidden" id="idks" name="idks" value="{{ $chitietks->id }}">
                                <label for="exampleInputEmail1">Nội dung <span style="color: red;"> * </span> </label>
                                <textarea class="form-control" rows="5" name="ndcmt-ks" id="ndcmt"> </textarea>
                                <div class="col-12 text-right pt-5"> <button type="submit" id="ajaxSubmit-ks" class="btn btn-primary set-send send-cmt"> Đánh giá </button> </div> 
                                </form> 
                            </div>
                    </div>
    
                    <div class="col-3">
                        <div class="form-group">
                        <label for="exampleInputEmail1"> Đánh giá <span style="color: red;"> * </span> </label>
                        <ul class="ratings">
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                            <li class="star"></li>
                        </ul>                    
                        </div>
                    </div>
        </div>

        <div class="cmtks"></div>
    </div>
    </div>
@endsection
