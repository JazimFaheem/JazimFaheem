@extends('admin.layout.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>DataTables</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
        

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Sub Categories</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Sub-Category Name</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($subcategories as $subcategory)
                <tr>
                  <td><img src="{{$subcategory->image}}" alt="" width="50"></td>
                  <td>{{$subcategory->name}}</td>
                  <td>{{$subcategory->description}}</td>
                  <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('subcategories.edit', $subcategory->id) }}">Edit</a>
                
                    {!! Form::open(['method' => 'DELETE','route' => ['subcategories.destroy', $subcategory->id],'style'=>'display:inline']) !!}
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
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection