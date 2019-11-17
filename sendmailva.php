<?php
include("dbconnection.php");
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

	$sql="SELECT * FROM patient WHERE patientid='$_GET[patientid]' ";
	$qsql = mysqli_query($con,$sql);
	$rspat = mysqli_fetch_array($qsql);
try {
    //Server settings
    //$mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'onlinehospitalmanagements@gmail.com';                     // SMTP username
    $mail->Password   = 'ohms1234567890';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('onlinehospitalmanagements@gmail.com', 'Online Hospital Management System');
    $mail->addAddress("$rspat[mail]");     // Add a recipient
    /*$mail->addAddress('sai.anurag.naag@gmail.com');               // Name is optional
    $mail->addReplyTo('sai.anurag.naag@gmail.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name  */

    // Content
    $body='This mail has been sent to inform you that your <b>Appintment</b> has been <b>Cancelled</b> due to an <b>Emergency</b>.';
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Appointment Cancelled';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<html><head><meta http-equiv="Refresh" content="1;viewappointment.php"></head></html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>