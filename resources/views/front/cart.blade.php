@extends('layouts.master')

@section('content')
<div class="extended-container">
	<div id="container" class="container j-container">
		<ul class="breadcrumb">
			<li>
				<a href="{{route('home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('cart')}}}">Shopping Cart</a>
			</li>
		</ul>
		<div class="row">
			<div id="content" class="col-sm-12 sc-page">
				<h1 class="heading-title">Shopping Cart</h1>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="table-responsive cart-info">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td class="text-center image">Image</td>
									<td class="text-left name">Product Name</td>
									<td class="text-left quantity">Quantity</td>
									<td class="text-right price">Unit Price</td>
									<td class="text-right total">Total</td>
								</tr>
							</thead>
							<tbody>
			                    @if(session('cart'))
			                        @foreach(session('cart') as $id => $product)
									<tr>
										<td class="text-center image">
											<a href="">
												<img src="{{ $product['image'] }}" title="{{ $product['name'] }}" class="img-thumbnail">
											</a>
										</td>
										<td class="text-left name">
											<a href="#">{{ $product['name'] }}</a>
										</td>
										<td class="text-left quantity">
											<div class="input-group btn-block" style="max-width: 200px;">
												<input type="text" name="quantity" value="{{$product['quantity'] }}" size="1" class="form-control">
												<span class="input-group-btn">
													<a type="button" data-toggle="tooltip" title="" class="btn btn-danger" href="{{route('cart.remove',$product['id'])}}" data-original-title="Remove">
														<i class="fa fa-times-circle"></i>
													</a>
												</span>
											</div>
										</td>
										<td class="text-right price">£{{ $product['price'] }}</td>
										<td class="text-right total">£{{ $product['price'] }}</td>
									</tr>
									@endforeach
			                    @endif
							</tbody>
						</table>
					</div>
				</form>
				<div class="action-area">
					<h3>What would you like to do next?</h3>
					<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default sc-coupon">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Use Coupon Code 
										<i class="fa fa-caret-down"></i>
									</a>
								</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-8 cart-total">
							<table class="table table-bordered" id="total">
								<tbody>
									<tr>
										<td class="text-right right">
											<strong>Total:</strong>
										</td>
										@php $total = 0 @endphp
				                        @foreach((array) session('cart') as $id => $details)
				                            @php $total += $details['price'] @endphp
				                        @endforeach
										<td class="text-right right">£{{$total}}.00</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="buttons">
						<div class="pull-left">
							<a href="http://www.onlinesewingmachines.co.uk/index.php?route=common/home" class="btn-default button">Continue Shopping</a>
						</div>
						<div class="pull-right">
							<a href="{{route('checkout')}}" class="btn-primary button">Checkout</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection