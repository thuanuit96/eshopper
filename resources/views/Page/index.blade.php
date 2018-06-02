
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="{{asset('css/htshop/css-family=Roboto-300,400,700,500&subset=latin,vietnamese,latin-ext.css')}}"  rel='stylesheet' type='text/css' >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')| ATShop</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/htshop/font-awesome.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/cart.css')}}"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/htshop/common.css')}}"/>

    <script src="{{asset('js/jquery.elevatezoom.js')}}"></script>

</head><!--/head-->

<body>
    @include('page.header')
    @yield('slider')
    @yield('check_order')
    @yield('home')
    @yield('news')
    @yield('content')
    @yield('women')
    @yield('shirt')
    @yield('cart')
    @yield('product_detail')
    @yield('checkout')
    @yield('contact')
    @yield('product')
     @include('Page.footer')
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
        {{--<script src="{{asset('css/cart/style.js')}}"></script>--}}

     <script lang="javascript">
    var _vc_data = {
        id: 1144467,
        secret: 'c99e4606c6786bf50bbeb9993b9a7cad'
    };
    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.defer = true;
        ga.src = '//live.vnpgroup.net/client/tracking.js';
        var s = document.getElementsByTagName('script');
        s[0].parentNode.insertBefore(ga, s[0]);
    })();
</script>
    </body>

</html>