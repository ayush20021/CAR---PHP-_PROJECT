<?php
$receivedData = $_GET['data'];
// echo $receivedData; // Outputs: Hello World
?>



<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Bootstrap Gallery - Mercury Admin Template</title>

		<!-- Meta -->
		<meta name="description" content="Marketplace for Bootstrap Admin Dashboards" />
		<meta name="author" content="Bootstrap Gallery" />
		<link rel="canonical" href="https://www.bootstrap.gallery/">
		<meta property="og:url" content="https://www.bootstrap.gallery">
		<meta property="og:title" content="Admin Templates - Dashboard Templates | Bootstrap Gallery">
		<meta property="og:description" content="Marketplace for Bootstrap Admin Dashboards">
		<meta property="og:type" content="Website">
		<meta property="og:site_name" content="Bootstrap Gallery">
		<link rel="shortcut icon" href="assets/images/favicon.svg" />

		<!-- *************
			************ CSS Files *************
		************* -->
		<link rel="stylesheet" href="assets/fonts/bootstrap/bootstrap-icons.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />
	</head>

	<body>
		<!-- Container start -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-4 col-lg-5 col-sm-6 col-12">
					<form action="reset.php" method="post">
						<div class="border border-dark rounded-2 p-4 mt-5">
							<div class="login-form">
							
								<h5 class="fw-light mb-5 lh-2">
									You will receve the OTP if entered Email is correct .
								</h5>
								
                                <div class="mb-3">
									<label class="form-label">Enter OTP</label>
									<input type="number" class="form-control" placeholder="Enter your email" name="otp" />
								</div>

                                <div class="mb-3">
									<label class="form-label">Enter  New Password</label>
									<input type="text" class="form-control" name="p" />
								</div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Conform Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="cpass"
                                    />
                                    
                                </div>
                                <input type="hidden" class="form-control"  name="ID" value="<?php echo"{$receivedData}"?>"/>
								<div class="d-grid py-3 mt-4">
									<button type="submit" class="btn btn-lg btn-primary">
										Submit
									</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- Container end -->
	</body>

</html>