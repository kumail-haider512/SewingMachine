@extends('layouts.master')

@section('css')
<style>

  .mb
  {
    margin-bottom: 5px;
  }
  .w-100
  {
    height: 100%;
    width: 100%;
  }
  .hidden
  {
    display: none;
  }
  .td
  {
    text-align: center !important;
    font-weight: 700;
    padding-left: 26px !important;
    background: gray;
    font-size: 21px;
    color: white;
  }
  .label-2
  {
    font-size: 15px;
    
  }
  .cards
  {
    text-align: center;
    margin: 20px;
  }
</style>
@endsection

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
      <li>
        <a href="{{route('checkout')}}">Checkout</a>
      </li>
    </ul>
    <div class="row">
      <div id="content" class="checkout col-sm-12">
        <h1 class="heading-title">Checkout Information </h1>
        <div class="panel-group" id="accordion">
          <div class="panel panel-default">
            <div class="panel-collapse collapse in" id="collapse-checkout-option" aria-expanded="true" style="">
              @php $total = 0 @endphp
              @foreach((array) session('cart') as $id => $product)
                  @php $total += $product['price'] @endphp
              @endforeach
              <div class="panel-body">
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
                           @php ($arr = [])
                              @foreach(session('cart') as $id => $product)
                                @php (array_push($arr, $product['id'])) 
        									<tr>
        										<td class="text-center image">
        											<a href="">
        												<img src="{{ $product['image'] }}" title="{{ $product['name'] }}" class="img-thumbnail" width="50%">
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
                          @php ($arr = json_encode($arr))
        			         @endif
        							</tbody>
        						</table>
        					</div>
        				</form>
        				<div class="row">
        					<div class="col-sm-4 col-sm-offset-8 cart-total">
        						<table class="table table-bordered" id="total">
        							<tbody>
        								<tr>
                          
        									<td class="text-right right">
        										<strong>Sub Total:</strong>
        									</td>
        									<td class="td">£{{$total}}.00</td>
        								</tr>
        							</tbody>
        						</table>
        					</div>
        				</div>
                <div class="row" style="margin-top: 15px;">
                  <div class="col-md-12">
                    
                    <a  href="#" class="btn btn-primary button "  id="purchase-btn" role="button"  aria-haspopup="true" aria-expanded="false" data-toggle="modal" data-target="#checkout">
                      Checkout
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
</div>
<form action="{{route('checkout.save')}}" method="POST"  enctype="multipart/form-data" id="form">
    @csrf
    <input type="hidden" name="amount" class="amount" value="{{$total}}">
    <input type="hidden" name="product_id" value="{{$arr ?? ''}}">
    <div class="modal fade " id="checkout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title head" id="checkoutLabel">Payment Mehtod</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="row mt-3">
                    <div class="col-md-12 form-group">
                        <label class="control-label" for="input-name">Name</label>
                        <input type="text" name="name" placeholder="Enter Name" id="input-name" class="form-control" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="control-label" for="input-email-guest">E-Mail</label>
                        <input type="email" name="email" placeholder="Enter E-Mail" id="input-email-guest" class="form-control" required>
                    </div>
                    <div class="col-md-12 form-group">
                        <label class="control-label" for="input-number">Phone number</label>
                        <input type="text" name="number" placeholder="Enter Number" id="input-number" class="form-control" required>
                    </div>
                    <div class="col-md-12 form-group ">
                        <label class="control-label" for="input-address">Delivery Adderss</label>
                        <input type="text" name="address" placeholder="Enter Adderss" id="input-address" class="form-control" required>
                    </div>
                      <div class="col-md-12">
                        <div class="form-group cards">
                          <label class="label-2">Enter Your Card Number & Expiry</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                          <div class="checkout_form group p-3 mt-3">
                              <div class="form-group">
                                  <div id="card-element" class="field"></div>
                                  <div class="text-danger mt-3 mb-0 pb-0" id="card-errors" role="alert"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <div class="col-md-12">
                      <button type="submit" class="btn btn-primary button">Confirm Payment</button>
                  </div>
              </div>
          </div>
      </div>
    </div>
</form>
@section('js')
<script src="https://js.stripe.com/v3/"></script>
<script>
  $(document).on('click' , '.guest', function(){
      $('.guest-form').removeClass('hidden');


  })
  $(document).on('click' , '.register', function(){
      $('.guest-form').addClass('hidden');
      $('.form').removeClass('hidden');

  })
</script>
<script>
	const stripe = Stripe('{{ env('STRIPE_KEY') }}', { locale: 'en' });
        const elements = stripe.elements(); // Create an instance of Elements.
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"proxima-nova", "Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                    color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };
    
            const card = elements.create('card', {style: style, hidePostCode:true});
            const cardButton = document.getElementById('purchase-btn');
            
            const clientSecret = cardButton.dataset.secret;
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });
            // Handle form submission.
            var form = document.getElementById('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Disable The submit button on click
                document.getElementById('purchase-btn').disabled = true;
               
                stripe.createPaymentMethod({
                    type: 'card',
                    card: card,
                    billing_details: {
                      // Include any additional collected billing details.
                      name: 'Nouman',
                    },
                  }).then(stripePaymentMethodHandler);          
            });

    
    function stripePaymentMethodHandler(result) {
  if (result.error) {
    // Show error in payment form
      toastr.error('Whoops! looks like issue in your card');
      document.getElementById('purchase-btn').disabled = false;
  } else {
     // console.log(result.paymentMethod.id);
    // Otherwise send paymentMethod.id to your server (see Step 4)
    fetch('{{route("intent")}}', {
      method: 'POST',
     headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-Token": $('input[name="_token"]').val()
      },
        credentials: "same-origin",
      body: JSON.stringify({
        payment_method_id: result.paymentMethod.id,
        amount: $('.amount').val()*100,
         
      })
    }).then(function(result) {
        console.log(result);
        
      // Handle server response (see Step 4)
      result.json().then(function(json) {
       
        var  payment_intent_id = null;
        
        handleServerResponse(json);
      })
    });
  }
}
    function handleServerResponse(response) {
      if (response.error) {  
          // $('#exampleModal').modal('hide');
          
    // Show error from server on payment form
      } else if (response.requires_source_action) {
        // Use Stripe.js to handle required card action 
              
          
        stripe.handleCardAction( 
          response.payment_intent_client_secret
        ).then(handleStripeJsResult);
      } else { 
             
      
      stripe.createToken(card).then(function(respo) {
                if (respo.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = respo.error.message;
                    // Enable The submit button
                    document.getElementById('purchase-btn').disabled = false;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler();
                }
            });
  }
}

function handleStripeJsResult(result) {
  if (result.error) { 
     
  } else {
    // The card action has been handled
    // The PaymentIntent can be confirmed again on the server
    var payment_intent_id=result.paymentIntent.id;
    fetch('intent', {
      method: 'POST',
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-Token": $('input[name="_token"]').val()
      },
      credentials: "same-origin",
      body: JSON.stringify({
      payment_intent_id: result.paymentIntent.id,  
         
      })
    }).then(function(result) {
      // Handle server response (see Step 4)
      result.json().then(function(json) {
         console.log(json);
         if(json.success==true)
         {
            handleServerResponse(json);
         }
        
      })
    });
  }
}
            // Submit the form with the token ID.
function stripeTokenHandler() {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('form');
        form.submit();
}
</script>
@endsection

@endsection
