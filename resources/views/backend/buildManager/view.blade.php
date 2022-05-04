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
                 Build Manager
                  
                </h3>
                <a class="btn btn-success float-right btn-sm" href=" {{route('buildManager.add')}} "> <i class="fa fa-plus-circle"></i> Add Package</a>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>tour_type</th>
                        <th>days</th>
                        <th>days_detail</th>
                        <th>days_expenses</th>
                        <th>hotel</th>
                        <th>hotel_category</th>
                        <th>hotel_fair</th>
                        <th>ticket_class</th>
                        <th>ticket_fair</th>
                        <th>others_expenses</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key=>$build_manager)
                      <tr>
                        <td> {{$key+1}} </td>
                        <td> {{$build_manager->tour_type}} </td>
                        <td> {{$build_manager->days}} </td>
                        <td> {{$build_manager->days_detail}} </td>
                        <td> {{$build_manager->days_expenses}} </td>
                        <td>{{$build_manager->hotel}}</td>
                        <td>{{$build_manager->hotel_category}}</td>
                        <td>{{$build_manager->hotel_fair}}</td>
                        <td>{{$build_manager->ticket_class}}</td>
                        <td>{{$build_manager->ticket_fair}}</td>
                        <td>{{$build_manager->others_expenses}}</td>
                        
                        
                       
                        

                        
                        <td> 
                   				<a title="edit" class="btn btn-primary" href="{{route('buildManager.edit',$build_manager->id)}} "><i class="fa fa-edit"></i></a>
                   				<a title="delete" id="delete" class="btn btn-danger" href=" {{route('buildManager.delete',$build_manager->id)}} "><i class="fa fa-trash"></i></a>

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