@extends('homelayout.layout')
@section('content')
@php
$count=1;
@endphp
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
                                <div class="search-title d-flex align-items-center justify-content-between bg-primary">
                                    <p>Buil your <span>own package</span></p>
                                    <i class="fa fa-building" aria-hidden="true" style="font-size:48px;"></i>
                                    
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
                                        <a href="#" class="btn-blue btn-green">Start</a>
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
          
            <h2>{{optional($first)->name}}</h2>
           
            
            <section class="blog pb-5" id="hajj">
             
                <div class="container">
                    <div class="row">
                    @foreach($hajj as $package)  
                        <div class="col-lg-4  col-md-4 mar-bottom-30">

                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="{{url('upload/package_image/'.$package->image)}}" height="300" width="200" alt="{{$package->alt}}">
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
            <h2>{{optional($second)->name}}</h2>
            <section class="blog pb-5" id="umrah">
             
                <div class="container">
                    <div class="row">
                    @foreach($umrah as $package)  
                        <div class="col-lg-4  col-md-4 mar-bottom-30">

                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="{{url('upload/package_image/'.$package->image)}}" height="300" width="200" alt="{{$package->alt}}">
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

            <h2>{{$third->name}}</h2>
            <section class="blog pb-5">
             
                <div class="container">
                    <div class="row">
                    @foreach($tour as $package)  
                        <div class="col-lg-4  col-md-4 mar-bottom-30">

                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="{{url('upload/package_image/'.$package->image)}}" height="300" width="200" alt="{{$package->alt}}">
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
                            <img src="{{url('upload/element_image/'.$elements->image)}}" width="150px" height="150px" alt="Image">
                        </div>
                        <p>{{$elements->title }}</p>
                        <div class="about-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i> {{$elements->address }}</li>
                                <li><i class="flaticon-phone-call"></i> +88 {{$elements->phone_1 }}</li>
                                <li><i class="flaticon-mail"></i> <a href="#">{{$elements->email }}</a>
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
@endsection