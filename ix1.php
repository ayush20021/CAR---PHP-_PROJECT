<!DOCTYPE html>
<html lang="en">

<head>
  <title>BMW IX1</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="styleX1.css" />
  <link rel="shortcut icon" href="IMG/BMW LOGO.png" />
</head>

<body>
  
  <?php 
  
  include("header.php");
  
  ?>

  <main>
    <?php
    include('connection.php');
    $name_model = $_GET['name'];
    $query = "SELECT * FROM `model_details` WHERE `Name`='$name_model'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    $sql2 = "SELECT * FROM `car_details` WHERE `Model Name`='$name_model'";
    $res2 = mysqli_query($conn, $sql2);
    $row2 = mysqli_fetch_array($res2);
    ?>
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
      <ol class="carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <img src="Model_images/<?php echo "{$row['CoverImage']}" ?>" class="w-100 d-block" alt="First slide" />
          <div class="carousel-caption d-none d-md-block">
            <!-- <h1>CHARGE &nbsp; AHEAD &nbsp; XCEED</h1>
              <h2>THE FIRST FULLY ELECTRIC BMW IX1</h2> -->
            <h2>
              <?php echo "{$row['CoveImage_Text']}" ?>
            </h2>
           
            <a href="test11.php?name=<?php echo $name_model; ?>">
              <button class="kbtn">Configure & Price</button>
            </a><br />

            <button class="kbtn1">Register Your Intrest</button>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-sm sticky-top d-none d-md-block dd border-bottom my-5">
      <div class="container">
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link px-3" href="#info">
                <h5>Vehical Info</h5>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#Range">
                <h5>Range & Charging</h5>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#D">
                <h5>Design</h5>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#tdata">
                <h5>Technical Data</h5>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container" id="info">
      <p>
        <?php echo nl2br($row['Header_Info']); ?>
      </p>
      <br />
      <?php echo nl2br($row['Para1']); ?>
      <br />
      <p class="mt-4">
        <?php echo nl2br($row['Para2']); ?>
      </p>

    </div>
    <div class="container" id="Range">
      <h3 class="mt-5">
        RANGE AND CHARGING OF THE
        <?php echo "{$row['Name']}" ?>.
      </h3>

      <div class="row justify-content-center align-items-center g-2 my-5">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="Models/Ix1/1.jpg" alt="" class="img-fluid" />
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 ps-5">
          <?php $lines = explode(PHP_EOL, $row['Range']);
          if (!empty($lines)) {
            echo '<ul>';
            foreach ($lines as $line) {
              // Trim the line to remove leading/trailing spaces
              $line = trim($line);
              // Skip empty lines
              if (!empty($line)) {
                echo "<li>{$line}</li>";
              }
            }
            echo '</ul>';
          }
          ?>
        </div>
      </div>
    </div>

    <div class="container" id="D">
      <h2 class="my-3">
        EXTERIOR HIGHLIGHTS OF THE
        <?php echo "{$row['Name']}" ?>.
      </h2>
      <div class="row justify-content-center align-items-center g-2">
        <div class="col-sm-12 col-md-4 col-lg-4">
          <img src="Model_images/<?php echo "{$row['img1']}" ?>" alt="" class="img-fluid" />

          <h5 class="my-3">FRONT DESIGN</h5>
          <p>
            <?php echo "{$row['Data 1']}" ?>
          </p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <img src="Model_images/<?php echo "{$row['img2']}" ?>" alt="" class="img-fluid" />

          <h5 class="my-3">Side view</h5>
          <p>
            <?php echo "{$row['Data 2']}" ?>
          </p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
          <img src="Model_images/<?php echo "{$row['img3']}" ?>" alt="" class="img-fluid" />

          <h5 class="my-3">Rear - Side view</h5>
          <p>
            <?php echo "{$row['Data 3']}" ?>
          </p>
        </div>
      </div>
    </div>

    <div class="container" id="tdata">
      <h2 class="my-4">
        TECHNICAL DATA OF THE FIRST FULLY ELECTRIC BMW iX1.
      </h2>
      <div class="row g-2">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="Models/Ix1/TDATA.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="table-responsive">
            <table class="table p-5 my-5">
              <thead>
                <tr>
                  <th scope="col" class="p-3">Power in kW (hp):</th>
                  <th scope="col" class="p-3">
                    <?php echo "{$row2['power']}" ?>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr class="">
                  <td scope="row" class="p-3">Torque in Nm:</td>
                  <td class="p-3">
                    <?php echo "{$row2['torque']}" ?>
                  </td>
                </tr>
                <tr class="">
                  <td scope="row" class="p-3">
                    Acceleration 0–100 km/h in s:
                  </td>
                  <td class="p-3">
                    <?php echo "{$row2['acceleration']}" ?>
                  </td>
                </tr>
                <tr class="">
                  <td scope="row" class="p-3">Electric range, WLTP in km:</td>
                  <td class="p-3">
                    <?php echo "{$row2['range']}" ?>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>

  <?php 
    include("footer.php");
    
    ?>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>