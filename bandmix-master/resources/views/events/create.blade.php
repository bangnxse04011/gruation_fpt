@extends('layouts.master')
@section('content')
    {{--<div class="card-outside">--}}
    <form method="POST" action="{{ route('events.store') }}" class="cart_status row" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="col-sm-3 menu_left">
            <div class="avatar-upload">
                <div class="avatar-edit">
                    <input type="file" id="imageUpload" name="avatar" accept=".png, .jpg, .jpeg" />
                    <label for="imageUpload"></label>
                </div>
                <div class="avatar-preview">
                    <div id="imagePreview" style="background-image: url({{ url('images/icon/default-avatar.png') }});">
                    </div>
                </div>
            </div>
            <div class="change-user-infor">
                <div class="row">
                    <div class="col-sm-2">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                    </div>
                    <div>
                        <a href="detailBand.html"> <label class="pointer-user"><h3>Tạo Sự Kiện</h3></label></a>
                    </div>
                </div>
            </div>
        </div>
        <!--user information-->
        <div class="menu-right-chgpass">
            <div class="col-sm-12">

                <div>
                    <strong><label>Giới Thiệu</label></strong>
                </div>
                <div class="">
                            <textarea type="textarea" class="form-control"
                                      placeholder="Giói thiệu chung" rows="3" name="description" required>
                        </textarea>
                </div>
                <div enctype="multipart/form-data">
                    <div class="second-part-chgpass row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-3 input-with-label">
                                    <label> Tên Sự Kiện :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="text" class="form-control"
                                           placeholder="Tên Sự Kiện" name="name" required>
                                </div>
                                <div class="col-sm-3 input-with-label">
                                    <label>Ngày diễn ra :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="date" class="form-control" name="date">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3 input-with-label">
                                    <label>Mức thù lao (VND) :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="text" class="form-control" name="salary" required>
                                </div>
                                <div class="col-sm-3 input-with-label">
                                    <label>Thời gian :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="time" class="form-control" name="time">
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-3 input-with-label">
                                    <label>Địa điểm Tổ chức:</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="text" class="form-control"
                                           placeholder="Địa điểm tổ chức" name="location_detail" required>

                                </div>
                                <div class="col-sm-3 input-with-label">
                                    <label>Thể Loại yêu cầu:</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <select class="form-control" name="genre" required>
                                        <option value="">Thể loại</option>
                                        @foreach($genres as $genre)
                                            <option {{ $genre->id == request()->get('genre') ? 'selected':'' }} value="{{ $genre->id }}">{{ $genre->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3 input-with-label">
                                    <label>Số Lượng vé :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="number" class="form-control" name="vacancy">
                                </div>
                                <div class="col-sm-3 input-with-label">
                                    <label>Email chương trình :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="email" class="form-control" name="mail" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-3 input-with-label">
                                    <label>Hot-line :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="text" class="form-control" name="number_phone" required>
                                </div>

                                <div class="col-sm-3 input-with-label">
                                    <label>Giá vé :</label>
                                </div>
                                <div class=" col-sm-3 input-with-content">
                                    <input type="number" class="form-control" name="price">
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
                                        <span class="btn btn-primary btnPlus"><i class="fa fa fa-plus"></i></span>
                                    </div>
                                </div>

                                <div class="row ">
                                    <div class="col-sm-2 input-with-label">
                                        <label>Tiết mục:</label>
                                    </div>

                                    <div class=" col-sm-3 input-with-content">
                                        <input type="Text" class="form-control" placeholder="Tên tiết mục " name="item_name[]" required>
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
                                        <button class="btn btn-danger btnRemove"><i class="fa fa-remove"></i></button>
                                        <button class="btn btn-primary btnPlus"><i class="fa fa fa-plus"></i></button>
                                    </div>
                                    

                                    {{-- <div class=" col-sm-2 input-with-content">
                                        <input type="checkbox" class="form-control" name="check" value="is_check">
                                    </div> --}}
                                </div>

                                {{-- <div class="row">
                                    <div class="col-sm-2 input-with-label">
                                        <label>Tiết mục số 2:</label>
                                    </div>
                                    <div class=" col-sm-3 input-with-content">
                                        <input type="Text" class="form-control" placeholder="Tên tiết mục " name="item_name[]">
                                    </div>
                                    <div class="col-sm-3 input-with-label">
                                        <label> Ban nhạc biểu diễn:</label>
                                    </div>
                                    <div class=" col-sm-2 input-with-content">
                                        <select  data-toggle="modal" data-target="#modalOnline"
                                                 class="btn btn-primary" name="band[]">
                                            Chọn Ban Nhạc
                                            @foreach($bands as $band1)
                                                <option value="{{ $band1->id }}">{{ $band1->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class=" col-sm-2 input-with-content">
                                        <input type="checkbox" class="form-control" name="check" value="is_check">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2 input-with-label">
                                        <label>Tiết mục số 3:</label>
                                    </div>
                                    <div class=" col-sm-3 input-with-content">
                                        <input type="Text" class="form-control" placeholder="Tên tiết mục " name="item_name[]">
                                    </div>
                                    <div class="col-sm-3 input-with-label">
                                        <label> Ban nhạc biểu diễn:</label>
                                    </div>
                                    <div class=" col-sm-2 input-with-content">
                                        <select  data-toggle="modal" data-target="#modalOnline"
                                                 class="btn btn-primary" name="band[]">
                                            Chọn Ban Nhạc
                                            @foreach($bands as $band)
                                                <option value="{{ $band->id }}">{{ $band->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" col-sm-2 input-with-content">
                                        <input type="checkbox" class="form-control" name="check" value="is_check">
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-2 input-with-label">
                                        <label>Tiết mục số 4:</label>
                                    </div>
                                    <div class=" col-sm-3 input-with-content">
                                        <input type="Text" class="form-control" placeholder="Tên tiết mục " name="item_name[]">
                                    </div>
                                    <div class="col-sm-3 input-with-label">
                                        <label> Ban nhạc biểu diễn:</label>
                                    </div>
                                    <div class=" col-sm-2 input-with-content">
                                        <select  data-toggle="modal" data-target="#modalOnline"
                                                 class="btn btn-primary" name="band[]">
                                            Chọn Ban Nhạc
                                            @foreach($bands as $band)
                                                <option value="{{ $band->id }}">{{ $band->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" col-sm-2 input-with-content">
                                        <input type="checkbox" class="form-control" name="check" value="is_check">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-2 input-with-label">
                                        <label>Tiết mục số 5:</label>
                                    </div>
                                    <div class=" col-sm-3 input-with-content">
                                        <input type="Text" class="form-control" placeholder="Tên tiết mục " name="item_name[]">
                                    </div>
                                    <div class="col-sm-2 input-with-label">
                                        <label> Ban nhạc biểu diễn:</label>
                                    </div>
                                    <div class=" col-sm-2 input-with-content">
                                        <select  data-toggle="modal" data-target="#modalOnline"
                                                 class="btn btn-primary" name="band[]">
                                            Chọn Ban Nhạc
                                            @foreach($bands as $band)
                                                <option value="{{ $band->id }}">{{ $band->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class=" col-sm-3 input-with-label">
                                        <input type="checkbox" class="form-control" name="check" value="is_check">
                                    </div>
                                </div> --}}

                            </div>


                            <div class="row">
                                <div class="col-sm-12 input-with-label">
                                    <label>Mô Tả Chi Tiết:</label>
                                </div>
                                <div class=" col-sm-16 input-with-content">
                                    <textarea type="textarea" class="form-control"
                                              placeholder="Mô tả về sự kiện" rows="10" name="detail" required>
                                </textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-3 input-with-label">

                                </div>
                                <div class=" col-sm-1 input-with-content">
                                    <a href="{{ route('events.index') }}" class="btn btn-danger">Huỷ</a>
                                </div>
                                <div class=" col-sm-1 input-with-content">
                                    <button type="submit" class="btn btn-danger">Tạo Sự Kiện</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div><!--END user information-->
    </form>
    {{--</div>--}}
@endsection
@push('footer')
    <script type="text/javascript" src="{{url('js/main.js')}}"></script>
    <script type="text/javascript" src="{{url('js/avatar.js')}}"></script>-
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
