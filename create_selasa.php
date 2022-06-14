<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

// insert to ubuntu

$client = new Client();

$response = $client->request(
    'POST',
    'http://192.168.24.1/final_intero/API_Selasa.php?method=post', [
    'form_params' => [
            'id' => $_POST['id'],
            'wktMulai' => $_POST['wktMulai'],
	        'wktSelesai' => $_POST['wktSelesai'],
	        'jadwal' => $_POST['jadwal']
        ]
    ]
);

$responseBody = json_decode($response->getBody());
print_r($responseBody->status);

if($response->getStatusCode()) {
    header("location:TimetableSelasa.php");
} else {
    echo "Failed";
}

?>