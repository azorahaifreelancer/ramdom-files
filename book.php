
  <?php

  // define variables and set to empty values
  $name_error = $email_error = "";
  $name = $email = $phone = $message = $success = "";

  //form is submitted with POST method
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $name_error = "Preencha com o seu nome";
    } else {
      $name = test_input($_POST["name"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $name_error = "Apenas letras e espaços são permitidos";
      }
    }

    if (empty($_POST["email"])) {
      $email_error = "Preencha com o seu nome email";
    } else {
      $email = test_input($_POST["email"]);
      // check if e-mail address is well-formed
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Formato inválido";
      }
    }

    if (empty($_POST["phone"])) {
      $phone = "";
    } else {
      $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["message"])) {
      $message = "";
    } else {
      $message = test_input($_POST["message"]);
    }

    if ($name_error == '' and $email_error == '' ){
        $message_body = '';
        unset($_POST['submit']);
        foreach ($_POST as $key => $value){
            $message_body .=  "$key: $value\n";
        }
        $from = 'info@azenhaguesthouse.com';
        $to = 'info@azenhaguesthouse.com';
        $subject = 'Azenha GuestHouse';
        if (mail($to, $subject, $message)){
            $success = "Mensagem enviada, obrigado pelo contacto!";
            $name = $email = $phone = $message = '';
        }
    }

  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
