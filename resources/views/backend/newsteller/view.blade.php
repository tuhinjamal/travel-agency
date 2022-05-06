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
                  News List
                  
                </h3>
                <a class="btn btn-success float-right btn-sm" href=" {{route('newsManager.add')}} "> <i class="fa fa-plus-circle"></i> Add newsManager</a>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>Approval</th>
                        <th>News Title</th>
                        <th>Blog Title</th>
                        <th>Source</th>                        
                        <th>News</th>
                        <th>Blog</th>
                        <th>Published on</th>
                        <th>Image</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($newstellers as $key=>$newsManager)
                      <tr>
                        <td> {{$key+1}} </td>
                        <td> {{$newsManager->approval}} </td>
                        <td> {{$newsManager->news_title}} </td>
                        <td> {{$newsManager->blog_title}} </td>
                        <td> {{$newsManager->source}} </td>
                        <td> {{$newsManager->news}} </td>
                        <td> {{$newsManager->blog}} </td>
                        <td> {{$newsManager->published_on}} </td>
                        
                        <td> <img src="{{(!empty($newsManager->image))?url('upload/news_image/'.$newsManager->image):url('upload/noimage.png')}}" width="120px" height="130px" alt="newsManager"> </td>
                        <td> 
                   				<a title="edit" class="btn btn-primary" href="{{route('newsManager.edit',$newsManager->id)}} "><i class="fa fa-edit"></i></a>
                   				<a title="delete" id="delete" class="btn btn-danger" href=" {{route('newsManager.delete',$newsManager->id)}} "><i class="fa fa-trash"></i></a>

                   			</td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
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
  @endsection