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
                                Add contact information

                            </h3>
                            <a class="btn btn-success float-right btn-sm" href=" {{route('contact.view')}} "> <i
                                    class="fa fa-list"></i> View contact</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data"
                                id="myform">
                                @csrf

                                <div class="form-row">

                                    <div class="form-group col-md-12">

                                        <label for="office_1">office_1</label>
                                        <input id="office_1" type="text" name="office_1" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('office_1') )?($errors->first('office_1')):''}}</font>

                                    </div>


                                    <div class="form-group col-md-12">

                                        <label for="office_2">office_2</label>
                                        <input id="office_2" type="text" name="office_2" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('office_2') )?($errors->first('office_2')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-12">

                                        <label for="office_3">office_3</label>
                                        <input id="office_3" type="text" name="office_3" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('office_3') )?($errors->first('office_3')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-12">

                                        <label for="office_4">office_4</label>
                                        <input id="office_4" type="text" name="office_4" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('office_4') )?($errors->first('office_4')):''}}</font>

                                    </div>


                                    <div class="form-group col-md-12">

                                        <label for="phone_1">phone_1</label>
                                        <input id="phone_1" type="text" name="phone_1" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('phone_1') )?($errors->first('phone_1')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="phone_2">phone_2</label>
                                        <input id="phone_2" type="text" name="phone_2" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('phone_2') )?($errors->first('phone_2')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-12">

                                        <label for="phone_3">phone_3</label>
                                        <input id="phone_3" type="text" name="phone_3" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('phone_3') )?($errors->first('phone_3')):''}}</font>

                                    </div>


                                    <div class="form-group col-md-12">

                                        <label for="description">description</label>
                                        <input id="description" type="text" name="description"
                                            class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('description') )?($errors->first('description')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="email">Email</label>
                                        <input id="email" type="email" name="email" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('email') )?($errors->first('email')):''}}</font>

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