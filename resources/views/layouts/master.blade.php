
<!DOCTYPE html>
<html dir="ltr" lang="en" class="webkit chrome chrome96 win journal-desktop is-guest skin-2 responsive-layout center-header catalog-language catalog-currency lang-flag lang-flag-mobile currency-symbol currency-symbol-mobile collapse-footer-columns mobile-menu-on-tablet extended-layout header-center header-sticky sticky-menu product-grid-second-image product-list-second-image hide-cart home-page layout-1 route-common-home oc2 oc23 no-language" data-j2v="2.8.8">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <!--[if IE]><meta
        http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/><![endif]-->
        <title>Niko Sewing Machines</title>
        <link name="twitter:image:height" content="200" />
        <link href="{{asset('images/cart.png')}}" rel="icon" />
        <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/font-awesome-animation.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/sewing.css')}}"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"/>
        <script type="text/javascript" src="{{asset('js/sewingmachine.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/scrollup.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        @yield('css')
    </head>
    <body>
        <div>
            <div>
                <!-- Header -->
                @include('front.component.header')

                @yield('content')

                <!-- Footer -->
                @include('front.component.footer')

            </div>
        </div>
        
        <script>
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @elseif(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
        </script>
        @yield('js')
    </body>
</html>