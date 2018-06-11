<?php

if(isset($_POST['template-contactform-submit'])){
    
    $name = $_POST['template-contactform-name']."\r\n";
    $email = $_POST['template-contactform-email']."\r\n";
    $phone = $_POST['template-contactform-phone']."\r\n\r\n";
    $subject = $_POST['template-contactform-subject'];
    $message = 'Nome: '.$name.
    'Email: '.$email.
    'Telefone: '.$phone.
     $_POST['template-contactform-message'];
   
   

   mail("info-site@jf-fozdoarelho.com,jf.fozdoarelho@gmail.com",$subject,$message,"From:info-site@jf-fozdoarelho.com"); 
  
}

?>