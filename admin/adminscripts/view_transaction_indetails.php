<?php
ob_start();

include '../../include/phpscripts/DB.php';
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: ../agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}else if($_SESSION['role'] != "Accountant" && $_SESSION['role'] != "Admin" && $_SESSION['role'] != "Agent"){
    header("Location: ../index.php");
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
    $sentAmount = $row['Received_Amount'];
    $payout_amount = $row['Payout_Amount'];
    $current      = $row['Current_Currency'];
    $payment      = $row['Payment_Currency'];
    $rate         = $row['Rate'];
    $receivedAmount = $sentAmount + $rate;
    $charge       = $row['Charge'];
    $reason       = $row['Reason'];
    $comment      = $row['Comment'];
    $status = $row['Status'];
    $money_status = $row['Money_Status'];
    $mtrn1  = $row['MTRN1'] ;
    $mtrn2  = $row['MTRN2'] ;
    $mtrn3  = $row['MTRN3'] ;
    $mtrn4  = $row['MTRN4'] ;
    $mtrn5  = $row['MTRN5'] ;
    $mtrn6  = $row['MTRN6'] ;
    $mtrn7  = $row['MTRN7'] ;
    $mtrn8  = $row['MTRN8'] ;
    $mtrn9  = $row['MTRN9'] ;
    $mtrn10 = $row['MTRN10'] ;
}
?>




<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-exchange"></i> </span>
        <h5 >Transaction No. <?php echo $transaction_ID; ?></h5>
    </div>
    <div class="widget-content">
        <div class="row-fluid">
            <div class="span12">
                <table class="table table-bordered table-invoice">
                    <tbody>
                    <p class="text-center" style="font-size: 20px;"><strong>MTRN</strong></p>
                    <tr>
                        <td style="font-size: 18px;"><p style="margin:0;" class="text-center"><?php echo $mtrn1 . " " . $mtrn2 . " " . $mtrn3 . " " . $mtrn4 . " " . $mtrn5 . " " . $mtrn6 . " " . $mtrn7 . " " . $mtrn8 . " " . $mtrn9 . " " . $mtrn10; ?></p></td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
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
                        <td class="width70"><?php echo $raName; ?></td>
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
                    <tr>
                        <td class="width30"><strong>Transaction Status:</strong></td>
                        <td class="width70"><?php echo $status; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Money Status:</strong></td>
                        <td class="width70"><?php echo $money_status; ?></td>
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
                        <td class="right"><strong>Sent Amount</strong> <br>
                            <strong>Transaction Fee</strong> <br>
                            <strong>Received amount</strong> <br>
                            <strong> 1 <?php echo $current;?> =</strong> <br>
                            </td>
                        <td class="right"><strong><?php echo $sentAmount . " " . $current; ?><br>
                                <?php echo $rate; ?> <br>
                                <?php echo $receivedAmount . " " . $current; ?> <br>
                                <?php echo $charge . " " . $payment;?></strong></td>
                    </tr>
                    </tbody>
                </table>
                <div class="pull-right">
                    <h4><span>Payout Amount:</span> <?php echo $payout_amount . " " . $payment ?></h4>
                    <br>
                    <a class="btn btn-primary btn-large pull-right" href="gintpdf.php?m1=<?php echo $mtrn1;?>&m2=<?php echo $mtrn2;?>&m3=<?php echo $mtrn3;?>&m4=<?php echo $mtrn4;?>&m5=<?php echo $mtrn5;?>&m6=<?php echo $mtrn6;?>&m7=<?php echo $mtrn7;?>&m8=<?php echo $mtrn8;?>&m9=<?php echo $mtrn9;?>&m10=<?php echo $mtrn10;?>&sender=<?php echo $seName;?>">Send to agent</a></div>
            </div>
        </div>
    </div>
</div>