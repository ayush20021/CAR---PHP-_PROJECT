<?php
// Replace this with your database connection code
// $servername = "your_server_name";
// $username = "your_username";
// $password = "your_password";
// $dbname = "your_database_name";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);

include('connection.php');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database for monthly sales
$sql = "SELECT MONTH(Date_Sold) AS Month, SUM(Amount) AS MonthlySales
        FROM revenue_store
        GROUP BY MONTH(Date_Sold)";

$result = $conn->query($sql);

// Create arrays to store the data
$monthLabels = [];
$monthlySales = [];

// Loop through the results and populate the arrays
while ($row = $result->fetch_assoc()) {
    $monthLabels[] = date('M', mktime(0, 0, 0, $row['Month'], 1));
    $monthlySales[] = $row['MonthlySales'];
}

// Combine data into an associative array
$data = [
    'monthLabels' => $monthLabels,
    'monthlySales' => $monthlySales,
];

// Convert the PHP array to JSON and output
echo json_encode($data);

// Close the database connection
$conn->close();
?>
