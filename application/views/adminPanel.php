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
	<link rel="stylesheet" href="<?php echo base_url(); ?>theam/css/custom.css" type="text/css">

	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">


</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>


<!-- Most Search Section Begin -->
<section class="most-search spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="section-title">
					<h2>ණය අයදුම්පත්</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="most__search__tab">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
								පළමු අයදුම්කරුවන්
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
								පසු අයදුම්කරුවන්
							</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">

					<div class="tab-pane active" id="tabs-1" role="tabpanel">



						<table id="table_id" class="display">
							<thead>
							<tr>
								<th style="display:none;">id</th>
								<th>මුල් නම</th>
								<th>අවසන් නම</th>
								<th>හැඳුනුම්පත් අංකය</th>
								<th>දිස්ත්‍රික්කය</th>
								<th>රැකියා වර්ගය</th>
								<th>දුරකථන අංකය</th>
								<th>ණය මුදල</th>
								<th>ඔබේ පින්තූරය</th>
								<th>තත්ත්වය</th>
							</tr>
							</thead>
							<tbody>

							<?php

							foreach($AllLoanOne as $cuslist){
								?>
								<tr>
									<td style="display:none;"><?php echo $cuslist['id']; ?></td>
									<td><?php echo $cuslist['firstname']; ?></td>
									<td><?php echo $cuslist['lastname']; ?></td>
									<td><?php echo $cuslist['nic']; ?></td>
									<td><?php echo $cuslist['dictric']; ?></td>
									<td><?php echo $cuslist['jobType']; ?></td>
									<td><?php echo $cuslist['telone']; ?></td>
									<td><?php echo $cuslist['loanAmount']; ?></td>
									<td> <img src="<?php echo base_url(); ?>/upload/<?php echo $cuslist['photo']; ?>"  height="42" width="42"> </td>
									<td>

										<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Login/ViewOne/<?php echo $cuslist['nic']; ?>" aria-label="Delete">
											<i class="fa fa-eye" aria-hidden="true"></i>
										</a>

										<a class="btn btn-danger" href="#" aria-label="Delete" onclick="deleteRowOne(this)">
											<i class="fa fa-trash-o" aria-hidden="true"></i>
										</a>



									</td>
								</tr>
								<?php
							}



							?>



							</tbody>
						</table>












					</div>

					<div class="tab-pane" id="tabs-2" role="tabpanel">

						<table id="table_id_two" class="display">
							<thead>
							<tr>
								<th style="display:none;">id</th>
								<th>මුල් නම</th>
								<th>අවසන් නම</th>
								<th>හැඳුනුම්පත් අංකය</th>
								<th>දිස්ත්‍රික්කය</th>
								<th>රැකියා වර්ගය</th>
								<th>දුරකථන අංකය</th>
								<th>ණය මුදල</th>
								<th>ඔබේ පින්තූරය</th>
								<th>තත්ත්වය</th>
							</tr>
							</thead>
							<tbody>

							<?php

							foreach($AllLoanTwo as $cuslistTwo){
								?>
								<tr>
									<td style="display:none;"><?php echo $cuslistTwo['id']; ?></td>
									<td><?php echo $cuslistTwo['firstname']; ?></td>
									<td><?php echo $cuslistTwo['lastname']; ?></td>
									<td><?php echo $cuslistTwo['nic']; ?></td>
									<td><?php echo $cuslistTwo['dictric']; ?></td>
									<td><?php echo $cuslistTwo['jobType']; ?></td>
									<td><?php echo $cuslistTwo['telone']; ?></td>
									<td><?php echo $cuslistTwo['loanAmount']; ?></td>
									<td> <img src="<?php echo base_url(); ?>/upload/<?php echo $cuslistTwo['photo']; ?>"  height="42" width="42"> </td>
									<td>

										<a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/Login/ViewTwo/<?php echo $cuslistTwo['nic']; ?>" aria-label="Delete">
											<i class="fa fa-eye" aria-hidden="true"></i>
										</a>

										<a class="btn btn-danger" href="#" aria-label="Delete" onclick="deleteRowTwo(this)">
											<i class="fa fa-trash-o" aria-hidden="true"></i>
										</a>



									</td>
								</tr>
								<?php
							}



							?>



							</tbody>
						</table>














					</div>




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

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>


<script>

	$(document).ready( function () {
		$('#table_id').DataTable();
		$('#table_id_two').DataTable();
	} );


	function deleteRowOne(obj) {

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this Details!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
				.then((willDelete) => {
					if (willDelete) {


						var  id = $(obj).closest("tr")
								.find("td:eq(3)")
								.text();
						$.ajax({
							url: '<?php echo base_url() ?>index.php/Login/DeleteFirst',
							type: 'post',
							data: {
								idPH: id},
							error: function (e) {
							},
							success: function (data, status) {
								$(obj).closest('tr').remove();
								swal("Good job!", "Deleted!!", "success");
							}
						});

					}
				});

	}

	function deleteRowTwo(obj) {

		swal({
			title: "Are you sure?",
			text: "Once deleted, you will not be able to recover this Details!",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
				.then((willDelete) => {
					if (willDelete) {


						var  id = $(obj).closest("tr")
								.find("td:eq(3)")
								.text();
						$.ajax({
							url: '<?php echo base_url() ?>index.php/Login/DeleteSecond',
							type: 'post',
							data: {
								idPH: id},
							error: function (e) {
							},
							success: function (data, status) {
								$(obj).closest('tr').remove();
								swal("Good job!", "Deleted!!", "success");
							}
						});

					}
				});

	}



</script>

</body>

</html>
