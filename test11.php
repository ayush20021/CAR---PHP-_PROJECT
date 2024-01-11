<!doctype html>
<html lang="en">

<head>
    <title>Model Configuration</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        @import url("https://db.onlinewebfonts.com/c/ac95f91c55cc591ecf37a4d136ff8031?family=BMWTypeNext+Pro+Regular");



        body {
            font-family: "BMWTypeNext Pro Regular";
            color: black;

        }

        .dropdown-container {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 10px;
            border-radius: 5px;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-container:hover .dropdown-content {
            display: block;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .h {

            padding-left: 6rem;
        }

        .bb {
            padding-left: 6rem;

        }


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
    <header>
        <?php

        include("header.php");

        $name=$_GET["name"];
      


        ?>
    </header>
    <main>

        <div class="container mt-4">
            <h3>ENGINS</h3>
        </div>


        <div class="container mt-1">

            <img src="IX1/1.webp" alt="" class="img-fluid" id="image1">

        </div>
        <div class="container border border-secondary border-2 p-4 mt-3  bg-light">

            <h5>iX1 xDrive30 M Sport</h5>
            <p>ELECTRIC</p>
            <h5>FORM RS : 6690000</h5>
            <bold>
                <p>Transmission</p>
            </bold>
            <p>MANUAL</p>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed bg-light shadow-none" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            Transmmision & Techinical Data
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse bg-light"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <p>FUEL TYPE</p>
                            <h4>ELECTRIC</h4>
                            <p>Transmission </p>
                            <h4>Manual</h4>
                            <p>System Perfomace</p>
                            <h4>200 kW (272 PS) </h4>
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <div class="container mt-3">
            <h3>MODEL VARIENT</h3>
            <p>Choose your desired model varient</p>
        </div>

        <div class="container mt-1">

            <img src="IX1/1.webp" alt="" class="img-fluid" id="image2">

        </div>
        <div class="container border border-secondary border-2 p-4 mt-3  bg-light">

            <h5>BASIC LINE</h5>
            <p>ELECTRIC</p>
            <h5>FORM RS : 6690000</h5>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed bg-light shadow-none" type="button"
                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                            aria-controls="flush-collapseOne">
                            KNOW MORE
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse bg-light"
                        aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            MODEL IX - FORM RS : 6690000 (BASIC LINE)
                        </div>
                    </div>
                </div>



            </div>

        </div>
        <div class="container mt-3">
            <h3>EXTERIOR</h3>
            <p>PAINT</p>
        </div>

        <div class="container mt-1">

            <img src="IX1/2.webp" alt="" class="img-fluid" id="image3">

        </div>
        <div class="container border border-secondary border-2 p-4 mt-3  bg-light">

            <h5>Paint Options</h5>
            <button class="btn  mt-3" onclick="changeImages()">Strom Bay Metalic - ₹ 25,000</button>

            <button class="btn  mt-3" onclick="changeImages1()">Silver Space Metalic ₹ 0</button>



        </div>

        <div class="container mt-3">
            <h3>RIMS</h3>
        </div>

        <div class="container mt-1">

            <img src="IX1/3.webp" alt="" class="img-fluid" id="image4">

        </div>
        <div class="container border border-secondary border-2 p-4 mt-3  bg-light">

            <h5>18" Alloy wheels</h5>
            <p class="mt-3">18" M light alloy wheels Double-spoke 838 M Bicolour ₹ 0 </p>
        </div>

        <hr>

        <div class="container mt-3">
            <h3>INTERIOR</h3>
        </div>

        <!-- <div class="container mt-1">

            <img src="IX1/MI0.webp" alt="" class="img-fluid" id="imagei1">

        </div>
        <div class="container border border-secondary border-2 p-4 mt-3  bg-light">

            <h5>Paint Options</h5>
            <button class="btn  mt-3" onclick="changeImagesIn()">Venganza Perforated Mocha </button>

            <button class="btn  mt-3" onclick="changeImagesIN2()"></button>



        </div> -->
        <div class="container bg-light">
            <div class="row justify-content-center align-items-center g-2  mt-4">
                <div class="col-sm-12 col-md-6 col-lg-6"><img src="IX1/AI0.webp" alt="" class="img-fluid" id="imagei1">
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h5 class="h">Venganza Perforated Mocha </h5>

                    <button class="btn  mt-3 bb" onclick="changeImagesIn()">Venganza Perforated Mocha - ₹30000 </button>

                    <hr>
                    <h5 class="h">Venganza Perforated Oyster </h5>

                    <button class="btn  mt-3 bb" onclick="changeImagesIN2()"> Venganza Perforated Oyster - ₹0</button>


                </div>

            </div>
        </div>

        <h3 class='text-center my-3'>Send A Resquest to the Dealer</h3>
        <form action="addreq.php" method="post">
            <div class="container my-5">
                <div class="row">

                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <input type="text" class="form-control  shadow-none" placeholder="First Name"
                           name="fname">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <input type="text" class="form-control  shadow-none" placeholder="Last Name"
                        name="lname">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <input type="email" class="form-control  shadow-none" placeholder="Email"
                        name="ename">
                    </div>
                </div>
                <div class="row mt-5 ">
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <input type="number" class="form-control  shadow-none" placeholder="Number"
                        name="number">
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <input type="text" class="form-control  shadow-none" placeholder="Preferd Model"
                        value="<?php echo"$name"?>" disabled>
                        <input type="hidden" class="form-control  shadow-none" placeholder="Preferd Model"
                        name="model" value="<?php echo"$name"?>">
                    </div><br>
                    <div class="col-sm-12 col-md-4 col-lg-4">
                        <div class="mb-3 ">

                            <select class="form-select  shadow-none form-control" name="city" id="">
                                <option selected>select city</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Delhi">Delhi</option>

                            </select>
                        </div>

                    </div>

                    
                    
                </div>
                <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Submit
                    </button>

            </div>

        </form>












    </main>
    <footer>
        <footer class="d-flex align-items-center mt-4">
            <div class="container-fluid footerC mt-5">
                <div class="row mb-1 justify-content-center">
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-sm-4 mb-md-5 mb-lg-5 col-xl-2 col-xxl-2">
                        <h3>CONTACT</h3>
                        <div>Find a Dealer</div>
                        <div>Request a Test Drive</div>
                        <div>Careers</div>
                        <div>Contact Us</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-sm-4 mb-md-5 mb-lg-5 col-xl-2">
                        <h3>QUICK LINKS</h3>
                        <div>Build your BMW</div>
                        <div>BMW Financial Services</div>
                        <div>EMI Calculator</div>
                        <div>BMW Premium Selection (Used Cars)</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-sm-4 mb-md-5 mb-lg-5 col-xl-2">
                        <h3>EXPERIENCE BMW</h3>
                        <div>BMW Group</div>
                        <div>BMW Excellence Club</div>
                        <div>Awards and Recognition</div>
                        <div>BMW Motorrad</div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 mb-sm-4 mb-md-5 mb-lg-5 col-xl-2">
                        <h3>LEGAL</h3>
                        <div>Legal Disclaimer/Imprint</div>
                        <div>Privacy Policy</div>
                    </div>
                </div>
            </div>
        </footer>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script>
        // JavaScript to adjust container height on dropdown toggle
        function changeImages() {
            // Get image elements by ID
            var image1 = document.getElementById('image1');
            var image2 = document.getElementById('image2');
            var image3 = document.getElementById('image3');
            var image4 = document.getElementById('image4');

            // Change the src attribute
            image1.src = 'IX1/B1.webp';
            image2.src = 'IX1/B1.webp';
            image3.src = 'IX1/B2.webp';
            image4.src = 'IX1/B3.webp';
        }

        function changeImages1() {
            // Get image elements by ID
            var image1 = document.getElementById('image1');
            var image2 = document.getElementById('image2');
            var image3 = document.getElementById('image3');
            var image4 = document.getElementById('image4');


            // Change the src attribute
            image1.src = 'IX1/1.webp';
            image2.src = 'IX1/1.webp';
            image3.src = 'IX1/2.webp';
            image4.src = 'IX1/3.webp';
        }
        function changeImagesIn() {
            // Get image elements by ID
            var image1 = document.getElementById('imagei1');


            // Change the src attribute
            imagei1.src = 'IX1/MI0.webp';

        }
        function changeImagesIN2() {
            // Get image elements by ID
            var image1 = document.getElementById('imagei1');


            // Change the src attribute
            imagei1.src = 'IX1/AI0.webp';

        }
    </script>
</body>

</html>