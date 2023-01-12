<head>
<title>Events-Media,Sector 75 Noida|Spectrum Metro</title>
</head>
<?php include('../header.php') ?>
<section class="banner-sec">
	<img src="../<?php echo $url?>assets/img/banner-inner.jpg" title="Events,|Spectrum Metro" alt="Commercial Property Sector 75 Noida">
	<!--div class="banner-sec-heading"><h2>Dedicated<br>
	Professional Hub</h2></div-->
</section>
<!--End of banner  Part-->

<div class="clearfix"></div>

	<div class="container-fluid cnt_fluid_wrapper">
		<div class="bread_block" id="bread_height_js">
			<div class="page_ttl_bread">Media</div>
				 <div class="page_menu_bread"><a href="<?php echo $url?>">Home</a>  <span class='bread_arrow'>&#8250;</span> Event </div>
		</div>
		<div class="mcontainer">
		<?php 
			$_GET['dropdown']="media";
			$_GET['page']="event";
			include('../left-side-bar.php') 
		?>
		<div class="msection wow fadeInTop animated animated">
			<div class="msection-contant">
				<h2>Events </h2>
				
			<div class="maincover-blg">
			
									
					<div class="col-md-4 col-sm-4 col-xs-4 maincover-sngl">
						<div class="maincover-img">
						<a href="<?php echo $url?>event/times-property-expo-2018/">
						<img src="<?php echo $url?>assets/img/IMG-20180504-WA0002-205x205.jpg" class="attachment-topi size-topi wp-post-image" alt="" />						
							<div class="paren-hover animated">
								<i class="glyphicon glyphicon-zoom-in "></i>
							</div>
						 </a>	
						</div>
						<div class="maincover-info">
							<p>Times Property Expo 2018</p>
							<span>May 4, 2018</span>
						</div>
						
					</div>
						
					<div class="col-md-4 col-sm-4 col-xs-4 maincover-sngl">
						<div class="maincover-img">
						<a href="<?php echo $url?>event/sai-sandhya-event/">
						<img src="<?php echo $url?>assets/img/sai-sandhya-16-205x205.jpg" class="attachment-topi size-topi wp-post-image" alt="" />						
							<div class="paren-hover animated">
								<i class="glyphicon glyphicon-zoom-in "></i>
							</div>
						 </a>	
						</div>
						<div class="maincover-info">
							<p>Sai Sandhya Event</p>
							<span>September 21, 2017</span>
						</div>
						
					</div>
						
					<div class="col-md-4 col-sm-4 col-xs-4 maincover-sngl">
						<div class="maincover-img">
						<a href="<?php echo $url?>event/holi-event/">
						<img src="<?php echo $url?>assets/img/holi.jpg" class="attachment-topi size-topi wp-post-image" alt="" />						
							<div class="paren-hover animated">
								<i class="glyphicon glyphicon-zoom-in "></i>
							</div>
						 </a>	
						</div>
						<div class="maincover-info">
							<p>Holi Event</p>
							<span>March 9, 2017</span>
						</div>
						
					</div>
						
			</div>
				
			</div>	
			

		</div>		
		<?php include('../right-side-bar.php') ?>
	</div>
</div>
<?php include('../partners.php')?>
<?php include('../footer.php')?>