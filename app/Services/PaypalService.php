<?php

namespace App\Services;

use App\Models\Order;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class PaypalService
{
    private $client;

    function __construct()
    {
        $environment = new SandboxEnvironment(
            env('PAYPAL_SANDBOX_CLIENT_ID'),
            env('PAYPAL_SANDBOX_CLIENT_SECRET')
        );

        $this->client = new PayPalHttpClient($environment);

    }

    public function createOrder($orderId)
    {


        $request = new OrdersCreateRequest();

        $request->headers["prefer"] = "return=representation";

        $request->body = $this->checkoutData($orderId);


        // $request->body = $this->simpleCheckoutData($orderId);

        return $this->client->execute($request);
    }

    public function captureOrder($paypalOrderId)
    {
        $request = new OrdersCaptureRequest($paypalOrderId);

        return $this->client->execute($request);
    }

    private function simpleCheckoutData($orderId)
    {
        $order = Order::find($orderId);

        return [
            "intent" => "CAPTURE",
            "purchase_units" => [[
                "reference_id" => 'webmall_'. uniqid(),
                "amount" => [
                    "value" => $order->value,
                    "currency_code" => "USD"
                ]
            ]],
            "application_context" => [
                "cancel_url" => route('paypal.cancel'),
                "return_url" => route('paypal.success', $orderId)
            ]
            ];
    }


    private function checkoutData($orderId)
    {
        $order = Order::find($orderId);

        $orderItems = [];


        foreach($order->event as $event) {

            $orderItems[] = [
                'title' => $event->title,
                'description' => \Str::limit($event->description, 100),
                'unit_amount' => [
                    'currency_code' => 'USD',
                     'value' => $event->budget
                ],

                'category' => 'PHYSICAL_GOODS',

            ];

        }

        $checkoutData = [
            'intent' => 'CAPTURE',
            'application_context' =>
            [
                'return_url' => route('paypal.success', $orderId),
                'cancel_url' => route('paypal.cancel'),
                'brand_name' => 'WEBMALL',
                'locale' => 'en-US',
                'landing_page' => 'BILLING',
                'shipping_preference' => 'SET_PROVIDED_ADDRESS',
                'user_action' => 'PAY_NOW',
            ],
            'purchase_units' => [
                [
                    'reference_id' =>  uniqid(),
                    'description' => 'some order description for the order',
                    'custom_id' => 'CUST-HighFashions',
                    'soft_descriptor' => 'HighFashions',
                    'items' => $orderItems,
                    'shipping' =>
                    [
                        'method' => 'United States Postal Service',
                        'name' =>
                        [
                            'full_name' => 'John Doe',
                        ],
                        'address' =>
                        [
                            'address_line_1' => '123 Townsend St',
                            'address_line_2' => 'Floor 6',
                            'admin_area_2' => 'San Francisco',
                            'admin_area_1' => 'CA',
                            'postal_code' => '94107',
                            'country_code' => 'US',
                        ],
                    ],
                    'amount' =>
                    [
                        'currency_code' => 'USD',
                        'value' => $order->value,
                        // 'value' => 11,
                        'breakdown' =>
                        [
                            'item_total' =>
                            [
                                'currency_code' => 'USD',
                                'value' => $order->value,
                                // 'value' => 11,
                            ],
                            'shipping' =>
                            [
                                'currency_code' => 'USD',
                                'value' => '0',
                            ],
                            'handling' =>
                            [
                                'currency_code' => 'USD',
                                'value' => '0',
                            ],

                        ],
                    ],
                ]
            ],

        ];

        return $checkoutData;
    }
}
