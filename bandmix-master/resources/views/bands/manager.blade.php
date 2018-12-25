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
                <form class="form-inline search-form">
                    <div class="form-group" style="margin-left: 54%">
                        {{--<input type="hidden" name="member_id" value="{{ $bands->member_id }}">--}}
                        <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm" aria-label="Search" style="width: 30%">
                        <select class="form-control select-op" name="search_location">
                            <option value="" selected>Địa điểm</option>
                            @foreach($locations as $location)
                                <option {{ $location->id == request()->get('search_location') ? 'selected' : '' }} value="{{ $location->id }}" >{{ $location->name }}</option>
                            @endforeach
                        </select>
                        <select class="form-control select-op" name="search_genre">
                            <option value="" selected>Thể loại</option>
                            @foreach($genres as $genre)
                                <option {{ $genre->id == request()->get('search_genre') ? 'selected' : '' }} value="{{ $genre->id }}" >{{ $genre->name }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-default searchA ">Tìm kiếm</button>
                    </div>
                    {{--<p class="event_count">Tìm thấy {{count($events_search)}} sản phẩm</p>--}}

                </form>

            </div>
            {{--<div class=" row">--}}

                {{--<div class=" searchE">--}}
                    {{--<select class="form-control">--}}
                        {{--<option selected>Địa điểm hoạt động</option>--}}
                        {{--<option>Quận Hoàn Kiếm</option>--}}
                        {{--<option>Quận Hai Bà Trưng</option>--}}
                        {{--<option>Quận Đống Đa</option>--}}
                        {{--<option>Quận Tây Hồ</option>--}}
                        {{--<option>Quận Cầu Giấy</option>--}}
                        {{--<option>Quận Thanh Xuân</option>--}}
                        {{--<option>Quận Hoàng Mai</option>--}}
                        {{--<option>Quận Long Biên</option>--}}
                        {{--<option>Huyện Từ Liêm</option>--}}
                        {{--<option>Huyện Thanh Trì</option>--}}
                        {{--<option>Huyện Gia Lâm</option>--}}
                        {{--<option>Huyện Đông Anh</option>--}}
                        {{--<option>Huyện Sóc Sơn</option>--}}
                        {{--<option>Quận Hà Đông</option>--}}
                        {{--<option>Thị xã Sơn Tây</option>--}}
                        {{--<option>Huyện Ba Vì</option>--}}
                        {{--<option>Huyện Phúc Thọ</option>--}}
                        {{--<option>Huyện Thạch Thất</option>--}}
                        {{--<option>Huyện Quốc Oai</option>--}}
                        {{--<option>Huyện Chương Mỹ</option>--}}
                        {{--<option>Huyện Đan Phượng</option>--}}
                        {{--<option>Huyện Hoài Đức</option>--}}
                        {{--<option>Huyện Thanh Oai</option>--}}
                        {{--<option>Huyện Mỹ Đức</option>--}}
                        {{--<option>Huyện Ứng Hoà</option>--}}
                        {{--<option>Huyện Thường Tín</option>--}}
                        {{--<option>Huyện Phú Xuyên</option>--}}
                        {{--<option>Huyện Mê Linh</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
                {{--<div class=" searchE">--}}
                    {{--<select class="form-control">--}}
                        {{--<option selected>Thể Loại</option>--}}
                        {{--<option>Rock</option>--}}
                        {{--<option>Pop</option>--}}
                        {{--<option>Dân ca</option>--}}
                    {{--</select>--}}
                {{--</div>--}}
                {{--<div class=" searchE">--}}
                    {{--<div class="input-group md-form form-sm form-1 pl-0" >--}}
                        {{--<input class="form-control my-0 py-1" type="text" placeholder="Tìm tên Ban Nhạc" aria-label="Search">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="searchE">--}}
                    {{--<button type="button" class="btn btn-primary" style="float: right;">Tìm kiếm--}}
                    {{--</button>--}}

                {{--</div>--}}
            {{--</div>--}}
            <div class="row">
                @foreach($bands as $band)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="hovereffect">
                            <img class="img-responsive" src="{{url($band->avatar)}}" alt="">

                            <div class="overlay">
                                <p>
                                    Đây là ban nhạc được đánh giá cao, quy tụ nhiều nhân tài nghệ sĩ tại Hà Nội
                                </p>
                                <a class="info" href="{{url('/bands/'.$band->slug)}}">Chi tiết</a>
                            </div>
                        </div>
                        <div class="overLayB">
                            <h4>{{$band->name}}</h4>
                            <a href="{{route('bands.delete',[$band->id])}}" class="btn btn-danger " style="width: 100%">
                                <i class="fa fa-trash-o"></i> Xoá
                            </a>
                        </div>
                        <div class="iconDelete">

                        </div>

                    </div>
                    {{--<form action="{{route('bands.destroy',$band->id)}}" method="delete">--}}
                        {{--{{csrf_field()}}--}}
                        {{--<button type="submit" id="btn-delete" class="btn btn-danger" >Xóa ban nhạc</button>--}}
                    {{--</form>--}}


                @endforeach

            </div> <!-- row -->

        </div> <!-- container -->
    </div>

@endsection
{{--@push('footer')--}}
    {{--<script type="text/javascript" src="{{url('js/main.js')}}"></script>--}}
    {{--<script type="text/javascript" src="{{url('js/avatar.js')}}"></script>--}}
    {{--<script>--}}
        {{--$(document).ready(function () {--}}

            {{--$(document).on('click','#btn-delete',function (event) {--}}
                {{--// confirm('cos xoa hay khong');--}}

                {{--var form = $(this).parent('form');--}}
                {{--event.preventDefault();--}}

                {{--swal({--}}
                    {{--title: "Bạn có chắc chắn muốn xóa ?",--}}
                    {{--text: "Một khi đã xóa thì không thể lấy lại dữ liệu",--}}
                    {{--icon: "warning",--}}
                    {{--buttons: true,--}}
                    {{--dangerMode: true,--}}
                {{--})--}}
                    {{--.then((willDelete) => {--}}
                        {{--if (willDelete) {--}}
                            {{--form.submit();--}}
                        {{--}--}}
                    {{--});--}}
            {{--});--}}

            {{--// $('.btn-delete').click(function () {--}}
            {{--//     alert();--}}
            {{--// });--}}
        {{--});--}}
    {{--</script>--}}
{{--@endpush--}}