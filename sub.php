<?php 
$mailTo = "mailto:info@shivachiwear.com";

$emailsub = $_POST['emailsub'];

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
<p> Email: ". $emailsub." </p>
</body>
</html>";
if (mail($mailTo, $subject, $message, $headers)) {
    sleep(3);
	header("Location: indexhome.html");
}else{
	echo "Failed to send email. Please try again later";
}
?>