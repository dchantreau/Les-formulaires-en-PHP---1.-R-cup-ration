<?php
echo 'Thank you ' . 
htmlspecialchars($_POST["user_firstname"]) . ' ' .
htmlspecialchars($_POST["user_name"]) . ' for conctacting us about your ' . 
htmlspecialchars($_POST["animalSubject"]) .
'. We will contact you by your telephone number :' . 
htmlspecialchars($_POST["user_phone"]) . ' or by your mail : ' . 
($_POST["user_email"]) . ' soon as possible. Here your message : ' .
($_POST["user_message"]);
?>
