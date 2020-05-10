<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Online Loan">
	<meta name="keywords" content="Loan, how to apply loan,money">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CashBay</title>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

	<!-- Css Styles -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/nice-select.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/barfiller.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/style.css" type="text/css">


	<style>


		ul{
			font-size: 25px;
			margin: 10px;
		}

		ul li{
			margin: 20px;
			list-style-image: url('http://icons.iconarchive.com/icons/icons8/windows-8/24/Arrows-Redo-icon.png');
		}




	</style>


</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>


<!-- Categories Section Begin -->
<section class="categories spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h3>අයදුම්කරුගේ සම්පුර්ණ විස්තර</h3>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Categories Section End -->

<!-- Most Search Section Begin -->
<section class="most-search spad">
	<div class="container">


		<ul>
			<li> මුල් නම - <?php echo $AllLoanOne[0]['firstname']; ?></li>
			<li> අවසන් නම - <?php echo $AllLoanOne[0]['lastname']; ?></li>
			<li> හැඳුනුම්පත් අංකය - <?php echo $AllLoanOne[0]['nic']; ?></li>
			<li> උපන් දිනය - <?php echo $AllLoanOne[0]['birthday']; ?></li>
			<li> දිස්ත්‍රික්කය - <?php echo $AllLoanOne[0]['dictric']; ?></li>
			<li> නගරය - <?php echo $AllLoanOne[0]['city']; ?></li>
			<li> විදියේ නම - <?php echo $AllLoanOne[0]['lane']; ?></li>
			<li> පවුද්ගලික ලිපිනනය - <?php echo $AllLoanOne[0]['address']; ?></li>
			<li> රැකියා වර්ගය - <?php echo $AllLoanOne[0]['jobType']; ?></li>
			<li> රැකියා ඉස්තානයෙහි ස්තාවර දුරකථන අංකය - <?php echo $AllLoanOne[0]['jobTelNo']; ?></li>
			<li> රැකියා ඉස්තානයෙහි ලිපිනය - <?php echo $AllLoanOne[0]['jobAddress']; ?></li>
			<li> පවුද්ගලික දුරකථන අංකය 1 - <?php echo $AllLoanOne[0]['telone']; ?></li>
			<li> පවුද්ගලික දුරකථන අංකය 2 - <?php echo $AllLoanOne[0]['teltwo']; ?></li>
			<li> ණය මුදල - <?php echo $AllLoanOne[0]['accAmount']; ?></li>
			<li> ගෙවීමට යන දින ගණන - <?php echo $AllLoanOne[0]['staus']; ?></li>
			<li> ගෙවිය යුතු මුළු මුදල  - <?php echo $AllLoanOne[0]['loanAmount']; ?></li>
			<li> බැංකු ගිණුමේ භාවිතා වන නම - <?php echo $AllLoanOne[0]['bankUserName']; ?></li>
			<li> බැංකුවේ නම - <?php echo $AllLoanOne[0]['bankName']; ?></li>
			<li> බැංකුවේ ශාඛාව - <?php echo $AllLoanOne[0]['branch']; ?></li>
			<li> ගිණුම් අංකය - <?php echo $AllLoanOne[0]['bankAccNo']; ?></li>
		</ul>

		<div class="row">

			<div class="col-lg-4 col-md-6">
				<div class="listing__item">
						<img src="<?php echo base_url(); ?>/upload/<?php echo $AllLoanOne[0]['photo']; ?>" alt="" style="width: 100%">

				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="listing__item">
						<img src="<?php echo base_url(); ?>/upload/<?php echo $AllLoanOne[0]['nicSideone']; ?>" alt="" style="width: 100%">

				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="listing__item">
					<img src="<?php echo base_url(); ?>/upload/<?php echo $AllLoanOne[0]['nicSidetwo']; ?>" alt="" style="width: 100%">
				</div>
			</div>

		</div>








	</div>
</section>
<!-- Most Search Section End -->





<!-- Footer Section Begin -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer__copyright">
					<div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer Section End -->
<!-- Js Plugins -->
<script src="<?php echo base_url(); ?>theam/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>theam/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>theam/js/jquery.nice-select.min.js"></script>
<script src="<?php echo base_url(); ?>theam/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url(); ?>theam/js/jquery.nicescroll.min.js"></script>
<script src="<?php echo base_url(); ?>theam/js/jquery.barfiller.js"></script>
<script src="<?php echo base_url(); ?>theam/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>theam/js/jquery.slicknav.js"></script>
<script src="<?php echo base_url(); ?>theam/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>theam/js/main.js"></script>

</body>

</html>
