@extends('layouts.master')
@section('title','Detail')
@section('css')
<style type="text/css">
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
@section('content')

<div class="extended-container">
    <div id="container" class="container j-container">
        <ul class="breadcrumb">
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="{{route('home')}}" itemprop="url">
                    <span itemprop="title">Home</span>
                </a>
            </li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="{{route('product')}}" itemprop="url">
                    <span itemprop="title">Sewing Machines</span>
                </a>
            </li>
            <li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                <a href="#" itemprop="url">
                    <span itemprop="title">{{$item->name}}</span>
                </a>
            </li>
        </ul>
        <div class="row">
            <div id="content" class="product-page-content" itemscope itemtype="http://schema.org/Product">
                <h1 class="heading-title" itemprop="name">{{$item->name}}</h1>
                <div class="row product-info split-50-50">
                    <div class="left">
                        <div class="image"> 
                            <a href="{{route('product')}}" title="Bernette B33 Sewing Machine">
                                <img src="{{asset($item->image)}}" title="Bernette B33 Sewing Machine" alt="Bernette B33 Sewing Machine" id="image" data-largeimg="{{asset($item->image)}}" itemprop="image"  />
                            </a>
                        </div>
                        <div class="gallery-text">
                            <span>Click Image for Gallery</span>
                        </div>
                        <div class="product-tabs">
                            <ul id="tabs" class="nav nav-tabs htabs">
                                <li class="active">
                                    <a href="#tab-description" data-toggle="tab">Description</a>
                                </li>
                                <li >
                                    <a href="#tab-review" data-toggle="tab">Reviews (0)</a>
                                </li>
                            </ul>
                            <div class="tabs-content">
                                <div class="tab-pane tab-content active" id="tab-description">
                                   {!!$item->description!!}
                                </div>
                                <div class="tab-pane tab-content " id="tab-review" >
                                    <form class="form-horizontal" id="form-review">
                                        <div id="review"></div>
                                        <h2 id="review-title">Write a review</h2>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-name">Your Name</label>
                                                <input type="text" name="name" value="" id="input-name" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group required">
                                            <div class="col-sm-12">
                                                <label class="control-label" for="input-review">Your Review</label>
                                                <textarea name="text" rows="5" id="input-review" class="form-control">
                                                    
                                                </textarea>
                                                <div class="help-block">
                                                    <span class="text-danger">Note:</span>
                                                     HTML is not translated!
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="form-group required">
                                            <div class="col-sm-12"> 
                                                <label class="control-label">Rating</label> 
                                                &nbsp;&nbsp;&nbsp; Bad&nbsp; 
                                                <input type="radio" name="rating" value="1" />
                                                &nbsp;
                                                <input type="radio" name="rating" value="2" /> 
                                                &nbsp;
                                                <input type="radio" name="rating" value="3" />
                                                &nbsp; 
                                                <input type="radio" name="rating" value="4" />
                                                &nbsp;
                                                <input type="radio" name="rating" value="5" />
                                                &nbsp;Good
                                            </div>
                                        </div>
                                        <br/>
                                        <div class="buttons">
                                            <div class="pull-right"> 
                                                <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary button">Continue</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div id="product" class="product-options">
                            <ul class="list-unstyled description">
                                <!-- <li class="product-views-count">Views: 7205</li> -->
                                <li class="p-brand">Brand: 
                                    <a href="{{route('product',['id'=>$item->id,'name'=>'brand'])}}">{{$item->brand->name}}</a>
                                </li>
                                <li class="p-model">Product Code: 
                                    <span class="p-model" itemprop="model">{{$item->code}}</span>
                                </li>
                                <li class="p-stock">Availability: 
                                    <span class="journal-stock instock">{{$item->availability}}</span>
                                </li>
                            </ul>
                            <ul class="list-unstyled price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <meta itemprop="itemCondition" content="http://schema.org/NewCondition" />
                                <meta itemprop="priceCurrency" content="GBP" />
                                <meta itemprop="price" content="229.0000" />
                                <link itemprop="availability"  href="http://schema.org/InStock" />
                                <li class="product-price">{{$item->price}}</li>
                            </ul>
                            <div class="form-group cart ">
                                <div> 
                                    <span class="qty"> 
                                        <label class="control-label text-qty" for="input-quantity">Qty</label>
                                        <input type="text" name="quantity" value="1" size="2" data-min-value="1" id="input-quantity" class="form-control" />
                                        <input type="hidden" name="product_id" value="232" /> 
                                        <script>var $input=$('.cart input[name="quantity"]');function up(){var val=parseInt($input.val(),10)+1||parseInt($input.attr('data-min-value'),10);$input.val(val);}
                                            function down(){var val=parseInt($input.val(),10)-1||0;var min=parseInt($input.attr('data-min-value'),10)||1;$input.val(Math.max(val,min));}
                                            $('<a href="javascript:;" class="journal-stepper">-</a>').insertBefore($input).click(down);$('<a href="javascript:;" class="journal-stepper">+</a>').insertAfter($input).click(up);$input.keydown(function(e){if(e.which===38){up();return false;}
                                            if(e.which===40){down();return false;}});
                                        </script> 
                                    </span>
                                    <button  type="button" id="button-cart" data-loading-text="Loading..." class="button">
                                        <a href="{{route('add.to.cart',$item->id)}}" class="button-cart-text" style="color: white;">Add to Cart</a>
                                    </button>
                                </div>
                            </div>
                            <div class="wishlist-compare">
                                <span class="links"> 
                                    <a href="{{route('add.to.wish',$item->id)}}">Add to Wish List</a>
                                    <a onclick="addToCompare('232');">Compare this Product</a>
                                </span>
                            </div>
                            <div class="rating">
                                <p>
                                    <span class="fa fa-stack">
                                        <i class="fa fa-star-o fa-stack-1x"></i>
                                    </span>
                                    <span class="fa fa-stack">
                                        <i class="fa fa-star-o fa-stack-1x"></i>
                                    </span> 
                                    <span class="fa fa-stack">
                                        <i class="fa fa-star-o fa-stack-1x"></i>
                                    </span> 
                                    <span class="fa fa-stack">
                                        <i class="fa fa-star-o fa-stack-1x"></i>
                                    </span> 
                                    <span class="fa fa-stack">
                                        <i class="fa fa-star-o fa-stack-1x"></i>
                                    </span> 
                                    <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews
                                    </a> / 
                                    <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review
                                    </a>
                                </p>
                            </div>
                            <div class="social share-this hide-on-mobile">
                                <div class="social-loaded">
                                    <script type="text/javascript">var switchTo5x=true;</script> 
                                    <script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script> 
                                    <script type="text/javascript">stLight.options({publisher:"",doNotHash:true,doNotCopy:true,hashAddressBar:false});
                                    </script> 
                                    <span class="st_fblike" displayText=""></span> 
                                    <span class="st_twitter" displayText=""></span>
                                    <span class="st_pinterest" displayText=""></span>
                                    <span class="st_googleplus" displayText=""></span>
                                    <span class="st_instagram" displayText=""></span>
                                    <span class="st_email" displayText=""></span>
                                    <span class="st_sharethis" displayText=""></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="scroll-top">
    
</div> 
<script type="text/javascript" defer src="{{asset('js/_213295a74f248f8d6a3ec0f59307e421.js')}}">
    
</script> 

</style>
@endsection