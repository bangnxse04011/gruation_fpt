@extends('layouts.master')
@push('header')
    <link rel="stylesheet" href="{{url('css/band.css')}}">
@endpush
@section('content')
    <div class="title">
        <h2>Top Ban Nhạc</h2>
        <hr>
    </div>
    <div class="title">
        <h2>Danh Sách Ban Nhạc</h2>
        <hr>
    </div>
    <div class="row">
        <form action="" class="col-sm-12">
            <div class="search-container">
                <div class="input-group md-form form-sm form-1 pl-0" >
                    <input class="form-control text" name="keyword" type="text" placeholder="Tên ban nhạc" value="{{request()->get('keyword')}}"  aria-label="Search">
                    <div class="form-group searchE">
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
                    <div class="form-group searchE">
                        <select class="form-control" name="genre">
                            <option value="">Thể Loại</option>
                            @foreach($genres as $genre)
                                <option {{ $genre->id == request()->get('genre') ? 'selected' : '' }} value="{{$genre->id}}">{{$genre->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" class="btn-search" value="Tìm kiếm">
                </div>
            </div>
        </form>

    </div>
    <div class="row">
        @foreach($bands as $band)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="hovereffect">
                    <img class="img-responsive" src="{{$band->avatar}}" alt="">
                    <div class="overlay">
                        <h2>{{$band->name}}</h2>
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
                            {{substr($band->about,0,50).'...'}}
                        </p>
                        <a class="info" href="{{route('bands.show', $band->slug)}}">Chi tiết</a>
                    </div>
                </div>
            </div>
        @endforeach
        {{$bands->links()}}
    </div>
@endsection
@push('header')
    <link rel="stylesheet" href="{{url('css/band.css')}}">
@endpush