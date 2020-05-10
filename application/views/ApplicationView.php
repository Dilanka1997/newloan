<!DOCTYPE html>
<html lang="html">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Online Loan">
    <meta name="keywords" content="loan, onlineloan, cash, money, getmoney">
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
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<div>

    <img src="<?php echo base_url(); ?>theam/img/hero/backimg.jpg" style="width: 100%">


</div>




<!-- Most Search Section Begin -->
<section class="most-search spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>අයදුම් කරන්න </h2>
                    <!-- <p>Travelocity empowers travelers who are giving back on their trips in ways big and small</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="most__search__tab">

                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tabs-1" role="tabpanel" style="text-align: center;">
                        <h3>10,000 අඩු මුදලක් පළමු සහ 15,000 වැඩි මුදලක් තෙවන සහ පසු අයදුම් කරුවන්ට පමණයි</h3>

                        <div class="col-lg-12 col-md-12" id="boxStyle" style="margin-top: 35px">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <h4 style="margin-left: 19px">ණය මුදල (Rs:4000 - Rs:30000)</h4>

                                    <div class="col-lg-12 col-md-12" style="margin-top: 10px;">
                                        <form action="#" class="newslatter__form">
                                            <input type="text" placeholder="RS:4000" value="4000" id="demo" style="font-weight: bold; color: #000">
                                            <!--  <button type="submit">Subscribe</button> -->
                                        </form>
                                    </div>
                                    <div class="slidecontainer col-lg-12 col-md-12">
                                        <input type="range" min="4000" max="30000" value="50" step="2000" class="slider col-lg-12 col-md-12" id="myRange">

                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <h4 style="margin-left: 19px">ණය කාලය, දින (10-30)</h4>

                                    <div class="col-lg-12 col-md-12" style="margin-top: 10px">
                                        <form action="#" class="newslatter__form">
                                            <input type="text" placeholder="10" value="10" id="txtday" name="txtday" style="font-weight: bold; color: #000">
                                            <!--  <button type="submit">Subscribe</button> -->
                                        </form>
                                    </div>
                                    <div class="slidecontainer col-lg-12 col-md-12">
                                        <input type="range" min="10" max="30" value="10" step="10" class="slider col-lg-12 col-md-12" id="myRangetwo">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12" id="valueShow">
								<p style="color:blue;">(ණය මුදල සහ දින ගණන වෙනස් කිරීමට රතු කොටුව දකුණු පැත්තට කරන්න)</p>
                                <h4 id="txtAmount">ගෙවියයුතු  මුදල:- Rs: 4600</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Most Search Section End -->

