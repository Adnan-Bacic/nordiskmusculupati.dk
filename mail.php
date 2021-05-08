<?php
ob_start();
session_start();

session_unset();
session_destroy();
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/
			
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        

    $valid = 0;
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $valid = 1;
    } else {
    $valid = 0;
    }

    $emailTo = 'kontakt@nordiskmusculupati.dk';
    $headers = 'From: ' . $email;
    $inboxText = "Name: {$name} \n E-mail: {$email} \n Phone: {$phone} \n Subject: {$subject} \n Message: {$message}";

    $mes = wordwrap($message, 70);

    $res = 0;
    if($valid == 1){
    //send mail
    $res = mail($emailTo, $subject, $inboxText, $headers);
    }

    if($res == 1){
        $_SESSION["msg"] = "Email er sendt";
    } else {
        $_SESSION["msg"] = "Email ikke sendt";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nordisk Musculupati</title>
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php
    if($res == 1){
        ?>
        <script>
            localStorage.setItem('mailSent', '1');
            window.history.back();
            //window.location.href = "http://localhost:3000/kontakt";
        </script>
        <?php
    } else {
        ?>
        <script>
            localStorage.setItem('mailSent', '0');
            window.history.back();
        </script>
        <?php
    }
    ?>
</head>
<body>
</body>
</html>