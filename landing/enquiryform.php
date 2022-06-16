<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$email=$_POST['email'];
$to="starsiteindia@gmail.com";

// Your subject
$subject=$_POST['subject'];

// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		
// Additional headers
		$headers .= 'To: Info <contact@stansys.co.in>' . "\r\n";
		$headers .= 'From: '.$email.' <'.$email.'>' . "\r\n";

// Your message
$name=$_POST['name'];
$mobile=$_POST['phone'];
$name=$_POST['email'];
$mobile=$_POST['plan'];
$name=$_POST['pin'];
//$mobile=$_POST['message'];

$message="From : ".$email."\n";
$message.="Name : ".$name."\n";
$message.="Phone Number : ".$phone."\n";
$message.="Floor Plan : ".$plan."\n";
$message.="Pin Code : ".$pin."\n";
$message.="Message : ".$message."\n";
$message.=$_POST['message'];


// send email
$sentmail = mail($to,$subject,$message,$header);

?>
 <script type="text/javascript">
    alert("Thanks for mailing... We will get back u soon...");

  </script>
  <?php
  echo "<script>location='index.html'</script>";
  ?>
</body>
</html>