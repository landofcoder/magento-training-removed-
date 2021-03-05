<?php
//conect api
session_start();
$api = "api.openweathermap.org/data/2.5/weather?q=hanoi&appid=9a298c057f61301692f95480afca92eb";
$ch = curl_init ();

curl_setopt ( $ch , CURLOPT_HEADER , 0 ); 
curl_setopt ( $ch , CURLOPT_RETURNTRANSFER , 1 ); 
curl_setopt ( $ch , CURLOPT_URL , $api ); 
curl_setopt ( $ch , CURLOPT_FOLLOWLOCATION , 1 ); 
curl_setopt ( $ch , CURLOPT_VERBOSE , 0 ); 
curl_setopt ( $ch , CURLOPT_SSL_VERIFYPEER,false ); 
$response = curl_exec ( $ch );

curl_close ( $ch ); 
$data = json_decode ( $response ); 
$currentTime = time (); 
//submitapi



?>