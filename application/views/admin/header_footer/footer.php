								</div>
function onchange_theme_header()
{
	id = $("#theme_header").val();
	$.ajax({
	type       : "POST",
	data       :  { id : id } ,
	url        : "<?= base_url()?>admin/dashboard/onchange_theme_header",
	success    : function(data){
			if(data=="ok")
			{
				java_alert_function("success","Theme Set");
			}
		}
	});
}
function onchange_theme_footer()
{
	id = $("#theme_footer").val();
	$.ajax({
	type       : "POST",
	data       :  { id : id } ,
	url        : "<?= base_url()?>admin/dashboard/onchange_theme_footer",
	success    : function(data){
			if(data=="ok")
			{
				java_alert_function("success","Website Type Set");
			}
		}
	});
}
function onchange_theme_slider()
{
	id = $("#theme_slider").val();
	$.ajax({
	type       : "POST",
	data       :  { id : id } ,
	url        : "<?= base_url()?>admin/dashboard/onchange_theme_slider",
	success    : function(data){
			if(data=="ok")
			{
				java_alert_function("success","Website Type Set");
			}
		}
	});
}
function check_login()
{
	var time1="yoyo";
	$.ajax({
	type       : "POST",
	data       :  { time1 : time1 } ,
	url        : "<?= base_url()?>admin/dashboard/check_login",
	success    : function(data){
			if(data=="notok")
			{
				window.location.href = "<?= base_url()?>admin"
			}
			else
			{
				if(data=="update")
				{
					window.location.href = "<?= base_url()?>admin/dashboard"
				}
				else
				{
					$(".script_load").html(data);
				}
			}
		}
	});
	setTimeout('check_login();',1000);
	//show_now_time1();
}
{
	$.ajax({
	type       : "POST",
	data       :  { pgtype : pgtype } ,
	url        : "<?= base_url()?>admin/dashboard/notify",
	success    : function(data){
			if(data)
			{
				$("#"+pgtype+"_div").html(data)
			}
		}
	});
}
</script>
<!-- SUMMERNOTE -->
<script src="<?= base_url()?>/assets/js/plugins/summernote/summernote.min.js"></script>
		$('.summernote').summernote();
   });
</script>
</body>
</html>