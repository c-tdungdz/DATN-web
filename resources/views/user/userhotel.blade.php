@extends('master.sidebar')
@section('user_content')
<div class="col">

  {{ csrf_field() }}
  <center> <h3> ĐƠN ĐẶT PHÒNG </h3> </center>
  <div> </div>
  <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Mã đơn đặt</th>
          <th scope="col">Ngày đặt</th>
          <th scope="col">Tổng tiền</th>
          <th scope="col">Đã xác nhận</th>
          <th scope="col">Thông tin chi tiết</th>
      </tr>
  </thead>
  @foreach ($dondat as $value)
  <tbody>
      <tr style="text-align: center;">
          <td scope="row"> {{ $value->id }}</td>
          <td scope="row"> {{ $value->ngaydat }}</td>
          <td scope="row"> {{ number_format($value->tongtien) }}</td>
          <td> <input class="form-check-input dxnhan" type="checkbox" disabled value="{{ $value->id }}" <?php echo ($value->daxacnhan == 'on') ? 'checked' : ''; ?> > </td>
          <td> <a href="info-hotel-user/{{ $value->id_ctdphong }}"  class="btn btn-success set-send"> Xem chi tiết </a> <td>
        </tr>
      </tbody>
      @endforeach
    </table>

</div>
@endsection