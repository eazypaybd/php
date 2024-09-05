<?php
require_once('mobilerecharge.php');
$apikey = "your api key";
$secretkey = "your secret key";
$mobilerecharge = mobilerecharge($apikey, $secretkey);

// balance chack start
echo $Recharge->chack($params);
// balance chack end

// recharge requst start
$params = array();
$params['mobile'] = "01711111111";
$params['amount'] = "20";
$params['oparetor'] = "gp";
$params['type'] = "prepaid";
echo $Recharge->recharge($params);
// recharge requst end
