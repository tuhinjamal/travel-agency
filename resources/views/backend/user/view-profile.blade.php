
@extends('layouts.admin')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Profile</h1>
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

   
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-4 offset-md-4 connectedSortable">
       <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{(!empty($user->image))?url('upload/user_images/'.$user->image):url('upload/noimage.png')}}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{$user->name}}</h3>

                <p class="text-muted text-center">{{$user->email}}</p>

                <ul class="list-group list-group-unbordered mb-3">
                <table width="100%">
                  <tbody>
                    <tr>
                      <td>Phone</td>
                      <td> {{$user->phone}} </td>
                    </tr>
                      <tr>
                      <td>Email</td>
                      <td> {{$user->email}} </td>
                    </tr>
                      <tr>
                      <td>Gender</td>
                      <td> {{$user->gender}} </td>
                    </tr>
                      <tr>
                      <td>Address</td>
                      <td> {{$user->address}} </td>
                    </tr>
                  </tbody>
                </table>
                <a href="{{route('profile.edit',$user->id)}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>

            

            

            
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