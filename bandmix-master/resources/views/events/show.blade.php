@extends('events.layout')
@section('event_content')
    <div class="menu-right-chgpass">
        <div class="col-sm-12">
            <div>
                <div>
                    <strong><label>Giới Thiệu</label></strong>
                </div>
                <div class="textChgPass">
                    <label>{{ $event->description }}</label>
                </div>
            </div>
            <div class="second-part-chgpass row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label> Tên Sự Kiện :</label>
                        </div>
                        <div class=" col-sm-5 input-with-content">
                            <label> {{ $event->name }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label>Thời gian diễn ra :</label>
                        </div>
                        <div class=" col-sm-5 input-with-content">
                            <label>{{ $event->time}} Ngày {{date("d", strtotime($event->date))}} tháng {{date("m", strtotime($event->date))}} năm {{date("Y", strtotime($event->date))}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label>Địa điểm tổ chức:</label>
                        </div>
                        <div class=" col-sm-5 input-with-content">
                            <label>{{ $event->location_detail.', '.$event->locations->name}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label>Giá vé :</label>
                        </div>
                        <div class=" col-sm-5 input-with-content">
                            <label>{{ number_format($event->price)}} VND </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 input-with-label">
                            <label>Các tiết mục tiêu biểu: </label>
                        </div>
                        @foreach($event->bands as $item)
                            <div class=" col-sm-5 input-with-content">
                                <label>► {{ $item->pivot->act}} - {{ $item->name}} </label>
                                <br/>
                            </div>
                        @endforeach
                    </div>
                </div>
                <hr>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label>Số Lượng Vé Còn:</label>
                        </div>
                        <div class=" col-sm-6 input-with-content">
                            <label>200</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label>Giá vé :</label>
                        </div>
                        <div class=" col-sm-6 input-with-content">
                            <label>{{ $event->price }} </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label>Mua Vé:</label>
                        </div>
                        <div class=" col-sm-6 input-with-content">
                            <input type="number" class="form-control" name="fullName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 input-with-label">
                            <label>Thành Tiền:</label>
                        </div>
                        <div class=" col-sm-6 input-with-content">
                            <label>90.000 VND</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-sm-6 input-with-content">
                            <a href="{{ route('cart.store',$event->id) }}" class="btn btn-danger">Mua vé</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="col-sm-5 input-with-label">
                        <label>Mô Tả Chi Tiết:</label>
                    </div>
                    <div class=" col-sm-5 input-with-content">
                        <label>{!! $event->detail !!}</label>
                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection