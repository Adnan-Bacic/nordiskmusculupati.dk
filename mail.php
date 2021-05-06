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

    $emailTo = 'kontakt@nordiskmusculupati.dk';
    $headers = 'From: ' . $email;
    $inboxText = "Name: {$name} \n E-mail: {$email} \n Subject: {$subject} \n Message: {$message} \n Phone: {$phone}";

    $mes = wordwrap($message, 70);

    //send mail
    $res = mail($emailTo, $subject, $inboxText, $headers);

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex justify-content-center mt-5">
        <div class="row">
            <div class="col-12">
                <?php
                if($_SESSION["msg"] == 'Email er sendt'){
                    ?>
                    <h1>Email sendt</h1>
                    <a href="https://nordiskmusculupati.dk/">
                        <button class="btn btn-primary">Tilbage til forsiden</button>
                    </a>
                    <?php
                } else {
                    ?>
                    <h1>Email ikke sendt</h1>
                    <a href="https://nordiskmusculupati.dk/kontakt">
                        <button class="btn btn-primary">Tilbage til kontakt</button>
                    </a>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>