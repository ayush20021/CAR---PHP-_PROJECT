<?php 



$host="localhost";
$id="root";
$pass="";
$db="bmw";
$conn = mysqli_connect($host,$id,$pass,$db);

// Your SQL query to fetch the number of models sold per month
$sql = "SELECT MONTH(Date_Sold) AS Month, COUNT(DISTINCT Model_Name) AS ModelsSold
        FROM sales
        GROUP BY MONTH(Date_Sold)";

$result = mysqli_query($conn, $sql);

if ($result) {
    $data = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row['ModelsSold'];
    }

    // Output the data as JSON
    echo json_encode($data);
} else {
    // Handle the error
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

?>