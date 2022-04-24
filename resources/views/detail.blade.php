@php
$count=1;
@endphp
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Jamjam travels </title>
    
    <link rel="shortcut icon" href="{{asset('images/logo1.png')}}"  type='image/x-icon'>
    
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('font/flaticon.css')}}" rel="stylesheet" type="text/css">

    <link href="{{asset('css/plugin.css')}}" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('../../../ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
</head>

<body>




    <header>
        <div class="upper-head clearfix">
            <div class="container">
                <!-- <div class="contact-info">
<p><i class="flaticon-phone-call"></i> Phone: (012)-345-6789</p>
<p><i class="flaticon-mail"></i> Mail: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="fb8f948e89958f899a8d9e97bb8f9e888f969a9297d5989496">[email&#160;protected]</a></p>
</div> -->
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


    <div class="navigation">
        <div class="container">
            <div class="navigation-content">
                <div class="header_menu">

                    <nav class="navbar navbar-default navbar-sticky-function navbar-arrow">
                        <div class="logo pull-left">
                            <a href="#"><img alt="Image" src="{{url('upload/element_image/'.$elements[0]->image)}}" width="250px" height="50px" ></a>
                        </div>
                        <div id="navbar" class="navbar-nav-wrapper">
                            <ul class="nav navbar-nav" id="responsive-menu">

                                <li>
                                    <a href="#">Home <i class="fa fa-angle-down"></i></a>

                                </li>

                                <li>
                                    <a href="#umrah">Umrah <i class="fa fa-angle-down"></i></a>

                                </li>

                                <li>
                                    <a href="#hajj">Hajj <i class="fa fa-angle-down"></i></a>

                                </li>



                                <li>
                                    <a href="hotel.html">Services <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li> <a href="hotel.html">Hotel Homepage</a></li>
                                        <li> <a href="grid-view.html">Grid View</a></li>
                                        <li><a href="list-view.html">List View</a></li>
                                        <li><a href="hotel-detail.html">Detail Page</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="hotel.html">Gallery <i class="fa fa-angle-down"></i></a>

                                </li>

                                <li>
                                    <a href="#contact">Contact US <i class="fa fa-angle-down"></i></a>

                                </li>

                                <li>
                                    <a href="hotel.html">Newsteller <i class="fa fa-angle-down"></i></a>
                                    <ul>
                                        <li> <a href="hotel.html">Blog</a></li>
                                        <li> <a href="grid-view.html">News</a></li>

                                    </ul>
                                </li>




                            </ul>
                        </div>
                        <div id="slicknav-mobile"></div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


  <h1>{{$package->title}}</h1>






    <!-- < hereby search box has finished> -->

    <section class="popular-packages">
    
        <div class="container {{$count == '1' ? 'active':''}}">
            <div class="section-title text-center">
           
                <h2>Popular Packages</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
         


        </div>
      
    </section>

    <footer>

        <div class="footer-links" id="contact">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-about footer-margin">
                        <div class="about-logo">
                            <img src="" width="150px" height="150px" alt="Image">
                        </div>
                        <p></p>
                        <div class="about-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i></li>
                                <li><i class="flaticon-phone-call"></i></li>
                                <li><i class="flaticon-mail"></i> <a href="#"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="#"><i class="fa fa-facebook"
                                            aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-instagram"
                                            aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-icon"><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </li>
                                <li class="social-icon"><a href="#"><i class="fa fa-google" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links-list footer-margin">
                        <h3>Browse Tour</h3>
                        <ul>
                            <li><a href="#">Cyclades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#">North Ionian <i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            <li><a href="#">Sporades <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#">View all Destinations <i class="fa fa-angle-right"
                                        aria-hidden="true"></i></a></li>
                            <li><a href="#">View all Yatchs <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                            <li><a href="#">View all Cruises <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-recent-post footer-margin">
                        <h3>Recent Posts</h3>
                        <ul>
                            <li>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <img src="images/bucket1.jpg" alt="Image">
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">A trip to heaven</a></h4>
                                        <p>June 17, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <img src="images/bucket2.jpg" alt="Image">
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">Diving in Atlantic</a></h4>
                                        <p>June 17, 2018</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="recent-post-item">
                                    <div class="recent-post-image">
                                        <img src="images/bucket3.jpg" alt="Image">
                                    </div>
                                    <div class="recent-post-content">
                                        <h4><a href="#">Travellers History</a></h4>
                                        <p>June 17, 2018</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-links-list">
                        <div class="footer-instagram">
                            <h3>Instagram</h3>
                            <ul>
                                <li><img src="images/insta1.jpg" alt="Image"></li>
                                <li><img src="images/insta2.jpg" alt="Image"></li>
                                <li><img src="images/insta3.jpg" alt="Image"></li>
                                <li><img src="images/insta4.jpg" alt="Image"></li>
                                <li><img src="images/insta5.jpg" alt="Image"></li>
                                <li><img src="images/insta6.jpg" alt="Image"></li>
                                <li><img src="images/insta7.jpg" alt="Image"></li>
                                <li><img src="images/insta8.jpg" alt="Image"></li>
                                <li><img src="images/insta9.jpg" alt="Image"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright-content">
                            <p>2018 <i class="fa fa-copyright" aria-hidden="true"></i> Yatra by <a
                                    href="https://www.cyclonethemes.com" target="_blank">Cyclone Themes</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="payment-content">
                            <ul>
                                <li>We Accept</li>
                                <li>
                                    <img src="images/payment1.png" alt="Image">
                                </li>
                                <li>
                                    <img src="images/payment2.png" alt="Image">
                                </li>
                                <li>
                                    <img src="images/payment3.png" alt="Image">
                                </li>
                                <li>
                                    <img src="images/payment4.png" alt="Image">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div id="back-to-top">
        <a href="#"></a>
    </div>


    <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/main.js"></script>
    <script src="js/main-1.js"></script>
    <script src="js/preloader.js"></script>
    <script src="js/custom-swiper2.js"></script>
    <script src="js/custom-countdown.js"></script>
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