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

                    <a class="btn btn-primary float-right" href="{{route('slider.view')}}"><i
                            class="fa fa-user-circle"></i> view slider</a>

                </h3>
            </div>



            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{route('slider.update',$editData->id)}}" id="myform"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-12">

                            <label for="title_1">Maintitle</label>
                            <input id="title_1" type="text" value=" {{ $editData->title_1}}" name="title_1" class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('title_1') )?($errors->first('title_1')):''}}</font>

                        </div>

                        <div class="form-group col-md-12">

                            <label for="title_2">Subtitle</label>
                            <input id="title_2" type="text" value=" {{ $editData->title_2}}" name="title_2" class="form-control  required">
                            <font style="color: red">
                                {{($errors->has('title_2') )?($errors->first('title_2')):''}}</font>

                        </div>

                        <div class="form-group col-md-12">

                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" id="image">

                        </div>
                        <div class="form-group col-md-6">

                            <img id="showimage"
                                src="{{(!empty($editData->image))?url('upload/slider_image/'.$editData->image):url('upload/noimage.png')}}"
                                style="width: 150px;height: 160px; border:1px solid #000;">

                        </div>


                        <div class="form-group col-md-6">

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