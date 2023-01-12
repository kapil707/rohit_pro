<?php
$map = $this->Main_Model->get_website_data("map");
$banner = $this->Main_Model->get_website_data("contact_us_banner");
if($tbl_row->id!=""){ ?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner; ?>" title="" alt="">
</section>
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Contact Us</div>
		<div class="page_menu_bread">
			<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span><?php echo $tbl_row->title ?>
		</div>
	</div>
	<div class="mcontainer">
		<div class="msection wow fadeInTop animated animated" style="width:100%">
			<div class="msection-contant">
				<article id="post-162" class="post-162 page type-page status-publish hentry">
					<div class="entry-header">
						<h2 class="entry-title">
							<?php echo $tbl_row->title ?>
						</h2>
					</div>
					<div class="frmmap-holder">
						<div class="col-md-5 col-sm-5">
							<?php echo $tbl_row->description ?>
						</div>
						<div class="col-md-7 col-sm-7">
							<?php echo $map; ?>
						</div>
					</div>
				</article>
			</div>
		</div>	
	</div>	
</div>
<?php } ?>