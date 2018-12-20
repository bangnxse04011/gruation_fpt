
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
                               {{$band->about}}
                            </p>
                            <a class="info" href="detailBand.html">Chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
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
                        <img class="img-responsive" src="{{$event->avatar}}" alt="">
                        <div class="overlayE">
                            <h2>{{$event->name}}</h2>
                            <p >
                                {{$event->descriptions}}
                            </p>
                            <a class="infoE" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div> <!-- row -->
            <div class="title">
                <h2>Sản phẩm nổi bật</h2>
                <hr>
            </div>
            <div class="row">

                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/hAs-l3vqaaE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7NJqUN9TClM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7NJqUN9TClM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>

                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nKcUxurCOrU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>

            </div><!--/row-->
        </div> <!-- container -->
    </section>
@endsection
