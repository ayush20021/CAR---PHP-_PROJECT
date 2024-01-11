




<?php 

include('connection.php');
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$email = $_POST['ename'];
$s1=$_POST['query'];

$query="INSERT INTO `querys` (`ID`, `Name`, `Last Name`, `Email`, `Query`) VALUES (NULL, '$first_name', '$last_name', '$email', '$s1')";
if(mysqli_query($conn,$query)){
    
}




?>