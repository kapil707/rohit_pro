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
			foreach($menu as $mymenu)
				if($mymenu->page_type=="manage_website" || $mymenu->page_type=="manage_fb_google"){
				if($mymenu->page_type=="manage_website"){
						<li <?php if($Page_menu=="logo2") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/logo2">Logo2</a></li>
						<li <?php if($Page_menu=="logo3") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/logo3">Logo3</a></li>
						<li <?php if($Page_menu=="logo4") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/logo4">Logo4</a></li>
						<li <?php if($Page_menu=="ebrochure") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/ebrochure">e-Brochure</a></li>
						<li <?php if($Page_menu=="ebrochurestatus") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/ebrochurestatus">e-Brochure Status</a></li>
						<li <?php if($Page_menu=="popup") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/popup">Popup</a></li>
						<li <?php if($Page_menu=="popupstatus") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/popupstatus">Popup Status</a></li>
						<li <?php if($Page_menu=="icon") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/icon">Icon</a></li>
						<li <?php if($Page_menu=="map") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/map">Map</a></li>
						<li <?php if($Page_menu=="footeraddress1") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/footeraddress1">Footer Address1</a></li>
						<li <?php if($Page_menu=="android") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/googleplus">Google +</a></li>
						<li <?php if($Page_menu=="google_code") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/google_code">Google Code</a></li>
						<li <?php if($Page_menu=="job_description") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/job_description">Job Discription</a></li>
						<li <?php if($Page_menu=="whatsappno") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/whatsappno">Whats App No</a></li>
						<li <?php if($Page_menu=="email_for_lead") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/email_for_lead">Email For Lead</a></li>
						<li <?php if($Page_menu=="email_for_career_lead") { ?> class="active" <?php } ?>><a href="<?= base_url()?>admin/manage_website/add/email_for_career_lead">Email For 
						Career Lead</a></li>
			}
			else
				?> 
				<li <?php if($Page_menu==$mymenu->page_type) { ?> class="active" <?php } ?>>				
                <a href="<?= base_url()?>admin/<?php echo $mymenu->page_type ?>">
                <i class="fa fa-th-large"></i>
                <span class="nav-label">
				<?= $menu1->page_title;	?>
				</span> 
                </a>
            </li>
            <?php }	
			
			
			
			
			

    </div>
</nav>