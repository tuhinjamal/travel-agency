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
                  Package List
                  
                </h3>
                <a class="btn btn-success float-right btn-sm" href=" {{route('element.add')}} "> <i class="fa fa-plus-circle"></i> Add Contact/logo</a>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>title</th>
                        <th>phone-1</th>
                        <th>Phone-2</th>
                        <th>Phone-3</th>
                        <th>address</th>
                        <th>website</th>
                        <th>Logo</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key=>$element)
                      <tr>
                        <td> {{$key+1}} </td>
                        <td> {{$element->category}} </td>
                        <td> {{$element->name}} </td>
                        <td> {{$element->title}} </td>
                        <td> {!!$element->description!!} </td>
                        <td>{{$element->starts_at}}</td>
                        <td>{{$element->meta_title}}</td>
                        <td>{!!$element->meta_description!!}</td>
                        <td> <img src="{{(!empty($element->image))?url('upload/element_image/'.$element->image):url('upload/noimage.png')}}" width="120px" height="130px" alt="slider"> </td>
                        
                        
                        

                        
                        <td> 
                   				<a title="edit" class="btn btn-primary" href="{{route('element.edit',$element->id)}} "><i class="fa fa-edit"></i></a>
                   				<a title="delete" id="delete" class="btn btn-danger" href=" {{route('element.delete',$element->id)}} "><i class="fa fa-trash"></i></a>

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