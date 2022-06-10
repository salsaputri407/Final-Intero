<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

// hapus di ubuntu

$client = new Client();

$id = $_GET['id'];

$response = $client->request(
    'DELETE',
    'http://192.168.24.1/final_intero/API_Senin.php?id=' . $id
);

if($response->getStatusCode()) {
    header("location:TimetableSenin.php");
} else {
    echo "Failed";
}

?>

