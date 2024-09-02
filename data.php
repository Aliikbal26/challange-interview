<?php
header('Content-Type: application/json');

// Generate random data
$data = [];
for ($i = 0; $i < 10; $i++) {
    $data[] = rand(1000, 9999);
}

// Mengirim json 
echo json_encode(['data' => $data]);
