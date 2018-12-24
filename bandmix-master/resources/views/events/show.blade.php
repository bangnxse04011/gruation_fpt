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
            <form method="POST" enctype="multipart/form-data">
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
                                <label>Ngày diễn ra :</label>
                            </div>
                            <div class=" col-sm-5 input-with-content">
                                <label>{{ date("F, d - Y" , strtotime($event->date)) }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 input-with-label">
                                <label>Thời gian diễn ra :</label>
                            </div>
                            <div class=" col-sm-5 input-with-content">
                                <label>{{ $event->time }}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-5 input-with-label">
                                <label>Địa điểm tổ chức:</label>
                            </div>
                            <div class=" col-sm-5 input-with-content">
                                <label>{{ $event->location_detail .', '. $event->locations->name }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5 input-with-label">
                                <label>Giá vé :</label>
                            </div>
                            <div class=" col-sm-6 input-with-content">
                                <label>{{ number_format($event->price)}} VND </label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12 input-with-label">
                                <label>Các tiết mục tiêu biểu: </label>
                            </div>
                            @foreach($event->bands as $item)
                                <div class=" col-sm-12 input-with-content">
                                    <label>► {{ $item->pivot->act}} - {{ $item->name}} </label>
                                    <br/>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-sm-5 input-with-label">
                                <label>Mô Tả Chi Tiết:</label>
                            </div>
                        </div>
                        <div class=" col-sm-12 input-with-content">
                            <label>{!! $event->detail !!}</label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection