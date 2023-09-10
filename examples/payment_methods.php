<?php

require_once '../vendor/autoload.php';

$config = include('config.php');

$paytota = new \Paytota\PaytotaApi($config['brand_id'], $config['api_key'], $config['endpoint']);

$methods = $paytota->getPaymentMethods('EUR');

print json_encode($methods);