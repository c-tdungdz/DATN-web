@extends('pageadmin.admin_layout')
@section('admin_content')
<center> <h3> CHI TIẾT ĐƠN ĐẶT TOUR </h3> </center>
<div class="container">
    <div class="row">
<table class="table table-striped" id="chitiethoadon">
    <thead>
      <tr>
        <th scope="col">ID hóa đơn</th>
        <td> {{ $chitietdondattour->id }}</td>
      </tr>
      <tr>
        <th scope="col">ID Khách hàng</th>
        <td>{{ $chitietdondattour->id_user }}</td>
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
        <th scope="col">Tên Tour</th>
        <td>{{ $tour->tentour }}</td>
    <tr>
        <th scope="col">Giá</th>
        <td>{{  number_format($tour->gia) }}</td>
    </tr>
        <th scope="col">Số người</th>
        <td>{{ $thongtintour->songuoi }}</td>
    <tr>
        <th scope="col">Ngày khởi hành</th>
        <td>{{ $tour->ngaydi }}</td>
    </tr>
        <th scope="col">Nơi khởi hành</th>
        <td>{{ $tour->noikhoihanh }}</td>
    </tr>
    </tr>
        <th scope="col">Thanh toán</th>
        <td> <?php echo (($chitietdondattour->daxacnhan)== 'on'? 'Đã thanh toán' : 'Chưa thanh toán' ); ?></td>
    </tr>
    </tr>
        <th style="text-align: left"><a href="dondattour" class="btn btn-info set-send"> <i class="fa fa-arrow-left"></i> Trở về </a></th>
        <td style="text-align: right"> <?php echo (($chitietdondattour->daxacnhan)== 'on'? '<a href="dondatphong" class="btn btn-info set-send"> In hóa đơn <i class="fa fa-print"></i> </a>' : '' ); ?> </td>
    </tr>
</thead>
  </table>
</div>
</div>
@endsection