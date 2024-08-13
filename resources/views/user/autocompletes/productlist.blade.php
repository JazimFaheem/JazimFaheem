<style type="text/css">
    @media(max-width: 768px) {
        .productlist {
            position: absolute;
            z-index: 9999 !important;
            width: 100%;
            left: 0px;
            margin-top: 10px !important;
        }
    }

    .productlist {
        position: absolute;
        width: 100%;
        margin-top: 8px;
        border-radius: 3px;
        box-shadow: 0 1px 4px #b8b8b8;
        min-height: 100px;
        display: none;
        z-index: 9999;
        max-height: 350px;
        overflow-y: scroll;
        background: white

    }

    .store-list {
        list-style: none;
        padding: 0;
    }

    .store-list .store-item {
        width: 100%;
        display: inline-block;
        border-bottom: 1px solid #e4e4e4;

    }

    .store-list .store-item a {
        margin-right: 10px;
        margin-bottom: 7px;
        padding: 0 10px;
        font-weight: 600;
        border-radius: 3px;
        padding: 5px 12px;
        display: flex;
        width: 100%;
        align-items: center;
        font-size: 15px;
    }


    .store-list .store-item a .web_imagebox {
        width: 65px;
        flex: 0 0 65px;
        height: 65px;
        margin-right: 12px;
        background-color: #fff;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
</style>

<div class="container">
    <div class="row" style="align-items: normal">
        <div class="col-md-12">
            <h5 style="padding:20px">Products</h5>
            <ul class="store-list">
                @if ($products->count() != 0)
                    @foreach ($products as $product)
                        <li class="store-item">
                            <a href="{{ route('product.details', $product->slug) }}">
                                <div class="web_imagebox">
                                    <img src="{{ $product->image }}"
                                        class="img-responsive" style="width:60px">
                                </div>
                                <p class="text">{{ $product->name }}<br>

                                </p>
                            </a>
                        </li>
                    @endforeach
                @else
                    <li class="store-item">

                        <p class="text">No Product Found <br>

                        </p>

                    </li>
                @endif
            </ul>
        </div>

    </div>
</div>
