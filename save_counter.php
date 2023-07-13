<?php
$jsonData = file_get_contents('php://input');
$data = json_decode($jsonData);

$counterValue = $data->counter;

$file = fopen('counter.json', 'w');
fwrite($file, json_encode(['counter' => $counterValue]));
fclose($file);
?>
