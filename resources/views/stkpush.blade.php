<?php
date_default_timezone_set('Africa/Nairobi');
$processrequestUrl = '';
$callbackurl = '';
$passkey = "";
$BusinessShortCode = '';
$Timestamp = date('YmdHis');
$password = base64_encode($BusinessShort. $passkey. $Timestamp);
$phone = '';
$money = '';
$PartyA = '$phone';
$PartyB = '254721773805';
$AccountReference = '';
$TransactionDesc = '';
$Amount = $money;
$stkpushheader = ['Content-Type:application/json', 'Authorization:Bearer'.$access_token];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $initiate_url);
curl_setopt($curl, CURLOPT_HTTPHEADER, $stkheader);
$curl_post_data = array(
    "BusinessShortCode": "174379",
   "Password": "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMTYwMjE2MTY1NjI3",
   "Timestamp":"20160216165627",
   "TransactionType": "CustomerPayBillOnline",
   "Amount": "1",
   "PartyA":"254708374149",
   "PartyB":"174379",
   "PhoneNumber":"254708374149",
   "CallBackURL": "https://mydomain.com/pat",
   "AccountReference":"Test",
   "TransactionDesc":"Test"
);
