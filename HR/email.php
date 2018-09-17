<?php
$to = "jitesh.gupta1909@gmail.com";

$subject = "Message from SBPL";

$headers = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers = "From: jitesh.gupta77@gmail.com\r\n";

$headers .= "Reply-To: jitesh.gupta77@gmail.com\r\n";

$headers .= "Return-Path: jitesh.gupta77@gmail.com\r\n";

$text ="Hi ".$_REQUEST['name'].","."\r\n" .

"You have a received message from SBPL"."\r\n" .

"".$_REQUEST['message']."\r\n" .

"<br>Sender Name: ".$_REQUEST['name']." <br> Sender Email:".$_REQUEST['email']." <br> Sender Subject:".$_REQUEST['subject']."<br>Message: ".$_REQUEST['message']."";
$txt = wordwrap($text, 70);

if (mail($to,$subject,$txt,$headers, '-freturn@sbplinfra.com')) {
    echo 1;

} else {
    echo 0;
    
}
?>

