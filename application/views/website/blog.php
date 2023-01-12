<?php
$map = $this->Main_Model->get_website_data("map");
$banner = $this->Main_Model->get_website_data("blog_banner");
?>
<section class="banner-sec">
	<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?= $banner;?>" title="" alt="">
</section>
<!--End of banner  Part-->
<div class="clearfix"></div>
<div class="container-fluid cnt_fluid_wrapper">
	<div class="bread_block" id="bread_height_js">
		<div class="page_ttl_bread">Blog</div>
		<div class="page_menu_bread">
			<a href="<?php echo base_url(); ?>">Home</a><span class='bread_arrow'>&#8250;</span>Blog
		</div>			
	</div>
	<div class="mcontainer">
		<div class="blog_msec_left msection wow fadeInTop animated animated blog-left">
		<div class="msection-contant">
			<div class="blog-inn">
			<?php foreach($tbl_result as $row) { ?>
				<div class="blg_sngl_loop">
					<a class="" href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>" rel="bookmark"><h2><?php echo $row->title;?></h2></a>
					<p class="posted_blg">Posted by <a href="javascript:;" title="" rel="author"></a> on <?php echo $row->date;?></p>
					<div style="clear:both;"></div>
					<div class="blg_img_left">
						<a class="" href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>">
							<img src="<?= $url_path ?>/<?= $row->photo ?>" class="attachment-full size-full wp-post-image" alt="">
						</a>
					</div>
					<div class="blg_cont_right" style="max-height: 150px;    overflow: hidden;">
						<?php echo $row->description ?>
					</div>
					<a class="blg_rd_mr" href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>">Continue Reading..</a>
				</div>
			<?php } ?>
		</div>

<ul class="pagination">
    <li class="startcss1 disabled"><span class="">First</span></li>
    <li class="startcss2 disabled"><span class="">Prev</span></li>
<?php
$endcss = "class='disabled'";
for($i=0;$i<($count_records);$i= 10 + $i){
	$showone = 0;
	if($i==0 && $per_page!=0){


		?>
		<li class="<?php if(ceil($per_page/10)==ceil($i/10)){ echo "active";} ?>"><a rel="noopener" href="javascript:void(0);" class="for_per" ford="<?php echo ceil($i/10) ?>" per_page="<?php echo ceil($i/10)*10 ?>" ><?php echo ceil($i/10)+1 ?></a></li>
		<script>
			$(".startcss1").removeClass("disabled");
			$(".startcss2").removeClass("disabled");

			$(".startcss1").html('<a rel="noopener" href="javascript:void(0)" class="fast" per_page="0">First</a>');
			$(".startcss2").html('<a rel="noopener" href="javascript:void(0)" class="previous" per_page="<?php echo $per_page - 10 ?>">Prev</a>');
		</script>
		<?php
		$showone = 1;
	}
	
	if($i==$per_page-10 && $showone == 0){
		?>
		<li class="<?php if(ceil($per_page/10)==ceil($i/10)){ echo "active";} ?>"><a rel="noopener" href="javascript:void(0);" class="for_per" ford="<?php echo ceil($i/10) ?>" per_page="<?php echo ceil($i/10)*10 ?>" ><?php echo $lastval = ceil($i/10)+1 ?></a></li>
		<?php
	}
	
	if($i==$per_page){
		?>
		<li class="<?php if(ceil($per_page/10)==ceil($i/10)){ echo "active";} ?>"><a rel="noopener" href="javascript:void(0);" class="for_per" ford="<?php echo ceil($i/10) ?>" per_page="<?php echo ceil($i/10)*10 ?>" ><?php echo $lastval1 = ceil($i/10)+1 ?></a></li>
		<?php
	}
	
	if($i==$per_page+10){
		$endcss = "";
		?>
		<li class="<?php if(ceil($per_page/10)==ceil($i/10)){ echo "active";} ?>"><a rel="noopener" href="javascript:void(0);" class="for_per" ford="<?php echo ceil($i/10) ?>" per_page="<?php echo ceil($i/10)*10 ?>" ><?php echo $lastval2 = ceil($i/10)+1 ?></a></li>
		<?php
	}
}

