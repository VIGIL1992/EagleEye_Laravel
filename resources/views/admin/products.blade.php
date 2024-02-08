@extends('admin.layout.layout')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Product </h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard </li>
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
        <h3 class="card-title">Add Product </h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form class="form-horizontal" name="addProduct" id="addProduct" enctype="multipart/form-data" method="POST" action="{{ route('product.store') }}">@csrf
       
        <div class="card-body">
          <div class="form-group row">
            <label for="heading" class="col-sm-2 col-form-label">Product Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="product_name" placeholder="Product Name" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="content" class="col-sm-2 col-form-label">Discribtion</label>
            <div class="col-sm-10">
              <textarea class="form-control" rows="3" id="discribtion" placeholder="Enter Your Discribtion"></textarea>
            </div>
          </div>

          <div class="form-group row">
            <label for="currentImage" class="col-sm-2 col-form-label">Current Image</label>
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
            <label for="document" class="col-sm-2 col-form-label">Documennt</label>
            <div class="col-sm-10">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
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

    <!-- Horizontal Form -->
    <div class="card card-info col-md-8">
        <div class="card-header">
          <h3 class="card-title">Product Update</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
 
        <form class="form-horizontal" name="updateContent" id="updateContent" enctype="multipart/form-data" method="post" action="{{ url('admin/updateContent') }}">@csrf
          <!-- @method('put') Add this line for the PUT request -->
          <div class="card-body">
            <div class="form-group row">
              <label for="heading" class="col-sm-2 col-form-label">Product Name</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="product_name" placeholder="Product Name" value="{{ $products -> name }}">
              </div>
            </div>
            <div class="form-group row">
              <label for="content" class="col-sm-2 col-form-label">Discribtion</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="3" id="discribtion" placeholder="Enter Your Discribtion">{{ $products -> description }}</textarea>
              </div>
            </div>

            <div class="form-group row">
              <label for="currentImage" class="col-sm-2 col-form-label">Current Image</label>
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
              <label for="document" class="col-sm-2 col-form-label">Documennt</label>
              <div class="col-sm-10">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
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

      <!-- Product Table -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Responsive Hover Table</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Reason</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>183</td>
                    <td>John Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-success">Approved</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>219</td>
                    <td>Alexander Pierce</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-warning">Pending</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>657</td>
                    <td>Bob Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-primary">Approved</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                  <tr>
                    <td>175</td>
                    <td>Mike Doe</td>
                    <td>11-7-2014</td>
                    <td><span class="tag tag-danger">Denied</span></td>
                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- Product Table End -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection