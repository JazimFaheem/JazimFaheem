@extends('admin.layout.app')
@section('custom-styles')
    <link href="{{ asset('assets/css/table.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/table-layout.css') }}" rel="stylesheet" />
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Banner</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Banner</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Banner</h3>
                        </div>
                        <form method="post" action="{{ route('banners.update', $banner->id) }}"
                            enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="mb-3">
                                <label for="inputProductTitle" class="form-label">Title</label>
                                <input type="text" class="form-control" id="inputProductTitle" placeholder=""
                                    name="title" value="{{ $banner->title }}">

                            </div>

                            <div class="mb-3">
                                <label for="inputProductDescription" class="form-label">Description</label>
                                <textarea class="form-control" id="inputProductDescription" rows="3" name="description">{{ $banner->description }}</textarea>

                            </div>
                            <div class="mb-3">
                                <label for="inputProductTitle" class="form-label">Url</label>
                                <input type="text" class="form-control" id="inputProductTitle" placeholder=""
                                    name="url" value="{{ $banner->url }}">

                            </div>
                            <div class="mb-3">
                                <label for="inputProductDescription" class="form-label">Product Images</label>
                                <input id="image-uploadify" type="file"
                                    accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                    name="banner">
                            </div>
                            <div class="col-12">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->


                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
@section('custom-scripts')
@endsection
