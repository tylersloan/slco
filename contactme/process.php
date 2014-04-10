
<?
// Wait a second to simulate a some latency
usleep(500000);

// edit email where contact form is sent
$email_send_to = 'appointments@carolina-oaks.com';
// edit your domain
$email_recived_from = 'carolina-oaks.com';
// edit message for a successfully sent contact form
$success_msj = "Your information has been sent and we'll be in touch with you very soon! Thanks!";
// edit error message
$error_msj = 'Whoops, something went wrong. Sorry about that. Please try again, or call 864.235.3949.';

// Pull out data from contact form
	$name = htmlspecialchars(trim($_POST['name']));
	$email = htmlspecialchars(trim($_POST['email']));
	$phone = htmlspecialchars(trim($_POST['phone']));
	$time = htmlspecialchars(trim($_POST['time']));
$email_recived_from  = str_replace ('http://', '', $email_recived_from );
$email_recived_from  = str_replace ('www.', '', $email_recived_from );
// setting HTML email function
function sendHTMLemail($HTML,$from,$to,$subject)
{
    $headers = "From: $from\r\n";
	$headers .= "MIME-Version: 1.0\r\n"; 
    $boundary = uniqid("HTMLEMAIL"); 
    $headers .= "Content-Type: multipart/alternative;".
                "boundary = $boundary\r\n\r\n"; 
    $headers .= "This is a MIME encoded message.\r\n\r\n"; 
    $headers .= "--$boundary\r\n".
                "Content-Type: text/plain; charset=ISO-8859-1\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $headers .= chunk_split(base64_encode(strip_tags($HTML))); 
    $headers .= "--$boundary\r\n".
                "Content-Type: text/html; charset=ISO-8859-1\r\n".
                "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $headers .= chunk_split(base64_encode($HTML));
	$contactmail = 'contact@'.$email_recived_from;
	mail($to,$subject,"",$headers,'-f $contactmail');
}

$HTML = '<html>
<body >
<STYLE> 

    body { width: 90%; margin: 0 auto; font-family: "Helvetica Neue";}
    table {
        width: 100%;
    }
 .headerTop { background-color:#FFCC66; border-top:0px solid #000000; border-bottom:1px solid #FFFFFF; text-align:center; }
 .adminText { font-size:10px; color:#996600; line-height:200%; font-family:verdana; text-decoration:none; }
 .headerBar { background-color:#FFFFFF; border-top:0px solid #333333; border-bottom:10px solid #FFFFFF; }
 .title { font-size:20px; font-weight:bold; color:#CC6600; line-height:110%; }
 .subTitle { font-size:11px; font-weight:normal; color:#666666; font-style:italic;  }
 td { font-size:12px; color:#000000; line-height:150%;  }
 .sideColumn { background-color:#FFFFFF; border-left:1px dashed #CCCCCC; text-align:left; }
 .sideColumnText { font-size:11px; font-weight:normal; color:#999999;  line-height:150%; }
 .sideColumnTitle { font-size:15px; font-weight:bold; color:#333333;  line-height:150%; }
 .footerRow { background-color:#FFFFCC; border-top:10px solid #FFFFFF; }
 .footerText { font-size:10px; color:#996600; line-height:100%; font-family:verdana; }
 a { color:#FF6600; color:#FF6600; color:#FF6600; }
</STYLE>
 
 
 
<table width="100%" cellpadding="10" cellspacing="0">
<tr>
<td valign="top" align="center">
 
<table width="600" cellpadding="0" cellspacing="0">
<tr>

 
</tr>
</table>
 
<table width="600" cellpadding="20" cellspacing="0" bgcolor="#FFFFFF">
<tr>
 
<td bgcolor="#FFFFFF" valign="top" style="font-size:12px;color:#000000;line-height:150%;">
 
<p>
<span style="font-size:20px;font-weight:normal;color:#3ab6c2;line-height:110%;">Looks like '.$name.' needs a new dentist!</span><br>
<span style="font-size:16px;font-weight:normal;color:rgb(90,90,90);line-height:150%;">
    <br /><span style="font-weight:lighter;line-height:1.55;color:rgb(40,40,40);">First Name:</span> '.$name.'
    <br /><span style="font-weight:lighter;line-height:1.55;color:rgb(40,40,40);">Email:</span> '.$email.'
    <br /><span style="font-weight:lighter;line-height:1.55;color:rgb(40,40,40);">Phone No:</span> '.$phone.'
    <br /><span style="font-weight:lighter;line-height:1.55;color:rgb(40,40,40);">Best time to call:</span> '.$time.'
</span></td>
</tr>
<tr>
<td style="background-color:#d66333;border-top:10px solid #FFFFFF;" valign="top" colspan="2">
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>
';
$subject = "Someone contacted you on ".$email_recived_from;
$from = $email_recived_from.' <contact@'.$email_recived_from.'>';
$to = $email_send_to;
sendHTMLemail($HTML,$from,$to,$subject);

echo $success_msj;
?>