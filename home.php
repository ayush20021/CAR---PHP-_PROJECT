<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BMW</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" href="IMG/TEST.SVG" type="image/png">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;1,500&display=swap');
    @import url('https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular');
  </style>

</head>

<body>

  <?php 

  include("header.php");

  ?>
  <div class="container">
    

    <div class="container mt-3">
      <div>
        <p>Sheer Driving<bold> Pleasure</bold>
        </p>
      </div>


      <div class="a1">
        <h1>A New Era Of Luxury Power And Tech</h1>
      </div>
      <div>
        <h4>The New Era Of Moblity</h4>
      </div>
      <button type="button" class="btn btn-primary mt-3">Know More</button>

    </div>



  </div>
  <video autoplay loop muted src="Videos/intro.mp4"> </video>


  <p class="text-center mt-3">SHOPPING TOOLS</p>

  <h2 class="text-center">FIND YOUR BMW.</h1>


    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <img src="IMG/ICON 2.webp" alt="" class="img-fluid">
          <h5>Find New Car</h5>
          <button class="mt-4  bt">Search Now</button>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <img src="IMG/ICON 1.webp" alt="" class="img-fluid">
          <h5>Book A Test Drive</h5>
          <button class="mt-4 bt">Book A Test Drive</button>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <img src="IMG/ICON  3.webp" alt="" class="img-fluid">
          <h5>Build Yor Own</h5>
          <button class="mt-4 bt">Build You Own</button>
        </div>
      </div>
    </div>


    <!-- <div class="carousel-item">
        <div class="row">
          <div class="col-md-6">
            <img src="IMG/7.jpg" alt="Your Image" class="img-fluid">
          </div>
          <div class="col-md-6">
            <p>Your text goes here.</p>
          </div>
        </div>
      </div> -->

    <!-- <div class="mt-3 j1">
        <h1 class="d1">THIS IS FORWARDISM:</h1>
        <H1 class="d2">THE 7</H1> 
        <button  class="bt1 mt-2">Know More </button>
      </div> -->


    <!-- <div class="has-bg-img">

        <img class="bg-img" src="IMG/7.jpg" alt="..." width="100%">
        <div class="overlay-text">
          <p>Your text goes here</p>
      </div>
        

      </div> -->

    <!-- <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-md-12 p-0">
                <div class="position-relative">
                    <img src="IMG/7.jpg" alt="Background Image" class="img-fluid">
                    <div class="position-absolute top-50 start-10 translate-start text-container dls">
                        <h2>THIS IS FORWARDISM:</h2>
                        <H1>THE 7</H1>

                    </div>
                </div>
            </div>
        </div>
    </div> -->




    <!-- <div class="card text-white mt-3">
        <img class="card-img-top" src="IMG/7.jpg" alt="Title">
        <div class="card-img-overlay">
          <div class="card-body d1">
              <h2>THIS IS FORWARDISM:</h2>
              <h2>The 7</h2>
          </div>
        </div>
      </div> -->



    <div id="carouselExampleCaptions" class="carousel slide mt-5">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="IMG/7.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h2>THIS IS FORWARDISM:</h2>
            <h2>The 7</h2>
            <button class="kbtn">Konw More</button>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="row justify-content-center align-items-center g-2  mt-4">
        <div class="col-sm-12 col-md-6 col-lg-6"><img src="IMG/I.webp" alt="" class="img-fluid"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h5 class="h">B M W ELECTRIFIED </h5>
          <h2 class="e">The Joy OF ELECTRIC DRIVING</h2>
          <p class="pp">100 % electric. 100 % driving pleasure. 100 % BMW. Experience an entirely new sensation of sheer
            driving pleasure.</p>
          <button class="bb">
            <bold>Know More</bold>
          </button>
        </div>

      </div>
      <div class="row justify-content-center align-items-center g-2  mt-4">
        <div class="col-sm-12 col-md-6 col-lg-6"><img src="IMG/B2.webp" alt="" class="img-fluid"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <h5 class="h">BMW FINANCIAL SERVICES</h5>
          <h2 class="e">BMW Special Offers</h2>
          <p class="pp">Check out a variety of BMW finance offers available across the BMW range..</p>
          <button class="bb">
            <bold>Know More</bold>
          </button>
        </div>

      </div>
    </div>



    <?php 
    include("footer.php");
    
    ?>













    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"></script>
</body>

</html>