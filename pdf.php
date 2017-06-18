<?php

if(isset($_GET['sender_name'])){

    $agentid        = $_GET['agent_code'];
    $agentplace     = $_GET['place'];
    $transdate      = $_GET['date'];
    $transtime      = $_GET['time'];
    $sname          = $_GET['sender_name'];
    $semail         = $_GET['sender_email'];

}
$mtrn1 = rand(0,9);
$mtrn2 = rand(0,9);
$mtrn3 = rand(0,9);
$mtrn4 = rand(0,9);
$mtrn5 = rand(0,9);
$mtrn6 = rand(0,9);
$mtrn7 = rand(0,9);
$mtrn8 = rand(0,9);
$mtrn9 = rand(0,9);
$mtrn10 = rand(0,9);

require_once 'dompdf/autoload.inc.php';
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->loadHtml("

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\" type=\"text/css\" />
    <title>Example 1</title>
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
        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 18px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 18px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;}
        .tg .tg-yw4l{vertical-align:top}
    </style>

</head>
<body>






<table class=\"tg\">
    <tr>
        <th class=\"tg-031e\" colspan=\"3\"><img src=\"images/ourimages/1.jpeg\" style=\"width:200px;\"></th>
        <th class=\"tg-yw4l\"><p style=\"font-size:10px;color: #A9A9A9;float: right;\"><b>SNECO</b><br>KvK: 68233361<br>Ferrandweg 4J<br>2523XT, Den Haag<br>M: +31657966657<br>www.sneco.nl</p></th>
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
                <li>Don't let a fraudster educate you on how SNECO services work. Only take advise from a SNECO representative</li>
                <li>If you believe you may be a victim of fraud, ask the sales clerk to stop your transaction immediately or call the SNECO customer service</li>
                <li>For a rental property or lease</li>
                <li>For a credit card or loan fee</li>
            </ul></div></td>
    </tr>
    <tr>
        <td class=\"tg-031e\" colspan=\"4\"><div style=\"border-radius:12px 12px 0px 0px;;font-weight: 800;font-size: 14px;color: #FFF;padding-top: 9px;padding-bottom: 1px;width:100%;text-align: center;background: #023560;\"><p><span style=\"font-size: 16px\">Transaction Details</span></p></div>
            <div style=\"border-radius: 0px 0px 12px 12px;;border: 2px solid #023560;width: 100%;height: 95px;\">
                <div style=\"width: 100%;height: 50px;\">
                <div style=\"border-radius: 0px 0px 12px 0px;background: #837e84;height: 35px;float: left;width: 50%;text-align: center;font-weight: 700;line-height: 1.5em;color: #000;font-size: 20px;\">MTRN: $mtrn1 $mtrn2 $mtrn3 $mtrn4 $mtrn5 $mtrn6 $mtrn7 $mtrn8 $mtrn9 $mtrn10</div>
                <div style=\"margin-left: 15px;height: 40px;float: left;width: 23%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Agent Code:</span> $agentid<br><span style=\"font-weight: 600;\">Time:</span> $transtime</p></div>
                <div style=\"margin-left: 15px;height: 40px;float: left;width: 23%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Place:</span> $agentplace<br><span style=\"font-weight: 600;\">Date:</span> $transdate</p></div>
                </div>
                <div style=\"width: 100%;height: 50px;\">
                    <div style=\"margin-left: 15px;height: 40px;float: left;width: 32%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Payout Amount:</span> USD 1,000<br><span style=\"font-weight: 600;\">Total Amount:</span> EUR 1,030</p></div>
                    <div style=\"margin-left: 15px;height: 40px;float: left;width: 32%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Transaction Fee:</span> EUR 30<br><span style=\"font-weight: 600;\">From:</span> The Netherlands <span style=\"font-weight: 600;\">To:</span> The Netherlands</p></div>
                    <div style=\"margin-left: 15px;height: 40px;float: left;width: 32%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Exchange Rate:</span> 1 EUR = 1 USD</p></div>
                </div>
            </div>
        </td>
    </tr>
    <tr>
        <td class=\"tg-031e\" colspan=\"2\" style=\"width: 50%;\"><div style=\"border-radius:12px 12px 0px 0px;;font-weight: 800;font-size: 14px;color: #837e84;padding-top: 9px;padding-bottom: 1px;width:100%;text-align: center;background: #023560;\"><p><span style=\"font-size: 16px\">SENDER</span></p></div>
            <div style=\"border-radius: 0px 0px 12px 12px;border: 2px solid #023560;width: 100%;height: 140px;\">
                <div style=\"width: 100%;height: 140px;\">
                    <div style=\"margin-left: 15px;height: 40px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Account No.:</span> 0123456789<br><span style=\"font-weight: 600;\">First Name:</span> $sname<br><span style=\"font-weight: 600;\">Nationality:</span> Syrian<br><span style=\"font-weight: 600;\">ID No.:</span> NLD1234567<br><span style=\"font-weight: 600;\">Address</span><br><span style=\"font-weight: 600;\">Street:</span> Ferrandweg<br><span style=\"font-weight: 600;\">Postal Code:</span> 2523XT<br><span style=\"font-weight: 600;\">Country:</span> The Netherlands<br><span style=\"font-weight: 600;\">Tel No.:</span> +31625632111</p></div>
                    <div style=\"margin-left: 15px;height: 40px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><br><span style=\"font-weight: 600;\">Last Name:</span> Khodary<br><span style=\"font-weight: 600;\">ID Type:</span> R.P.<br><span style=\"font-weight: 600;\">Exp. Date:</span> 01/01/2020<br><br><span style=\"font-weight: 600;\">House No.:</span> 4J<br><span style=\"font-weight: 600;\">City:</span> Den Haag<br><br><span style=\"font-weight: 600;\">Email:</span> $semail</p></div>
                </div>
            </div>
        </td>
        <td class=\"tg-031e\" colspan=\"2\" style=\"width: 50%;\"><div style=\"border-radius:12px 12px 0px 0px;;font-weight: 800;font-size: 14px;color: #023560;padding-top: 9px;padding-bottom: 1px;width:100%;text-align: center;background: #837e84;\"><p><span style=\"font-size: 16px\">RECEIVER</span></p></div>
            <div style=\"border-radius: 0px 0px 12px 12px;border: 2px solid #837e84;width: 100%;height: 140px;\">
                <div style=\"width: 100%;height: 140px;\">
                    <div style=\"margin-left: 15px;height: 130px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">First Name:</span> Anas<br><span style=\"font-weight: 600;\">Address</span><br><span style=\"font-weight: 600;\">Street:</span> Ferrandweg<br><span style=\"font-weight: 600;\">Postal Code:</span> 2523XT<br><span style=\"font-weight: 600;\">Country:</span> The Netherlands<br><span style=\"font-weight: 600;\">Tel No.:</span> +31625632111<br><span style=\"font-weight: 600;\">Reason:</span> Loan<br><span style=\"font-weight: 600;\">Message:</span> Thanks</p></div>
                    <div style=\"margin-left: 15px;height: 130px;float: left;width: 47%;line-height: 1.5em;color: #000;font-size: 10px;\"><p><span style=\"font-weight: 600;\">Last Name:</span> Khodary<br><br><span style=\"font-weight: 600;\">House No.:</span> 4J<br><span style=\"font-weight: 600;\">City:</span> Den Haag<br><br><span style=\"font-weight: 600;\">Email:</span> fagtco@gmail.com</p></div>
                </div>
            </div>
        </td>
    </tr>
</table>

</body>
</html>
");
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("samplepdf");
?>