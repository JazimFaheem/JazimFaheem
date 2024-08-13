@extends('user.layout.master')
@section('content')
    <main id="content" role="main">
        <!-- Slider Section -->
        <div class="mb-5">
            <div class="bg-img-hero" style="background-image: url({{ asset('assets/images/img1.jpg') }});">
                <div class="container min-height-420 overflow-hidden">
                    <div class="js-slick-carousel u-slick slick-initialized slick-slider slick-dotted"
                        data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 3510px; transform: translate3d(0px, 0px, 0px);">
                                @foreach ($banners as $key => $banner)
                                    <div class="js-slide bg-img-hero-center {{ $key == 0 ? 'slick-slide slick-current slick-active' : '' }}"
                                        data-slick-index="0" aria-hidden="false" style="width: 1170px; height: auto;"
                                        tabindex="0" role="tabpanel" id="slick-slide00"
                                        aria-describedby="slick-slide-control00">
                                        <div class="row min-height-420 py-7 py-md-0">
                                            <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                                <h1 class="font-size-64 text-lh-57 font-weight-light animated fadeInUp"
                                                    data-scs-animation-in="fadeInUp" style="opacity: 1;">
                                                    THE NEW <span class="d-block font-size-55">STANDARD</span>
                                                </h1>
                                                <h6 class="font-size-15 font-weight-bold mb-3 animated fadeInUp"
                                                    data-scs-animation-in="fadeInUp" data-scs-animation-delay="200"
                                                    style="animation-delay: 200ms; opacity: 1;">UNDER FAVORABLE SMARTWATCHES
                                                </h6>
                                                <div class="mb-4 animated fadeInUp" data-scs-animation-in="fadeInUp"
                                                    data-scs-animation-delay="300"
                                                    style="animation-delay: 300ms; opacity: 1;">
                                                    <span class="font-size-13">FROM</span>
                                                    <div class="font-size-50 font-weight-bold text-lh-45">
                                                        <sup class="">$</sup>749<sup class="">99</sup>
                                                    </div>
                                                </div>
                                                <a href="../shop/single-product-fullwidth.html"
                                                    class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16 animated fadeInUp"
                                                    data-scs-animation-in="fadeInUp" data-scs-animation-delay="400"
                                                    tabindex="0" style="animation-delay: 400ms; opacity: 1;">
                                                    Start Buying
                                                </a>
                                            </div>
                                            <div class="col-xl-5 col-6 d-flex align-items-center animated zoomIn"
                                                data-scs-animation-in="zoomIn" data-scs-animation-delay="500"
                                                style="animation-delay: 500ms; opacity: 1;">
                                                <img class="img-fluid" src="{{ $banner->banner }}" alt="Image Description">
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <ul class="js-pagination text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1"
                            style="" role="tablist">
                            <li class="slick-active slick-current" role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                            <li role="presentation"><span></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Slider Section -->
        <div class="container">
            <!-- Banner -->
            <div class="mb-5">
                <div class="row">
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{ asset('assets/images/img1.png') }}"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{ asset('assets/images/img2.jpg') }}"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{ asset('assets/images/img3.jpg') }}"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                        <a href="../shop/shop.html" class="d-black text-gray-90">
                            <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                    <img class="img-fluid" src="{{ asset('assets/images/img4.png') }}"
                                        alt="Image Description">
                                </div>
                                <div class="col-6 col-xl-7 col-wd-6">
                                    <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                        CATCH BIG <strong>DEALS</strong> ON THE CAMERAS
                                    </div>
                                    <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                        Shop now
                                        <span class="link__icon ml-1">
                                            <span class="link__icon-inner"><i
                                                    class="ec ec-arrow-right-categproes"></i></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End Banner -->
            <!-- Deals-and-tabs -->
            <div class="mb-5">
                <div class="row">
                    <!-- Deal -->
                    @php
                        $product = $products->shift();
                    @endphp
                    @if ($product)
                        <div class="col-md-auto mb-6 mb-md-0">
                            <div class="p-3 border border-width-2 border-primary borders-radius-20 bg-white min-width-370">
                                <div class="d-flex justify-content-between align-items-center m-1 ml-2">
                                    <h3 class="font-size-22 mb-0 font-weight-normal text-lh-28 max-width-120">Special Offer
                                    </h3>
                                    <div
                                        class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
                                        <span class="font-size-12">Save</span>
                                        <div class="font-weight-bold" style="font-size: .9rem">Rs.{{($product->regular_price - $product->sale_price)}}</div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <a href="{{ route('product.details', $product->slug) }}"
                                        class="d-block text-center"><img class="img-fluid"
                                            src="{{ $product->image }}"
                                            alt="Image Description" width="300"></a>
                                </div>
                                <h5 class="mb-2 font-size-14 text-center mx-auto max-width-180 text-lh-18"><a
                                        href="../shop/single-product-fullwidth.html"
                                        class="text-blue font-weight-bold">{{ $product->name }}</a></h5>
                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <del class="font-size-18 mr-2 text-gray-2">Rs.{{ $product->sale_price }}</del>
                                    <ins
                                        class="font-size-30 text-red text-decoration-none">Rs.{{ $product->regular_price }}</ins>
                                </div>
                                <div class="mb-3 mx-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="">Availavle: <strong>
                                                @foreach ($product->productinventories as $inventory)
                                                    {{ $inventory->quantity }}
                                                @endforeach
                                            </strong></span>
                                        {{-- <span class="">Already Sold: <strong>28</strong></span> --}}
                                    </div>
                                    <div class="rounded-pill bg-gray-3 height-20 position-relative">
                                        <span
                                            class="position-absolute left-0 top-0 bottom-0 rounded-pill w-30 bg-primary"></span>
                                    </div>
                                </div>
                                {{-- <div class="mb-2">
                                    <h6 class="font-size-15 text-gray-2 text-center mb-3">Hurry Up! Offer ends in:</h6>
                                    <div class="js-countdown d-flex justify-content-center" data-end-date="2020/11/30"
                                        data-hours-format="%H" data-minutes-format="%M" data-seconds-format="%S">
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-hours">00</span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">HOURS</div>
                                        </div>
                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-minutes">00</span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">MINS</div>
                                        </div>
                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-seconds">00</span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">SECS</div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    @endif
                    <!-- End Deal -->
                    <!-- Tab Prodcut -->
                    <div class="col">
                        <!-- Features Section -->
                        <div class="">
                            <!-- Nav Classic -->
                            {{-- <div class="position-relative bg-white text-center z-index-2">
                            <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab"
                                role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active " id="pills-one-example1-tab" data-toggle="pill"
                                        href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                                        aria-selected="true">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Featured
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-two-example1-tab" data-toggle="pill"
                                        href="#pills-two-example1" role="tab" aria-controls="pills-two-example1"
                                        aria-selected="false">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            On Sale
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " id="pills-three-example1-tab" data-toggle="pill"
                                        href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                                        aria-selected="false">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            Top Rated
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                            <!-- End Nav Classic -->

                            <!-- Tab Content -->
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                                    aria-labelledby="pills-one-example1-tab">
                                    <ul class="row list-unstyled products-group no-gutters">
                                        @foreach ($products as $productItem)
                                            <li class="col-6 col-wd-3 col-md-4 product-item">
                                                <div class="product-item__outer h-100">
                                                    <div class="product-item__inner px-xl-4 p-3">
                                                        <div class="product-item__body pb-xl-2">
                                                            <div class="mb-2">

                                                                @php
                                                                    $catename = \App\Models\Category::find(
                                                                        $productItem->category->id,
                                                                    );
                                                                    $subcatename = \App\Models\SubCategory::find(
                                                                        $productItem->subcategory->id,
                                                                    );
                                                                @endphp
                                                                <a href="{{ route('products.by.category', $catename->slug) }}"
                                                                    class="font-size-12 text-gray-5">{{ $catename->name }}</a>,
                                                                <a
                                                                    href="{{ route('products.by.category', $subcatename->slug) }}">{{ $subcatename->name }}</a>
                                                            </div>
                                                            <h5 class="mb-1 product-item__title"><a
                                                                    href="{{ route('product.details', $productItem->slug) }}"
                                                                    class="text-blue font-weight-bold">{{ $productItem->name }}</a>
                                                            </h5>
                                                            <div class="mb-2">
                                                                <a href="{{ route('product.details', $productItem->slug) }}"
                                                                    class="d-block text-center"><img class="img-fluid"
                                                                        src="{{ $productItem->image }}"
                                                                        alt="Image Description"></a>
                                                            </div>
                                                            <div class="flex-center-between mb-1">

                                                                <div class="prodcut-price d-flex align-items-center flex-wrap position-relative"
                                                                    style="top:10px">
                                                                    <ins
                                                                        class="font-size-20 text-red text-decoration-none mr-2">Rs.{{ $productItem->sale_price }}</ins>
                                                                    <del
                                                                        class="font-size-12 tex-gray-6 position-absolute bottom-100">Rs.{{ $productItem->regular_price }}</del>
                                                                </div>
                                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                                    @if ($productItem->type == 'simple')
                                                                        <a href="../shop/single-product-fullwidth.html"
                                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                                class="ec ec-add-to-cart"></i></a>
                                                                    @else
                                                                        <a href="../shop/single-product-fullwidth.html"
                                                                            class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                                class="ec ec-favorites"></i></a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-item__footer">
                                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                                <a href="../shop/compare.html"
                                                                    class="text-gray-6 font-size-13"><i
                                                                        class="ec ec-compare mr-1 font-size-15"></i>
                                                                    Compare</a>
                                                                @if ($productItem->type == 'simple')
                                                                    <a href="../shop/wishlist.html"
                                                                        class="text-gray-6 font-size-13"><i
                                                                            class="ec ec-favorites mr-1 font-size-15"></i>
                                                                        Add
                                                                        to Wishlist</a>
                                                                @else
                                                                    <a href="../shop/wishlist.html"
                                                                        class="text-gray-6 font-size-13"><i
                                                                            class="ec ec-add-to-cart mr-1 font-size-15"></i>
                                                                        Select Options</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                {{-- <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel"
                                aria-labelledby="pills-two-example1-tab">
                                <ul class="row list-unstyled products-group no-gutters">
                                    <li class="col-6 col-wd-3 col-md-4 product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Tablet White
                                                            EliteBook Revolve 810 G2</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img2.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Purple Solo 2
                                                            Wireless</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img3.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Smartphone 6S 32GB
                                                            LTE</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img4.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Widescreen NX Mini F1
                                                            SMART NX</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img5.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Wireless Audio System
                                                            Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img1.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">GameConsole Destiny
                                                            Special Edition</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img7.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-xl">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Camera C430W 4k
                                                            Waterproof</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img8.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-wd">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Full Color LaserJet
                                                            Pro M452dn</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img6.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
                                aria-labelledby="pills-three-example1-tab">
                                <ul class="row list-unstyled products-group no-gutters">
                                    <li class="col-6 col-wd-3 col-md-4 product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Wireless Audio System
                                                            Multiroom 360 degree Full base audio</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img1.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Tablet White
                                                            EliteBook Revolve 810 G2</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img2.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Purple Solo 2
                                                            Wireless</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img3.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-wd">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Smartphone 6S 32GB
                                                            LTE</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img4.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Widescreen NX Mini F1
                                                            SMART NX</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img5.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-6 col-wd-3 col-md-4 product-item remove-divider-xl">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Full Color LaserJet
                                                            Pro M452dn</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img6.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-xl">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">GameConsole Destiny
                                                            Special Edition</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img7.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li
                                        class="col-6 col-wd-3 col-md-4 product-item d-xl-none d-wd-block remove-divider-wd">
                                        <div class="product-item__outer h-100">
                                            <div class="product-item__inner px-xl-4 p-3">
                                                <div class="product-item__body pb-xl-2">
                                                    <div class="mb-2"><a
                                                            href="../shop/product-categories-7-column-full-width.html"
                                                            class="font-size-12 text-gray-5">Speakers</a></div>
                                                    <h5 class="mb-1 product-item__title"><a
                                                            href="../shop/single-product-fullwidth.html"
                                                            class="text-blue font-weight-bold">Camera C430W 4k
                                                            Waterproof</a></h5>
                                                    <div class="mb-2">
                                                        <a href="../shop/single-product-fullwidth.html"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="../../assets/img/212X200/img8.jpg"
                                                                alt="Image Description"></a>
                                                    </div>
                                                    <div class="flex-center-between mb-1">
                                                        <div class="prodcut-price">
                                                            <div class="text-gray-100">$685,00</div>
                                                        </div>
                                                        <div class="d-none d-xl-block prodcut-add-cart">
                                                            <a href="../shop/single-product-fullwidth.html"
                                                                class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                            to Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Features Section -->
                    </div>
                    <!-- End Tab Prodcut -->
                </div>
            </div>
            <!-- End Deals-and-tabs -->
        </div>
        <!-- Products-4-1-4 -->

    </main>
@endsection
