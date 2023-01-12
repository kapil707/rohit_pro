<?php
   if(isset($_POST) && $_POST['mobile']){   
        $_POST = array_map('trim', $_POST);   
        
        
      	//Database constant
      	$servername = "localhost";
      	$username = "gulshan_dynasty";
      	$password = "w60.dKRTzJUh";
      	$dbname = "gulshan_dynasty_db";

      	// Create connection
      	$conn = new mysqli($servername, $username, $password, $dbname);
      	// Check connection
      	if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
      	}  

		$from = "spectrummetro";
      	$sql = "INSERT INTO leads (name, email, contact, msg, source) VALUES ('".$_POST['name']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['massage']."', 'Carnival ppc')";	

      	if ($conn->query($sql) === TRUE) {
         //echo "New record created successfully";
      	} else {
        	 echo "Error: " . $sql . "<br>" . $conn->error;
      	}
      
      	$conn->close();
         
        $to = 'leadsbsi@gmail.com';
        $header = "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $header .= 'To: '.$to.'' . "\r\n";
        $header .= 'From: '.$_POST['email'].'' . "\r\n";
        $body='';

        $body = "<html><body><table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-width:1px solid' bordercolor='#000000'>";	
        $body .="<tr bgcolor='000000'><td width='20%' colspan=3><p style='margin-left:10'><font size=2 color='ffffff' face=verdana><strong>Inquiry</strong></font></p></td></tr>";
        $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Name&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['name'] ."</font></td></tr>";
        $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Email&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['email'] ."</font></td></tr>";
        $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Phone&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['mobile'] ."</font></td></tr>";
		 $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Message&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['massage'] ."</font></td></tr>";
        $body .="<tr><td width='100%'  colspan='3'></td></tr>";
        $body .="</table></body></html>";

	    $subject	= "Enquiry for Kidzisland PPC";

        $sentmail = mail($to, $subject, $body, $header);       
	    $returnBody .= "<p style='line-height:20px; padding:10px; text-align: center;'> Thanks, we will contact you soon </p>";		
        echo $returnBody;
       
	   
		$curl = curl_init();
		$mobile = $_POST['mobile'];
		$email 	= $_POST['email'];
		$name 	= $_POST['name'];
		$message = $_POST['massage'];
		$name 	= str_replace(" ","%20",$name);
		$email 	= str_replace(" ","%20",$email);
		$mobile = str_replace(" ","%20",$mobile);
		$message = str_replace(" ","%20",$message);
		$site = "kidzisland";
		$Project = "Carnival%20ppc";
		$UniqueId = time();

		curl_setopt_array($curl, array(
		CURLOPT_URL => "http://bluesapphire01.realeasy.in/WebCreate.aspx?UID=fourqt&PWD=wn9mxO76f34=&Channel=GA&Src=Google&ISD=91&Mob=$mobile&Email=$email&name=$name&City=delhi&Location=delhi&Project=$Project&Remark=$message&url=$site&UniqueId=$UniqueId",
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'GET',
		CURLOPT_HTTPHEADER => array(
		'Cookie: ASP.NET_SessionId=bx31qzk5jqzoue32z0ylgws0'
		),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		//echo $response;
        
     }

?>

<!-- Global site tag (gtag.js) - Google Ads: 590532578 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-590532578"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-590532578');
</script>

<!-- Event snippet for Spectrum PPC Conversion Code conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-590532578/f9hKCLaQ9PIBEOKfy5kC'});
</script>

