@extends('master.master')
<link rel="stylesheet" href="../../public/css/chitiet.css">

@section('content')
    <body>
        @if (Session::has('dattourthanhcong'))
            <div class="alert alert-success"> {{ Session::get('dattourthanhcong') }}</div>
		@endif
        <div class="container">
            <div class="row justify-content-center start">
                <div class="col-5 justify-content-center">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center">Xác nhận đặt tour</h2>
                        </div>
                        <form role="form" action="xacnhandattour/{{ $chitiettour->id }}" method="post">
                            {{ csrf_field() }}
                            <div class="panel-body">
                                <div class="form-group">
                                    <input required="true" type="hidden" class="form-control" id="usr" name="id" value="@if(Auth::check()) {{ Auth::user()->id}} @else {{ '' }} @endif">
                                    <input required="true" type="hidden" class="form-control" id="usr" name="idtour" value="{{ $chitiettour->id }}">
                                    <input required="true" type="hidden" class="form-control" id="usr" name="gia" value="{{ $chitiettour->gia }}">
                                </div>
                                <div class="form-group">
                                    <label for="usr">Tên:</label>
                                    <input required="true" type="text" class="form-control" id="usr" name="ten" value="@if(Auth::check()) {{ Auth::user()->username}} @else {{ '' }} @endif">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input required="true" type="email" class="form-control" id="email" name="email" value="@if(Auth::check()) {{ Auth::user()->email}} @else {{ '' }} @endif">
                                </div>
                                <div class="form-group">
                                    <label for="sdt">Điện thoại:</label>
                                    <input type="text" class="form-control" id="dienthoai" name="sdt" value="@if(Auth::check()) {{Auth::user()->sdt}} @else {{ '' }} @endif">
                                </div>
                                <div class="form-group">
                                    <label for="address">Địa chỉ:</label>
                                    <input type="text" class="form-control" id="address" name="diachi" value="@if(Auth::check()) {{ Auth::user()->diachi}} @else {{ '' }} @endif">
                                </div>
                                <div class="form-group">
                                    <label for="address">Số người:</label>
                                    <input type="number" class="form-control" id="address" name="songuoi" value="1" min="1">
                                </div>
							</div>
							<button type="submit" class="btn btn-success set-send" name="dangky">Xác nhận đặt</button>
                        </form>
                    </div>
                </div>

                <div class="col-4 justify-content-center">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h2 class="text-center">Thông tin tour</h2>
                        </div>
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
                            <div> <span style="font-weight: 600"> Nơi khỏi hành</span> : {{ $chitiettour->noikhoihanh }}</div>
                            <div> <span style="font-weight: 600"> Giá tour </span>: <span
                                    style="color: red; font-weight: 600">
                                    {{ number_format($chitiettour->gia, 0) }} </span></div>
                            <div> <span style="font-weight: 600"> Số ngày đi </span>: {{ $chitiettour->songaydi }} ngày 2 đêm </span> </div>
							<hr>
							<div>
								<img class="hinhanh-ks" src="./image/{{ $chitiettour->hinhanh }}" alt="">
							</div>
                        </div>
                    </div>
				</div>
			</div>
            </div>
    </body>

    </html>
@endsection
