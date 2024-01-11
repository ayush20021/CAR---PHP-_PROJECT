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

		<!-- *************
			************ Vendor Css Files *************
		************ -->

		<!-- Scrollbar CSS -->
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
	</head>

	<body>

	<?php
	session_start();
	if (!isset($_SESSION["username"])) {
		header("Location: login.php");
		exit();
	}


	
	include('connection.php');
	$query = "SELECT * FROM bmw_models11";
	$result=mysqli_query($conn,$query);
	$row1=0;
	while($row = mysqli_fetch_assoc($result)) {
		$row1++;
	}
	mysqli_close($conn);
	
	?>

	<?php 
	include('connection.php');
	$query = "SELECT * FROM `sales`";
	$result2=mysqli_query($conn,$query);
	echo"ok";
	$data2=0;
	while($row = mysqli_fetch_assoc($result2)) {
		$data2++;
	}
	mysqli_close($conn);
	
	?>

<?php
// Assuming you already have a $conn variable for your database connection

// Your SQL query
include('connection.php');

$sql = "SELECT COUNT(DISTINCT Customer_name) AS TotalCustomers FROM sales";

// Execute the query
$result = mysqli_query($conn, $sql);
$totalCustomers =0;
// Check if the query was successful
if ($result) {
    // Fetch the result as an associative array
    $row = mysqli_fetch_assoc($result);

    // Store the total number of customers in a PHP variable
    $totalCustomers = $row['TotalCustomers'];

    // Output or use the variable as needed
    echo "Total number of unique customers: " . $totalCustomers;
} else {
    // Handle the case where the query failed
    echo "Error executing query: " . mysqli_error($conn);
}

// Close the database connection
$sqlModelCount = "SELECT COUNT(DISTINCT Model_Name) AS TotalModels FROM sales";

