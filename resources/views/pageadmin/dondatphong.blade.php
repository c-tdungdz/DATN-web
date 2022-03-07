@extends('pageadmin.admin_layout')
@section('admin_content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<center> <h3> ĐƠN ĐẶT PHÒNG </h3> </center>
<div> </div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">ID Khách hàng</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col">ID chi tiết đặt phòng</th>
        <th scope="col">Đã xác nhận và thanh toán</th>
        <th scope="col">Thông tin chi tiết</th>
        <th scope="col"></th>
        <th scope="col">Xóa đơn</th>
    </tr>
</thead>
@foreach ($dondatphong as $ddp)
<tbody>
    <tr>
        <th scope="row"> {{ $ddp->id }}</th>
        <td>{{ $ddp->id_user }}</td>
        <td>{{ $ddp->ngaydat }}</td>
        <td>{{ number_format($ddp->tongtien) }}</td>
        <td>{{ $ddp->id_ctdphong }}</td>
        <td> <input class="form-check-input dxnhanphong" type="checkbox" value="{{ $ddp->id }}" <?php echo ($ddp->daxacnhan == 'on') ? 'checked' : ''; ?> > </td>       
        <td> <a href="chitietdondatphong/{{ $ddp->id }}"  class="btn btn-info set-send"> Xem chi tiết </a> <td>
          <td> <a href="xoadon-hotel/{{ $ddp->id }}"  class="btn btn-danger set-send"> Xóa </a> <td>
      </tr>
    </tbody>
      @endforeach
  </table>
  <div style="margin: 0 auto; width:200px">{{ $dondatphong->render('vendor.pagination.bootstrap-4') }}</div>
@endsection