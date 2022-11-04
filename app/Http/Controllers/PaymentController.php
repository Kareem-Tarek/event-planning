<?php

namespace App\Http\Controllers;

use App\Models\EventOrder;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payNow(Request $request)
    {
        // make The Order

        if($request->hasAny('price')){
            return redirect()->back();
        }

        $order =  Order::create([
            'value'        => $request->value,
            'is_paid'      => 0,
            'user_to_id'   => $request->user_to,
            'user_id'      => auth()->user()->id,
            'order_number' => $request->event_id,

        ]);


        EventOrder::create([
            'order_id'   => $order->id,
            'event_id'   => $request->event_id,
            'price'      => $request->value,
        ]);

        return redirect()->route('paypal.checkout', $order->id);
    }
}
