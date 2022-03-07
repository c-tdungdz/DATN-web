@extends('pageadmin.admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            CẬP NHẬT Tour
                        </header>
                        
                            <?php
                                // $message = Session::get('message');
                                // if ($message) {
                                //     echo $message;
                                //     Session::put('message',null);
                                // }
                            ?>
                            <div class="panel-body">
                            <div class="position-center">
                                <form role="form"  method="post">
                                    {{csrf_field() }}
                                    @if(isset($tour))
                                    @foreach ($tour as $item)
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên tour</label>
                                            <input type="text" name="txt_tentour" value="{{ $item->tentour }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Giới thiệu </label>
                                            <input type="text" name="txt_gioithieu" value="{{ $item->gioithieu }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
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
                                                <label for="example-date-input" value="" class="col-2 col-form-label">Ngày đi</label>
                                                <div class="col-10">
                                                  <input class="form-control" type="date" name="txt_ngaydi" value="{{ $item->ngaydi }}" id="example-date-input">
                                                </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nơi khởi hành</label>
                                            <input type="text" name="txt_noikhoihanh" value="{{ $item->noikhoihanh }}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="col-2 col-form-label">Số chỗ</label>
                                              <input class="form-control" type="number" name="txt_socho" value="{{ $item->socho }}" id="example-number-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-number-input" class="col-2 col-form-label">Số ngày đi</label>
                                              <input class="form-control" type="number" name="txt_songaydi" value="{{ $item->songaydi }}" id="example-number-input">
                                        </div>
                                    @endforeach
                                    @endif
                                <button type="submit" name="update_tour" class="btn btn-info">Cập nhật tour </button>
                            </form>
                            </div>
                        </div>
                    </section>

            </div>
@endsection