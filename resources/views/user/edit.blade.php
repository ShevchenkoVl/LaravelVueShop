@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Main</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="row">
            <form action="{{ route('user.update', $user->id)}}" method="post">
              @csrf
              @method('PATCH')
              <div class="form-group">
                <input type="text" name="name" class="form-control mb-1" placeholder="Name" value="{{$user->name}}">
                <input type="text" name="surname" class="form-control mb-1" placeholder="Surname" value="{{$user->surname}}">
                <input type="text" name="patronymic" class="form-control mb-1" placeholder="Patronymic" value="{{$user->patronymic}}">
                <input type="text" name="email" class="form-control mb-1" placeholder="email" value="{{$user->email}}">
                <input type="text" name="address" class="form-control mb-1" placeholder="Address" value="{{$user->address}}">
                <input type="text" name="age" class="form-control mb-1" placeholder="Age" value="{{$user->age}}">
                <select name="gender" class="custom-select form-control mb-1">
                  <option disabled selected>Gender</option>
                  <option {{ $user->gender == 1 ? ' selected' : ''}} value='1'>Male</option>
                  <option {{ $user->gender == 2 ? ' selected' : ''}} value='2'>Female</option>
                  <option {{ $user->gender == 3 ? ' selected' : ''}} value='3'>Other</option>
                </select>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Edit">
              </div>
            </form>
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection