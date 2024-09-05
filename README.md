<?php
require_once('mobilerecharge.php');
$apikey = "Your Api Key";
$secretkey = "Your secret Key";
$mobilerecharge = new mobilerecharge($apikey,$secretkey);

// balance chack
echo $mobilerecharge->chack();

// recharge requst
$params = array();
$params['mobile'] = "01711111111";
$params['amount'] = "20";
$params['oparetor'] = "gp";// Grameenphone = gp, Banglalink = bl, Airtel = at, Robi = rb, Teletalk = tt;
$params['type'] = "prepaid";// prepaid,postpaid,sktto
echo $mobilerecharge->recharge($params);
