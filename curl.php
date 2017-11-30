<?php
/**
 * Created by PhpStorm.
 * User: jigar-halani
 * Date: 6/3/17
 * Time: 1:19 PM
 */
$url = 'http://api.tradingeconomics.com/country';
$headers = array(
    "Accept: application/xml",
    "Authorization: OAuth YOUR_TOKEN_VALUE"
);
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($handle);
curl_close($handle);
