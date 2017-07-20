<?php
ob_start();
include("../../include/phpscripts/DB.php");

if(isset($_GET['sender']) && isset($_GET['m1']) && isset($_GET['m2']) && isset($_GET['m3']) && isset($_GET['m4']) && isset($_GET['m5']) && isset($_GET['m6']) && isset($_GET['m7']) && isset($_GET['m8']) && isset($_GET['m9']) && isset($_GET['m10'])) {

    $mtrn1 = $_GET['m1'];
    $mtrn2 = $_GET['m2'];
    $mtrn3 = $_GET['m3'];
    $mtrn4 = $_GET['m4'];
    $mtrn5 = $_GET['m5'];
    $mtrn6 = $_GET['m6'];
    $mtrn7 = $_GET['m7'];
    $mtrn8 = $_GET['m8'];
    $mtrn9 = $_GET['m9'];
    $mtrn10 = $_GET['m10'];
    $sender = $_GET['sender'];



    $query = "SELECT * FROM TRANSACTION WHERE Sender_eName = '{$sender}' AND MTRN1 = '{$mtrn1}' AND  MTRN2 = '{$mtrn2}' AND  MTRN3 = '{$mtrn3}' AND  MTRN4 = '{$mtrn4}' AND  MTRN5 = '{$mtrn5}' AND  MTRN6 = '{$mtrn6}' AND  MTRN7 = '{$mtrn7}' AND  MTRN8 = '{$mtrn8}' AND  MTRN9 = '{$mtrn9}' AND  MTRN10 = '{$mtrn10}'";
    $select_trans = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_assoc($select_trans)) {
        $id = $row['ID'];
        $agent_id = $row['Agent_ID'];
        $account_Id = $row['Account_ID'];
        $sender_ename = $row['Sender_eName'];
        $sender_aname = $row['Sender_aName'];
        $sender_email = $row['Sender_Email'];
        $sender_country = $row['Sender_Country'];
        $sender_nationality = $row['Sender_Nationality'];
        $sender_idnumber = $row['Sender_IdNumber'];
        $sender_expiary = $row['Sender_IdExp'];
        $sender_city = $row['Sender_City'];
        $sender_st = $row['Sender_StreetName'];
        $sender_hn = $row['Sender_HouseNo'];
        $sender_pc = $row['Sender_Postcode'];
        $sender_phone = $row['Sender_Phone'];
        $sender_idtype = $row['Sender_IdType'];
        $ID_No = $row['Sender_IdNumber'];
        $receiver_ename = $row['Receiver_eName'];
        $receiver_aname = $row['Receiver_aName'];
        $receiver_email = $row['Receiver_Email'];
        $receiver_country = $row['Receiver_Country'];
        $receiver_city = $row['Receiver_City'];
        $receiver_st = $row['Receiver_StreetName'];
        $receiver_hn = $row['Receiver_HouseNo'];
        $receiver_pc = $row['Receiver_Postcode'];
        $receiver_phone = $row['Receiver_Phone'];
        $received_amount = $row['Received_Amount'];
        $current_currency = $row['Current_Currency'];
        $payment_currency = $row['Payment_Currency'];
        $payout_amount = $row['Payout_Amount'];
        $rate = $row['Rate'];
        $charge = $row['Charge'];
        $status = $row['Status'];
        $reason = $row['Reason'];
        $message = $row['Comment'];
        $timestamp = strtotime($row['Time']);
        $date = date('Y-m-d', $timestamp);
        $time = date('h:m:s', $timestamp);
    }


}




