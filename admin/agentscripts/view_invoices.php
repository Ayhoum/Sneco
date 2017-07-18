<?php include("../../include/phpscripts/DB.php") ?>
<?php
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Admin"){
    header("Location: ../admin_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
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
                            <th>Address</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Discount</th>
                            <th>Advanced Payment</th>
                            <th>Total</th>

                            <th>Client ID</th>
                            <th>Edit</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query = "SELECT * FROM INVOICE WHERE status = ". " 'Approved'ORDER BY ID DESC";
                        $select_posts = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($select_posts)){
                            $invoice_id       = $row['ID'];
                            $invoice_number   = $row['invoice_number'];
                            $invoice_type     = $row['invoice_type'];
                            $address1         = $row['address_line1'];
                            $address2         = $row['address_line2'];
                            $address3         = $row['address_line3'];
                            $item_id          = $row['Item_ID'];
                            $quantity         = $row['quantity'];
                            $discount         = $row['discount'];
                            $advanced_payment = $row['advanced_payment'];
                            $total            = $row['total'];
                            $shortcut         = $row['type_shortcut'];
                            $client_id        = $row['Client_ID'];
                            echo "<tr>";
                            ?>
                            <?php
                            echo "<td>$invoice_id</td>";
                            echo "<td>$invoice_number</td>";
                            echo "<td>$invoice_type</td>";
                            echo "<td>$address1 <br> <br> $address2 <br> <br> $address3</td>";
                            echo "<td>$item_id</td>";
                            echo "<td>$quantity</td>";
                            echo "<td>$discount</td>";
                            echo "<td>$advanced_payment</td>";
                            echo "<td>$total</td>";

//                            echo "<td>$client_id</td>";
//                            echo "<td><a href='agents.php?block=$agent_id'>Block</a></td>";
                            echo "<td><a href='clients.php?client_id=$client_id'>View</a></td>";
                            echo "<td>edit</td>";
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
//if(isset($_GET['block'])){
//
//    $the_agent_id = $_GET['block'];
//    $query = "UPDATE AGENT SET Agent_Status = 'Blocked' WHERE ID = {$the_agent_id}";
//    $block_agent_query = mysqli_query($mysqli, $query);
//    header("Location: agents.php");
//    echo "Agent Blocked!";
//}
//
//if(isset($_GET['activate'])){
//
//    $the_agent_id = $_GET['activate'];
//    $query = "UPDATE AGENT SET Agent_Status = 'Active' WHERE ID = {$the_agent_id}";
//    $block_agent_query = mysqli_query($mysqli, $query);
//    header("Location: agents.php");
//    echo "Agent Activated!";
//}
//?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

