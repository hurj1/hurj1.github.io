<?php


$to = $_POST['mail'];
$subject = "Thank You for your feedback: ". $_POST['fullname'];
$txt = $_POST['subject'];
$headers = "From:" . $_POST['mail']  . "\r\n" . "CC: hurj@kean.edu";

mail($to,$subject, $txt, $headers);

?>
