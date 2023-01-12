<style>
.myicss i
{
	font-size:22px !important;
}
</style>
<?php 
$title 	= $this->Main_Model->get_website_data("title");
$home_page_video_title = $this->Main_Model->get_website_data("home_page_video_title"); 
$home_page_video_url = $this->Main_Model->get_website_data("home_page_video_url");
?>
<div class="gallery-wrap" id="home_page_gap_js">
	<div class="mar">        
		<div id="latest-news">            
			<div class="ticker1 modern-ticker mt-round mt-scroll">                
				<div class="mt-news" style="width: 820px;">
					<ul>
						<?php
						foreach($tbl_toptext as $row){ ?>
						<li>
							<a href="#"><?= $row->title;?></a>
						</li>
						<?php } ?>                      
					</ul>
				</div>                
				<div class="mt-controls">                    
					<div class="mt-prev"></div>                    
					<div class="mt-play mt-pause"></div>                    
					<div class="mt-next"></div>                
				</div>
			</div>
		</div>
	</div>
	<div class="single-item">  
		<?php foreach($tbl_slider as $row){ ?>
		<div class="slide">            
			<div class="heading container"></div> 
			<img src="<?= $url_path.$row->photo; ?>" title="<?php echo $title2; ?>" alt="" style="width: 100%;" />            
			<div class="slide-count-wrap"> 
				<span class="current"></span> 
				<span class="total"></span>
			</div>
		</div> 
		<?php } ?>
		</div>
	</div>
	<div class="container" style="padding:0;">
		<div class="bg">
			<div class="col-md-8 col-sm-8 col-xs-7 about_spec_div" style="padding-bottom:40px;border-right: 2px solid #bebebc;">
				<div class="about wow fadeInLeft animated animated">
					<h2 style="text-align:left;" title="<?php echo $home_dt1->title;?>"><?php echo $home_dt1->title;?></h2>
					<?php echo $home_dt1->description;?>
				</div>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-5 exlu_div"> 
				<div class="exclusive wow fadeInRight animated animated i_frm_hm">
					<h2 style="" class="spechead" title="<?php echo $home_page_video_title; ?>"><?php echo $home_page_video_title; ?></h2>
					<?php if($home_page_video_url) { ?>
					<iframe width="" height="" src="<?= $this->Main_Model->youtube_url($home_page_video_url)?>?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
					<?php } ?>          
				</div>
			</div> 
			<div class="col-md-12 col-sm-12 col-xs-12" style="padding-bottom:40px;">
				<div class="about wow fadeInLeft animated animated">
					<h2 style="text-align:left;" title="<?php echo $home_dt2->title;?>"><?php echo $home_dt2->title;?></h2>
					<?php echo $home_dt2->description;?>
				</div>
			</div>
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 about_spec_div">
			<div class="about wow fadeInLeft animated animated" style="border-right:0px;">
				<div class="features-box website-features">
				<ul>
					<?php
					foreach($tbl_icon1 as $row){ ?>
					<li>
						<?php echo $row->icon; ?>
						<?php echo $row->title; ?>
					</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>    
	<div class="bg">
		<div class="col-md-12 col-sm-12 col-xs-12 about_spec_div" style="padding-bottom:40px;"> 
			<div class="about wow fadeInLeft animated animated">
				<h2 title="Key Features">Key Features</h2>
				<div class="features-box website-features">
					<ul style="padding: 0px;">
						<?php
						foreach($tbl_icon2 as $row){ ?>
						<li class="myicss">
							<?php echo $row->icon; ?>
							<?php echo $row->title; ?>
						</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<script> 
$(document).ready(function() {        
function resizeImage() {            
var realy_width = $(window).width();            
//alert(realy_width);            
var realy_height = $(window).height();            
var gap_for_bnr = $('header').height();            
//alert(gap_for_bnr);            
var gap_for_bnr1 = $('#tils_hgth_js').height();            
if (realy_width >= 1100 && realy_width <= 1400) {                
//if(realy_width >= 991 && realy_width <= 1366){                
var add_hgt = gap_for_bnr + gap_for_bnr1;                
var mns_hgt = realy_height - add_hgt + 140;                
$('#home_page_gap_js').css({                    
"margin-top": gap_for_bnr,                    
width: "100%",                    
"height": mns_hgt                
});            
} else {                
$('#home_page_gap_js').addClass('dym_gap_mng_js');            
}        
}        
$(window).resize(function() {            
resizeImage();        
});        
$(window).load(function() {            
resizeImage();        
});        
resizeImage();    
});
</script>
<script>
function main_modal_open()
{
	$(".main_modal_open").click()
}
function main_modal_open1()
{
	$(".main_modal_open1").click()
}
function main_modal_open2()
{
	$(".main_modal_open2").click()
}
<?php if($_SESSION["leadthanks"]=="1") { 
	$_SESSION["leadthanks"] = ""; ?>
	setTimeout('main_modal_open2();',2000);
<?php } else { ?>
if("1"=="<?php echo $popupstatus;?>")
{
	setTimeout('main_modal_open1();',15000);
}
else
{
	setTimeout('main_modal_open();',15000);
}
<?php } ?>
</script>