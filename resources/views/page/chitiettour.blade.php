@extends('master.master')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="../../public/css/chitiet.css">
@section('content')
    <div class="container">
        <div class="row start">
            <div class="col-8 hinhanh"> <img src="./image/{{ $chitiettour->hinhanh }}" alt=""></div>
            <div class="col-4">
                <div class="chitiet">
                    <div class="ten"> {{ $chitiettour->tentour }} </div>
                    <div class="fa fa-eye"> {{ rand(50, 500) }} </div>
                    <div class="fa fa-thumbs-up"> {{ rand(50, 100) }}</div>
                    <div class="fa fa-comment"> {{ rand(50, 100) }}</div>
                    <div> <span style="font-weight: 600"> Đánh giá</span> : <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                        <div class="fa fa-star"></div>
                    </div>
                    <div> <span style="font-weight: 600"> Nơi khởi hành</span> : {{ $chitiettour->noikhoihanh }}</div>
                    <div> <span style="font-weight: 600"> Giá mỗi đêm </span>: <span style="color: red; font-weight: 600">
                            {{ number_format($chitiettour->gia, 0) }} </span></div>
                    <div> <span style="font-weight: 600"> Số ngày đi</span>: {{ $chitiettour->songaydi }} ngày 2 đêm </span> </div>
                    <hr>
                    <div>
                        <a href="{{ route('dsyeuthich') }}" class="btn btn-success set-send"> <span class="cangiua"> <i
                                    class="fa fa-heart"></i> Thêm vào ưa thích</a> </span>
                        <a href="@if(Auth::check()) {{ 'xacnhandattour/'.$chitiettour->id }} @else {{ route('dangnhap') }} @endif" class="btn btn-success set-send"> <span class="cangiua"> <i
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

        <div class="row halq">
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halqtour.jpg" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halqtour.jpg" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halqtour1.jpg" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halqtour1.jpg" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halqtour2.jpg" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halqtour2.jpg" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halqtour3.jpg" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halqtour3.jpg" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halqtour4.jpg" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halqtour4.jpg" alt=""/></a>
                </div>
            </div>
                <div class="col-4 col-sm-3">
                    <div>
                        <a class="example-image-link" href="./image/halqtour5.jpg" data-lightbox="example-set" 
                        data-title="Click the right half of the image to move forward."><img class="example-image" 
                        src="./image/halqtour5.jpg" alt=""/></a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12"> 
                <div class="gioithieu"> <p> {{ $chitiettour->gioithieu }} </p></div>
            </div>
        </div>

        <div class="row justify-content-beetwen">
            <div class="col-12"> 
                <div class="menu-2" id="tongquan"> 
                    <nav>
                        <a class="me" href="chitietks/{{ $chitiettour->id }}"> Tổng quan</a>
                        <a class="me active-2   " href=""> chi tiết tour</a>
                        <a class="me" href=""> chính sách</a>
                        <a class="me" href=""> ghi chú</a>
                    </nav>
                </div>
            </div>
        </div>

        <div class="phong"> 
            <div class="row">
                <div class="col-12">
                 <h6> <div class="fa fa-info-circle"> </div> ĐIỂM NHẤN HÀNH TRÌNH</h6>
                 <div> Hành trình : {{ $chitiettour->tentour }}</div>
                 <div> Lịch trình : {{ $chitiettour->songaydi }} ngày 2 đêm</div>
                 <div> Vận chuyển : Máy bay khứ hồi và xe du lịch đời mới</div>
            </div>
            </div>
        </div>
        <div class="phong"> 
            <div class="row">
                <div class="col-12">
                 <h6> <div class="fa fa-map-o"> </div> LỊCH TRÌNH</h6>
                 <div> NGÀY 1 | SAPA – FANSIPAN (Ăn sáng, trưa, chiều)</div>
                 <div> Sáng: Dùng bữa sáng.</div>
                 <div>
                     <ul>
                         <li> Đoàn khởi hành tham quan chinh phục Fansipan, ngọn núi cao nhất Việt Nam (3.143 m) thuộc dãy núi Hoàng Liên Sơn, cách thị trấn Sa Pa khoảng 9 km về phía tây nam. </li>
                         <li>Du khách chinh phục "Nóc nhà Đông Dương"  với hệ thống cáp treo Fansipan Sa Pa dài 6,2km đạt 2 kỷ lục Guinness thế giới: Cáp treo ba dây có độ chênh giữa ga đi và ga đến lớn nhất thế giới: 1410m và Cáp treo ba dây dài nhất thế giới: 6292.5m. Từ tuyến cáp treo, du khách có thể cảm nhận được thiên nhiên hùng vĩ, chiêm ngưỡng khung cảnh thung lũng Mường Hoa và rừng quốc gia Hoàng Liên từ trên cao. Ngoài ra, du khách còn có thể đến hành hương tại Khu du lịch tâm linh – Chùa Trình, Chùa Hạ tại ga đến (chi phí cáp treo tự túc).</li>
                     </ul>
                 </div>
                 Trưa:Dùng cơm trưa 
                 <ul>
                 <li>Đoàn tự do khám phá Sapa </li>
                </ul>
                Tối: Dùng cơm tối.
                <ul>
                    <li>Nghỉ đêm tại Sapa.</li>
                </ul>
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
                                <input type="text" class="form-control" id="tencmt" name="tencmt" value="@if(Auth::check()) {{ Auth::user()->username}} @else {{ '' }} @endif">
                                <input type="hidden" id="idtour" name="idtour" value="{{ $chitiettour->id }}">
                                <label for="exampleInputEmail1">Nội dung <span style="color: red;"> * </span> </label>
                                <textarea class="form-control" rows="5" name="ndcmt" id="ndcmt"> </textarea>
                                <div class="col-12 text-right pt-5"> <button type="submit" id="ajaxSubmit" class="btn btn-primary set-send send-cmt"> Đánh giá </button> </div> 
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
<div class="cmt"></div>
    </div>
    </div>
</div>
@endsection
