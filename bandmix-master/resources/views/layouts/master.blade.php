<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/css.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/loginCss.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    @stack('header')
</head>
<body onload="setBold()">
<div id="menu" data-page="home"></div>
<section class="container-fluid">
    @include('partials.header')
    @include('partials.jumbotron')
<!-- indicators -->

<!-- new -->
<section>
    <div class="container">
        @yield('content')
    </div>
</section>
<!-- footer -->
@include('partials.footer')


<script type="text/javascript" src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/login.js')}}"></script>
<script type="text/javascript" src="{{url('js/menu.js')}}"></script>
<script type="text/javascript" src="{{url('js/carousel.js')}}"></script>
<script type="text/javascript" src="{{url('js/main.js')}}"></script>
<script type="text/javascript" src="{{url('js/header.js')}}"></script>
<script type="text/javascript" src="{{url('js/avatar.js')}}"></script>


<script src="{{url('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js')}}"></script>
<script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>

<script>
    $(document).ready(function () {
        $(document).on('click', '#btnContactUs', function () {
            var form = $this.parent('form');
            event.preventDefault();
            swal({
                title: "Bạn có chắc chắn muốn gửi ?",
                text: "",
                icon: "warning",
                buttons: true,
                dangerMode: false,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal("Phản hồi đã được gửi", {
                            icon: "success",
                        });
                    } else {
                        swal("Đã hủy!");
                    }
                })
        })
    })
</script>


@stack('footer')

</body>
</html>