if(ceil($i/10)==$lastval || ceil($i/10)==$lastval1 || ceil($i/10)==$lastval2){}else{
	?>
	<li class="<?php if(ceil($per_page/10)==ceil($i/10)){ echo "active";} ?>"><a rel="noopener" href="javascript:void(0);" class="for_per" ford="<?php echo ceil($i/10) ?>" per_page="<?php echo ceil($count_records/10)*10 - 10; ?>" ><?php echo ceil($i/10)?></a></li>
	<?php
}
$last = $next = '';

if($endcss == ''){
	$last = 'last';
	$next = 'next';
}
       /*echo $per_page;
    for($i=0;$i<ceil($count_records/10);$i++){

  if($i<=ceil($per_page/10)+10&&$i>=ceil($per_page/10)){
       if($i==0){ ?>
      <li class="<?php if(ceil($per_page/10)==$i){ echo "active";} ?>"><a rel="noopener" href="javascript:void(0);" class="for_per" ford="<?php echo $i ?>" per_page="<?php echo "0"; ?>" ><?php echo "1" ?>xx</a></li>
      <?php  }else{ ?>
     <li class="<?php if(ceil($per_page/10)==$i){ echo "active";} ?>"><a rel="noopener" href="javascript:void(0);" class="for_per"  ford="<?php echo $i ?>" per_page="<?php echo $i*10; ?>" ><?php echo $i+1 ?>yy</a></li>
     <?php   }
    	?>
   
    
    <?php } ?>
    


    <?php }*/ ?>
    
    <li <?php /* class="<?php if($per_page >= $count_records){ echo 'disabled'; } ?>"*/ ?> <?=$endcss; ?>>
        <a rel="noopener" href="javascript:void(0);" class="<?= $next?>" per_page="<?php echo $per_page + 10; ?>">Next</a>
    </li>
    <li <?=$endcss; ?>><a rel="noopener" href="javascript:void(0)" class="<?= $last?>" per_page="<?php echo ceil($count_records/10)*10 - 10; ?>">Last</a></li>
</ul>
        
<script>

$(".for_per,.previous,.next,.last,.fast").click(function(){
	for_per=$(this).attr("ford");
	per_page=$(this).attr("per_page");
	url="<?php echo base_url() ?>/<?= $Page_name; ?>/?pg="+per_page;
	window.location.href=url;
  
  });
  $(".page_btn").click(function(){
  	//alert("ok");
 // per_page="<?php echo $per_page ?>";
// for_per=$(this).attr("ford");
  //per_page=$(this).attr("per_page");
 page_no=$('.page_no').val();

 bysearch=0;
 if(page_no!=""&&page_no!=0){
 	for_per=page_no-1;
  per_page=for_per*10;
  bysearch=1;
 }
 url="<?php echo base_url() ?>/<?= $Page_name; ?>/?pg="+per_page;
	window.location.href=url;
  });
</script>
</div>
</div>	


<div class="right-side-b blog_msec_right">
<div class="rsection wow fadeInRight animated animated">
		<h2>Recent Post</h2>
			<div class="section-data-r">
			<?php 
			$tbl_result = $this->db->query("select * from tbl_blog order by id desc limit 10")->result();
			foreach($tbl_result as $row) { ?>
				<div class="rcnt_loop_blg"> 
					<div class="rcnt_sidebar_img"><a href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>"><img src="<?= $url_path ?>/<?= $row->photo ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""></a></div>
					<div class="rcnt_sidebar_cnt">
						<div class="sidebar-title"><a href="<?= base_url();?>blogview/<?php echo strtolower(str_replace(" ","-",$row->url)); ?>"><?php echo $row->title;?></a></div>
						<div class="sidebar-date">Posted by on <?php echo $row->date;?></div>
					</div>
				</div>
			<?php } ?>		
			</div>
 
		
		</div>	
		
		

			</div>

</div>	
</div>