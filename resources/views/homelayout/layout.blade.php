
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Jamjam travels </title>
    
    <!-- <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo1.png') }}"> -->
    <link rel="shortcut icon" href="{{ asset('images/logo1.png') }}"  type='image/x-icon'>
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('font/flaticon.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/plugin.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{asset('../../../ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script async="" src='/cdn-cgi/challenge-platform/h/b/scripts/invisible.js?ts=1650085200'></script>
</head>

<body>

<header>
        <div class="upper-head clearfix">
            <div class="container">
 
@if (Route::has('login'))
                <div class="login-btn text-right">
     @auth
                    <a href="{{ url('/home') }}"><i class="fa fa-unlock-alt"></i> Home </a>
    @else
                    <a href="{{ route('login') }}"><i class="fa fa-user-plus"></i> Login</a>
    @if (Route::has('register'))
                    <a href="{{ route('register') }}"><i class="fa fa-unlock-alt"></i> Register</a>
    @endif                
                </div>
            </div>
        </div>
    @endauth
@endif
    </header>



@yield('content')
@include('homelayout.navbaar')


    <script data-cfasync="false" src="{{asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/plugin.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/main-1.js')}}"></script>
    <script src="{{asset('js/preloader.js')}}"></script>
    <script src="{{asset('js/custom-swiper2.js')}}"></script>
    <script src="{{asset('js/custom-countdown.js')}}"></script>
    <script type="text/javascript">
        (function () {
            window['__CF$cv$params'] = {
                r: '6fca79edfd4089c2',
                m: 'uw_Eh8G.URyAPtMFtsRM0jdYUEHNtiQbzlHmPfokpZo-1650086473-0-AYlx1g+eakoVhCe6YXtfs98knR7ZVGBiVfgvyrmnnBKdBRclK2JWR5liLYsogij8PQ1gJ17H8CtMekdzFCVRzH1QSC9rpU4ri4MMH8YgcUHZSuv5P4mTKCN/TLQM17Tuhexvk1GB3F4r3Bd3ZLD5feUxdwUYRkF+9UangzCyrMwm',
                s: [0x1983f21a93, 0x5462892be3],
                u: '/cdn-cgi/challenge-platform/h/b'
            }
        })();
    </script>
</body>

</html>