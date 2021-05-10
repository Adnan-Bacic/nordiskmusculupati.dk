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
    if(isset($_POST['email'], $_POST['name'], $_POST['phone'], $_POST['subject'], $_POST['message'])){
        //empty strings count as isset() so make sure there is data
        if(!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['subject']) && !empty($_POST['message'])){
            
            $email = $_POST['email'];
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                

            $valid = 0;
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $valid = 1;
            }

            $emailTo = 'kontakt@nordiskmusculupati.dk';
            $headers = "From: {$email}";
            $inboxText = "Name: {$name} \n E-mail: {$email} \n Phone: {$phone} \n Subject: {$subject} \n Message: {$message}";

            $mes = wordwrap($message, 70);

            $res = 0;
            if($valid == 1){
                //send mail
                $res = mail($emailTo, $subject, $inboxText, $headers);
            }
        }
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
    <?php
    if($res == 1){
        ?>
        <script>
            localStorage.setItem('mailSent', '1');
            //window.history.back();
            window.location.href = "https://nordiskmusculupati.dk/kontakt";
        </script>
        <?php
    } else {
        ?>
        <script>
            localStorage.setItem('mailSent', '0');
            //window.history.back();
            window.location.href = "https://nordiskmusculupati.dk/kontakt";
        </script>
        <?php
    }
    ?>
</head>
<body>
</body>
</html>