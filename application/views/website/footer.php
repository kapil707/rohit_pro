<?php
$title 	= $this->Main_Model->get_website_data("title");
$title2 = $this->Main_Model->get_website_data("title2");
$logo   = $this->Main_Model->get_website_data("logo");
$logo2  = $this->Main_Model->get_website_data("logo2");
$logo3  = $this->Main_Model->get_website_data("logo3");
$logo4  = $this->Main_Model->get_website_data("logo4");
$popup	= $this->Main_Model->get_website_data("popup");
$popupstatus	= $this->Main_Model->get_website_data("popupstatus");
$footeraddress = $this->Main_Model->get_website_data("footeraddress");
$topphone = $this->Main_Model->get_website_data("topphone");
$topemail = $this->Main_Model->get_website_data("topemail");
$footeraddress1 = $this->Main_Model->get_website_data("footeraddress1");
$footercopyright = $this->Main_Model->get_website_data("footercopyright");

$facebook = $this->Main_Model->get_website_data("facebook");
$twitter = $this->Main_Model->get_website_data("twitter");
$linkedin = $this->Main_Model->get_website_data("linkedin");
$googleplus = $this->Main_Model->get_website_data("googleplus");
$youtube = $this->Main_Model->get_website_data("youtube");
$whatsappno = $this->Main_Model->get_website_data("whatsappno");
?>
<footer>
    <div class="container-fluid cnt_fluid_wrapper">
        <div class="row">
            <div class="col-sm-12 col-md-6 ftr_left_br">
                <div class="footer-left wow fadeInLeft animated animated">
                    <div class="flex bluesqu">
						<div class="flogo">
							<a href="<?= base_url(); ?>">
							<img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo2; ?>" alt="" class="footer_logo"></a>
						</div>
                        <div class="ftext">
							<?php echo $footeraddress; ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-3 ths_rsp_lnk">
                <div class="row">
                    <div class="footer-link">
                        <div class="footre_menu">
                            <ul>
                                <?php
								$tbl_footer_menu = $this->db->query("select * from tbl_footer_menu where status='1'")->result();
								foreach($tbl_footer_menu as $row){?>
									<li><a href="<?php echo $row->url; ?>"><?php echo $row->title; ?></a></li>
									<?php 
								}?>
                            </ul>
                        </div>
                    </div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-3 ths_rsp_sc">
                <div class="row">
                    <div class="sosal wow fadeInRight animated" data-wow-delay="0.2s">
                        <h5>Connect with Social Media</h5>
                        <ul>
                            <li><a href="<?= $facebook ?>" class="fab fa-facebook" target="_blank"></a></li>
                            <li><a href="<?= $twitter ?>" class="fab fa-twitter" target="_blank"></a></li>
                            <li><a href="<?= $linkedin ?>" class="fab fa-linkedin" target="_blank"></a></li>
                            <li><a href="<?= $googleplus ?>" class="fab fa-google-plus" target="_blank"></a></li>
                            <li><a href="<?= $youtube ?>" class="fab fa-youtube" target="_blank"></a></li>
                        </ul>
                        <p class="drop-us">Drop us a message</p>
						<?php  $footeremail = $this->Main_Model->get_website_data("footeremail"); ?>
                        <p class="mail">
							<a href="mailto:<?= $footeremail ?>"><?= $footeremail ?></a>
						</p>
						<?php $footerphone = $this->Main_Model->get_website_data("footerphone"); ?>
						<p> Phone : <?= $footerphone ?> </p>
                        <img src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo3; ?>" class="footer_logo" />                       
                    </div>
				</div>
            </div>
			<div class="col-sm-12">
				<div class="copyright text-center">
					<?php echo $footercopyright; ?>
				</div>
			</div>
		</div>			
    </div>
</footer>

<!-- Start Script -->

<script src="<?php echo base_url() ?>assets/website/assets/js/customD.js"></script>

<script src="<?php echo base_url() ?>assets/website/assets/js/slide.js"></script>

<script src="<?php echo base_url() ?>assets/website/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>





<script>
    if ($('.image-gallery').length >= 1) {

        $('.image-gallery').each(function() {

            $(this).magnificPopup({

                delegate: 'a',

                type: 'image',

                mainClass: 'mfp-with-zoom mfp-img-mobile',

                preload: [0, 2],

                gallery: {

                    enabled: true

                },

                zoom: {

                    enabled: true,

                }

            });

        });

    }
</script>



<!-- End Script -->

<script type="text/javascript">
    var $gallery = $('.single-item');

    var slideCount = null;



    $(document).ready(function() {

        $gallery.slick({

            speed: 1000,

            fade: true,



            cssEase: 'linear',

            swipe: true,

            swipeToSlide: true,

            autoPlay: true,



            //touchThreshold: 10

        });

    });



    $gallery.on('init', function(event, slick) {

        slideCount = slick.slideCount;

        setSlideCount();

        setCurrentSlideNumber(slick.currentSlide);

    });



    $gallery.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

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
</script>
</body>
</html>
<a href="https://api.whatsapp.com/send?phone=<?php echo $whatsappno ?>" class="my-float" target="_blank">
<i class="fab fa-whatsapp my-float1"></i> Whatsapp
</a>
<style>
   .my-float{
	position:fixed;
	width:180px;
	height:50px;
	bottom:25px;
	right:30px;
	background-color:#25d366;
	color:#FFF;
	border-radius:30px;
	text-align:center;
  font-size:20px;
	
  z-index:100;
}
.my-float:hover{
	text-decoration: none;
	color:#FFF;
}

