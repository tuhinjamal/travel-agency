@extends('layouts.admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
 


               <div class="card-header">
                <h3>Edit Profile

                	<a class="btn btn-primary float-right" href="{{route('package.view')}}"><i class="fa fa-user-circle"></i>  view profile</a>

                </h3>
                </div>
              


              <!-- /.card-header -->
              <div class="card-body">
                
                  <form method="POST" action="{{route('buildManager.update',$editData->id)}}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                       
                       
	                        <div class="form-group col-md-6">

	                        		<label for="tour_type" >tour_type</label>
	                        		<input id="tour_type" type="text" name="tour_type" value=" {{ $editData->tour_type}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('tour_type') )?($errors->first('tour_type')):''}}</font>

	                        </div>

                            <div class="form-group col-md-6">

	                        		<label for="days" >days</label>
	                        		<input id="days" type="text" name="days" value=" {{ $editData->days}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('days') )?($errors->first('days')):''}}</font>

	                        </div>

                            <div class="form-group col-md-6">

	                        		<label for="days_detail" >days_detail</label>
	                        		<input id="days_detail" type="text" name="days_detail" value=" {{ $editData->days_detail}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('days_detail') )?($errors->first('days_detail')):''}}</font>

	                        </div>
                            <div class="form-group col-md-6">

	                        		<label for="days_expenses" >days_expenses</label>
	                        		<input id="days_expenses" type="text" name="days_expenses" value=" {{ $editData->days_expenses}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('days_expenses') )?($errors->first('days_expenses')):''}}</font>

	                        </div>
                            <div class="form-group col-md-6">

	                        		<label for="hotel" >hotel</label>
	                        		<input id="hotel" type="text" name="hotel" value=" {{ $editData->hotel}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('hotel') )?($errors->first('hotel')):''}}</font>

	                        </div>
                            <div class="form-group col-md-6">

	                        		<label for="hotel_category" >hotel_category</label>
	                        		<input id="hotel_category" type="text" name="hotel_category" value=" {{ $editData->hotel_category}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('hotel_category') )?($errors->first('hotel_category')):''}}</font>

	                        </div>
                            <div class="form-group col-md-6">

	                        		<label for="hotel_fair" >hotel_fair</label>
	                        		<input id="hotel_fair" type="text" name="hotel_fair" value=" {{ $editData->hotel_fair}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('hotel_fair') )?($errors->first('hotel_fair')):''}}</font>

	                        </div>
                            <div class="form-group col-md-6">

	                        		<label for="ticket_class" >ticket_class</label>
	                        		<input id="ticket_class" type="text" name="ticket_class" value=" {{ $editData->ticket_class}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('ticket_class') )?($errors->first('ticket_class')):''}}</font>

	                        </div>
                            <div class="form-group col-md-6">

	                        		<label for="ticket_fair" >ticket_fair</label>
	                        		<input id="ticket_fair" type="text" name="ticket_fair" value=" {{ $editData->ticket_fair}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('ticket_fair') )?($errors->first('ticket_fair')):''}}</font>

	                        </div>
                            <div class="form-group col-md-6">

	                        		<label for="others_expenses" >others_expenses</label>
	                        		<input id="others_expenses" type="text" name="others_expenses" value=" {{ $editData->others_expenses}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('others_expenses') )?($errors->first('others_expenses')):''}}</font>

	                        </div>
                         

	                       
                            <div class="form-group col-md-6">

	                        		<input  type="submit" value="submit" class="btn btn-primary">
                                    
                               
	            
	                        </div>
	                            

                            

                         </div>
                   
                       		
                    	</form>
                   
                   	                  
               
             		 </div>
                </div>


                       <!-- /.card-body -->
            </div>
            <!-- /.card -->

            

            

            
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#meta_editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

  @endsection