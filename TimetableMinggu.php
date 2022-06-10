<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request(
    'GET',
    'http://192.168.24.1/final_intero/API_Minggu.php'
);

$body_json = $response->getBody();
$result = json_decode($body_json); 

$data = $result->data;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Jadwal Kuliah</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <div style="margin:60px;text-align:center;">
        <h1 style="color:#242F9B;font-weight:bold;">SUNDAY</h3>
    </div>
    <div class="table-responsive">
        <div style="margin-bottom:15px;text-align:right;">
            <a href="AddForm.php" class="btn btn-success btn-sm">Add Task</a>
        </div>
    </div>
        <table class="table table-bordered text-center">
            <thead>
                <tr class="bg-blue">
                    <th class="text-uppercase" style="color:white;">No</th>
                    <th class="text-uppercase" style="color:white;">Time</th>
                    <th class="text-uppercase" style="color:white;">Schedule</th>
                    <th class="text-uppercase" style="color:white;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $i = 1;
                foreach ($data as $value) {
                    echo "
                    <tr class='bg-white'>
                        <td class='align-middle'> $i </td>
                        <td class='align-middle'>" . $value->wktMulai . "  -  " . $value->wktSelesai . "</td>
                        <td class='align-middle'>" . $value->jadwal . "</td>
                        <td>
                        <button class='btn btn-primary btn-sm'>Edit</button>
                        <button class='btn btn-danger btn-sm'>Delete</button>
                        </td>
                    </tr>
                    ";
                    $i++;
                }
            ?>
                
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">

</script>
</body>
</html>