@extends('pageadmin.admin_layout')
@section('admin_content')
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
{{ csrf_field() }}
<center> <h3> ĐƠN ĐẶT TOUR </h3> </center>
<div> </div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">ID Người dùng</th>
        <th scope="col">Ngày đặt</th>
        <th scope="col">Tổng tiền</th>
        <th scope="col">ID chi tiết đặt tour</th>
        <th scope="col">Đã xác nhận và thanh toán</th>
        <th scope="col">Thông tin chi tiết</th>
        <th scope="col"></th>
        <th scope="col">Xóa đơn</th>
    </tr>
</thead>
@foreach ($dondattour as $ddt)
<tbody>
    <tr>
        <th scope="row"> {{ $ddt->id }}</th>
        <td>{{ $ddt->id_user }}</td>
        <td>{{ $ddt->ngaydat }}</td>
        <td>{{  number_format($ddt->tongtien) }}</td>
        <td>{{ $ddt->id_ctdtour }}</td>
        <td> <input class="form-check-input dxnhan" type="checkbox" value="{{ $ddt->id }}" <?php echo ($ddt->daxacnhan == 'on') ? 'checked' : ''; ?> > </td>
        <td> <a href="chitietdondattour/{{ $ddt->id }}"  class="btn btn-info set-send"> Xem chi tiết </a> <td>
        <td> <a href="xoadon-tour/{{ $ddt->id }}"  class="btn btn-danger set-send"> Xóa </a> <td>
      </tr>
    </tbody>
    @endforeach
  </table>
  <div style="margin: 0 auto; width:200px">{{ $dondattour->render('vendor.pagination.bootstrap-4') }}</div>
@endsection