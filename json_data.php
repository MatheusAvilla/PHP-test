<?php

$array = Array(
    "id" => 0,
    "date" => "29-07-2021",
    "prediction" => 25,
);

$json = json_encode($array);

if (file_put_contents("data.json", $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";





