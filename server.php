<?php
    $jsonData = file_get_contents(__DIR__ . "/data.json");
    $discList = json_decode($jsonData, true);

    if(is_null($discList)){
        $discList = [];
    }

    header('Content-Type: application/json');

    echo json_encode($discList);
?>