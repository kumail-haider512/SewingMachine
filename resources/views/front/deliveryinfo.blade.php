@extends('layouts.master')

@section('content')
<div class="extended-container">
	<div id="container" class="container j-container">
		<ul class="breadcrumb">
			<li>
				<a href="{{route('home')}}}">Home</a>
			</li>
			<li>
				<a href="{{route('delivery')}}}">Delivery Information</a>
			</li>
		</ul>
		<div class="row">
			<div id="content" class="col-sm-12">
				<h1 class="heading-title">Delivery Information</h1>
				<p><b>Shipping And Handling Standard Delivery;&nbsp;</b><br>All machines despatched free to mainland UK only. UK deliveries are dispatched by First Class post, International deliveries are sent by Airmail. Please contact us for international carriage quotes BEFORE ordering. Please note not all machines are available to buy from outside the UK, please check BEFORE odrering.
				</p>
				<p>We aim to despatch your order on the next working day. If for any reason we are out of stock we will immediately contact you and offer you an alternative or a refund. Delivery/shipping times will vary but here is a guide for our Standard Service:
				</p>
				<p><br></p><p>UK First Class post - approx 1 to 2 days</p>
				<p>Europe by airmail - approx 2 to 6 days</p>
				<p>Rest of the World by airmail - 5 to 15 days, depending upon local conditions and Customs.<br><br></p>
				<p><b>Delivery Schedule&nbsp;</b><br>We deliver your order right away. We will normally send your order to you in 1-2 business days. For Baby Lock, Husqvarna and Pfaff orders, please allow 4-5 days as machines distributed from Europe. International orders are generally received in under 5-15 days.</p>
				<p>You must inform us within two working days if the goods are lost or damaged in transit so that we can make a prompt claim against the delivery company and correct the problem. Please quote your order number in all correspondence.<br></p>
				<p>You agree that proof of delivery supplied by our delivery company is sufficient evidence to establish that goods have been received.<br><br></p>
				<p><b>Back Orders&nbsp;</b><br>To ensure prompt delivery of your order we keep most of our lines in stock, however on occasion items may become unavailable for reasons beyond our control. All orders are taken subject to availability of stock, if the item you have selected is not available we will offer you the choice of a full refund, or an alternative item.<br><br></p>
				<p><br></p>
			</div>
		</div>
	</div>
</div>
@endsection