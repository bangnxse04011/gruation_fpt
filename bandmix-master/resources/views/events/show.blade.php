@extends('layouts.master')
@section('content')
    <br/>
    <br/>
    <br/>
    <div class="card-outside">
        <div class="cart_status row">
            <div class="col-sm-3 menu_left">
                <div class="avatar_user">
                    <div>
                        <p>
                            <img src="/{{ $event->avatar }}" >
                        </p>
                    </div>
                    <div class="textUser">
                        <div>
                            <label><h4> {{ $event->name }} </h4>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="change-user-infor">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="detailEvent.html"> <label class="pointer-user">Thông tin Sự Kiện</label></a>
                            </div>
                        </div>
                        <div class="menu-child">
                            <a href="detailEvent.html"> <label class="pointer-user">Giới Thiệu</label></a>
                        </div>
                        <div class="menu-child">
                            <a href="infoDetail.html"><label class="pointer-user">Thông tin liên hệ</label></a>
                        </div>
                    </div>
                    <div class="lesson-menu">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="product.html"> <label class="pointer-user">Một số hình ảnh</label></a>
                            </div>
                            <a href="infoDetail.html"><label class="pointer-user">Mua vé</label></a>
                        </div>
                    </div>
                </div>
            </div>

            <!--user information-->
            <div class="menu-right-chgpass">
                <div class="col-sm-12">
                    <div>
                        <div>
                            <strong><label>Giới Thiệu</label></strong>
                        </div>
                        <div class="textChgPass">
                            <label>{{ $event->description }}</label>
                        </div>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="POST"> <input type="hidden" name="_token"
                                                                                 value="l6eIIFcNCFAwOP5i0q7D0Y8OtLmacnsja5pqPCf3">
                        <div class="second-part-chgpass row">

                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label> Tên Sự Kiện :</label>
                                    </div>
                                    <div class=" col-sm-5 input-with-content">
                                        <label> {{$event->name}} </label>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Ngày diễn ra :</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{ $event->time }}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Giá vé :</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{ $event->price }} </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Địa điểm tổ chức:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{ $event->location }}</label>
                                    </div>
                                </div>
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label> Tên Sự Kiện :</label>
                                </div>
                                <div class=" col-sm-5 input-with-content">
                                    <label> {{ $event->name }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Ngày diễn ra :</label>
                                </div>
                                <div class=" col-sm-5 input-with-content">
                                    <label>{{ $event->date }}</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Thời gian diễn ra :</label>
                                </div>
                                <div class=" col-sm-5 input-with-content">
                                    <label>{{ $event->time }}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Mức Lương:</label>
                                </div>
                                <div class=" col-sm-5 input-with-content">
                                    <label>{{ $event->salary }} </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Địa điểm tổ chức:</label>
                                </div>
                                <div class=" col-sm-5 input-with-content">
                                    <label>{{ $event->location_detail }}</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Các tiết mục tiêu biểu: </label>
                                </div>
                                @foreach($event->bands as $item)
                                <div class=" col-sm-5 input-with-content">
                                    <label>{{ $item->pivot->act}}</label>
                                    <br/>
                                </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Mô Tả Chi Tiết:</label>
                                </div>
                            </div>
                            <div class=" col-sm-8 input-with-content">
                                <label>{{ $event->detail }}</label>
                            </div>
                        </div>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="second-part-chgpass row">

                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Số Lượng Vé Còn:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>200</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Giá vé:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>90.000 VND</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Mua Vé:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <input type="number" class="form-control" name="fullName">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Thành Tiền:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>90.000 VND</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class=" col-sm-6 input-with-content">
                                        <button type="submit" class="btn btn-danger">Mua vé</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Mô Tả Chi Tiết:</label>
                                    </div>

                                </div>
                                <div class=" col-sm-8 input-with-content">
                                    <label><br>
                                        {{ $event->detail }}
                                    </label>
                                </div>
                                    <div class=" col-sm-5 input-with-content">
                                        <button type="submit" class="btn btn-danger">Mua vé</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="stars-bottom-comment">
                                        <!-- <input id="input-1" name="input-1" class="rating rating-loading" data-min="0" data-max="5" data-step="0.1" value="2"> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--END user information-->

        </div>
    </div>
@endsection