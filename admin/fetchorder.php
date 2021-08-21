<?php
$ch = curl_init();
$url ="";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resp = curl_exec($ch);

if($e=curl_error($ch)){
    echo $e;
}
else{

    $results = json_decode($resp);
    // echo "<pre>";
    
    // $x = $results->storeName;
    // print_r($x);
//    $data= $result->storeId;
//    print($results->storeId);
    
}
curl_close($ch);
?>