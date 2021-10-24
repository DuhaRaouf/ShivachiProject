<?php 
$mailTo = "mailto:info@shivachiwear.com";

$nameclients = $_POST['nameclients'];
$lnameclients = $_POST['lnameclients'];
$phoneclients = $_POST['phoneclients'];
$subjectclients = $_POST['subjectclients'];
$emailclients = $_POST['emailclients'];
$messageClients =$_POST['messageClients'];

// $message= $_POST['message'];
// $subject = $_POST['subject'];
// $subject = "Smart Home Client";
// therefore retaining styles
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers. From is required, rest other headers are optional
$headers .= 'From: <mailto:info@shivachiwear.com>' . "\r\n";
// Content-Type helps email client to parse file as HTML 
$message = "<html>
<head>
<title>New message from website ecc</title>
</head>
<body>
<h1>" . $subject . "</h1>
<p> First name: ". $nameclients." </p>
<p> Last name: ". $lnameclients." </p>
<p> Phone number: ". $phoneclients." </p>
<p> Subject: ". $subjectclients." </p>
<p> Email: ". $emailclients." </p>
<p> Message: ".$messageClients." </p>
</body>
</html>";
if (mail($mailTo, $subject, $message, $headers)) {
    sleep(3);
	header("Location: indexhome.html?MailSend");
}else{
	echo "Failed to send email. Please try again later";
}
?>