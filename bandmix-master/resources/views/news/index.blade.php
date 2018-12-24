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
                <div class="col-xs-18 col-sm-6 col-md-12">
                    <a href=""><img src="images/news/BTS.jpg" class="img-resposive" style="width: 100%">
                    </a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
						<span class="stext-105 cl3">
                            <strong><a href=""><h3>Fan hồi hộp chờ đón nhóm nhạc BTS tới Việt Nam vào ngày 1/2/2019 tới đây</h3></a></strong>
						</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> FanBand |</label>
                            <label> 20-12-2019 |</label>
                        </div>
                        <div class="sapo">
                            <p>Thông tin về chương trình đại nhạc hội quy tụ hàng loạt ngôi sao đình đám Hàn Quốc sắp diễn ra tại Việt Nam đang khiến fan Kpop không khỏi hoang mang và chờ đợi...
                                <a href="newdetail.html" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div><!--/row-->
            <div class="row">
                <div class="col-xs-18 col-sm-6 col-md-6">
                    <a href=""><img src="images/news/365.jpg" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews"
                        <span class="stext-105 cl3">
                        <strong><a href=""><h4>365 trở lại sân khấu sau nhiều ngày vắng bóng</h4></a></strong>
						</span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> FanBand |</label>
                        <label> 20-12-2019 |</label>
                    </div>
                    <div class="sapo">
                        <p>Trước khi tan rã, 365 là một trong những nhóm nhạc thần tượng đình đám. Sau vài tháng hoạt động riêng, nhóm đã có 1 liveshow tái hợp cực ấn tượng trong dịp đầu năm 2017...
                            <a href="newdetail.html" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-18 col-sm-6 col-md-6">
                <a href=""><img src="images/news/nhomnhac.jpg" class="img-resposive"></a>
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 5px">
                    </div>
                </div>
                <div class="caption">
                    <div class="titleNews">
                        <span class="stext-105 cl3">
                        <strong><a href=""><h4>Việt Nam ngày càng xuất hiện thêm nhiều nhóm nhạc mới</h4></a></strong>
                        </span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> FanBand |</label>
                        <label> 20-12-2019 |</label>
                    </div>
                    <div class="sapo">
                        <p>Thị trường âm nhạc Việt Nam đang chuyển mình khi xuất hiện nhiều ban nhạc mới ra đời...
                            <a href="newdetail.html" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--/////////-->
        <div class="row">
            <div class="col-xs-18 col-sm-6 col-md-4">
                <a href=""><img src="images/news/BTS.jpg" class="img-resposive"></a>
                <div class="row">
                    <div class="col-sm-12" style="margin-top: 5px">
                    </div>
                </div>
                <div class="caption">
                    <div class="titleNews">
						<span class="stext-105 cl3">
							<strong><a href="">Fan hồi hộp chờ đón nhóm nhạc BTS tới Việt Nam vào ngày 1/2/2019 tới đây</a></strong>
						</span>
                    </div>
                    <div class="infoNews">
                        <label>Bởi: Admin |</label>
                        <label> FanBand |</label>
                        <label> 20-12-2019 |</label>
                    </div>
                    <div class="sapo">
                        <p>Đây là lần thứ 3 nhóm nhạc BTS tới Việt Nam....
                            <a href="newdetail.html" class="fa fa-info-circle"> Đọc tiếp </a></p>
                    </div>
                </div>
            </div>

            <div class="col-xs-18 col-sm-6 col-md-4">
                <div>
                    <a href=""><img src="images/news/365.jpg" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
							<span class="stext-105 cl3">
								<strong><a href="">365 trở lại sân khấu sau nhiều ngày vắng bóng</a></strong>
							</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> FanBand |</label>
                            <label> 20-12-2019 |</label>
                        </div>
                        <div class="sapo">
                            <p>Sau nhiều nghi vân tan giả, 365 đã trở lại sân khấu vào hôm qua...
                                <a href="newdetail.html" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-18 col-sm-6 col-md-4">
                <div>
                    <a href=""><img src="images/news/nhomnhac.jpg" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
							<span class="stext-105 cl3">
								<strong><a href="">Việt Nam ngày càng xuất hiện thêm nhiều nhóm nhạc mới</a></strong>
							</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> FanBand |</label>
                            <label> 20-12-2019 |</label>
                        </div>
                        <div class="sapo">
                            <p>Thị trường âm nhạc Việt Nam đang chuyển mình khi xuất hiện nhiều ban nhạc mới ra đời...
                                <a href="newdetail.html" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-18 col-sm-6 col-md-4">
                <div>
                    <a href=""><img src="images/news/bannhac.jpg" class="img-resposive"></a>
                    <div class="row">
                        <div class="col-sm-12" style="margin-top: 5px">
                        </div>
                    </div>
                    <div class="caption">
                        <div class="titleNews">
							<span class="stext-105 cl3">
								<strong><a href="">Xuất hiện nhóm nhạc ABC làm siêu lòng Fan coffee acoustic</a></strong>
							</span>
                        </div>
                        <div class="infoNews">
                            <label>Bởi: Admin |</label>
                            <label> FanBand |</label>
                            <label> 20-12-2019 |</label>
                        </div>
                        <div class="sapo">
                            <p>Gần đây nhóm nhạc nhới xuất hiện ABC đã trở thành mối quan tâm của không ít các fan coffee ascoustic...
                                <a href="newdetail.html" class="fa fa-info-circle"> Đọc tiếp </a></p>
                        </div>
                    </div>
                </div>
            </div>
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