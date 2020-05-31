<?php
require_once('core/dbconfig.php');
?>
<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
<head>

        <meta charset="utf-8">
        <meta keywords="Coronavirus, Emergency Contact, contact numbers, SARS-nCoV 2, Covi-19, Corona, infection, news ">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		<title>Coronavirus-emergency.com</title>
		
		<!-- Favicons -->
		<link type="image/x-icon" href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<?php include('inc/header.php')?>
			<!-- /Header -->

			<!-- Home Banner -->
			<section class="section section-search">
				<div class="container-fluid">
					<div class="banner-wrapper">
						<div class="banner-header text-center">
							<h1>Search Doctor, Make an Appointment</h1>
							<p>Discover the best doctors, clinic & hospital the city nearest to you.</p>
						</div>
                         
						<!-- Search -->
						<div class="search-box">
							<form action="templateshub.net">
								<div class="form-group search-location">
									<input type="text" class="form-control" placeholder="Search Location">
									<span class="form-text">Based on your Location</span>
								</div>
								<div class="form-group search-info">
									<input type="text" class="form-control" placeholder="Search Doctors, Clinics, Hospitals, Diseases Etc">
									<span class="form-text">Ex : Dental or Sugar Check up etc</span>
								</div>
								<button type="submit" class="btn btn-primary search-btn"><i class="fas fa-search"></i> <span>Search</span></button>
							</form>
						</div>
						<!-- /Search -->
						
					</div>
				</div>
			</section>
			<!-- /Home Banner -->
			  
			<!-- Clinic and Specialities -->
			<section class="section section-specialities">
				<div class="container-fluid">
					<div class="section-header text-center">
						<h2>Coronavirus Emergency Contacts - Country List</h2>
						<p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> 		<?php echo 'PHP is very simple'; ?>

					</div>
					<div class="row justify-content-center">
						<div class="col-md-12">
							<!-- Slider -->
								<!-- Page Content -->
			<div class="content">
					

					<div class="container-fluid">

						<div class="col-md-7 col-lg-8 col-xl-9">

							<div class="appointments">
				
								<!-- Appointment List -->
											
				 		<?php if (isset($_GET['pageno'])){
				 				$pageno = $_GET['pageno'];
				 				// $pageno = mysqli_escape_string(htmlentities($db,$pageno));
				 		}else{
				 			$pageno = 1;
				 		}
				 		$no_of_records_per_page = 10;
						$offset = ($pageno - 1) * $no_of_records_per_page;
						$total_pages_sql = "SELECT COUNT(*) FROM countries";
					$result = $db->query($total_pages_sql);
					$total_rows = mysqli_fetch_array($result)[0];
					$total_pages = ceil($total_rows / $no_of_records_per_page);					

				 			$data = $db->query("SELECT * FROM countries LIMIT $offset, $no_of_records_per_page");?>

<!-- 					<?php if($result->num_rows > 0){ ?>
 -->						<?php while($row = mysqli_fetch_array($data)){ ?>
								<div class="appointment-list">

									<div class="profile-info-widget">

										<a href="patient-profile.html" class="booking-doc-img">
											<img src="<?php echo $row["flag"];  ?>" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3><a href="patient-profile.html"><?php echo $row["name"]; ?></a></h3>
											<div class="patient-details">
												<h5><i class="far fa-clock"></i> 14 Nov 2019, 10.00 AM</h5>
												<h5><i class="fas fa-map-marker-alt"></i> Newyork, United States</h5>
												<h5><i class="fas fa-envelope"></i> richard@example.com</h5>
												<h5 class="mb-0"><i class="fas fa-phone"></i> <?php echo $row["emergency_contact"]; ?></h5>
											</div>
											
										</div>
									</div>
									
								</div>
								<?php } 
								}
								mysqli_close($db);

								?> 
								<!-- /Appointment List -->
							</div>
								<ul class="pagination pagination-lg">
								<li><a href="?pageno=1" class="page-link">First</a></li>
								<li class="page-link <?php if($pageno <= 1){ echo 'disabled'; }?>">
									<a href="<?php if($pageno <= 1){ echo '#'; } else {echo "?pageno=".($pageno-1); }?>">Prev</a>
								</li>
								<li class="page-link <?php if($pageno >= $total_pages){ echo 'disabled'; }?>">
									<a href="<?php if($pageno >= $total_pages){ echo '#'; } else {echo "?pageno=".($pageno+1); }?>">Next</a>
								</li>

								<li class="page-link"><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
								</ul>					
					</div>
				</div>
			</div>	

			<!-- /Page Content -->
							
		</div>
	</div>
</div>


</section>	 
			
			
		   <!-- Brief info on Coronavirus... Infographics -->
		   <section class="section section-features">
				<div class="container-fluid">
					<h3 class="text-center">Brief Information on Coronavirus</h3>
				   <div class="row">
						<div class="col-md-4 features-img">
							<img src="assets/img/covid/who-hands-blue-1.jpg" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-4 features-img">
							<img src="assets/img/covid/covid-2.png" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-4 features-img">
							<img src="assets/img/covid/covid-3.png" class="img-fluid" alt="Feature">
						</div>
												
						<div class="col-md-4 features-img">
							<img src="assets/img/covid/covid-6.png" class="img-fluid" alt="Feature">
						</div>
						<div class="col-md-4 features-img">
							<img src="assets/img/covid/covid-7.png" class="img-fluid" alt="Feature">
						</div>
					</div>
				</div>
			</section>		
			<!-- Availabe Features -->
			
			<!-- Footer -->
			<?php include('inc/footer.php'); ?>
		   
	   </div>
	   <!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Slick JS -->
		<script src="assets/js/slick.js"></script>
		
		<!-- Custom JS -->
		<script src="assets/js/script.js"></script>
		
	</body>

<!-- doccure/index.html  30 Nov 2019 04:12:03 GMT -->
</html>