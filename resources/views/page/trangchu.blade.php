@extends('master.master')
@section('content')

    <body>
        <div class="baner">
            <div class="baner-slider">
                @foreach ($slider as $slider)
                    <img src="./image/{{ $slider->link }}" alt="">
                @endforeach
            </div>
        </div>

        <div class="section-2" id="dtravel">
            <div class="container">
                <div class="row">
                    <div class="What-is-the-Curseborn-Saga">
                        VÌ SAO LỰA CHỌN <span class="text-style-2 "> DTRAVEL </span>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <img src="./image/visaonenchon.png" alt="">
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6">
                        <div class="image">
                            <img src="./image/advertising1602038917.png" alt=" ">
                            <img src="./image/advertising1607308335.png" alt=" ">
                        </div>
                    </div>
                    <div class="box-2">
                        <div class="read-more">
                            <a href=""> XEM THÊM</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div id="nad " class="night-and-day"> ƯU ĐÃI THANH TOÁN TRỰC TUYẾN </div>
                    </div>

                </div>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-12">
                        <div class="text "> Săn tour giá sốc cùng Vietravel. Tour giảm giá đặc biệt, chất lượng không đổi và
                            số lượng chỗ có hạn. Chương trình chỉ áp dụng thanh toán trực tuyến trên website. Lưu ý: Tour
                            không hoàn, không hủy, không chuyển đổi hành trình ... </div>
                    </div>
                </div>
                <div class="circle-down"> <img src="icons/scroll-down.png" alt=" "></div>
            </div>
        </div>


        <div class="section-3">
            <div class="container ">
                <div class="row ">
                    <div class=" col-12 col-md-12">
                        <div id="the-novellas" class="title">ĐIỂM ĐẾN YÊU THÍCH <br>
                            <div class="gachchan"> </div>
                            <div class="gachchan-2"></div>
                        </div>
                    </div>
                </div>
                <div class="slider-1">
                    <div class="container">
                        <div class="row slider">
                            <div class="col-xs-12 col-md-3">
                                <div class="character">
                                    <a href="alltour">
                                        <img src="image/halong.jpg" alt="">
                                        <div class="name">
                                            VỊNH HẠ LONG
                                        </div>
                                        <div class="content ">Đã có 1000+ lượt khách </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="character">
                                    <a href="alltour">
                                        <img src="image/sapa.jpg" alt="">
                                        <div class="name">
                                            SA PA
                                        </div>
                                        <div class="content"> Đã có 1000+ lượt khách </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="character">
                                    <a href="alltour">
                                        <img src="image/dd3.jpg" alt=" ">
                                        <div class="name">
                                            ĐÀ NẴNG
                                        </div>
                                        <div class="content"> Đã có 1000+ lượt khách </div>
                                    </a>
                                </div>
                            </div>

                            <div class="col-3">
                                <a href="alltour">
                                    <div class="character">
                                        <img src="image/dd4.jpg " alt=" ">
                                        <div class="name">
                                            QUY NHƠN
                                        </div>
                                        <div class="content"> Đã có 1000+ lượt khách </div>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="gachngang"></div>
                </div>

                <div class="container">
                    <div class="row ">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-2 thegioi">
                                <a href="alltour"> <img src="image/chaua.jpg" alt="">
                                    <div class="name">
                                        Châu Á
                                    </div>
                                    <div class="khamphangay">
                                        Khám phá ngay
                                        <div class="fa fa-arrow-circle-right"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 thegioi">
                                <a href="alltour"> <img src="image/chauau.jpg" alt="">
                                    <div class="name">
                                        Châu Âu
                                    </div>
                                    <div class="khamphangay">
                                        Khám phá ngay
                                        <div class="fa fa-arrow-circle-right"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 thegioi">
                                <a href="alltour"> <img src="image/chauuc.jpg" alt="">
                                    <div class="name">
                                        Châu Úc
                                    </div>
                                    <div class="khamphangay">
                                        Khám phá ngay
                                        <div class="fa fa-arrow-circle-right"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 thegioi">
                                <a href="alltour"> <img src="image/chauphi.jpg" alt="">
                                    <div class="name">
                                        Châu Mỹ
                                    </div>
                                    <div class="khamphangay">
                                        Khám phá ngay
                                        <div class="fa fa-arrow-circle-right"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-2 thegioi">
                                <a href="alltour"> <img src="image/chaumi.jpg" alt="">
                                    <div class="name">
                                        Châu Phi
                                    </div>
                                    <div class="khamphangay">
                                        Khám phá ngay
                                        <div class="fa fa-arrow-circle-right"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="section-5" id="booktour">
            <div id="the-novella" class="title">
                TOUR TRONG NƯỚC NỔI BẬT
                <div class="gachchan"></div>
                <div class="gachchan-2"></div>
            </div>
            <div class="container">
                <div class="row section-5-box">
                    @foreach ($tour as $tour)
                        <div class="col-3">
                            <div class="box">
                                <a href="chitiettour/{{ $tour->id }}">
                                    <img src="./image/{{ $tour->hinhanh }}" alt="">
                                    <div class="box-name"> {{ $tour->tentour }} </div>
                                    <div class="gachngang"></div>
                                    <div class="box-text"> <img src="./image/date.png" alt=""> Ngày khởi hành:
                                        {{ $tour->ngaydi }} </div>
                                    <div class="box-text"> <img src="./image/i-chair.png" alt=""> Số chỗ :
                                        {{ $tour->socho }} </div>
                                    <div class="box-text" id="price"> <img src="./image/i-price.png" alt=""> Giá:
                                        {{ number_format($tour->gia, 0) }} </div>
                            </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="box-2">
                    <div class="read-more">
                        <a href="alltour"> XEM THÊM</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="section-6" id="khampha">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="see" class="title"> ĐIỂM ĐẾN PHỔ BIẾN VIỆT NAM
                            <div class="gachchan"></div>
                            <div class="gachchan-2"></div>
                        </div>
                        <div class="content-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-7">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center col-md-4">
                        <div class="Filter-by-type">
                            Bộ lọc
                        </div>
                    </div>

                    <div class="col-sm-8 col-md-8">
                        <div class="The-Characters">
                            <button id="char" class="btn btn-defaul set-btn btn-style"> Miền Bắc </button> | <button
                                id="art" class="btn btn-default set-btn btn-filtert"> Miền Nam </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-8">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <div class="diadiem">
                            <a href=""> <img src="./image/ha.jpg" alt="">
                                <div class="name-diadiem"> Hội An </div>
                            </a>

                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/hn.jpg" alt="">
                                <div class="name-diadiem"> Cần Thơ </div>
                            </a>
                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/hue.jpg" alt="">
                                <div class="name-diadiem"> Huế </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/country1606212327.jpg" alt="">
                                <div class="name-diadiem"> Đà Nẵng </div>
                            </a>
                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/sp.jpg" alt="">
                                <div class="name-diadiem"> Mộc Châu </div>
                            </a>
                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/hcm.jpg" alt="">
                                <div class="name-diadiem"> Hội An </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/dl.jpg" alt="">
                                <div class="name-diadiem"> Đà Lạt </div>
                            </a>
                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/brvt.jpg" alt="">
                                <div class="name-diadiem"> Phan Thiết </div>
                            </a>
                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/pt.jpg" alt="">
                                <div class="name-diadiem"> Nha Trang</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/p.jpg" alt="">
                                <div class="name-diadiem"> Phú Quốc</div>
                            </a>
                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/nt.jpg" alt="">
                                <div class="name-diadiem"> Quảng Nam </div>
                            </a>
                        </div>
                        <div class="diadiem">
                            <a href="alltour"> <img src="./image/hl.jpg" alt="">
                                <div class="name-diadiem"> Hạ Long</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section-9" id="khachsan">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title title-9"> DANH SÁCH KHÁCH SẠN
                            <div class="gachchan"></div>
                            <div class="gachchan-2"></div>
                        </div>
                        <div class="container">
                            <div class="row section-9-box">
                                @foreach ($khachsan as $ks)
                                    <div class="col-4">
                                        <div class="box">
                                            <a href="chitietks/{{ $ks->id }}">
                                                <img class="img_ks" src="./image/{{ $ks->hinhanh }}" alt="">
                                                <div class="box-name"> {{ $ks->tenkhachsan }} </div>
                                                <div class="gachngang"></div>
                                                <div class="box-text"> <img src="./image/pin.png" alt="">{{ $ks->diachi }}
                                                </div>
                                                <div class="box-text"> <img src="./image/contact.png" alt=""> Liên hệ :
                                                    0{{ $ks->sdt }} </div>
                                                <div class="box-text" id="price"> <img src="./image/i-price.png" alt="">
                                                    {{ number_format($ks->gia, 0) }}</div>
                                        </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                            <div class="box-2">
                                <div class="read-more">
                                    <a href="allhotel"> XEM THÊM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-10" id="taikhoan">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <div id="see" class="title">NHẬN KHUYẾN MÃI MỚI NHẤT CỦA <span class="text-style-1"> DTRAVEL </span>
                            <div class="gachchan"></div>
                            <div class="gachchan-2"></div>
                        </div>
                        <div class="content-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </div>
                    </div>
                </div>

                <div class="fix-form">
                    <div class="row " style="margin: 5% 0px; ">
                        <div class="col-12 col-md-6">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name <span style="color: red; "> * </span> </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address <span style="color: red; "> * </span>
                                </label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="col-12 text-right"> <button type="submit" class="btn btn-primary set-send"> SEND
                            </button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
