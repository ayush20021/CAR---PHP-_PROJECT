
<?php
// Database connection parameters
$host = 'localhost';
$dbname = 'bmw';
$username = 'root';
$password = '';

// Establish a database connection
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: Could not connect. " . $e->getMessage());
}

// SQL query to get the count of distinct models sold each month
$sql = "SELECT 
            MONTH(Date_Sold) AS month,
            COUNT(DISTINCT Model_Name) AS soldCount
        FROM 
            sales
        GROUP BY 
            month";

try {
    // Execute the query
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // Fetch the results
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Close the database connection
    $pdo = null;
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Fetch your data from the server or database
$soldData = [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1];
$preBookedData = [6, 8, 25, 7, 20, 20, 51, 35, 42, 20, 33, 67];

// Combine data from the database with existing data
foreach ($result as $row) {
    $month = $row['month'];
    $soldCount = $row['soldCount'];
    
    // Assuming the month numbers in the database match the x-axis categories
    $index = $month - 1; // Adjusting the index to match the array (assuming 1-based index for months)
    
    // Update the sold data with the count for the corresponding month
    if ($index >= 0 && $index < count($soldData)) {
        $soldData[$index] = $soldCount;
    }
}

// Combine data into an associative array
$data = [
    'sold' => $soldData,
    'preBooked' => $preBookedData,
];

// Convert the PHP array to JSON
header('Content-Type: application/json; charset=utf-8');

// Convert the PHP array to JSON
$jsonData = json_encode($data, JSON_UNESCAPED_UNICODE);

// Check for JSON encoding errors
if (json_last_error() !== JSON_ERROR_NONE) {
    die('Error encoding JSON: ' . json_last_error_msg());
}

// Output the JSON data
echo $jsonData;
?>
