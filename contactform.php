<?php

if (isset($_POST['Submit'])) {
	$Name = $_POST['Name'];
    $Subject = $_POST['Subject'];
    $MailFrom = $_POST['Email'];
    $Message = $_POST['Message']; 
  

    $mailTo = "kean.loke@keeyaa.com.my";
    $headers = "From : ".$MailFrom;
    $txt = "You have received an email from ".$Name.".\n\n".$Message;

    mail($mailTo, $Subject, $txt, $headers);
    header("Location: index.php?mailsend");
}   

?>