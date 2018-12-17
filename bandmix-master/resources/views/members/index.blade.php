@extends('layouts.master')
@push('header')
    <link rel="stylesheet" href="{{url('css/member.css')}}">
@endpush
@section('content')
    <div class="card-outside">
        <div class="cart_status row">
            <div class="col-sm-3 menu_left">
                <div class="rounded-circle">
                    <div>
                        <p>
                            <img src="{{url($member->avatar)}}" style="height: 255px; width: 255px;">
                        </p>
                    </div>
                    <div class="textUser" style="">
                        <div>
                            <label>
                                <h4>{{$member->name}}</h4>
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
                                 <label >Thông tin cá nhân</label>
                            </div>
                        </div>
                        <div class="menu-child">
                            <a href="{{route('members.edit', $member->id)}}"> <label class="pointer-user">Chỉnh sửa thông tin</label></a>
                        </div>
                        <div class="menu-child">
                            <a href="changePassword.html"><label class="pointer-user">Đổi mật khẩu</label></a>
                        </div>
                    </div>
                    <div class="change-user-infor">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#"> <label class="pointer-user">Quản lý thanh toán</label></a>
                            </div>
                        </div>
                    </div>
                    <div class="lesson-menu">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-bell" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="#"> <label class="pointer-user">Thông báo </label><label for=""> ( 0 )</label></a>
                            </div>
                        </div>
                    </div>
>>>>>>> bandmix_v1_kybh
                </div>
            </div>
            <!--user information-->
            <div class="menu-right-chgpass">
                <div class="col-sm-12">
                    <div>
                        <div>
                            <strong><label>Tài khoản của tôi</label></strong>
                        </div>
                        <div class="textChgPass">
                            <label>Quản lí thông tin cá nhân để bảo mật tài khoản</label>
                        </div>
                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="POST">
                        <input type="hidden" name="_token" value="l6eIIFcNCFAwOP5i0q7D0Y8OtLmacnsja5pqPCf3">
                        <div class="second-part-chgpass row">
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4 input-with-label">
                                        <label>Họ và tên:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <p>{{$member->name}}</p>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 input-with-label">
                                        <label>Giới tính:</label>
                                    </div>
                                    <div class="col-sm-6 input-with-content">
                                        <p>{{$member->gender == 1 ? 'Nam' : 'Nữ'}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 input-with-label">
                                        <label>Số điện thoại:</label>
                                    </div>
                                    <div class="col-sm-6 input-with-content">
                                        <p>{{$member->phone_number}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 input-with-label">
                                        <label>Ngày sinh:</label>
                                    </div>
                                    <div class="col-sm-6 input-with-content">
                                        <p>{{$member->dob}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 input-with-label">
                                        <label>Email:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <p>{{$member->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="row">
                                    <div class="col-sm-3 input-with-label">

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