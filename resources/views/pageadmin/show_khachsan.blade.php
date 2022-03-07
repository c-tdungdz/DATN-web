@extends('pageadmin.admin_layout')
@section('admin_content')
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      Danh mục khách sạn
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
                Tên khách sạn
              </label>
            </th>
            <th>Giới thiệu</th>
            <th>Hình ảnh </th>
            <th>Giá </th>
            <th>Địa chỉ </th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        @foreach ($khachsan as $item)
        <tbody>
          <tr>
            <td><label class="i-checks m-b-none"><i> {{ $item ->tenkhachsan }}</i></label></td>
            <td><span class="text-ellipsis">{{ $item ->gioithieu }}</span></td>
            <td><span class="text-ellipsis"> <img src="./image/{{$item->hinhanh }}" width="350px" height="200px"></span></td>
            <td><span class="text-ellipsis" style="color: red">{{ number_format($item ->gia)}}</span></td>
            <td><span class="text-ellipsis">{{ $item ->diachi}}</span></td>
            <td>
              <a href="{{ URL::to('/editkhachsan'.'/'.$item->id)}}" class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-pencil-square-o text-active"></i>
              <a onclick="return confirm('Xác nhận xóa!')" href="{{ URL::to('/deletekhachsan'.'/'.$item->id)}}"  class="active styling-edit" ui-toggle-class="">
              <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection