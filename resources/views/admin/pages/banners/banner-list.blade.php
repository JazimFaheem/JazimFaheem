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
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add New Banner</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('banners.store') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="inputProductTitle" class="form-label">Title</label>
                                    <input type="text" class="form-control" id="inputProductTitle" placeholder=""
                                        name="title">
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Description</label>
                                    <textarea class="form-control" id="inputProductDescription" rows="3" name="description"></textarea>

                                </div>
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Url</label>
                                    <input type="text" class="form-control" id="inputProductTitle" placeholder=""
                                        name="url">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Banner</label>
                                    <input id="image-uploadify" type="file"
                                        accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf"
                                        name="banner">
                                </div>
                                <div class="col-12">
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary">Add New Banner</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Banners</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Url</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banners as $banner)
                                        <tr>
                                            <td><img src="{{ $banner->banner }}"
                                                    alt="" width="50"></td>
                                            <td>{{ $banner->title }}</td>
                                            <td>{{ $banner->description }}</td>
                                            <td>{{ $banner->url }}</td>
                                            <td>
                                                <a class="btn btn-primary btn-sm"
                                                    href="{{ route('banners.edit', $banner->id) }}">Edit</a>

                                                {!! Form::open([
                                                    'method' => 'DELETE',
                                                    'route' => ['banners.destroy', $banner->id],
                                                    'style' => 'display:inline',
                                                ]) !!}
                                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
@section('custom-scripts')
@endsection
