<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="utf-8" />
	<title>Teacher</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="description" content="Education" />
	<meta name="keywords" content="Education" />
	<meta name="author" content="" />
	<meta name="MobileOptimized" content="320" />
	<!--Template style -->
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/fonts.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/nice-select.css" />
	<link rel="stylesheet" type="text/css" href="css/settings.css" />
	<link rel="stylesheet" type="text/css" href="css/book.css" />
	<link rel="stylesheet" type="text/css" href="css/swiper.css" />
	<link rel="stylesheet" type="text/css" href="css/venobox.css" />
	<link rel="stylesheet" type="text/css" href="css/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<link rel="stylesheet" type="text/css" href="css/style_II.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="css/responsive_II.css" />
	<!--favicon-->
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
</head>

<body>

	<!--  logo header wrapper Start -->
	<?php include "includes/logo_header.php" ?>
	<a id="back2Top" title="Back to top" href="#">&#10148;</a>
	<!--  logo header wrapper End -->

	<!-- inner header wrapper start -->
	<div class="page_title_section float_left">
		<div class="page_header">
			<div class="container">
				<div class="row">
					<!-- section_heading start -->
					<div class="col-lg-12 col-md-12 col-12 col-sm-12">
						<h1>Our Teacher </h1>
					</div>
					<div class="col-lg-12 col-md-12 col-12 col-sm-12">
						<div class="sub_title_section">
							<ul class="sub_title">
								<li> <a href="index.php"> Home </a> &nbsp;&nbsp;&nbsp; &gt; &nbsp;&nbsp;</li>
								<li> <a href="teacher.php"> Our Teacher </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- inner header wrapper end -->

	<!--edu team wrapper Start-->
	<div class="edu_team_main_wrapper edu_team_main_wrapper_inner float_left">
		<div class="container">
			<div class="row">
						<?php
						include_once "Admin/dbconfig.php";
						$sql = $db->query("SELECT * FROM teachers");
						while ($row = $sql->fetch_assoc()) {
						?>
					<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 self_align_center">
						<div class="edu_team_main_box">
							<h3><a href="#"><?php echo $row['name'] ?></a></h3>
							<p><?php echo $row['department'] ?></p>
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-youtube"></i></a>
								</li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
							<div class="edu_team_inner_box">
								<img src="Admin/image/teacher/<?php echo $row['photo'] ?>" alt="img">
							</div>
						</div>
					</div>
				<?php } ?>
				<div class="col-md-12">
					<div class="edu_bottom_btn_wrapper float_left"> <a href="#">Read More</a>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!--edu team wrapper End-->

	<!--edu letter wrapper Start-->
	<div class="edu_letter_main_wrapper float_left">
		<div class="container">
			<div class="edu_left_envo">
				<img src="images/innn.png" alt="img">
				<h3>Sign up for Newsletter</h3>
			</div>
			<div class="edu_right_form">
				<input type="text" placeholder="Enter your email">
				<button>Sign Up</button>
			</div>
		</div>
	</div>
	<!--edu letter wrapper End-->

	<!-- footer Wrapper Start -->
	<?php include "includes/footer.php" ?>
	<!-- footer Wrapper End -->

	<!-- JS -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.themepunch.revolution.min.js"></script>
	<script src="js/jquery.themepunch.tools.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.inview.min.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/venobox.min.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.menu-aim.js"></script>
	<script src="js/custom.js"></script>
	<!-- custom js-->
</body>

</html>