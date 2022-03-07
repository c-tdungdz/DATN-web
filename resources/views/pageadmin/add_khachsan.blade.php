@extends('pageadmin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM TOUR MỚI
                        </header>
                        <div class="panel-body">
                            <?php
                                // $message = Session::get('message');
                                // if ($message) {
                                //     echo $message;
                                //     Session::put('message',null);
                                // }
                            ?>
                            <div class="position-center">
                                <form role="form" action="{{ route('addkhachsan') }}" method="post">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Khách sạn</label>
                                    <input type="text" name="txt_tenkhachsan" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="text" name="txt_hinhanh" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá</label>
                                    <input type="text" name="txt_gia" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Giới thiệu </label>
                                    <input type="text" name="txt_gioithieu" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Đánh giá</label>
                                    <input type="text" name="txt_danhgia" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ</label>
                                    <input type="text" name="txt_diachi" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Số điện thoại</label>
                                    <input type="text" name="txt_sdt" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <button type="submit" name="add_tour" class="btn btn-info">Thêm khách sạn mới</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection