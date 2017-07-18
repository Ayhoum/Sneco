<?php
ob_start();
use Dompdf\Dompdf;
require_once 'dompdf/autoload.inc.php';


$dompdf = new Dompdf();

$html="<html lang=\"ar\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\" type=\"text/css\" />
    <title>Invoice</title>
    <style>
        html { margin: 0;}
        @page { margin: 0; }
        body { margin: 0; }

        /*.clearfix:after {*/
        /*content: \"\";*/
        /*display: table;*/
        /*clear: both;*/
        }
        a {
            color: #5D6975;
            text-decoration: underline;
        }

        /*body {*/
        /*position: relative;*/
        /*margin: 0 auto;*/
        /*color: #001028;*/
        /*background: #FFFFFF;*/
        /*font-family: Arial, sans-serif;*/
        /*font-size: 8px;*/
        /*}*/

        /*header {*/
        /*padding: 10px 0;*/
        /*margin-bottom: 15px;*/
        /*}*/

        #logo {
            text-align: center;
            margin-bottom: 10px;
        }

        #logo img {
            width: 90px;
        }

        /*h1 {*/
        /*border-top: 1px solid  #5D6975;*/
        /*border-bottom: 1px solid  #5D6975;*/
        /*color: #5D6975;*/
        /*font-size: 12px;*/
        /*line-height: 1.5em;*/
        /*font-weight: normal;*/
        /*text-align: center;*/
        /*margin: -5px 0 0 0;*/
        /*}*/

        /*h2 {*/
        /*background: #5D6975;*/
        /*color: #fff;*/
        /*font-size: 14px;*/
        /*line-height: 1.4em;*/
        /*font-weight: normal;*/
        /*text-align: center;*/
        /*margin: 0 0 0 0;*/
        /*}*/

        /*#notices .notice {*/
        /*color: #5D6975;*/
        /*font-size: 7px;*/
        /*}*/


        /*.tg  {border-collapse:collapse;border-spacing:0;width: 100%;}*/
        /*.tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 18px;border-style:solid;border-width:0;overflow:hidden;word-break:normal;}*/
        /*.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 18px;border-style:solid;border-width:0;overflow:hidden;word-break:normal;}*/
        /*.tg .tg-yw4l{vertical-align:top}*/
    </style>

</head>
<body>
<div style='row'>
    <table cellspacing=\"2\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;margin-top: 15px;\">
        <tbody>
        <tr>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 2%;float:left;\"></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;width: 46%;float:left;\"><img src=\"images/ourimages/1.jpeg\" style=\"width:200px;\"></td>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 4%;float:left;\"></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;width: 44%;float:left;\"><p style=\"font-size:10px;color: #A9A9A9;float: right;\"><b>SNECO</b><br>KvK: 68233361<br>Weesperstraat 118 H<br>1112 AP, Diemen<br>M: +31657966657<br>www.sneco.nl</p></td>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 4%;float:left;\"></td>


        </tr>
        </tbody>
    </table>
</div>
<div class='row'>
    <div style=\"height: 40px;\"></div>
</div>
<div class='row'>
    <table cellspacing=\"9\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;\">
        <tbody>
        <tr>
            <td colspan=\"4\" style=\"padding: 10px 18px;background: #023560;width: 40%;\"><p class=\"text-center\" style=\"color: #fff;font-weight: 800;margin: 0;font-size: 30px;\">Payment Voucher</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;width: 5%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #023560;width: 25%;\"><p style=\"color: #fff;font-weight: 800;margin: 0;\"><span style=\"font-weight: 700;font-size: 15px;\">Cash Receipt No.</span><br>SNE-PV-201707-001</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #023560;width: 30%;\"><p style=\"color: #fff;font-weight: 800;margin: 0;\"><span style=\"font-weight: 700;font-size: 15px;\">Date</span><br>04-07-2017</p></td>
        </tr>
        </tbody>
    </table>
</div>

<div class='row'>
    <div style=\"height: 40px;\"></div>
</div>

<div class='row'>
    <table cellspacing=\"7\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;\">
        <tbody>
        <tr>
           <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;float: left;width: 100%;\"><p class=\"text-center\" style=\"font-weight: 700;margin: 0;font-size:11px;\">Cash Paid To _____________________________________________________ of € _________________</p></td>
        </tr>
        <tr>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;border-right: 1px solid #000;float: left;width: 100%;\"><p class=\"text-center\" style=\"margin: 0;font-size:11px;font-weight: 700;\">For Payment of ________________________________________________________________________</p></td>
        </tr>
        <tr>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;border-right: 1px solid #000;float: left;width: 100%;\"><p class=\"text-center\" style=\"margin: 0;font-size:11px;font-weight: 700;\">_____________________________________________________________________________________</p></td>
        </tr>
        </tbody>
    </table>
</div>
<div class='row'>
    <div style=\"height: 40px;\"></div>
</div>
<div class='row'>

    <table cellspacing=\"7\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;\">
        <tbody>
        <tr>
            <td colspan=\"3\" style=\"padding: 10px 18px;width: 10%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;width: 55%;border:2px solid #023560;font-size: 12px;\">
                <label>Payment Method</label>
                <form action=\"\">
                    <input type=\"radio\" name=\"gender\" value=\"male\"> Cash<br><br>
                    <input type=\"radio\" name=\"gender\" value=\"female\"> Cheque: No. _________ Bank: ___________ Date: _____________<br><br>
                    <input type=\"radio\" name=\"gender\" value=\"other\"> Other: _________________________________________________
                </form>
                <!--<ul style=\"color: #000;font-size:11px;margin: 0;padding: 5px;margin-left: -15px;\">-->
                    <!--<li style=\"list-style-type: none;\">-->
                        <!--<b>Payment Method</b>-->
                        <!--<ul style=\"margin-left: -20px;\">-->
                            <!--<li style=\"margin-top: 15px;\">Cash</li>-->
                            <!--<li style=\"margin-top: 15px;\">Cheque: No. _________ Bank: ___________ Date: _____________</li>-->
                            <!--<li style=\"margin-top: 15px;\">Other: _________________________________________________</li>-->
                        <!--</ul>-->
                    <!--</li>-->
                <!--</ul>-->
            </td>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 5%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;width: 25%;border:2px solid #023560;\"><p style=\"color: #000;font-size:11px;font-weight: 800;margin: 0;\">
                Payment paid by:<br><br><br>
                __________________
            </p></td>
            <td colspan=\"3\" style=\"padding: 10px 18px;width: 10%;\"></td>
        </tr>

        </tbody>
    </table>

</div>

</body>
</html>";

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

//$html = mb_convert_encoding($html, 'HTML-ENTITIES', 'UTF-8');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream("sample.pdf");
//$output = $dompdf->output();

//file_put_contents("../pdf/{$sender_ename}{$receiver_ename}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$account_Id}.pdf", $output);

//header("Location: ../test.php?senderf={$sender_ename}&receiverf={$receiver_ename}&mtrn1={$mtrn1}&mtrn5={$mtrn5}&mtrn10={$mtrn10}&agentid={$agent_id}&accountid={$account_Id}");