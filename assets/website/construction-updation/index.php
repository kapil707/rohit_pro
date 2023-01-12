<head>
<title>Construction Update, Sector 75 Noida|Spectrum Metro</title>
</head>
<?php include('../header.php') ?>
	<link rel="stylesheet" href="<?php echo $url ?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $url ?>assets/css/owl.theme.default.min.css">
	<script src="<?php echo $url ?>assets/js/owl.carousel.min.js"></script>
	<script>
		jQuery(document).ready(function ($) {

			var $sync1 = $(".big-images"),
				$sync2 = $(".thumbs"),
				flag = false,
				duration = 300;

			$sync1
				.owlCarousel({
					items: 1,
					margin: 10,
					nav: true,
					dots: true
				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = true;
						$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});

			$sync2
				.owlCarousel({
					margin:4,
					items:4,
					nav: true,
					center: false,
					dots: true
				})
				.on('click', '.owl-item', function () {
					$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);

				})
				.on('changed.owl.carousel', function (e) {
					if (!flag) {
						flag = true;		
						$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
						flag = false;
					}
				});
		});
	
		
	</script>
	
	
<section class="banner-sec">
	<img src="<?php echo $url ?>assets/img/banner-inner.jpg" alt="">
	<div class="banner-sec-heading"><h2>Dedicated<br>
	Professional Hub</h2></div>
</section>
<!--End of banner  Part-->

<div class="clearfix"></div>

	<div class="container-fluid cnt_fluid_wrapper">
		<div class="bread_block" id="bread_height_js">
			<div class="page_ttl_bread">Construction Updation</div>
				 <div class="page_menu_bread"><a href="<?php echo $url ?>">Home</a>  <span class='bread_arrow'>&#8250;</span>Construction Updation</div>		</div>
		<div class="mcontainer">
		<div class="lsection"><!--   wow fadeInLeft animated animated -->
			<div class="" id="left_div_js"> 
				<div class="section-data">
					<img class="left_bar_img" src="<?php echo $url ?>assets/img/dedicated.jpg" title="Spectrum Metro Noida" alt="Spectrum Metro Sector 75 Noida"/>
				</div>
			</div>
		</div>
		<div class="msection wow fadeInTop animated animated">
		 	<div class="msection-contant">
				<div class="filter_sec_div">
					<div class="col-md-6 col-sm-6 col-xs-6">
						<div class="filter_left_head">
							<h2 title="Construction Update">Construction Updation</h2>
							<h3>Dedicated Professional Hub</h3>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6">	
						<div class="filter_right_select">
						<form method="get" id="filterform" name="filterform" action="#"> 
							<span>
							<select name="datayear" id="datayear" onchange="submit_form_filter();">	   
								<option value=""> Select Year </option>
								
								<option value="2016" > 2016</option>
								<option value="2017"  > 2017</option>
								<option value="2018" selected> 2018</option>
							</select>
							</span>
							<span>
							<select name="datamonth" id="datamonth" onchange="submit_form_filter();">
								<option value="1" > January </option>
								<option value="2" > February </option>
								<option value="3" > March </option>
								<option value="4" > April </option>
								<option value="5" > May </option>
								<option value="6" selected> June </option>
								<option value="7" > July </option>
								<option value="8" > August </option>
								<option value="9" > September </option>
								<option value="10" > October </option>
								<option value="11" > November </option>
								<option value="12" > December </option>
							</select>
							</span
						</form>
						</div>
					</div>
				</div>
		   			 <h2> No data founds</h2>
								
			
			</div>	
			

		</div>		
		<?php include('../right-side-bar.php') ?>			
	</div>
</div>

<script>
	function submit_form_filter()
		{
			document.getElementById("filterform").submit();
		}	
	</script>

<link rel="stylesheet" href="<?php echo $url?>assets/js/viewer-dflt.html">
<link rel="stylesheet" href="<?php echo $url?>assets/js/viewer-new.html">
<?php include('../partners.php') ?>
<?php include('../footer.php') ?>