@extends('layouts.master')

@section('content')
<div class="extended-container">
	<div id="container" class="container j-container">
		<ul class="breadcrumb">
			<li>
				<a href="{{route('home')}}">Home</a>
			</li>
			<li>
				<a href="{{route('policy')}}}">Privacy Policy</a>
			</li>
		</ul>
		<div class="row">
			<div id="content" class="col-sm-12">
				<h1 class="heading-title">Privacy Policy</h1>
				<p><b>Privacy Policy&nbsp;</b><br></p>
				<p>Rona Sewing Machines do not disclose buyers' information to third parties other than when order details are processed as part of the order fulfilment. In this case, the third party will not disclose any of the details to any other third party.<br><br></p>
				<p><b>Cookies</b><br>Cookies are used on this shopping site to keep track of the contents of your shopping cart, to store delivery addresses if the address book is used and to store your details if you select the 'Remember Me' Option. They are also used after you have logged on as part of that process. You can turn off cookies within your browser by going to 'Tools | Internet Options | Privacy' (in Internet Explorer) and selecting to block cookies. If you turn off cookies, you will be unable to place orders or benefit from the other features that use cookies. Data collected by this site is used to:<br></p>
				<p>a. Take and fulfil customer orders.</p><p>b. Administer and enhance the site and service.</p>
				<p>c. Only disclose information to third-parties for goods delivery purposes</p>
			</div>
		</div>
	</div>
</div>
@endsection