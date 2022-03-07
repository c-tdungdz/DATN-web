<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="{{ asset('') }}">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/slick.css">
    <link rel="stylesheet" href="../public/css/slick-theme.css">
    <link rel="stylesheet" href="../public/css/lightbox.min.css">
    <link rel="stylesheet" href="../public/css/reponsive.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="dau">
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <a href="tel:0124124124" style="font-weight: 600; color:red"> Hotline:0124124124 </a>
                </div>
                <div class="col-5">
                    <form>
                        <input class="search" id="search" type="search" placeholder="Search">
                    </form>
                </div>
                <div class="col-3">
                    <div class="d-flex justify-content-end">
                        @if(Auth::check())
                            <a href=""> Chào Bạn, {{ Auth::user()->username }}</a>
                            <a href="{{ route('dangxuat') }}"> Đăng xuất</a>
                        @else 
                        <a href="dangnhap">ĐĂNG NHẬP</a>
                        <a href="dangky">ĐĂNG KÝ</a>
                        @endif
                  
                   </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu">
        <!-- menu moi -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="title" href="trangchu">
                    <img src="./image/logo-mytour.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="scroll navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="trangchu"> TRANG CHỦ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="trangchu"> DTRAVEL </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alltour">BOOK TOUR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="trangchu">KHÁM PHÁ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="allhotel">KHÁCH SẠN</a>
                        </li>

                        <li class="nav-item">
                        <a class="nav-link" href=" @if(Auth::check()) {{ route('taikhoan') }} @else {{ route('dangnhap') }}@endif" >TÀI KHOẢN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    </div>
    @yield('content')

    <div class="footer ">
        <div class="container ">
            <div class="row ">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 text-left ">
                    <div class="footer-content ">
                        <div>
                            Code by. COPYRIGHT © 2020 <span class="footer-content-style "> Dũng Bly T Cao </span>
                        </div>
                    </div>
                </div>
                <div class="footer-content col-xs-12 col-sm-12 col-md-12 col-lg-4 ">
                    <div class="icon ">
                        <a href=" "><img src="icons/icon-facebook.png " alt="ảnh "></a>
                        <a href=" "><img src="icons/icon-twitter.png " alt="ảnh "></a>
                        <a href=" "><img src="icons/icon-google.png " alt="ảnh "></a>
                        <a href=" "><img src="icons/icon-linkedin.png " alt="ảnh "></a>
                        <a href=" "><img src="icons/icon-dribbble.png " alt="ảnh "></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="../public/js/jquery.js"></script>
        <script src="../public/js/slick.min.js"></script>
        <script src="../public/js/xuly.js"></script>
        <script src="../public/js/lightbox.js"></script>
        <script type="text/javascript" src="../public/bootstrap/js/bootstrap.js"></script>			
</body>

</html>