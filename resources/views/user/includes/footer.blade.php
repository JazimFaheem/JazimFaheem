@php
    $settings = \App\Models\GeneralSetting::find(1);
@endphp
<footer>
    
    <!-- End Footer-top-widget -->
    <!-- Footer-newsletter -->
    <div class="bg-primary py-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-md-3 mb-lg-0">
                    <div class="row align-items-center">
                        <div class="col-auto flex-horizontal-center">
                            <i class="ec ec-newsletter font-size-40"></i>
                            <h2 class="font-size-20 mb-0 ml-3">Sign up to Newsletter</h2>
                        </div>
                        <div class="col my-4 my-md-0">
                            <h5 class="font-size-15 ml-4 mb-0">...and receive <strong>$20 coupon for first
                                    shopping.</strong></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <!-- Subscribe Form -->
                    <form class="js-validate js-form-message" novalidate="novalidate">
                        <label class="sr-only" for="subscribeSrEmail">Email address</label>
                        <div class="input-group input-group-pill">
                            <input type="email" class="form-control border-0 height-40" name="email"
                                id="subscribeSrEmail" placeholder="Email address" aria-label="Email address"
                                aria-describedby="subscribeButton" required=""
                                data-msg="Please enter a valid email address.">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-dark btn-sm-wide height-40 py-2"
                                    id="subscribeButton">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Subscribe Form -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-newsletter -->
    <!-- Footer-bottom-widgets -->
    <div class="pt-8 pb-4 bg-gray-13">
        <div class="container mt-1">
            <div class="row">
                <div class="col-lg-5">
                    <div class="mb-6">
                        <a href="#" class="d-inline-block">
                           <img src="@if($settings){{asset('assets/images/logos')}}/{{$settings->footer_logo}}@endif" alt="" width="156">
                        </a>
                    </div>
                    <div class="mb-4">
                        <div class="row no-gutters">
                            <div class="col-auto">
                                <i class="ec ec-support text-primary font-size-56"></i>
                            </div>
                            <div class="col pl-3">
                                <div class="font-size-13 font-weight-light">Got questions? Call us 24/7!</div>
                                <a href="tel:@if($settings){{$settings->phone}}@endif" class="font-size-20 text-gray-90">@if($settings){{$settings->phone}}@endif, </a><a
                                    href="mailto:@if($settings){{$settings->email}}@endif" class="font-size-20 text-gray-90">@if($settings){{$settings->email}}@endif</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6 class="mb-1 font-weight-bold">Contact info</h6>
                        <address class="">
                            @if($settings){{$settings->address}}@endif
                        </address>
                    </div>
                    <div class="my-4 my-md-4">
                        <ul class="list-inline mb-0 opacity-7">
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                    href="#">
                                    <span class="fab fa-facebook-f btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                    href="#">
                                    <span class="fab fa-google btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                    href="#">
                                    <span class="fab fa-twitter btn-icon__inner"></span>
                                </a>
                            </li>
                            <li class="list-inline-item mr-0">
                                <a class="btn font-size-20 btn-icon btn-soft-dark btn-bg-transparent rounded-circle"
                                    href="#">
                                    <span class="fab fa-github btn-icon__inner"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-12 col-md mb-4 mb-md-0">
                            <h6 class="mb-3 font-weight-bold">Find it Fast</h6>
                            <!-- List Group -->
                            <ul
                                class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Laptops &amp;
                                        Computers</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Cameras &amp;
                                        Photography</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Smart Phones &amp;
                                        Tablets</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Video Games &amp;
                                        Consoles</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">TV &amp; Audio</a>
                                </li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Gadgets</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Car Electronic &amp;
                                        GPS</a></li>
                            </ul>
                            <!-- End List Group -->
                        </div>

                        <div class="col-12 col-md mb-4 mb-md-0">
                            <!-- List Group -->
                            <ul
                                class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent mt-md-6">
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Printers &amp;
                                        Ink</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Software</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Office Supplies</a>
                                </li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Computer
                                        Components</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/product-categories-5-column-sidebar.html">Accesories</a></li>
                            </ul>
                            <!-- End List Group -->
                        </div>

                        <div class="col-12 col-md mb-4 mb-md-0">
                            <h6 class="mb-3 font-weight-bold">Customer Care</h6>
                            <!-- List Group -->
                            <ul
                                class="list-group list-group-flush list-group-borderless mb-0 list-group-transparent">
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/my-account.html">My Account</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/track-your-order.html">Order Tracking</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../shop/wishlist.html">Wish List</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../home/terms-and-conditions.html">Customer Service</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../home/terms-and-conditions.html">Returns / Exchange</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../home/faq.html">FAQs</a></li>
                                <li><a class="list-group-item list-group-item-action"
                                        href="../home/terms-and-conditions.html">Product Support</a></li>
                            </ul>
                            <!-- End List Group -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-bottom-widgets -->
    <!-- Footer-copy-right -->
    <div class="bg-gray-14 py-2">
        <div class="container">
            <div class="flex-center-between d-block d-md-flex">
                <div class="mb-3 mb-md-0">Copyright ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>

                    @if ($settings)
                    <a href="{{route('index')}}" class="font-weight-bold text-gray-90">  {{ $settings->site_title }}</a>
                    @endif All rights reserved. </div>
                <div class="text-md-right">
                    <span class="d-inline-block bg-white border rounded p-1">
                        <img class="max-width-5" src="{{ asset('assets/images/pay1.jpg') }}" alt="Image Description">
                    </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                        <img class="max-width-5" src="{{ asset('assets/images/pay2.jpg') }}" alt="Image Description">
                    </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                        <img class="max-width-5" src="{{ asset('assets/images/pay3.jpg') }}" alt="Image Description">
                    </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                        <img class="max-width-5" src="{{ asset('assets/images/pay4.jpg') }}" alt="Image Description">
                    </span>
                    <span class="d-inline-block bg-white border rounded p-1">
                        <img class="max-width-5" src="{{ asset('assets/images/pay5.jpg') }}" alt="Image Description">
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer-copy-right -->
</footer>