<?php include("../../include/phpscripts/DB.php") ?>

<?php
if(!isset($_SESSION['role'])){
    header("Location: index.php");
}else if($_SESSION['role'] == "Admin"){
    header("Location: admin_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: accountant_index.php");
}
?>



    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">

                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>Transactions</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Sneder Name</th>
                                <th>Sneder Email</th>
                                <th>Sender Country</th>
                                <th>Sneder Bank Account</th>
                                <th>Sender Nationality</th>
                                <th>Expiary Date</th>
                                <th>Receiver Name</th>
                                <th>Receiver Email</th>
                                <th>Receiver Country</th>
                                <th>Amount with Current Currency</th>
                                <th>Payment Currency</th>
                                <th>Total Amount</th>
                                <th>Rate</th>
                                <th>Charge</th>
                                <th>Status</th>
                                <th>Complete</th>
                                <th>Pending</th>
                                <th>Download a PDF</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            $query = "SELECT * FROM TRANSITION WHERE Agent_ID = '{$agent_id_val}' AND Status = 'Completed' ORDER BY ID DESC";
                            $select_posts = mysqli_query($mysqli, $query);
                            while($row = mysqli_fetch_assoc($select_posts)){
                                $id = $row['ID'];
                                $sender_name = $row['Sender_fName'] . " " . $row['Sender_lName'] ;
                                $sender_email = $row['Sender_Email'];
                                $sender_country = $row['Sender_Country'];
                                $sender_bankaccount = $row['Sender_BankAcount'];
                                $sender_idnumber = $row['Sender_IdNumber'];
                                $sender_nationality = $row['Sender_Nationality'];
                                $sender_expiary = $row['Sender_IdExp'];
                                $receiver_name = $row['Receiver_fName'] . " " . $row['Receiver_lName'] ;
                                $receiver_email = $row['Receiver_Email'];
                                $receiver_country = $row['Receiver_Country'];
                                $amount = $row['Amount'] . " " . $row['Current_Currency'];
                                $payment_currency = $row['Payment_Currency'];
                                $total_amount = $row['Total_Amount'];
                                $rate = $row['Rate'];
                                $charge = $row['Charge'];
                                $status = $row['Status'];

                                echo "<tr>";
                                ?>
                                <?php
                                echo "<td>$id</td>";
                                echo "<td>$sender_name</td>";
                                echo "<td>$sender_email</td>";
                                echo "<td>$sender_country</td>";
                                echo "<td>$sender_bankaccount</td>";
                                echo "<td>$sender_nationality</td>";
                                echo "<td>$sender_expiary</td>";
                                echo "<td>$receiver_name</td>";
                                echo "<td>$receiver_email</td>";
                                echo "<td>$receiver_country</td>";
                                echo "<td>$amount</td>";
                                echo "<td>$payment_currency</td>";
                                echo "<td>$total_amount</td>";
                                echo "<td>$rate</td>";
                                echo "<td>$charge</td>";
                                echo "<td>$status</td>";



                                echo "<td><a href='ctransaction.php?complete=$id'>Complete</a></td>";
                                echo "<td><a href='ctransaction.php?pending=$id'>Pending</a></td>";

                                echo "<td>Download</td>";



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
if(isset($_GET['complete'])){

    $id = $_GET['complete'];
    $query = "UPDATE TRANSITION SET Status = 'Completed' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: ctransaction.php");
    echo "Agent Blocked!";
}

if(isset($_GET['pending'])){

    $id = $_GET['pending'];
    $query = "UPDATE TRANSITION SET Status = 'Pending' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: ctransaction.php");
    echo "Agent Activated!";
}
?>