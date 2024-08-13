@extends('user.layout.master')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                {{ $category->slug }}</li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="row mb-8">
                <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
                    <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
                        <!-- List -->
                        <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
                            @foreach ($categories as $categoryItem)
                                <li>
                                    <a class="dropdown-current" href="{{ route('products.by.category', $categoryItem->slug) }}">{{ $categoryItem->name }} <span
                                            class="text-gray-25 font-size-12 font-weight-normal"></span></a>

                                    <ul class="list-unstyled dropdown-list">
                                        <!-- Menu List -->
                                        @foreach ($categoryItem->subcategory as $subcategoryItem)
                                            <li><a class="dropdown-item" href="{{ route('products.by.subcategory', $subcategoryItem->slug) }}">{{ $subcategoryItem->name }}<span
                                                        class="text-gray-25 font-size-12 font-weight-normal"></span></a>
                                            </li>
                                        @endforeach
                                        <!-- End Menu List -->
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                        <!-- End List -->
                    </div>
                    
                </div>
                <div class="col-xl-9 col-wd-9gdot5">
                    <!-- Shop-control-bar Title -->
                    <div class="d-block d-md-flex flex-center-between mb-3">
                        <h3 class="font-size-25 mb-2 mb-md-0">{{ $category->name }}</h3>
                        <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
                    </div>
                    <!-- End shop-control-bar Title -->
                    <!-- Shop-control-bar -->
                    <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
                        <div class="d-xl-none">
                            <!-- Account Sidebar Toggle Button -->
                            <a id="sidebarNavToggler1"
                                class="btn btn-sm py-1 font-weight-normal target-of-invoker-has-unfolds"
                                href="javascript:;" role="button" aria-controls="sidebarContent1" aria-haspopup="true"
                                aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false"
                                data-unfold-target="#sidebarContent1" data-unfold-type="css-animation"
                                data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft"
                                data-unfold-duration="500">
                                <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                            </a>
                            <!-- End Account Sidebar Toggle Button -->
                        </div>
                        <div class="px-3 d-none d-xl-block">
                            <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill"
                                        href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                                        aria-selected="false">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            <i class="fa fa-th"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill"
                                        href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                                        aria-selected="true">
                                        <div class="d-md-flex justify-content-md-center align-items-md-center">
                                            <i class="fa fa-list"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex">
                            <form method="get">
                                <!-- Select -->
                                <div
                                    class="dropdown bootstrap-select js-select dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0">
                                    <select
                                        class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0"
                                        tabindex="-98">
                                        <option value="one" selected="">Default sorting</option>
                                        <option value="two">Sort by popularity</option>
                                        <option value="three">Sort by average rating</option>
                                        <option value="four">Sort by latest</option>
                                        <option value="five">Sort by price: low to high</option>
                                        <option value="six">Sort by price: high to low</option>
                                    </select>
                                </div>
                                <!-- End Select -->
                            </form>
                            <form method="POST" class="ml-2 d-none d-xl-block">
                                <!-- Select -->
                                <div class="dropdown bootstrap-select js-select dropdown-select max-width-120"><select
                                        class="js-select selectpicker dropdown-select max-width-120"
                                        data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0"
                                        tabindex="-98">
                                        <option value="one" selected="">Show 20</option>
                                        <option value="two">Show 40</option>
                                        <option value="three">Show All</option>
                                    </select>
                                </div>
                                <!-- End Select -->
                            </form>
                        </div>
                        <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                            <form method="post" class="min-width-50 mr-1">
                                <input size="2" min="1" max="3" step="1" type="number"
                                    class="form-control text-center px-2 height-35" value="1">
                            </form> of 3
                            <a class="text-gray-30 font-size-20 ml-2" href="#">→</a>
                        </nav>
                    </div>
                    <!-- End Shop-control-bar -->
                    <!-- Shop Body -->
                    <!-- Tab Content -->

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                            aria-labelledby="pills-one-example1-tab" data-target-group="groups">
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
                                                            class="font-size-12 text-gray-5">{{ $catename->name }}</a>, <a
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
                                                        <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i>
                                                            Compare</a>
                                                        @if ($productItem->type == 'simple')
                                                            <a href="../shop/wishlist.html"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-favorites mr-1 font-size-15"></i> Add
                                                                to Wishlist</a>
                                                        @else
                                                            <a href="{{ route('product.details', $productItem->slug) }}"
                                                                class="text-gray-6 font-size-13"><i
                                                                    class="ec ec-add-to-cart mr-1 font-size-15"></i> Select
                                                                Options</a>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
                            aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                            <ul class="d-block list-unstyled products-group prodcut-list-view">
                                @foreach ($products as $productItem)
                                    <li class="product-item remove-divider">
                                        <div class="product-item__outer w-100">
                                            <div class="product-item__inner remove-prodcut-hover py-4 row">
                                                <div class="product-item__header col-6 col-md-2">
                                                    <div class="mb-2">
                                                        <a href="{{ route('product.details', $productItem->slug) }}"
                                                            class="d-block text-center"><img class="img-fluid"
                                                                src="{{ $productItem->image }}"
                                                                alt="Image Description"></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__body col-6 col-md-7">
                                                    <div class="pr-lg-10">
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
                                                        <h5 class="mb-2 product-item__title"><a
                                                                href="{{ route('product.details', $productItem->slug) }}"
                                                                class="text-blue font-weight-bold">{{ $productItem->name }}</a>
                                                        </h5>
                                                        <div class="prodcut-price mb-2 d-md-none">
                                                            <div class="prodcut-price d-flex align-items-center flex-wrap position-relative"
                                                                style="top:10px">
                                                                <ins
                                                                    class="font-size-20 text-red text-decoration-none mr-2">Rs.{{ $productItem->sale_price }}</ins>
                                                                <del
                                                                    class="font-size-12 tex-gray-6 position-absolute bottom-100">Rs.{{ $productItem->regular_price }}</del>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 d-none d-md-block">
                                                            <a class="d-inline-flex align-items-center small font-size-14"
                                                                href="#">
                                                                <div class="text-warning mr-2">
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="fas fa-star"></small>
                                                                    <small class="far fa-star text-muted"></small>
                                                                </div>
                                                                <span class="text-secondary">(40)</span>
                                                            </a>
                                                        </div>
                                                        <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                            <li class="line-clamp-1 mb-1 list-bullet">
                                                                SKU:
                                                                @foreach ($productItem->productinventories as $inventory)
                                                                    {{ $inventory->sku }}
                                                                @endforeach
                                                                </p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer col-md-3 d-md-block">
                                                    <div class="mb-3">
                                                        <div class="prodcut-price mb-2">
                                                            <div class="prodcut-price d-flex align-items-center flex-wrap position-relative"
                                                                style="top:10px">
                                                                <ins
                                                                    class="font-size-20 text-red text-decoration-none mr-2">Rs.{{ $productItem->sale_price }}</ins>
                                                                <del
                                                                    class="font-size-12 tex-gray-6 position-absolute bottom-100">Rs.{{ $productItem->regular_price }}</del>
                                                            </div>
                                                        </div>
                                                        <div class="prodcut-add-cart">
                                                            @if ($productItem->type == 'simple')
                                                                <a href="../shop/single-product-fullwidth.html"
                                                                    class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover add_to_cart">Add
                                                                    to cart</a>
                                                            @else
                                                                <a href="{{ route('product.details', $productItem->slug) }}"
                                                                    class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Select
                                                                    Option</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                                        <a href="../shop/compare.html"
                                                            class="text-gray-6 font-size-13 mx-wd-3"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="../shop/wishlist.html"
                                                            class="text-gray-6 font-size-13 mx-wd-3"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Tab Content -->
                    <!-- End Shop Body -->
                    <!-- Shop Pagination -->
                    <nav class="d-md-flex justify-content-between align-items-center border-top pt-3"
                        aria-label="Page navigation example">
                        <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>
                        <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                            <li class="page-item"><a class="page-link current" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                        </ul>
                    </nav>
                    <!-- End Shop Pagination -->
                </div>
            </div>
            <!-- Brand Carousel -->
            <div class="mb-6">
                <div class="py-2 border-top border-bottom">
                    <div class="js-slick-carousel u-slick my-1 slick-initialized slick-slider" data-slides-show="5"
                        data-slides-scroll="1"
                        data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y"
                        data-arrow-left-classes="fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9"
                        data-arrow-right-classes="fa fa-angle-right u-slick__arrow-classic-inner--right"
                        data-responsive="[{
                        &quot;breakpoint&quot;: 992,
                        &quot;settings&quot;: {
                            &quot;slidesToShow&quot;: 2
                        }
                    }, {
                        &quot;breakpoint&quot;: 768,
                        &quot;settings&quot;: {
                            &quot;slidesToShow&quot;: 1
                        }
                    }, {
                        &quot;breakpoint&quot;: 554,
                        &quot;settings&quot;: {
                            &quot;slidesToShow&quot;: 1
                        }
                    }]">
                        <div class="js-prev d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y fa fa-angle-left u-slick__arrow-classic-inner--left z-index-9 slick-arrow slick-disabled"
                            aria-disabled="true" style=""></div>
                        <div class="slick-list draggable">
                            <div class="slick-track"
                                style="opacity: 1; width: 1404px; transform: translate3d(0px, 0px, 0px);">
                                <div class="js-slide slick-slide slick-current slick-active" data-slick-index="0"
                                    aria-hidden="false" style="width: 234px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img1.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                    style="width: 234px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img2.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                                    style="width: 234px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img3.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                                    style="width: 234px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img4.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide slick-active" data-slick-index="4" aria-hidden="false"
                                    style="width: 234px; height: auto;" tabindex="0">
                                    <a href="#" class="link-hover__brand" tabindex="0">
                                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img5.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                                <div class="js-slide slick-slide" data-slick-index="5" aria-hidden="true"
                                    style="width: 234px; height: auto;" tabindex="-1">
                                    <a href="#" class="link-hover__brand" tabindex="-1">
                                        <img class="img-fluid m-auto max-height-50" src="../../assets/img/200X60/img6.png"
                                            alt="Image Description">
                                    </a>
                                </div>
                            </div>
                        </div>





                        <div class="js-next d-none d-lg-inline-block u-slick__arrow-normal u-slick__arrow-centered--y fa fa-angle-right u-slick__arrow-classic-inner--right slick-arrow"
                            style="" aria-disabled="false"></div>
                    </div>
                </div>
            </div>
            <!-- End Brand Carousel -->
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
