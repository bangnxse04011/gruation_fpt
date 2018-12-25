@extends('layouts.master')
@section('content')
    <br/>
    <br/>
    <br/>
    <div class="card-outside">
        <div class="cart_status row">
            <div class="col-sm-3 menu_left">
                <div class="avatar_user">
                    <div>
                        <p>
                            <img src="{{ url($event->avatar) }}" >
                        </p>
                    </div>
                    <div class="textUser">
                        <div>
                            <label><h4> {{ $event->name }} </h4>
                            </label>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="change-user-infor">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="detailEvent.html"> <label class="pointer-user">Thông tin Sự Kiện</label></a>
                            </div>
                        </div>
                        <div class="menu-child">
                            <a href="detailEvent.html"> <label class="pointer-user">Giới Thiệu</label></a>
                        </div>
                        <div class="menu-child">
                            <a href="{{route('events.contact',$event->id)}}"><label class="pointer-user">Thông tin liên hệ</label></a>
                        </div>
                    </div>
                    <div class="lesson-menu">
                        <div class="row">
                            <div class="col-sm-2">
                                <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <div>
                                <a href="product.html"> <label class="pointer-user">Một số hình ảnh</label></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--user information-->
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
                    <form method="POST" action="{{route('events.confirm')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="event_id" value="{{$event->id}}">
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
                                        <label>Thời gian diễn ra :</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{ $event->time}} Ngày {{date("d", strtotime($event->date))}} tháng {{date("m", strtotime($event->date))}} năm {{date("Y", strtotime($event->date))}}</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Giá vé :</label>
                                    </div>
                                    <div class=" col-sm-6 input-with-content">
                                        <label>{{ number_format($event->price) }} VND</label>
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
                                    </br>
                                    <div class="col-sm-12 input-with-label">
                                        <label>Các tiết mục tiêu biểu trong chương trình:</label>
                                    </div>
                                </div>
                                <div id="row-contain" style="padding: 0;margin: 0;">

                                    <div class="row hidden_template" style="display:none;">
                                        <div class="col-sm-2 input-with-label">
                                            <label>Tiết mục:</label>
                                        </div>

                                        <div class=" col-sm-3 input-with-content">
                                            <input type="Text" class="form-control" placeholder="Tên tiết mục " name="item_name[]">
                                        </div>

                                        <div class="col-sm-2 input-with-label">
                                            <label> Ban nhạc:</label>
                                        </div>

                                        <div class=" col-sm-3 input-with-content">
                                            <select class="form-control" data-toggle="modal" data-target="#modalOnline" name="band[]" required>
                                                @foreach($bands as $band)
                                                    <option value="{{ $band->id }}">{{ $band->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class=" col-sm-2">
                                            <span class="btn btn-danger btnRemove"><i class="fa fa-remove"></i></span>
                                        </div>
                                    </div>

                                    @foreach($acts as $act)
                                        <div class="row">
                                            <div class="col-sm-2 input-with-label">
                                                <label>Tiết mục:</label>
                                            </div>

                                            <div class=" col-sm-3 input-with-content">
                                                <input type="Text" class="form-control" placeholder="Tên tiết mục " name="item_name[]" required value="{{ $act->act }}">
                                            </div>

                                            <div class="col-sm-2 input-with-label">
                                                <label> Ban nhạc:</label>
                                            </div>

                                            <div class=" col-sm-3 input-with-content">
                                                <select class="form-control" data-toggle="modal" data-target="#modalOnline" name="band[]" required>
                                                    @foreach($bands as $band)
                                                        <option {{ $act->band_id == $band->id ? 'selected' : '' }} value="{{ $band->id }}">{{ $band->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class=" col-sm-2">
                                                <span class="btn btn-primary btnPlus"><i class="fa fa fa-plus"></i></span>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="row">
                                    <div class="col-sm-5 input-with-label">
                                        <label>Mô Tả Chi Tiết:</label>
                                    </div>
                                </div>
                                <div class=" col-sm-12 input-with-content">
                                    <label>{!! $event->detail  !!}</label>
                                </div>
                            </div>
                            <input type="hidden" name="status" value="1">
                            <div class="col-md-12" style="display: flex; justify-content: center">
                                <div class="input-with-content">
                                    <input type="submit" class="btn btn-danger" value="Lưu lại">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--END user information-->
            </div>
        </div>
    </div>
@endsection
@push('footer')
    <script type="text/javascript">
        $(document).ready(function() {
            // $('select').select2();
            $(document).on('click','.btnPlus',function(e){
                e.preventDefault();
                let obj = $('.hidden_template').clone()
                obj.removeClass('hidden_template')
                obj.removeAttr('style')
                $(this).parent().parent().after(obj)
            })
            $(document).on('click','.btnRemove',function(e){
                e.preventDefault();
                $(this).parent().parent().remove()
            })
        });
    </script>
    <script>
        CKEDITOR.replace( 'detail' );
        //avatar load
        $(document).ready(function () {
            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('.pre-img').attr('src', e.target.result);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            $("#avt_input").on('change', function(){
                readURL(this);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#check").change(function() {
                if (this.checked) {
                    $(".checkSingle").each(function() {
                        this.checked=true;
                    });
                } else {
                    $(".checkSingle").each(function() {
                        this.checked=false;
                    });
                }
            });

            $(".checkSingle").click(function () {
                if ($(this).is(":checked")) {
                    var isAllChecked = 0;

                    $(".checkSingle").each(function() {
                        if (!this.checked)
                            isAllChecked = 1;
                    });

                    if (isAllChecked == 0) {
                        $("#checkedAll").prop("checked", true);
                    }
                }
                else {
                    $("#checkedAll").prop("checked", false);
                }
            });
        });
    </script>
@endpush
