<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>ই কমার্স ওয়েবসাইট</title>

    <link rel="stylesheet" type="text/css" href="/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/crumina-fonts.css">
    <link rel="stylesheet" type="text/css" href="/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="/css/grid.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">


    <!--Plugins styles-->

    <link rel="stylesheet" type="text/css" href="/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/css/primary-menu.css">
    <link rel="stylesheet" type="text/css" href="/css/magnific-popup.css">

    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">

    <!--Styles for RTL-->

    <!--<link rel="stylesheet" type="text/css" href="css/rtl.css">-->

    <!--External fonts-->

    <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>

</head>


<body class=" ">

<header class="header" id="site-header">

    <div class="container">

        <div class="header-content-wrapper">

            <ul class="nav-add">
                <li class="cart">

                    <a href="#" class="js-cart-animate">
                        <i class="seoicon-basket"></i>
                        <span class="cart-count">{{Cart::content()->count()}}</span>
                    </a>

                    <div class="cart-popup-wrap">
                        <div class="popup-cart">
                            @if(Cart::content()->count()==0)
                             <h4 class="title-cart">No products in the cart!</h4>
                             <p class="subtitle">Please make your choice.</p>
                            @else
                            <h4 class="title-cart">{{Cart::content()->count()}} items in the cart!</h4>
                            @endif
                           
                            
                           <a href="{{route('checkout.cart')}}">     
                               <div class="btn btn-small btn--dark">
                                <span class="text">view all catalog</span>
                            </div>
                           </a>
                            
                        </div>
                    </div>

                </li>
            </ul>
        </div>

    </div>

</header>


@yield('page_data')

<!-- Footer -->

<footer class="footer">
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                </div>
            </div>
        </div>
    </div>
</footer>



<script src={{asset("js/jquery-2.1.4.min.js")}}></script>
<script src={{asset("js/crum-mega-menu.js")}}></script>
<script src="/js/swiper.jquery.min.js"></script>
<script src="/js/theme-plugins.js"></script>
<script src="/js/main.js"></script>
<script src="/js/form-actions.js"></script>

<script src="/js/velocity.min.js"></script>
<script src="/js/ScrollMagic.min.js"></script>
<script src="/js/animation.velocity.min.js"></script>

 <script src="{{ asset('js/toastr.min.js') }}"></script>

<script>
    @if(Session::has('info'))
       toastr.info("{{Session::get('info')}}");
    @endif

    @if(Session::has('success'))
      toastr.success("{{Session::get('success')}}");
    @endif

    @if(Session::has('warning'))
      toastr.warning("{{Session::get('warning')}}");
    @endif
</script>
 

<!-- ...end JS Script -->


</body>

<!-- Mirrored from theme.crumina.net/html-seosight/16_shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 27 Nov 2016 13:03:04 GMT -->
</html>