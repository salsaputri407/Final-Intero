<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

// update ubuntu

$client = new Client();

$id = $_POST['id'];

$response = $client->request(
    'POST',
    'http://192.168.24.1/final_intero/API_Senin.php?method=patch' , [
    'form_params' => [
            'id' => $_POST['id'],
            'wktMulai' => $_POST['wktMulai'],
            'wktSelesai' => $_POST['wktSelesai'],
            'jadwal' => $_POST['jadwal']
        ]
    ]

);
print_r($response);

if($response->getStatusCode()) {
    header("location:TimetableSenin.php");
} else {
    echo "Failed";
}

?>