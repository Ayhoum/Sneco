
<?php
ob_start();
use Dompdf\Dompdf;
include '../include/phpscripts/DB.php';

require_once '../dompdf/autoload.inc.php';

if(isset($_GET['number'])){

    $invoice_number = $_GET['number'];
}
$date = date('d-m-Y');

$query = "SELECT * FROM INVOICE WHERE ID = {$invoice_number} ";
echo $query;
$result = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($result)) {

    $address_line1 = $row['address_line1'];
      $address_line2 = $row['address_line2'];
     $address_line3 = $row['address_line3'];
     $quantity = $row['quantity'];
     $total = $row['total'];
     $discount = $row['discount'];
     $advanced_payment = $row['advanced_payment'];
     $item_ID = $row['Item_ID'];
     $client_ID = $row['Client_ID'];
     $invoice_type = $row['invoice_type'];
     $status = $row['status'];
}

$query = "SELECT * FROM CLIENT WHERE ID = '{$client_ID}'";
$clients = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($clients)) {

    $clientName = $row['Client_name'];
    $clientAddress = $row['Client_address_1'];
    $clientAddress1 = $row['Client_address_2'];
    $clientEmail = $row['Client_email'];
    $clientPhone = $row['Client_phone'];

}

$query = "SELECT * FROM ITEM WHERE ID = '{$item_ID}'";
$items = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($items)) {

    $itemName = $row['item_name'];
    $itemPrice = $row['item_price'];
    $itemDescription = $row['item_description'];

}

$totalPrice = $quantity * $itemPrice;

$grandTotal = $totalPrice - $discount - $advanced_payment;

echo $grandTotal;

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
    <table cellspacing=\"2\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;\">
        <tbody>
        <tr>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 6%;float:left;\"></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;width: 94%;float:left;\">
                <p style=\"font-size:12px;\"><b>$clientName</b><br>Address: $clientAddress $clientAddress1<br>E-mail: $clientEmail<br>Phone: $clientPhone</p>
            </td>
        </tr>
        </tbody>
    </table>
</div>

