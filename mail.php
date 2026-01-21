<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    $mail = new PHPMailer(true);

    if($_SERVER['REQUIRED_METHOD'] == 'POST'){

    $ime = $_POST['ime'];
    $email = $_POST['email'];
    $poruka = $_POST['poruka'];


    try{
        $mail->isSMTP();
        $mail->Host = 'mail.aquamodus.hr';
        $mail->SMTPAuth = true;
        $mail->Username = 'mailtest@aquamodus.hr';
        $mail->Password = 'tomoc29$';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($email,$ime);
        $mail->addAddress('wwwcvjetovictc030@gmail.com','Primatelj');

        $mail->isHTML(true);
        $mail->Subject = 'Testna poruka';
        $mail->Body = $poruka;
        $mail->AltBody = 'text';

        $mail->send();
        echo 'email je upjesno poslan';
    } catch(Exception $e){
        echo "Greška pri slanju s emaila: {$mail->ErrorInfo}";
    }
    }
?>