<?php
require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
    'sk_test_51LgIKCDB1J1j4EdTuVUazdPwuKOez5T4m50hbGaZoRvE8BNI03WXjsuXFrUmvQI0tNYiYe91P9qYciqVtvgH90cT00hLOkyjVj'
  );
  $result = $stripe->products->all(['limit' => 5]);
  var_dump($result);