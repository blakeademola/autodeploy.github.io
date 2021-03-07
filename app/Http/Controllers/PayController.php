<?php

namespace App\Http\Controllers;

use App\Item;
use App\ItemOrder;
use App\Notifications\EmailSuccessfulTransaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Paystack;


class PayController extends Controller
{
    public function redirectToGateway(Request $request)
    {
        $paystack = new Paystack();

        return $paystack->getAuthorizationUrl()->redirectNow();

    }

    public function handleGatewayCallback()
    {
        $paystack = new Paystack();
        $paymentDetails = $paystack->getPaymentData();

        if ($paymentDetails['status']) {
            $data = ItemOrder::where('status', 'unpaid')->update([
                'status' => 'paid',
                'payload' => json_encode($paymentDetails['data'])
            ]);

            $user = User::first();
            $user->notify(new EmailSuccessfulTransaction($paymentDetails['data']));
        }
        return \redirect(route('get-total'))->with('success', "Payment Successful");
    }
}