<div class='row'>
    <table cellspacing=\"9\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;\">
        <tbody>
        <tr>
            <td colspan=\"4\" style=\"padding: 10px 18px;background: #023560;width: 40%;\"><p class=\"text-center\" style=\"color: #fff;font-weight: 800;margin: 0;font-size: 30px;\">INVOICE</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;width: 5%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #023560;width: 25%;\"><p style=\"color: #fff;font-weight: 800;margin: 0;\"><span style=\"font-weight: 700;font-size: 15px;\">Invoice No.</span><br>$invoice_number</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #023560;width: 30%;\"><p style=\"color: #fff;font-weight: 800;margin: 0;\"><span style=\"font-weight: 700;font-size: 15px;\">Date</span><br>$date</p></td>
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
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #023560;float: left;width: 2%;\"><p class=\"text-center\" style=\"font-size:11px;color: #fff;font-weight: 800;margin: 0;\">No.</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #023560;float: left;width: 39%;\"><p style=\"color: #fff;font-size:11px;font-weight: 800;margin: 0;\">DESCRIPTION</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #023560;float: left;width: 13%;\"><p class=\"text-center\" style=\"color: #fff;font-size:11px;font-weight: 800;margin: 0;\">PIECES</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #023560;float: left;width: 14%;\"><p class=\"text-center\" style=\"color: #fff;font-weight: 800;font-size:11px;margin: 0;\">M2/M3/LM/UD</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #023560;float: left;width: 13%;\"><p class=\"text-center\" style=\"color: #fff;font-weight: 800;margin: 0;font-size:11px;\">U. PRICE</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #023560;float: left;width: 19%;\"><p class=\"text-center\" style=\"color: #fff;font-weight: 800;margin: 0;font-size:11px;\">AMOUNT</p></td>
        </tr>
        <tr>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;border-right: 1px solid #000;float: left;width: 2%;\"><p class=\"text-center\" style=\"margin: 0;font-size:10px;\">1</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #fff;float: left;width: 39%;\"><p style=\"margin: 0;font-size:10px;\">$itemDescription</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;float: left;width: 13%;\" ><p class=\"text-center\" style=\"margin: 0;font-size:10px;\">$quantity</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;float: left;width: 14%;\"><p class=\"text-center\" style=\"margin: 0;font-size:10px;\">NaN</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;float: left;width: 13%;\"><p class=\"text-center\" style=\"margin: 0;font-size:10px;\">€ $itemPrice</p></td>
            <td colspan=\"1\" style=\"padding: 10px 18px;background: #fff;float: left;width: 19%;\"><p class=\"text-center\" style=\"margin: 0;font-size:10px;\">€ $totalPrice</p></td>
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
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 65%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #D3D3D3;\"><p class=\"text-center\" style=\"color: #000;font-size:11px;margin: 0;\">Sub Total</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #D3D3D3;\"><p style=\"color: #000;font-size:11px;font-weight: 800;margin: 0;\">€ $totalPrice</p></td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 65%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #D3D3D3;\"><p class=\"text-center\" style=\"color: #000;font-size:11px;margin: 0;\">Advanced</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #D3D3D3;\"><p style=\"color: #000;font-size:11px;font-weight: 800;margin: 0;\">€ $advanced_payment</p></td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 65%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #D3D3D3;\"><p class=\"text-center\" style=\"color: #000;font-size:11px;margin: 0;\">Discount</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #D3D3D3;\"><p style=\"color: #000;font-size:11px;font-weight: 800;margin: 0;\">€ $discount</p></td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 65%;\"></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #023560;\"><p class=\"text-center\" style=\"color: #fff;font-size:11px;font-weight: 800;margin: 0;\">Grand Total</p></td>
            <td colspan=\"2\" style=\"padding: 10px 18px;background: #023560;\"><p style=\"color: #fff;font-size:11px;font-weight: 800;margin: 0;\">€ $grandTotal</p></td>
        </tr>
        </tbody>
    </table>
    <div class='row'>
        <table cellspacing=\"7\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;\">
            <tbody>
            <tr>
                <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 3%;float:left;\"></td>
                <td colspan=\"7\" style=\"padding: 10px 18px;width: 97%;float:left;\"><ul style=\"color: #000;font-size:11px;margin: 0;\"><li>
                    <b>Terms & Conditions</b>
                    <ul>
                        <li><b>Delivery:</b> EX Factory.</li>
                        <li><b>Shipping:</b> Each container delivered to Umm Qasr Port – Iraq, costs € 1,965.00.</li>
                        <li><b>Payment Methods:</b> CBS - Cash before shipment / Transfer to our bank account.</li>
                        <li><b>Our Bank Details:</b><ul style=\"list-style-type: none;\">
                            <li>ING Bank N.V.</li>
                            <li>Foreign Operations</li>
                            <li>PO Box 1800</li>
                            <li>1000 BV Amsterdam</li>
                            <li>IBAN: NL15 INGB 0007 8079 59</li>
                            <li>SWIFT Code/BIC: INGBNL2A</li>
                        </ul>
                        </li>
                    </ul>
                </li></ul></td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class='row'>
        <table cellspacing=\"1\" style=\"border-collapse:collapse;border-spacing:0;width: 100%;\">
            <tbody>
            <tr>
                <td colspan=\"3\" style=\"padding: 10px 18px;background: #fff;width: 70%;float:left;\"></td>
                <td colspan=\"1\" style=\"padding: 10px 18px;width: 30%;float:left;\"><p style=\"color: #000;font-size:11px;margin: 0;\">Approved By<br><br><br>
                    <b>Anas Khodary</b><br><br>
                    General Manager</p>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
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
//$dompdf->stream("sample.pdf");
$output = $dompdf->output();

file_put_contents("invoice_pdf/{$invoice_number}.pdf", $output);

header("Location: agentscripts/invoices.php");
?>
