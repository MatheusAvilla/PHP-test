<?php

$conn = mysqli_connect('172.16.127.16', 'root', 'root', 'ESTAGIO');

$file_name = "data.json";

$data = file_get_contents($file_name);

$array = json_decode($data, true);

foreach($array as $row)
{
    $sql = "INSERT INTO Sensores(id, data, prediction) VALUES('".$row["id"]."', '".$row["date"]."', '".$row["prediction"]."')";

    mysqli_query($conn, $sql);
}

echo "Dados Inseridos";



