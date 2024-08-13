@extends('admin.layout.app')
@section('custom-styles')
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/summernote/summernote-bs4.min.css') }}">
@endsection
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- left column -->

                    <div class="col-md-9">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit"></i>
                                    Add Product
                                </h3>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter Product Name" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="Product Description">Product Description</label>
                                    <textarea id="summernote" name="description">
                                      </textarea>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <select name="type" id="" class="form-control ptype">
                                            <option value="">--Select Type--</option>
                                            <option value="simple">Simple</option>
                                            <option value="variable">Variable</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-5 col-sm-3">
                                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                                            aria-orientation="vertical">
                                            <a class="nav-link active generaltab" id="vert-tabs-general-tab"
                                                data-toggle="pill" href="#vert-tabs-general" role="tab"
                                                aria-controls="vert-tabs-general" aria-selected="true">General</a>
                                            <a class="nav-link inventorytab" id="vert-tabs-profile-tab" data-toggle="pill"
                                                href="#vert-tabs-profile" role="tab" aria-controls="vert-tabs-profile"
                                                aria-selected="false">Inventory</a>
                                            {{-- <a class="nav-link attributetab" id="vert-tabs-attribute-tab" data-toggle="pill"
                                                href="#vert-tabs-attribute" role="tab"
                                                aria-controls="vert-tabs-attribute" aria-selected="false"
                                                style="display: none">Attributes</a> --}}
                                            <a class="nav-link variationtab" id="vert-tabs-variation-tab" data-toggle="pill"
                                                href="#vert-tabs-variation" role="tab"
                                                aria-controls="vert-tabs-variation" aria-selected="false"
                                                style="display: none">Variations</a>
                                            <a class="nav-link shippingtab" id="vert-tabs-shipping-tab" data-toggle="pill"
                                                href="#vert-tabs-shipping" role="tab" aria-controls="vert-tabs-shipping"
                                                aria-selected="false">Shipping</a>

                                        </div>
                                    </div>
                                    <div class="col-7 col-sm-9">
                                        <div class="tab-content" id="vert-tabs-tabContent">
                                            <div class="tab-pane text-left fade show active generaltablist"
                                                id="vert-tabs-general" role="tabpanel"
                                                aria-labelledby="vert-tabs-general-tab">

                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="inputProductTitle" class="form-label">Regular
                                                                Price
                                                                (Rs.)</label>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <input type="text" class="form-control"
                                                                id="inputProductTitle" placeholder="" name="regular_price">
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-6">
                                                            <label for="inputProductTitle" class="form-label">Sale
                                                                Price
                                                                (Rs.)</label>
                                                        </div>
                                                        <div class="col-md-6">

                                                            <input type="text" class="form-control"
                                                                id="inputProductTitle" placeholder="" name="sale_price">
                                                            <p><a href="javascript:;"
                                                                    class="schedulebtn"><u>schedule</u></a></p>
                                                        </div>
                                                    </div>
                                                    <div class="schedule" style="display: none">
                                                        <div class="row mt-4">
                                                            <div class="col-md-4">
                                                                <label for="inputProductTitle" class="form-label">Sale
                                                                    Price
                                                                    Date</label>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="inputProductTitle" class="form-label">Start
                                                                    Date</label>
                                                                <input type="date" class="form-control"
                                                                    id="inputProductTitle" placeholder=""
                                                                    name="start_date">
                                                                <p><a href="javascript:;"
                                                                        class="cancelschedule"><u>cancel</u></a></p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label for="inputProductTitle" class="form-label">End
                                                                    Date</label>
                                                                <input type="date" class="form-control"
                                                                    id="inputProductTitle" placeholder=""
                                                                    name="end_date">

                                                            </div>
                                                        </div>
                                                    </div>



                                                </div>
                                                <!-- /.card-body -->


                                            </div>
                                            <div class="tab-pane fade inventorytablist" id="vert-tabs-profile"
                                                role="tabpanel" aria-labelledby="vert-tabs-profile-tab">
                                                <div class="alert border-0 border-start border-5 border-dark alert-dismissible fade show py-2 variation_inventory_alert"
                                                    style="display: none">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3">
                                                            <div>Settings below apply to all variations without manual
                                                                stock management enabled.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="sku" class="form-label">SKU</label>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <input type="text" class="form-control" id="sku"
                                                            placeholder="" name="sku">

                                                    </div>
                                                    <div class="col md 2">
                                                        <p class="help" data-toggle="tooltip" data-placement="right"
                                                            title=""
                                                            data-original-title="SKU refers to a Stock-keeping unit, a unique identifier for each distinct product and service that can be purchased.">
                                                            ?</p>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-4">
                                                        <label for="stockmanagement" class="form-label">Stock
                                                            Management</label>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <div class="form-check">
                                                            <input class="form-check-input is_stock_manage"
                                                                type="checkbox" id="stockmanage" name="stock_manage">
                                                            <label class="form-check-label" for="stockmanage">Track
                                                                stock quantity for this product</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stockqty" style="display:none">
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                            <label for="quantity" class="form-label">Quantity</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="number" class="form-control" id="quantity"
                                                                placeholder="" name="quantity">
                                                        </div>
                                                        <div class="col md 2">
                                                            <p class="help" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Stock quantity. If this is a variable product this value will be used to control stock for all variations, unless you define stock at variation level.">
                                                                ?</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                            <label for="quantity" class="form-label">Allow
                                                                backorders?</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="allow_backorders" id="dontallow"
                                                                    value="0">
                                                                <label class="form-check-label" for="dontallow">Do not
                                                                    allow</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="allow_backorders" id="allowbut"
                                                                    value="1">
                                                                <label class="form-check-label" for="allowbut">Allow,
                                                                    but notify customer</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="allow_backorders" id="allow"
                                                                    value="2">
                                                                <label class="form-check-label"
                                                                    for="allow">Allow</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <p class="help" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="If managing stock, this controls whether or not backorders are allowed. If enabled, stock quantity can go below 0.">
                                                                ?</p>
                                                        </div>
                                                    </div>
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                            <label for="threshold" class="form-label">Low stock
                                                                threshold</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="number" class="form-control" id="threshold"
                                                                placeholder="" name="low_stock_threshold">
                                                        </div>
                                                        <div class="col-md-2">
                                                            <p class="help" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="When product stock reaches this amount you will be notified by email. It is possible to define different values for each variation individually. The shop default value can be set in Settings > Products > Inventory.">
                                                                ?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="stockstatusdiv">
                                                    <div class="row mt-4">
                                                        <div class="col-md-4">
                                                            <label for="stockstatuslabel" class="form-label">Stock
                                                                Status</label>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="stock_status" id="instock" value="0">
                                                                <label class="form-check-label" for="instock">In
                                                                    Stock</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="stock_status" id="outofstock" value="1">
                                                                <label class="form-check-label" for="outofstock">Out
                                                                    of Stock</label>
                                                            </div>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio"
                                                                    name="stock_status" id="onbackorder" value="2">
                                                                <label class="form-check-label" for="onbackorder">On
                                                                    Backorder</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <p class="help" data-toggle="tooltip"
                                                                data-placement="right" title=""
                                                                data-original-title="Controls whether or not the product is listed as &quot;in stock&quot; or &quot;out of stock&quot; on the frontend.">
                                                                ?</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-4">
                                                        <label for="soldindividually" class="form-label">Sold
                                                            individually</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="no" id="soldindividually"
                                                                name="sold_individually">
                                                            <label class="form-check-label" for="soldindividually">Limit
                                                                purchases to 1 item per
                                                                order</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-2">
                                                        <p class="help" data-toggle="tooltip" data-placement="right"
                                                            title=""
                                                            data-original-title="Check to let customers to purchase only 1 item in a single order. This is particularly useful for items that have limited quantity, for example art or handmade goods.">
                                                            ?</p>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="tab-pane fade attributetablist" id="vert-tabs-attribute"
                                                role="tabpanel" aria-labelledby="vert-tabs-attribute-tab">
                                                <div
                                                    class="alert border-0 border-start border-5 border-dark alert-dismissible fade show py-2">
                                                    <div class="d-flex align-items-center">
                                                        <div class="ms-3">
                                                            <div>Add descriptive pieces of information that customers
                                                                can use to search for this product on your store, such
                                                                as “Material” or “Brand”.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a href="javascript:;"
                                                    class="btn btn-sm btn-primary add_new_attribute">Add New</a>
                                                <hr>
                                                <div class="result_attribute_tab"></div>
                                                <div class="default_attribute_tab">

                                                    <div id="accordion" class="attribute_tab">
                                                        <div class="card card-primary">
                                                            <div class="card-header">
                                                                <h4 class="card-title w-100">
                                                                    <a class="d-block w-100 collapsed"
                                                                        data-toggle="collapse" href="#attribute"
                                                                        aria-expanded="false">
                                                                        New Attribute
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="attribute" class="collapsed"
                                                                data-parent="#accordion" style="">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <label for="attname"
                                                                                class="form-label">Name</label>
                                                                            <input type="text"
                                                                                class="form-control attribute_name"
                                                                                id="attname"
                                                                                placeholder="f.e. Size or Color"
                                                                                name="attribute_name">

                                                                            <div class="row mt-4">
                                                                                <div class="form-check">
                                                                                    <input
                                                                                        class="form-check-input is_visible"
                                                                                        type="checkbox" id="is_visible"
                                                                                        name="is_visible">
                                                                                    <label class="form-check-label"
                                                                                        for="is_visible">Visible on the
                                                                                        product page</label>
                                                                                </div>


                                                                                <div class="form-check variationcheck">
                                                                                    <input
                                                                                        class="form-check-input for_variation"
                                                                                        type="checkbox" id="for_variation"
                                                                                        name="for_variation">
                                                                                    <label class="form-check-label"
                                                                                        for="for_variation">Use for
                                                                                        variations</label>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <label for="attvalue"
                                                                                class="form-label">Values</label>
                                                                            <textarea name="attribute_values" id="attvalue" class="form-control attribute_values" rows="5"
                                                                                placeholder="Enter options for customers to choose from, f.e. “Blue” or “Large”. Use “|” to separate different options."></textarea>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="new_attribute_div"></div>
                                                <button type="button"
                                                    class="btn btn-sm btn-primary store_attributes mt-4" disabled>Save
                                                    Changes</button>
                                            </div> --}}
                                            <div class="tab-pane fade variationtablist" id="vert-tabs-variation"
                                                role="tabpanel" aria-labelledby="vert-tabs-variation-tab">

                                                <div class="result_vaiation_tab">
                                                    <a href="javascript:;"
                                                        class="btn btn-sm btn-primary add_new_variation"
                                                        id="add-variation">Add New</a>
                                                    <hr>
                                                    <div id="accordion" class="variation_tab">
                                                        <div class="card card-primary">
                                                            <div class="card-header">
                                                                <h4 class="card-title w-100" id="variationhead">
                                                                    <a class="d-block w-100 collapsed"
                                                                        data-toggle="collapse" href="#variation"
                                                                        aria-expanded="false">
                                                                        <div class="row">
                                                                            @php
                                                                                $variation_id = 1;
                                                                            @endphp
                                                                            Variation #{{$variation_id}}
                                                                        </div>

                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="variation" class="collapse" data-parent="#accordion"
                                                                style="">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="sku"
                                                                                class="form-label">Attribute Name</label>
                                                                                <input type="text" class="form-control"
                                                                                id="sku" placeholder=""
                                                                                name="variations[0][attribute]">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="inputProductTitle"
                                                                                class="form-label"> Price
                                                                                (Rs.)</label>
                                                                                <input type="text" class="form-control"
                                                                                id="inputProductTitle" placeholder=""
                                                                                name="variations[0][price]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="new_variation_div"></div>

                                                </div>
                                            </div>
                                            <div class="tab-pane fade shippingtablist" id="vert-tabs-shipping"
                                                role="tabpanel" aria-labelledby="vert-tabs-shipping-tab">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="weight" class="form-label">Weight (kg)</label>
                                                    </div>
                                                    <div class="col-md-6">

                                                        <input type="text" class="form-control" id="weight"
                                                            placeholder="" name="weight">

                                                    </div>
                                                    <div class="col md 1">
                                                        <p class="help" data-toggle="tooltip" data-placement="right"
                                                            title="" data-original-title="Weight in decimal form">?
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-md-3">
                                                        <label for="weight" class="form-label">Dimensions
                                                            (cm)</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"
                                                                        id="length" placeholder="Length"
                                                                        name="length">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"
                                                                        id="width" placeholder="Width"
                                                                        name="width">
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <input type="text" class="form-control"
                                                                        id="height" placeholder="Height"
                                                                        name="height">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col md 1">
                                                        <p class="help" data-toggle="tooltip" data-placement="right"
                                                            title="" data-original-title="LxWxH in decimal form">?
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="form-group">
                                        <label for="Product Description">Short Description</label>
                                        <textarea id="shortsummernote" name="short_description">
                                          </textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Add Product</button>
                                </div>

                            </div>

                        </div>

                        <!-- /.card -->
                    </div>
                    <div class="col-md-3">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-list"></i>
                                    Categories
                                </h3>
                            </div>
                            <div class="card-body">
                                @foreach ($categories as $category)
                                    <div class="form-check">
                                        <input class="form-check-input" name="category_id" type="radio"
                                            value="{{ $category->id }}" id="category{{ $category->id }}">
                                        <label class="form-check-label"
                                            for="category{{ $category->id }}">{{ $category->name }}</label>
                                    </div>
                                    @php
                                        $sub_categories = \App\Models\SubCategory::where(
                                            'category_id',
                                            $category->id,
                                        )->get();
                                    @endphp
                                    @foreach ($sub_categories as $sub_category)
                                        <div class="form-check" style="margin-left:13px">
                                            <input class="form-check-input" name="sub_category_id" type="radio"
                                                value="{{ $sub_category->id }}" id="subcategory{{ $sub_category->id }}">
                                            <label class="form-check-label"
                                                for="subcategory{{ $sub_category->id }}">{{ $sub_category->name }}</label>
                                        </div>
                                    @endforeach
                                    <hr>
                                @endforeach
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-image"></i>
                                    Product Image
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="product_image">
                                        <label class="custom-file-label" for="exampleInputFile">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-images"></i>
                                    Product Gallery
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile"
                                            name="gallery_images[]" multiple>
                                        <label class="custom-file-label" for="exampleInputFile">Choose multiple
                                            files</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
