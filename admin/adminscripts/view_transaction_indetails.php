<?php
ob_start();
?>
<?php
include '../../include/phpscripts/DB.php'
?>
<?php
?>
<?php
if(!isset($_SESSION['role'])){
    header("Location: index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: Agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: accountant_index.php");
}
?>
<?php
if(isset($_GET['t_id'])){
    $transaction_id = $_GET['t_id'];
}
$query = "SELECT * FROM TRANSACTION WHERE ID = $transaction_id ";
$select_trans_by_id = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_trans_by_id)){

    $transaction_ID = $row['ID'];
    $Agent_id     = $row['Agent_ID'];
    $seName       = $row['Sender_eName'];
    $saName       = $row['Sender_aName'];
    $sStreetName  = $row['Sender_StreetName'];
    $sHouseNumber = $row['Sender_HouseNo'];
    $sPostcode    = $row['Sender_Postcode'];
    $sCity        = $row['Sender_City'];
    $sCountry     = $row['Sender_Country'];
    $sPhone       = $row['Sender_Phone'];
    $sEmail       = $row['Sender_Email'];
    $sNationality = $row['Sender_Nationality'];
    $sIDNumber    = $row['Sender_IdNumber'];
    $sExpiary     = $row['Sender_IdExp'];
    // Receiver
    $reName       = $row['Receiver_eName'];
    $raName       = $row['Receiver_aName'];
    $rStreetName  = $row['Receiver_StreetName'];
    $rHouseNumber = $row['Receiver_HouseNo'];
    $rPostcode    = $row['Receiver_Postcode'];
    $rCity        = $row['Receiver_City'];
    $rCountry     = $row['Receiver_Country'];
    $rPhone       = $row['Receiver_Phone'];
    $rEmail       = $row['Receiver_Email'];
    //Other Data
    $amount       = $row['Amount'];
    $current      = $row['Current_Currency'];
    $payment      = $row['Payment_Currency'];
    $total        = $row['Total_Amount'];
    $rate         = $row['Rate'];
    $charge       = $row['Charge'];
    $reason       = $row['Reason'];
    $comment      = $row['Comment'];
}
?>




<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-exchange"></i> </span>
        <h5 >Transaction No. <?php echo $transaction_ID; ?></h5>
    </div>
    <div class="widget-content">
        <div class="row-fluid">
            <div class="span6">
                <table class="table table-bordered table-invoice">
                    <tbody>
                        <p class="text-center" style="font-size: 20px;"><strong>Sender</strong></p>
                    <tr>
                        <td class="width30"><strong>Name in English:</strong></td>
                        <td class="width70"><?php echo $seName; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Name in Arabic:</strong></td>
                        <td class="width70"><?php echo $saName; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Nationality:</strong></td>
                        <td class="width70"><?php echo $sNationality; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>ID Number:</strong></td>
                        <td class="width70"><?php echo $sIDNumber; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Expiary Date:</strong></td>
                        <td class="width70"><?php echo $sExpiary; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Street Name:</strong></td>
                        <td class="width70"><?php echo $sStreetName; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>House Number:</strong></td>
                        <td class="width70"><?php echo $sHouseNumber; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Postcode:</strong></td>
                        <td class="width70"><?php echo $sPostcode; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>City:</strong></td>
                        <td class="width70"><?php echo $sCity; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Country:</strong></td>
                        <td class="width70"><?php echo $sCountry; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Telephone Number:</strong></td>
                        <td class="width70"><?php echo $sPhone; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Email Address:</strong></td>
                        <td class="width70"><?php echo $sEmail; ?></td>
                    </tr>
                    </tbody>

                </table>
            </div>
            <div class="span6">
                <table class="table table-bordered table-invoice">
                    <tbody>
                    <p class="text-center" style="font-size: 20px;"><strong>Receiver</strong></p>
                    <tr>
                        <td class="width30"><strong>Name in English:</strong></td>
                        <td class="width70"><?php echo $reName; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Name in Arabic:</strong></td>
                        <td class="width70"><?php echo $reName; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Street Name:</strong></td>
                        <td class="width70"><?php echo $rStreetName; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>House Number:</strong></td>
                        <td class="width70"><?php echo $rHouseNumber; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Postcode:</strong></td>
                        <td class="width70"><?php echo $rPostcode; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>City:</strong></td>
                        <td class="width70"><?php echo $rCity; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Country:</strong></td>
                        <td class="width70"><?php echo $rCountry; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Telephone Number:</strong></td>
                        <td class="width70"><?php echo $rPhone; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Email Address:</strong></td>
                        <td class="width70"><?php echo $rEmail; ?></td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <table class="table table-bordered table-invoice-full">
                    <tbody>
                    <tr>
                        <td class="msg-invoice" width="85%"><h4>Payments</h4>
<!--                            <a href="#" class="tip-bottom" title="Wire Transfer">Wire transfer</a> |  <a href="#" class="tip-bottom" title="Bank account">Bank account #</a> |  <a href="#" class="tip-bottom" title="SWIFT code">SWIFT code </a>|  <a href="#" class="tip-bottom" title="IBAN Billing address">IBAN Billing address </a></td>-->
                        <td class="right"><strong>Received Amount:</strong> <br>
                            <strong>Transaction Fee</strong> <br>
                            <strong> 1 <?php echo $current;?> =</strong> <br>
                            </td>
                        <td class="right"><strong><?php echo $amount . " " . $current?><br>
                                <?php echo $rate; ?> <br>
                                <?php echo $charge . " " . $payment;?></strong></td>
                    </tr>
                    </tbody>
                </table>
                <div class="pull-right">
                    <h4><span>Payout Amount:</span> <?php echo $total . " " . $payment ?></h4>
                    <br>
                    <a class="btn btn-primary btn-large pull-right" href="">Pay Invoice</a> </div>
            </div>
        </div>
    </div>
</div>