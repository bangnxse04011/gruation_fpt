@extends('layouts.master')
<script type="text/javascript" src="{{url('js/main.js')}}"></script>
@section('content')
<body onload="setBold()">
	<!-- info-->
	<section class="content">
		<!--menu-->
		<div class="card-outside">
			<div class="cart_status row">
				<div class="col-sm-3 menu_left">
					<div class="avatar_user">
						{{-- <div>
							<p>
								<img src="/{{ url($event->avatar) }}">
							</p>
						</div> --}}
						<div class="avatar-preview">
							<div id="imagePreview" style="background-image: url({{ url($event->avatar) }});">
							</div>
						</div>
						<div class="textUser">
							<div>
								<label><h4> {{$event->name}} </h4>
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
								<a href="infoDetail.html"><label class="pointer-user">Thông tin liên hệ</label></a>
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
								<label>{{$event->description}}</label>
							</div>
						</div>
						<form method="POST" enctype="multipart/form-data">
							<input type="hidden" name="_method" value="POST">                <input type="hidden" name="_token" value="l6eIIFcNCFAwOP5i0q7D0Y8OtLmacnsja5pqPCf3">                
							<div class="second-part-chgpass row">

								<div class="col-sm-8">
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label> Tên Sự Kiện :</label>
										</div>
										<div class=" col-sm-5 input-with-content">
											<label> {{$event->name}}</label>

										</div>
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Ngày diễn ra :</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<label>{{$event->date}}</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Mức Lương:</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<label>{{$event->salary}} VND </label>
										</div>
									</div>
									<div class="row">
									<div class="col-sm-5 input-with-label">
										<label>Thể loại yêu cầu:</label>
									</div>
									<div class=" col-sm-6 input-with-content">
										<label>
											@foreach($event_genre as $genre)
												{{$genre->genres_name}}, 
											@endforeach
										</label>
									</div>
								</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Địa điểm tổ chức:</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<label>{{$event->location_name}}</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Trạng thái:</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<label>
												@if($event->status == 1)
													Đang hoạt động
												@else
													Tuyển ban nhạc
												@endif
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Số Lượng Vé Còn:</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<label>{{$event->vacancy}}</label>
											<input type="hidden" id="event_vacancy" value="{{$event->vacancy}}">
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Giá vé:</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<label>{{$event->price}} VND</label>
										</div>
										<input type="hidden" id="event_price" value="{{$event->price}}">
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Mua Vé:</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<input type="number" class="form-control" id="number_of_ticket" name="fullName" @if($event->vacancy == 0) disabled @endif>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Thành Tiền:</label>
										</div>
										<div class=" col-sm-6 input-with-content">
											<label id="total"></label>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-5 input-with-label">

										</div>
									</div>
								
									<div class="row">
										<div class="col-sm-5 input-with-label">
											<label>Mô Tả Chi Tiết:</label>
										</div>
										
									</div>
									<div class=" col-sm-8 input-with-content">
										<label>{{$event->detail}}
										</label>
									</div>
								</div>
								</div>
						</form>
					</div>
				</div>
				<!--END user information-->

			</div>
		</div>

	</section>
	<!-- contact -->

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
	<!-- container -->
	<!-- footer -->
	<footer class="page-footer font-small stylish-color-dark pt-4">
		<!-- Social buttons -->
		<section class="footer page-footer font-small special-color-dark pt-4">

			<!-- Footer Elements -->
			<div class="container-fluid">

				<!-- Social buttons -->
				<ul class="list-unstyled list-inline text-center">
					<li class="list-inline-item">
						<a class="btn-floating btn-fb mx-1">
							<i class="fa fa-facebook"> </i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-tw mx-1">
							<i class="fa fa-twitter"> </i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-gplus mx-1">
							<i class="fa fa-google-plus"> </i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-li mx-1">
							<i class="fa fa-linkedin"> </i>
						</a>
					</li>
					<li class="list-inline-item">
						<a class="btn-floating btn-dribbble mx-1">
							<i class="fa fa-dribbble"> </i>
						</a>
					</li>
				</ul>
				<!-- Social buttons -->
			</div>
			<div class="footer-copyright text-center py-3">© 2018 Copyright:
				<a href="https://mdbootstrap.com/bootstrap-tutorial/"> BandMix.com</a>
			</div>
			<!-- Copyright -->
		</section>
		<!-- Footer -->
	</footer>
@endsection