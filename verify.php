<?php
$access_token = 'AJ2vR1ncBZpZJcbLHanSV8AfRZwvw1l+ewgMDkU8V/gfuBq9eMoCfvm/VhDv9ASXMPktYruTFABGLoTjNS09SR1V4jbm39DinMiC//QEvP1OC+ru3IWRaD1XIa7tQj9niaR9H2xuPGH0ExUnVYDu9AdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
