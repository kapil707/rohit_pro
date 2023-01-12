<head>
<title>Contact Details, Sector-75 Noida|Spectrum Metro</title>
</head>
<?php include('../header.php') ?>

<section class="banner-sec">
	<img src="../assets/img/Contact-us-banner.jpg" title="Specturm Metro Noida" alt="Best Commercial Property Project In Noida Sector -75">
	<!--div class="banner-sec-heading"><h2>Dedicated<br>
	Professional Hub</h2></div-->
</section>

<!--End of banner  Part-->
<div class="clearfix"></div>

	<div class="container-fluid cnt_fluid_wrapper">
		<div class="mcontainer">
		<div class="msection wow fadeInTop animated animated contsection">
		<div class="bread_block bread_bk2" id="bread_height_js"><!-- bread_bk2 class-->
			 <div class="page_menu_bread"><a href="<?php echo $url ?>">Home</a>  <span class='bread_arrow'>&#8250;</span>Contact Us</div>		</div>
		 
			<div class="msection-contant">
				<h3>Blue Square Infrastructure LLP</h3>
			</div>	
			<div class="frmmap-holder">
				<div class="col-md-5 col-sm-5">
					<div class="cont-icn-info">
						<i class="glyphicon glyphicon-map-marker"></i> <span>Blue Square Infrastructure LLP, Plot C & D, Sector-75, Noida (India)</span>
					</div>
					<div class="cont-icn-info">
						<i class="glyphicon glyphicon-envelope"></i> <span><a href="mailto:sales@spectrumatmetro.com">sales@spectrumatmetro.com</a></span>
					</div>
					<div class="cont-icn-info">
						<i class="glyphicon glyphicon-earphone"></i> <span>+91-7065700080</span>
					</div>
					<div class="cont-icn-info">
						<i class="glyphicon glyphicon-print"></i> <span>+91-7065700080</span>
					</div>
					
					<div class="cont-icn-info" style="margin-bottom: 0;">
						<span><strong>For Leasing Inquiry:</strong></span>
					</div>
					<div class="cont-icn-info">
						<i class="glyphicon glyphicon-earphone"></i> <span> +91-7065700080 </span>
					</div>

					<div class="cont-icn-info">
						<i class="glyphicon glyphicon-print"></i> <span><a href="mailto:sales@spectrumatmetro.com">sales@spectrumatmetro.com</a></span>
					</div>
					
				</div>
				<div class="col-md-7 col-sm-7">
					<div class="">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.8283597942545!2d77.3789728150309!3d28.574916393437213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cef61d1598831%3A0x8df4b09ab4c2b6d0!2sSpectrum-Metro!5e0!3m2!1shi!2sin!4v1457455291845" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
					</div>
				</div>
				<div style="clear:both"></div>
				<div class="cont-frm-holder">
					<h3>Online Enquiry</h3>
					<div class="col-md-12 leftblck">
					<div role="form" class="wpcf7" id="wpcf7-f149-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response1" id="screen-reader-response1"></div>
<div class="pophead">
									<div id="user-availability-status1" style="color: #0052B2;text-align: center;font-size: 17px;display:none;margin-top: 20px;height: 113px;"> 
									</div>
								</div>
 <div id="enquiry_form1">
									<div class="blck-main">	
									<div class="inptfld inpt1"><input type="text" placeholder="Name" id="name1" name="name"  autocomplete="off" maxlength="50"></div>
									<div class="inptfld inpt2"><input type="text" placeholder="Email" id="email1" name="email" autocomplete="off" maxlength="70"></div>
									<div class="inptfld inpt3"><input oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');"  type="text" placeholder="Contact" id="contact1" name="contact" autocomplete="off" maxlength="12"></div>
									<div class="inptfld inpt4"><textarea type="text" placeholder="Message" id="msg1" name="msg"></textarea></div>
									</div>
									
									<div class="blck-button">
									<div class="clckbtnblck"><input name="submit" type="submit" class="submit" id="sendmail1" value="Submit" onclick="return submit_enquiry_form1();">
									<span id="loaderIcon1" style="display:none;"><img  src="<?php echo $url ?>assets/images/ajax-loader.gif" /> </span>
									</div>
									</div>
									</div>
</div>					</div>
				</div>
			</div>		
		</div>
	</div>
</div>	

<script type="text/javascript">
		
	/**********Form code**********************************/	
		
	function submit_enquiry_form1(){
		name = $('#name1').val();
		emailid = $('#email1').val();
		contact = $('#contact1').val();
		msg = $('#msg1').val();
		captcha_code = $('#captcha_code1').val();
		
		if (name== "") {
			$('#name1').css('border', '1px solid #ff363a');
			$('#name1').focus();
			return false;
		}

		// else if (emailid== "") {
		// 	$('#email1').css('border', '1px solid #ff363a');
		// 	$('#email1').focus();
		// 	return false;
		// }

		// else if(!validateEmail(emailid)) 
		// {
		// 	$('#email1').css('border', '1px solid #ff363a');
		// 	$('#email1').focus();
		// 	return false;
		// }
		
		else if (contact== ""){
			$('#contact1').css('border', '1px solid #ff363a');
			$('#contact1').focus();
			return false;
		}
		
		else if (contact.length<6){
			$('#contact1').css('border', '1px solid #ff363a');
			$('#contact1').focus();
			return false;
		}
		
		else if(!contact.match(/[0-9]+/))
		{
		$('#contact1').css('border-color', 'red');
		$('#contact1').focus();
		return false;
		}
		
		else if (captcha_code== ""){
			$('#captcha_code1').css('border', '1px solid #ff363a');
			$('#captcha_code1').focus();
			return false;
		}


	else{

			$("#loaderIcon1").show();	
			jQuery.ajax({

				url: "<?php echo $url?>contact.php/",
				data:'name='+name+'&email='+emailid+'&contact='+contact+'&msg='+msg+'&captcha_code='+captcha_code,
				type: "POST",
				
				success:function(data){
					//alert(data); return false; 
					$("#loaderIcon1").hide();
					$("#enquiry_form1").hide();
					$("#show_alrt1").fadeIn();
					$("#screen-reader-response1").html(data);
					//$('#newsletter').val("");

				},
				error:function (){}
			})


		}
}

function validateEmail($email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}	
</script>
<?php include('../partners.php') ?>
<?php include('../footer.php') ?>