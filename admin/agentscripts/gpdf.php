<?php
ob_start();
use Dompdf\Dompdf;
require_once '../../dompdf/autoload.inc.php';
session_start();
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Admin"){
    header("Location: ../admin_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}else if($_SESSION['role'] != "Accountant" && $_SESSION['role'] != "Admin" && $_SESSION['role'] != "Agent"){
    header("Location: ../index.php");
}
include("../../include/phpscripts/DB.php");
if(isset($_GET['sender']) && isset($_GET['m1']) && isset($_GET['m2']) && isset($_GET['m3']) && isset($_GET['m4']) && isset($_GET['m5']) && isset($_GET['m6']) && isset($_GET['m7']) && isset($_GET['m8']) && isset($_GET['m9']) && isset($_GET['m10'])) {
    $sender = $_GET['sender'];
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
iconv(mb_detect_encoding($sender_aname, mb_detect_order(), true), "UTF-8", $sender_aname);
iconv(mb_detect_encoding($receiver_aname, mb_detect_order(), true), "UTF-8", $receiver_aname);

$total_amount_rate = $received_amount + $rate;
$query = "SELECT * FROM AGENT WHERE ID = '{$agent_id}'";
$select_trans = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_trans)) {
    $agent_place = $row['Agent_City'];
}
}
$html="
<html lang=\"ar\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
    <link rel=\"stylesheet\" href=\"../../css/bootstrap.css\" type=\"text/css\" />
    <title>Invoice</title>
    <style>
        .clearfix:after {
            content: \"\";
            display: table;
            clear: both;
        }
        a {
            color: #5D6975;
            text-decoration: underline;
        }

        body {
            position: relative;
            margin: 0 auto;
            color: #001028;
            background: #FFFFFF;
            font-family: Arial, sans-serif;
            font-size: 8px;
        }

        header {
            padding: 10px 0;
            margin-bottom: 15px;
        }

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        h1 {
            border-top: 1px solid  #5D6975;
            border-bottom: 1px solid  #5D6975;
            color: #5D6975;
            font-size: 12px;
            line-height: 1.5em;
            font-weight: normal;
            text-align: center;
            margin: -5px 0 0 0;
        }

        h2 {
            background: #5D6975;
            color: #fff;
            font-size: 14px;
            line-height: 1.4em;
            font-weight: normal;
            text-align: center;
            margin: 0 0 0 0;
        }

        #notices .notice {
            color: #5D6975;
            font-size: 7px;
        }


        .tg  {border-collapse:collapse;border-spacing:0;width: 100%;}
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 18px;border-style:solid;border-width:0;overflow:hidden;word-break:normal;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 18px;border-style:solid;border-width:0;overflow:hidden;word-break:normal;}
        .tg .tg-yw4l{vertical-align:top}
    </style>

