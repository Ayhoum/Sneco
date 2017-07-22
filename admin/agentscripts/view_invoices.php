<?php include("../../include/phpscripts/DB.php") ?>
<?php
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Admin"){
    header("Location: ../admin_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}else if($_SESSION['role'] != "Accountant" || $_SESSION['role'] != "Admin" || $_SESSION['role'] != "Agent"){
    header("Location: ../index.php");
}
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
                            <th>Total invoice amount</th>
                            <th>Client</th>
                            <th>View in details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        //invoice
                        $query = "SELECT * FROM INVOICE WHERE status = 'Approved' ORDER BY id DESC";
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
                            echo "<tr>";
                            echo "<td>$invoice_id</td>";
                            echo "<td>$invoice_number</td>";
                            echo "<td>$invoice_type</td>";
                            if($status == 'Pending'){
                                $back = "background:#2f97b1;color:#000;";
                            }else{
                                $back = "background:#C39527;color:#fff;";
                            }
                            echo "<td style='$back' >$status</td>";
                            // Invoice Line
                            $total_invoice_amount = 0;
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
                                        $item_price = $row['item_price'];
                                        $total_item_price = $item_price * $quantity;
                                        $total_invoice_amount = $total_invoice_amount + $total_item_price;
                                    }
                                }
                            }
                            echo "<td>$total_invoice_amount</td>";
                            // Client Name:
                            $query3 = "SELECT Client_name FROM CLIENT WHERE id = '{$client_id}'";
                            $select_posts4 = mysqli_query($mysqli, $query3);
                            while ($row = mysqli_fetch_assoc($select_posts4)) {
                                $client_name = $row['Client_name'];
                                echo "<td>$client_name</td>";

                            }
                            echo "<td><a href='invoice_indetails.php?i_id={$invoice_id}'><p class='text-center'><i class=\"fa fa-info-circle fa-2x\" aria-hidden=\"true\"></i></p></a></td>";
                            echo "</tr>";
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
<?php
if(isset($_GET['pending'])){
    $id = $_GET['pending'];
    $query = "UPDATE INVOICE SET status = 'Pending' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: invoices.php");
}
?>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>