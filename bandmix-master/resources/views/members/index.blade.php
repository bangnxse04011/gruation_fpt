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
                        <div style="text-align: center">
                            <h4 >{{$member->name}}</h4>
                        </div>
                    </div>
                </div>
                @if($member->id == Auth::id())
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
                            <a href="{{route('members.edit', $member->id)}}"> <label class="pointer-user" >Chỉnh sửa thông tin</label></a>
                        </div>
                        <div class="menu-child">
                            <a href="#"><label class="pointer-user" id="changePass">Đổi mật khẩu</label></a>
                        </div>
                    </div>
                    <div class="change-user-infor">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-usd" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="{{ route('members.manageBill',$member->id) }}"> <label class="pointer-user">Quản lý thanh toán</label></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!--user information-->
            <div class="menu-right-chgpass">
                <div class="col-sm-12" id="id_info">
                    <div>
                        <div>
                            <strong><label>Tài khoản của tôi</label></strong>
                        </div>
                        <div class="textChgPass">
                            <label>Quản lí thông tin cá nhân để bảo mật tài khoản</label>
                        </div>
                    </div>
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
                </div>

                <div class="col-sm-12" id="change_pass">
                    <div>
                        <div>
                            <strong><label>Đổi mật khẩu</label></strong>
                        </div>
                        <div class="textChgPass">
                            <label>Để bảo mật tài khoản, vui lòng không chia sẻ mật khẩu với người khác</label>
                        </div>
                    </div>
                    <form id="change_Pass_Form" class="form" method="POST" action="">
                        {{ csrf_field() }}           
                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-12 msg_error_rp" style="color:red; display:none; margin_bottom:20px"></div>
                                <div class="col-sm-12 msg_success" style="color:green; display:none; margin_bottom:20px">Đổi mật khẩu thành công</div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Mật khẩu hiện tại</label>
                                </div>
                                <div class=" col-sm-6 input-with-content">
                                    <input id="old_pass" type="password" class="form-control validate[required, custom[password_Required], custom[password_Not_Spacing]]" name="old_pass" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Mật khẩu mới</label>
                                </div>
                                <div class=" col-sm-6 input-with-content">
                                    <input id="new_pass" type="password" class="form-control validate[required, custom[password_Required], custom[password_Not_Spacing]]" name="password" >
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                    <label>Nhập lại mật khẩu mới</label>
                                </div>
                                <div class=" col-sm-6 input-with-content">
                                    <input id="re_pass" type="password" class="form-control validate[required, custom[password_Required], custom[password_Not_Spacing]]" name="re_pass" >
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-8">
                            <div class="row">
                                <div class="col-sm-5 input-with-label">
                                </div>
                                <div class=" col-sm-6 input-with-content">
                                <button id="btnChangPass" type="button" class="btn btn-secondary btn-lg btn-block" data-url="{{ route('change-pass') }}">Đổi mật khẩu</button>
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