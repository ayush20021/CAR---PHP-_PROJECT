<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Modesls</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylemod.css" />
    <link rel="stylesheet" href="M.css" />
    <link rel="icon" href="MOdels/BMW LOGO.png" />
    <style>
      @import url("https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular");
    </style>
      <style>

        .ab{

         


        }


    .carousel-caption {
      text-align: left;
      left: 1%;
      right: auto;
      top: 70%;
    }

        .kbt {
      background-color: transparent;
      color: white;
      border: white 2px solid;
      margin-left: 20px;
      padding-left: 3rem;
      padding-right: 3rem;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }
    
  </style>
  </head>

  <body>
    <?php 
    include("header.php");
    ?>
    <!-- <div class="container">
  <video autoplay loop muted src="Videos/7.mp4" class="mt-2"> </video></div> -->

  <div class="container">

  <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <video
              autoplay
              muted
              loop
              src="Videos/7.mp4"
              class="mt-0"
            ></video>
            <div class="carousel-caption d-none d-md-block">
              <h1>THE ULTIMATE BMW 7</h1>
              <span>
                <bold>Pure elegance and multisensory entertainment come together in the new BMW 7</bold>
              </span>
              <button class="kbt">Konw More</button>
            </div>
          </div>
        </div>
      </div>
      </div>

    <div class="container">
      <h2 class="mt-5">FIND YOUR BMW.</h2>

      <h4 class="mt-3">FILTER</h4>

      <span class="mt-3"> <bold>23</bold> Vehical Found</span>
    </div>
    <nav
      class="navbar navbar-expand-sm sticky-top d-none d-md-block dd border-bottom my-5"
    >
      <div class="container">
        <button
          class="navbar-toggler d-lg-none"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapsibleNavId"
          aria-controls="collapsibleNavId"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link px-3" href="#I"> <h5>BMW I</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#X"> <h5>X</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#M"> <h5>M</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#7"> <h5>7</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#6"> <h5>6</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#5"> <h5>5</h5></a>
            </li>
            <li class="nav-item">
              <a class="nav-link px-3" href="#3"> <h5>3</h5></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>


    <?php
    include('connection.php');
    $sql="SELECT * FROM `bmw_models11` WHERE `Model_Type`='BMW I'";
    $result=mysqli_query($conn,$sql);
    echo" <div class='container' id='I'>
    <h5 class='mt-5 mb-3'>BMW I</h5>
    <div
      class='row justify-content-center align-items-center g-2 border-top border-bottom pb-5'
    >";
    while($row=mysqli_fetch_array($result)){
      $originalValue = $row['Price'];

// Format the value using number_format
    $formattedValue = number_format($originalValue, 2, '.', ',');

// Add the currency symbol
    $formattedValueWithSymbol = '₹ ' . $formattedValue;

// Output the result
// echo $formattedValueWithSymbol;
      echo"<div class='col-sm-12 col-md-3 col-lg-3 custom-col'>
      <a href='ix1.php?name={$row['Model Name']}'>
      <img src='COVERIMAGE/{$row['image']}' alt='' class='img-fluid' /></a>
      <h5><bold>{$row['Model Name']}</bold></h5>
      <span>{$row['Type']}</span><br />
      <span class='pd-2'> Starting from {$formattedValueWithSymbol} </span>
    </div>";
    }
    echo" </div>
    </div>";
    
    mysqli_close($conn);

    
    ?>

    <?php 
    include('connection.php');
    $sql="SELECT * FROM `bmw_models11` WHERE `Model_Type` ='X'";
    $result=mysqli_query($conn,$sql);
    echo "<div class='container' id='X'>
    <h5 class='mt-5 mb-3'>X</h5>
    <div class='row g-2 border-top border-bottom pb-5'>";
    while($row=mysqli_fetch_array($result)){
      $originalValue = $row['Price'];

      // Format the value using number_format
          $formattedValue = number_format($originalValue, 2, '.', ',');
      
      // Add the currency symbol
          $formattedValueWithSymbol = '₹ ' . $formattedValue;

          echo"
          <div class='col-sm-6 col-md-3 col-lg-3'>
            <button class='bimg'>
              <img src='COVERIMAGE/{$row['image']}' alt='' class='img-fluid' />
            </button>
            <h5><bold>{$row['Model Name']}</bold></h5>
            <span>{$row['Type']}</span><br />
            <span> Starting from {$formattedValueWithSymbol} </span>
          </div>
          
        ";


    }
    echo "</div>
          </div>";  

          mysqli_close($conn);
    
    ?>

    <?php 
    include('connection.php');
    $sql="SELECT * FROM `bmw_models11` WHERE `Model_Type` ='M'";
    $result=mysqli_query($conn,$sql);
    echo "<div class='container' id='M'>
    <h5 class='mt-5 mb-3'>M</h5>
    <div class='row g-2 border-top border-bottom pb-5'>";
    while($row=mysqli_fetch_array($result)){
      $originalValue = $row['Price'];

      // Format the value using number_format
          $formattedValue = number_format($originalValue, 2, '.', ',');
      
      // Add the currency symbol
          $formattedValueWithSymbol = '₹ ' . $formattedValue;

          echo"
          <div class='col-sm-6 col-md-3 col-lg-3'>
          <a href='ix1.php?name={$row['Model Name']}'>
          <img src='COVERIMAGE/{$row['image']}' alt='' class='img-fluid' /></a>
            <h5><bold>{$row['Model Name']}</bold></h5>
            <span>{$row['Type']}</span><br />
            <span> Starting from {$formattedValueWithSymbol} </span>
          </div>
          
        ";


    }
    echo "</div>
          </div>";  

          mysqli_close($conn);
    
    ?>

