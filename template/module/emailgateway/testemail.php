<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';
$connection = mysqli_connect("localhost", "root", "", "skripsi");

function sendEmail($email)
{
	// Instantiation and passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = 2;                      // Enable verbose debug output
		$mail->isSMTP();                                            // Send using SMTP
		$mail->Host       = 'smtp.gmail.com;';                    // Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
		$mail->Username   = 'skripsi.hbb@gmail.com';                     // SMTP username
		$mail->Password   = 'actcbza2b3';                               // SMTP password
		$mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		$mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

		//Recipients
		$mail->setFrom('skripsi.hbb@gmail.com', 'Hotel Batung Batulis Banjarbaru');
		$mail->addAddress($email);     // Add a recipient


		// Attachments
		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		// Content
		$mail->isHTML(true);                                  // Set email format to HTML
		$mail->Subject = $_POST['subjek']; //subject
		$mail->Body    = $_POST['pesan']; //isi email
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		$mail->send();
		echo 'Message has been sent';
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
}
if (isset($_POST['send'])) {
	$query = "SELECT * FROM tamu";
	$result = mysqli_query($connection, $query);
	while ($row = mysqli_fetch_array($result)) {
		$email = $row['email'];
		sendEmail($email);
		echo "<script>alert('Pesan Anda berhasil terkirim, terima kasih');history.back()</script>";
	}
}
