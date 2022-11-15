@extends('layouts.master')
@section('content')

@section('css')
<style>
    .preorder_note {
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
@endsection
<div class="extended-container">
    <div id="container" class="container j-container">
        <ul class="breadcrumb">
            <li>
                <a href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('product',$item->id)}}">{{$item->name}}</a>
            </li>
        </ul>
        <div class="row">
            <div id="column-left" class="col-sm-3 hidden-xs side-column ">
                <div id="journal-side-category-309088345" class="journal-side-category-26 box side-category side-category-left side-category-accordion">
                    <div class="box-heading">Category</div>
                    <div class="box-category">
                        <ul>
                            @foreach(categories() as $item)
                            <li>
                                <a href="{{route('product',$item->id)}}">{{$item->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div><!--  
                    <script>$('#journal-side-category-309088345 .box-category a i').click(function(e,first){e.preventDefault();$('+ ul',$(this).parent()).slideToggle(first?0:400);$(this).parent().toggleClass('active');$(this).html($(this).parent().hasClass('active')?"<span>-</span>":"<span>+</span>");return false;});$('#journal-side-category-309088345 .is-active i').trigger('click',true);
                    </script>  -->
                </div>
                <div id="journal-super-filter-17" class="journal-sf filter-collapse " data-filters-action="index.php?route=module/journal2_super_filter/filters&amp;module_id=17" data-products-action="index.php?route=module/journal2_super_filter/products&amp;module_id=17" data-route="product/category" data-path="71" data-manufacturer="" data-search="" data-tag=""  data-loading-text="Loading..." data-currency-left="£" data-currency-right="" data-currency-decimal="." data-currency-thousand="," data-category_id="" data-sub_category="" data-st="E.R.">
                    <a class="sf-reset hint--top sf-icon" data-hint="Clear All Filters">
                        <span class="sf-reset-text">Clear All Filters</span>
                        <i class="fa fa-times" aria-hidden="true" style="color: black;"></i>

                    </a>
                    <input type="hidden" class="sf-page" value="" />
                    <div class="box sf-manufacturer sf-list sf-multi " data-id="manufacturer">
                        <div class="box-heading">Filter by Brand</div>
                        <div class="box-content">
                            <ul class="">
                                <li>
                                    <label>
                                        <input data-keyword="baby-lock" type="checkbox" name="manufacturer" value="17">
                                        <span class="sf-name">Baby Lock (1) </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input data-keyword="bernette" type="checkbox" name="manufacturer" value="23">
                                        <span class="sf-name">Bernette (8) </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input data-keyword="bernina" type="checkbox" name="manufacturer" value="15">
                                        <span class="sf-name">Bernina (14) </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input data-keyword="britannia-sewing" type="checkbox" name="manufacturer" value="19">
                                        <span class="sf-name">Britannia Sewing (2) </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input data-keyword="brother" type="checkbox" name="manufacturer" value="14">
                                        <span class="sf-name">Brother (16) </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input data-keyword="elna" type="checkbox" name="manufacturer" value="18">
                                        <span class="sf-name">elna (9) </span>
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <inpuy data-keyword="husqvarna" type="checkbox" name="manufacturer" value="11">
                                            <span class="sf-name">Husqvarna (17) </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input data-keyword="janome" type="checkbox" name="manufacturer" value="12">
                                            <span class="sf-name">Janome (29) </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input data-keyword="juki" type="checkbox" name="manufacturer" value="13">
                                            <span class="sf-name">Juki (10) </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input data-keyword="pfaff" type="checkbox" name="manufacturer" value="25">
                                            <span class="sf-name">Pfaff (15) </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input data-keyword="silver-viscount" type="checkbox" name="manufacturer" value="26">
                                            <span class="sf-name">Silver Viscount (10) </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box sf-tags " data-id="tags">
                            <div class="box-heading">Filter by Tag</div>
                            <div class="box-content">
                                <ul class="">
                                    <li>
                                        <label>
                                            <input data-keyword="brother-stellaire-xe1-embroidery-machine" type="checkbox" name="tag" value="Brother Stellaire XE1 Embroidery machine" >
                                            <span class="sf-name">Brother Stellaire XE1 Embroidery machine (2) </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input data-keyword="knitting-machine-table" type="checkbox" name="tag" value="Knitting Machine Table" >
                                            <span class="sf-name">Knitting Machine Table (1) </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="box sf-availability " data-id="availability">
                            <div class="box-heading">Availability</div>
                            <div class="box-content">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="1" >
                                            <span class="sf-name">In Stock</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" value="0" >
                                            <span class="sf-name">Out of Stock</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="sf-price  box " data-id="price" data-min-price="59" data-max-price="8999">
                            <div class="box-heading">Filter by Price</div>
                            <div class="box-content"> 
                                <section class="slider" data-min-value="59" data-max-value="8999">
                                    
                                </section>
                            </div>
                        </div>
                    </div> 
                    <script>Journal.SuperFilter.init($('#journal-super-filter-17'));</script> 
                </div>
                <div id="content" class="col-sm-9">
                    <h1 class="heading-title">{{$product_name}}</h1>
                    <div class="product-filter">
                        <div class="display"> 
                            <a onclick="Journal.listView()" class="list-view">
                                <i class="fa fa-list" aria-hidden="true"></i>

                            </a>
                        </div>
                        <div class="product-compare">
                            <a href="#" id="compare-total">Product Compare (0)</a>
                        </div>
                        <div class="limit"><b>Show:</b>
                            <select onchange="location = this.value;">
                                <option value="15" selected="selected">15</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option> 
                            </select>
                        </div>
                        <div class="sort">
                            <b>Sort By:</b> 
                            <select onchange="location = this.value;">
                                <option value="" selected="selected">Default</option>
                                <option value="">Name (A - Z)
                                </option>
                                <option value="">Name (Z - A)
                                </option>
                                <option value="">Price (Low &gt; High)
                                </option>
                                <option value="">Price (High &gt; Low)
                                </option>
                                <option value="">Rating (Highest)
                                </option>
                                <option value="">Rating (Lowest)
                                </option>
                                <option value="">Model (A - Z)
                                </option>
                                <option value="">Model (Z - A)
                                </option> 
                            </select>
                        </div>
                    </div>
                    <div class="row main-products product-grid" data-grid-classes="xs-50 sm-33 md-50 lg-25 xl-25 display-icon inline-button">
                        @foreach($list as $item)
                        <div class="product-grid-item xs-50 sm-33 md-50 lg-25 xl-25">
                            <div class="product-thumb product-wrapper ">
                                <div class="image ">
                                    <a href="{{route('detail',$item->id)}}" >
                                        <img class="lazy first-image" width="250" height="250" src="{{asset($item->image)}}" data-src="{{asset($item->image)}}" title="Britannia Instyle T65" alt="Britannia Instyle T65" /> 
                                    </a>
                                </div>
                                <div class="product-details">
                                    <div class="caption">
                                        <h4 class="name">
                                            <a href="{{route('detail',$item->id)}}">{{$item->name}}</a>
                                        </h4>
                                        <p class="price">{{$item->price}}</p>
                                    </div>
                                    <div class="button-group">
                                        <div class="wishlist">
                                            <a class="hint--top" data-hint="Add to Wish List" href="{{route('add.to.wish',$item->id)}}">
                                                <i class="fa fa-heart" aria-hidden="true" style="color: white;"></i>
                                                <span class="button-wishlist-text">Add to Wish List</span>
                                            </a>
                                        </div>
                                        <div class="compare">
                                            <a class="hint--top" data-hint="Add to cart" href="{{route('add.to.cart',$item->id)}}">
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
            </div>
            <script>Journal.applyView('grid');</script> 
            <script>Journal.enableCountdown();</script> 
        </div>
    </div>
    <div class="scroll-top"></div> 
    
</div>     

@endsection
@section('js')
<script type="text/javascript" defer src="{{asset('js/scrollup.js')}}"></script> 
<script>
    
</script>
@endsection