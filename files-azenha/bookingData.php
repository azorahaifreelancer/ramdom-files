
<head>
    <!-- Viewport -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!-- Icone do separador -->
    <link rel="shortcut icon" href="img/m%C3%B3.png" type="image/x-icon" />

    <!-- Titulo de Site ( este titulo é o que aparece no browser ) -->
    <title>AZENHA|GUESTHOUSE</title>
    <meta name="description" content="Azenha GuestHouse - Foz do Arelho">

    <!-- Descrição -->
    <meta name="keywords" content="1">
    <meta name="author" content="2">

    <!-- Compativel com o Edge -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fontes -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic%7cPlayfair+Display:400,700%7cGreat+Vibes' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet">

    <!-- Link dos Ficheiros Css-->
    <link rel="stylesheet" type="text/css" href="css/styles-light.css">


    <!-- Link dos Ficheiros Js -->
    <script src="js/custom.js" type="text/javascript"></script>

</head>
<?php


if(!isset($_POST['submit'])){
     header("Location:http://azenhaguesthouse.com/reservas.html");
     die();
}


if(isset($_COOKIE['checkin'])&& isset($_COOKIE['checkout'])){
if(empty($_POST['firstName']) || !isset($_POST['firstName']) || empty($_POST['lastName']) ||!isset($_POST['lastName'])||empty($_POST['firstName']) || !isset($_POST['firstName']) || empty($_POST['email']) || !isset($_POST['email'])){
    
   header("Location:http://azenhaguesthouse.com/reservas.html");
}else{

$msg = "PEDIDO DE RESERVA\r\n\r\nCheck-in: ".$_COOKIE['checkin']."\r\nCheck-out: ".$_COOKIE['checkout']."\r\nAdultos: ".$_COOKIE['adultos']."\r\nCrianças: ".$_COOKIE['criancas']."\r\nNome: ".$_POST['firstName']."\r\nUltimo nome: ".$_POST['lastName']."\r\nTelefone: ".$_POST['phone']."\r\nEmail: ".$_POST['email']."\r\nMorada: ".$_POST['address']."\r\nMensagem: ".$_POST['message'];

mail("reservas@azenhaguesthouse.com,azenhaguesthouse@gmail.com","Nova Reserva",$msg,"From: reservas@azenhaguesthouse.com" . "\r\n" ."CC: reservas@azenhaguesthouse.com");

setcookie('checkin',"",-3600);
setcookie('checkout',"",-3600);
setcookie('adultos',"",-3600);
setcookie('criancas',"",-3600);

}
}else{
    header("Location:http://azenhaguesthouse.com");
}

/*
-----------------------------------
Ligacoes e envio para base de dados
$conn = new mysqli("mysql.hostinger.pt","u933390587_host","P1vYsNG45Uer","u933390587_reser");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(isset($_POST["submit"])){
      
      
      

    $sql = "INSERT INTO reservas (checkIn,checkOut,duracaoEstadia,quarto,adultos,criancas,nome,sobrenome,telefone,email,morada,mensagem) VALUES('".$_POST['check-in']."','".$_POST['check-out']."','".$_POST['duration']."','".$_POST['rooms']."','".$_POST['adult']."','".$_POST['child']."','".$_POST['firstName']."','".$_POST['lastName']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['address']."','".$_POST['message']."')";

    $conn->query($sql);
    ------------------------------------------------------------------
    */
    
    
    echo ' <div class="l-sec col-xs-8 col-sm-6 col-md-2">
                    <a href="index.html" id="t-logo">
                        <span class="title">
                        <h1 class="logo-1">Azenha</h1>
                        <h5 class="logo-2">guesthouse</h5>
                        </span>
                    </a>
                </div>';
    
    echo "<div style='height:200px;width:180px;border:1px solid yellow;'><p>Obrigado pela sua preferencia</p><button><a href='http://azenhaguesthouse.com'>Voltar</a></button></div>"; 
   
//  }

//}


 ?>
