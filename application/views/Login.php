<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>CashBay - Login</title>

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
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/custom.css" type="text/css">
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
				<div class="section-title" style="margin: auto; width: 50%">
					<h2>LOGIN</h2>

					<form action="<?php echo base_url(); ?>index.php/Login/process" method="post">

						<input class="form-control col-lg-12 col-md-12" type="text" placeholder="UserName" id="username" name="username"> <br>
						<input class="form-control col-lg-12 col-md-12" type="password" placeholder="Password" id="password" name="password"> <br>

						<input type="submit" class="form-control btn btn-success" value="Submit">
					</form>

					<label class="checkbox">
						<p> <?php if (!is_null($msg)) echo $msg; ?></p>
					</label>


				</div>
			</div>
		</div>
	</div>
</section>
<!-- Categories Section End -->






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
