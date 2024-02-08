@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Home </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <!-- <li class="breadcrumb-item active">Dashboard </li> -->
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
          <h3 class="card-title">Slider</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
 
        <form class="form-horizontal" name="updateContent" id="updateContent" enctype="multipart/form-data" method="post" action="{{ url('admin/updateContent') }}">@csrf
          <!-- @method('put') Add this line for the PUT request -->
          <div class="card-body">
            <!-- Slider 1 -->
            <div class="form-group row">
                <label for="currentImage" class="col-sm-2 col-form-label">Slider 1 Image</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                       <img src="" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="newImage" class="col-sm-2 col-form-label">Change Image</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">Slider 1 Header</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" placeholder="Slider 1 header" value="">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">Slider 1 sub header</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" placeholder="Slider 1 sub header" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="content" class="col-sm-2 col-form-label">button name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" placeholder="Button Name" value="">
              </div>
            </div>
             <!-- Slider 1 End -->
            <hr>
            <!-- Slider 2 -->
            <div class="form-group row">
                <label for="currentImage" class="col-sm-2 col-form-label">Slider 2 Image</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                       <img src="" alt="" srcset="">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="newImage" class="col-sm-2 col-form-label">Change Image</label>
                <div class="col-sm-10">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">Slider 1 Header</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" placeholder="Slider 2 header" value="">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">Slider 1 sub header</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" placeholder="Slider 2 sub header" value="">
              </div>
            </div>
            <div class="form-group row">
              <label for="content" class="col-sm-2 col-form-label">button name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" placeholder="Button Name" value="">
              </div>
            </div>
            <!-- Slider 2 End -->
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
    <div class="card card-info col-md-8">
        <div class="card-header">
          <h3 class="card-title">About</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->   
        <form class="form-horizontal" name="updateContent" id="updateContent" enctype="multipart/form-data" method="post" action="{{ url('admin/updateContent') }}">@csrf
            <!-- @method('put') Add this line for the PUT request -->
            <!-- About -->
            <div class="card-body">
              <div class="form-group row">
                  <label for="currentImage" class="col-sm-2 col-form-label">About Image</label>
                  <div class="col-sm-10">
                      <div class="custom-file">
                         <img src="" alt="" srcset="">
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                  <label for="newImage" class="col-sm-2 col-form-label">Change Image</label>
                  <div class="col-sm-10">
                      <div class="custom-file">
                          <input type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                  </div>
              </div>
              <div class="form-group row">
                <label for="heading" class="col-sm-2 col-form-label">About Header</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="product_name" placeholder="About header" value="">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="heading" class="col-sm-2 col-form-label">Slider 1 SubHeader</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="product_name" placeholder="Slider 1 SubHeader" value="">
                </div>
              </div>

              <div class="form-group row">
                <label for="content" class="col-sm-2 col-form-label">Discribtion</label>
                <div class="col-sm-10">
                  <textarea class="form-control" rows="3" id="discribtion" placeholder="Enter Your Discribtion"></textarea>
                </div>
              </div>
            </div>
            <!-- About End -->
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