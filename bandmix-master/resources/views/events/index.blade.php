@extends('layouts.master')
@push('header')
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/loginCss.css">
@endpush
@section('content')
    <div class="container">
        <!-- Top Event -->
        <div class="title">
            <h2>Top Sự Kiện</h2>
            <hr>
        </div>
        <div class="row">
            @foreach($events as $item)
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffectE">
                        <img class="img-responsive" src="{{ $item->avatar }}" alt="">
                        <div class="overlayE">
                            <h2>{{ $item->name }}</h2>
                            <h2>{{ $item->price }}</h2>
                            {{--<h2>{{ $item->location->name }}</h2>--}}
                            <a class="infoE" href="{{ route('events.show',$item->id) }}">Chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <!-- row -->

        <!-- List Event -->
        <div class="title">
            <h2>Danh Sách Sự Kiện</h2>
            <hr>
        </div>
        <div class="row">

            <form class="form-inline search-form">
                <div class="form-group" >
                    <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm" aria-label="Search" style="width: 30%">
<<<<<<< HEAD
                    <div class="form-group" >
                        <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm" aria-label="Search" style="width: 30%">
=======
>>>>>>> bandmix_v1_kybh
                        <select class="form-control select-op" name="search_select" >
                            <option value="" selected>Giá vé</option>
                            <option {{request()->get('search_select') == 'asc' ?'selected' : ''}} value="asc">Giá: thấp->cao</option>
                            <option {{request()->get('search_select') == 'desc' ?'selected' : ''}} value="desc">Giá: cao->thấp</option>
                        </select>
                        <select class="form-control select-op" name="search_location">
                            <option value="" selected>Địa điểm</option>
                            @foreach($locations as $location)
                                <option {{ $location->id == request()->get('search_location') ? 'selected' : '' }} value="{{ $location->id }}" >{{ $location->name }}</option>
                            @endforeach

                        </select>
                        <button type="submit" class="btn btn-default searchA ">Tìm kiếm</button>
                    </div>
                    <p>Tìm thấy {{count($events_search)}} sản phẩm</p>
                </div>
            </form>

        </div>
        <div class="row">
            @foreach($events_search as $item2)
                <div class="col-xs-12 col-sm-7 col-md-4">
                    <div class="hovereffectE">
                        <img class="img-responsive" src="{{ $item2->avatar }}" alt="">

                        <div class="overlayE">
                            <h2>{{ $item2->name }}</h2>
                            <p >
                                Sự kiện vô cùng lớn ! Diễn ra trong suốt 3 ngày tạ trung tâm hội nghị quốc gia VN
                            </p>
                            <a class="infoE" href="detailEvent.html">Chi tiết</a>
                        </div>
                    </div>
                    <div class="card-body relative">
                        <div class="table w-100 margin-bottom-0" style="text-align: center;">

                            <a class="eventTitle" href="detailEvent.html" title="Liên Hoan Âm Nhạc" target="_blank">
                                <h4>Liên Hoan Âm Nhạc</h4>
                            </a>
                        </div>
                        <div class="row">
                            <div class="table-cell col-md-6">
                                <div class="event-price w-100">
                                    <span class="color-6">Từ</span> <strong> 100,000 VNĐ</strong>
                                </div>
                                <div class="event-tags w-100">
									<span class="tag-venues">
										<span class="tag-venue smooth-trans label-default uppercase">Hồ Chí Minh</span>
									</span>

                                </div>
                            </div>
                            <div class="event-date col-md-6">
                                <div class="relative">
                                    <div class="date-month">December</div>
                                    <div class="date-detail">
                                        <div class="date-num color-6">
                                            16
                                        </div>
                                        <div class="date-day">
                                            Sunday
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$events_search->links()}}
        </div> <!-- row -->
        <div class="title">
            <h2>Sản phẩm nổi bật</h2>
            <hr>
        </div>
        <div class="row">

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/hAs-l3vqaaE" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

            </div>

            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7NJqUN9TClM" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/7NJqUN9TClM" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

            </div>
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/nKcUxurCOrU" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>
        </div><!--/row-->
    </div> <!-- container -->
@endsection