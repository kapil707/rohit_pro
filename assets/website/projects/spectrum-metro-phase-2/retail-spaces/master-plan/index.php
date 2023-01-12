
<?php include('../../../../header.php') ?>
		<section class="banner-sec">
				
		
		
		<img src="<?php echo $url?>assets/img/Retail-Space.jpg"  title="Retail Space | Spectrum Metro" alt=" Commercial Property Noida Sector 75">
		
		</section>
		<!--End of banner  Part-->
		
		<div class="clearfix"></div>
		
	<div class="container-fluid cnt_fluid_wrapper">
		<div class="bread_block" id="bread_height_js">
			<div class="page_ttl_bread">Projects</div>
			<div class="page_menu_bread">
				<a href="<?php echo $url?>">Home</a> 
				<span class='bread_arrow'>&#8250;</span>
				<a href="<?php echo $url?>projects/spectrum-metro-phase-2" style="cursor:pointer;"> Products </a>
								<span class='bread_arrow'>&#8250;</span>

				
				<a href="<?php echo $url?>projects/spectrum-metro-phase-2/retail-spaces" style="cursor:pointer;"  title="Retail Space | Spectrum Metro"> retail spaces </a>
				
												<span class='bread_arrow'>&#8250;</span>
				master plan 
							</div>
		</div>
		<div class="mcontainer">
		<?php 
			$_GET['dropdown']="spectrum-metro-phase-2";
			$_GET['page']="retail-spaces";
			$_GET['subpage'] = "master-plan";
			include('../../../../left-side-bar.php') 
		?>
		<div class="msection wow fadeInTop animated animated">
		  		    
			<div class="msection-contant">
			 <h2>master plan</h2>
						  
			<div class="mast_pln item active docs-pictures"><img data-original="<?php echo $url?>assets/img/master-plan.jpg" src="<?php echo $url?>assets/img/master-plan.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1" /></div>
  
<?php include('../../../../request-payemnet-price.php')?>
			
			</div>
			
		   			
			  			
			
			
				
		</div>		
		
		<?php include('../../../../right-side-bar.php') ?>
		</div>
		
		</div>
	
 <?php include('../../../../partners.php') ?>
<?php include('../../../../footer.php') ?>

  