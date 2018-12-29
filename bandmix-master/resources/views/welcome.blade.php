@extends('layouts.master')
@section('content')

    <section>
        <div class="container">
            <div class="title">
                <h2>Tin Tức</h2>
                <hr>
            </div>
            <div class="row">
                @foreach($news as $new)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <a href=""><img src="{{url($new->avatar)}}" class="img-resposive"></a>
                        <div class="row">
                            <div class="col-sm-12" style="margin-top: 5px">
                            </div>
                        </div>
                        <div class="caption">
						<span class="stext-105 cl3">
							<strong><a href="">{{$new->title}}</a></strong>
						</span>
                            <p>{{$new->description}}</p>
                        </div>
                        {{--<p>{{$new->}}}</p>--}}
                    </div>
                @endforeach

                <div style="width: 100%">
                    <a style="float: right; margin-right: 15px;" href="">Xem tất cả >></a>
                </div>

            </div><!--/row-->
            <!-- Top Ban Nhạc -->
            <div class="title">
                <h2>Top Ban Nhạc</h2>
                <hr>
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
                                    {{substr($band->about,0,30).'...'}}
                                </p>
                                <a class="info" href="{{ route('bands.show',$band->id) }}">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div style="width: 100%">
                        <a style="float: right; margin-right: 15px;" href="{{ route('bands.index') }}">Xem tất cả >></a>
                    </div>
            </div>
            <!-- Top Event -->
            <div class="title">
                <h2>Top Sự Kiện</h2>
                <hr>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-xs-18 col-sm-6 col-md-3">
                        <div class="hovereffectE">
                            <img class="img-responsive" src="{{ url($event->avatar) }}" alt="">

                            <div class="overlayE">
                                <h2>{{ $event->name }}</h2>
                                <p>
                                    {{ substr($event->description,0,50).'....' }}
                                </p>
                                <a class="infoE" href="{{route('events.show', $event->id)}}">Chi tiết</a>
                            </div>
                        </div>
                        <div class="card-body relative">
                            <div class="table w-100 margin-bottom-0">

                                <a class="eventTitle" href="{{route('events.show', $event->id)}}" title="Liên Hoan Âm Nhạc" target="_blank">
                                    <h4>{{ $event->name }}</h4>
                                </a>
                            </div>
                            <div class="row">
                                <div class="table-cell">
                                    <div class="event-price w-100">
                                        <span class="color-6">Từ</span> <strong> {{ number_format($event->price) }} VNĐ</strong>
                                    </div>
                                    <div class="event-tags w-100">
									<span class="tag-venues">
										{{--<span class="tag-venue smooth-trans label-default uppercase">{{$event->locations->name}}</span>--}}
									</span>

                                    </div>
                                </div>
                                <div class="event-date">
                                    <div class="relative">
                                        <div class="date-month">
                                            {{date("F", strtotime($event->date))}}
                                        </div>
                                        <div class="date-detail">
                                            <div class="date-num color-6">
                                                {{date("d", strtotime($event->date))}}
                                            </div>
                                            <div class="date-day">
                                                {{date("D", strtotime($event->date))}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div style="width: 100%">
                        <a style="float: right; margin-right: 15px;" href="{{ route('events.index') }}">Xem tất cả >></a>
                    </div>
                {{--@foreach($events as $event)--}}
                    {{--<div class="col-xs-18 col-sm-6 col-md-3" style="height: 370px">--}}

                        {{--<div class="hovereffectE">--}}
                            {{--<img class="img-responsive" src="{{ url($event->avatar) }}" alt="">--}}
                            {{--<div class="overlayE">--}}
                                {{--<h2>{{ $event->name }}</h2>--}}
                                {{--<p>--}}
                                    {{--{{ substr($event->description,0,50).'....' }}--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--<div class="card-body relative">--}}
                            {{--<div class="table w-100 margin-bottom-0">--}}

                                {{--<a class="eventTitle" href="{{route('events.show', $event->id)}}" target="_blank">--}}
                                    {{--<h4 style="text-align: center">{{ $event->name }}</h4>--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="row">--}}
                                {{--<div class="table-cell" style="width: 170px;">--}}
                                    {{--<div class="event-price w-100">--}}
                                        {{--<span class="color-6">Gía vé :</span>--}}
                                        {{--<strong> {{ number_format($event->price) }} VNĐ</strong>--}}
                                    {{--</div>--}}
                                    {{--<div class="event-tags w-100">--}}
									{{--<span class="tag-venues">--}}
										{{--<span class="tag-venue smooth-trans label-default uppercase">{{$event->locations->name}}</span>--}}
									{{--</span>--}}

                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="event-date">--}}
                                    {{--<div class="relative">--}}
                                        {{--<div class="date-month">--}}
                                            {{--{{date("F", strtotime($event->date))}}--}}
                                        {{--</div>--}}
                                        {{--<div class="date-detail">--}}
                                            {{--<div class="date-num color-6">--}}
                                                {{--{{date("d", strtotime($event->date))}}--}}
                                            {{--</div>--}}
                                            {{--<div class="date-day">--}}
                                                {{--{{date("D", strtotime($event->date))}}--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
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
    </section>
@endsection
