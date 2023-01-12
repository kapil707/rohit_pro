<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header text-center">
                <div class="dropdown profile-element"> <span>
                	<?php 
					if($this->session->userdata("user_type") !=""){ ?>
                    <img alt="image" class="img-circle" src="<?= base_url()?>uploads/manage_users/photo/<?= $this->session->userdata("image") ?>" width="100" />
                    <?php } else { 
					?>
                    <img alt="image" class="img-circle" src="<?= base_url()?>uploads/manage_profile/photo/unapproved.jpg" width="100" />
                    <?php
					}?>
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"><?= $this->session->userdata("name"); ?></strong>
                     </span> <span class="text-muted text-xs block"><?php $user_type1 = $this->session->userdata("user_type"); ?>
                     <?php echo str_replace("_"," ",$user_type1); ?><b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="<?= base_url()?>admin/dashboard/edit_profile">Edit Profile</a></li>
                        <?php /* <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                       	<li class="divider"></li> */ ?>
                        <li><a href="<?= base_url()?>admin/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    RE+
                </div>
            </li>
            <li <?php if($Page_menu=="dashboard") { ?> class="active" <?php } ?>>
                <a href="<?= base_url()?>admin/dashboard">
                <i class="fa fa-th-large"></i>
                <span class="nav-label">Dashboard</span>
                </a>
            </li>
            <?php
			$user_type = $this->session->userdata("user_type");
			$query = $this->db->query("select DISTINCT tbl_permission_settings.page_type from tbl_permission_settings,tbl_permission_page where tbl_permission_settings.page_type=tbl_permission_page.page_type and user_type='$user_type' order by sorting_order asc");
			$menu = $query->result();
			foreach($menu as $mymenu)			{ 								$menu1 = $this->db->query("select * from tbl_permission_page where  page_type='$mymenu->page_type' order by sorting_order asc")->row();				
				if($mymenu->page_type=="manage_website" || $mymenu->page_type=="manage_fb_google"){
				if($mymenu->page_type=="manage_website"){				?>				<li <?php if($Page_name=="manage_website") { ?> class="active" <?php } ?>>					<a href="#">					<?php if(base64_decode($menu1->fafa_icon)==""){ ?>					<i class="fa fa-th-large"></i>					<?php } else { ?>					<?= base64_decode($menu1->fafa_icon); ?>					<?php } ?>					<span class="nav-label">Manage Website</span><span class="fa arrow"></span></a>					<ul class="nav nav-second-level collapse">						<li <?php if($Page_menu=="title") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/title">Title</a></li>						<li <?php if($Page_menu=="logo") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/logo">Logo</a></li>
						<li <?php if($Page_menu=="logo2") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/logo2">Logo2</a></li>
						<li <?php if($Page_menu=="logo3") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/logo3">Logo3</a></li>
						<li <?php if($Page_menu=="logo4") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/logo4">Logo4</a></li>
						<li <?php if($Page_menu=="ebrochure") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/ebrochure">e-Brochure</a></li>
						<li <?php if($Page_menu=="ebrochurestatus") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/ebrochurestatus">e-Brochure Status</a></li>
						<li <?php if($Page_menu=="popup") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/popup">Popup</a></li>
						<li <?php if($Page_menu=="popupstatus") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/popupstatus">Popup Status</a></li>
						<li <?php if($Page_menu=="icon") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/icon">Icon</a></li>						<li <?php if($Page_menu=="topphone") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/topphone">Top Phone</a></li>						<li <?php if($Page_menu=="topemail") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/topemail">Top Email</a></li>						<li <?php if($Page_menu=="toptext") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/toptext">Top Text</a></li>
						<li <?php if($Page_menu=="map") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/map">Map</a></li>						<li <?php if($Page_menu=="footeraboutus") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footeraboutus">Footer About Us</a></li>						<li <?php if($Page_menu=="footeraddress") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footeraddress">Footer Address</a></li>
						<li <?php if($Page_menu=="footeraddress1") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footeraddress1">Footer Address1</a></li>						<li <?php if($Page_menu=="footeremail") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footeremail">Footer Email</a></li>						<li <?php if($Page_menu=="footerphone") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footerphone">Footer Phone</a></li>						<li <?php if($Page_menu=="footercopyright") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footercopyright">Footer Copy Right</a></li>						<li <?php if($Page_menu=="footerimage") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footerimage">Footer Image</a></li>						<li <?php if($Page_menu=="facebook") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/facebook">Facebook</a></li>						<li <?php if($Page_menu=="twitter") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/twitter">Twitter</a></li>						<li <?php if($Page_menu=="googleplus") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/linkedin">linkedin</a></li>
						<li <?php if($Page_menu=="android") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/googleplus">Google +</a></li>						<li <?php if($Page_menu=="youtube") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/youtube">youtube</a></li>						<li <?php if($Page_menu=="meta_title") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/meta_title">Meta Title</a></li>						<li <?php if($Page_menu=="meta_keywords") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/meta_keywords">Meta Keywords</a></li>						<li <?php if($Page_menu=="meta_discription") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/meta_discription">Meta Discription</a></li>
						<li <?php if($Page_menu=="google_code") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/google_code">Google Code</a></li>
						<li <?php if($Page_menu=="job_description") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/job_description">Job Discription</a></li>
						<li <?php if($Page_menu=="whatsappno") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/whatsappno">Whats App No</a></li>
						<li <?php if($Page_menu=="email_for_lead") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/email_for_lead">Email For Lead</a></li>
						<li <?php if($Page_menu=="email_for_career_lead") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/email_for_career_lead">Email For 
						Career Lead</a></li>					</ul>				</li>				<?php				}								if($mymenu->page_type=="manage_fb_google"){?>				 <li <?php if($Page_name=="manage_fb_google") { ?> class="active" <?php } ?>>					<a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Manage Facebook / Google Api</span><span class="fa arrow"></span></a>					<ul class="nav nav-second-level collapse">						<li <?php if($Page_menu=="google_clientId") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_fb_google/add/google_clientId">Google clientId</a></li>						<li <?php if($Page_menu=="google_clientSecret") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_fb_google/add/google_clientSecret">Google clientSecret</a></li>						<li <?php if($Page_menu=="google_appname") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_fb_google/add/google_appname">Google AppName</a></li>						<li <?php if($Page_menu=="fb_app_id") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_fb_google/add/fb_app_id">Facebook App ID</a></li>						<li <?php if($Page_menu=="price_icon") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_fb_google/add/fb_app_secret">Facebook App Secret</a></li>					</ul>				</li>				<?php }
			}
			else			{				if($this->Admin_Model->permissions_check_menu($mymenu->page_type)==1){
				?> 
				<li <?php if($Page_menu==$mymenu->page_type) { ?> class="active" <?php } ?>>				
                <a href="<?= base_url()?>admin/<?php echo $mymenu->page_type ?>">				<?php if(base64_decode($menu1->fafa_icon)==""){ ?>
                <i class="fa fa-th-large"></i>				<?php } else { ?>				<?= base64_decode($menu1->fafa_icon); ?>				<?php } ?>
                <span class="nav-label">
				<?= $menu1->page_title;	?>
				</span> 
                </a>
            </li>
            <?php }				} 		}?>
			
			
			
			
			

    </div>
</nav>