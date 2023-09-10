<?php

require_once '../vendor/autoload.php';

$config = include('config.php');

$paytota = new \Paytota\PaytotaApi($config['brand_id'], $config['api_key'], $config['endpoint']);

$purchase_id = '999cce79-0e81-491a-b418-1779c88e6662';

$purchase = $paytota->getPurchase($purchase_id);

//$refund = $paytota->refundPurchase($purchase_id);

//$cancel = $paytota->cancelPurchase($purchase_id);

//$release = $paytota->releasePurchase($purchase_id);

//$capture = $paytota->capturePurchase($purchase_id);

//$charge = $paytota->chargePurchase($purchase_id, 'test');

//$deleteToken = $paytota->deleteRecurringToken($purchase_id);

print json_encode($purchase);