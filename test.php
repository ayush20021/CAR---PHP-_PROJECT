<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <style>
        /* Custom CSS to remove input borders */
        .form-control {
            border: none;
            border-radius: 0;
            box-shadow: none;
            border-bottom: 1px solid #000;
        }
    </style>
</head>
<body>

<?php 
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}
include('connection.php');
 $ID=$_GET['id'];
$sql="SELECT * FROM `bmw_models11` WHERE `ID` =$ID";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['Model Name'];
$sql2="SELECT * FROM `model_details` WHERE `Name`='$name'";
$result2=mysqli_query($conn,$sql2);
$sql3 = "SELECT * FROM `car_details` WHERE `Model Name`='$name'";
$res3=mysqli_query($conn,$sql3);
$row3=mysqli_fetch_array($res3);
if(mysqli_num_rows($result2)> 0){
    $row2=mysqli_fetch_assoc($result2);
    echo"<div class='container mt-5'>
    <form action='addmodel_p2.php' method='post' enctype='multipart/form-data'>

        <div class='mb-3'>
            <label for='id' class='form-label'>ID</label>
            <input type='text' class='form-control' id='id' name='idd' placeholder='Enter ID' disabled value='{$row['ID']}'>
            <input type='hidden' class='form-control' id='id' name='id' placeholder='Enter ID'  value='{$row['ID']}'>
        </div>

        <div class='mb-3'>
            <label for='name' class='form-label'>Name</label>
            <input type='text' class='form-control' id='name' name='name1' placeholder='Enter Name ' disabled value='{$row['Model Name']}'>
            <input type='hidden' class='form-control' id='name' name='name' placeholder='Enter Name '  value='{$row['Model Name']}'>
        </div>

        <div class='mb-3'>
            <label for='coverImage' class='form-label'>Cover Image</label>
            <input type='file' class='form-control' id='coverImage' name='file'>
        </div>

        <div class='mb-3'>
            <label for='coverImageText' class='form-label'>Cover Image Text</label>
            <input type='text' class='form-control' id='coverImageText' name='coverImageText' placeholder='Enter Cover Image Text' value='{$row2['CoveImage_Text']}'>
        </div>

        <div class='mb-3'>
            <label for='headerInfo' class='form-label'>Header Info</label>
            <input type='text' class='form-control' id='headerInfo' name='headerInfo' placeholder='Enter Header Info'value='{$row2['Header_Info']}'>
        </div>

        <div class='mb-3'>
        <label for='para1' class='form-label'>Paragraph 1</label>
        <textarea class='form-control' id='para1' name='para1' rows='3' placeholder='Enter Paragraph 1'>{$row2['Para1']}</textarea>
    </div>
    
    <div class='mb-3'>
        <label for='para2' class='form-label'>Paragraph 2</label>
        <textarea class='form-control' id='para2' name='para2' rows='3' placeholder='Enter Paragraph 2'>{$row2['Para2']}</textarea>
    </div>

        <div class='mb-3'>
            <label for='range' class='form-label'>Range</label>
            <textarea class='form-control' id='range' name='range' placeholder='Enter Range' rows='3'>{$row2['Range']}</textarea>
        </div>

        
        <label for='power'>Power in kW (hp):</label>
        <input type='text' name='power' required  class='mt-3'  value='{$row3['power']}'><br>

        <label for='torque'>Torque in Nm:</label>
        <input type='text' name='torque' required  class='mt-3'  value='{$row3['torque']}'><br>

        <label for='acceleration'>Acceleration 0–100 km/h in s:</label>
        <input type='text' name='acceleration' required  class='mt-3'   value='{$row3['acceleration']}'><br>

        <label for='electric_range'>Range, WLTP in km:</label>
        <input type='text' name='electric_range' required  class='my-3'  value='{$row3['range']}'><br>

        <div class='mb-3'>
        <label for='coverImage' class='form-label'>Image 1</label>
        <input type='file' class='form-control' id='coverImage' name='file1'  class='mt-3'>
    </div>

        <div class='mb-3'>
            <label for='front' class='form-label'>Data 1</label>
            <input type='text' class='form-control' id='front' name='front' placeholder='Enter Front Details' value='{$row2['Data 1']}'>
        </div>

        <div class='mb-3'>
        <label for='coverImage' class='form-label'>Image 2</label>
        <input type='file' class='form-control' id='coverImage' name='file2'>
        </div>

        <div class='mb-3'>
            <label for='rear' class='form-label'>Data 2</label>
            <input type='text' class='form-control' id='rear' name='rear' placeholder='Enter Rear Details' value='{$row2['Data 2']}'>
        </div>

        <div class='mb-3'>
        <label for='coverImage' class='form-label'>Image 3</label>
        <input type='file' class='form-control' id='coverImage' name='file3'>
        </div>
        

        <div class='mb-3'>
            <label for='back' class='form-label'>Data 3</label>
            <input type='text' class='form-control' id='back' name='back' placeholder='Enter Back Details' value='{$row2['Data 3']}'>
        </div>

        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
</div>";

}else{
    echo "<div class='container mt-5'>
    <form action='addmodel_p2.php' method='post' enctype='multipart/form-data'>

        <div class='mb-3'>
            <label for='id' class='form-label'>ID</label>
            <input type='text' class='form-control' id='id' name='idd' placeholder='Enter ID' disabled value='{$row['ID']}'>
            <input type='hidden' class='form-control' id='id' name='id' placeholder='Enter ID'  value='{$row['ID']}'>
        </div>

        <div class='mb-3'>
            <label for='name' class='form-label'>Name</label>
            <input type='text' class='form-control' id='name' name='name1' placeholder='Enter Name ' disabled value='{$row['Model Name']}'>
            <input type='hidden' class='form-control' id='name' name='name' placeholder='Enter Name '  value='{$row['Model Name']}'>
        </div>

        <div class='mb-3'>
            <label for='coverImage' class='form-label'>Cover Image</label>
            <input type='file' class='form-control' id='coverImage' name='file'>
        </div>

        <div class='mb-3'>
            <label for='coverImageText' class='form-label'>Cover Image Text</label>
            <input type='text' class='form-control' id='coverImageText' name='coverImageText' placeholder='Enter Cover Image Text'>
        </div>

        <div class='mb-3'>
            <label for='headerInfo' class='form-label'>Header Info</label>
            <input type='text' class='form-control' id='headerInfo' name='headerInfo' placeholder='Enter Header Info'>
        </div>

        <div class='mb-3'>
            <label for='para1' class='form-label'>Paragraph 1</label>
            <textarea class='form-control' id='para1' name='para1' rows='3' placeholder='Enter Paragraph 1'></textarea>
        </div>

        <div class='mb-3'>
            <label for='para2' class='form-label'>Paragraph 2</label>
            <textarea class='form-control' id='para2' name='para2' rows='3' placeholder='Enter Paragraph 2'></textarea>
        </div>

        <div class='mb-3'>
            <label for='range' class='form-label'>Speacial Feature</label>
            <textarea type='text' class='form-control' id='range' name='range' placeholder='Enter Range' rows='3'></textarea>
        </div>

        

        <div class='mb-3'>
        <label for='coverImage' class='form-label'>Image 1</label>
        <input type='file' class='form-control' id='coverImage' name='file1'>
    </div>

        <label for='power'>Power in kW (hp):</label>
        <input type='text' name='power' required class='mt-3'><br>

        <label for='torque'>Torque in Nm:</label>
        <input type='text' name='torque' required><br>

        <label for='acceleration'>Acceleration 0–100 km/h in s:</label>
        <input type='text' name='acceleration' required class='mt-3'><br>

        <label for='electric_range'>Electric range, WLTP in km:</label>
        <input type='text' name='electric_range' required class='mt-3'><br>

        <div class='mb-3'>
            <label for='front' class='form-label'>Data 1</label>
            <input type='text' class='form-control' id='front' name='front' placeholder='Enter Front Details'>
        </div>

        <div class='mb-3'>
        <label for='coverImage' class='form-label'>Image 2</label>
        <input type='file' class='form-control' id='coverImage' name='file2'>
        </div>

        <div class='mb-3'>
            <label for='rear' class='form-label'>Data 2</label>
            <input type='text' class='form-control' id='rear' name='rear' placeholder='Enter Rear Details'>
        </div>

        <div class='mb-3'>
        <label for='coverImage' class='form-label'>Image 3</label>
        <input type='file' class='form-control' id='coverImage' name='file3'>
        </div>
        

        <div class='mb-3'>
            <label for='back' class='form-label'>Data 3</label>
            <input type='text' class='form-control' id='back' name='back' placeholder='Enter Back Details'>
        </div>

        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
</div>";
}



?>
<div class="container mt-5">
<p><a href='editpage1.php?id=<?php echo $name; ?>'>Click here</a> to update Page 1</p>
</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
