@extends('layouts.master')
@push('header')
    <link rel="stylesheet" href="{{url('css/member.css')}}">
@endpush
@section('content')
    <div class="card-outside">
        <form class="cart_status row" action="{{route('members.update',$member->id)}}" method="Post">
            {{csrf_field()}}
            <div class="col-sm-3 menu_left">
                <div class="avatar-upload">
                    <div class="avatar-edit">
                        <input  name="avatar" type='file' id="imageUpload" accept=".png, .jpg, .jpeg" />
                        <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview" style="width: 250px; height: 250px;">
                        <div id="imagePreview" style="background-image: url({{url($member->avatar)}});">
                        </div>
                    </div>
                </div>
                <div class="textUser" style="">
                    <div>
                        <label>
                            <h4>{{$member->name}}</h4>
                        </label>
                    </div>
                </div>
                <div>
                    <div class="change-user-infor">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="{{route('members.index', $member->id)}}"><label class="pointer-user">Thông tin cá nhân</label></a>
                            </div>
                        </div>
                        <div class="menu-child">
                            <a href="{{route('members.edit', $member->id)}}"> <label  class="pointer-user">Chỉnh sửa thông tin</label></a>
                        </div>
                        <div class="menu-child">
                            <a href="changePassword.html"><label class="pointer-user">Đổi mật khẩu</label></a>
                        </div>
                    </div>
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
                        <div class="second-part-chgpass row">
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Họ và tên</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <input id="fullName" type="text" class="form-control" name="name" placeholder="Nguyễn Quốc Đạt" value="{{$member->name}}">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Giới tính</label>
                                    </div>
                                    <div class="col-sm-6 input-with-content">
                                        <div class=" row" style="margin: 0px">
                                            <div class="radio-text">
                                                <input name="gender" value="0" type="radio">Nữ

                                            </div>
                                            <div class="radio-text">
                                                <input name="gender" value="1" checked="" type="radio">Nam
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Số điện thoại</label>
                                    </div>
                                    <div class="col-sm-6 input-with-content">
                                        <input type="text" class="form-control" name="phone_number" placeholder="" value="{{$member->phone_number}}">

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Ngày sinh</label>
                                    </div>
                                    <div class="col-sm-6 input-with-content">
                                        <input id="DOB" type="date" class="form-control" name="dob" placeholder="" value="{{$member->dob}}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Email</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <input id="email" type="text" class="form-control" value="{{$member->email}}" name="email">

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger edit-button">Lưu chỉnh sửa</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!--END user information-->
        </form>
    </div>
@endsection