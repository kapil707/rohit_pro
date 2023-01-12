	$(".ticker1").modernTicker({
		effect: "scroll",
		scrollInterval: 20,
		transitionTime: 500,
		autoplay: true
	});

	
	/* Start this code for tab in menu */
	$('.mega-div-blck ul li').mouseover(function() {
		var tab_id = $(this).attr('data-tab');
		$('mega-div-blck ul li').removeClass('current');
		$('.menu-right-holder div').removeClass('current');
		$(this).addClass('current');
		$("#" + tab_id).addClass('current');
	});
	/* End this code for tab in menu */

/* Start Mobile menu open & close */

	var wind_width = $(window).width();
	
	if(wind_width <= 767){
		
		$('.nav > ul > li:has(ul)').append( "<i class='fa fa-sort-desc'>");	
		
		$('.nav > ul > li > i').click(function(){
			$(this).siblings('ul').slideToggle();
			$(this).parent().siblings().find(' > ul').slideUp();
		});
		
		$('#mbl_opn_mn_js').click(function(){
			$('.mbl_bdy_cvr_cls').fadeIn(400);
			$('#myNavbar').animate({
				right: '0px'
				},500);
		});
		

		$('#close_mbl_menu_btn img, .mbl_bdy_cvr_cls').click(function(){
			$('#myNavbar').animate({
				right: '-240px'
			},400);
			$('.mbl_bdy_cvr_cls').fadeOut(500)
		});
	
	}
	else{
		
		$('.nav > ul > li').mouseover(function(){
			$(this).find('> ul').css("display","block");
		});
		$('.nav > ul > li').mouseleave(function(){
			$(this).find('> ul').css("display", "none");
		});

	};


/* End Mobile menu open & close */	




/* Start Remove end Nice scroll in mega menu  (Dont remove code)*/
	
	/*if(wind_width <= 767 ){
		$('#reMove_class').removeClass('mCustomScrollbar');
		$('#add_mobile_width_scroll').addClass('');
	}else{
		$('#reMove_class').addClass('mCustomScrollbar');
		$('#add_mobile_width_scroll').removeClass('');
	}*/

/* End Remove end Nice scroll in mega menu */



/* Star JS for fixed Left & Right Side bar on scrolling */	
	
	$(window).load(function(){

	if(wind_width >= 961){
	
	sectionHeight = $('header').height() + $('#bread_height_js').height() + $('.banner-sec').height()-65;
	
		$(window).scroll(function(){
			/**this code for product page**/
			var windowht = $(window).height();
			
			var scrl_mesr = $(this).scrollTop();
			
			if(scrl_mesr >= sectionHeight){
				$('#left_div_js').addClass('left_fixed_div');
				
			}else{
				$('#left_div_js').removeClass('left_fixed_div');
			}
			
			var yTopMedia = $('#Get_hgt_part_js').offset().top - windowht + 120;	
			if(scrl_mesr > yTopMedia){
				
				$('#left_div_js').css({"display":"none"});
				//alert();
			}
			else{
				$('#left_div_js').css({"display":"block"});
				
			}/**this code for product page**/
			
			
			
			
			/**this code for product menu**/
			
			if(scrl_mesr >= sectionHeight){
				$('#left_mn_div_js').addClass('left_mn_fixed_div');
				
			}else{
				$('#left_mn_div_js').removeClass('left_mn_fixed_div');
			}
			
			var yTopMedia = $('#Get_hgt_part_js').offset().top - windowht + 200;	
			if(scrl_mesr > yTopMedia){
				
				$('#left_mn_div_js').css({"display":"none"});
				//alert();
			}
			else{
				$('#left_mn_div_js').css({"display":"block"});
				
			}/**this code for product menu**/
			
		
		
		

			
		});	
	
	};
	
	})
	
	
	$('.toggle_menu_left').click(function(){
		$(this).siblings('.section-data').stop().slideToggle();	
	});
		
	
/* End JS for fixed Left & Right Side bar on scrolling */

/* Start popup Enquiry */	

	$('#enq_btn_pp').on('click',function(){
		$('#pop_top').fadeIn('fast');
	});

	$('#close_main_btn').on('click',function(){
		$('#pop_top').fadeOut('fast');
	});
	
/* End popup Enquiry */	