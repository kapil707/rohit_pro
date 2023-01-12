<?php
$conn=mysqli_connect('localhost','verma2zs_bgthusr','WT@L6UVkGQ!.','verma2zs_bgthdb') or die('connection error');
$sql=mysqli_query($conn,"insert into Enquiry (projectname,websiteurl,customername,email,mobile,massege,customerip,createdate)values('test','testurl','testname','test@gmail.com','123456789','massege','123.12.32.20',NOW())");
if($sql){
	echo "Success";
}else{
	echo "Fail";
}
?>