@extends('layouts.master')

@section('css')
<style>
    /*.hidden
    {
        display: none !important;
    }*/
</style>

@endsection

@section('content')

<div id="top-modules">
    <div class="journal2_slider "  style="padding-top: 0px; padding-bottom: 0px">
        <div class="journal-slider-1 tp-banner-container box nav-on-hover journal-fullwidth-slider   " style="max-width: 100%; height: 510px;">
            <div class="tp-banner" id="journal-slider-1317777340" style="display: none; background-image: url('images/bernina 325-1200x400.jpg'); background-size: cover; background-position: center center;">
                <ul>
                    <li data-fstransition="fade" data-fsslotamount="0" data-fsmasterspeed="0" data-transition="fade" data-easing="easeInOutQuart" data-masterspeed="800" data-thumb="{{asset('images/bernina 325-100x75.jpg')}}" > 
                        <img src="{{asset('images/transparent-980x400.png')}}" data-lazyload="{{asset('images/bernina 325-1200x400.jpg')}}" width="1220" height="510" alt="bernina 325" />
                    </li>
                    <li data-transition="fade" data-easing="easeInOutQuart" data-masterspeed="800" data-link="#" data-thumb="{{asset('images/overlockers-and-coverstitchers-100x75.jpg')}}" > 
                        <img src="{{asset('images/transparent-980x400.png')}}" data-lazyload="{{asset('images/overlockers-and-coverstitchers-1200x400.jpg')}}" width="1220" height="510" alt="overlocker and coverstitchers" />
                    </li>
                    <li data-transition="fade" data-easing="easeInOutQuart" data-masterspeed="800" data-thumb="{{asset('images/NEW-bernina-platinum-dealer-banner-NEW-100x75.jpg')}}" >
                        <img src="{{asset('images/transparent-980x400.png')}}" data-lazyload="{{asset('images/NEW-bernina-platinum-dealer-banner-NEW-1200x400.jpg')}}" width="1220" height="510" alt="Bernina platinum dealer" />
                    </li>
                    <li data-transition="fade" data-easing="easeInOutQuart" data-masterspeed="800" data-thumb="{{asset('images/BANNER-for-servicing-100x75.jpg')}}" >
                        <img src="{{asset('images/transparent-980x400.png')}}" data-lazyload="{{asset('images/BANNER-for-servicing-1200x400.jpg')}}" width="1220" height="510" alt="repair and servicing" />
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
        <style>.journal-slider-1 .tp-bullets { bottom: 20px !important }</style> 
        <script>
            (function(){$('<style></style>').appendTo($('head'));var opts=$.parseJSON('{"delay":"6000","onHoverStop":"off","thumbWidth":100,"thumbHeight":75,"thumbAmount":"4","hideThumbs":1,"navigationType":"bullet","navigationArrows":"solo","navigationStyle":"round","navigationHAlign":"center","navigationVAlign":"bottom","navigationHOffset":"","navigationVOffset":"20","startwidth":"1220","startheight":"510","spinner":""}');opts.hideThumbs=0;$('#journal-slider-1317777340').show().revolution(opts);setTimeout(function(){$('#journal-slider-1317777340').css('background-image','none');},2500);})();
        </script> 
    </div>
    <div class="journal2_custom_sections "  style="padding-top: 0px; padding-bottom: 0px">
        <div id="cs-1404588896" class="cs-8 box custom-sections section-product    " style="max-width: 1220px">
            <div class="box-heading box-sections box-block">
                <ul>
                    <li>
                        <a href="javascript:;" class="specials" data-option-value="section-0">Specials</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="new_arival" data-option-value="section-1">New Arrivals</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-option-value="section-2">Embroidery Machine</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-option-value="section-3">Quilting Machine</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-option-value="section-4">Overlockers</a>
                    </li>
                </ul>
            </div>
            <div class="box-content">
                <div class="product-grid">
                    @foreach($proc as $list)
                    <div class="product-grid-item isotope-element section-0 xs-100 sm-50 md-33 lg-25 xl-20 display-icon inline-button ">
                        <div class="product-wrapper " style="">
                            <div class="image has-countdown"> 
                                <a href="{{route('detail')}}" style=";background: url('{{asset($list->image)}}') no-repeat;" >
                                    <img class="first-image" width="250" height="250" src="{{asset($list->image)}}" title="Janome 230DC" alt="Janome 230DC" /> 
                                </a>
                                <span class="label-sale"><b>-5%</b></span>
                            </div>
                            <div class="product-details">
                                <div class="caption">
                                    <div class="name">
                                        <a href="{{route('detail')}}">{{$list->name}}</a>
                                    </div>
                                    <div class="price">
                                        <span class="price-old">£ {{$list->price}}</span> 
                                        <span class="price-new" data-end-date='Tue Dec 21 2021 00:00:00 +0000'>£ {{$list->price}}</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <div class="wishlist">
                                        <a onclick="addToWishList('254');" class="hint--top" data-hint="Add to Wish List" href="{{route('wishlist')}}">
                                            <i class="fa fa-heart" aria-hidden="true" style="color: white;"></i>
                                            <span class="button-wishlist-text">Add to Wish List</span>
                                        </a>
                                    </div>
                                    <div class="compare">
                                        <a onclick="addToCompare('254');" class="hint--top" data-hint="Compare this Product" href="{{route('cart')}}">
                                           <i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>

                                            <span class="button-compare-text">Add to cart</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="box-content">
                <div class="product-grid">
                    @foreach($proc as $list)
                    <div class="product-grid-item isotope-element section-1 xs-100 sm-50 md-33 lg-25 xl-20 display-icon inline-button ">
                        <div class="product-wrapper " style="">
                            <div class="image has-countdown"> 
                                <a href="{{route('detail')}}" style=";background: url('{{asset($list->image)}}') no-repeat;" >
                                    <img class="first-image" width="250" height="250" src="{{asset($list->image)}}" title="Janome 230DC" alt="Janome 230DC" /> 
                                </a>
                                <span class="label-sale"><b>-5%</b></span>
                            </div>
                            <div class="product-details">
                                <div class="caption">
                                    <div class="name">
                                        <a href="{{route('detail')}}">{{$list->name}}</a>
                                    </div>
                                    <div class="price">
                                        <span class="price-new">£ {{$list->price}}</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <div class="wishlist">
                                        <a onclick="addToWishList('254');" class="hint--top" data-hint="Add to Wish List" href="{{route('wishlist')}}">
                                            <i class="fa fa-heart" aria-hidden="true" style="color: white;"></i>
                                            <span class="button-wishlist-text">Add to Wish List</span>
                                        </a>
                                    </div>
                                    <div class="compare">
                                        <a onclick="addToCompare('254');" class="hint--top" data-hint="Compare this Product" href="{{route('cart')}}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>

                                            <span class="button-compare-text">Add to cart</span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="box-content">
                <div class="product-grid">
                    @foreach($proc as $list)
                    <div class="product-grid-item isotope-element section-2 xs-100 sm-50 md-33 lg-25 xl-20 display-icon inline-button ">
                        <div class="product-wrapper " style="">
                            <div class="image has-countdown"> 
                                <a href="{{route('detail')}}" style=";background: url('{{asset($list->image)}}') no-repeat;" >
                                    <img class="first-image" width="250" height="250" src="{{asset($list->image)}}" title="Janome 230DC" alt="Janome 230DC" /> 
                                </a>
                                <span class="label-sale"><b>-5%</b></span>
                            </div>
                            <div class="product-details">
                                <div class="caption">
                                    <div class="name">
                                        <a href="{{route('detail')}}">{{$list->name}}</a>
                                    </div>
                                    <div class="price">
                                        <span class="price-new">£ {{$list->price}}</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <div class="wishlist">
                                        <a onclick="addToWishList('254');" class="hint--top" data-hint="Add to Wish List" href="{{route('wishlist')}}">
                                            <i class="fa fa-heart" aria-hidden="true" style="color: white;"></i>
                                            <span class="button-wishlist-text">Add to Wish List</span>
                                        </a>
                                    </div>
                                    <div class="compare">
                                        <a onclick="addToCompare('254');" class="hint--top" data-hint="Compare this Product" href="{{route('cart')}}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>

                                            <span class="button-compare-text">Add to cart</span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="box-content">
                <div class="product-grid">
                    @foreach($proc as $list)
                    <div class="product-grid-item isotope-element section-3 xs-100 sm-50 md-33 lg-25 xl-20 display-icon inline-button ">
                        <div class="product-wrapper " style="">
                            <div class="image has-countdown"> 
                                <a href="{{route('detail')}}" style=";background: url('{{asset($list->image)}}') no-repeat;" >
                                    <img class="first-image" width="250" height="250" src="{{asset($list->image)}}" title="Janome 230DC" alt="Janome 230DC" /> 
                                </a>
                                <span class="label-sale"><b>-5%</b></span>
                            </div>
                            <div class="product-details">
                                <div class="caption">
                                    <div class="name">
                                        <a href="{{route('detail')}}">{{$list->name}}</a>
                                    </div>
                                    <div class="price"> 
                                        <span class="price-new">£ {{$list->price}}</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <div class="wishlist">
                                        <a onclick="addToWishList('254');" class="hint--top" data-hint="Add to Wish List" href="{{route('wishlist')}}">
                                            <i class="fa fa-heart" aria-hidden="true" style="color: white;"></i>
                                            <span class="button-wishlist-text">Add to Wish List</span>
                                        </a>
                                    </div>
                                    <div class="compare">
                                        <a onclick="addToCompare('254');" class="hint--top" data-hint="Compare this Product" href="{{route('cart')}}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>

                                            <span class="button-compare-text">Add to cart</span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="box-content">
                <div class="product-grid">
                    @foreach($proc as $list)
                    <div class="product-grid-item isotope-element section-4 xs-100 sm-50 md-33 lg-25 xl-20 display-icon inline-button ">
                        <div class="product-wrapper " style="">
                            <div class="image has-countdown"> 
                                <a href="{{route('detail')}}" style=";background: url('{{asset($list->image)}}') no-repeat;" >
                                    <img class="first-image" width="250" height="250" src="{{asset($list->image)}}" title="Janome 230DC" alt="Janome 230DC" /> 
                                </a>
                                <span class="label-sale"><b>-5%</b></span>
                            </div>
                            <div class="product-details">
                                <div class="caption">
                                    <div class="name">
                                        <a href="{{route('detail')}}">{{$list->name}}</a>
                                    </div>
                                    <div class="price">
                                        <span class="price-new">£ {{$list->price}}</span>
                                    </div>
                                </div>
                                <div class="button-group">
                                    <div class="wishlist">
                                        <a onclick="addToWishList('254');" class="hint--top" data-hint="Add to Wish List" href="{{route('wishlist')}}">
                                            <i class="fa fa-heart" aria-hidden="true" style="color: white;"></i>
                                            <span class="button-wishlist-text">Add to Wish List</span>
                                        </a>
                                    </div>
                                    <div class="compare">
                                        <a onclick="addToCompare('254');" class="hint--top" data-hint="Compare this Product" href="{{route('cart')}}">
                                            <i class="fa fa-shopping-cart" aria-hidden="true" style="color: white;"></i>

                                            <span class="button-compare-text">Add to cart</span>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <script>(function(){var $isotope=$('#cs-1404588896 .product-grid');var $filters=$('#cs-1404588896 .box-heading a[data-option-value]');var default_section='0';$isotope.each(function(){Journal.equalHeight($(this).find('.product-grid-item'),'.name');Journal.equalHeight($(this).find('.product-grid-item'),'.description');Journal.equalHeight($(this).find('.product-grid-item'),'.price');});$('#cs-1404588896 img').imagesLoaded(function(){$isotope.isotope({itemSelector:'.isotope-element',initLayout:default_section===''});});$filters.click(function(){var $this=$(this);if($this.hasClass('selected')){return false;}
                $filters.removeClass('selected');$this.addClass('selected');$isotope.isotope({filter:'.'+$this.attr('data-option-value')})});if(default_section!==''){$('#cs-1404588896 .box-heading a[data-option-value="section-'+default_section+'"]').click();}
                $('#cs-1404588896 .product-grid-item > div').each(function(){var $new=$(this).find('.price-new');if($new.length&&$new.attr('data-end-date')){$(this).find('.image').append('<div class="countdown"></div>');}
                Journal.countdown($(this).find('.countdown'),$new.attr('data-end-date'));});}());
            </script> 
        </div>
    </div>
    <div class="journal2_headline_rotator "  style="background-image: url('images/bg.png'); background-position: center top; background-size: auto; background-attachment: scroll; padding-top: 25px; padding-bottom: 0px">
        <div id="journal-headline-rotator-2117414496" class="journal-headline-rotator-12 journal-rotator headline-mode box  bullets- align-center bullets-off" style="display: none; ; max-width: 1220px">
            <div class="quote  " style="text-align: center; font-weight: 400; font-family: 'Playfair Display'; font-size: 35px; color: rgb(42, 43, 46);">
                <div style="min-height:0px;">
                    <div class="rotator-text line-through">
                        <span style="background-color: rgb(255, 255, 255)">Shop By Brand</span>
                    </div>
                </div>
            </div>
        </div> 
        <script>(function(){var single_quote=parseInt('1',10)<=1;$('#journal-headline-rotator-2117414496').show().quovolver({children:'.quote',equalHeight:false,navPosition:single_quote?'':'below',navNum:''?true:false,pauseOnHover:parseInt('1',10)?true:false,autoPlay:!single_quote,autoPlaySpeed:'4000',transitionSpeed:300});})();</script>
    </div>
    <div class="journal2_carousel "  style="background-image: url('images/bg.png'); background-position: center top; background-size: auto; background-attachment: scroll; padding-top: 20px; padding-bottom: 20px">
        <div id="carousel-1733127895" class="carousel-9 box journal-carousel carousel-brand  no-heading bullets-on arrows-top " style="max-width: 1220px">
            <div>
                <div class="htabs box-heading single-tab" style="display: none;">
                    <a href="#carousel-1733127895-0" class="atab">Not Translated</a>
                </div>
                <div id="carousel-1733127895-0" class="tab-content box-content">
                    <div class="swiper">
                        <div class="swiper-container" >
                            <div class="swiper-wrapper">
                                @foreach($item as $list)
                                <div class="product-grid-item isotope-element swiper-slide section-0 xs-100 sm-50 md-25 lg-14 xl-14">
                                    <div class="product-wrapper" data-respond="start: 150px; end: 300px; interval: 20px;" style="">
                                        <div class="image"> 
                                            <a href="{{route('product',['id'=>$list->id,'name'=>'brand'])}}" style=""> 
                                                <img class="first-image" width="250" height="250" src="{{asset($list->image)}}" title="Baby Lock" alt="Baby Lock"/> 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div> 
                <script>(function(){$('#carousel-1733127895 .htabs a.atab').tabs();var grid=$.parseJSON('[[0,1],[470,2],[760,4],[980,7],[1100,7]]');var breakpoints={470:{slidesPerView:grid[0][1],slidesPerGroup:grid[0][1]},760:{slidesPerView:grid[1][1],slidesPerGroup:grid[1][1]},980:{slidesPerView:grid[2][1],slidesPerGroup:grid[2][1]},1220:{slidesPerView:grid[3][1],slidesPerGroup:grid[3][1]}};$('#carousel-1733127895 .htabs a.atab').click(function(){var opts={slidesPerView:grid[4][1],slidesPerGroup:grid[4][1],breakpoints:breakpoints,spaceBetween:parseInt('20',10),pagination:$($(this).attr('href')+' .swiper-pagination'),paginationClickable:true,nextButton:$($(this).attr('href')+' .swiper-button-next'),prevButton:$($(this).attr('href')+' .swiper-button-prev'),autoplay:3000,autoplayStopOnHover:true,speed:400,touchEventsTarget:false};$($(this).attr('href')+' .swiper-container').swiper(opts);});$('#carousel-1733127895 .htabs a.atab[href="#carousel-1733127895-0"]').click();})();
                </script> 
            </div>
        </div>
    </div>
    <div class="journal2_static_banners "  style="padding-top: 20px; padding-bottom: 20px">
        <div id="static-banners-1980880952" class="static-banners-7 box static-banners   " style="max-width: 1220px">
            <div>
                <div class="box-content">
                    <div class="static-banner xs-100 sm-100 md-100 lg-100 xl-100"> 
                        <a href="{{route('service')}}" > 
                            <span class="banner-overlay" style="; "></span>
                            <img style="" src="{{asset('images/service-1236x232.jpg')}}" width="1236" height="232" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="extended-container">
    <div id="container" class="container j-container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <div id="journal-headline-rotator-1498347910" class="journal-headline-rotator-10 journal-rotator headline-mode box  bullets- align-center bullets-off" style="display: none; ; ">
                    <div class="quote  " style="text-align: center; font-weight: 400; font-family: 'Playfair Display'; font-size: 35px; color: rgb(42, 43, 46);">
                        <div style="min-height:0px;">
                            <div class="rotator-text line-through">
                                <span style="background-color: rgb(255, 255, 255)">Welcome to Niko Sewing Machines</span>
                            </div>
                        </div>
                    </div>
                </div> 
                <script>(function(){var single_quote=parseInt('1',10)<=1;$('#journal-headline-rotator-1498347910').show().quovolver({children:'.quote',equalHeight:false,navPosition:single_quote?'':'below',navNum:''?true:false,pauseOnHover:parseInt('1',10)?true:false,autoPlay:!single_quote,autoPlaySpeed:'4000',transitionSpeed:300});})();
                </script>
                <div id="journal-cms-block-1567121674" class="journal-cms-block-11 box cms-blocks  " style="">
                    <style>
                        #journal-cms-block-1567121674 .editor-content h1,
                        #journal-cms-block-1567121674 .editor-content h2,
                        #journal-cms-block-1567121674 .editor-content h3 {
                                    }

                        #journal-cms-block-1567121674 .editor-content p {
                                }
                    </style>
                    <div class="blocks">
                        <div class="cms-block xs-100 sm-100 md-100 lg-100 xl-100" style=""> 
                            <span class="block-content block-content-top" style="">
                                <div class="editor-content" style="text-align: center">
                                    <p>
                                        <span style="color: rgb(0, 0, 0); font-family: Tahoma, Geneva, sans-serif;">Onlinesewingmachines.co.uk and Niko Sewing Machine&#39;s are a family business that has been in the sewing machine trade since 1949. Originally making sewing machine cabinets and carry cases, we started manufacturing worktops for industrial sewing machines in the mid 1950&#39;s and are now the only UK company left still making worktops. We opened our first shop in Edmonton London in 1969 and then at Waltham Cross Hertfordshire where we have been for the last 42 years.</span>
                                    </p>
                                </div>
                            </span>
                        </div>
                    </div>
                </div> 
                <script>
                    if(!Journal.isFlexboxSupported){Journal.equalHeight($('#journal-cms-block-1567121674 .cms-block'),'.block-content');}
                </script>
                <div id="multi-module-1463702864" class="multi-module-36 multi-modules-wrapper  " style="">
                    <div class="box multi-modules" style="height:154px; margin-right: -10px">
                        <div class="multi-modules-column xs-50 sm-50 md-50 lg-50 xl-50 column-banner" style="padding-right: 10px">
                            <div class="multi-modules-row " data-ratio="100" style="height: calc(100% / 1 - 10px);">
                                <div id="static-banners-8316225" class="static-banners-34 box static-banners   " style="">
                                    <div>
                                        <div class="box-content">
                                            <div class="static-banner xs-100 sm-100 md-100 lg-100 xl-100"> 
                                                <a href="#" > 
                                                    <span class="banner-overlay" style="; "></span>
                                                    <img style="" src="{{asset('images/schools-645x154.jpg')}}" width="645" height="154" alt=""/>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="multi-modules-column xs-50 sm-50 md-50 lg-50 xl-50 column-banner" style="padding-right: 10px">
                            <div class="multi-modules-row " data-ratio="100" style="height: calc(100% / 1 - 10px);">
                                <div id="static-banners-632068119" class="static-banners-35 box static-banners   " style="">
                                    <div>
                                        <div class="box-content">
                                            <div class="static-banner xs-100 sm-100 md-100 lg-100 xl-100">
                                                <a href="#" > 
                                                    <span class="banner-overlay" style="; "></span>
                                                    <img style="" src="{{asset('images/free-tuition-645x154.jpg')}}" width="645" height="154" alt=""/>
                                                </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <style>
                            @media only screen and (min-width: 1220px){
                                #top-modules .multi-modules-wrapper,
                                #bottom-modules .multi-modules-wrapper{
                                    margin-bottom:-10px !important;
                                }
                            }
                            @media only screen and (max-width: 1220px){
                                #multi-module-1463702864 .multi-modules{
                                    height: calc(100% * 0.12622950819672) !important;
                                }
                            }
                            @media only screen and (max-width: 760px){
                                #multi-module-1463702864 .multi-modules,
                                #multi-module-1463702864 .multi-modules-column,
                                #multi-module-1463702864 .multi-modules-row{
                                    height: auto !important;
                                }
                                            #multi-module-1463702864 .multi-modules-column:nth-child(1) .row-rs{
                                    height: calc(100vw * 0.23692307692308) !important;
                                }
                                            #multi-module-1463702864 .multi-modules-column:nth-child(2) .row-rs{
                                    height: calc(100vw * 0.23692307692308) !important;
                                }
                                            #multi-module-1463702864 .column-banner .multi-modules-row:first-of-type:not(:only-of-type){
                                    margin-bottom:10px;
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom-modules">
        <div class="journal2_headline_rotator "  style="padding-top: 25px; padding-bottom: 0px">
            <div id="journal-headline-rotator-157223138" class="journal-headline-rotator-13 journal-rotator headline-mode box  bullets- align-center bullets-off" style="display: none; ; max-width: 1220px">
                <div class="quote  " style="text-align: center; font-weight: 400; font-family: 'Playfair Display'; font-size: 35px; color: rgb(42, 43, 46);">
                    <div style="min-height:0px;">
                        <div class="rotator-text line-through">
                            <span style="background-color: rgb(255, 255, 255)">Testimonial</span>
                        </div>
                    </div>
                </div>
            </div> 
            <script>(function(){var single_quote=parseInt('1',10)<=1;$('#journal-headline-rotator-157223138').show().quovolver({children:'.quote',equalHeight:false,navPosition:single_quote?'':'below',navNum:''?true:false,pauseOnHover:parseInt('1',10)?true:false,autoPlay:!single_quote,autoPlaySpeed:'4000',transitionSpeed:300});})();
            </script>
        </div>
        <div class="journal2_text_rotator "  style="padding-top: 30px; padding-bottom: 30px">
            <div id="journal-rotator-739052829" class="journal-rotator-16 journal-rotator box text-rotator  bullets-center align-center bullets-on" style="; max-width: 1220px">
                <div class="quote" style="text-align: center; text-align: center"> 
                    <span class="rotator-text">They sent out my purchase of a used Bernina at very short notice and were extremely helpful. The machine arrived well packed and on time.Many thanks for a trouble free transaction.Highly recommended.</span>
                    <div class="rotator-author" style="text-align: center">- Christine Allan
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="quote" style="text-align: center; text-align: center"> 
                    <span class="rotator-text">Very knowledgeable staff and helpful. I would definitely recommend these guys for their knowledge of product and willingness to help, even for the most basic of questions.</span>
                    <div class="rotator-author" style="text-align: center">- Jo Griffiths
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="quote" style="text-align: center; text-align: center">
                    <span class="rotator-text">Superb service from Paul. Would definitely recommend his expert advice.</span>
                    <div class="rotator-author" style="text-align: center">- Sue Lefley</div>
                    <div class="clearfix"></div>
                </div>
            </div> 
            <script>(function(){var single_quote=parseInt('3',10)<=1;$('#journal-rotator-739052829').quovolver({children:'.quote',equalHeight:false,navPosition:single_quote?'':'below',navNum:'1'?true:false,pauseOnHover:parseInt('1',10)?true:false,autoPlay:!single_quote,autoPlaySpeed:'4000',transitionSpeed:300});})();
            </script>
        </div>
    </div>
    <!-- <script>
    
     $(document).on('click' , '.new_arival' , function(){
        $('.arival').removeClass('hidden');
            $('.special').addClass('hidden');
     })
     $(document).on('click' , '.specials' , function(){
        $('.arival').addClass('hidden');
            $('.special').removeClass('hidden');
     })
    </script> -->
    
    <div class="scroll-top"></div> 
    <script type="text/javascript" defer src="{{asset('js/scrollup.js')}}"></script> 
    <style type="text/css">.preorder_note {
            text-align: center;
            font-size: medium; 
            padding: 10px; 
            margin: 10px 0; 
            border-radius: 5px; 
            background-color: #19BDF0; 
            color: #fff;
            border-color: #19BDF0;
        }
    </style> 
    <script>$(document).ready(function(){checkQuantityP();$('input[name=quantity], input[name*=option], select[name*=option]').on('change',function(){checkQuantityP();});$('#button-cart').on('click',function(){var buttonText=$('#button-cart').html();setTimeout(function(){$('#button-cart').html(buttonText);},500);});});$(document).ajaxComplete(function(event,request,settings){var current_url=settings.url;if(current_url.indexOf("journal2_super_filter/products")>1){product_id=null;checkQuantityP();}});var checkQuantityP=function(){var product_ids=[];var product_id;if($('[onclick^="cart.add"]').length>0){for(i=0;i<$('[onclick^="cart.add"]').length;i++){onclick_string=$('[onclick^="cart.add"]')[i]['attributes']['onclick']['value'];split_onclick_string=onclick_string.split("'");product_id=split_onclick_string[1];product_ids.push(product_id);}
        setTimeout(function(){checkPreorderedProducts(product_ids);},500);}else if($('[onclick^="addToCart"]').length>0){for(i=0;i<$('[onclick^="addToCart"]').length;i++){onclick_string=$('[onclick^="addToCart"]')[i]['attributes']['onclick']['value'];split_onclick_string=onclick_string.split("'");product_id=split_onclick_string[1];product_ids.push(product_id);}
        setTimeout(function(){checkPreorderedProductsJournal(product_ids);},500);}
        var query=$('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea').serialize();$.ajax({url:'index.php?route=checkout/cart/checkQuantityPO',type:'post',data:query,dataType:'json',success:function(json){setTimeout(function(){if(json['PO']){$('#button-cart').html('Pre-Order');$('#button-cart').val('Pre-Order');$('#button-cart span').text('Pre-Order');$('#button-cart').parents('.outofstock').removeClass('outofstock');$('#button-cart').addClass('preorder');}else{$('#button-cart').html('Add to Cart');$('#button-cart').val('Add to Cart');$('#button-cart span').text('Add to Cart');$('#button-cart').removeClass('preorder');if($('.preorder_note').length>0){$('.preorder_note').remove();}}},100);}});}
        var checkPreorderedProducts=function(product_ids){$.ajax({url:'index.php?route=checkout/cart/checkQuantityPO',type:'post',data:{product_id:product_ids},dataType:'json',success:function(json){if(json['PO']){for(product_id=0;product_id<json['PO'].length;product_id++){$('[onclick^="cart.add(\''+json['PO'][product_id]+'\'"]').children('span').html('Pre-Order');$('[onclick^="cart.add(\''+json['PO'][product_id]+'\'"]').parents('.outofstock').removeClass('outofstock');}}}});}
        var checkPreorderedProductsJournal=function(product_ids){$.ajax({url:'index.php?route=checkout/cart/checkQuantityPO',type:'post',data:{product_id:product_ids},dataType:'json',success:function(json){if(json['PO']){for(product_id=0;product_id<json['PO'].length;product_id++){$('[onclick^="addToCart(\''+json['PO'][product_id]+'\'"]').children('span').html('Pre-Order');$('[onclick^="addToCart(\''+json['PO'][product_id]+'\'"]').attr('data-hint','Pre-Order');$('[onclick^="addToCart(\''+json['PO'][product_id]+'\'"]').parents('.outofstock').removeClass('outofstock');}}}});}
    </script>
</div> 
@endsection
