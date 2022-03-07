@extends('pageadmin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            CẬP NHẬT KHÁCH SẠN
                        </header>
                            <div class="panel-body">
                            <div class="position-center">
                                <form role="form" method="post">
                                    {{csrf_field() }}
                                    @if(isset($khachsan))
                                    @foreach ($khachsan as $item)
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tên Khách sạn</label>
                                        <input type="text" name="txt_tenkhachsan" value="{{ $item->tenkhachsan }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hình ảnh</label>
                                        <input type="text" name="txt_hinhanh" value="{{ $item->hinhanh }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Giá</label>
                                        <input type="text" name="txt_gia" value="{{ $item->gia }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Giới thiệu </label>
                                        <input type="text" name="txt_gioithieu" value="{{ $item->gioithieu }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Đánh giá</label>
                                        <input type="text" name="txt_danhgia" value="{{ $item->danhgia }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Địa chỉ</label>
                                        <input type="text" name="txt_diachi"value="{{ $item->diachi }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Số điện thoại</label>
                                        <input type="text" name="txt_sdt" class="form-control" value="{{ $item->sdt }}" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>
                                    @endforeach
                                    @endif
                                <button type="submit" name="update_khachsan" class="btn btn-info">Cập nhật thông tin khách sạn </button>
                            </form>
                            </div>
                        </div>
                    </section>

            </div>
@endsection