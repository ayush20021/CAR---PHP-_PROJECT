<?php 

$otp=$_POST['otp'];
$ID=$_POST['ID'];
$pass=$_POST['p'];
$pass2=$_POST['cpass'];

if($pass!=$pass2){
    echo'Password  Not Mached';
}

include('connection.php');
$sql="SELECT * FROM `users` WHERE `Email`='$ID'";

$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$votp=$row["OTP"];
if($votp== $otp){

    $sql1="UPDATE `users` SET `Password` = '$pass2' WHERE `users`.`Email` = '$ID'";
    if($result1=mysqli_query($conn,$sql1)){
        header("Location:index.php");
    }

}else{
    echo "Encorrect Details Please Try again";
}





?>