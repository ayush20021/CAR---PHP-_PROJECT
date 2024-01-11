<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bmw";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $coverImageText = mysqli_real_escape_string($conn, $_POST['coverImageText']);
    $headerInfo = mysqli_real_escape_string($conn, $_POST['headerInfo']);
    $para1 = mysqli_real_escape_string($conn, $_POST['para1']);
    $para2 = mysqli_real_escape_string($conn, $_POST['para2']);
    $range1 = mysqli_real_escape_string($conn, $_POST['range']);
    $front = mysqli_real_escape_string($conn, $_POST['front']);
    $rear = mysqli_real_escape_string($conn, $_POST['rear']);
    $back = mysqli_real_escape_string($conn, $_POST['back']);
    $imgp = $_FILES['file']['name'];
    $img1 = $_FILES['file1']['name'];
    $img2 = $_FILES['file2']['name'];
    $img3 = $_FILES['file3']['name'];
    $power = $_POST['power'];
    $torque = $_POST['torque'];
    $acceleration = $_POST['acceleration'];
    $electric_range = $_POST['electric_range'];

    // Check if the record with the provided name already exists
    $checkQuery = "SELECT * FROM `model_details` WHERE `Name` = '$name'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        // Record with the provided name already exists, update the record

        // Update SQL statement based on file uploads
        $updateSql = "UPDATE `model_details` SET  
                `CoverImage` = '$imgp', 
                `CoveImage_Text` = '$coverImageText', 
                `Header_Info` = '$headerInfo', 
                `Para1` = '$para1', 
                `Para2` = '$para2', 
                `Range` = '$range1', 
                `Data 1` = '$front', 
                `Data 2` = '$rear', 
                `Data 3` = '$back'";

        // Append additional columns to the SQL statement if corresponding images are provided
        if (!empty($imgp)) {
            $updateSql .= ", `CoverImage` = '$imgp'";
        }

        if (!empty($img1)) {
            $updateSql .= ", `img1` = '$img1', `datah1` = 'H1'";
        }

        if (!empty($img2)) {
            $updateSql .= ", `img2` = '$img2', `datah2` = 'H2'";
        }

        if (!empty($img3)) {
            $updateSql .= ", `img3` = '$img3', `datah3` = 'H3'";
        }

        // Complete the WHERE clause
        $updateSql .= " WHERE `model_details`.`Name` = '$name'";

        if (mysqli_query($conn, $updateSql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }

        $sql2 = "UPDATE `car_details` SET `power`='$power',`torque`='$torque',`acceleration`='$acceleration',`range`='$electric_range' WHERE `Model Name`='$name'";
    
       

        // if (mysqli_query($conn, $sql)) {
        //     echo "Record updated successfully";
        // } else {
        //     echo "Error updating record: " . mysqli_error($conn);
        // }
    
        if(mysqli_query($conn, $sql2)) {
    
        }


        
    } else {
        // Record with the provided name does not exist, insert a new record

        $insertSql = "INSERT INTO `model_details` (`ID`, `Name`, `CoverImage`, `CoveImage_Text`, `Header_Info`, `Para1`, `Para2`, `Range`, `Front`, `Rear`, `Back`, `img1`, `img2`, `img3`, `datah1`, `datah2`, `datah3`) 
            VALUES (NULL, '$name', '$imgp', '$coverImageText', '$headerInfo', '$para1', '$para2', '$range1', '$front', '$rear', '$back', '$img1', '$img2', '$img3', 'Header1', 'Heaser2', 'Header3')";

            $insertquery2="INSERT INTO `car_details` (`ID`, `Model Name`, `power`, `torque`, `acceleration`, `range`) VALUES (NULL, '$name', '$power', '$torque', '$acceleration', '$electric_range')";

        if (mysqli_query($conn, $insertSql)) {
            echo "Record inserted successfully";
        } else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
        if(mysqli_query($conn, $insertquery2)) {
            echo "Record Added";
        }else {
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }

    header("Location: Managemodel.php");
}

// Close connection
mysqli_close($conn);
?>
