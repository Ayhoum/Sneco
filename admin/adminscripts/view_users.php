<?php include("../../include/phpscripts/DB.php") ?>

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
                            <th>First Name</th>
                            <th>Last Email</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Street Name</th>
                            <th>House Number</th>
                            <th>Post Code</th>
                            <th>City</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM TRANSITION ORDER BY ID DESC";
                        $select_posts = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($select_posts)){
                            $id = $row['ID'];
                            $agent_id = $row['Agent_ID'];
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
                            $reason = $row['Reason'];
                            $status = $row['Status'];
                            $timestamp = strtotime($row['Time']);
                            $date = date('Y-m-d',$timestamp);
                            $time = date('h:m:s',$timestamp);

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
                            echo "<td>$reason</td>";
                            echo "<td>$status</td>";



                            echo "<td><a href='transaction.php?delete=$id'>Delete</a></td>";
                            echo "<td><a href='transaction.php?source=edit_transaction&t_id={$id}'>Edit</a></td>";


                            $query = "SELECT * FROM AGENT WHERE ID = $agent_id ";
                            $select_trans_by_id = mysqli_query($mysqli, $query);
                            while($row = mysqli_fetch_assoc($select_trans_by_id)) {

                                $agent_place = $row['Agent_Area'];
                            }

                            echo "<td><a href='../../pdf.php?agent_code={$agent_id}&place={$agent_place}&time={$time}&date={$date}&sender_name={$sender_name}&sender_email={$sender_email}'>Download</a></td>";



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

if(isset($_GET['delete'])){

    $id = $_GET['delete'];
    $query = "DELETE FROM TRANSITION WHERE ID = {$id} ";
    $delete_query = mysqli_query($mysqli, $query);
    header("Location: transaction.php");
}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

