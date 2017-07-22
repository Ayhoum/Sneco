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
if(isset($_GET['i_id'])){
    $invoice_id = $_GET['i_id'];
}
$query = "SELECT * FROM INVOICE where id= '{$invoice_id}'";
$select_posts = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_posts)) {
    $invoice_number = $row['invoice_number'];
    $invoice_type = $row['invoice_type'];
    $address1 = $row['address_line1'];
    $address2 = $row['address_line2'];
    $address3 = $row['address_line3'];
    $discount = $row['discount'];
    $advanced_payment = $row['advanced_payment'];
    $status = $row['status'];
    $client_id = $row['CLIENT_id'];

    // Client Name:
    $query3 = "SELECT * FROM CLIENT WHERE id = '{$client_id}' ";
    $select_posts4 = mysqli_query($mysqli, $query3);
    while ($row = mysqli_fetch_assoc($select_posts4)) {

        $client_name = $row['Client_name'];
        $client_address = $row['Client_address_1'] .'<br>'. $row['Client_address_2'];
        $client_phone = $row['Client_phone'];
        $client_email = $row['Client_email'];

    }
}

?>




<div class="widget-box">
    <div class="widget-title"> <span class="icon"> <i class="fa fa-exchange"></i> </span>
        <h5 >Invoice No. <?php echo $invoice_number; ?></h5>
    </div>
    <div class="widget-content">
        <div class="row-fluid">
            <div class="span6">
                <table class="table table-bordered table-invoice">
                    <tbody>
                        <p class="text-center" style="font-size: 20px;"><strong>Invoice Details</strong></p>
                    <tr>
                        <td class="width30"><strong>Invoice type</strong></td>
                        <td class="width70"><?php echo $invoice_type; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Shipping Address:</strong></td>
                        <td class="width70"><?php echo $address1."<br>" .$address2. "<br>" .$address3; ?></td>
                    </tr>
                        <tr>
                            <td class="width30"><strong>Invoice status</strong></td>
                            <td class="width70"><?php echo $status; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="span6">
                <table class="table table-bordered table-invoice">
                    <tbody>
                    <p class="text-center" style="font-size: 20px;"><strong>Client Details</strong></p>
                    <tr>
                        <td class="width30"><strong>Client :</strong></td>
                        <td class="width70"><?php echo $client_name; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Main Address :</strong></td>
                        <td class="width70"><?php echo $client_address; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Email:</strong></td>
                        <td class="width70"><?php echo $client_email; ?></td>
                    </tr>
                    <tr>
                        <td class="width30"><strong>Phone:</strong></td>
                        <td class="width70"><?php echo $client_phone; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <div class="row-fluid">

        <div class="span12">
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>

                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Total per item</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $invoice_total_amount = 0;
                    $query1 = "SELECT * FROM INVOICE_LINE WHERE Invoice_id = '{$invoice_id}' ";
                        $select_posts2 = mysqli_query($mysqli, $query1);
                        if (mysqli_num_rows($select_posts2) > 0 ) {
                            while ($row = mysqli_fetch_assoc($select_posts2)) {
                                $item_id = $row['ITEM_id'];
                                $quantity = $row['Quantity'];
                                $total = $row['Total'];


                                // Item Name:
                                $query2 = "SELECT * FROM ITEM WHERE id = '{$item_id}' ";
                                $select_posts3 = mysqli_query($mysqli, $query2);
                                while ($row = mysqli_fetch_assoc($select_posts3)) {
                                    $item_name = $row['item_name'];
                                    $item_description = $row['item_description'];
                                    $item_price = $row['item_price'];
                                    $total_item_price = $item_price * $quantity;
                                    echo "<tr>";

                                    echo "<td>$item_name ($item_description)</td>";
                                    echo "<td>$quantity</td>";
                                    echo "<td>$total_item_price</td>";

                                    echo "</tr>";
                                    $invoice_total_amount = $invoice_total_amount + $total_item_price;
                                }
                            }

                        }

                    ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
        <br>
        <br>
        <br>
    <div class="row-fluid">
            <div class="span12">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <td class="msg-invoice" width="85%"><h4>Payments</h4>
<!--                            <a href="#" class="tip-bottom" title="Wire Transfer">Wire transfer</a> |  <a href="#" class="tip-bottom" title="Bank account">Bank account #</a> |  <a href="#" class="tip-bottom" title="SWIFT code">SWIFT code </a>|  <a href="#" class="tip-bottom" title="IBAN Billing address">IBAN Billing address </a></td>-->
                        <td class="right">
                            <strong>Total invoice amount :</strong> <br>
                            <strong>Discount</strong> <br>
                            <strong>Advanced Payment</strong> <br>
                            <strong> </strong> <br>
                            </td>
                        <td class="right"><strong><?php echo $invoice_total_amount; ?><br>
                                <?php echo $discount ?> <br>
                                <?php echo $advanced_payment; ?> <br></strong></td>
                    </tr>
                    </tbody>
                </table>
                <?php
                $invoice_total_amount = $invoice_total_amount - $discount - $advanced_payment;
                ?>
                <div class="pull-right">
                    <h4><span>Total to pay:</span> <?php if($invoice_total_amount == 0){echo "Done!";}else{echo $invoice_total_amount;} ?></h4>
                    <br>
                    <a class="btn btn-success btn-large pull-right" href="view_invoice_indetails.php?approve=<?php echo $invoice_id; ?>">Approve</a></div>
                <br>
                <a class="btn btn-success btn-large pull-right" href="../invoice_pdf/<?php echo $invoice_number ?>.pdf"><p class='text-center'><i class="fa fa-cloud-download fa-2x" aria-hidden="true"></i></p></a></div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_GET['approve'])){
    $id = $_GET['approve'];
    $query = "UPDATE INVOICE SET status = 'Approved' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: invoice_indetails.php?i_id={$id}");
}
?>