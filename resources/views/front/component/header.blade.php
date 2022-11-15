<header class="journal-header-center menu-cart-off">
    <div class="header" style="top: -277px;">
        <div class="journal-top-header j-min z-1"></div>
        <div class="journal-menu-bg z-0"></div>
        <div class="journal-center-bg j-100 z-0"></div>
        <div id="header" class="journal-header z-2">
            <div class="header-assets top-bar">
                <div class="journal-links j-min xs-100 sm-100 md-50 lg-50 xl-50">
                    <div class="links">
                        <ul class="top-menu">
                            <li>
                                <a href="tel:01992640250" class="m-item text-only">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    <span class="top-menu-link">02032861196</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('delivery')}}" class="m-item ">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                    <span class="top-menu-link">Delivery Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('return')}}" class="m-item ">
                                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
                                    <span class="top-menu-link">Returns</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="journal-currency j-min">
                    <form action="#" method="post" enctype="multipart/form-data">
                        <div id="currency" class="">
                            <div class="btn-group">
                                <button class="dropdown-toggle" type="button" data-hover="dropdown">
                                    <div>
                                        <span class="currency-symbol">£</span>
                                    </div>
                                </button>
                                <ul class="dropdown-menu" style="left: 50%; margin-left: 0px;">
                                    <li>
                                        <a onclick="$(this).closest('form').find('input[name=\'code\']').val('EUR'); $(this).closest('form').submit();">€
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="$(this).closest('form').find('input[name=\'code\']').val('GBP'); $(this).closest('form').submit();">£
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="$(this).closest('form').find('input[name=\'code\']').val('USD'); $(this).closest('form').submit();">$
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <input type="hidden" name="code" value="">
                            <input type="hidden" name="redirect" value="#">
                        </div>
                    </form>
                </div>
                <div class="journal-secondary j-min xs-100 sm-100 md-50 lg-50 xl-50">
                    <div class="links">
                        <ul class="top-menu">
                            <li>
                                <a href="{{route('login')}}" class="m-item ">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <span class="top-menu-link">Login</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('register')}}" class="m-item ">
                                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                                    <span class="top-menu-link">Register</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="m-item ">
                                    <i class="fa fa-book" aria-hidden="true"></i>        
                                    <span class="top-menu-link">Order History</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('wishlist')}}" class="m-item wishlist-total">
                                    <i class="fa fa-heart" aria-hidden="true"></i>     
                                    <span class="top-menu-link">Wish List (<span class="product-count">{{ count((array) session('wish')) }}</span>)</span>                
                                </a>
                            </li>
                            <li>
                                <a href="{{route('cart')}}" class="m-item wishlist-total">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>     
                                    <span class="top-menu-link">Cart (<span class="product-count">{{ count((array) session('cart')) }}</span>)</span>                
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-assets">
                <div class="journal-search j-min xs-100 sm-50 md-25 lg-25 xl-25">
                    <div id="search" class="input-group j-min">
                        <input type="text" name="search" value="" placeholder="Search entire store..." autocomplete="off" class="form-control input-lg" autocomplete2="off">
                        <div class="button-search">
                            <button type="button">
                                <i class="fa fa-search" aria-hidden="true"></i>

                            </button>
                        </div>
                        <div class="autocomplete2-suggestions" style="position: absolute; display: none; width: 100%; max-height: 2000px; z-index: 9999;">
                            
                        </div>
                    </div>
                </div>
                <div class="journal-logo j-100 xs-100 sm-100 md-50 lg-50 xl-50">
                    <div id="logo">
                        <a href="{{route('home')}}">
                            <h2 style="margin:30px;color: olivedrab !important">Niko Sewing Machines</h2>                        
                        </a>
                    </div>
                </div>
                <div class="journal-cart j-min xs-100 sm-50 md-25 lg-25 xl-25">
                    <h2 class="phone" style="margin:5px;color: olivedrab !important;"> 02032861196</h2>
                    
                </div>
            </div>
            <div class="journal-menu j-min xs-100 sm-100 md-100 lg-100 xl-100">
                <style></style>
                <div class="mobile-trigger">MENU</div>
                <ul class="super-menu mobile-menu menu-table" style="table-layout: fixed">
                    <li id="main-menu-item-1" class="drop-down  icon-only main-menu-item-1">
                        <a href="{{route('home')}}">
                            <i class="fa fa-home" aria-hidden="true" style="top:9px; font-size: 20px;"></i>

                        </a>
                        <span class="mobile-plus">+</span>
                    </li>
                    <li id="main-menu-item-2" class="mega-menu-brands  main-menu-item-2">
                        <a>
                            <span class="main-menu-text">Shop by Brand</span>
                        </a>
                        <div class="mega-menu" style="display: none;">
                            <div>
                                @foreach(brands() as $item)
                                <div class="mega-menu-item xs-50 sm-33 md-25 lg-16 xl-16">
                                    <div>
                                        <div>
                                            <a href="{{route('product',['id'=>$item->id,'name'=>'brand'])}}"> 
                                                <img width="250" height="250" class="lazy" src="{{asset($item->image)}}" alt="Baby Lock" style="display: block;">
                                            </a>
                                            <ul></ul>
                                        </div>
                                        <span class="clearfix"> </span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <span class="clearfix"> </span>
                        </div>
                        <span class="mobile-plus">+</span>
                    </li>
                    <li id="main-menu-item-3" class="drop-down  main-menu-item-3">
                        <a href="javascript:;">
                            <span class="main-menu-text">Products</span>
                        </a>
                        <ul style="min-width: 195px; display: none;">
                            @foreach(categories() as $item)
                            <li>
                                <a href="{{route('product',['id'=>$item->id,'name'=>'category'])}}">{{$item->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                        <span class="mobile-plus">+</span>
                    </li>
                    <li id="main-menu-item-4" class="drop-down  main-menu-item-4">
                        <a href="{{route('about')}}">
                            <span class="main-menu-text">About Us</span>
                        </a>
                        <span class="mobile-plus">+</span>
                    </li>
                    <li id="main-menu-item-5" class="drop-down  main-menu-item-5">
                        <a href="{{route('service')}}">
                            <span class="main-menu-text">Service and Repair</span>
                        </a>
                        <span class="mobile-plus">+</span>
                    </li>
                    <li id="main-menu-item-6" class="drop-down  main-menu-item-6">
                        <a>
                            <span class="main-menu-text">Customer Services</span>
                        </a>
                        <ul style="min-width: 194px;" class="hidden">
                            <li>
                                <a href="{{route('delivery')}}">Delivery Information</a>
                            </li>
                            <li>
                                <a href="{{route('policy')}}">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="{{route('return')}}">Return</a>
                            </li>
                        </ul>
                        <span class="mobile-plus">+</span>
                    </li>
                    <li id="main-menu-item-7" class="drop-down  main-menu-item-7">
                        <a href="{{route('contact')}}">
                            <span class="main-menu-text">Contact</span>
                        </a>
                        <span class="mobile-plus">+</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
