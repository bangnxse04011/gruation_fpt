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
            <form class="form-inline search-form">
                <div class="form-group" style="margin-left: 54%">
                    <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm" aria-label="Search" style="width: 30%">
                    <select class="form-control select-op" name="search_location">
                        <option value="" selected>Địa điểm</option>
                        @foreach($locations as $location)
                            <option {{ $location->id == request()->get('search_location') ? 'selected' : '' }} value="{{ $location->id }}" >{{ $location->name }}</option>
                        @endforeach
                    </select>
                    <select class="form-control select-op" name="search_location">
                        <option value="" selected>Sắp xếp theo</option>
                        <option value="">Sắp diễn ra</option>
                        <option value="">Đã diễn ra</option>
                    </select>
                    <button type="submit" class="btn btn-default searchA ">Tìm kiếm</button>
                </div>
                {{--<p class="event_count">Tìm thấy {{count($events_search)}} sản phẩm</p>--}}

            </form>

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
							<a href="{{ route('events.show',$event->id) }}" class="btn btn-default btnicon">
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