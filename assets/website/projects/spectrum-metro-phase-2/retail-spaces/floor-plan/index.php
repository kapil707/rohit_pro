
<?php include('../../../../header.php') ?>
		<section class="banner-sec">
				
		
		
		<img src="<?php echo $url?>assets/img/Retail-Space.jpg"  title="Retail Space | Spectrum Metro" alt="Retail-Space At Spectrum Metro Noida Sector 75 ">
		
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

				
				<a href="<?php echo $url?>projects/spectrum-metro-phase-2/retail-spaces" style="cursor:pointer;" title="Retail Space | Spectrum Metro" > retail spaces </a>
				
												<span class='bread_arrow'>&#8250;</span>
				floor plan 
							</div>
		</div>
		<div class="mcontainer">
		<?php 
			$_GET['dropdown']="spectrum-metro-phase-2";
			$_GET['page']="retail-spaces";
			$_GET['subpage'] = "floor-plan";
			include('../../../../left-side-bar.php') 
		?>
		<div class="msection wow fadeInTop animated animated">
		  		    
			<div class="msection-contant">
			 <h2 title="Floor Plan | Retail-Space">floor plan</h2>
				<!--End of Header  Part-->
		<script src="<?php echo $url?>assets/js/bootstrap.min.js"></script>
		
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <!-- Wrapper for slides -->
    <div class="carousel-inner docs-pictures" role="listbox">
	   	
       <div class="item active" >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-1-1.jpg" src="<?php echo $url?>assets/img/retail-zoom-1-1.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-2.jpg" src="<?php echo $url?>assets/img/retail-zoom-2.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-3.jpg" src="<?php echo $url?>assets/img/retail-zoom-3.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-4.jpg" src="<?php echo $url?>assets/img/retail-zoom-4.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-5.jpg" src="<?php echo $url?>assets/img/retail-zoom-5.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-6.jpg" src="<?php echo $url?>assets/img/retail-zoom-6.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-7.jpg" src="<?php echo $url?>assets/img/retail-zoom-7.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-8-1.jpg" src="<?php echo $url?>assets/img/retail-zoom-8-1.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	   	
       <div class="item " >
        <a class="group1" href="javascript:;">
		<img data-original="<?php echo $url?>assets/img/retail-zoom-9.jpg" src="<?php echo $url?>assets/img/retail-zoom-9.jpg"  title="Retail Space | Spectrum Metro" alt="fplan-1"></a>
    </div>
	  

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
			
			</div>
		
		<!--script>


var $gallery = $('.single-item');
var slideCount = null;

$( document ).ready(function() {
    $gallery.slick({
      speed:1000,
      fade: true,
	  
      cssEase: 'linear',
      swipe: true,
      swipeToSlide: true,
	  autoPlay:true,
	 
      //touchThreshold: 10
    });
});

$gallery.on('init', function(event, slick){
  slideCount = slick.slideCount;
  setSlideCount();
  setCurrentSlideNumber(slick.currentSlide);
});

$gallery.on('beforeChange', function(event, slick, currentSlide, nextSlide){
  setCurrentSlideNumber(nextSlide);
});

function setSlideCount() {
  var $el = $('.slide-count-wrap').find('.total');
  $el.text(slideCount);
}

function setCurrentSlideNumber(currentSlide) {
  var $el = $('.slide-count-wrap').find('.current');
  $el.text(currentSlide + 1);
	}
</script-->

<!--script>
$(function () {
  $('#demo1').scrollbox();
  $('#demo2').scrollbox({
    linear: true,
    step: 1,
    delay: 0,
	 direction: 'h',
    speed: 100
  });
  $('#demo3').scrollbox({
    switchItems: 5,
    distance: 144
  });
  $('#demo4').scrollbox({
    direction: 'h',
    switchItems: 5,
    distance: 670
  });
  $('#demo6').scrollbox({
    direction: 'h',
    linear: true,
    delay: 0,
    speed: 100
  });
  $('#demo5').scrollbox({
    direction: 'h',
    linear: true,
    delay: 0,
    speed: 150
  });
  $('#demo5-backward').click(function () {
    $('#demo5').trigger('backward');
  });
  $('#demo5-forward').click(function () {
    $('#demo5').trigger('forward');
  });
});
</script-->

<!--script>
$(document).ready(function(){
	$(".enqu, .enquiry").mouseenter(function(){
		$(".enquiry").css('display' , 'block' );
		$(".header1 .enquiry").css('display' , 'none' );
	})
	$(".enqu, .enquiry").mouseleave(function(){
		$(".enquiry").css('display' , 'none');
	})
	
	$(".header1 .enqu, .header1 .enquiry").mouseenter(function(){
		$("header .enquiry").css('display' , 'none' );
		$(".header1 .enquiry").css('display' , 'block' );
	})
	$(".enqu, .enquiry").mouseleave(function(){
		$(".enquiry").css('display' , 'none');
	})
	
 
        
	})
	

</script>

 <script>
$(document).ready(function() {	  
	$( window).scroll(function(){
		if( $(this).scrollTop() > 50 ){
		$('.header1').stop(true,true).css({top :'0'});	
		}
	else{
		$('.header1').stop(true,true).css({top :'-500px'});
	}
	});
	
	var winSize = $(window).width();
	if (winSize <= 768){
	$(".copyright").insertAfter(".fright");
	}
		});
	</script>
	<script>
	$(document).ready(function(){
	$(".readmore").click(function(){
		$(".more-text").css('display' , 'block');
		$(".readmore").hide();
		$(".less").click(function(){
		$(".more-text").css('display' , 'none');	
		$(".readmore").show();	
		$('html,body').animate({
        scrollTop: $(".what-div").offset().top},
        'slow');
		})
	})
		//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1', transition:"fade"});
				$(".ajax").colorbox();
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
	
	
	})
	</script-->
	
 
<?php include('../../../../request-payemnet-price.php')?>
			
			</div>
			
		   			
			  			
			
			
				
		</div>		
		
		<?php include('../../../../right-side-bar.php') ?>
		</div>
		
		</div>
	
 <?php include('../../../../partners.php') ?>
<?php include('../../../../footer.php') ?>

  