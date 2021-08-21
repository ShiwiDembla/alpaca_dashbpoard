<?php
$ch = curl_init();
$url ="http://localhost:1234/getAllStores";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resp = curl_exec($ch);

if($e=curl_error($ch)){
    echo $e;
}
else{
    $results = json_decode($resp);
}

curl_close($ch);


?>