@section('custom-scripts')
    <script src="{{ asset('admin-assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
        $(function() {
            // Summernote
            $('#summernote').summernote({
                height: 200
            });

            $('#shortsummernote').summernote();


        })
        $(document).on('change', '#category_id', function() {
            //  alert();
            var category_id = this.value;
            console.log(category_id);
            $.ajax({
                type: "GET",
                url: "{{ route('get.subcategories') }}",
                data: {
                    category: category_id,
                },
                success: function(result) {
                    var opt = '';
                    for (var i = 0; i < result.data.length; i++) {
                        opt += '<option value="' + result.data[i].id + '">' + result.data[
                            i].name + '</option>';
                    }
                    $('#subcategory_id').html(opt);
                },
                error: function(error) {
                    toastr.error(error.message);
                }
            });
        });

        $(document).on('click', '.schedulebtn', function() {
            $('.schedule').css('display', 'block');
            $('.schedulebtn').css('display', 'none');
        });
        $(document).on('click', '.cancelschedule', function() {
            $('.schedule').css('display', 'none');
            $('.schedulebtn').css('display', 'block');
        });

        $(document).on('change', '.ptype', function() {
            if ($(this).val() == 'simple') {
                $('.generaltab').css('display', 'block');
                $('.generaltab').addClass('active');
                $('.generaltablist').addClass('active');
                $('.generaltablist').addClass('show');
                $('.inventorytablist').removeClass('show');
                $('.inventorytablist').removeClass('active');
                $('.inventorytab').removeClass('active');
                $('.attributetab').css('display', 'none');
                $('.variationtab').css('display', 'none');
                $('.shippingtab').removeClass('active');
                $('.shippingtablist').removeClass('active');
                $('.shippingtablist').removeClass('show');
                $('.stockstatusdiv').css('display', 'block');


            } else if ($(this).val() == 'variable') {

                $('.generaltab').css('display', 'block');
                $('.generaltab').addClass('active');
                $('.generaltablist').addClass('active');
                $('.generaltablist').addClass('show');
                $('.inventorytablist').removeClass('show');
                $('.inventorytablist').removeClass('active');
                $('.inventorytab').removeClass('active');
                $('.variationtab').css('display', 'block');
                $('.shippingtab').removeClass('active');
                $('.shippingtablist').removeClass('active');
                $('.shippingtablist').removeClass('show');
                $('.stockstatusdiv').css('display', 'block');

            } else {
                $('.generaltab').css('display', 'block');
                $('.generaltab').addClass('active');
                $('.generaltablist').addClass('active');
                $('.generaltablist').addClass('show');
                $('.inventorytablist').removeClass('show');
                $('.inventorytablist').removeClass('active');
                $('.inventorytab').removeClass('active');
                $('.variationtab').css('display', 'none');
                $('.shippingtab').removeClass('active');
                $('.shippingtablist').removeClass('active');
                $('.shippingtablist').removeClass('show');
                $('.stockstatusdiv').css('display', 'block');
            }
        });

        $(document).on('click', '.is_stock_manage', function() {
            if ($(this).is(':checked')) {
                $('.stockqty').css('display', 'block');
                $('.stockstatusdiv').css('display', 'none');
            } else {
                $('.stockqty').css('display', 'none');
                if ($('.ptype').val() == 'simple') {
                    $('.stockstatusdiv').css('display', 'block');
                } else {

                    $('.stockstatusdiv').css('display', 'none');
                }

            }
        });

        var attribute_no = 1;
        $(document).on('click', '.add_new_attribute', function() {
            attribute_no++;
            var html = `
            <div id="accordion" class="attribute_tab">
                                                        <div class="card card-primary">
                                                            <div class="card-header">
                                                                <h4 class="card-title w-100" id="attributehead` +
                attribute_no + `">
                                                                    <a class="d-block w-100 collapsed"
                                                                        data-toggle="collapse" href="#attribute` +
                attribute_no + `"
                                                                        aria-expanded="false">
                                                                        New Attribute

                                                                        <a href="javascript:;" id="remove_attribute"
                        style="color:red;font-size:14px;float:right"><u>Remove</u></a>
                    </a>
                                                                   
                                                                </h4>
                                                            </div>
                                                            <div id="attribute` + attribute_no +
                `" class="collapse"
                                                                data-parent="#accordion" style="">
                                                                <div class="card-body">
                                                                    <div class="row">
                                                                        <div class="col-md-5">
                                                                            <label for="attname"
                                                                                class="form-label">Name</label>
                                                                            <input type="text"
                                                                                class="form-control attribute_name"
                                                                                id="attname"
                                                                                placeholder="f.e. Size or Color"
                                                                                name="attribute_name">

                                                                            <div class="row mt-4">
                                                                                <div class="form-check">
                                                                                    <input
                                                                                        class="form-check-input is_visible"
                                                                                        type="checkbox" id="is_visible` +
                attribute_no + `"
                                                                                        name="is_visible">
                                                                                    <label class="form-check-label"
                                                                                        for="is_visible` +
                attribute_no +
                `">Visible on the
                                                                                        product page</label>
                                                                                </div>


                                                                                <div class="form-check variationcheck"
                                                                                    >
                                                                                    <input
                                                                                        class="form-check-input for_variation"
                                                                                        type="checkbox" id="for_variation` +
                attribute_no + `"
                                                                                        name="for_variation">
                                                                                    <label class="form-check-label"
                                                                                        for="for_variation` +
                attribute_no + `">Use for
                                                                                        variations</label>

                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-md-7">
                                                                            <label for="attvalue"
                                                                                class="form-label">Values</label>
                                                                            <textarea name="attribute_values" id="attvalue" class="form-control attribute_values" rows="5"
                                                                                placeholder="Enter options for customers to choose from, f.e. “Blue” or “Large”. Use “|” to separate different options."></textarea>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>`;
            $('.new_attribute_div').append(html);
            if ($('.ptype').val() == 'simple') {
                $('.variationcheck').css('display', 'none');
            } else {
                $('.variationcheck').css('display', 'block');
            }
        });

        $(document).on('click', '#remove_attribute', function() {
            attribute_no--;
            $(this).parents().closest('.attribute_tab').remove();
        });

        var variation_no = 2;
        $(document).on('click', '.add_new_variation', function() {
            
            var html = `<div id="accordion" class="variation_tab">
                                                        <div class="card card-primary">
                                                            <div class="card-header">
                                                                <h4 class="card-title w-100"
                                                                    id="variationhead` + variation_no + `">
                                                                    <a class="d-block w-100 collapsed"
                                                                        data-toggle="collapse"
                                                                        href="#variation` +  variation_no + `"  aria-expanded="false">
                                                                       Variation #`+variation_no+`
                                                                         <a href="javascript:;" id="remove_variation" style="color:white;font-size:14px;float:right"><u>Remove</u></a>
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="variation` + variation_no + `" class="collapse"
                                                                data-parent="#accordion" style="">
                                                                <div class="card-body">
                                                                     <div class="row">
                                                                        <div class="col-md-12">
                                                                            <label for="sku"
                                                                                class="form-label">Attribute Name</label>
                                                                                <input type="text" class="form-control"
                                                                                id="sku" placeholder=""
                                                                                name="variations[`+variation_no+`][attribute]">
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <label for="inputProductTitle"
                                                                                class="form-label"> Price
                                                                                (Rs.)</label>
                                                                                <input type="text" class="form-control"
                                                                                id="inputProductTitle" placeholder=""
                                                                                name="variations[`+variation_no+`][price]">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>`;

            $('.new_variation_div').append(html);
            variation_no++;
            variation_id++;
            if ($('.ptype').val() == 'simple') {
                $('.variationcheck').css('display', 'none');
            } else {
                $('.variationcheck').css('display', 'block');
            }
        });

        

        $(document).on('click', '#remove_variation', function() {
            variation_no--;
            $(this).parents().closest('.variation_tab').remove();
        });


        $(function() {
            $(".attribute_values").keyup(function() {
                //Reference the Button.
                var btnSubmit = $(".store_attributes");

                //Verify the TextBox value.
                if ($(this).val().trim() != "") {
                    //Enable the TextBox when TextBox has value.
                    btnSubmit.removeAttr("disabled");
                } else {
                    //Disable the TextBox when TextBox is empty.
                    btnSubmit.attr("disabled", "disabled");
                }
            });
        });

        $(document).on('click', '.store_attributes', function() {
            var attribute_names = [];
            var attribute_values = [];
            var attribute_is_visibles = [];
            var attribute_for_variations = [];
            $(".attribute_name").each(function() {
                attribute_names.push($(this).val());
            });
            $(".attribute_values").each(function() {
                attribute_values.push($(this).val());
            });
            $(".is_visible").each(function() {
                if ($(this).is(':checked')) {
                    var value = 'yes';
                } else {
                    var value = 'No';
                }
                attribute_is_visibles.push(value);
            });
            $(".for_variation").each(function() {
                if ($(this).is(':checked')) {
                    var value = 'yes';
                } else {
                    var value = 'No';
                }
                attribute_for_variations.push(value);
            });

            console.log(attribute_names);
            console.log(attribute_values);
            console.log(attribute_is_visibles);
            console.log(attribute_for_variations);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '{{ route('attributes.store') }}',
                data: {
                    attribute_name: attribute_names,
                    attribute_value: attribute_values,
                    attribute_is_visible: attribute_is_visibles,
                    attribute_for_variation: attribute_for_variations
                },
                success: function(resp) {
                    //    if(resp.status == 200)
                    //    {
                    console.log(resp);
                    $('.default_attribute_tab').remove();
                    $('.new_attribute_div').empty();
                    $('.result_attribute_tab').html(resp);


                    // }
                    // else{
                    // console.log(resp.message);
                    // }
                }

            });
        });

        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
@endsection
