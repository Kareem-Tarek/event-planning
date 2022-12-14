<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Order;
use App\Services\PaypalService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PayPalController extends Controller
{
    private $paypalService;

    function __construct(PaypalService $paypalService){
        $this->paypalService = $paypalService;
    }

    public function getExpressCheckout($orderId)
    {
        $response = $this->paypalService->createOrder($orderId);
        if($response->statusCode !== 201) {
            abort(500);
        }
        $order = Order::find($orderId);
        $order->paypal_orderid = $response->result->id;
        $order->save();

        foreach ($response->result->links as $link) {
            if($link->rel == 'approve') {
                return redirect($link->href);
            }
        }
    }


    public function cancelPage()
    {
        return redirect()->route('allEvents');
    }


    public function getExpressCheckoutSuccess(Request $request, $orderId)
    {
        $order = Order::with('ordernumber')->find($orderId);
        $event = Event::findOrFail($order->ordernumber->id);
        //dd($event);
        $event->update(['status' => 'Expired']);
        $order->is_paid = 1;
        $order->save();

        return redirect()->route('event.show',$order->ordernumber->id)->withMessage('Payment successful!');

        $response = $this->paypalService->captureOrder($order->paypal_orderid);
        if ($response->result->status == 'COMPLETED') {
//            $event = Event::findOrFail($order->ordernumber->id);
//            $event->update(['status' => 'Expired']);
            $order->is_paid = 1;
            $order->save();

            return redirect()->route('allEvents')->withMessage('Payment successful!');
        }
        return redirect()->route('allEvents')->withError('Payment UnSuccessful! Something went wrong!');
    }
}
