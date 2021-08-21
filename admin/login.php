<?php
session_start();

function test($url, $data, $token=false){
    $data = json_encode($data);
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if($token)
    	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: " . $token,"Content-Type: application/json"));

    else
    	curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

    curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    $response = curl_exec($ch);
    // $response = json_decode($response, true); 
    // var_dump(json_decode($response));
    if (!$response)
    {
        return false;
    }

    return $response;
}

$url = "http://localhost:1234/authenticate"; // modifier le produit 1    

if(isset($_POST['email']) && isset($_POST['password'])){
    $data = array("email" => $_POST['email'], "password" =>  $_POST['password']);
    $result= test($url, $data);
    $result = json_decode($result,true);
    
    if(is_array($result) || is_object($result)){
        foreach ($result as $key => $value) {
            if ($key == 'jwt') {
                $_SESSION["token"]=$value;
                echo $value; 
            }
        }
        
    }
}


?>