<?php
require_once('mobilerecharge.php');
$apikey = "your api key";
$secretkey = "your secret key";
$mobilerecharge = new mobilerecharge($apikey, $secretkey);

// balance chack start
echo $Recharge->chack();
// balance chack end

// recharge requst start
$params = array();
$params['mobile'] = "01711111111";
$params['amount'] = "20";
$params['oparetor'] = "gp";// Grameenphone = gp, Banglalink = bl, Airtel = at, Robi = rb, Teletalk = tt;
$params['type'] = "prepaid";// prepaid,postpaid,sktto
echo $Recharge->recharge($params);
// recharge requst end


// Recharge Query by_Trxid
$trxid = "MUGB44333553";
echo $Recharge->query_by_trxid($trxid);


// Recharge Query by id
$id = "1476587575457";
echo $Recharge->query_by_id($id);
