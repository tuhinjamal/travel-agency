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
                  contact List
                  
                </h3>
                <a class="btn btn-success float-right btn-sm" href=" {{route('contact.add')}} "> <i class="fa fa-plus-circle"></i> Add contact</a>
              </div><!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-hover table-responsive">
                    <thead>
                      <tr>
                        <th>SL.</th>
                        <th>office_1</th>
                        <th>office_2</th>
                        <th>office_3</th>
                        <th>office_4</th>
                        <th>phone_1</th>
                        <th>phone_2</th>
                        <th>phone_3</th>
                        <th>description</th>
                        <th>email</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($data as $key=>$contact)
                      <tr>
                        <td> {{$key+1}} </td>
                        <td> {{$contact->office_1}} </td>
                        <td> {{$contact->office_2}} </td>
                        <td> {{$contact->office_3}} </td>
                        <td>{{$contact->office_4}}</td>
                        <td>{{$contact->phone_1}}</td>
                        <td>{{$contact->phone_2}}</td>
                        <td>{{$contact->phone_3}}</td>
                        <td>{{$contact->description}}</td>
                        <td>{{$contact->email}}</td>
                        
                        
                       
                        

                        
                        <td> 
                   				<a title="edit" class="btn btn-primary" href="{{route('contact.edit',$contact->id)}} "><i class="fa fa-edit"></i></a>
                   				<a title="delete" id="delete" class="btn btn-danger" href=" {{route('contact.delete',$contact->id)}} "><i class="fa fa-trash"></i></a>

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