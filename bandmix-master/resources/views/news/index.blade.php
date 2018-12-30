@extends('layouts.master')
@section('content')
    <section>
        <div class="container">
            <div class="title">
                <h1>Tin Tức</h1>
                <hr>
            </div>
            <!--bigNews-->
            <div class="row">
                {{--@foreach( $news->getAttributes() as $new)--}}
                <div class="col-xs-18 col-sm-6 col-md-12">
                    <a href=""><img src="{{ url( $news->avatar ) }}" class="img-resposive" style="width: 100%; height: 45%;">
                    </a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
						<span class="stext-105 cl3">
                            <strong><a href="{{ route('news.show',$news->id) }}"><h3>{{ $news->title }}</h3></a></strong>
						</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> {{ $news->category->name }} |</label>
                            <label> {{ $news->created_at->format('Y-m-d') }}  |</label>
                        </div>
                        <div class="sapo">
                            <p>{{ substr($news->description,0,400).'......' }}
                                <a href="{{ route('news.show',$news->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
                    {{--@endforeach--}}
            </div><!--/row-->
            <div class="row">
                <div class="col-xs-18 col-sm-6 col-md-6">
                    <a href=""><img src="{{ url( $news1->avatar) }}" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews"
                        <span class="stext-105 cl3">
                        <strong><a href="{{ route('news.show',$news1->id) }}"><h4>{{ $news1->title }}</h4></a></strong>
						</span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> {{ $news1->category->name }} |</label>
                        <label> {{ $news1->created_at->format('Y-m-d') }}  |</label>
                    </div>
                    <div class="sapo">
                        <p>{{ substr($news1->description,0,400).'......' }}
                            <a href="{{ route('news.show',$news1->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-18 col-sm-6 col-md-6">
                <a href=""><img src="{{ url( $news2->avatar ) }}" class="img-resposive"></a>
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 5px">
                    </div>
                </div>
                <div class="caption">
                    <div class="titleNews">
                        <span class="stext-105 cl3">
                        <strong><a href="{{ route('news.show',$news2->id) }}"><h4>{{ $news1->title }}</h4></a></strong>
                        </span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> {{ $news2->category->name }} |</label>
                        <label> {{ $news2->created_at->format('Y-m-d') }} |</label>
                    </div>
                    <div class="sapo">
                        <p>{{ substr($news2->description,0,400).'......' }}
                            <a href="{{ route('news.show',$news2->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-18 col-sm-6 col-md-4">
                <a href=""><img src="{{ url( $news3->avatar) }}" class="img-resposive"></a>
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 5px">
                    </div>
                </div>
                <div class="caption">
                    <div class="titleNews">
							<span class="stext-105 cl3">
								<strong><a href="{{ route('news.show',$news3->id) }}">{{ $news3->title }}</a></strong>
							</span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> {{ $news3->category->name }} |</label>
                        <label> {{ $news3->created_at->format('Y-m-d') }} |</label>
                    </div>
                    <div class="sapo">
                        <p>{{ substr($news3->description,0,400).'......' }}
                            <a href="{{ route('news.show',$news3->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-18 col-sm-6 col-md-4">
                <div>
                    <a href=""><img src="{{ url( $news4->avatar) }}" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
								<span class="stext-105 cl3">
									<strong><a href="{{ route('news.show',$news4->id) }}">{{ $news4->title }}</a></strong>
								</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> {{ $news4->category->name }} |</label>
                            <label> {{ $news4->created_at->format('Y-m-d') }} |</label>
                        </div>
                        <div class="sapo">
                            <p>{{ substr($news4->description,0,400).'......' }}
                                <a href="{{ route('news.show',$news4->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-18 col-sm-6 col-md-4">
                <div>
                    <a href=""><img src="{{ url( $news5->avatar) }}" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
								<span class="stext-105 cl3">
									<strong><a href="{{ route('news.show',$news5->id) }}">{{ $news5->title }}</a></strong>
								</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> {{ $news5->category->name }} |</label>
                            <label> {{ $news5->created_at->format('Y-m-d') }} |</label>
                        </div>
                        <div class="sapo">
                            <p>{{ substr($news5->description,0,400).'......' }}
                                <a href="{{ route('news.show',$news5->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-18 col-sm-6 col-md-4">
                <div>
                    <a href=""><img src="{{ url( $news6->avatar) }}" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
								<span class="stext-105 cl3">
									<strong><a href="{{ route('news.show',$news6->id) }}">{{ $news6->title }}</a></strong>
								</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> {{ $news6->category->name }} |</label>
                            <label> {{ $news6->created_at->format('Y-m-d') }} |</label>
                        </div>
                        <div class="sapo">
                            <p>{{ substr($news6->description,0,400).'......' }}
                                <a href="{{ route('news.show',$news6->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--/////////-->
        <div class="row">
            {{--@foreach($news_middle1 as $middle1)--}}
            {{--<div class="col-xs-18 col-sm-6 col-md-4">--}}
                {{--<a href=""><img src="{{ url( $middle1->avatar) }}" class="img-resposive"></a>--}}
                {{--<div class="row">--}}
                    {{--<div class="col-sm-12" style="margin-top: 5px">--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="caption">--}}
                    {{--<div class="titleNews">--}}
						{{--<span class="stext-105 cl3">--}}
							{{--<strong><a href="{{ route('news.show',$middle1->id) }}">{{ $middle1->tittle }}</a></strong>--}}
						{{--</span>--}}
                    {{--</div>--}}
                    {{--<div class="infoNews">--}}
                        {{--<label>Bởi: Admin |</label>--}}
                        {{--<label> {{ $middle1->category->name }} |</label>--}}
                        {{--<label> {{ $middle1->created_at->format('Y-m-d') }}|</label>--}}
                    {{--</div>--}}
                    {{--<div class="sapo">--}}
                        {{--<p>{{ substr($middle->description,0,50).'...' }}--}}
                            {{--<a href="{{ route('news.show',$middle1->id) }}" class="fa fa-info-circle"> Đọc tiếp </a></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--@endforeach--}}

        {{--@foreach($news_end as $end)--}}
            {{--<div class="col-xs-18 col-sm-6 col-md-4">--}}
                {{--<div>--}}
                    {{--<a href=""><img src="{{ url( $end->avatar) }}" class="img-resposive"></a>--}}
                    {{--<div class="row">--}}
                        {{--<div class="col-sm-12" style="margin-top: 5px">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="caption">--}}
                        {{--<div class="titleNews">--}}
							{{--<span class="stext-105 cl3">--}}
								{{--<strong><a href="{{ route('news.show',$end->id) }}">{{ $end->tittle }}</a></strong>--}}
							{{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="infoNews">--}}
                            {{--<label>Bởi: Admin |</label>--}}
                            {{--<label> {{ $end->category->name }} |</label>--}}
                            {{--<label> {{ $end->created_at->format('Y-m-d') }} |</label>--}}
                        {{--</div>--}}
                        {{--<div class="sapo">--}}
                            {{--<p>Gần đây nhóm nhạc nhới xuất hiện ABC đã trở thành mối quan tâm của không ít các fan coffee ascoustic...--}}
                                {{--<a href="{{ route('news.show',$end->id) }}l" class="fa fa-info-circle"> Đọc tiếp </a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--@endforeach--}}
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