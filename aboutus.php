
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="B.css" />
</head>
<style>
  .carousel-caption {
    text-align: left;
    left: 5%;
    right: auto;
    top: 80%;
  }

  .form-control {
    border: none;
    border-radius: 0;
    box-shadow: none;
    border-bottom: 1px solid #000;
  }
</style>

<body>
 <?php 
 
 include("header.php");
 ?>

  <main>
    <div id="carouselExample" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <video autoplay muted loop src="Videos/BBBM.mp4" class="mt-0"></video>
          <div class="carousel-caption d-none d-md-block">
            <h1>THE ULTIMATE DRIVING MACHINE</h1>
            <span>
              <bold>OFFICIAL SAFTY CAR OF MOTOGP INDIA</bold>
            </span>
            <button class="kbt">Konw More</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="my-5">ALL ABOUT BMW</h2>

      <div class="row justify-content-center align-items-center g-3">
        <div class="col-sm1-12 col-md-6 col-lg-6 text-align">
          Bayerische Motoren Werke AG, abbreviated as BMW (German
          pronunciation), is a German multinational manufacturer of luxury
          vehicles and motorcycles headquartered in Munich, Bavaria, Germany.
          The company was founded in 1916 as a manufacturer of aircraft
          engines, which it produced from 1917 to 1918 and again from 1933 to
          1945. Automobiles are marketed under the brands BMW, Mini and
          Rolls-Royce, and motorcycles are marketed under the brand BMW
          Motorrad. In 2017, BMW was the world's fourteenth-largest producer
          of motor vehicles, with 2,279,503 vehicles produced and in 2022 the
          7th largest by revenue. The company has significant motor-sport
          history, especially in touring cars, sports cars, and the Isle of
          Man TT. BMW is headquartered in Munich and produces motor vehicles
          in Germany, Brazil, China, India, Mexico, the Netherlands, South
          Africa, the United Kingdom, and the United States. The Quandt family
          is a long-term shareholder of the company, following investments by
          the brothers Herbert and Harald Quandt in 1959 that saved BMW from
          bankruptcy, with the remaining shares owned by the public. <br />
          The slogan 'The Ultimate Driving Machine' was first used in North
          America in 1974.[34][35] In 2010, this long-lived campaign was
          mostly supplanted by a campaign intended to make the brand more
          approachable and to better appeal to women, 'Joy'. By 2012 BMW had
          returned to 'The Ultimate Driving Machine'
        </div>
        <div class="col-sm1-12 col-md-6 col-lg-6">
          <img src="COVERIMAGE/BMW-Logo.png" alt="" class="img-fluid" />
        </div>
      </div>
      <h4 class="text-center my-5">Contact US</h4>
      <form action="about.php" method="post">
        <div class="container my-5">
          <div class="row">

            <div class="col-sm-12 col-md-4 col-lg-4">
              <input type="text" class="form-control  shadow-none" placeholder="First Name" name="fname">
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
              <input type="text" class="form-control  shadow-none" placeholder="Last Name" name="lname">
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4">
              <input type="email" class="form-control  shadow-none" placeholder="Email" name="ename">
            </div>
          </div>
          
          <div class="row mt-3 ">
            <div class="col">
              <div class="">
                <label for="" class="form-label"></label>
                <textarea class="form-control shadow-none" name="query" id="" rows="1" placeholder="Your Query" ></textarea>
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mt-3">
            Submit
          </button>

        </div>

      </form>

  </main>
  <footer class="bg-dark text-white mt-5">
    <div class="container text-black fc">
      <div class="row justify-content-center align-items-center g-2">
        <div class="col-sm-12 col-md-4 col-lg-3">
          <h5 style="color: rgb(82, 82, 167)">CONTACT</h5>
          <p>Find a Dealer</p>
          <p>Request a Test Drive</p>
          <p>Careers</p>
          <p>Contact Us</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
          <h5 style="color: rgb(82, 82, 167)">QUICK LINKS</h5>
          <p>Build your BMW</p>
          <p>BMW Financial Services</p>
          <p>BMW Safety</p>
          <p>EMI Calculator</p>
          <p>BMW Premium Selection (Used Cars)</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
          <h5 style="color: rgb(82, 82, 167)">EXPERIENCE BMW</h5>
          <p>BMW Group</p>
          <p>BMW Excellence Club</p>
          <p>BMW Motorrad</p>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-3">
          <h5 style="color: rgb(82, 82, 167)">LEGAL</h5>
          <p>Legal Disclaimer/Imprint</p>
          <p>Privacy Policy</p>
        </div>
      </div>
    </div>
    <!-- <div class="container text-black fc">
        <div class="row justify-content-center align-items-center g-2">
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>CONTACT</p>
          </div>
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>QUICK LINKS</p>
          </div>
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>EXPERIENCE BMW</p>
          </div>
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>LEGAL</p>
          </div>
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>Build your BMW</p>
            <p>BMW Financial Services</p>
            <p>BMW Safety</p>
            <p>EMI Calculator</p>
          </div>
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>Build your BMW</p>
            <p>BMW Financial Services</p>
            <p>BMW Safety</p>
            <p>EMI Calculator</p>
            <p>BMW Premium Selection (Used Cars)</p>
          </div>
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>BMW Group</p>
            <p>BMW Excellence Club</p>
            <p>BMW Motorrad</p>
          </div>
          <div class="col-sm-12  col-md-4 col-lg-3 ">
            <p>LEGAL</p>
            <p>Legal Disclaimer/Imprint</p>
            <p>Privacy Policy</p>
          </div>
        </div>

      </div> -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
    crossorigin="anonymous"></script>
</body>

</html>