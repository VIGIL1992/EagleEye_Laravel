@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Contact </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Contact </li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <!-- Horizontal Form -->
    <div class="card card-info col-md-8">
        <div class="card-header">
          <h3 class="card-title">Contact</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
 
        <form class="form-horizontal" enctype="multipart/form-data"  action="{{ route('contact.update', ['contact' => $contact->id]) }}">
          @csrf
          @method('patch') 
          <div class="card-body">
            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">Email 1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email_1" placeholder="Email 1" value="{{ $contact->email_1 }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">Email 2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="email_2" placeholder="Email 2" value="{{ $contact->email_2 }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">phone_1</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="phone_1" placeholder="phone_1" value="{{ $contact->phone_1 }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">phone_2</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="phone_2" placeholder="phone_2" value="{{ $contact->phone_2 }}">
              </div>
            </div>

            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">address</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="address" placeholder="address" value="{{ $contact->address }}">
              </div>
            </div>
            
            

          

            
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Save</button>
            <button type="button" class="btn btn-default float-right">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
        
      </div>
      <!-- /.card -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection