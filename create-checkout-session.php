<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LgIKCDB1J1j4EdTuVUazdPwuKOez5T4m50hbGaZoRvE8BNI03WXjsuXFrUmvQI0tNYiYe91P9qYciqVtvgH90cT00hLOkyjVj');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/Stripe';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1LgIgUDB1J1j4EdTcvzmDOgy',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);