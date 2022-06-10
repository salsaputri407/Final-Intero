<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'http://192.168.24.1/final_intero/API_Senin.php'
);

$body_json = $response->getBody();
$result = json_decode($body_json); 

$data = $result->data;

?>