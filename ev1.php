<?php 

include('connection.php');
$name=$_POST['name'];
$type=$_POST['type'];
$price=$_POST['price'];
$ID=$_POST['ID'];

$imgp=$_FILES['file']['name'];
$dir="COVERIMAGE/";
$targdir= $dir.basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'],$targdir);
if(!empty($imgp)){

    $sql="UPDATE `bmw_models11` SET `Model Name` = '$name', `Type` = '$type', `Price` = '$price', `image` = '$imgp' WHERE `bmw_models11`.`ID` = '$ID'";
    if(mysqli_query($conn,$sql)){
        echo "Data Updated";
    }

}else{


    $sql= "UPDATE `bmw_models11` SET `Model Name` = '$name', `Type` = '$type', `Price` = '$price' WHERE `bmw_models11`.`ID` = '$ID'";
    if(mysqli_query($conn,$sql)){
        echo "Data Updated";
    }
}

?>