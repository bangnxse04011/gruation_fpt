@extends('events.layout')
@section('event_content')
    {{csrf_field()}}
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
                        <div enctype="multipart/form-data">
                            {{--{{ csrf_field() }}--}}
                            <div class="second-part-chgpass row">

                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-sm-5 input-with-label">
                                            <label> Tên Sự Kiện :</label>
                                        </div>
                                        <div class=" col-sm-5 input-with-content">
                                            <label> {{$event->name}} </label>

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 input-with-label">
                                            <label>Ngày diễn ra :</label>
                                        </div>
                                        <div class=" col-sm-6 input-with-content">
                                            <label>{{ $event->time }}</label>
                                        </div>
                                    </div>
                                    <div class="row">

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-5 input-with-label">
                                            <label>Địa điểm tổ chức:</label>
                                        </div>
                                        <div class=" col-sm-6 input-with-content">
                                            <label>{{ $event->location_detail }}</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row">
                                            <div class="col-sm-5 input-with-label">
                                                <label> Tên Sự Kiện :</label>
                                            </div>
                                            <div class=" col-sm-5 input-with-content">
                                                <label> {{ $event->name }}</label>
                                            </div>
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
                                            <div class="row">
                                                <div class="col-sm-5 input-with-label">
                                                    <label>Địa điểm tổ chức:</label>
                                                </div>
                                                <div class=" col-sm-5 input-with-content">
                                                    <label>{{ $event->location_detail }}</label>
                                                </div>
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
                                    <div>
                                        <div class="second-part-chgpass row">

                                            <div class="col-sm-8">
                                                <div class="row">
                                                    <div class="col-sm-5 input-with-label">
                                                        <label>Số Lượng Vé Còn:</label>
                                                    </div>
                                                    <div class=" col-sm-6 input-with-content">
                                                        <label>{{$event->vacancy}}</label>
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
                                                <form action="{{route('cart.store')}}" method="POST">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="event_id" value="{{$event->id}}">
                                                    <div class="row">
                                                        <div class="col-sm-5 input-with-label">
                                                            <label>Số lượng:</label>
                                                        </div>
                                                        <div class=" col-sm-6 input-with-content">
                                                            <input type="number" class="form-control"
                                                                   name="number_of_ticket" min="1" required>
                                                            <label id="alert-label" style="color: red"></label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class=" col-sm-6 input-with-content">
                                                            <button id="addToCart" class="btn btn-danger">Mua vé</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--END user information-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <script type="text/javascript">
        var number_of_ticket = $('#addToCart').val();

    </script>
@endpush