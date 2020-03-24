<!doctype html>
<html lang="en">
<head>
@include('frontend.include.head')
</head>
<body>
<!--================Header Menu Area =================-->
@include('frontend.include.header')
<!--================Header Menu Area =================-->
@yield('content')


@include('frontend.include.footer')




@include('frontend.include.script')
{!! toastr()->render() !!}
</body>
</html>