</head>
<body>
<table class=\"tg\">
    <tr>
        <th class=\"tg-031e\" colspan=\"3\"><img src=\"../img/ourimages/1.jpeg\" style=\"width:200px;\"></th>
        <th class=\"tg-yw4l\"><p style=\"font-size:10px;color: #A9A9A9;float: right;\"><b>SNECO</b><br>KvK: 68233361<br>Weesperstraat 118 H<br>1112 AP, Diemen<br>M: +31657966657<br>www.sneco.nl</p></th>
    </tr>
    <tr>
        <td class=\"tg-yw4l\" colspan=\"4\" >
            <div style=\"border-radius:12px;font-weight: 800;font-size: 14px;color: #FFF;padding-top: 9px;padding-bottom: 1px;width:100%;text-align: center;background: #023560;\"><p><span style=\"font-size: 16px\">Money Transaction Receipt</span></p></div>
        </td>
    </tr>
    <tr>
        <td class=\"tg-031e\" colspan=\"4\"><div style=\"border-radius: 12px;border: 2px solid #fe0002;padding: 10px;width: 100%;height: 140px;\"><p>
            <span style=\"font-weight: 700;font-size: 9px;color: #fe0002;\">Protect Your Self From Fraud</span>
            <br>
            <span style=\"font-weight: 700;font-size: 7px;color: #000;\">Only send money to someone you have met in person. DO NOT send money to an individual if you are sending:</span>
            <br>
        </p>
            <ul class=\"pull-left\" style=\"width: 40%;font-size: 6px;font-weight: 700;margin-left: -20px;\">
            <li>To a grandchild, friend or family member for an emergency situation you have not personally confirmed</li>
            <li>To someone you met online</li>
            <li>For an internet purchase</li>
            <li>For an employment opportunity</li>
            <li>To claim lottery or prize winnings</li>
            <li>For a rental property or lease</li>
            <li>For a credit card or loan fee</li>
            </ul>
            <ul class=\"pull-right\" style=\"width: 47%;font-size: 6px;font-weight: 700;\">
            <li>For the return of a lost pet or valuables</li>
            <li>In response to an unsolicited letter from a purported government official</li>
            <li>Remember a money transfer can be paid out to the receiver within a short time and after the money is paid, you cannot obtain a refund from SNECO, even if the transfer was the result of fraud</li>
            <li>Don\"t let a fraudster educate you on how SNECO services work. Only take advise from a SNECO representative</li>
            <li>If you believe you may be a victim of fraud, ask the sales clerk to stop your transaction immediately or call the SNECO customer service</li>
            <li>For a rental property or lease</li>
            <li>For a credit card or loan fee</li>
            </ul></div></td>
    </tr>
    <tr>
        <td class=\"tg-031e\" colspan=\"4\"><div style=\"border-radius:12px 12px 0 0;;font-weight: 800;font-size: 14px;color: #FFF;padding-top: 9px;padding-bottom: 1px;width:100%;text-align: center;background: #023560;\"><p><span style=\"font-size: 16px\">Transaction Details</span></p></div>
            <div style=\"border-radius: 0 0 12px 12px;;border: 2px solid #023560;width: 100%;height: 95px;\">
            <div style=\"width: 100%;height: 50px;\">
            <div style=\"border-radius: 0 0 12px 0;background: #837e84;height: 35px;float: left;width: 50%;text-align: center;font-weight: 700;line-height: 1.5em;color: #000;font-size: 20px;\">MTRN: $mtrn1 $mtrn2 $mtrn3 $mtrn4 $mtrn5 $mtrn6 $mtrn7 $mtrn8 $mtrn9 $mtrn10</div>
            <div style=\"margin-left: 15px;height: 40px;float: left;width: 23%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Agent Code:</span> $agent_id<br><span style=\"font-weight: 600;\">Time:</span> $time</p></div>
            <div style=\"margin-left: 15px;height: 40px;float: left;width: 23%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Place:</span> $agent_place<br><span style=\"font-weight: 600;\">Date:</span> $date</p></div>
            </div>
            <div style=\"width: 100%;height: 50px;\">
            <div style=\"margin-left: 15px;height: 40px;float: left;width: 32%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Payout Amount:</span> $payout_amount $payment_currency<br><span style=\"font-weight: 600;\">Total Amount:</span> $total_amount_rate $current_currency</p></div>
            <div style=\"margin-left: 15px;height: 40px;float: left;width: 32%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Transaction Fee:</span> $rate<br><span style=\"font-weight: 600;\">From:</span> $sender_country <span style=\"font-weight: 600;\">To:</span> $receiver_country</p></div>
            <div style=\"margin-left: 15px;height: 40px;float: left;width: 32%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Exchange Rate:</span> 1 $current_currency = $charge $payment_currency</p></div>
            </div>
            </div>
        </td>
    </tr>
    <tr>
        <td class=\"tg-031e\" colspan=\"2\" style=\"width: 50%;\"><div style=\"border-radius:12px 12px 0 0;;font-weight: 800;font-size: 14px;color: #837e84;padding-top: 9px;padding-bottom: 1px;width:100%;text-align: center;background: #023560;\"><p><span style=\"font-size: 16px\">SENDER</span></p></div>
        <div style=\"border-radius: 0 0 12px 12px;border: 2px solid #023560;width: 100%;height: 150px;\">
        <div style=\"width: 100%;height: 150px;\">
        <div style=\"margin-left: 15px;height: 40px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Account No.:</span> $account_Id<br><span style=\"font-weight: 600;\">Name in English:</span> $sender_ename<br><span style=\"font-weight: 600;\">Nationality:</span> $sender_nationality<br><span style=\"font-weight: 600;\">ID No.:</span> $ID_No<br><span style=\"font-weight: 600;\">Address</span><br><span style=\"font-weight: 600;\">Street:</span> $sender_st<br><span style=\"font-weight: 600;\">Postal Code:</span> $sender_pc<br><span style=\"font-weight: 600;\">Country:</span> $sender_country<br><span style=\"font-weight: 600;\">Tel No.:</span> $sender_phone</p></div>
        <div style=\"margin-left: 15px;height: 40px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><br><br><span style=\"font-weight: 600;\">ID Type:</span> $sender_idtype<br><span style=\"font-weight: 600;\">Exp. Date:</span> $sender_expiary<br><br><span style=\"font-weight: 600;\">House No.:</span> $sender_hn<br><span style=\"font-weight: 600;\">City:</span> $sender_city<br><br><span style=\"font-weight: 600;\">Email:</span> $sender_email</p></div>
        </div>
        </div>
        </td>
        <td class=\"tg-031e\" colspan=\"2\" style=\"width: 50%;\"><div style=\"border-radius:12px 12px 0 0;;font-weight: 800;font-size: 14px;color: #023560;padding-top: 9px;padding-bottom: 1px;width:100%;text-align: center;background: #837e84;\"><p><span style=\"font-size: 16px\">RECEIVER</span></p></div>
        <div style=\"border-radius: 0 0 12px 12px;border: 2px solid #837e84;width: 100%;height: 150px;\">
        <div style=\"width: 100%;height: 150px;\">
        <div style=\"margin-left: 15px;height: 130px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Name in English:</span> $receiver_ename<br><span style=\"font-weight: 600;\">Address</span><br><span style=\"font-weight: 600;\">Street:</span> $receiver_st<br><span style=\"font-weight: 600;\">Postal Code:</span> $receiver_pc<br><span style=\"font-weight: 600;\">Country:</span> $receiver_country<br><span style=\"font-weight: 600;\">Tel No.:</span> $receiver_phone<br><span style=\"font-weight: 600;\">Reason:</span> $reason<br><span style=\"font-weight: 600;\">Message:</span> $message</p></div>
        <div style=\"margin-left: 15px;height: 130px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><br><br><span style=\"font-weight: 600;\">House No.:</span> $receiver_hn<br><span style=\"font-weight: 600;\">City:</span> $receiver_city<br><br><span style=\"font-weight: 600;\">Email:</span> $receiver_email</p></div>
        </div>
        </div>
        </td>
    </tr>
    <tr>        <td class=\"tg-031e\" colspan=\"2\" style=\"width: 50%;\">
        <div style=\"font-size: 6px;text-align: justify;text-justify: inter-word;\">The Service is offered by <b>SNECO</b> Payment Services in The Netherlands through a network of authorised agents “Agents”.<br>
        <b>SNECO is regulated by the Central Bank of The Netherlands</b> and is registered as a payment institution in the Kamer van Koophandel’s register of payment service firms under number KvK: 68233361.<br>
        <b>SNECO offers the Service domestically and internationally.</b> By recieving this form, providing the funds to be sent and identification as required, you agreed to the execution of the money transfer. Before confirming the money transfer, you will be informed as to the maximum execution time, the commission charged and the exchange rate applied to the transaction, via the same channel as the one used to place the money transfer. You are required to inform the receiver about the money transfer, including name of sender, country of origin, name of receiver, approximate sum, the Money Transfer Reciept Number (the “MTRN”) and any other conditions or requirements applicable at the Agent location.<br>
        <b>Applicable law prohibits money transmitters from doing business with certain individuals and countries</b><br>
        <b>- SNECO</b> is required to screen all transactions against lists of names provided by the governments of the countries and territories in which we do business.<br>
        <b>Conditions of payment and liability</b> - Payment shall be made to the person that <b>SNECO</b> or its Agent deems entitled to receive it after examination of identification documents. The payment can be made only when the recipient has given the transaction details required by <b>SNECO</b>, in particular the sum of money transferred, the name of the sender as well as the country from which the money was sent. Furthermore the recipient must identify him/herself appropriately.<br>
        <b>SNECO</b> will have fulfilled its obligation to you as soon as the transferred sum of money has been paid out to a person who has quoted the above mentioned transaction details and identified him/herself appropriately through an identification document and/or a test question if applicable as the recipient named by you.<br>
        <b>SNECO</b> shall examine the transaction details quoted by the recipient and the identification document produced with appropriate care and will refuse payment should there be justification to doubt the authenticity of said identification document.<br>
        <b>SNECO</b> shall be held liable for damages resulting from the intentional misconduct or from the gross negligent conduct of its employees and Agents while processing your transaction pursuant to applicable law. <b>SNECO’s liability,</b> the liability of its affiliated companies and of its foreign Agents is excluded in cases of minor negligence. The liability of <b>SNECO</b> is limited to the refund of the typically foreseeable damage of the contract up to the maximum amount of EUR 500 (in addition to the amount transferred and any charges). In no event shall <b>SNECO</b> be liable if you have willfully or negligently disclosed data related to the transfer to persons other than the recipient. <b>SNECO</b> shall not be held liable for damage caused by Force Majeure, the breakdown of telecommunication lines, civil unrest, war or other events which are outside <b>SNECO’s</b> influence (e.g. strike, industrial lock-out or orders issued by government authorities).</div>
        </td>
        <td class=\"tg-031e\" colspan=\"2\" style=\"width: 50%;\">
        <div style=\"font-size: 6px;text-align: justify;text-justify: inter-word;\">Details of the fees and charges which you will be required to pay to <b>SNECO</b> for the Service, as well as details of the exchange rate(s) which will be applied, are provided on this form. Money transfer payments will normally be made in the currency of the destination country (in some countries payment is available only in an alternate currency). The exchange rate may be an estimate only, and the actual exchange rate will be determined at the time the money transfer is confirmed in the system. All currency is converted at SNECO’s then current rate of exchange. <b>SNECO</b> calculates its rate of exchange based on commercially available interbank rates plus a margin. <b>SNECO</b> and its Agents may make money from currency exchange. Most rates of exchange are adjusted several times daily in line with the prevailing rate of financial markets globally. To the extent allowed by law, <b>SNECO</b> may deduct an administrative charge from money transfers that are not picked up within one year of the date of receipt.<br>
        <b>Cancellation and Refunds</b> - You may cancel the transaction at an Agent location or by contacting by phone up to the time at which the receiver has picked up the money. Once cancelled, <b>SNECO</b> will refund the principal amount, deducting the transfer fee applied for the Service. Refunds typically take up to 10 business days. You may request a refund of the principal amount of a money transfer by writing to <b>SNECO</b> by letter or email if payment to the receiver is not made within 45 days. <b>SNECO</b> will refund the transfer fee upon your written request to <b>SNECO</b> by letter or email if the money transfer is not available to the receiver within the timelines specified above, subject to delay not being due to conditions beyond the control of <b>SNECO</b> (or the Agents), such as regulatory requirements, inclement weather or telecommunications failure. Payment of some money transfers may be delayed as a result of the application of United States or other applicable laws.<br>
        <b>Your personal information is processed under applicable law</b> and controlled by <b>SNECO</b> Payment Services. We use personal information you provide to us when using our products and services, as well as other information that is collected or generated during our relationship with you. This includes information from other services like money transfers, bill payments, previous use of our services history, and marketing choices. This information is used to provide you with the services you have asked for and for activities such as administration, customer service, anti-money laundering, compliance and legal duties, validate your details, to help us understand our consumers by doing analysis and research of the information we hold, to help prevent and detect fraud, debt and theft, to help us improve our products, services and operations, and, subject to your choices, send you commercial communications by email, telephone, post, SMS and by any other relevant channel.<br>
        <b>In the event you have a complaint,</b> believe an error has been made or have an enquiry in relation to the Service, please contact customer services by email at info@sneco.nl. We will investigate your request and provide you with regular updates on its progress. An acknowledgement of your complaint will be sent to you within 5 business days of the complaint being received. The acknowledgement will contain the date of receipt plus a reference number, which should be used in all further communications with <b>SNECO</b>.
        </div>
        </td>
    </tr>
</table>

</body>
</html>
";
$dompdf = new Dompdf();
$dompdf->loadHtml($html);
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');
// Render the HTML as PDF
$dompdf->render();
// Output the generated PDF to Browser
//$dompdf->stream("sample.pdf");
$output = $dompdf->output();
file_put_contents("../transaction_pdf/{$sender_ename}{$receiver_ename}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$account_Id}.pdf", $output);
header("Location: ../test.php?senderf={$sender_ename}&receiverf={$receiver_ename}&mtrn1={$mtrn1}&mtrn5={$mtrn5}&mtrn10={$mtrn10}&agentid={$agent_id}&accountid={$account_Id}");