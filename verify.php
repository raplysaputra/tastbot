<?php
$access_token = 'ySsjC+XvhFPDIyKYsDUQCaMSR5bXUK8evVsio0egSPckkHzcb5RNqLVdCQoawpSsW9UZwQquPihk9R6y0k2XokhC+tE84dI33Vnyv7eIW3OCRomDztQf+vlugYbipmND4JtU37hgv6cLot3QEABlPQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

