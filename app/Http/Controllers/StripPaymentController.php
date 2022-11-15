<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Model\Setting;

class StripPaymentController extends Controller
{
    public function intent(Request $request)
    { 
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        header('Content-Type: application/json');

        # retrieve json from POST body
        $json_str = file_get_contents('php://input');
        $json_obj = json_decode($json_str);

        $intent = null;
        try {
            if (isset($json_obj->payment_method_id)) {
                # Create the PaymentIntent
                
                    \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                    $intent = \Stripe\PaymentIntent::create([
                    'payment_method' => $json_obj->payment_method_id,
                    'amount' => $json_obj->amount,
                    'currency' => 'GBP',
                    'confirmation_method' => 'manual',
                    'capture_method' => 'manual',
                    'confirm' => true,
                    'description' => 'payment',
                ]);
                }
                
            if (isset($json_obj->payment_intent_id)) {
                $intent = \Stripe\PaymentIntent::retrieve(
                    $json_obj->payment_intent_id
                );
                $intent->confirm();
            }
            $this->generateResponse($intent);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            # Display error on client
            echo json_encode([
                'error' => $e->getMessage()
            ]);
        }


    }

    public function generateResponse($intent) {
        # Note that if your API version is before 2019-02-11, 'requires_action'
        # appears as 'requires_source_action'.
       // print_r($intent);
        if ($intent->status == 'requires_action' &&
            $intent->next_action->type == 'use_stripe_sdk') {   
            # Tell the client to handle the action
            echo json_encode([
                'requires_source_action' => true,
                'payment_intent_client_secret' => $intent->client_secret
            ]);
        } else if ($intent->status == 'requires_capture') {
            # The payment didn’t need any additional actions and completed!
            # Handle post-payment fulfillment
            Session::put('intent_id',$intent->id);
            
            echo json_encode([
                "success" => true
            ]);
        } else {
            # Invalid status
            http_response_code(500);
            echo json_encode(['error' => 'Invalid PaymentIntent status']);
        }

    }
}
