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
                    <h3 class="card-title">Product Update</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->

                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('product.update', ['product' => $product->id]) }}">@csrf
                    @method('patch') 
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="heading" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="product_name" placeholder="Product Name"
                                    value=" {{ $product->name }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-sm-2 col-form-label">Discribtion</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" id="discribtion" placeholder="Enter Your Discribtion">{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="currentImage" class="col-sm-2 col-form-label">Current Image</label>
                            <div class="col-sm-10">
                                <div class="custom-file">

                                    <img width="100" height="100" src="{{ asset("storage/$product->image") }}"
                                        alt="{{ $product->name }}">
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="new_Image" class="col-sm-2 col-form-label">Change Image</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="new_Image" name="new_Image">
                                    <label class="custom-file-label" for="new_Image">Choose file</label>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="document" class="col-sm-2 col-form-label">Documennt</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <a href="{{ asset("storage/$product->document") }}" class="theme-btn blog-one-button" download="eagle eye.pdf"><i class="far fa-file-pdf"></i> Read More</a>
                                </div>
                            </div>
                          </div>

                        <div class="form-group row">
                            <label for="new_document" class="col-sm-2 col-form-label">Documennt</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="new_document" name="new_document">
                                    <label class="custom-file-label" for="new_document">Choose file</label>
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


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
