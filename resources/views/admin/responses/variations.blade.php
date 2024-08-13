@foreach ($attributes_result as $row)
    @php
        $attribute = \App\Models\ProductAttribute::where('id', $row->id)->first();
    @endphp
    <div id="accordion" class="attribute_tab">
        <div class="card card-primary">
            <div class="card-header">
                <h4 class="card-title w-100" id="attributehead{{ $attribute->id }}">
                    <a class="d-block w-100 collapsed" data-toggle="collapse" href="#attribute{{ $attribute->id }}"
                        aria-expanded="false">
                       #{{$attribute->id}} {{ $attribute->name }}
                        <a href="javascript:;" id="remove_attribute"
                            style="color:red;font-size:14px;float:right"><u>Remove</u></a>
                    </a>
                </h4>
            </div>
            <div id="attribute{{ $attribute->id }}" class="collapse" data-parent="#accordion" style="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="inputProductTitle" class="form-label">Regular
                                Price
                                (Rs.)</label>
                        </div>
                        <div class="col-md-6">

                            <input type="text" class="form-control"
                                id="inputProductTitle" placeholder=""
                                name="regular_price">
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
                                    type="checkbox" value="" id="stockmanage"
                                    name="stock_manage">
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
    
@endforeach

<script>
    $(document).ready(function() {
        if ($('.ptype').val() == 'simple') {
            $('.variationcheck').css('display', 'none');
        } else {
            $('.variationcheck').css('display', 'block');
        }
    });
</script>
