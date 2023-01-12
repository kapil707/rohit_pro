<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Manage_category extends CI_Controller {
	var $Page_title = "Manage Category";	var $Page_name  = "manage_category";
	var $Page_view  = "manage_category";
	var $Page_menu  = "manage_category";
	var $page_controllers = "manage_category";
	var $Page_tbl   = "tbl_category";
	
	var $Image_Width   = "550";
	var $Image_Height  = "300";
	
	var $Image_Width1   = "1200";
	var $Image_Height1  = "300";
	public function index()
	{
		$page_controllers = $this->page_controllers;
		redirect("admin/$page_controllers/view");
	}	
	public function add()
	{
		error_reporting(0);
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/				$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;				$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);				$data['title1'] = $Page_title." || Add";
		$data['title2'] = "Add";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;			$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("Add","admin/$page_controllers/add");				$tbl = $Page_tbl;			
		$data['url_path'] 	= base_url()."uploads/$page_controllers/photo/main/";
		$data['url_resize'] = base_url()."uploads/$page_controllers/photo/resize/";
		$upload_path 		= "./uploads/$page_controllers/photo/main/";
		$upload_resize 		= "./uploads/$page_controllers/photo/resize/";
				$system_ip = $this->input->ip_address();		$url = $property_category = $show_in_menu = $theme = $title_show = $show_in_footer_menu = $show_in_home_banner = $show_in_cat_page = $title_color = $android_menu = "";
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('name','Name',"required");
			//$this->form_validation->set_rules('sort_order','Sort Order','required|trim|callback_sort_order_check|numeric|greater_than[0]');
			if ($this->form_validation->run() == FALSE)
			{
				$message = "Check Validation.";
				$this->session->set_flashdata("message_type","warning");
			}
			else
			{
												//$name = ucwords(strtolower($name));
				$name = base64_encode(strtolower($name));						$result = "";
				$dt = array(
				'user_id'=>$user_id,
				'name'=>$name,
				);
				$result = $this->Scheme_Model->insert_fun($tbl,$dt);
				$property_title = base64_decode($property_title);
				if($result)
				{
					$message_db = "($property_title) -  Add Successfully.";
					$message = "Add Successfully.";
					$this->session->set_flashdata("message_type","success");
				}
				else
				{
					$message_db = "($property_title) - Not Add.";
					$message = "Not Add.";
					$this->session->set_flashdata("message_type","error");
				}
			}
			if($message_db!="")
			{
				$message = $Page_title." - ".$message;
				$message_db = $Page_title." - ".$message_db;
				$this->session->set_flashdata("message_footer","yes");
				$this->session->set_flashdata("full_message",$message);
				$this->Admin_Model->Add_Activity_log($message_db);
				if($result)
				{
					redirect(base_url()."admin/$page_controllers/edit/$result");
				}
			}
		}				$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/add",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}
	public function view()
	{
		error_reporting(0);
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/				$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;			$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);				$data['title1'] = $Page_title." || View";
		$data['title2'] = "View";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;			
		$this->breadcrumbs->push("Admin","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("View","admin/$page_controllers/view");				$tbl = $Page_tbl;			
		$data['url_path'] 	= base_url()."uploads/$page_controllers/photo/main/";
		$data['url_resize'] = base_url()."uploads/$page_controllers/photo/resize/";
		$upload_path 		= "./uploads/$page_controllers/photo/main/";
		$upload_resize 		= "./uploads/$page_controllers/photo/resize/";
				extract($_POST);
		if(isset($Delete))
		{	
			$where = array('id'=>$delete_id,'status'=>"5",'school_id'=>$school_id);
			$this->Scheme_Model->delete_fun($tbl,$where);					$where = array('id'=>$delete_id,'school_id'=>$school_id);
			$dt = array('status'=>"5");
			$this->Scheme_Model->edit_fun($tbl,$dt,$where);	
		}						$query = $this->db->query("select * from $tbl order by id desc");
  		$data["result"] = $query->result();				$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/view",$data);
		$this->load->view("admin/header_footer/footer",$data);	}	public function edit($id)
	{
		error_reporting(0);
		/******************session***********************/
		$user_id = $this->session->userdata("user_id");
		$user_type = $this->session->userdata("user_type");
		/******************session***********************/				$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;				$this->Admin_Model->permissions_check_or_set($Page_title,$Page_name,$user_type);			$data['title1'] = $Page_title." || Edit";		$data['title2'] = "Edit";
		$data['Page_name'] = $Page_name;
		$data['Page_menu'] = $Page_menu;			$this->breadcrumbs->push("Edit","admin/");
		$this->breadcrumbs->push("$Page_title","admin/$page_controllers/");
		$this->breadcrumbs->push("Edit","admin/$page_controllers/edit");				$tbl = $Page_tbl;			
		$data['url_path'] 	= base_url()."uploads/$page_controllers/photo/main/";
		$data['url_resize'] = base_url()."uploads/$page_controllers/photo/resize/";
		$upload_path 		= "./uploads/$page_controllers/photo/main/";
		$upload_resize 		= "./uploads/$page_controllers/photo/resize/";
		
		$data["Image_Width"]  = $this->Image_Width;
		$data["Image_Height"] = $this->Image_Height;
		$data["Image_Width1"]  = $this->Image_Width1;
		$data["Image_Height1"] = $this->Image_Height1;
				$system_ip = $this->input->ip_address();		$menu_set_id = $property_category = $show_in_menu = $show_in_footer_menu = $show_in_home = $show_in_category = "";
		extract($_POST);
		if(isset($Submit))
		{
			$message_db = "";
			$this->form_validation->set_rules('name','Name',"required");
			if ($this->form_validation->run() == FALSE)
			{
				$message = "Check Validation.";
				$this->session->set_flashdata("message_type","warning");
			}
			else
			{
				$time = time();
				$date = date("Y-m-d",$time);
				$where = array('id'=>$id);				if (!empty($_FILES["image"]["name"]))				{					$row = $this->db->query("select * from $tbl where id='$id'")->row();
					unlink($upload_path.$row->photo);
					unlink($upload_resize.$row->photo);
					
					$this->Image_Model->uploadTo = $upload_path;
					$photo = $this->Image_Model->upload($_FILES['image']);
					$photo = str_replace($upload_path,"",$photo);
					
					$this->Image_Model->newPath = $upload_resize;
					$this->Image_Model->newWidth  = $this->Image_Width;
					$this->Image_Model->newHeight = $this->Image_Height;
					$this->Image_Model->resize();
					
					$this->Main_Model->image_to_webp($data['url_path'],$photo,$upload_path,$upload_path);
					
					$this->Main_Model->image_to_webp($data['url_resize'],$photo,$upload_resize,$upload_resize);
				
					$photo = $photo.".webp";				}				else				{					$photo = $old_image;				}					if (!empty($_FILES["image1"]["name"]))
				{
					$row = $this->db->query("select * from $tbl where id='$id'")->row();
					unlink($upload_path.$row->photo1);
					unlink($upload_resize.$row->photo1);
					
					$this->Image_Model->uploadTo = $upload_path;
					$photo1 = $this->Image_Model->upload($_FILES['image1']);
					$photo1 = str_replace($upload_path,"",$photo1);
					
					$this->Image_Model->newPath = $upload_resize;
					$this->Image_Model->newWidth  = $this->Image_Width1;
					$this->Image_Model->newHeight = $this->Image_Height1;
					$this->Image_Model->resize();
					
					$this->Main_Model->image_to_webp($data['url_path'],$photo1,$upload_path,$upload_path);
					
					$this->Main_Model->image_to_webp($data['url_resize'],$photo1,$upload_resize,$upload_resize);
				
					$photo1 = $photo1.".webp";				}
				else
				{
					$photo1 = $old_image1;
				}
								//$name = ucwords(strtolower($name));
				$name = base64_encode($name);
				$url = strtolower($url);
				$description = base64_encode($description);								$result = "";
				$dt = array(
				'user_id'=>$user_id,
				'sort_order'=>$sort_order,
				'name'=>$name,
				'url'=>$url,
				'menu_set_id'=>$menu_set_id,
				'property_category'=>$property_category,
				'show_in_menu'=>$show_in_menu,
				'show_in_footer_menu'=>$show_in_footer_menu,
				'show_in_home'=>$show_in_home,
				'show_in_category'=>$show_in_category,
				'photo'=>$photo,
				'photo1'=>$photo1,
				'description'=>$description,
				'status'=>$status,
				'update_date'=>$date,
				'update_time'=>$time,
				'system_ip'=>$system_ip,
				);				$result = $this->Scheme_Model->edit_fun($tbl,$dt,$where);							$property_title = base64_decode($property_title);
				$address = base64_decode($address);
				$description = base64_decode($description);								$old_property_title = base64_decode($old_property_title);
				$old_address = base64_decode($old_address);
				$old_description = base64_decode($old_description);								$change_text = "";								$change_text = $old_property_title." - ($change_text)";						if($result)
				{
					$message_db = "$change_text - Edit Successfully.";
					$message = "Edit Successfully.";
					$this->session->set_flashdata("message_type","success");
				}
				else
				{
					$message_db = "$change_text - Not Add.";
					$message = "Not Add.";
					$this->session->set_flashdata("message_type","error");
				}
			}
			if($message_db!="")
			{
				$message = $Page_title." - ".$message;
				$message_db = $Page_title." - ".$message_db;
				$this->session->set_flashdata("message_footer","yes");
				$this->session->set_flashdata("full_message",$message);
				$this->Admin_Model->Add_Activity_log($message_db);
				if($result)
				{
					redirect(current_url());
					//redirect(base_url()."admin/$page_controllers/view");
				}
			}
		}		$query = $this->db->query("select * from $tbl where id='$id'");
  		$data["result"] = $query->result();			$this->load->view("admin/header_footer/header",$data);
		$this->load->view("admin/$Page_view/edit",$data);
		$this->load->view("admin/header_footer/footer",$data);
	}		public function change_url()
	{
		error_reporting(0);
		$id = $_POST["id"];
		$url = $_POST["url1"];			$query = $this->db->query("select * from tbl_category where url='$url' and id!='$id'")->row();
		if($query->id)
		{
			echo "Error";
		}
		else
		{
			echo "ok";		}
	}	public function delete_rec()
	{
		$id = $_POST["id"];
		$Page_title = $this->Page_title;
		$Page_tbl = $this->Page_tbl;
		$result = $this->db->query("delete from $Page_tbl where id='$id'");
		if($result)
		{
			$message = "Delete Successfully.";
		}
		else
		{
			$message = "Not Delete.";
		}
		$message = $Page_title." - ".$message;
		$this->Admin_Model->Add_Activity_log($message);
		echo "ok";
	}		public function delete_photo()
	{
		$path = $_POST["path"];
		$type_me = $_POST["type_me"];				$Page_title = $this->Page_title;
		$Page_name 	= $this->Page_name;
		$Page_view 	= $this->Page_view;
		$Page_menu 	= $this->Page_menu;
		$Page_tbl 	= $this->Page_tbl;
		$page_controllers 	= $this->page_controllers;
						$upload_path = "./uploads/$page_controllers/photo/";
		$result = $this->db->query("update $Page_tbl set $type_me='' where $type_me='$path'");
		if($result!="")
		{
			$filename = $upload_path.$path;
			$message = "Delete Photo Successfully.";
			if (file_exists($filename)) 
			{
    			unlink($filename);
			}
		}
		else
		{
			$message = "Photo Not Update.";
		}
		$message = $Page_title." - ".$message;
		$this->Admin_Model->Add_Activity_log($message);
		echo "ok";
	}		public function sort_order_check($str)
	{			$sort_order = $this->input->post('sort_order');		$Page_tbl 	= $this->Page_tbl;				$query =  $this->db->query ("select id from $Page_tbl where sort_order='$sort_order'");
		$count	=  $query->num_rows();
		if ($count > 0)		{
			 $this->form_validation->set_message('sort_order_check','This field already used in database Please try different!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}