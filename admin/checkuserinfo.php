<?php
$ch = curl_init();
$url ="localhost:1234/getUsersInfo";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);
if($e=curl_error($ch)){
    echo $e;
}
else{

    $keys = [];
    $values =[];
    $i = 0;
    $results = json_decode($resp, true);
    // echo "<pre>";
    // foreach($results as $key => $value){
    //      $keys[$i] = $key;
    //      $values[$i]= $value;
    //     //  echo $values[$i];
    //      $i++;
        
    // }
}

curl_close($ch);


?>