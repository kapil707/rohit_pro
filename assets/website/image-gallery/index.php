<head>
<title>Gallery & Image-Media,Sector 75 Noida|Spectrum Metro</title>
</head>
<?php include('../header.php') ?>
	<link rel="stylesheet" href="<?php echo $url?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $url?>assets/css/owl.theme.default.min.css">
	<script src="<?php echo $url?>assets/js/owl.carousel.min.js"></script>
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
	<img src="<?php echo $url?>assets/img/media-banner.jpg" title="Image-Gallery|Spectrum Metro" alt="Commercial Property Mall">
</section>
<!--End of banner  Part-->

<div class="clearfix"></div>

<div class="container-fluid cnt_fluid_wrapper"  id="main_cont_fx_js">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Media</div>
			 <div class="page_menu_bread"><a href="<?php echo $url?>">Home</a>  <span class='bread_arrow'>&#8250;</span>Image Gallery</div>		
	</div>
	<div class="mcontainer">
		<?php 
			$_GET['dropdown']="media";
			$_GET['page']="image-gallery";
			include('../left-side-bar.php') 
		?>
		<div class="msection wow fadeInTop animated animated">
		  <div class="msection-contant">
				<h2 title="Gallery|Spectrum Metro"> Gallery</h2>
			
				<div class="gallerynew_hlder">
						<div class="big-images docs-pictures">
						 						
						
							<div class="rotat_img_sngl"><img data-original="<?php echo $url?>assets/img/gallery-pic-7.jpg" src="<?php echo $url?>assets/img/gallery-pic-7.jpg" title="Spectrum Metro Noida" alt="Spectrum Metro Noida Sector 75"></div>
							
												
						
							<div class="rotat_img_sngl"><img data-original="<?php echo $url?>assets/img/gallery-pic-6.jpg" src="<?php echo $url?>assets/img/gallery-pic-6.jpg" title="Spectrum Metro Noida" alt="Spectrum Metro Noida"></div>
							
												
						
							<div class="rotat_img_sngl"><img data-original="<?php echo $url?>assets/img/gallery-pic-5.jpg" src="<?php echo $url?>assets/img/gallery-pic-5.jpg" title="Spectrum Metro Noida" alt="Spectrum Metro, Commercial Property"></div>
							
												
						
							<div class="rotat_img_sngl"><img data-original="<?php echo $url?>assets/img/gallery-pic-4.jpg" src="<?php echo $url?>assets/img/gallery-pic-4.jpg" title="Spectrum Metro Noida" alt="Office space In Noida"></div>
							
												
						
							<div class="rotat_img_sngl"><img data-original="<?php echo $url?>assets/img/gallery-pic-3.jpg" src="<?php echo $url?>assets/img/gallery-pic-3.jpg" title="Spectrum Metro Noida" alt="Food Court In Noida"></div>
							
												
						
							<div class="rotat_img_sngl"><img data-original="<?php echo $url?>assets/img/gallery-pic-2.jpg" src="<?php echo $url?>assets/img/gallery-pic-2.jpg" title="Spectrum Metro Noida" alt="Serviced Apartments In Noida"></div>
							
												
						
							<div class="rotat_img_sngl"><img data-original="<?php echo $url?>assets/img/gallery-pic-1.jpg" src="<?php echo $url?>assets/img/gallery-pic-1.jpg" title="Spectrum Metro Noida" alt="Virtual Space in Noida"></div>
							
										
							
						
						</div>
						<div class="thumbs galler_thm_pic">
						 						
							<div><img src="<?php echo $url?>assets/img/gallery-pic-7.jpg" title="Spectrum Metro Noida" alt="Commercial Real Estate"></div>
							
												
							<div><img src="<?php echo $url?>assets/img/gallery-pic-6.jpg" title="Spectrum Metro Noida" alt="Commercial Property In Noida"></div>
							
												
							<div><img src="<?php echo $url?>assets/img/gallery-pic-5.jpg" title="Spectrum Metro Noida" alt="Commercial Property for sale In Noida"></div>
							
												
							<div><img src="<?php echo $url?>assets/img/gallery-pic-4.jpg" title="Spectrum Metro Noida" alt="Commercial Property In Central Noida"></div>
							
												
							<div><img src="<?php echo $url?>assets/img/gallery-pic-3.jpg" title="Spectrum Metro Noida" alt="Commercial Property Sector 75 Noida"></div>
							
												
							<div><img src="<?php echo $url?>assets/img/gallery-pic-2.jpg" title="Spectrum Metro Noida" alt="Office Space For Sale In Noida"></div>
							
												
							<div><img src="<?php echo $url?>assets/img/gallery-pic-1.jpg" title="Spectrum Metro Noida" alt="Food Court For sale in Noida"></div>
							
								
						</div>
				</div>
					
			
			</div>	
			

		</div>		
		<?php include('../right-side-bar.php') ?>
	</div>
</div>

<link rel="stylesheet" href="<?php echo $url?>assets/js/viewer-dflt.html" title="Spectrum Metro Noida">
<link rel="stylesheet" href="<?php echo $url?>assets/js/viewer-new.html" title="Spectrum Metro Noida">
<?php include('../partners.php') ?>
<?php include('../footer.php') ?>