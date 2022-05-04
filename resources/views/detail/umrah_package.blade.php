@extends('homelayout.layout')
@section('content')
@php
$count=1;
@endphp


    


                


   <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>Umrah Package</h2>
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


    <section class="blog pb-5" id="umrah">
             
             <div class="container">
                 <div class="row">
                 @foreach($umrah_package as $package)  
                     <div class="col-lg-4  col-md-4 mar-bottom-30">

                         <div class="blog-item">
                             <div class="blog-image">
                                 <img src="{{url('upload/package_image/'.$package->image)}}" height="300" width="200" alt="Image">
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





  


    <div id="back-to-top">
        <a href="#"></a>
    </div>


</body>

@endsection
