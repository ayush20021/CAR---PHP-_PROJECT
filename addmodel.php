<?php 
$host="localhost";
$id="root";
$pass="";
$db="bmw";


$model =$_POST['model'];
$fuel=$_POST['fuel'];
$price=$_POST['price'];
$imgp=$_FILES['file']['name'];
$selectedItem = $_POST['selectedItem'];
echo"$selectedItem";
$conn = mysqli_connect($host,$id,$pass,$db);

    $dir="COVERIMAGE/";
    $targdir= $dir.basename($_FILES['file']['name']);
    move_uploaded_file($_FILES['file']['tmp_name'],$targdir);

  $query="INSERT INTO `bmw_models11` (`ID`, `Model Name`, `Model_Type`, `Type`, `Price`, `image`) VALUES (NULL, '$model', '$selectedItem','$fuel', '$price', '$imgp')";
  if(mysqli_query($conn,$query)){
    echo "Data inserted sucessfully";
  }



?>