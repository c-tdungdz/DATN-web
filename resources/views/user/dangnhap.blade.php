@extends('master.master')
<link rel="stylesheet" href="../public/css/login.css">
@section('content')
<div class="wrapper fadeInDown">
    <div id="formContent">
      @if(Session::has('flag'))
      <div class="alert alert-{{ Session::get('flag') }}"> {{ Session::get('message') }} </div>
      @endif
      @if(Auth::check())
      <div></div>
  @else 
  <div class="alert alert-danger"> Vui lòng đăng nhập để đặt Tour và Khách sạn</div>
  @endif
       <!-- Tabs Titles -->
      <!-- Icon -->
      <div class="fadeIn first">
        <img src="./image/logo-mytour.png" id="icon" alt="User Icon" />
      </div>
  
      <!-- Login Form -->
      <form method="post" action="{{ route('dangnhap') }}">
        {{csrf_field() }}
        <input type="text" name="taikhoan" class="fadeIn second" placeholder="login" value="admin">
        <input type="password" name="matkhau" class="fadeIn third"  placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div>
  
    </div>
  </div>
@endsection