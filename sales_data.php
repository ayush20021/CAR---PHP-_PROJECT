<?php
// Simulate server-side data generation
$data = [];
$categories = [];

// Generating random data for demonstration purposes
for ($i = 1; $i <= 12; $i++) {
    $data[] = rand(1, 10);
    $categories[] = "Month " . $i;
}

// Return data as JSON
echo json_encode(['data' => $data, 'categories' => $categories]);
?>
