
<section class="container-fluid body">
    <div id="carouselExampleIndicators" class="carousel slide">

        <!-- carousel content -->
        <div class="carousel-inner">
            <!-- first slide -->
            @foreach($g_slides as $slide)
                <div class="carousel-item {{$slide->is_on_top == 1 ? 'active':''}}">
                    <img class="d-block w-100" src="{{$slide->url}}" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <h3 data-animation="animated bounceInLeft">
                            Đẳng Cấp - Chuyên Nghiệp
                        </h3>
                        <button class="btn btn-primary" data-animation="animated zoomInUp">Button</button>
                    </div>
                </div>
            @endforeach
        </div>
        <!-- controls -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- login -->
<section>
    <div class="user-modal">
        <div class="user-modal-container">
            <ul class="switcher">
                <li><a href="#">Đăng Nhập</a></li>
                <li><a href="#">Đăng Ký</a></li>

            </ul>
{{--login--}}
            <div id="login">
                <form class="form" method="POST" action="{{ route('login')}}">
                    {{ csrf_field() }}

                    <p class="fieldset" {{ $errors->has('email') ? ' has-error' : '' }}>
                        <label id='email' class="image-replace email" for="signin-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signin-email" type="email"
                               placeholder="E-mail" value="{{ old('email') }}" required autofocus name="email">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </p>

                    <p class="fieldset">
                        <label class="image-replace password" for="signin-password"
                                {{ $errors->has('password') ? ' has-error' : '' }}>Password</label>
                        <input class="full-width has-padding has-border" id="signin-password" type="password"
                               placeholder="Mật khẩu" name="password">
                        <a href="#0" class="hide-password">Hiện</a>


                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </p>

                    <p class="fieldset" >
                        <input type="checkbox" name="remember" id="remember-me" checked {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember-me">Ghi nhớ</label>
                    </p>

                    <p class="fieldset">
                        <button class="btn btn-secondary btn-lg btn-block" type="submit" >Đăng nhập</button>
                    </p>
                    <p class="form-bottom-message"><a href="{{ route('password.request') }}">Quên mật khẩu?</a></p>
                </form>

            </div>
{{--register--}}
            <div id="signup">
                <form class="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}

                    <p class="fieldset" {{ $errors->has('name') ? ' has-error' : '' }}>
                        <label class="image-replace username" for="signup-username">Họ và Tên :</label>
                        <input class="full-width has-padding has-border" id="signup-firstname" name="name"
                               type="text" placeholder="Họ và tên đệm" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </p>
                    <p class="fieldset" {{ $errors->has('email') ? ' has-error' : '' }}>
                        <label class="image-replace email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email"
                               placeholder="E-mail" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </p>
                    <p class="fieldset" {{ $errors->has('password') ? ' has-error' : '' }}>
                        <label class="image-replace password" for="signup-password">Mật khẩu</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="password"  placeholder="Mật khẩu" name="password" required>
                        <a href="#0" class="hide-password">Hiện</a>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </p>
                    <p class="fieldset">
                        <label class="image-replace password" for="signup-password"> Nhập Lại Mật khẩu</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="password"
                               placeholder="Nhập Lại Mật khẩu" name="password_confirmation" required >
                        <a href="#0" class="hide-password">Hiện</a>
                    </p>
                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms"> Đồng ý với  <a class="accept-terms" href="#0">Điều khoản</a></label>
                    </p>

                    <p class="fieldset">
                        <button class="btn btn-secondary btn-lg btn-block" type="submit" >Đăng kí</button>
                    </p>
                </form>

                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div>

            <div id="reset-password">
                <p class="form-message">Quên mật khẩu? Vui lòng nhập địa chỉ email của bạn.
                    <br> Bạn sẽ nhận được một liên kết để tạo mật khẩu mới.</p>

                <form class="form">
                    <p class="fieldset">
                        <label class="image-replace email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="error-message">Tài khoản không tồn tại!</span>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Gửi yêu cầu">
                    </p>
                </form>

                <p class="form-bottom-message">
                    <a href="#0">Quay lại trang đăng nhập
                    </a>
                </p>
            </div>
            <!-- <a href="#0" class="close-form">Đóng</a> -->
        </div>
    </div>
</section>