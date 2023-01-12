<?php
   if(isset($_POST) && $_POST['contact']){   
        $_POST = array_map('trim', $_POST);    
        $to = 'satishspectrumatmetro@gmail.com';
        $header = "MIME-Version: 1.0\r\n";
        $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $header .= 'To: '.$to.'' . "\r\n";
        $header .= 'From: '.$_POST['email'].'' . "\r\n";
        $body='';

        $body = "<html><body><table border='0' cellpadding='0' cellspacing='0' width='100%' style='border-width:1px solid' bordercolor='#000000'>";	
        $body .="<tr bgcolor='800000'><td width='20%' colspan=3><p style='margin-left:10' text-align='center'><font size=2 color='ffffff' face=verdana><strong>Enquiry</strong></font></p></td></tr>";
        $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Name&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['name'] ."</font></td></tr>";
        $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Email&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['email'] ."</font></td></tr>";
        $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Phone&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['contact'] ."</font></td></tr>";
		 $body .="<tr><td width='20%'  align='right'><font size='2' face='Verdana'><b>Message&nbsp;</b></font></td><td width='4%'  align='center'><font size='2' face='Verdana'><b>:</b></font></td><td width='66%' > <font size='2' face='Verdana'>". $_POST['msg'] ."</font></td></tr>";
        $body .="<tr><td width='100%'  colspan='3'></td></tr>";
        $body .="</table></body></html>";

	    $subject	= "Enquiry for Spring Meadows Flats";

        $sentmail = mail($to, $subject, $body, $header);       
	    $returnBody .= "<p style='line-height:20px; padding:10px; text-align: center;'> Thanks, we will contact you soon </p>";		
        echo $returnBody;
       
        
     }
?>
