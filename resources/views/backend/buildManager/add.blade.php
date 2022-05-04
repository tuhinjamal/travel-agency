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
                <section class="col-lg-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-tour_type">
                                <i class="fas fa-user mr-1"></i>
                                Maintain custom Packages

                            </h3>
                            <a class="btn btn-success float-right btn-sm" href=" {{route('buildManager.view')}} "> <i
                                    class="fa fa-list"></i> View Maintained Packages</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{route('buildManager.store')}}" enctype="multipart/form-data"
                                id="myform">
                                @csrf

                                <div class="form-row">
                                    
                                    <div class="form-group col-md-6">

                                        <label for="tour_type">tour_type</label>
                                        <input id="tour_type" type="text" name="tour_type" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('tour_type') )?($errors->first('tour_type')):''}}</font>

                                    </div>


                                    <div class="form-group col-md-6">

                                        <label for="days">days</label>
                                        <input id="days" type="number" name="days"
                                            class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('days') )?($errors->first('days')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for="days_detail">days_detail</label>
                                        <input id="days_detail" type="text" name="days_detail" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('days_detail') )?($errors->first('days_detail')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for="days_expenses">days_expenses</label>
                                        <input id="days_expenses" type="number" name="days_expenses" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('days_expenses') )?($errors->first('days_expenses')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-6">

                                        <label for="hotel">hotel</label>
                                        <input id="hotel" type="text" name="hotel" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('hotel') )?($errors->first('hotel')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-6">

                                        <label for="hotel_category">hotel_category</label>
                                        <input id="hotel_category" type="text" name="hotel_category"
                                            class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('hotel_category') )?($errors->first('hotel_category')):''}}</font>

                                    </div>



                                   



                                  


                                    <div class="form-group col-md-6">

                                        <label for="hotel_fair">hotel_fair</label>
                                        <!-- <textarea name="hotel_fair" class="form-control  required" id="editor"
                                            cols="30" rows="5"></textarea> -->
                                        <input id="hotel_fair" type="number" name="hotel_fair" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('hotel_fair') )?($errors->first('hotel_fair')):''}}</font>

                                    </div>





                                    <div class="form-group col-md-6 ">

                                        <label for="ticket_class">ticket_class</label>
                                        <input id="ticket_class" type="text" name="ticket_class" class="form-control  required">
                                        <!-- <textarea name="ticket_class" class="form-control  required"
                                            id="meta_editor" cols="30" rows="5"></textarea> -->
                                        <font style="color: red">
                                            {{($errors->has('ticket_class') )?($errors->first('ticket_class')):''}}
                                        </font>

                                    </div>


                                     <div class="form-group col-md-6 ">

                                        <label for="ticket_fair">ticket_fair</label>
                                        <input id="ticket_fair" type="number" name="ticket_fair" class="form-control  required">
                                        <!-- <textarea name="ticket_fair" class="form-control  required"
                                            id="meta_editor" cols="30" rows="5"></textarea> -->
                                        <font style="color: red">
                                            {{($errors->has('ticket_fair') )?($errors->first('ticket_fair')):''}}
                                        </font>

                                     </div>
                                     <div class="form-group col-md-6 ">

                                        <label for="others_expenses">others_expenses</label>
                                        <input id="others_expenses" type="number" name="others_expenses" class="form-control  required">
                                        <!-- <textarea name="others_expenses" class="form-control  required"
                                            id="meta_editor" cols="30" rows="5"></textarea> -->
                                        <font style="color: red">
                                            {{($errors->has('others_expenses') )?($errors->first('others_expenses')):''}}
                                        </font>

                                     </div>


                                    <div class="form-group col-md-6">

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