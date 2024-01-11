<?php 
include("connection.php");
$name=$_GET['id'];
$sql="SELECT * FROM `bmw_models11` WHERE `Model Name` ='$name'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);


?>

<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>


        <div class="container">

<form action="ev1.php" method="post" enctype="multipart/form-data">



    <input
            type="hidden"
            class="form-control"
            value="<?php echo"{$row['ID']}"?>"
            name="ID"
        />



    <div class="mb-4">
        <label for="addmodel.php" class="form-label">Enter Model Name          </label>
        <input
            type="text"
            class="form-control"
            value="<?php echo"{$row['Model Name']}"?>"
            name="name"
        />
    </div>



    <div class="mb-5">
        <label for="" class="form-label">Enter Fuel Type <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-fuel-pump" viewBox="0 0 16 16">
            <path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5z"/>
            <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8z"/>
          </svg>   </label>
        <input
            type="text"
            class="form-control"
            value="<?php echo"{$row['Type']}"?>   "
            name="type"
        />
    </div>



    <div class="mb-4">
        <label for="" class="form-label">Price</label>
        <input
            type="text"
            class="form-control"
            value="<?php echo"{$row['Price']}"?>"
            name="price"
        />
    </div>



    <div class="mb-5">
        <label for="" class="form-label">Add  Its true look</label>
        <input
            type="file"
            class="form-control"
            name="file"
            id=""
            placeholder=""
            aria-describedby="fileHelpId"
        />
    </div>



    <button class="bb">Submit Details  </button>

    
    
    
    
    




</form>


</div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
