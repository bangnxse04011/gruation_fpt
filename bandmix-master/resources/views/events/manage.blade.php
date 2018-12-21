@extends('layouts.master')
@section('content')
    <div class="container">
        <!-- List Event -->
        <div class="title">
            <div class="type-1">
                <div>
                    <a href="{{ route('events.create') }}" class="btn btn-1 create">
                        <span class="txt">Tạo Sự Kiện</span>
                        <span class="round"><i class="fa fa-plus"></i></span>
                    </a>
                </div>
            </div>
            <h2>Các sự kiện đã tạo</h2>
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
                    <input class="form-control my-0 py-1" type="text" placeholder="Tìm tên Sự kiện" aria-label="Search">
                </div>
            </div>
            <div class="searchE">
                <button type="button" class="btn btn-primary" style="float: right;">Tìm kiếm
                </button>

            </div>
            <div class="dropdown show search">
                <a class="btn  dropdown-toggle" href="" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sắp xếp theo
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Sắp diễn ra</a></li>
                    <li><a class="dropdown-item" href="#">Đã diễn ra</a></li>
                </div>
            </div>
        </div>
        <!--sukien-->
        <div class="row">
            @foreach($events as $event)
            <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="hovereffectE">
                    <img class="img-responsive" src="{{ $event->avatar }}" alt="">

                    <div class="overlayE">
                        <h2>{{ $event->name }}</h2>
                        <p >
                            Sự kiện vô cùng lớn ! Diễn ra trong suốt 3 ngày tạ trung tâm hội nghị quốc gia VN
                        </p>
                        <a class="infoE" href="{{ route('events.show',$event->id) }}">Chi tiết</a>
                    </div>
                </div>
                <div class="card-body relative">
                    <div class="table w-100 margin-bottom-0">

                        <a class="eventTitle" href="detailEvent.html" title="Liên Hoan Âm Nhạc" target="_blank">
                            <h4>{{ $event->name }}</h4>
                        </a>
                    </div>
                    <div class="row">
                        <div class="table-cell">
                            <div class="event-price w-100">
                                <span class="color-6">Thù Lao : </span> <strong>{{ $event->salary }} VND</strong>
                            </div>
                            <div class="event-tags w-100">
									<span class="tag-venues">
										<span class="tag-venue smooth-trans label-default uppercase">{{ $event->location_detail }}</span>
									</span>

                            </div>
                        </div>
                        <div class="event-date">
                            <div class="relative">
                                <div class="date-month">
                                    {{ $event->time }}
                                </div>
                                <div class="date-detail">
                                    <div class="date-num color-6">
                                        {{ $event->time }}
                                    </div>
                                    <div class="date-day">
                                        {{ $event->time }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="iconSED">
							<a href="detailEvent.html" class="btn btn-default btnicon">
								<i class="fa fa-eye"></i> Xem
							</a>
							<a href="{{route('events.edit',[$event->id])}}" class="btn btn-default btnicon">
								<i class="fa fa-edit"></i> Sửa
							</a>
							<a href="{{route('events.delete',[$event->id])}}" class="btn btn-default btnicon">
								<i class="fa fa-trash-o"></i> Xoá
							</a>
                            <a href="{{route('events.delete',[$event->id])}}" class="btn btn-default btnicon">
								<i class="fa fa-eye"></i> {{ $event->status == 1 ? 'Đang diễn ra' : 'Đang tuyển ban nhạc' }}
							</a>
						</div>
                    </div>

                </div>
            </div>
                @endforeach

        </div> <!-- row -->

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
@endsection