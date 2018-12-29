@extends('layouts.master')
@section('content')
    {{--<section>--}}
        {{--<div class="container">--}}
            {{--<div class="title">--}}
                {{--<h2>Tin Tức</h2>--}}
                {{--<hr>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--@foreach($news as $new)--}}
                    {{--<div class="col-xs-18 col-sm-6 col-md-3">--}}
                        {{--<a href="#"><img src="{{url($new->avatar)}}" class="img-resposive"></a>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-sm-12" style="margin-top: 5px">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="caption">--}}
						{{--<span class="stext-105 cl3">--}}
							{{--<strong><a href="{{ route('news.show',$new->id) }}">{{$new->title}}</a></strong>--}}
						{{--</span>--}}
                            {{--<p>{{$new->description}}</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--@endforeach--}}
            {{--</div>--}}
            {{--{{$news->links()}}--}}
        {{--</div>--}}
    {{--</section>--}}
{{--@endsection--}}
@section('content')
    <section>
        <div class="container">
            <div class="title">
                <h1>Tin Tức</h1>
                <hr>
            </div>
            <!--bigNews-->
            <div class="row">
                @foreach( $news_top as $top)
                <div class="col-xs-18 col-sm-6 col-md-12">
                    <a href=""><img src="{{ url( $top->avatar ) }}" class="img-resposive" style="width: 100%; height: 45%;">
                    </a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
						<span class="stext-105 cl3">
                            <strong><a href="{{ route('news.show',$top->id) }}"><h3>{{ $top->title }}</h3></a></strong>
						</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> {{ $top->category->name }} |</label>
                            <label> {{ $top->created_at->format('Y-m-d') }}  |</label>
                        </div>
                        <div class="sapo">
                            <p>{{ substr($top->description,0,400).'......' }}
                                <a href="{{ route('news.show',$top->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
                    @endforeach
            </div><!--/row-->
            <div class="row">
                @foreach( $news_middle as $middle )
                <div class="col-xs-18 col-sm-6 col-md-6">
                    <a href=""><img src="{{ url( $middle->avatar) }}" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews"
                        <span class="stext-105 cl3">
                        <strong><a href="{{ route('news.show',$middle->id) }}"><h4>{{ $middle->tittle }}</h4></a></strong>
						</span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> {{ $middle->category->name }} |</label>
                        <label> {{ $middle->created_at->format('Y-m-d') }} |</label>
                    </div>
                    <div class="sapo">
                        <p>{{ substr($middle->description,0,200).'...' }}
                            <a href="{{ route('news.show',$middle->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
                    @endforeach
            </div>

        </div>
        <!--/////////-->
        <div class="row">
            @foreach($news_middle1 as $middle1)
            <div class="col-xs-18 col-sm-6 col-md-4">
                <a href=""><img src="{{ url( $middle1->avatar) }}" class="img-resposive"></a>
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 5px">
                    </div>
                </div>
                <div class="caption">
                    <div class="titleNews">
						<span class="stext-105 cl3">
							<strong><a href="{{ route('news.show',$middle1->id) }}">{{ $middle1->tittle }}</a></strong>
						</span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> {{ $middle1->category->name }} |</label>
                        <label> {{ $middle1->created_at->format('Y-m-d') }}|</label>
                    </div>
                    <div class="sapo">
                        <p>{{ substr($middle->description,0,50).'...' }}
                            <a href="{{ route('news.show',$middle1->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
            </div>
        @endforeach

        @foreach($news_end as $end)
            <div class="col-xs-18 col-sm-6 col-md-4">
                <div>
                    <a href=""><img src="{{ url( $end->avatar) }}" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
							<span class="stext-105 cl3">
								<strong><a href="{{ route('news.show',$end->id) }}">{{ $end->tittle }}</a></strong>
							</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> {{ $end->category->name }} |</label>
                            <label> {{ $end->created_at->format('Y-m-d') }} |</label>
                        </div>
                        <div class="sapo">
                            <p>Gần đây nhóm nhạc nhới xuất hiện ABC đã trở thành mối quan tâm của không ít các fan coffee ascoustic...
                                <a href="{{ route('news.show',$end->id) }}l" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div><!--/row-->

        <div class="contact row">
            <div class="col-md-8">
                <div class="well well-sm contactleft">

                    <h5> Liên hệ với chúng tôi :</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Họ và Tên" required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="name" placeholder="Địa chỉ Email" required="required" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" placeholder="Tiêu đề Thư" required="required" />
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
                                                  placeholder="Nội dung"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Gửi </button>
                            </div>
                            <div class="">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <legend><span class="glyphicon glyphicon-globe"></span>Địa Chỉ : </legend>
                    <address>
                        <strong> BandMix</strong><br>
                        Đại học FPT, khu công nghệ cao Hoà Lạc<br>
                        Km 29, Đại Lộ Thăng Long, xã Thạch Hoà, huyện Thạch Thất, TP Hà Nội<br>
                        <strong>Phone :</strong>
                        (+84) 0123456789 <br>
                        <strong>Email:</strong>
                        <a href="mailto:#">bandmix@gmail.com</a>
                    </address>

                </form>
            </div>

        </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @endsection