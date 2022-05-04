@extends('layouts.admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Contact</h1>
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

                    <a class="btn btn-primary float-right" href="{{route('contact.view')}}"><i
                            class="fa fa-user-circle"></i> view profile</a>

                </h3>
            </div>



            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{route('contact.update',$editData->id)}}" id="myform"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="form-row">

                        <div class="form-group col-md-4">

                            <label for="office_1">office_1</label>
                            <input id="office_1" type="text" name="office_1" value=" {{ $editData->office_1}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('office_1') )?($errors->first('office_1')):''}}
                            </font>

                        </div>
                        <div class="form-group col-md-4">

                            <label for="office_2">office_2</label>
                            <input id="office_2" type="text" name="office_2" value=" {{ $editData->office_2}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('office_2') )?($errors->first('office_2')):''}}
                            </font>

                        </div>
                        <div class="form-group col-md-4">

                            <label for="office_3">office_3</label>
                            <input id="office_3" type="text" name="office_3" value=" {{ $editData->office_3}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('office_3') )?($errors->first('office_3')):''}}
                            </font>

                        </div>
                        <div class="form-group col-md-4">

                            <label for="office_4">office_4</label>
                            <input id="office_4" type="text" name="office_4" value=" {{ $editData->office_4}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('office_4') )?($errors->first('office_4')):''}}
                            </font>

                        </div>

                        <div class="form-group col-md-4">

                            <label for="phone_1">phone_1</label>
                            <input id="phone_1" type="text" name="phone_1" value=" {{ $editData->phone_1}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('phone_1') )?($errors->first('phone_1')):''}}
                            </font>

                        </div>
                        <div class="form-group col-md-4">

                            <label for="phone_2">phone_2</label>
                            <input id="phone_2" type="text" name="phone_2" value=" {{ $editData->phone_2}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('phone_2') )?($errors->first('phone_2')):''}}
                            </font>

                        </div>
                        <div class="form-group col-md-4">

                            <label for="phone_3">phone_3</label>
                            <input id="phone_3" type="text" name="phone_3" value=" {{ $editData->phone_3}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('phone_3') )?($errors->first('phone_3')):''}}
                            </font>

                        </div>

                        <div class="form-group col-md-4">

                            <label for="email">email</label>
                            <input id="email" type="text" name="email" value=" {{ $editData->email}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('email') )?($errors->first('email')):''}}
                            </font>

                        </div>

                        <div class="form-group col-md-4">

                            <label for="description">description</label>
                            <input id="description" type="text" name="description" value=" {{ $editData->description}}"
                                class="form-control  required">
                            <font style="color: red"> {{($errors->has('description') )?($errors->first('description')):''}}
                            </font>

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