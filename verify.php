<?php
//6ug9J/v9heYKJoEz371t/yBwrePY9aep4eVbvHX+oRVw0fhsPd6adQcBfgiqPsNslZ2QrnbPrxgX0MtLo9hCajqRJtUYkxxHhTnpRFi0fV15XXhvhQrJmXU5JPhbBX78T1KfKoXh1Ku4lmoPiuo5hwdB04t89/1O/w1cDnyilFU=
$access_token = '6ug9J/v9heYKJoEz371t/yBwrePY9aep4eVbvHX+oRVw0fhsPd6adQcBfgiqPsNslZ2QrnbPrxgX0MtLo9hCajqRJtUYkxxHhTnpRFi0fV15XXhvhQrJmXU5JPhbBX78T1KfKoXh1Ku4lmoPiuo5hwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
