<?php

$msg = "Nome: ".$_POST['nome']."\r\nTelefone: ".$_POST['telefone']."\r\nEmail: ".$_POST['email']."\r\n\r\nMensagem: \r\n".$_POST['mensagem'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(isset($_POST['submit'])){
        
        if(isset($_POST['nome']) || !empty($_POST['nome']) || isset($_POST['telefone']) || !empty($_POST['telefone'])||isset($_POST['email']) || !empty($_POST['email'])||isset($_POST['mensagem']) || !empty($_POST['mensagem'])){
            mail("azenhaguesthouse@gmail.com,reservas@azenhaguesthouse.com","Mensagem",$msg,"From:  azenhaguesthouse@gmail.com");
            header("Location:index.html");
        }else{
            header("Location:index.html");
        }
    }
    
}

?>