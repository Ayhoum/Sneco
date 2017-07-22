<?php
session_start();
ob_start();
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: ../agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}else if($_SESSION['role'] != "Accountant" && $_SESSION['role'] != "Admin" && $_SESSION['role'] != "Agent"){
    header("Location: ../index.php");
}
require_once('../../include/phpmailer/class.phpmailer.php');
If (isset($_GET['email'])) {
    $address = $_GET['email'];
    if (isset($_SESSION['sender']) && isset($_SESSION['receiver']) && isset($_SESSION['mtrn1']) && isset($_SESSION['mtrn5']) && isset($_SESSION['mtrn10'])&& isset($_GET['email'])) {

        $senderf   = $_SESSION['sender'];
        $receiverf = $_SESSION['receiver'];
        $mtrn1     = $_SESSION['mtrn1'];
        $mtrn5     = $_SESSION['mtrn5'];
        $mtrn10    = $_SESSION['mtrn10'];
        $email     = $_GET['email'];

    }
    $mail = new PHPMailer(); // defaults to using php "mail()"
    $body = "This Transaction is ready to be payed !!<br>";
    $body .= "Kind regards, <br>";
    $body .= "Anas Alsirafy<br>";
    $address1 = "a.alsirafy@sneco.nl";
    $mail->AddAddress($email);
    $mail->AddbCC($address1, "Alaa Semsemea");
    $mail->AddbCC($address2, "Ayham Najem");
    $mail->AddbCC($address, "Anas Alsirafy");
    $mail->Subject = "Your Invoice";
    $mail->MsgHTML($body);
    $pdf= "{$senderf}{$receiverf}{$mtrn1}{$mtrn5}{$mtrn10}.pdf";
    echo $pdf;
    $mail->AddAttachment("../out_transaction_pdf/$pdf");      // attachment
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $_SESSION['sender'] = NULL;
        $_SESSION['receiver'] = NULL;
        $_SESSION['mtrn1'] = NULL;
        $_SESSION['mtrn5'] = NULL;
        $_SESSION['mtrn10'] = NULL;
        header("Location: transaction.php");
    }
}
?>