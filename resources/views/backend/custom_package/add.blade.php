@extends('homelayout.layout')
@section('content')
@php
$count=1;
@endphp














<!-- package description are given below -->




<section class="car-destinations">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div id="content" class="col-lg-8">
                <div class="detail-content">
                    <div class="description detail-box car-book">
                        <div class="detail-title">
                            <h3>Build your own custom package</h3>
                        </div>
                        <div class="description-content">
                            <form method="POST" action="{{route('custom.store')}}" enctype="multipart/form-data"
                                id="myform">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Name:</label>
                                        <input type="text" name="name" class="form-control" id="Name" placeholder="Enter full name">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Email:</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="abc@xyz.com">
                                    </div>
                                    <div class="form-group col-lg-6 col-left-padding">
                                        <label>Phone Number:</label>
                                        <input type="text" name="phone" class="form-control" id="phnumber" placeholder="XXXX-XXXXXX">
                                    </div>
                                     <div class="form-group col-lg-12">
                                        <label>Tour Type:</label>
                                        <select name="tour_type">
                                            @foreach($buildManager as $build)
                                            <option value=""></option>
                                            <option value="{{$build->tour_type}}">{{$build->tour_type}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label>Tour name :</label>
                                        <select name="days_detail">
                                            @foreach($buildManager as $build)
                                            <option value=""></option>
                                            <option value="{{$build->days_detail}}">{{$build->days_detail}} total: {{$build->days}} Expense: {{$build->days_expenses}}</option>
                                           @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group col-lg-12">
                                        <label>Days in detail :</label>
                                        <select name="days">
                                            @foreach($buildManager as $build)
                                            <option value=""></option>
                                            <option value="{{$build->days}}">{{$build->days_detail}} total: {{$build->days}} Expense: {{$build->days_expenses}}</option>
                                           @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group col-lg-12 ">
                                        <label>Hotel Category:</label>
                                        <select name="hotel_category">
                                            <option value=""></option>
                                             @foreach($buildManager as $build)
                                            <option value="{{$build->hotel_category}}">  Hotel category {{$build->hotel_category}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                   


                                    <div class="form-group col-lg-12 ">
                                        <label>Hotel fair detail:</label>
                                        <select name="hotel_fair">
                                            <option value=""></option>
                                             @foreach($buildManager as $build)
                                            <option value="{{$build->hotel_fair}}">Fair: {{$build->hotel_fair}}   Hotel category {{$build->hotel_category}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                     <div class="form-group col-lg-12 ">
                                        <label>Flight information:</label>
                                        <select name="ticket_fair">
                                            <option value=""></option>
                                             @foreach($buildManager as $build)
                                            <option value="{{$build->ticket_fair}}"> Ticket class: {{$build->ticket_class}} Fair:{{$build->ticket_fair}} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                     <div class="form-group col-lg-12 ">
                                        <label>Your preference :</label>
                                        <textarea name="preference" id="" cols="30" rows="10">

                                        </textarea>
                                    </div>
                                    <!-- <div class="form-group textarea col-lg-12">
                                        <label>Message:</label>
                                        <textarea placeholder="Enter a message"></textarea>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Coupon Code:</label>
                                        <input type="text" class="form-control" id="Name" placeholder="Enter full name">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="checkbox-outer">
                                            <input type="checkbox" name="vehicle2" value="Car"> I want to receive <a
                                                href="#">Let’s car rent</a> promotional offers in the future terms and
                                            conditions.
                                        </div>
                                    </div> -->
                                    
                                </div>
                                <div class="comment-btn">
                       <input type="submit" value="submit" class="btn btn-primary">
                       
                    </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="description detail-box car-book">
                        <div class="detail-title">
                            <h3>YOUR CARD INFORMATION</h3>
                        </div>
                        <div class="description-content">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Card Holder Name:</label>
                                        <input type="text" class="form-control" id="Name"
                                            placeholder="Enter full name in card">
                                    </div>
                                    <div class="form-group col-lg-6 col-left-padding">
                                        <label>Card Type:</label>
                                        <select>
                                            <option value="male">MasterCard</option>
                                            <option value="female">Paypal</option>
                                            <option value="other">Visa</option>
                                            <option value="other">Discover</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Card Number:</label>
                                        <input type="text" class="form-control" id="email"
                                            placeholder="Enter Card Number">
                                    </div>
                                    <div class="form-group col-lg-6 col-left-padding">
                                        <label>Billing ZIP Code:</label>
                                        <input type="text" class="form-control" id="phnumber" placeholder="XXXXX">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label>Expiry Date:</label>
                                        <input type="date" class="form-control" id="date">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="description detail-box flight-book">
                        <div class="detail-title">
                            <h3>Where should we send your confirmation?</h3>
                        </div> -->
                        <!-- <p>Please enter the email address where you would like to receive your confirmation.</p>
                        <div class="description-content">
                            <form>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label>Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="abc@xyz.com">
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    <!-- </div>
                    <div class="description detail-box flight-book">
                        <div class="detail-title">
                            <h3>Review and book your trip</h3>
                        </div>
                        <div class="alert alert-info">
                            Attention! Please read important flight information!<br>
                            <p class="size12">• Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                tempor dolor quis sapien rhoncus, a mollis felis hendrerit. Nam dapibus vitae justo in
                                faucibus.</p>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="checkbox-outer">
                                        <input type="checkbox" name="vehicle2" value="Car"> By selecting to complete
                                        this booking I acknowledge that I have read and accept the <a href="#">rules &
                                            restrictions</a> <a href="#">terms & conditions</a> , and <a
                                            href="#">privacy policy.
                                        </a></div>
                                </div>
                            </div>
                        </form>
                    </div> -->
                    
                </div>
            </div>
           
        </div>
    </div>
</section>





<div id="back-to-top">
    <a href="#"></a>
</div>


</body>

@endsection