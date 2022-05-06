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
                                Add News/Blog

                            </h3>
                            <a class="btn btn-success float-right btn-sm" href=" {{route('newsManager.view')}} "> <i
                                    class="fa fa-list"></i> View News/Blog</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{route('newsManager.store')}}" enctype="multipart/form-data"
                                id="myform">
                                @csrf

                                <div class="form-row">
                                    

                                    <div class="form-group col-md-12">
                                        <label for="approval">Approval</label>
                                        <select name="approval" id="approval" class="form-control  required">

                                            <option value=""></option>
                                            <option value="1">approved</option>
                                            <option value="0">not approved</option>

                                        </select>
                                    </div>


                                    <div class="form-group col-md-12">

                                        <label for="news_title">News Title</label>
                                        <input id="news_title" type="text" name="news_title"
                                            class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('news_title') )?($errors->first('news_title')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-12">

                                        <label for="blog_title">Blog Title</label>
                                        <input id="blog_title" type="text" name="blog_title"
                                            class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('blog_title') )?($errors->first('blog_title')):''}}</font>

                                    </div>
                                    <div class="form-group col-md-12">

                                        <label for="source">source</label>
                                        <input id="source" type="text" name="source" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('source') )?($errors->first('source')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="news">News</label>
                                        <input id="news" type="text" name="news" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('news') )?($errors->first('news')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="blog">Blog</label>
                                        <input id="blog" type="text" name="blog" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('blog') )?($errors->first('blog')):''}}</font>

                                    </div>


                                    <div class="form-group col-md-12">

                                        <label for="image">Image</label>
                                        <input type="file" name="image" class="form-control" id="image">

                                    </div>
                                    <div class="form-group col-md-6">

                                        <img id="showimage"
                                            src="{{(!empty($editData->image))?url('upload/news_image/'.$editData->image):url('upload/noimage.png')}}"
                                            style="width: 150px;height: 160px; border:1px solid #000;">

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