<!-- Work Section Begin -->
<section class="work spad">
    <div class="container">

        <div class="col-md-12 col-lg-12" id="valueShow">

            <form role="form" id="leAddaccount" method="post">

				<input class="form-control col-md-12" type="text" name="txtAcceptAmount" id="txtAcceptAmount" readonly hidden value="4000">
				<input class="form-control col-md-12" type="text" name="txtDuration" id="txtDuration" readonly value="10" hidden>
                    <label>මුල් නම <span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtFirstName" id="txtFirstName" required>

                    <label>අවසන් නම <span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtLastName" id="txtLastName" required>

                    <label>හැඳුනුම්පත් අංකය <span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtNic" id="txtNic" required>

                    <label>උපන් දිනය <span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="date" name="txtBirthDay" id="txtBirthDay" required>

                    <label class="col-md-12">දිස්ත්‍රික්කය<span style="color: red">*</span></label>
                    <select class="form-control col-md-12" name="txtDistric" id="txtDistric" required>
                        <option value="කොළඹ">කොළඹ</option>
                        <option value="ගම්පහ">ගම්පහ</option>
                        <option value="කළුතර">කළුතර</option>
                        <option value="මහනුවර">මහනුවර</option>
                        <option value="මාතලේ">මාතලේ</option>
                        <option value="නුවරඑළිය">නුවරඑළිය</option>
                        <option value="ගාල්ල">ගාල්ල</option>
                        <option value="මාතර">මාතර</option>
                        <option value="හම්බන්තොට">හම්බන්තොට</option>
                        <option value="යාපනය">යාපනය</option>
                        <option value="කිලිනොච්චි">කිලිනොච්චි</option>
                        <option value="මන්නාරම">මන්නාරම</option>
                        <option value="වවුනියාව">වවුනියාව</option>
                        <option value="මුලතිව්">මුලතිව්</option>
                        <option value="මඩකලපුව">මඩකලපුව</option>
                        <option value="අම්පාර">අම්පාර</option>
                        <option value="ත්‍රිකුණාමලය">ත්‍රිකුණාමලය</option>
                        <option value="කුරුණෑගල">කුරුණෑගල</option>
                        <option value="පුත්තලම">පුත්තලම</option>
                        <option value="අනුරාධපුර">අනුරාධපුර</option>
                        <option value="පොළොන්නරුව">පොළොන්නරුව</option>
                        <option value="බදුල්ල">බදුල්ල</option>
                        <option value="මොණරාගල">මොණරාගල</option>
                        <option value="රත්නපුර">රත්නපුර</option>
                        <option value="කෑගල්ල">කෑගල්ල</option>
                    </select>

                    <label class="col-md-12">නගරය <span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtCity" id="txtCity" required>

                    <label class="col-md-12">විදියේ නම <span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtLane" id="txtLane" required >

                    <label>රැකියා වර්ගය <span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtJobType" id="txtJobType" required>

                    <label>රැකියා ඉස්තානයෙහි ස්තාවර දුරකථන අංකය<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtJobTel" id="textJobTel" required>

                    <label>රැකියා ඉස්තානයෙහි ලිපිනය<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtJobAddress" id="txtJobAddress" required>

                    <label>පවුද්ගලික දුරකථන අංකය 1<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtTelone" id="txtTelone" required>

                    <label>පවුද්ගලික දුරකථන අංකය 2</label>
                    <input class="form-control col-md-12" type="text" name="txtTelTwo">

                    <label>පවුද්ගලික ලිපිනනය<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="" name="txtLoanAmount" id="txtLoanAmount" readonly hidden value="4600">
                    <input class="form-control col-md-12" type="" name="txtAddress" id="txtAddress" required>

                    <label>බැංකු ගිණුමේ භාවිතා වන නම<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtBankNo" id="txtBankNo" required>

                    <label>බැංකුවේ නම<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtBankName" id="txtBankName" required>

                    <label>බැංකුවේ ශාඛාව<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="text" name="txtBranch" id="txtBranch" required>

                    <label>ගිණුම් අංකය<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="number" name="txtAccountNo" id="txtAccountNo" required> <br>

                    <label>ඔබේ පින්තූරය<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="file" name="filePhoto" id="filePhoto" required> <br>

                    <label>හැඳුනුම්පතේ ඉදිරිපස<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="file" name="fileNicFrontImage" id="fileNicFrontImage" required> <br>

                    <label>හැඳුනුම්පතේ පිටිපස<span style="color: red">*</span></label>
                    <input class="form-control col-md-12" type="file" name="fileNicBackImage" id="fileNicBackImage" required> <br>

                    <label>නැවත අයදුම් කිරීමක් <span style="color: red">*</span></label>
                    <input class="form-contro" type="checkbox" value="true" name="chkAgain" id="chkAgain"> <br> <br>

                    <label>හදුනාගැනීමේ කේතය (දෙවන සහ පසු අයදුම් කරුවන්ට පමණි )<span style="color: red">*</span></label>
                    <input class="form-control col-md-6" type="text" name="txtCode" id="txtCode" readonly> <br>


                    <p style="color: darkred">15000 වැඩි සෑම ගනුදෙනුවකදීම දින 122 දක්වා ගෙවීම් කල හැක </p>
                    <p><span style="color: blue; font-weight: bold">15000</span> = <span style="color: green">දින</span>  <span style="color: blue; font-weight: bold">122</span> (<span style="color: green">වාරිකයක්</span> <span style="color: blue; font-weight: bold">5500</span>)</p>
                    <p><span style="color: blue; font-weight: bold">20000</span> = <span style="color: green">දින</span>  <span style="color: blue; font-weight: bold">122</span> (<span style="color: green">වාරිකයක්</span> <span style="color: blue; font-weight: bold">7400</span>)</p>
                    <p><span style="color: blue; font-weight: bold">25000</span> = <span style="color: green">දින</span>  <span style="color: blue; font-weight: bold">122</span> (<span style="color: green">වාරිකයක්</span> <span style="color: blue; font-weight: bold">9250</span>)</p>
                    <p><span style="color: blue; font-weight: bold">30000</span> = <span style="color: green">දින</span>  <span style="color: blue; font-weight: bold">122</span> (<span style="color: green">වාරිකයක්</span> <span style="color: blue; font-weight: bold">11100</span>)</p>

                    <button class="btn btn-success col-md-12" type="submit" style="margin-top: 20px">අයදුම් කරන්න </button>

            </form>




        </div>


    </div>