.my-float1{
	margin-top:16px;
}
</style>
	<a href="" data-toggle="modal" data-target="#main_modal1" class="main_modal_open1"></a>
	<a href="" data-toggle="modal" data-target="#main_modal2" class="main_modal_open2"></a>
	<div id="main_modal" class="modal fade" role="dialog">
		<div class="modal-dialog" style="border:none;">
			<div class="modal-content" style="border:none;">
				<div class="modal-body">
					<div class="modal-header" style="background:none; border:none;">
						<button type="button" class="close close-btn" data-dismiss="modal">&times;</button>
					</div>
					<div id="head">
						<div class="head-had text-center" style="margin-top: -25px;">
							<img style="width: 50%;margin-left: 30px;" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo4; ?>" alt="<?= $title; ?>">
							<h2>DROP AN ENQUIRY</h2>
						</div>
						<form class="detailsbox" action="<?= base_url(); ?>home/lead" method="post" enctype="multipart/form-data">
							<p class="formMessages" style="color:#fff;margin:0px;"></p>
							<div class="form-group">
								<input type="text" name="name" class="form-control input-lg" placeholder="Please Enter Name" required>
							</div>
							<div class="form-group">
								<input type="text" name="mobile" class="form-control input-lg" placeholder="Please Enter Mobile" required pattern="[7-9]{1}[0-9]{9-12}" title="Phone number 10 digit with 0-9">
							</div>
							<div class="form-group">
								<input type="email" name="email" class="form-control input-lg" placeholder="Please Enter Email">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" placeholder="Please Enter Messege"required></textarea>
							</div>
							<div class="form-group">
								<center>                                        
									<input type="submit" name="submit" class="btn btn-warning btn-block" value="Submit"> </button>
								</center>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="main_modal1" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg" style="border:none;">
			<div class="modal-content" style="border:none;">
				<div class="modal-body">
					<div class="modal-header" style="background:none; border:none;">
						<button type="button" class="close close-btn" data-dismiss="modal">&times;</button>
					</div>
					<div id="head">
						<img style="width: 100%;" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $popup; ?>" alt="<?= $title; ?>">
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="main_modal2" class="modal fade" role="dialog">
		<div class="modal-dialog modal-lg" style="border:none;">
			<div class="modal-content" style="border:none;">
				<div class="modal-body">
					<div class="modal-header" style="background:none; border:none;">
						<button type="button" class="close close-btn" data-dismiss="modal">&times;</button>
					</div>
					<div id="head">
						<center>
							<img style="width: 30%;" src="<?php echo base_url() ?>uploads/manage_website/photo/main/<?php echo $logo4; ?>" alt="<?= $title; ?>">
							<h1>Thanks, we will contact you soon</h1>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>

<a title="Enquiry Now" class="quick-contact-form-link" href="javascript:open_right_form();"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;Enquiry</a>

<div class="right_form">
	<a href="javascript:close_right_form();" class="icon-close" title="Close">x</a>
	<div class="head-had">
		<h2 style="font-size:22px;margin-top:-1px;color: #283664;">GET IN TOUCH</p>
	</div>
                                            
	<p class="formMessages" style="color:#fff;margin:0px;"></p>
	<form class="detailsbox" action="<?= base_url(); ?>home/lead" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input type="text" id="name1" name="name" class="form-control input-lg" placeholder="Please Enter Name" required>
		</div>
		<div class="form-group">
			<input type="text" id="contact1" name="mobile" class="form-control input-lg" placeholder="Please Enter Mobile" required pattern="[7-9]{1}[0-9]{9-12}" title="Phone number 10 digit with 0-9">
		</div>
		<div class="form-group">
			<input type="email" id="email1" name="email" class="form-control input-lg" placeholder="Please Enter Email">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="message" placeholder="Please Enter Messege"required></textarea>
		</div>
		<div class="form-group">
			<center>                                        
				<input type="submit" name="submit" class="btn btn-warning btn-block" value="Submit" onClick="return submit_enquiry_form_header1();"> </button>
			</center>				
		</div>
		<div class="form-group" style="font-size:12px;text-align:justify">
			<input type="checkbox" checked>
			I Authorize Faifox Itinfra And Its Representatives To Call, SMS, Email Or WhatsApp Me About Its Products And Offers. This Consent Overrides Any Registration For DNC/NDNC.
		</div>
		<div class="form-group">
			<a href="javascript:void(0);" class="number" style="color: #283664;font-size:22px;font-weight:bold"><?php echo $topphone ?></a>
		</div>
	</form>      
</div> 
<script>
function open_right_form()
{
	$(".right_form").show("130")
}
function close_right_form()
{
	$(".right_form").hide("130")
}
</script>
<style>
.quick-contact-form-link
{
	background: #283664;
    padding: 7px 12px;
    box-shadow: 0 0 5px #000;
    position: fixed;
    top: 180px;
    right: -50px;
    z-index: 9;
    opacity: .9;
    width: auto;
    transform: rotate(90deg);
    cursor: pointer;
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 15px;
    font-weight: 500;
    bottom: auto;
    color: white !important;
}

.icon-close {
    position: absolute;
    z-index: 5;
    top: -10px;
    right: 10px!important;
    width: 42px;
    height: 42px;
    background: #282828;
    border: #666 1px solid;
    color: #fff!important;
    font-weight: 300;
    font-size: 18x;
    border-radius: 50%;
    opacity: 1;
    text-align: center;
    line-height: 40px;
    padding-left: 1px;
    cursor: pointer;
}

.right_form {
	background:white;
	position: fixed;
	right: 0px;
	top: 115px;
	z-index: 98;
	padding:10px;
	width:300px;
	box-shadow: 0 0 10px;
}
.logo_size
{
	width:130px
}
@media screen and (max-width: 768px){
	.f_l_c
	{
		float:left;
	}
	.logo_size
	{
		width:100px !important;
	}
	.logo_phone
	{
		margin-top:15px;
	}
}
</style>