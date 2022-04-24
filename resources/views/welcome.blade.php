@php
$count=1;
@endphp
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

    <link rel="stylesheet" href="{{asset('../../../ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <script async="" src='/cdn-cgi/challenge-platform/h/b/scripts/invisible.js?ts=1650085200'></script>
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


    <section class="swiper-banner">
        <div class="slider">
        
            <div class="swiper-container">
                <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                    <div class="swiper-slide" style="background-image:url('{{ asset('upload/slider_image/'.$slider->image)}}')">
                        <div class="swiper-content" data-animation="animated fadeInDown">
                            <h2>{{$slider->title_1}}</h2>
                            <h1>{{$slider->title_2}}</h1>
                            <a href="tour-detail.html" class="btn-blue btn-red">View Our Tour</a>
                        </div>
                    </div>
                @php
                $count++
                @endphp
                @endforeach
                   
                   
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="overlay"></div>
        </div>
    </section>




    <div class="search-box clearfix ">
        <div class="container">
            <div class="search-outer ">
                <div class="search-content">
                    <form>
                        <div class="row d-flex justify-content-center ">
                            <div class="col-lg-3 col-md-12">
                                <div class="search-title d-flex align-items-center justify-content-between bg-success">
                                    <p>Buil your <span>own package</span></p>
                                    <i class="flaticon-sun-umbrella "></i>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 align-items-center">
                                <div class="table_item ">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputText"
                                            aria-describedby="emailHelp" placeholder="Enter Name">

                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Mobile Number">
                                    </div>

                                    <div class="search">
                                        <a href="#" class="btn-blue btn-green col-md-5 mt-4">Start</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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
          
            <h2>{{$first->name}}</h2>
           
            
            <section class="blog pb-5" id="hajj">
             
                <div class="container">
                    <div class="row">
                    @foreach($hajj as $package)  
                        <div class="col-lg-4  col-md-4 mar-bottom-30">

                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="{{url('upload/package_image/'.$package->image)}}" alt="Image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-date">
                                        <p><i class="fa fa-clock-o"></i>  Starts at  : {{$package->starts_at }}</p>
                                    </div>
                                    <h3><a href="#">{{$package->title}}</a></h3>
                                    <p>{!! $package->description!!}</p>
                                    <a title="edit" class="btn btn-primary" href="{{route('package.detail',$package->id)}} ">view detail</a>
                                    
                                </div>
                   
                            </div>
                   
                        </div>
                        @php
                        $count++
                        @endphp
                    @endforeach
                    </div> 
                </div>
                
                
            </section>
            

            <!-- Hajj packge  -->
            <h2>{{$second->name}}</h2>
            <section class="blog pb-5" id="umrah">
             
                <div class="container">
                    <div class="row">
                    @foreach($umrah as $package)  
                        <div class="col-lg-4  col-md-4 mar-bottom-30">

                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="{{url('upload/package_image/'.$package->image)}}" alt="Image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-date">
                                        <p><i class="fa fa-clock-o"></i>  Starts at  : {{$package->starts_at }}</p>
                                    </div>
                                    <h3><a href="#">{{$package->title}}</a></h3>
                                    <p>{!! $package->description!!}</p>
                                    
                                </div>
                   
                            </div>
                   
                        </div>
                        @php
                        $count++
                        @endphp
                    @endforeach
                    </div> 
                </div>
                
                
            </section>

            <h2>{{$third->name}}</h2>
            <section class="blog pb-5">
             
                <div class="container">
                    <div class="row">
                    @foreach($tour as $package)  
                        <div class="col-lg-4  col-md-4 mar-bottom-30">

                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="{{url('upload/package_image/'.$package->image)}}" alt="Image">
                                </div>
                                <div class="blog-content">
                                    <div class="blog-date">
                                        <p><i class="fa fa-clock-o"></i>  Starts at  : {{$package->starts_at }}</p>
                                    </div>
                                    <h3><a href="#">{{$package->title}}</a></h3>
                                    <p>{!! $package->description!!}</p>
                                    
                                </div>
                   
                            </div>
                   
                        </div>
                        @php
                        $count++
                        @endphp
                    @endforeach
                    </div> 
                </div>
                
                
            </section>


        </div>
      
    </section>





    <section id="bucket-list" class="bucket-list">
        <div class="bucket-icons">
            <div class="container">
                <div class="section-title text-center">
                    <h2>Air ticket</h2>
                    <div class="section-icon">
                        <i class="flaticon-diamond"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
                </div>

            </div>
        </div>
        <div class="bucket-content">
            <div class="container">
                <div class="row isotopeContainer">
                    <div class="col-lg-6 no-padding isotopeSelector cycling wildlife family hiking">
                        <div class="hovereffect-bucket bucket-item">
                            <div class="bucket-image"><img src="images/bucket1.jpg" alt="image" class="img-responsive">
                            </div>
                            <div class="bucket-item-content">
                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 no-padding isotopeSelector cycling family hiking">
                        <div class="hovereffect-bucket bucket-item">
                            <div class="bucket-image"><img src="images/bucket5.jpg" alt="image" class="img-responsive">
                            </div>
                            <div class="bucket-item-content">
                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 no-padding isotopeSelector family hiking">
                        <div class="hovereffect-bucket bucket-item">
                            <div class="bucket-image"><img src="images/bucket3.jpg" alt="image" class="img-responsive">
                            </div>
                            <div class="bucket-item-content">
                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 no-padding isotopeSelector wildlife family hiking">
                        <div class="hovereffect-bucket bucket-item">
                            <div class="bucket-image"><img src="images/bucket2.jpg" alt="image" class="img-responsive">
                            </div>
                            <div class="bucket-item-content">
                                <h3><a href="tour-detail.html">Sailing Thailand - Phucket to Phucket</a></h3>
                                <span>7 days </span><span class="old-price"> $1749 </span><span> $1500</span>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="section-overlay"></div>
            </div>
        </div>
    </section>


    <section class="top-destinations">
        <div class="container">
            <div class="section-title text-center">
                <h2>Tour Packages</h2>
                <div class="section-icon">
                    <i class="flaticon-diamond"></i>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    @foreach($umrah as $package)  
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{url('upload/package_image/'.$package->image)}}" alt="Image">
                        <div class="overlay">
                            <h2><a href="tour-detail.html">{{$package->name}}</a></h2>
                            <p>{{$package->title}}</p>
                        </div>
                    </div>
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{url('upload/package_image/'.$package->image)}}" alt="Image">
                        <div class="overlay">
                            <h2><a href="tour-detail.html">{{$package->name}}</a></h2>
                            <p>{{$package->title}}</p>
                        </div>
                    </div>
                    @php
                    $count++
                    @endphp
                   @endforeach
                </div>
                <div class="col-lg-4 col-md-4">
                @foreach($hajj as $package)  
                    <div class="top-destination-item destination-margin">
                        <img class="img-responsive" src="{{url('upload/package_image/'.$package->image)}}" Height="698px" alt="Image">
                        <div class="overlay overlay-full">
                            <h2><a href="tour-detail.html">{{$package->name}}</a></h2>
                            <p>{{$package->title}}</p>
                        </div>
                    </div>
                    @php
                $count++
                @endphp
                @endforeach
                </div>
                <div class="col-lg-4 col-md-4">
                @foreach($tour as $package)  
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{url('upload/package_image/'.$package->image)}}" Height="346px" alt="Image">
                        <div class="overlay">
                            <h2><a href="tour-detail.html">{{$package->name}}</a></h2>
                            <p>{{$package->title}}</p>
                        </div>
                    </div>
                    <div class="top-destination-item">
                        <img class="img-responsive" src="{{url('upload/package_image/'.$package->image)}}" Height="346px" alt="Image">
                        <div class="overlay">
                            <h2><a href="tour-detail.html">{{$package->name}}</a></h2>
                            <p>{{$package->title}}</p>
                        </div>
                    </div>
                @php
                $count++
                @endphp
                @endforeach
                </div>
            </div>
        </div>
    </section>













    <section class="blog pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h2>Our Blog</h2>
                        <div class="section-icon">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit..</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mar-bottom-30">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog1.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                            </div>
                            <h3><a href="blog-detail.html">What happened during my first trip alone</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mar-bottom-30">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog2.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                            </div>
                            <h3><a href="blog-detail.html">remembering the road i went through</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mar-bottom-30">
                    <div class="blog-item">
                        <div class="blog-image">
                            <img src="images/blog3.jpg" alt="Image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-date">
                                <p><i class="fa fa-clock-o"></i> Posted On : 12 May</p>
                            </div>
                            <h3><a href="blog-detail.html">planning fot the perfect familytrip outdoor</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.Duis aute irure dolor in reprehenderit.</p>
                            <div class="blog-author">
                                <div class="pull-left">
                                    <p><a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Jack Richard</a></p>
                                </div>
                                <div class="pull-right blog-date-icon">
                                    <p><i class="fa fa-eye" aria-hidden="true"></i> 24</p>
                                    <p><i class="fa fa-heart" aria-hidden="true"></i> 5</p>
                                    <p><i class="fa fa-comment-o" aria-hidden="true"></i> 0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="trusted-partners">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="partners-title">
                        <h3>Our <span>Partners</span></h3>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <ul class="partners-logo partners-slider">
                        <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner1.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner2.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner3.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner4.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner5.png" alt="Image"></a></li>
                        <li><a href="#"><img src="images/partner6.png" alt="Image"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <footer>

        <div class="footer-links" id="contact">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-about footer-margin">
                        <div class="about-logo">
                            <img src="{{url('upload/element_image/'.$elements[0]->image)}}" width="150px" height="150px" alt="Image">
                        </div>
                        <p>{{$elements[0]->title }}</p>
                        <div class="about-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> {{$elements[0]->address }}</li>
                                <li><i class="flaticon-phone-call"></i> +88 {{$elements[0]->phone_1 }}</li>
                                <li><i class="flaticon-mail"></i> <a href="#">{{$elements[0]->email }}</a>
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