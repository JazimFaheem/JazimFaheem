<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    @include('user.includes.styles')
    @yield('custom-styles')


    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/images/icons/favicon.png">

</head>

<body class="homepage loaded">
    <!-- Header -->

    @include('user.includes.header')

    <!-- End Header -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->


    <!-- Footer -->

    @include('user.includes.footer')

    <!-- End Footer -->
    @include('user.includes.aside')

    <a class="js-go-to u-go-to animated" href="#" data-position="{&quot;bottom&quot;: 15, &quot;right&quot;: 15 }"
        data-type="fixed" data-offset-top="400" data-compensation="#header" data-show-effect="slideInUp"
        data-hide-effect="slideOutDown"
        style="display: inline-block; position: fixed; opacity: 0; bottom: 15px; right: 15px;">
        <span class="fas fa-arrow-up u-go-to__inner"></span>
    </a>
    <!-- Scripts -->

    @include('user.includes.scripts')
    <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif

        @if(session('info'))
            toastr.info("{{ session('info') }}");
        @endif

        @if(session('warning'))
            toastr.warning("{{ session('warning') }}");
        @endif
    </script>
    @yield('custom-scripts')
    <script>
         $(document).on('click','.add_to_cart',function(){
          var product_id = $(this).data('product_id');
          var price = $(this).data('price');
          var variation_id = $('.variation_id').find('option:selected').val();
          var quantity = $('.quantity').val();
          console.log(product_id);
          console.log(price);
          console.log(variation_id);
          console.log(quantity);
          $.ajax({
                type: "GET",
                url: "{{ route('add_to_cart') }}",
                data: {
                    product_id: product_id,
                    price: price,
                    variation_id: variation_id,
                    quantity: quantity,
                },
                success: function(result) {
                    console.log(result);
                    $(".cart_count").text(result.cartcount);
                    $('#cartList').load(window.location.href + ' #cartList');
                    $('#desk_cart_price').load(window.location.href + ' #desk_cart_price');
                    $('#mob_cart_price').load(window.location.href + ' #mob_cart_price');
                    toastr.success('Added to Cart!')
                },
                error: function(error) {
                    toastr.error(error.message);
                }
            });
        });

        $(document).on('click','.remove_to_cart',function(){
          var product_id = $(this).data('product_id');
          $.ajax({
                type: "GET",
                url: "{{ route('remove_to_cart') }}",
                data: {
                    product_id: product_id,
                },
                success: function(result) {
                    $(".cart_count").text(result.cartcount);
                    $('#cartList').load(window.location.href + ' #cartList');
                    $('#desk_cart_price').load(window.location.href + ' #desk_cart_price');
                    $('#mob_cart_price').load(window.location.href + ' #mob_cart_price');
                    toastr.success('Removed from Cart!')
                },
                error: function(error) {
                    toastr.error(error.message);
                }
            });
        });

        $(document).on('keyup', '.search-product', function() {
            var keyword = $('.search-product').val();
            console.log(keyword);
            $.ajax({
                type: 'GET',
                url: "{{ route('get.products') }}",
                data: {
                    key: keyword
                },
                success: function(resp) {
                    console.log(resp);
                    $('.productlist').css('display', 'block');
                    $('.productlist').html(resp);
                },
                error: function(resp) {
                    console.log(resp);
                }
            });
        });
    </script>
</body>

</html>
