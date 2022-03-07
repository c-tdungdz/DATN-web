@extends('master.master')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Registation Form * Form Tutorial</title>
</head>
<body>
		@if (Session::has('thanhcong'))
		<div class="alert alert-success"> {{ Session::get('thanhcong') }} </div>		
		<div> <a href="{{ route('trangchu') }}"> Quay về trang chủ </a> </div>
		@endif
		<div class="container">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Đăng ký tài khoản</h2>
			</div>
			<form role="form" action="{{ route('dangky') }}" method="post">
				{{csrf_field() }}
			<div class="panel-body">
				<div class="form-group">
				  <label for="usr">Tên đăng nhập:</label>
				  <input required="true" type="text" class="form-control" id="taikhoan" name="taikhoan">
				</div>
				<div class="form-group">
				  <label for="pwd">Password:</label>
				  <input required="true" type="password" class="form-control" id="pwd"  name="matkhau">
				</div>
				<div class="form-group">
				  <label for="confirmation_pwd">Confirmation Password:</label>
				  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="matkhau2">
                </div>
                <div class="form-group">
                    <label for="usr">Tên:</label>
                    <input required="true" type="text" class="form-control" id="usr"  name="ten">
                  </div>
                  <div class="form-group">
                    <label for="email">Email:</label>
                    <input required="true" type="email" class="form-control" id="email"  name="email">
                  </div>
                  <div class="form-group">
                    <label for="sdt">Điện thoại:</label>
                    <input type="text" class="form-control" id="dienthoai"  name="sdt">
                  </div>
				<div class="form-group">
				  <label for="address">Address:</label>
				  <input type="text" class="form-control" id="address" name="diachi">
				</div>
				<button type="submit" class="btn btn-success set-send" name="dangky">Register</button>
			</div>
			</form>
        </div>
    </div>
</div>
	</div>
</body>
</html>
@endsection