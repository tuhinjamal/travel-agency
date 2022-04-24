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
                
                  <form method="POST" action="{{route('package.update',$editData->id)}}" id="myform" enctype="multipart/form-data">
                       
                        @csrf
                       
                        <div class="form-row">
                        	<div class="form-group col-md-4">
                        		<label for="category" > Category</label>
                            	<select name="category"  id="category" class="form-control  required">
                            		
                            	
                            	<option value="0">Hajj</option>
                            	<option value="1">Umrah</option>
                                <option value="2">Tour</option>

                            	</select>
                        	</div>
	                        <div class="form-group col-md-4">

	                        		<label for="titlee" >title</label>
	                        		<input id="titlee" type="text" name="titlee" value=" {{ $editData->titlee}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

	                        </div>
                          <div class="form-group col-md-4">

                              <label for="meta_title" >meta_title</label>
                              <input id="meta_title" type="text" name="meta_title" value=" {{ $editData->meta_title}}" class="form-control  required">
                              <font style="color: red"> {{($errors->has('meta_title') )?($errors->first('meta_title')):''}}</font>

                          </div>
                          <div class="form-group col-md-4">

	                        		<label for="name" >name</label>
	                        		<input id="name" type="text" name="name" value=" {{ $editData->name}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

	                        </div>

                             <div class="form-group col-md-4">

	                        		<label for="starts_at" >Starts at</label>
	                        		<input id="starts_at" type="text" name="starts_at" value=" {{ $editData->starts_at}}" class="form-control  required">
	                        		<font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

	                        </div>
                            
                           


                          <div class="form-group col-md-4">

                        		<label for="image">Image</label>
                        		<input type="file" name="image" class="form-control" id="image">

                        	</div>
                        	<div class="form-group col-md-2">

                        		<img id="showimage" src="{{(!empty($editData->image))?url('upload/package_image/'.$editData->image):url('upload/noimage.png')}}" style="width: 150px;height: 160px; border:1px solid #000;">

                        	</div>


                          <div class="form-group col-md-4">

                            <label for="image">Image</label>
                            <input type="file" name="meta_image" class="form-control" id="image">

                            </div>
                            <div class="form-group col-md-2">

                            <img id="showimage" src="{{(!empty($editData->meta_image))?url('upload/package_image/meta_image/'.$editData->meta_image):url('upload/noimage.png')}}" style="width: 150px;height: 160px; border:1px solid #000;">

                          </div>

                          <div class="form-group col-md-6">

                            <label for="description" >description</label>
                                  <textarea name="description" class="form-control  required"  id="editor" cols="30" rows="5"> {{ $editData->description}}</textarea>
                            <!-- <input id="name" type="text" name="name" class="form-control  required"> -->
                            <font style="color: red"> {{($errors->has('name') )?($errors->first('name')):''}}</font>

                            </div>

                            <div class="form-group col-md-6">

                            <label for="meta_description" >meta_description</label>
                            <!-- <input id="meta_description" type="text" name="meta_description" class="form-control  required"> -->
                            <textarea name="meta_description" class="form-control  required" id="meta_editor" cols="30" rows="5">{{ $editData->meta_description}}</textarea>
                            <font style="color: red"> {{($errors->has('meta_description') )?($errors->first('meta_description')):''}}</font>

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