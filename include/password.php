<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';
require('db.php');
if (isset($_POST["emailid"])) {
    // code...
    $emailid =mysqli_real_escape_string($db,$_POST["emailid"]) ;
    $query="SELECT * FROM faculty WHERE email='$emailid'";
$run= mysqli_query($db, $query);
$emailcount= mysqli_num_rows($run);
    if($emailcount){
    $userdata=mysqli_fetch_array($run);
            $username=$userdata['my_name'];
            $id=$userdata['id'];
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'naseertabia@gmail.com';                     //SMTP username
        $mail->Password   = 'NaseerUddin*20';                               //SMTP password
        $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('naseertabia@gmail.com', 'MyCamp');
        $mail->addAddress($emailid);
        $mail->addReplyTo('no-reply@gmail.com', 'No reply');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Reset Password';
        $mail->Body    = "Hi, $username. Click here to change your password <a href='http://localhost/cssejuwc_mycamp/reset-password.php?id=$id'> Reset Password</a>
                ";
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
         $_SESSION['success'] = "*/Check your mail to change your password";
            echo "<script>window.location.href='../forget-password.php';</script>";
    } catch (Exception $e) 
    { 
        $_SESSION['status'] = "*/mail not send";
            echo "<script>window.location.href='../forget-password.php';</script>";
    }
}else{
    $_SESSION['status'] = "*/user not found";
        echo "<script>window.location.href='../forget-password.php';</script>";
}
}

?>
