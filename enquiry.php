<?php 

include './connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

$to = 'hey@ashishchawla.tech';
$subject = 'Website Enquiry';

$headers = "From: " . strip_tags($email) . "\r\n";
$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
$headers .= "CC: susan@example.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html><body>';
$message .= '<h2>Name: '.$name.'</h2>';
$message .= '<h3>Email: '.$email.'<br>';
$message .= 'Phone: '.$phone.'<br>';
$message .= 'Message: '.$msg.'</h3>';
$message .= '</body></html>';


$addToDB = $connect->prepare("INSERT INTO queries( name, email, phone, message ) VALUES (:name, :email, :phone, :message) ");
if( $addToDB->execute( array(
    ":name" => $name,
    ":email" => $email,
    ":phone" => $phone,
    ":message" => $message
)) ) {
    echo 1; 
} else {
    echo 0;
}


if( mail($to, $subject, $message, $headers) ) {
    echo 1;
} else {
    echo 0;
}


?>