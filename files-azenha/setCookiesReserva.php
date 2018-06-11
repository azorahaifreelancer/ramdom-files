<?php
if(isset($_POST['start']) && isset($_POST['end'])){
    
    setcookie('checkin',$_POST['start'],0);
    setcookie('checkout',$_POST['end'],0);
    setcookie('adultos',$_POST['room-type'],0);
    setcookie('criancas',$_POST['guest'],0);
    
    
    header("Location:http://azenhaguesthouse.com/reservas.html");
}
?>