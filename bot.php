<?php

$access_token = 'F2bejKi+Zd2+2VIs9YrRAt4sctvtJv6MMDlPN6kTh9eo1Xoh/Lq8021aEtL0yDk7yh5HYkaQEbvM52DJR7yNt162DM5dyg0qPkdZneUrAX1mrgkxaP3KDee0CnhdZARnowHeuggOVRJI7L98Knm7PwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
