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
                                Add element

                            </h3>
                            <a class="btn btn-success float-right btn-sm" href=" {{route('element.view')}} "> <i
                                    class="fa fa-list"></i> View elements</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{route('element.store')}}" enctype="multipart/form-data"
                                id="myform">
                                @csrf

                                <div class="form-row">

                                    <div class="form-group col-md-12">

                                        <label for="title">title</label>
                                        <input id="title" type="text" name="title" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('title') )?($errors->first('title')):''}}</font>

                                    </div>


                                    <div class="form-group col-md-12">

                                        <label for="phone_1">phone-1</label>
                                        <input id="phone_1" type="text" name="phone_1" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('phone_1') )?($errors->first('phone_1')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-12">

                                        <label for="phone_2">phone-2</label>
                                        <input id="phone_2" type="text" name="phone_2" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('phone_2') )?($errors->first('phone_2')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-12">

                                        <label for="phone_3">phone-3</label>
                                        <input id="phone_3" type="text" name="phone_3" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('phone_3') )?($errors->first('phone_3')):''}}</font>

                                    </div>


                                    <div class="form-group col-md-12">

                                        <label for="address">Address</label>
                                        <input id="address" type="text" name="address" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('address') )?($errors->first('address')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="website">website</label>
                                        <textarea name="website" class="form-control  required" id="editor" cols="30"
                                            rows="5"></textarea>
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