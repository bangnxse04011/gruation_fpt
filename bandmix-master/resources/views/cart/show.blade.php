@extends('layouts.master')
@section('content')
    <section class="content">
        <!--giỏ hàng-->
        <br>
        <h2 class="text-center">GIỎ HÀNG CỦA BẠN</h2>

        <div class="container">

            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                        </ul>
                    </div>
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @endif

                @if(\Gloudemans\Shoppingcart\Facades\Cart::count() >0)

            <h2>{{ \Gloudemans\Shoppingcart\Facades\Cart::count() }} mặt hàng trong giỏ hàng</h2>
            <table class="table table-hover table-condensed">
                <thead>
                <tr>
                    <th style="width:50%">Tên sự kiện</th>
                    <th style="width:10%">Giá</th>
                    <th style="width:10%">Số lượng</th>
                    <th style="width: 10%" class="text-center">Thành tiền</th>
                    <th style="width:10%"></th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="{{ $event->avatar }}" alt="Sản phẩm 1"
                                                                 class="img-responsive" width="120%">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{ $event->name }}</h4>
                                <label>Địa điểm :</label>
                                <p>{{$event->location_detail }},{{ $event->location }}</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">200.000 đ</td>
                    <td data-th="Quantity">
                        <input class="form-control text-center" value="1" type="number">
                    </td>
                    <td data-th="Subtotal" class="text-center">200.000 đ</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-2 hidden-xs"><img src="images/event/sukien2.jpg" alt="Sản phẩm 1"
                                                                 class="img-responsive" width="120%">
                            </div>
                            <div class="col-sm-10">
                                <h4 class="nomargin">Liên Hoan Văn hoá</h4>
                                <label>Địa điểm :</label>
                                <p>43, Kim Mã Hà Nội</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">300.000 đ</td>
                    <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
                    </td>
                    <td data-th="Subtotal" class="text-center">300.000 đ</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                        </button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                    </td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
                    </td>
                    <td>
                        <button type="button" data-toggle="modal" data-target="#myModal"
                                class="btn btn-large btn-block btn-primary btn-checkout">
                            Thanh toán khi nhận hàng
                        </button>

                        <button type="button" data-toggle="modal" data-target="#modalOnline"
                                class="btn btn-large btn-block btn-success btn-checkout">
                            Thanh toán trực tuyến
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
                    @else
                    <h3>Không có mặt hàng nào trong giỏ hàng</h3>
                    @endif
        </div>
        <!--Modal-->
        <div id="myModal" style="z-index: 999999 " class="modal fade" role="dialog">
            <div class="modal-dialog" style="max-width:80%">

                <!-- Modal content-->
                <div class="modal-content " style="opacity: 0.95">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> Thông tin thanh toán</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body" style="">
                        <form action="" method="post" role="form">
                            <input type="hidden" name="_token" value="mASmdAPFonklySW34TDx9qvKkbsv7xG0bb4o3k0M">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><strong>Họ tên</strong></label>
                                        <input type="text" class="form-control" id="name" placeholder="Nhập họ tên"
                                               name="name" value="" required="" minlength="3">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><strong>Tỉnh / thành</strong></label>
                                        <select class="form-control" name="province" id="provence">
                                            <option value="Hà Nội">
                                                Hà Nội
                                            </option>
                                            <option value="Tp Hồ Chí Minh">
                                                Tp Hồ Chí Minh
                                            </option>
                                            <option value="Đà Nẵng">
                                                Đà Nẵng
                                            </option>
                                            <option value="Cần Thơ">
                                                Cần Thơ
                                            </option>
                                            <option value="Hải Phòng">
                                                Hải Phòng
                                            </option>
                                            <option value="An Giang">
                                                An Giang
                                            </option>
                                            <option value="Bà Rịa Vũng Tàu">
                                                Bà Rịa Vũng Tàu
                                            </option>
                                            <option value="Bình Dương">
                                                Bình Dương
                                            </option>
                                            <option value="Bình Phước">
                                                Bình Phước
                                            </option>
                                            <option value="Bình Thuận">
                                                Bình Thuận
                                            </option>
                                            <option value="Bình Định">
                                                Bình Định
                                            </option>
                                            <option value="Bắc Giang">
                                                Bắc Giang
                                            </option>
                                            <option value="Bắc Kạn">
                                                Bắc Kạn
                                            </option>
                                            <option value="Bắc Ninh">
                                                Bắc Ninh
                                            </option>
                                            <option value="Bến Tre">
                                                Bến Tre
                                            </option>
                                            <option value="Cao Bằng">
                                                Cao Bằng
                                            </option>
                                            <option value="Cà Mau">
                                                Cà Mau
                                            </option>
                                            <option value="Gia Lai">
                                                Gia Lai
                                            </option>
                                            <option value="Hà Giang">
                                                Hà Giang
                                            </option>
                                            <option value="Hà Nam">
                                                Hà Nam
                                            </option>
                                            <option value="Hà Tĩnh">
                                                Hà Tĩnh
                                            </option>
                                            <option value="Hòa Bình">
                                                Hòa Bình
                                            </option>
                                            <option value="Hưng Yên">
                                                Hưng Yên
                                            </option>
                                            <option value="Hải Dương">
                                                Hải Dương
                                            </option>
                                            <option value="Khánh Hòa">
                                                Khánh Hòa
                                            </option>
                                            <option value="Kiên Giang">
                                                Kiên Giang
                                            </option>
                                            <option value="Kon Tum">
                                                Kon Tum
                                            </option>
                                            <option value="Lai Châu">
                                                Lai Châu
                                            </option>
                                            <option value="Long An">
                                                Long An
                                            </option>
                                            <option value="Lào Cai">
                                                Lào Cai
                                            </option>
                                            <option value="Lâm Đồng">
                                                Lâm Đồng
                                            </option>
                                            <option value="Lạng Sơn">
                                                Lạng Sơn
                                            </option>
                                            <option value="Nam Định">
                                                Nam Định
                                            </option>
                                            <option value="Nghệ An">
                                                Nghệ An
                                            </option>
                                            <option value="Ninh Bình">
                                                Ninh Bình
                                            </option>
                                            <option value="Ninh Thuận">
                                                Ninh Thuận
                                            </option>
                                            <option value="Phú Thọ">
                                                Phú Thọ
                                            </option>
                                            <option value="Phú Yên">
                                                Phú Yên
                                            </option>
                                            <option value="Quảng Nam">
                                                Quảng Nam
                                            </option>
                                            <option value="Quảng Ngãi">
                                                Quảng Ngãi
                                            </option>
                                            <option value="Quảng Ninh">
                                                Quảng Ninh
                                            </option>
                                            <option value="Quảng Trị">
                                                Quảng Trị
                                            </option>
                                            <option value="Sơn La">
                                                Sơn La
                                            </option>
                                            <option value="Thanh Hóa">
                                                Thanh Hóa
                                            </option>
                                            <option value="Thái Bình">
                                                Thái Bình
                                            </option>
                                            <option value="Thái Nguyên">
                                                Thái Nguyên
                                            </option>
                                            <option value="Thừa Thiên Huế">
                                                Thừa Thiên Huế
                                            </option>
                                            <option value="Tiền Giang">
                                                Tiền Giang
                                            </option>
                                            <option value="Trà Vinh">
                                                Trà Vinh
                                            </option>
                                            <option value="Tuyên Quang">
                                                Tuyên Quang
                                            </option>
                                            <option value="Tây Ninh">
                                                Tây Ninh
                                            </option>
                                            <option value="Vĩnh Long">
                                                Vĩnh Long
                                            </option>
                                            <option value="Vĩnh Phúc">
                                                Vĩnh Phúc
                                            </option>
                                            <option value="Yên Bái">
                                                Yên Bái
                                            </option>
                                            <option value="Đắk Lắk">
                                                Đắk Lắk
                                            </option>
                                            <option value="Đồng Nai">
                                                Đồng Nai
                                            </option>
                                            <option value="Đồng Tháp">
                                                Đồng Tháp
                                            </option>
                                            <option value="Bạc Liêu">
                                                Bạc Liêu
                                            </option>
                                            <option value="Sóc Trăng">
                                                Sóc Trăng
                                            </option>
                                            <option value="Hậu Giang">
                                                Hậu Giang
                                            </option>
                                            <option value="Đắk Nông">
                                                Đắk Nông
                                            </option>
                                            <option value="Điện Biên">
                                                Điện Biên
                                            </option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""><strong>Quận/Huyện</strong></label>
                                        <input type="text" class="form-control" id="district"
                                               placeholder="Nhập quận/huyện" name="district" value="" minlength="5"
                                               required="">
                                    </div>

                                </div>


                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for=""><strong>Địa chỉ</strong></label>
                                        <input type="text" class="form-control" id="address" placeholder="Nhập địa chỉ"
                                               name="address" value="" minlength="10" required="">
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for=""><strong>Email</strong></label>
                                        <input type="email" class="form-control" id="email" placeholder="Nhập email"
                                               name="email" value="datnq.fuhl@gmail.com" required="">
                                    </div>
                                </div>


                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for=""><strong>Số điện thoại</strong></label>
                                        <input type="text" class="form-control" id="phone"
                                               placeholder="Nhập số điện thoại" name="phone" value="" minlength="9"
                                               required="">
                                    </div>
                                </div>

                                <div class="col-md-12">

                                    <div class="form-group">
                                        <label for=""><strong>Ghi chú</strong></label>
                                        <input type="text" class="form-control" id="note" placeholder="Nhập ghi chú"
                                               name="note" value="">
                                    </div>
                                </div>

                            </div>


                            <div id="recaptcha" class="g-recaptcha"
                                 data-sitekey="6LdiZWIUAAAAAEOWtPTwWwYWEsS9AbnkMoqD0ppc">
                                <div style="width: 304px; height: 78px;">
                                    <div>
                                        <iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdiZWIUAAAAAEOWtPTwWwYWEsS9AbnkMoqD0ppc&amp;co=aHR0cDovL3B0by5kZXZtYXN0ZXIuZWR1LnZuOjgw&amp;hl=en&amp;v=v1542004393985&amp;size=normal&amp;cb=gjf0lr47l429"
                                                width="304" height="78" role="presentation" name="a-pm8u6wso9nl8"
                                                frameborder="0" scrolling="no"
                                                sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe>
                                    </div>
                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                                              class="g-recaptcha-response"
                                              style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div>
                            </div>
                            <span class="msg-error error"></span>
                            <br>
                            <button type="submit" class="btn btn-primary">Thanh Toán</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--online-->
        <div id="modalOnline" style="z-index: 999999 " class="modal fade" role="dialog">
            <div class="modal-dialog" style="max-width:80%">

                <!-- Modal content-->
                <div class="modal-content " style="opacity: 0.95;margin-top: 150px;">
                    <div class="modal-header">
                        <h4 class="modal-title"><i class="fa fa-shopping-cart"></i> Thanh toán online </h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body" style="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for=""><strong>Hệ thống đang trong quá trình bảo trì nên đơn hàng của bạn sẽ
                                            được
                                            thanh toán bằng đơn vị USD với tỷ giá 1$ = 23,254.0 ₫</strong></label>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><strong>Tổng đơn hàng : </strong></label>
                                    <span><b>  41.28 </b></span><span><b> $</b></span><br>
                                </div>

                            </div>

                            <div class="col-md-12">

                                <div class="form-group">
                                    <label for=""><strong>Xin lỗi vì sự bất tiện này !</strong></label>
                                </div>
                            </div>

                        </div>
                        <a href="showCart.html" class="btn btn-primary">Tôi đồng ý</a>

                    </div>
                </div>

            </div>
        </div>


        <!--end giỏ hàng-->
    </section>
@endsection