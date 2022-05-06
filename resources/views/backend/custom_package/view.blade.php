@php
$count=1;
@endphp

@extends('homelayout.layout')
@section('content')




   


 


   <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Your custom package information</h2>
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
                                <h2>Name:{{$builds->name}}</h2><br>
                                <h2>Email:{{$builds->email}}</h2>
                                <p class="detail-info-price "><span class="bold">Phone:{{$builds->phone}}</span></p>
                               
                            </div>
                        </div>
                       
                        <div class="description detail-box">
                            <div class="detail-title">
                                <h3>Description</h3>
                            </div>
                            <div class="description-content">
                                <p>Name:{{$builds->name}}</p>
                                <p>Email:{{$builds->email}}</p>
                                <p>Phone:{{$builds->phone}}</p>
                                <p>Tour type:{{$builds->tour_type}}</p>
                                <p>Tour name:{{$builds->days_detail}}</p>
                                <p>Days:{{$builds->days}}</p>
                                <p>Hotel fair:{{$builds->hotel_fair}}</p>
                                <p>Ticket Fair:{{$builds->ticket_fair}}</p>
                                <!-- <p>operations</p>
                                <p>Total:trim(ops, '[]');</p> -->
                                <p>Total cost: {{ $builds->days * $builds->hotel_fair + $builds-> ticket_fair }}</p>

                                <p>user preference:{{$builds->preference}} </p>
                                

                                
                               
                                
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