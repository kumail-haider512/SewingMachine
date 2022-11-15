@extends('layouts.master')

@section('content')
<div class="extended-container">
	<div id="container" class="container j-container">
		<ul class="breadcrumb">
			<li>
				<a href="{{route('home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('wishlist')}}}">Wishlist</a>
			</li>
		</ul>
		<div class="row">
			<div id="content" class="col-sm-12 sc-page">
				<h1 class="heading-title">Wishlist</h1>
				<form action=""  method="post" enctype="multipart/form-data">
					<div class="table-responsive cart-info">
						<table class="table table-bordered " style="margin-bottom: 30px;">
							<thead>
								<tr>
									<td class="text-center">Sr</td>
									<td class="text-left name">Image</td>
									<td class="text-left name">Product Name</td>
									<td class="text-right price">Price</td>
									<td class="text-right price">Remove</td>
									<td>Add to Cart</td>
								</tr>
							</thead>
							<tbody>
								@if(session('wish'))
			                        @foreach(session('wish') as $id => $product)
									<tr>
										<td><p class="text-center">{{ $loop->iteration }}</p></td>
										<td class="text-right image">
											<a href="">
												<img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" title="{{ $product['name'] }}" class="img-thumbnail">
											</a>
										</td>
										<td class="text-left name">
											<a href="http://www.onlinesewingmachines.co.uk/bernette-b33-sewing-machine">{{ $product['name'] }}</a>
										</td>
										<td class="text-right price">{{ $product['price'] }}</td>
										<td class="text-left quantity">
											<div class="input-group btn-block" style="max-width: 200px;">
												<span class="input-group-btn">
													<a type="button" data-toggle="tooltip" title="" class="btn btn-danger" href="{{route('wish.remove',$product['id'])}}" data-original-title="Remove">
														<i class="fa fa-times-circle"></i>
													</a>
												</span>
											</div>
										</td>
										<td>
											<div class="compare">
												<span class="input-group-btn">
													<a type="button" class="btn btn-danger" href="{{route('add.to.cart',$product['id'])}}">Add to cart
													</a>
												</span>
	                                        </div>
										</td>
									</tr>
									@endforeach
			                    @endif
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection