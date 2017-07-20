<?php include("../../include/phpscripts/DB.php") ?>
<?php
//if(!isset($_SESSION['role'])){
//    header("Location: ../index.php");
//}else if($_SESSION['role'] == "Agent"){
//    header("Location: ../agent_index.php");
//}else if($_SESSION['role'] == "Accountant"){
//    header("Location: ../accountant_index.php");
//}
?>
<div class="container-fluid">
    <hr>
    <div class="row-fluid">
        <div class="span12">

            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Invoices</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Invoice Number</th>
                            <th>Invoice Type</th>
                            <th>Status</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Advanced Payment</th>
                            <th>Total</th>
                            <th>Client</th>
                            <th>Approve</th>
                            <th>View in details</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        //invoice
                        $query = "SELECT * FROM INVOICE ORDER BY id DESC";
                        $select_posts1 = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($select_posts1)) {
                            $invoice_id = $row['id'];
                            $invoice_number = $row['invoice_number'];
                            $invoice_type = $row['invoice_type'];
                            $address1 = $row['address_line1'];
                            $address2 = $row['address_line2'];
                            $address3 = $row['address_line3'];
                            $discount = $row['discount'];
                            $advanced_payment = $row['advanced_payment'];
                            $client_id = $row['CLIENT_id'];
                            $status = $row['status'];
                        // Invoice Line
                            $query1 = "SELECT * FROM INVOICE_LINE WHERE Invoice_id = '{$invoice_id}' ";
                            $select_posts2 = mysqli_query($mysqli, $query1);
                            while ($row = mysqli_fetch_assoc($select_posts2)) {
                                $item_id = $row['ITEM_id'];
                                $quantity = $row['Quantity'];
                                $total = $row['Total'];

                                // Item Name:
                                $query2 = "SELECT item_name FROM ITEM WHERE id = '{$item_id}' ";
                                $select_posts3 = mysqli_query($mysqli, $query2);
                                while ($row = mysqli_fetch_assoc($select_posts3)) {
                                    $item_name = $row['item_name'];

                                    // Client Name:
                                    $query3 = "SELECT Client_name FROM CLIENT WHERE id = '{$client_id}' ";
                                    $select_posts4 = mysqli_query($mysqli, $query3);
                                    while ($row = mysqli_fetch_assoc($select_posts4)) {
                                        $client_name = $row['Client_name'];
                                        echo "<tr>";
                                        ?>

                                        <?php
                                        echo "<td>$invoice_id</td>";
                                        echo "<td>$invoice_number</td>";
                                        echo "<td>$invoice_type</td>";
                                        echo "<td>$status</td>";
                                        echo "<td>$item_name</td>";
                                        echo "<td>$quantity</td>";
                                        echo "<td>$discount</td>";
                                        echo "<td>$advanced_payment</td>";
                                        echo "<td>$total</td>";
                                        echo "<td>$client_name</td>";
                                        echo "<td><a href='invoices.php?approve=$invoice_id'>Approved</a> <br> ";
                                        echo "<td><a href='invoice_indetails.php?i_id={$invoice_id}'><p class='text-center'><i class=\"fa fa-info-circle fa-2x\" aria-hidden=\"true\"></i></p></a></td>";
                                        echo "</tr>";
                                    }
                                }

                            }
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_GET['approve'])){
    $id = $_GET['approve'];
    $query = "UPDATE INVOICE SET status = 'Approved' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: invoices.php");
}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

