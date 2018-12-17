@extends('layouts.master')
@section('content')
    <div style="">
        <div class="container">
            <!-- List Event -->
            <div class="title">
                <div class="type-1">
                    <div>
                        <a href="{{route('bands.create')}}" class="btn btn-1 create">
                            <span class="txt">Tạo Ban Nhạc</span>
                            <span class="round"><i class="fa fa-plus"></i></span>
                        </a>
                    </div>
                </div>
                <h2>Danh Sách Ban Nhạc</h2>
                <hr>
            </div>
            <div class=" row">
                <label class="searchE">Tìm kiếm theo : </label>
                <div class=" searchE">
                    <select class="form-control">
                        <option selected>Địa điểm hoạt động</option>
                        <option>Quận Hoàn Kiếm</option>
                        <option>Quận Hai Bà Trưng</option>
                        <option>Quận Đống Đa</option>
                        <option>Quận Tây Hồ</option>
                        <option>Quận Cầu Giấy</option>
                        <option>Quận Thanh Xuân</option>
                        <option>Quận Hoàng Mai</option>
                        <option>Quận Long Biên</option>
                        <option>Huyện Từ Liêm</option>
                        <option>Huyện Thanh Trì</option>
                        <option>Huyện Gia Lâm</option>
                        <option>Huyện Đông Anh</option>
                        <option>Huyện Sóc Sơn</option>
                        <option>Quận Hà Đông</option>
                        <option>Thị xã Sơn Tây</option>
                        <option>Huyện Ba Vì</option>
                        <option>Huyện Phúc Thọ</option>
                        <option>Huyện Thạch Thất</option>
                        <option>Huyện Quốc Oai</option>
                        <option>Huyện Chương Mỹ</option>
                        <option>Huyện Đan Phượng</option>
                        <option>Huyện Hoài Đức</option>
                        <option>Huyện Thanh Oai</option>
                        <option>Huyện Mỹ Đức</option>
                        <option>Huyện Ứng Hoà</option>
                        <option>Huyện Thường Tín</option>
                        <option>Huyện Phú Xuyên</option>
                        <option>Huyện Mê Linh</option>
                    </select>
                </div>
                <div class=" searchE">
                    <select class="form-control">
                        <option selected>Thể Loại</option>
                        <option>Rock</option>
                        <option>Pop</option>
                        <option>Dân ca</option>
                    </select>
                </div>
                <div class=" searchE">
                    <div class="input-group md-form form-sm form-1 pl-0" >
                        <input class="form-control my-0 py-1" type="text" placeholder="Tìm tên Ban Nhạc" aria-label="Search">
                    </div>
                </div>
                <div class="searchE">
                    <button type="button" class="btn btn-primary" style="float: right;">Tìm kiếm
                    </button>

                </div>
            </div>
            <div class="row">
                @foreach($bands as $band)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{url($band->avatar)}}" alt="">

                            <div class="overlay">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="stars-bottom-comment">
                                            <span class="fa fa-star  checked "></span>
                                            <span class="fa fa-star  checked "></span>
                                            <span class="fa fa-star  checked "></span>
                                            <span class="fa fa-star  checked "></span>
                                            <span class="fa fa-star "></span>
                                            <span style="color: white;"> ( 0 đánh giá)   </span>

                                        </div>
                                    </div>
                                </div>
                                <p>
                                    Đây là ban nhạc được đánh giá cao, quy tụ nhiều nhân tài nghệ sĩ tại Hà Nội
                                </p>
                                <a class="info" href="{{url('/bands/'.$band->slug)}}">Chi tiết</a>
                            </div>
                        </div>
                        <div class="overLayB">
                            <h4>{{$band->name}}</h4>
                        </div>
                        {{--<div class="iconBSED">--}}
                        {{--<a href="detailEvent.html" class="btn btn-default btnicon">--}}
                        {{--<i class="fa fa-eye"></i> Xem--}}
                        {{--</a>--}}
                        {{--<a href="editEvent.html" class="btn btn-default btnicon">--}}
                        {{--<i class="fa fa-edit" ></i> Sửa--}}
                        {{--</a>--}}
                        {{--<a href="#" class="btn btn-default btnicon">--}}
                        {{--<i class="fa fa-trash-o"></i> Xoá--}}
                        {{--</a>--}}
                        {{--</div>--}}
                    </div>
                @endforeach

            </div> <!-- row -->

        </div> <!-- container -->
    </div>

@endsection