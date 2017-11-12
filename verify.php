<?php
$access_token = 'i7b9B49zCFtsViw5PlOsGwL/iCZQVAPQVXLo3g7eDMKmQrAeCulDRY0o1RbZSLnNRIHptHRbckTUsxVrrNQem4Gv0UUvawyNQjiKJltBw+Y1jyvQbrEjzVNa7ZCaaeO0wXiMkfTuZlwimG95NV2bsFOdY8PpfGfrsvDFhI+5nHfDTofK697pgpyqnWXJQVKW=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

