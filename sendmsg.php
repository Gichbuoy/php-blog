<?php

// file responsible for validating data from contact form 
//   and transmitting email using SMTP (Simple_Mail_Transfer_Protocal) protocal


// open a new connection to the MySQL server
$mysqli = new mysqli('localhost', 'root', '', 'sip&stories');

//Output any connection error
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// request data using POST method, and store data in 3 variables
$fname = mysqli_real_escape_string($mysqli, $_POST['fname']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message= mysqli_real_escape_string($mysqli, $_POST['message']);  // escape string prevents sql injection - just an additional layer of security

// variable that defines recipient email address
$email2 = "lexizgichbuoy@gmail.com";
$subject = "Test Message";

// validate form data
if (strlen($fname) > 50) {
    echo 'fname_long';

} elseif (strlen($fname) < 2) {
    echo 'fname_short';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_short';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_short';

} else {   // if validation passes

    //MAILER

    require 'phpmailer/PHPMailerAutoload.php';  // include essential file in phpmailer dir

    $mail = new PHPMailer;  // create new php mailer object and store it in variable mail
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // outgoing mail provider eg:gmail    -Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'alvinkimani31@gmail.com';                 // SMTP username
    $mail->Password = 'sddffgffd';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

	$mail->AddReplyTo($email);
    $mail->From = $email2;
    $mail->FromName = $fname;
    $mail->addAddress('', 'Admin');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML -> for styling purposes

    $mail->Subject = $subject;   // email subject stored in subject var
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {    //if email is not sent 
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';   // if email is sent -> access code is sent to contact.php, and interpreted using js and ajax to alert user of success state
    }


}
?>
