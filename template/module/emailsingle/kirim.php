<?php

$path = 'upload/' . $_FILES["resume"]["name"];
move_uploaded_file($_FILES["resume"]["tmp_name"], $path);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "library/PHPMailer.php";
require_once "library/Exception.php";
require_once "library/OAuth.php";
require_once "library/POP3.php";
require_once "library/SMTP.php";
$mail = new PHPMailer;

//Enable SMTP debugging. 
$mail->SMTPDebug = 3;
//Set PHPMailer to use SMTP.
$mail->isSMTP();
//Set SMTP host name                          
$mail->Host = "tls://smtp.gmail.com"; //host mail server
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;
//Provide username and password     
$mail->Username = "skripsi.hbb@gmail.com";   //nama-email smtp          
$mail->Password = "actcbza2b3";           //password email smtp
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";
//Set TCP port to connect to 
$mail->Port = 587;

$mail->setFrom('skripsi.hbb@gmail.com', 'Hotel Batung Batulis Banjarbaru');
$mail->addAddress($_POST['email']); //email penerima
//add attachment
$mail->AddAttachment($path);     //Adds an attachment from a path on the filesystem
$mail->isHTML(true);

$mail->Subject = $_POST['subjek']; //subject
$mail->Body    = $_POST['pesan']; //isi email
$mail->AddEmbeddedImage('image/logo.png', 'logo_mynotescode', 'logo.png'); // Aktifkan jika ingin menampilkan gambar dalam email
$mail->AltBody = "PHP mailer"; //body email (optional)
if (!$mail->send()) {
	echo "Mailer Error: " . $mail->ErrorInfo;
} else {
	echo "<script>alert('Pesan Anda berhasil terkirim, terima kasih');history.back()</script>";
	unlink($path);
}
