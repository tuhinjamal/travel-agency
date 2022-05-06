@extends('layouts.admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit News/Blog</h1>
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

                    <a class="btn btn-primary float-right" href="{{route('newsManager.view')}}"><i
                            class="fa fa-user-circle"></i> view News/Blog</a>

                </h3>
            </div>



            <!-- /.card-header -->
            <div class="card-body">

                <form method="POST" action="{{route('newsManager.update',$editData->id)}}" id="myform"
                    enctype="multipart/form-data">

                    @csrf

                    <div class="form-row">
                       

                         <div class="form-group col-md-12">
                                        <label for="approval">Approval</label>
                                        <select name="approval" id="approval" class="form-control  required">

                                            <option value=""></option>
                                            <option value="1" {{($editData->approval=="1")?"selected":""}}>approved
                                            </option>
                                            <option value="0" {{($editData->approval=="0")?"selected":""}}>not approved
                                            </option>

                                        </select>
                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="news_title">News Title</label>
                                        <input id="news_title" type="text" value=" {{ $editData->news_title}}" name="news_title" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('news_title') )?($errors->first('news_title')):''}}</font>

                                    </div>

                                     <div class="form-group col-md-12">

                                        <label for="blog_title">Blog Title</label>
                                        <input id="blog_title" type="text" value=" {{ $editData->blog_title}}" name="blog_title" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('blog_title') )?($errors->first('blog_title')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="source">source</label>
                                        <input id="source" type="text" value=" {{ $editData->source}}" name="source" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('source') )?($errors->first('source')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="news">News</label>
                                        <input id="news" type="text" value=" {{ $editData->news}}" name="news" class="form-control  required">
                                        <font style="color: red">
                                            {{($errors->has('news') )?($errors->first('news')):''}}</font>

                                    </div>

                                    <div class="form-group col-md-12">

                                        <label for="blog">Blog</label>
                                        <input id="blog" type="text" value=" {{ $editData->blog}}" name="blog" class="form-control  required">
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