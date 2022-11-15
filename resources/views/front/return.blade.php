@extends('layouts.master')

@section('content')

<div class="extended-container">
	<div id="container" class="container j-container">
		<ul class="breadcrumb">
			<li>
				<a href="{{route('home')}}}"> Home</a>
			</li>
			<li>
				<a href="#"> Account</a>
			</li>
			<li>
				<a href="{{route('return')}}"> Product Returns</a>
			</li>
		</ul>
		<div class="row">
			<div id="column-right" class="col-sm-3 hidden-xs side-column  ">
				<div class="box">
					<div class="box-content list-group">
						<ul>
							<li>
								<a href="#" class="list-group-item">Login</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Register</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Forgotten Password</a>
							</li>
							<li>
								<a href="#" class="list-group-item">My Account</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Address Book</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Wish List</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Order History</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Downloads</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Reward Points</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Returns</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Transactions</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Newsletter</a> 
								<a href="#" class="list-group-item">GDPR Tools</a>
							</li>
							<li>
								<a href="#" class="list-group-item">Recurring payments</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="content" class="col-sm-9">
				<h1 class="heading-title">Product Returns</h1>
				<div class="content">
					<p>Please complete the form below to request an RMA number.</p><br>
					<form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">
						<fieldset>
							<h2 class="secondary-title">Order Information</h2>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-firstname">First Name</label>
								<div class="col-sm-10">
									<input type="text" name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-lastname">Last Name</label>
								<div class="col-sm-10"> 
									<input type="text" name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-email">E-Mail</label>
								<div class="col-sm-10">
									<input type="text" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
								<div class="col-sm-10">
									<input type="text" name="telephone" value="" placeholder="Telephone" id="input-telephone" class="form-control">
								</div>
							</div>
							<div class="form-group required"> 
								<label class="col-sm-2 control-label" for="input-order-id">Order ID</label>
								<div class="col-sm-10">
									<input type="text" name="order_id" value="" placeholder="Order ID" id="input-order-id" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-date-ordered">Order Date</label>
								<div class="col-sm-3">
									<div class="input-group date">
										<input type="text" name="date_ordered" value="" placeholder="Order Date" data-date-format="YYYY-MM-DD" id="input-date-ordered" class="form-control">
										<span class="input-group-btn">
											<button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
										</span>
									</div>
								</div>
							</div>
						</fieldset>
						<br>
						<fieldset>
							<h2 class="secondary-title">Product Information</h2>
							<div class="form-group required">
								<label class="col-sm-2 control-label" for="input-product">Product Name</label>
								<div class="col-sm-10">
									<input type="text" name="product" value="" placeholder="Product Name" id="input-product" class="form-control">
								</div>
							</div>
							<div class="form-group required"> 
								<label class="col-sm-2 control-label" for="input-model">Product Code</label>
								<div class="col-sm-10"> 
									<input type="text" name="model" value="" placeholder="Product Code" id="input-model" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-quantity">Quantity</label>
								<div class="col-sm-10">
									<input type="text" name="quantity" value="1" placeholder="Quantity" id="input-quantity" class="form-control">
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label">Reason for Return</label>
								<div class="col-sm-10">
									<div class="radio">
										<label>
											<input type="radio" name="return_reason_id" value="1">
											Dead On Arrival
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="return_reason_id" value="4">
											Faulty, please supply details
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="return_reason_id" value="3">
											Order Error
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="return_reason_id" value="5">
											Other, please supply details
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="return_reason_id" value="2">
											Received Wrong Item
										</label>
									</div>
								</div>
							</div>
							<div class="form-group required">
								<label class="col-sm-2 control-label">Product is opened</label>
								<div class="col-sm-10">
									<label class="radio-inline">
										<input type="radio" name="opened" value="1">
										Yes
									</label>
									<label class="radio-inline">
										<input type="radio" name="opened" value="0" checked="checked">
										No
									</label>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="input-comment">
									Faulty or other details
								</label>
								<div class="col-sm-10">
									<textarea name="comment" rows="10" placeholder="Faulty or other details" id="input-comment" class="form-control"></textarea>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="buttons">
					<div class="pull-left">
						<a href="https://www.onlinesewingmachines.co.uk/index.php?route=account/account" class="btn btn-default button">Back</a>
					</div>
					<div class="pull-right">
						<input type="submit" value="Submit" class="btn btn-primary button">
					</div>
				</div>
			</div>
		</div>
	</div> 
	<script type="text/javascript">$('.date').datetimepicker({pickTime:false});</script> 
