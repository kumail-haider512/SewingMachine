@extends('layouts.master')

@section('content')
<div class="extended-container">
	<div id="container" class="container j-container">
		<ul class="breadcrumb">
			<li>
				<a href="{{route('home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('service')}}}">Service and Repair</a>
			</li>
		</ul>
		<div class="row">
			<div id="content" class="col-sm-12">
				<h1 class="heading-title">Service and Repair</h1>
				<h4>
					<b>We offer repairs and servicing to all makes of domestic &amp; Industrial machines including overlockers, embroidery machines, old machines and even hand operated models! We are suppliers and service agents to schools, colleges and universities. Most educational work is carried out on site, and parts fitted only when genuinely required. Our engineers are DBS checked.<br>
					</b>
					<b>We service and repair all makes of domestic &amp; industrial sewing machines in our workshop by fully trained engineers. We are an authorized repair centre for Bernina, Viking Husqvarna, Brother, Janome, Juki, Singer, Frister Rossmann, Pfaff and Elna. We offer service and repairs to all other brands past and present. All machines are estimated free of charge, and the work is generally completed in 2-3 days.<br>
					</b>
					<b>We can arrange collection and return of your machine by courier, from anywhere in mainland UK providing you have the original box and packaging. We can also collect locally, please call or email for details. We offer onsite servicing to Schools, Colleges and Universities and also supply machines to all education sites in the UK at very competitive prices. We have over 60 schools on our books!<br>
					</b>
					<b>Please call Paul on 01992 640250 for further information.</b>
				</h4>
				<p><br></p>
			</div>
		</div>
	</div>
</div>
@endsection