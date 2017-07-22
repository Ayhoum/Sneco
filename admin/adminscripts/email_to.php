<?php
session_start();
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
    if (isset($_GET['senderf']) && isset($_GET['receiverf']) && isset($_GET['mtrn1']) && isset($_GET['mtrn5']) && isset($_GET['mtrn10'])&& isset($_GET['email'])) {

        $senderf   = $_GET['senderf'];
        $receiverf = $_GET['receiverf'];
        $mtrn1     = $_GET['mtrn1'];
        $mtrn5     = $_GET['mtrn5'];
        $mtrn10    = $_GET['mtrn10'];
        $email     = $_GET['email'];

    }
    $mail = new PHPMailer(); // defaults to using php "mail()"
    $body = "This Transaction is ready to be payed !!";
    $body .= "Kind regards, ";
    $body .= "Anas Alsirafy";
    $address1 = "a.alsirafy@sneco.nl";
    $mail->AddAddress($email);
    $mail->AddbCC($address1, "Alaa Semsemea");
    $mail->AddbCC($address2, "Ayham Najem");
    $mail->AddbCC($address, "Anas Alsirafy");
    $mail->Subject = "Your Invoice";
    $mail->MsgHTML($body);
    $pdf = "{$senderf}{$receiverf}{$mtrn1}{$mtrn5}{$mtrn10}.pdf";
    $mail->AddAttachment("../out_transaction_pdf/$pdf");      // attachment
    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        header("Location: agentscripts/transaction.php");
    }
}
?>