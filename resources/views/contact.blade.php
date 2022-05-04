@php
$count=1;
@endphp

@extends('homelayout.layout')
@section('content')







   


  <h1></h1>


   <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Contact us</h2>
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



    <!-- contacts description are given below -->

    <section class="main-content detail">
        <div class="container">
            <div class="row">
                <div id="content" class="col-lg-8">
                    <div class="detail-content content-wrapper">
                        <div class="detail-info">
                            <div class="detail-info-content clearfix">
                                <h2></h2><br>
                                <h2></h2>
                                <p class="detail-info-price"><span class="bold">Contact us</span></p>
                                <div class="deal-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star-o"></span>
                                    <span class="fa fa-star-o"></span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Office 1</h3>
                            </div>
                            <div class="description-content">
                                <p> {{$contacts->office_1}} </p>
                                
                            </div>
                           
                        </div>


                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Office 2</h3>
                            </div>
                            <div class="description-content">
                                <p> {{$contacts->office_2}} </p>
                                
                            </div>
                           
                        </div>

                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Office 3</h3>
                            </div>
                            <div class="description-content">
                                <p> {{$contacts->office_3}} </p>
                                
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
                        
                        
                        <div class="sidebar-item sidebar-helpline">
                            <div class="sidebar-helpline-content">
                                <h3>Contact us</h3>
                                <p>{{$contacts->description}}</p>
                                <p><i class="flaticon-phone-call"></i> {{$contacts->phone_1}} </p>
                                <p><i class="flaticon-phone-call"></i> {{$contacts->phone_2}} </p>
                                <p><i class="flaticon-phone-call"></i> {{$contacts->phone_3}} </p>
                                <p><i class="flaticon-mail"> {{$contacts->email}} </i> 
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
   