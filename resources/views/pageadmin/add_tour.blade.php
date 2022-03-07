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
                                <form role="form" action="{{ route('addtour') }}" method="post">
                                    {{csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên tour</label>
                                    <input type="text" name="txt_tentour" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Giới thiệu </label>
                                    <input type="text" name="txt_gioithieu" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
                                        <label for="example-date-input" class="col-2 col-form-label">Ngày đi</label>
                                        <div class="col-10">
                                          <input class="form-control" type="date" name="txt_ngaydi" value="2021-08-19" id="example-date-input">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nơi khởi hành</label>
                                    <input type="text" name="txt_noikhoihanh" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-2 col-form-label">Số chỗ</label>
                                      <input class="form-control" type="number" name="txt_socho" value="1" id="example-number-input">
                                </div>
                                <div class="form-group">
                                    <label for="example-number-input" class="col-2 col-form-label">Số ngày đi</label>
                                      <input class="form-control" type="number" name="txt_songaydi" value="1" id="example-number-input">
                                </div>
                                <button type="submit" name="add_tour" class="btn btn-info">Thêm tour mới</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection