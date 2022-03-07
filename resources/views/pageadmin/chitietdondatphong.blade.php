@extends('pageadmin.admin_layout')
@section('admin_content')
<center> <h3> CHI TIẾT ĐƠN ĐẶT PHÒNG </h3> </center>
<div class="container">
    <div class="row">
<table class="table table-striped" id="chitiethoadon">
    <thead>
      <tr>
        <th scope="col">ID hóa đơn</th>
        <td> {{ $chitietdondatphong->id }}</td>
      </tr>
      <tr>
        <th scope="col">ID Khách hàng</th>
        <td>{{ $chitietdondatphong->id_user }}</td>
      </tr>
      <tr>
        <th scope="col">Tên Khách hàng</th>
        <td>{{ $thongtinkhachhang->username }}</td>
      </tr>
    <tr>
        <th scope="col">Email</th>
        <td>{{ $thongtinkhachhang->email }}</td>
    </tr>
        <th scope="col">Số ĐT</th>
        <td>{{ $thongtinkhachhang->sdt }}</td>
    <tr>
        <th scope="col">Địa chỉ</th>
        <td>{{ $thongtinkhachhang->diachi }}</td>
    </tr>
        <th scope="col">Tên khách sạn</th>
        <td>{{ $khachsan->tenkhachsan }}</td>
    <tr>
        <th scope="col">Giá</th>
        <td>{{ number_format($khachsan->gia) }}</td>
    </tr>
        <th scope="col">Địa chỉ khách sạn</th>
        <td>{{ $khachsan->diachi }}</td>
    <tr>
        <th scope="col">Số ĐT liên hệ</th>
        <td>{{ $khachsan->sdt }}</td>
    </tr>
  </tr>
  <th scope="col">Thanh toán</th>
  <td> <?php echo (($chitietdondatphong->daxacnhan)== 'on'? 'Đã thanh toán' : 'Chưa thanh toán' ); ?></td>
</tr>
        <th style="text-align: left"><a href="dondatphong" class="btn btn-info set-send"> <i class="fa fa-arrow-left"></i> Trở về </a></th>
        <td style="text-align: right"> <?php echo (($chitietdondatphong->daxacnhan)== 'on'? '<a href="dondatphong" class="btn btn-info set-send"> In hóa đơn <i class="fa fa-print"></i> </a>' : '' ); ?> </td>
    </tr>
</thead>
  </table>
</div>
</div>
@endsection