<?php

$disk_list = file_get_contents('../json/dischi.json');

$output = json_decode($disk_list);

header("Content-type: application/json");

$response = [
    "success" => true,
    "data" => $output
];

echo json_encode($response);