@extends('admin.layout.app')
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Site Settings</h1>
            </div>
            <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">DataTables</li>
                </ol>
            </div> -->
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<section class="content">
<div class="row ">
    <div class="col-lg-12">
        <div class="card">
           
            <div class="body">
                <div class="container">
                @if($settings==null)
                <form method="post" action="{{ route('store.settings') }}" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Site Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="site_title" value="@if($settings){{$settings->site_title}}@endif">
                            </div>
                        </div> 
                        <div class="col-6">   
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_title" value="@if($settings){{$settings->meta_title}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta tags</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_tags" value="@if($settings){{$settings->meta_tags}}@endif">
                            </div>
                        </div> 
                        <div class="col-6">   
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_description" value="@if($settings){{$settings->meta_description}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta keywords</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_keywords" value="@if($settings){{$settings->meta_keywords}}@endif">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Main Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="main_logo"  class="form-control" value="@if($settings){{$settings->main_logo}}@endif">
                                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-6">
                            <img src="@if($settings){{ asset('back/assets/images/logo') }}/{{ $settings->main_logo }}@endif" alt="" style="width:100px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Footer Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="footer_logo" class="form-control"   value="@if($settings){{$settings->footer_logo}}@endif">
                                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-6">
                            <img src="@if($settings){{ asset('back/assets/images/logo') }}/{{ $settings->footer_logo }}@endif" alt="" style="width:100px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Favicon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="favicon"  class="form-control"  value="@if($settings){{$settings->favicon}}@endif">
                                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-6">
                            <img src="@if($settings){{ asset('back/assets/images/logo') }}/{{ $settings->favicon }}@endif" alt="" style="width:100px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="facebook" value="@if($settings){{$settings->facebook}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Twitter</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="twitter" value="@if($settings){{$settings->twitter}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="linkedin" value="@if($settings){{$settings->linkedin}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Pintrest</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="pintrest" value="@if($settings){{$settings->pintrest}}@endif">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="instagram" value="@if($settings){{$settings->instagram}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Youtube</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="youtube" value="@if($settings){{$settings->youtube}}@endif">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="email" value="@if($settings){{$settings->email}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="phone" value="@if($settings){{$settings->phone}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Whatsapp</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="whatsapp" value="@if($settings){{$settings->whatsapp}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="address" value="@if($settings){{$settings->address}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">About</label>
                                <textarea name="about" id="" cols="30" rows="5" class="form-control"></textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
                @else
                <form method="post" action="{{ route('update.settings') }}" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" class="form-control" id="exampleInputEmail1" placeholder="" name="id" value="@if($settings){{$settings->id}}@endif">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Site Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="site_title" value="@if($settings){{$settings->site_title}}@endif">
                            </div>
                        </div> 
                        <div class="col-6">   
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Title</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_title" value="@if($settings){{$settings->meta_title}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta tags</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_tags" value="@if($settings){{$settings->meta_tags}}@endif">
                            </div>
                        </div> 
                        <div class="col-6">   
                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta keywords</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="meta_keywords" value="@if($settings){{$settings->meta_keywords}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Meta Description</label>
                                <textarea class="form-control" id="exampleInputEmail1" name="meta_description">@if($settings){{$settings->meta_description}}@endif</textarea>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Main Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="main_logo" class="form-control" id="exampleInputFile" value="@if($settings){{$settings->main_logo}}@endif">
                                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-6">
                            <img src="@if($settings){{ asset('assets/images/logos') }}/{{ $settings->main_logo }}@endif" alt="" style="width:100px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Footer Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="footer_logo" class="form-control" id="exampleInputFile" value="@if($settings){{$settings->footer_logo}}@endif">
                                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-6">
                            <img src="@if($settings){{ asset('assets/images/logos') }}/{{ $settings->footer_logo }}@endif" alt="" style="width:100px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Favicon</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="favicon" class="form-control" id="exampleInputFile" value="@if($settings){{$settings->favicon}}@endif">
                                        <!-- <label class="custom-file-label" for="exampleInputFile">Choose file</label> -->
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-6">
                            <img src="@if($settings){{ asset('assets/images/logos') }}/{{ $settings->favicon }}@endif" alt="" style="width:100px">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Facebook</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="facebook" value="@if($settings){{$settings->facebook}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Twitter</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="twitter" value="@if($settings){{$settings->twitter}}@endif">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Linkedin</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="linkedin" value="@if($settings){{$settings->linkedin}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Pintrest</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="pintrest" value="@if($settings){{$settings->pintrest}}@endif">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Instagram</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="instagram" value="@if($settings){{$settings->instagram}}@endif">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                 <div class="form-group">
                                    <label for="exampleInputEmail1">Youtube</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="youtube" value="@if($settings){{$settings->youtube}}@endif">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="email" value="@if($settings){{$settings->email}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="phone" value="@if($settings){{$settings->phone}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Whatsapp</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="whatsapp" value="@if($settings){{$settings->whatsapp}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="address" value="@if($settings){{$settings->address}}@endif">
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">About</label>
                                <textarea name="about" id="" cols="30" rows="5" class="form-control">@if($settings){{$settings->about}}@endif</textarea>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
</section>   
@endsection