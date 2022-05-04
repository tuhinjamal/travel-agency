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