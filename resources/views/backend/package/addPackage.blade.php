@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
 
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 ">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-user mr-1"></i>
                  Add Package 
                  
                </h3>
                <a class="btn btn-success float-right btn-sm" href=" {{route('package.view')}} "> <i class="fa fa-list"></i> View Packages</a>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form method="POST" action="{{route('package.store')}}" enctype="multipart/form-data" id="myform">
                        @csrf

                        <div class="form-row">
                        	<div class="form-group col-md-12">
                        		<label for="category" > Category</label>
                            	<select name="category"  id="category" class="form-control  required">
                            		
                            	
                            	<option value="0">Hajj</option>
                            	<option value="1">Umrah</option>
                                <option value="2">Tour</option>

                            	</select>
                        	</div>
	                        <div class="form-group col-md-12">

	                        		<label for="title" >title</label>
	                        		<input id="title" type="text" name="title" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('title') )?($errors->first('title')):''}}</font>

	                        </div>


                          <div class="form-group col-md-12">

                              <label for="meta_title" >meta_title</label>
                              <input id="meta_title" type="text" name="meta_title" class="form-control  required">
                              <font style="color: red"> {{($errors->has('meta_title') )?($errors->first('meta_title')):''}}</font>

                          </div>

                          <div class="form-group col-md-12">

	                        		<label for="name" >name</label>
	                        		<input id="name" type="text" name="name" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

	                        </div>

                          <div class="form-group col-md-12">

	                        		<label for="starts_at" >Starts at</label>
	                        		<input id="starts_at" type="text" name="starts_at" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('starts_at') )?($errors->first('starts_at')):''}}</font>

	                        </div>
                          
                          

                          <div class="form-group col-md-12">

                        		<label for="image">Image</label>
                        		<input type="file" name="image" class="form-control" id="image">

                        	</div>
                        	<div class="form-group col-md-6">

                        		<img id="showimage" src="{{(!empty($editData->image))?url('upload/package_image/'.$editData->image):url('upload/noimage.png')}}" style="width: 150px;height: 160px; border:1px solid #000;">

                        	</div>



                          <div class="form-group col-md-12">

                        		<label for="meta_image"> Meta Image</label>
                        		<input type="file" name="meta_image" class="form-control" id="meta_image">

                        	</div>
                        	<div class="form-group col-md-6">

                        		<img id="showimage" src="{{(!empty($editData->meta_image))?url('upload/package_image/meta_image'.$editData->meta_image):url('upload/noimage.png')}}" style="width: 150px;height: 160px; border:1px solid #000;">

                        	</div>


                          <div  class="form-group col-md-12">

	                        		<label for="description" >description</label>
                                    <textarea name="description" class="form-control  required"  id="editor" cols="30" rows="5"></textarea>
	                        		<!-- <input id="name" type="text" name="name" class="form-control  required"> -->
	                        		<font style="color: red"> {{($errors->has('description') )?($errors->first('description')):''}}</font>

	                        </div>
                          


                         

                          <div class="form-group col-md-12 ">

	                        		<label for="meta_description" >meta_description</label>
	                        		<!-- <input id="meta_description" type="text" name="meta_description" class="form-control  required"> -->
                              <textarea name="meta_description" class="form-control  required"  id="meta_editor" cols="30" rows="5"></textarea>
	                        		<font style="color: red"> {{($errors->has('meta_description') )?($errors->first('meta_description')):''}}</font>

	                        </div>

	                       
                            <div class="form-group col-md-6">

	                        		<input  type="submit" value="submit" class="btn btn-primary">
                                    
                               
	            
	                        </div>
	                            

                            

                         </div>
                            
                   
                       		
                    	</form>
            </div>
                    
            <!-- /.card -->

            <!-- DIRECT CHAT -->
 
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            
            <!-- /.card -->

            <!-- solid sales graph -->

            <!-- /.card -->

            <!-- Calendar -->
            
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

  <!-- Page specific script -->
<script>
$(function () {
  $('#myform').validate({
    rules: {
      usertype: {
        required: true,
        
      },
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      password: {
        required: true,
        equalTo: '#password'
      },
      terms: {
        required: true
      },
    },
    messages: {
        usertype: {
        required: "Please select usertype ",
       
      },
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      password2: {
        required: "Please provide same password",
        equalTo: "Confirm password does not match "
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

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