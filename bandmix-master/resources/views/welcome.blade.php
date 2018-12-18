
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
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/band/a.jpg" alt="">
                        <div class="overlay">
                            <h2>Bức Tường Band</h2>
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
                            <a class="info" href="detailBand.html">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/band/b.jpg" alt="">
                        <div class="overlay">
                            <h2>Bức Tường Band</h2>
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
                            <a class="info" href="detailBand.html">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/band/c.jpg" alt="">
                        <div class="overlay">
                            <h2>Bức Tường Band</h2>
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
                            <a class="info" href="detailBand.html">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffect">
                        <img class="img-responsive" src="images/band/c.jpg" alt="">
                        <div class="overlay">
                            <h2>Bức Tường Band</h2>
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
                            <a class="info" href="detailBand.html">Chi tiết</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Event -->
            <div class="title">
                <h2>Top Sự Kiện</h2>
                <hr>
            </div>
            <div class="row">
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffectE">
                        <img class="img-responsive" src="images/event/sukien1.jpg" alt="">
                        <div class="overlayE">
                            <h2>Liên Hoan Âm nhạc</h2>
                            <p >
                                Sự kiện vô cùng lớn ! Diễn ra trong suốt 3 ngày tạ trung tâm hội nghị quốc gia VN
                            </p>
                            <a class="infoE" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffectE">
                        <img class="img-responsive" src="images/event/sukien2.jpg" alt="">
                        <div class="overlayE">
                            <h2>Liên Hoan Âm nhạc</h2>
                            <p >
                                Sự kiện vô cùng lớn ! Diễn ra trong suốt 3 ngày tạ trung tâm hội nghị quốc gia VN
                            </p>
                            <a class="infoE" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffectE">
                        <img class="img-responsive" src="images/event/sukien3.jpg" alt="">
                        <div class="overlayE">
                            <h2>Liên Hoan Âm nhạc</h2>
                            <p >
                                Sự kiện vô cùng lớn ! Diễn ra trong suốt 3 ngày tạ trung tâm hội nghị quốc gia VN
                            </p>
                            <a class="infoE" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-18 col-sm-6 col-md-3">
                    <div class="hovereffectE">
                        <img class="img-responsive" src="images/event/sukien3.jpg" alt="">
                        <div class="overlayE">
                            <h2>Liên Hoan Âm nhạc</h2>
                            <p >
                                Sự kiện vô cùng lớn ! Diễn ra trong suốt 3 ngày tạ trung tâm hội nghị quốc gia VN
                            </p>
                            <a class="infoE" href="#">Chi tiết</a>
                        </div>
                    </div>
                </div>

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