$html = "
<html lang=\"ar\">
<meta charset=\"utf-8\"/>
<link rel=\"stylesheet\" media=\"screen\" href=\"https://fontlibrary.org/face/droid-arabic-kufi\" type=\"text/css\"/>
<style type=\"text/css\">
    .tg  {border-collapse:collapse;border-spacing:0;direction: rtl;width:100%;}
    .tg td{width:33%;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg th{width:33%;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;}
    .tg .tg-yw4l{vertical-align:top}
    .arabic{font-family: 'kfgqpcuthmantahanaskh';}
    .sender {font-family: 'kfgqpcuthmantahanaskh';background: #023560;color: #5D6975;}
    .receiver {font-family: 'kfgqpcuthmantahanaskh';background: #5D6975;color: #023560;}
    .headtable {font-family: 'kfgqpcuthmantahanaskh';background: #000;color: #fff;}
</style>
<div style=\"direction: rtl;\">
    <center>
    <table class=\"tg\">
        <thead>
        <tr>
            <th style=\"width:50%;border-width:0;\" colspan=\"1\"><img src=\"../img/ourimages/1.jpeg\" style=\"width:200px;\"></th>
            <th style=\"width:50%;border-width:0;\" colspan=\"1\"><center><p style=\"font-size:10px;color: #A9A9A9;\"><b>SNECO</b><br>KvK: 68233361<br>Weesperstraat 118 H<br>1112 AP, Diemen<br>M: +31657966657<br>www.sneco.nl</p></center></th>
        </tr>
        </thead>
    </table>
        <br>
        <br>
        <table class=\"tg\">
            <thead>
        <tr>
            <th class=\"tg-yw4l sender\">بيانات المرسِل</th>
            <th class=\"tg-yw4l receiver\">بيانات المرسل إليه</th>
        </tr>
        <tr>
            <td class=\"tg-yw4l\"><span class='arabic'>الاسم الكامل: $sender_aname</span><br><span class='arabic'>رقم الهاتف:</span> $sender_phone<br> <span class='arabic'>البريد الإلكتروني:</span> $sender_email<br><span class='arabic'>العنوان<br>اسم الشارع:</span> $sender_st<br><span class='arabic'>رقم المنزل:</span> $sender_hn<br><span class='arabic'>المدينة:</span> $sender_city<br><span class='arabic'>الرمز البريدي:</span> $sender_pc<br><span class='arabic'>البلد:</span> $sender_country<br><span class='arabic'>رقم بطاقة التعريف:</span> $sender_idnumber<br><span class='arabic'>الجنسية:</span> $sender_nationality<br><span class='arabic'> تاريخ انتهاء صلاحية بطاقة التعريف:</span> $sender_expiary</td>
            <td class=\"tg-yw4l\"><span class='arabic'>الاسم الكامل: $receiver_aname</span><br><span class='arabic'>رقم الهاتف:</span> $receiver_phone<br> <span class='arabic'>البريد الإلكتروني:</span> $receiver_email<br><span class='arabic'>العنوان<br>اسم الشارع:</span> $receiver_st<br><span class='arabic'>رقم المنزل:</span> $receiver_hn<br><span class='arabic'>المدينة:</span> $receiver_city<br><span class='arabic'>الرمز البريدي:</span> $receiver_pc<br><span class='arabic'>البلد:</span> $receiver_country</td>
        </tr>
    </table>
        <br>
        <br>
        <table class=\"tg\">
            <thead>
            <tr>
                <th class=\"tg-yw4l headtable\" colspan=\"2\">بيانات الدفع</th>
            </tr>
            <tr>
                <td class=\"tg-yw4l\"><span class='arabic'>رقم التسليم:</span> $mtrn10 $mtrn9 $mtrn8 $mtrn7 $mtrn6 $mtrn5 $mtrn4 $mtrn3 $mtrn2 $mtrn1</td>
                <td class=\"tg-yw4l\"><span class='arabic'>المبلغ المراد تسليمه:</span> $payout_amount</td>
            </tr>
        </table>
    </center>
</div>
</html>


";

require '../../mpdf/vendor/autoload.php';

$mpdf = new mPDF(); // Create new mPDF Document
// Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = false;
//$mpdf->SetFont('kfgqpcuthmantahanaskh');
$mpdf->WriteHTML($html);
//$mpdf->SetAutoFont($html);

$content = $mpdf->Output('123.pdf', 'I');