<?php 
    include('connection.php');
    $sql="SELECT * FROM `bmw_models11` WHERE `Model_Type` ='7'";
    $result=mysqli_query($conn,$sql);
    echo "<div class='container' id='7'>
    <h5 class='mt-5 mb-3'>7</h5>
    <div class='row g-2 border-top border-bottom pb-5'>";
    while($row=mysqli_fetch_array($result)){
      $originalValue = $row['Price'];

      // Format the value using number_format
          $formattedValue = number_format($originalValue, 2, '.', ',');
      
      // Add the currency symbol
          $formattedValueWithSymbol = '₹ ' . $formattedValue;

          echo"
          <div class='col-sm-6 col-md-3 col-lg-3'>
            <button class='bimg'>
              <img src='COVERIMAGE/{$row['image']}' alt='' class='img-fluid' />
            </button>
            <h5><bold>{$row['Model Name']}</bold></h5>
            <span>{$row['Type']}</span><br />
            <span> Starting from {$formattedValueWithSymbol} </span>
          </div>
          
        ";


    }
    echo "</div>
          </div>";  

          mysqli_close($conn);
    
    ?>
      <?php 
    include('connection.php');
    $sql="SELECT * FROM `bmw_models11` WHERE `Model_Type` ='6'";
    $result=mysqli_query($conn,$sql);
    echo "<div class='container' id='6'>
    <h5 class='mt-5 mb-3'>6</h5>
    <div class='row g-2 border-top border-bottom pb-5'>";
    while($row=mysqli_fetch_array($result)){
      $originalValue = $row['Price'];

      // Format the value using number_format
          $formattedValue = number_format($originalValue, 2, '.', ',');
      
      // Add the currency symbol
          $formattedValueWithSymbol = '₹ ' . $formattedValue;

          echo"
          <div class='col-sm-6 col-md-3 col-lg-3'>
            <a href='https://www.google.com/'>
            <img src='COVERIMAGE/{$row['image']}' alt='' class='img-fluid' /></a>
            <h5><bold>{$row['Model Name']}</bold></h5>
            <span>{$row['Type']}</span><br />
            <span> Starting from {$formattedValueWithSymbol} </span>
          </div>
          
        ";


    }
    echo "</div>
          </div>";  

          mysqli_close($conn);
    
    ?>



<?php 
    include('connection.php');
    $sql="SELECT * FROM `bmw_models11` WHERE `Model_Type` ='5'";
    $result=mysqli_query($conn,$sql);
    echo "<div class='container' id='5'>
    <h5 class='mt-5 mb-3'>5</h5>
    <div class='row g-2 border-top border-bottom pb-5'>";
    while($row=mysqli_fetch_array($result)){
      $originalValue = $row['Price'];

      // Format the value using number_format
          $formattedValue = number_format($originalValue, 2, '.', ',');
      
      // Add the currency symbol
          $formattedValueWithSymbol = '₹ ' . $formattedValue;

          echo"
          <div class='col-sm-6 col-md-3 col-lg-3'>
            <button class='bimg'>
              <img src='COVERIMAGE/{$row['image']}' alt='' class='img-fluid' />
            </button>
            <h5><bold>{$row['Model Name']}</bold></h5>
            <span>{$row['Type']}</span><br />
            <span> Starting from {$formattedValueWithSymbol} </span>
          </div>
          
        ";


    }
    echo "</div>
          </div>";  

          mysqli_close($conn);
    
    ?>
      </div>

      <?php 
    include('connection.php');
    $sql="SELECT * FROM `bmw_models11` WHERE `Model_Type` ='3'";
    $result=mysqli_query($conn,$sql);
    echo "<div class='container' id='3'>
    <h5 class='mt-5 mb-3'>3</h5>
    <div class='row g-2 border-top border-bottom pb-5'>";
    while($row=mysqli_fetch_array($result)){
      $originalValue = $row['Price'];

      // Format the value using number_format
          $formattedValue = number_format($originalValue, 2, '.', ',');
      
      // Add the currency symbol
          $formattedValueWithSymbol = '₹ ' . $formattedValue;

          echo"
          <div class='col-sm-6 col-md-3 col-lg-3'>
            <button class='bimg'>
              <img src='COVERIMAGE/{$row['image']}' alt='' class='img-fluid' />
            </button>
            <h5><bold>{$row['Model Name']}</bold></h5>
            <span>{$row['Type']}</span><br />
            <span> Starting from {$formattedValueWithSymbol} </span>
          </div>
          
        ";


    }
    echo "</div>
          </div>";  

          mysqli_close($conn);
    
    ?>
    </main>

    <?php 
    include("footer.php");
    
    ?>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