</section>
<!-- Work Section End -->

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
<script src="<?php echo base_url(); ?>theam/js/custom.js"></script>


<script>





	$(function () {

	});

	$('#leAddaccount').submit(function (e) {



		if($('#chkAgain').prop('checked')){

			e.preventDefault();

			var NICNo = document.getElementById("txtNic").value;

			if (NICNo.length != 10 && NICNo.length != 12) {
				swal("සමාවන්න!", "කරුණාකර වලංගු හැඳුනුම්පත් අංකයක් ඇතුලත් කරන්න !!", "error");
				return;
			} else if (NICNo.length == 10 && !$.isNumeric(NICNo.substr(0, 9))) {
				swal("සමාවන්න!", "කරුණාකර වලංගු හැඳුනුම්පත් අංකයක් ඇතුලත් කරන්න !!", "error");
				return;
			}


			var jobTel = document.getElementById("textJobTel").value;
			var phoneno = /^\d{10}$/;
			if(jobTel.match(phoneno)){

			}else{
				swal("සමාවන්න!", "කරුණාකර නිවැරදි රැකියා ඉස්තානයෙහි ස්තාවර දුරකථන අංකය ඇතුලත් කරන්න !!", "error");
				return;
			}

			var jobTelone = document.getElementById("txtTelone").value;
			var phoneno = /^\d{10}$/;
			if(jobTelone.match(phoneno)){

			}else{
				swal("සමාවන්න!", "කරුණාකර නිවැරදි ස්තාවර දුරකථන අංකය ඇතුලත් කරන්න !!", "error");
				return;
			}


			var nic = document.getElementById("txtCode").value;

			if(nic.trim() == ""){
				console.log("Please enter code");
				swal("සමාවන්න!", "හදුනාගැනීමේ කේතය ඇතුලත් කරන්න!!", "error");
				return;
			}










			$.ajax({
				url: '<?php echo base_url() ?>index.php/Application/SaveTwo',
				type: 'post',
				data: new FormData(this),
				processData: false,
				contentType: false,
				cache: false,
				async: false,
				error: function(jqXHR, textStatus, errorThrown){
					console.log(errorThrown);
				},
				success: function (status, data)
				{
					console.log(status);
					console.log(data);
					var o = jQuery.parseJSON(status);
					console.log(status);
					console.log(data);

					if (o.status !== 'error') {

						swal("Congratulation!", o.msg, "success");

					} else {
						swal("Sorry!", o.msg, "error");


					}
				}
			});




		}else{

			e.preventDefault();
			var NICNo = document.getElementById("txtNic").value;

			if (NICNo.length != 10 && NICNo.length != 12) {
				swal("සමාවන්න!", "කරුණාකර වලංගු හැඳුනුම්පත් අංකයක් ඇතුලත් කරන්න !!", "error");
				return;
			} else if (NICNo.length == 10 && !$.isNumeric(NICNo.substr(0, 9))) {
				swal("සමාවන්න!", "කරුණාකර වලංගු හැඳුනුම්පත් අංකයක් ඇතුලත් කරන්න !!", "error");
				return;
			}


			var jobTel = document.getElementById("textJobTel").value;
			var phoneno = /^\d{10}$/;
			if(jobTel.match(phoneno)){

			}else{
				swal("සමාවන්න!", "කරුණාකර නිවැරදි රැකියා ඉස්තානයෙහි ස්තාවර දුරකථන අංකය ඇතුලත් කරන්න !!", "error");
				return;
			}

			var jobTelone = document.getElementById("txtTelone").value;
			var phonenoA = /^\d{10}$/;
			if(jobTelone.match(phonenoA)){

			}else{
				swal("සමාවන්න!", "කරුණාකර නිවැරදි ස්තාවර දුරකථන අංකය ඇතුලත් කරන්න !!", "error");
				return;
			}


				$.ajax({
					url: '<?php echo base_url() ?>index.php/Application/SaveOne',
					type: 'post',
					data: new FormData(this),
					processData: false,
					contentType: false,
					cache: false,
					async: false,
					error: function(jqXHR, textStatus, errorThrown){
						console.log(errorThrown);
					},
					success: function (status, data)
					{
						console.log(status);
						console.log(data);
						var o = jQuery.parseJSON(status);
						console.log(status);
						console.log(data);

						if (o.status !== 'error') {

							swal("Congratulation!", o.msg, "success");

						} else {
							swal("Sorry!", o.msg, "error");


						}
					}
				});
		}


	});






</script>












</body>

</html>