// Execute the query
$resultModelCount = mysqli_query($conn, $sqlModelCount);
$totalModels=0;
// Check if the query was successful
if ($resultModelCount) {
    // Fetch the result as an associative array
    $rowModelCount = mysqli_fetch_assoc($resultModelCount);

    // Store the total number of unique models in a PHP variable
    $totalModels = $rowModelCount['TotalModels'];

    // Output or use the variable as needed
    echo "Total number of unique models: " . $totalModels;
} else {
    // Handle the case where the query failed
    echo "Error executing query: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
include('testing.php');






?>

		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				<nav id="sidebar" class="sidebar-wrapper">

					<!-- App brand starts -->
					<div class="app-brand px-3 py-3 d-flex align-items-center">
						
					</div>
					<!-- App brand ends -->

					<!-- Sidebar profile starts -->
					<div class="sidebar-user-profile">
						<img src="assets/images/PXL_20230820_130353508.PORTRAIT~3.jpg" class="profile-thumb rounded-circle p-2 d-lg-flex d-none"
							alt="Bootstrap Gallery" />
						<h5 class="profile-name lh-lg mt-2 text-truncate">Ayush Kumar</h5>
						<ul class="profile-actions d-flex m-0 p-0">
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-instagram"></i>
									<span class="count-label"></span>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-facebook"></i>
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									<i class="bi bi-youtube"></i>
								</a>
							</li>
						</ul>
					</div>
					<!-- Sidebar profile ends -->

					<!-- Sidebar menu starts -->
					<div class="sidebarMenuScroll">
						<ul class="sidebar-menu">
							<li class="active current-page">
								<a href="index.html">
									<i class="bi bi-pie-chart"></i>
									<span class="menu-text">Dashboard</span>
								</a>
							</li>

							<li class="treeview">
								<a href="#!">
									<i class="bi bi-upc-scan"></i>
									<span class="menu-text">Login/Signup</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="signup.html">Signup</a>
									</li>
									<li>
										<a href="forgot-password.html">Forgot Password</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="page-not-found.html">
									<i class="bi bi-exclamation-diamond"></i>
									<span class="menu-text">Page Not Found</span>
								</a>
							</li>
							<li>
								<a href="maintenance.html">
									<i class="bi bi-exclamation-octagon"></i>
									<span class="menu-text">Maintenance</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="bi bi-car-front"></i>
									<span class="menu-text">Model Mangement</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="addmodels.html">Add Models</a>
									</li>
									
									<li>
										<a href="Managemodel.php">Manage</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Sidebar menu ends -->

				</nav>
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container">

					<!-- App header starts -->
					<div class="app-header d-flex align-items-center">

						<!-- Toggle buttons start -->
						<div class="d-flex">
							<button class="btn btn-outline-primary me-2 toggle-sidebar" id="toggle-sidebar">
								<i class="bi bi-chevron-left fs-5"></i>
							</button>
							<button class="btn btn-outline-primary me-2 pin-sidebar" id="pin-sidebar">
								<i class="bi bi-chevron-left fs-5"></i>
							</button>
						</div>
						<!-- Toggle buttons end -->

						<!-- App brand sm start -->
						<div class="app-brand-sm d-md-none d-sm-block">
							<a href="index.html">
								<img src="assets/images/logo-sm.svg" class="logo" alt="Bootstrap Gallery">
							</a>
						</div>
						<!-- App brand sm end -->

						<!-- App header actions start -->
						<div class="header-actions">
							<div class="d-lg-block d-none me-2">

								<!-- Search container start -->
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search" />
									<button class="btn btn-outline-primary" type="button">
										<i class="bi bi-search fs-5"></i>
									</button>
								</div>
								<!-- Search container end -->

							</div>
							<div class="dropdown ms-3">
								<a class="dropdown-toggle d-flex p-2 py-3" href="#!" role="button" data-bs-toggle="dropdown"
									aria-expanded="false">
									<i class="bi bi-grid fs-2 lh-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end shadow">
									<!-- Row start -->
									<div class="d-flex gap-2 m-2">
										<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
											<img src="assets/images/brand-behance.svg" class="img-3x" alt="Admin Themes" />
										</a>
										<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
											<img src="assets/images/brand-gatsby.svg" class="img-3x" alt="Admin Themes" />
										</a>
										<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
											<img src="assets/images/brand-google.svg" class="img-3x" alt="Admin Themes" />
										</a>
										<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
											<img src="assets/images/brand-bitcoin.svg" class="img-3x" alt="Admin Themes" />
										</a>
										<a href="javascript:void(0)" class="g-col-4 p-2 border rounded-2">
											<img src="assets/images/brand-dribbble.svg" class="img-3x" alt="Admin Themes" />
										</a>
									</div>
									<!-- Row end -->
								</div>
							</div>
							<div class="dropdown ms-3">
								<a class="dropdown-toggle d-flex p-2 py-3" href="#!" role="button" data-bs-toggle="dropdown"
									aria-expanded="false">
									<i class="bi bi-bell fs-2 lh-1"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end shadow">
									<div class="dropdown-item">
										<div class="d-flex py-2 border-bottom">
											<img src="assets/images/user.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h5 class="mb-1 fw-semibold">Sophie Michiels</h5>
												<p class="mb-1">Membership has been ended.</p>
												<p class="small m-0 text-primary">Today, 07:30pm</p>
											</div>
										</div>
									</div>
									<div class="dropdown-item">
										<div class="d-flex py-2 border-bottom">
											<img src="assets/images/user2.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h5 class="mb-1 fw-semibold">Sophie Michiels</h5>
												<p class="mb-1">Congratulate, James for new job.</p>
												<p class="small m-0 text-primary">Today, 08:00pm</p>
											</div>
										</div>
									</div>
									<div class="dropdown-item">
										<div class="d-flex py-2">
											<img src="assets/images/user1.png" class="img-4x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h5 class="mb-1 fw-semibold">Sophie Michiels</h5>
												<p class="mb-2">Lewis added new schedule release.</p>
												<p class="small m-0 text-primary">Today, 09:30pm</p>
											</div>
										</div>
									</div>
									<div class="border-top py-2 px-3 text-end">
										<a href="javascript:void(0)">View all</a>
									</div>
								</div>
							</div>
							<div class="dropdown ms-3">
								<a id="userSettings" class="dropdown-toggle d-flex py-2 align-items-center text-decoration-none"
									href="#!" role="button" data-bs-toggle="dropdown" aria-expanded="false">
									<span class="d-none d-md-block me-2">Ayush Kumar</span>
									<img src="assets/images/PXL_20230820_130353508.PORTRAIT~3.jpg" class="rounded-circle img-3x" alt="Bootstrap Gallery" />
								</a>
								<div class="dropdown-menu dropdown-menu-end shadow">
									<a class="dropdown-item d-flex align-items-center" href="profile.html"><i
											class="bi bi-person fs-4 me-2"></i>Profile</a>
									<a class="dropdown-item d-flex align-items-center" href="settings.html"><i
											class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
									<a class="dropdown-item d-flex align-items-center" href="login.html"><i
											class="bi bi-escape fs-4 me-2"></i>Logout</a>
								</div>
							</div>
						</div>
						<!-- App header actions end -->

					</div>
					<!-- App header ends -->

					<!-- App hero header starts -->
					<div class="app-hero-header">
						<h3 >Hello Ayush,</h3>
						
					</div>
					<!-- App Hero header ends -->

					<!-- App body starts -->
					<div class="app-body">
						<!-- Row starts -->
						<div class="row">
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card shadow mb-4 p-2 rounded-4">
									<div class="card-body d-flex align-items-center">
										<div class="icon-box lg shadow-solid-rb border border-dark p-4 rounded-4 me-3">
											<i class="bi bi-car-front-fill fs-1 lh-1 text-primary"></i>
										</div>
										<div class="m-0">
											<h5 class="fw-light mb-1">Models</h5>
											<h2 class="m-0 text-primary"><?php echo"{$totalModels}"?></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card shadow mb-4 p-2 rounded-4">
									<div class="card-body d-flex align-items-center">
										<div class="icon-box lg shadow-solid-rb border border-dark p-4 rounded-4 me-3">
											<i class="bi bi-bag fs-1 lh-1 text-primary"></i>
										</div>
										<div class="m-0">
											<h5 class="fw-light mb-1">Orders</h5>
											<h2 class="m-0 text-primary"><?php echo"{$data2}"?></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card shadow mb-4 p-2 rounded-4">
									<div class="card-body d-flex align-items-center">
										<div class="icon-box lg shadow-solid-rb border border-dark p-4 rounded-4 me-3">
											<i class="bi bi-emoji-laughing fs-1 lh-1 text-primary"></i>
										</div>
										<div class="m-0">
											<h5 class="fw-light mb-1">Customers</h5>
											<h2 class="m-0 text-primary"><?php echo"{$totalCustomers}"?></h2>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6 col-12">
								<div class="card shadow mb-4 p-2 rounded-4">
									<div class="card-body d-flex align-items-center">
										<div class="icon-box lg shadow-solid-rb border border-dark p-4 rounded-4 me-3">
											<i class="bi bi-star fs-1 lh-1 text-primary"></i>
										</div>
										<div class="m-0">
											<h5 class="fw-light mb-1">Reviews</h5>
											<h2 class="m-0 text-primary">95%</h2>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row ends -->

						<!-- Row starts -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Yearly Sales</h5>
									</div>
									<div class="card-body p-4">
									<<div id="sales"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-3 col-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Sales</h5>
									</div>
									<div class="card-body p-4">
										<div class="text-center my-4">
											<h1>
												689
												<i class="bi bi-arrow-up-right-circle-fill text-success fs-3"></i>
											</h1>
											<p class="fw-light m-0">18% higher than last month</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Revenue</h5>
									</div>
									<div class="card-body p-4">
										<div class="text-center my-4">
											<h1>
												992
												<i class="bi bi-arrow-up-right-circle-fill text-success fs-3"></i>
											</h1>
											<p class="fw-light m-0">21% higher than last month</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Payments</h5>
									</div>
									<div class="card-body p-4">
										<div class="text-center my-4">
											<h1>
												864
												<i class="bi bi-arrow-up-right-circle-fill text-success fs-3"></i>
											</h1>
											<p class="fw-light m-0">16% higher than last month</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3 col-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Income</h5>
									</div>
									<div class="card-body p-4">
										<div class="text-center my-4">
											<h1>
												598
												<i class="bi bi-arrow-down-right-circle-fill text-danger fs-3"></i>
											</h1>
											<p class="fw-light m-0">24% higher than last month</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-xxl-12">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Top Selling Models</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered align-middle m-0">
												<thead>
													<tr>
														<th>Product</th>
														<th>Link</th>
														<th>Post Date</th>
														
														<th>Rating</th>
														<th>Views</th>
														<th>Engagement</th>
														<th>Growth</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																
																<div class="d-flex flex-column ms-3">
																	<p class="m-0"><?php echo"{$firstModel}"?></p>
																	
																</div>
															</div>
														</td>
														<td>
															<a href="#!" class="text-danger">#L10010021</a>
														</td>
														<td>02/12/2022</td>
														
														
														<td>
															<div class="rate2 rating-stars"></div>
														</td>
														<td>
															<div id="sparkline1"></div>
														</td>
														<td>
															<div class="d-flex gap-1">
																<span class="badge bg-primary">17</span>
																<span class="badge bg-danger"><i class="bi bi-caret-down-fill"></i>
																	13.5%</span>
															</div>
														</td>
														<td>
															<p class="m-0">Higher than last week</p>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																
																<div class="d-flex flex-column ms-3">
																	<p class="m-0"><?php echo"{$secondModel}"?></p>
																	
																</div>
															</div>
														</td>
														<td>
															<a href="#!" class="text-danger">#L10010065</a>
														</td>
														<td>07/12/2022</td>
														
														
														<td>
															<div class="rate5 rating-stars"></div>
														</td>
														<td>
															<div id="sparkline2"></div>
														</td>
														<td>
															<div class="d-flex gap-1">
																<span class="badge bg-primary">65</span>
																<span class="badge bg-info"><i class="bi bi-caret-down-fill"></i>
																	22.3%</span>
															</div>
														</td>
														<td>
															<p class="m-0">Higher than last week</p>
														</td>
													</tr>
													<tr>
														<td>
															<div class="d-flex flex-row align-items-center">
																
																<div class="d-flex flex-column ms-3">
																	<p class="m-0"><?php echo"{$thirdModel}"?></p>
																	
																</div>
															</div>
														</td>
														<td>
															<a href="#!" class="text-danger">#L10010098</a>
														</td>
														<td>09/12/2022</td>
														
														
														<td>
															<div class="rate4 rating-stars"></div>
														</td>
														<td>
															<div id="sparkline3"></div>
														</td>
														<td>
															<div class="d-flex gap-1">
																<span class="badge bg-primary">81</span>
																<span class="badge bg-warning"><i class="bi bi-caret-down-fill"></i>
																	18.4%</span>
															</div>
														</td>
														<td>
															<p class="m-0">Lower than last week</p>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->

						<!-- Row start -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Query</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-3">
											<ul class="list-unstyled m-0">



												<?php 
												include('connection.php');
												$sql="select * from querys ORDER BY `ID` DESC";
												$result = mysqli_query($conn, $sql);
												while ($row = mysqli_fetch_assoc($result)) {
													echo"
													<ul class='list-unstyled m-0'>
												<li class='d-flex'>
													
													<div class='ms-3 mb-4'>
														
														<h6 class='mb-2 fw-bold'>{$row['Name']}</h6>
														<p>
															{$row['Query']}
														</p>
														<p> Email ID:
														{$row['Email']}
														</p>

														<p>
														Last Reply :
														{$row['Last_Reply']}
														</p>
														<a href='reply.php?id={$row['ID']}'class='mb-3 badge border border-info text-info'>Reply</a>
													</div>
												</li>
											</ul>
													
													";

												}
												?>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-lg-6">
								<div class="card shadow mb-4">
									<div class="card-header">
										<h5 class="card-title">Customer Requests</h5>
									</div>
									<div class="card-body">
										<div class="scroll350 my-3">
											<ul class="list-unstyled m-0">



												<?php 
												include('connection.php');
												$sql="select * from modelquery ORDER BY `ID` DESC";
												$result = mysqli_query($conn, $sql);
												while ($row = mysqli_fetch_assoc($result)) {
													echo"
													<ul class='list-unstyled m-0'>
												<li class='d-flex'>
													
													<div class='ms-3 mb-4'>
														
														<h5 class='mb-2 fw-bold'>{$row['first_name']}</h5>

														<h5>Model Name : {$row['preferred_model']}</h5>
														
														<p> Email ID:
														{$row['email']}
														</p>

														<p>Mobile No:
														
														{$row['number']}
														
														</p>
														<p>
														City:
														
														{$row['city']}
														
														</p>
													</div>
												</li>
											</ul>
													
													";

												}
												?>
												
											</ul>
										</div>
									</div>
								</div>
							</div>
							
							
						</div>
						<!-- Row end -->

					</div>
					<!-- App body ends -->

					<!-- App footer start -->
					<div class="app-footer">
						<span>© Bootstrap Gallery 2023</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
		



		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		
		<!-- <script src="assets/vendor/apex/apexcharts.min.js"></script> -->
		<script src="assets/vendor/apex/custom/dash1/sales.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sparkline.js"></script>
		<script src="assets/vendor/apex/custom/dash1/sparkline2.js"></script>

		<!-- Rating -->
		<script src="assets/vendor/rating/raty.js"></script>
		<script src="assets/vendor/rating/raty-custom.js"></script>

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
	</body>

</html>