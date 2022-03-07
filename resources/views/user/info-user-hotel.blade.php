@extends('master.sidebar')
@section('user_content')
<div class="col">

  <table class="table table-striped" id="chitiethoadon">
    <thead>
      <tr>
        <th scope="col">ID hóa đơn</th>
        <td> {{ $dondat->id }}</td>
      </tr>
      <tr>
        <th scope="col">Ngày đặt</th>
        <td> {{ $dondat->ngaydat }}</td>
      </tr>

      <tr>
        <th scope="col">Tên Khách hàng</th>
        <td>{{ Auth::user()->username }}</td>
      </tr>

    <tr>
        <th scope="col">Email</th>
        <td>{{ Auth::user()->email }}</td>
    </tr>
    <tr>
        <th scope="col">Số ĐT</th>
        <td>{{  Auth::user()->sdt }}</td>
    </tr>
    <tr>
        <th scope="col">Địa chỉ</th>
        <td>{{  Auth::user()->diachi }}</td>
    </tr>
        <th scope="col">Tên Khách sạn đã book</th>
        <td>{{ $khachsan->tenkhachsan }}</td>
    <tr>
        <th scope="col">Giá</th>
        <td>{{  number_format($khachsan->gia) }}</td>
    </tr>
        <th scope="col">Số phòng</th>
        <td>{{ $ctdphong->sophong }}</td>
    </tr>
        <td style="text-align: left"><a href="taikhoan" class="btn btn-info set-send"> <i class="fa fa-arrow-left"></i> Trở về </a></td>
        <td></td>
    </tr>
</thead>
  </table>
</div>
@endsection