</div>
<div class="bootstrap-datetimepicker-widget dropdown-menu">
	<div class="datepicker">
		<div class="datepicker-days" style="display: block;">
			<table class="table-condensed">
				<thead>
					<tr>
						<th class="prev">‹</th>
						<th colspan="5" class="picker-switch">December 2021</th>
						<th class="next">›</th>
					</tr>
					<tr>
						<th class="dow">Su</th>
						<th class="dow">Mo</th>
						<th class="dow">Tu</th>
						<th class="dow">We</th>
						<th class="dow">Th</th>
						<th class="dow">Fr</th>
						<th class="dow">Sa</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="day old">28</td>
						<td class="day old">29</td>
						<td class="day old">30</td>
						<td class="day">1</td>
						<td class="day">2</td>
						<td class="day">3</td>
						<td class="day">4</td>
					</tr>
					<tr>
						<td class="day">5</td>
						<td class="day">6</td>
						<td class="day">7</td>
						<td class="day">8</td>
						<td class="day">9</td>
						<td class="day">10</td>
						<td class="day">11</td>
					</tr>
					<tr>
						<td class="day">12</td>
						<td class="day">13</td>
						<td class="day">14</td>
						<td class="day">15</td>
						<td class="day">16</td>
						<td class="day">17</td>
						<td class="day">18</td>
					</tr>
					<tr>
						<td class="day active today">19</td>
						<td class="day">20</td>
						<td class="day">21</td>
						<td class="day">22</td>
						<td class="day">23</td>
						<td class="day">24</td>
						<td class="day">25</td>
					</tr>
					<tr>
						<td class="day">26</td>
						<td class="day">27</td>
						<td class="day">28</td>
						<td class="day">29</td>
						<td class="day">30</td>
						<td class="day">31</td>
						<td class="day new">1</td>
					</tr>
					<tr>
						<td class="day new">2</td>
						<td class="day new">3</td>
						<td class="day new">4</td>
						<td class="day new">5</td>
						<td class="day new">6</td>
						<td class="day new">7</td>
						<td class="day new">8</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="datepicker-months" style="display: none;">
			<table class="table-condensed">
				<thead>
					<tr>
						<th class="prev">‹</th>
						<th colspan="5" class="picker-switch">2021</th>
						<th class="next">›</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="7">
							<span class="month">Jan</span>
							<span class="month">Feb</span>
							<span class="month">Mar</span>
							<span class="month">Apr</span>
							<span class="month">May</span>
							<span class="month">Jun</span>
							<span class="month">Jul</span>
							<span class="month">Aug</span>
							<span class="month">Sep</span>
							<span class="month">Oct</span>
							<span class="month">Nov</span>
							<span class="month active">Dec</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="datepicker-years" style="display: none;">
			<table class="table-condensed">
				<thead>
					<tr>
						<th class="prev">‹</th>
						<th colspan="5" class="picker-switch">2020-2029</th>
						<th class="next">›</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="7">
							<span class="year old">2019</span>
							<span class="year">2020</span>
							<span class="year active">2021</span>
							<span class="year">2022</span>
							<span class="year">2023</span>
							<span class="year">2024</span>
							<span class="year">2025</span>
							<span class="year">2026</span>
							<span class="year">2027</span>
							<span class="year">2028</span>
							<span class="year">2029</span>
							<span class="year old">2030</span>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection