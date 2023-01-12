<div class="row">	<div class="col-xs-12">		<button type="button" class="btn btn-w-m btn-info" onclick="goBack();"><< Back</button>	</div>    <div class="col-xs-12">        <!-- PAGE CONTENT BEGINS -->        <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">		<?php        foreach ($result as $row)        { ?>        	<input type="hidden" class="old_photo" name="old_photo" value="<?= $row->photo?>" />                        <div class="form-group">           		<div class="col-sm-12">                    <div class="col-sm-2 text-right">                        <label class="control-label" for="form-field-1">                            Title                        </label>                    </div>                    <div class="col-sm-10">						<input type="text" class="form-control" id="form-field-1" placeholder="Title" name="title" value="<?php echo ($row->title); ?>" />                    </div>                </div>            </div>						<div class="form-group">           		<div class="col-sm-12">                    <div class="col-sm-2 text-right">                        <label class="control-label" for="form-field-1">                            Photo                        </label>                    </div>                    <div class="col-sm-4">                        <input type="file" class="form-control" id="form-field-1" placeholder="image" name="image" />                    </div>                    <div class="col-sm-3 img_id_image1">                    	<img src="<?= $url_path ?><?= $photo1 = $row->photo; ?>" class="img-responsive" />                    </div>					<div class="col-sm-3">						<a href="javascript:void(0)" onclick="delete_photo('image1')" class="btn-white btn btn-xs">Delete</i> </a>                    </div>                </div>            </div>                        <div class="form-group">           		<div class="col-sm-12">                    <div class="col-sm-2 text-right">                        <label class="control-label" for="form-field-1">                            Description                        </label>                    </div>                    <div class="col-sm-10">						<textarea type="text" class="form-control" id="form-field-1" placeholder="Description" name="description" style="height:100px"><?php echo ($row->description); ?></textarea>                    </div>                </div>            </div>						<div class="form-group">				<div class="col-sm-6">                    <div class="col-sm-4 text-right">                        <label class="control-label" for="form-field-1">                            Category                        </label>                    </div>                    <div class="col-sm-8">                        <select name="category" id="category" data-placeholder="Select category" class="chosen-select">							<?php 							$query = $this->db->query("select * from tbl_construction where status='1' order by id asc")->result();							foreach($query as $row1) { ?>							<option value="<?= $row1->id; ?>" <?php if($row->category==$row1->id) { ?> selected <?php } ?>>								<?= $row1->title; ?>							</option>							<?php } ?>						</select>                    </div>                    <div class="help-inline col-sm-12 has-error">                        <span class="help-block reset middle">                              <?= form_error('category'); ?>                        </span>                    </div>                </div>            </div>						<div class="form-group">				<div class="col-sm-6">                    <div class="col-sm-4 text-right">                        <label class="control-label" for="form-field-1">                            Status                        </label>                    </div>                    <div class="col-sm-8">                        <select name="status" id="status" data-placeholder="Select Status" class="chosen-select" >							<option value="1" <?php if($row->status==1) { ?> selected <?php } ?>>								Active							</option>							<option value="0" <?php if($row->status==0) { ?> selected <?php } ?>>								Inactive							</option>						</select>                    </div>                    <div class="help-inline col-sm-12 has-error">                        <span class="help-block reset middle">                              <?= form_error('status'); ?>                        </span>                    </div>                </div>            </div>                        <div class="space-4"></div>            <br /><br />            <div class="clearfix form-actions">                <div class="col-md-offset-3 col-md-9">                    <button type="submit" class="btn btn-info submit_button" name="Submit">                        <i class="ace-icon fa fa-check bigger-110"></i>                        Submit                    </button>                    &nbsp; &nbsp; &nbsp;                    <button class="btn" type="reset">                        <i class="ace-icon fa fa-undo bigger-110"></i>                        Reset                    </button>                </div>            </div>		<?php } ?>        </form>        <!-- PAGE CONTENT ENDS -->    </div><!-- /.col --></div><!-- /.row --><script>function url_change(){	name = $(".name1").val();	name = name.replace(/&/g,'and');	name = name.trim(name).replace(/ /g,'-');	name = encodeURI(name).replace(/[!\/\\#,+()$~%.'":*?<>{}]/g,'');	$(".url1").html(name)	$(".url").val(name)	a_href_change(name)}function a_href_change(name){	document.getElementById("url1").href= "<?= base_url(); ?>"+name+".html"; }var error2 = 1;function change_url(){	error2 = 0;	disabled_submit_button();	$('.url_error').html("");	url1 = $('.url').val();		name = url1;	name = name.replace(/&/g,'and');	name = name.trim(name).replace(/ /g,'-');	name = encodeURI(name).replace(/[!\/\\#,+()$~%.'":*?<>{}]/g,'');	$(".url1").html(name)	$(".url").val(name)	a_href_change(name)		$.ajax({	type       : "POST",	data       :  { url1 : url1,id : '<?= $row->id; ?>',} ,	url        : "<?= base_url()?>admin/<?= $Page_name?>/change_url",	success    : function(data){			if(data!="")			{				//java_alert_function("success","Delete Successfully");				//$('.product_code_error').html("This Product SKU Already Taken");				if(data=="Error")				{					java_alert_function("error","This Product Url Already Taken")					$('.url_error').html("This Product Url Already Taken");				}				if(data=="ok")				{					java_alert_function("success","Product Url Ok");					$('.url_error').html("Product Url Ok");					error2 = 1;					disabled_submit_button();				}			}								else			{				java_alert_function("error","Something Wrong")				$('.url_error').html("Something Wrong");			}		}	});}function disabled_submit_button(){	if(error2==1)	{		$(".submit_button").prop('disabled', false);	}	else	{		$(".submit_button").prop("disabled", true);	}}</script><script>var delete_rec1 = 0;function delete_photo(type_me){	if (confirm('Are you sure Delete?')) {	$.ajax({		type       : "POST",		data       :  { type_me : type_me,id:'<?= $row->id; ?>',} ,		url        : "<?= base_url()?>admin/<?= $Page_name; ?>/delete_photo",		success    : function(data){			alert(data)				if(data!="")				{					//java_alert_function("success","Delete Successfully");					//$('.product_code_error').html("This Product SKU Already Taken");					if(data=="Error")					{						java_alert_function("error","Photo Not Delete")						$('.url_error').html("Photo Not Delete");					}					if(data=="ok")					{						$(".img_id_"+type_me).hide();						$(".old_"+type_me).val('');						java_alert_function("success","Photo Deleted");						$('.url_error').html("Photo Deleted");						error2 = 1;						disabled_submit_button();					}				}									else				{					java_alert_function("error","Something Wrong")					$('.url_error').html("Something Wrong");				}			}		});	}}</script>