@extends('pageadmin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh mục tour
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        
        </select>            
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
        </div>
      </div>
    </div>
    <div class="table-responsive">
        <?php
                                // $message = Session::get('message');
                                // if ($message) {
                                //     echo $message;
                                //     Session::put('message',null);
                                // }
                            ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                Tên tour
              </label>
            </th>
            <th></th>
            <th>Giới thiệu</th>
            <th>Hình ảnh </th>
            <th>Giá </th>
            <th>Ngày đi </th>
            <th>Nơi khởi hành </th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        @foreach ($tour as $item)
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><i> {{ $item ->tentour }}</i></label></td>
            <td></td>
            <td><span class="text-ellipsis">{{ $item ->gioithieu }}</span></td>
            <td><span class="text-ellipsis"> <img src="./image/{{$item->hinhanh }}" width="350px" height="200px"></span></td>
            <td><span class="text-ellipsis" style="color: red">{{ number_format($item ->gia)}}</span></td>
            <td><span class="text-ellipsis">{{ $item ->ngaydi}}</span></td>
            <td><span class="text-ellipsis">{{ $item ->noikhoihanh}}</span></td>
            <td>
              <a href="{{ URL::to('/edittour'.'/'.$item->id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-pencil-square-o text-active"></i>
              <a onclick="return confirm('Xác nhận xóa!')" href="{{ URL::to('/deletetour'.'/'.$item->id)}}"  class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection