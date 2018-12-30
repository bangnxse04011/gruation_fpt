@extends('layouts.master')
@section('content')
            <div class="cart_status row" style="padding: 10px 0">
                <div class="col-sm-3 menu_left">
                    <div class="avatar_user">
                        <div style="width: 250px; height: 200px;">
                            <p>
                                <img src="{{url($band->avatar)}}">
                            </p>
                        </div>
                        <div class="textUser">
                            <div>
                                <label><h4> {{$band->name}} </h4>
                                </label>
                            </div>
                        </div>
                    </div>
                    @if($band->member_id === Auth::id())
                    <div class="btn-edit" style="display: flex; justify-content: center" >
                        <a href="{{route('bands.edit',$band->id)}}"><button id="band-edit-btn" class="btn btn-default"><i class="fa fa-pencil"></i> Chỉnh Sửa</button></a>
                    </div>
                    @endif
                    <div>
                        <div class="change-user-infor">
                            <div class="row">
                                <div class="col-sm-2">
                                    <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <a href="{{route('bands.show',$band->slug)}}"> <label class="pointer-user">Thông tin Ban Nhạc</label></a>
                                </div>
                            </div>
                        </div>
                        <div class="change-user-infor">
                            <div class="row">
                                <div class="col-sm-2">
                                    <i class="fa fa-line-chart" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <a href="achievement.html"> <label class="pointer-user">Thành Tựu</label></a>
                                </div>
                            </div>
                        </div>
                        <div class="lesson-menu">
                            <div class="row">
                                <div class="col-sm-2">
                                    <i class="fa fa-book" aria-hidden="true"></i>
                                </div>
                                <div>
                                    <a href="product.html"> <label class="pointer-user">Sản Phẩm </label><label for=""> ( 0 )</label></a>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: 20px; display: flex; justify-content: center; width: 100%;" >


                        </div>
                    </div>
                </div>
                <!--user information-->
                <div class="menu-right-chgpass">
                    <div class="col-sm-12">
                        <div class="second-part-chgpass row">
                            <div class="col-sm-12">
                                <div class="col-sm-5 input-with-label">
                                    <label>Giới thiệu</label>
                                </div>
                                <div class=" col-sm-12 input-with-content">
                                    <label>{{ $band->description}}</label>
                                </div>
                            </div>
                            <hr>
                            <div class="col-sm-7">
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label> Tên Ban Nhạc :</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label> {{$band->name}} </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Ngày Thành Lập :</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{$band->doc}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Số Lượng Thành Viên :</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{$band->number_of_mem}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Địa điểm hoạt động:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{$band->location->name}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 input-with-label">
                                        <label>Thể Loại chơi:</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                            <label>{{$band->genres->name}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Thành tựu:</label>
                                    </div>
                                </div>
                                <div class=" col-sm-8 input-with-content">
                                    <label>{{$band->achievements}}</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Mô Tả Chi Tiết:</label>
                                    </div>
                                    <div class=" col-sm-12 input-with-content">
                                        <label>{!! $band->about !!}</label>
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
                    </div>
                </div>
                <!--END user information-->
            </div>
@endsection
@push('footer')
    <script type="text/javascript" src="{{url('js/main.js')}}"></script>
    <script type="text/javascript" src="{{url('js/avatar.js')}}"></script>
    <script>
        $(document).ready(function () {

            $(document).on('click','#btn-delete',function (event) {
                // confirm('cos xoa hay khong');

                var form = $(this).parent('form');
                event.preventDefault();

                swal({
                    title: "Bạn có chắc chắn muốn xóa ?",
                    text: "Một khi đã xóa thì không thể lấy lại dữ liệu",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });

            // $('.btn-delete').click(function () {
            //     alert();
            // });
        });
    </script>
@endpush