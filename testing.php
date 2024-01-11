<?php
// Assuming you have a database connection
$servername = "localhost";
$username = "root1";
$password = "";
$dbname = "bmw";

// Create connection
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to get the top 3 models based on occurrences
$sql = "SELECT Model_Name, COUNT(*) AS ModelCount
        FROM sales
        GROUP BY Model_Name
        ORDER BY ModelCount DESC
        LIMIT 3";

$result = $conn->query($sql);
$firstModel = '';
    $secondModel = '';
    $thirdModel = '';
    $counter = 1;

// Check if there are results
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($counter === 1) {
            $firstModel = $row["Model_Name"];
        } elseif ($counter === 2) {
            $secondModel = $row["Model_Name"];
        } elseif ($counter === 3) {
            $thirdModel = $row["Model_Name"];
        }

        // Increment the counter
        $counter++;
    }
} else {
    echo "No results found";
}

// Close the database connection
$conn->close();
?>
