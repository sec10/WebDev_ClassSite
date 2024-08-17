<?php 
require("Includes/class.phpmailer.php");
include("Includes/class.smtp.php"); 

 
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Email = $_POST['Email'];
$Message = $_POST['Message'];
 
$mail = new PHPMailer;

$mail->IsSMTP(); 

    
$mail->SMTPDebug = 2;
$mail->Host = "xxxxx@gmail.com"; // SMTP server 
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->SMTPSecure = "ssl"; // sets the prefix to the server
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->Username = "xxxxx@gmail.com"; // GMAIL username
$mail->Password = "password"; // GMAIL password
 
 
$mail->SetFrom('xxxxxxx@gmail.com', 'FirstName');
 
$mail->AddReplyTo("xxxxxxx.com","FirstName");

$mail->Subject = "Contact Form";

 
$address = "xxxxx@gmail.com";
$mail->AddAddress($address, "Shannon");

$mail->Body="
First Name: $FirstName
Last Name: $LastName
Email: $Email
Message: $Message";
 
if(!$mail->Send()) {
 
echo "Mailer Error: " . $mail->ErrorInfo;
 
} else {
 
echo "<h1>Thank you.</h1>";
 
}

?>
