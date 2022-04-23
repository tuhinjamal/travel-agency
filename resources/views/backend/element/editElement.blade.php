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

                    <a class="btn btn-primary float-right" href="{{route('package.view')}}"><i
                            class="fa fa-user-circle"></i> view profile</a>

                </h3>
            </div>



            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{route('element.update',$editData->id)}}" id="myform"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="form-row">


                        <div class="form-group col-md-12">

                            <label for="title">title</label>
                            <input id="title" type="text" value=" {{ $editData->title}}" name="title"
                                class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('title') )?($errors->first('title')):''}}</font>

                        </div>


                        <div class="form-group col-md-12">

                            <label for="phone_1">phone-1</label>
                            <input id="phone_1" type="text" value=" {{ $editData->phone_1}}" name="phone_1"
                                class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('phone_1') )?($errors->first('phone_1')):''}}</font>

                        </div>
                        <div class="form-group col-md-12">

                            <label for="phone_2">phone-2</label>
                            <input id="phone_2" type="text" value=" {{ $editData->phone_2}}" name="phone_2"
                                class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('phone_2') )?($errors->first('phone_2')):''}}</font>

                        </div>
                        <div class="form-group col-md-12">

                            <label for="phone_3">phone-3</label>
                            <input id="phone_3" type="text" value=" {{ $editData->phone_3}}" name="phone_3"
                                class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('phone_3') )?($errors->first('phone_3')):''}}</font>

                        </div>


                        <div class="form-group col-md-12">

                            <label for="address">Address</label>
                            <input id="address" type="text" value=" {{ $editData->address}}" name="address"
                                class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('address') )?($errors->first('address')):''}}</font>

                        </div>
                        <div class="form-group col-md-12">

                            <label for="email">Email</label>
                            <input id="email" type="email" name="email" value=" {{ $editData->email}}" class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('email') )?($errors->first('email')):''}}</font>

                        </div>

                        <div class="form-group col-md-12">

                            <label for="website">website</label>
                            <textarea name="website" class="form-control  required" id="editor" cols="30"
                                rows="5">{{ $editData->website}}"</textarea>
                            <!-- <input id="name" type="text" name="name" class="form-control  required"> -->
                            <font style="color: red">
                                {{($errors->has('website') )?($errors->first('website')):''}}</font>

                        </div>





                        <div class="form-group col-md-12">

                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" id="image">

                        </div>
                        <div class="form-group col-md-6">

                            <img id="showimage"
                                src="{{(!empty($editData->image))?url('upload/element_image/'.$editData->image):url('upload/noimage.png')}}"
                                style="width: 150px;height: 160px; border:1px solid #000;">

                        </div>


                        <div class="form-group col-md-12">

                            <input type="submit" value="submit" class="btn btn-primary">



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
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#meta_editor'))
        .catch(error => {
            console.error(error);
        });
</script>

@endsection