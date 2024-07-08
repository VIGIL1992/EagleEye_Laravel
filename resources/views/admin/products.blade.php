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

                <form class="form-horizontal" name="addProduct" id="addProduct" enctype="multipart/form-data" method="POST" action="{{ route('product.store') }}">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                    placeholder="Product Name" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">Discription</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" id="description" name="description" placeholder="Enter Your Description"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="newImage" class="col-sm-2 col-form-label">Change Image</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="Image" name="Image">
                                    <label class="custom-file-label" for="Image">Choose file</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="document" class="col-sm-2 col-form-label">Documennt</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="document" name="document">
                                    <label class="custom-file-label" for="document">Choose file</label>
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

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Document</th>
                                        <th style="width:400px;">Description</th>
                                        <th>Edit/Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><img width="100" height="100"
                                                    src="{{ asset("storage/$product->image") }}" alt="{{ $product->name }}">
                                            </td>
                                            <td>{{ $product->name }}</td>
                                            <td><a href="{{ asset("storage/$product->document") }}"
                                                    class="theme-btn blog-one-button" download="eagle eye.pdf"><i
                                                        class="far fa-file-pdf"></i> Read More</a></td>
                                            {{-- <td class="d-flex" style="max-width: 400px;">{{ $product -> description }}</td> --}}
                                            {{-- <td colspan="2">Edit / Delete</td> --}}
                                            <td class="d-flex" width="150px">{{ $product->description }}</td>
                                            <td colspan="2">
                                                <a href="{{ route('product.edit', ['product' => $product->id]) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <!-- Delete form -->
                                                <form action="{{ route('product.destroy', ['product' => $product->id]) }}"
                                                    method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach

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
