@extends('master.sidebar')
<link rel="stylesheet" href="../public/css/taikhoan.css">
@section('user_content')
<div class="col">
          
  <h3>
      QUẢN LÝ TÀI KHOẢN
      <small class="text-muted"></small>
  </h3>
  <hr>
  <h6> Thông tin cá nhân </h6>
  <hr>
  @foreach ($nguoidung as $item)
  <div class="row">

  <div class="col-2"> 
    <div class="ten"> Tên đăng nhập :  </div> 
    <div class="ten"> Tên tài khoản :  </div> 
    <div class="ten"> Email :  </div> 
    <div class="ten"> Số điện thoại :  </div> 
    <div class="ten"> Địa chỉ :  </div> 
    <div class="ten"> Ngày đăng ký :  </div> 
  </div>

  <div class="col-3"> 
    <div class=""> {{ $item->username }} </div> 
    <div class=""> {{ $item->name }} </div> 
    <div class=""> {{ $item->email }} </div> 
    <div class=""> {{ $item->sdt }} </div> 
    <div class=""> {{ $item->diachi }} </div> 
    <div class=""> {{ $item->created_at }} </div> 
  </div>

</div>

  @endforeach
</div>
@endsection