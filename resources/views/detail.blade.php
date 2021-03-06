@php
$count=1;
@endphp

@extends('homelayout.layout')
@section('content')




   


  <h1>{{$package->title}}</h1>


   <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>{{$package->title}}</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Destinations</a></li>
                        <li class="breadcrumb-item active" aria-current="page">EBC Trek</li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>



    <!-- package description are given below -->

    <section class="main-content detail">
        <div class="container">
            <div class="row">
                <div id="content" class="col-lg-8">
                    <div class="detail-content content-wrapper">
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">
                                <h2>Package:{{$package->name}}</h2><br>
                                <h2>Span:{{$package->span}}</h2>
                                <p class="detail-info-price"><span class="bold">Starts at : {{$package->starts_at}}</span></p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                        <div class="gallery detail-box">

                            <div id="in_th_030"
                                class="carousel slide in_th_brdr_img_030 thumb_scroll_x swipe_x ps_easeOutQuint"
                                data-ride="carousel" data-pause="hover" data-interval="4000" data-duration="2000">

                                

                                <div class="carousel-inner" role="listbox">
                                    <div class="item">

                                        <img src="{{url('upload/package_image/'.$package->image)}}" alt="in_th_030_03">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Description</h3>
                            </div>
                            <div class="description-content">
                                <p>{!!$package->description!!}</p>
                                
                            </div>
                        </div>

                        
                      
                       
                        <div class="comments-form detail-box">
                            <div class="detail-title">
                                <!-- <h3>Add Your Comment</h3> -->
                            </div>

                        </div>
                    </div>
                </div>
                <div id="sidebar-sticky" class="col-lg-4">
                    <aside class="detail-sidebar sidebar-wrapper">
                        <div class="sidebar-item sidebar-item-dark">
                            <div class="detail-title">
                                <h3>Book this tour</h3>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <input type="text" class="form-control" id="Name1" placeholder="Name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="email" class="form-control" id="email1" placeholder="Email">
                                    </div>
                                    <div class="form-group col-lg-6 col-left-padding">
                                        <input type="number" class="form-control" id="phnumber1"
                                            placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                    <div class="form-group col-lg-6 col-left-padding">
                                        <input type="number" class="form-control" id="phnumber">
                                    </div>
                                    <div class="textarea col-lg-12">
                                        <textarea placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="comment-btn">
                                            <a href="#" class="btn-blue btn-red">Book Now</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Any Questions?</h3>
                                <p>Lorem ipsum dolor sit amet, consectet ur adipiscing elit, sedpr do eiusmod tempor
                                    incididunt ut.</p>
                                <p><i class="flaticon-phone-call"></i> (012)-345-6789</p>
                                <p><i class="flaticon-mail"></i> <a href="/cdn-cgi/l/email-protection"
                                        class="__cf_email__"
                                        data-cfemail="35415a40475b414754435059754150464158545c591b565a58">[email&#160;protected]</a>
                                </p>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>






  


    <div id="back-to-top">
        <a href="#"></a>
    </div>

  @endsection