<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

// hapus di ubuntu

$client = new Client();

$id = $_GET['id'];

$response = $client->request(
    'DELETE',
    'http://192.168.24.1/final_intero/API_Selasa.php?id=' . $id
);

if($response->getStatusCode()) {
    header("location:TimetableSelasa.php");
} else {
    echo "Failed";
}

?>

