<?php
require_once('../include/phpmailer/class.phpmailer.php');
include '../include/phpscripts/DB.php';

if(isset($_GET['senderf']) && isset($_GET['receiverf']) && isset($_GET['mtrn1']) && isset($_GET['mtrn5']) && isset($_GET['mtrn10']) && isset($_GET['agentid']) && isset($_GET['accountid'])) {

    $senderf        = $_GET['senderf'];
    $receiverf      = $_GET['receiverf'];
    $mtrn1          = $_GET['mtrn1'];
    $mtrn5          = $_GET['mtrn5'];
    $mtrn10         = $_GET['mtrn10'];
    $agentid        = $_GET['agentid'];
    $accountid      = $_GET['accountid'];
}

$mail             = new PHPMailer(); // defaults to using php "mail()"

$body             = "In the attachment you can find a copy of your transaction.";
//$body             = eregi_replace("[\]",'',$body);

$query ="SELECT * FROM TRANSACTION WHERE Sender_eName = '{$senderf}' AND Receiver_eName = '{$receiverf}' AND MTRN1 = '{$mtrn1}' AND MTRN5 = '{$mtrn5}' AND MTRN10 = '{$mtrn10}'";
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($result)){
    $sender_email = $row['Sender_Email'];

}

$query1  = "SELECT * FROM AGENT WHERE ID = '{$agentid}'";
$result1 = mysqli_query($mysqli, $query1);
while($row = mysqli_fetch_assoc($result1)){
    $agent_email = $row['Agent_Email'];
}
$address ="a.alsirafy@sneco.nl";
$address1= $sender_email;
$address2="$agent_email";
$address3="semsemea.a@hotmail.com";

$mail->AddAddress($address1, "Anas Alsirafy");
$mail->AddbCC($address);
$mail->AddbCC($address2);
$mail->AddbCC($address3);

$mail->Subject    = "Your Invoice";

$mail->MsgHTML($body);
$pdf= "{$senderf}{$receiverf}{$mtrn1}{$mtrn5}{$mtrn10}{$agentid}{$accountid}.pdf";
$mail->AddAttachment("pdf/$pdf");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("Location: transaction_pdf/transaction.php");
}
?>
<!--{$sender_ename}{$receiver_ename}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$account_Id}.pdf-->