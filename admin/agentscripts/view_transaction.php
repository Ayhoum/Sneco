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
                                    <th style="background: #c9302c;color: #fff">MTRN</th>
                                    <th>Sneder Name</th>
                                    <th>Sneder Email</th>
                                    <th>Expiary Date</th>
                                    <th>Receiver Name</th>
                                    <th>Receiver Email</th>
                                    <th>Receiver Country</th>
                                    <th>Amount in Sent Currency</th>
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
                                $query = "SELECT * FROM TRANSITION WHERE Agent_ID = '{$agent_id_val}' ORDER BY ID DESC";
                                $select_posts = mysqli_query($mysqli, $query);
                                while($row = mysqli_fetch_assoc($select_posts)){
                                    $id = $row['ID'];
                                    $agent_id = $row['Agent_ID'];
                                    $account_Id = $row['Account_ID'];
                                    $mtrn1  = $row['MTRN1'];
                                    $mtrn2  = $row['MTRN2'];
                                    $mtrn3  = $row['MTRN3'];
                                    $mtrn4  = $row['MTRN4'];
                                    $mtrn5  = $row['MTRN5'];
                                    $mtrn6  = $row['MTRN6'];
                                    $mtrn7  = $row['MTRN7'];
                                    $mtrn8  = $row['MTRN8'];
                                    $mtrn9  = $row['MTRN9'];
                                    $mtrn10 = $row['MTRN10'];
                                    $mtrn = $row['MTRN1'] . " " . $row['MTRN2'] . " " . $row['MTRN3'] . " " . $row['MTRN4'] . " " . $row['MTRN5'] . " " . $row['MTRN6'] . " " . $row['MTRN7'] . " " . $row['MTRN8'] . " " . $row['MTRN9'] . " " . $row['MTRN10'] ;
                                    $sender_name = $row['Sender_fName'] . " " . $row['Sender_lName'] ;
                                    $sender_fname = $row['Sender_fName'];
                                    $sender_lname = $row['Sender_lName'];
                                    $sender_email = $row['Sender_Email'];
                                    $sender_idnumber = $row['Sender_IdNumber'];
                                    $sender_expiary = $row['Sender_IdExp'];
                                    $receiver_name = $row['Receiver_fName'] . " " . $row['Receiver_lName'] ;
                                    $receiver_fname = $row['Receiver_fName'];
                                    $receiver_lname = $row['Receiver_lName'];
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
                                    $fee = $rate - $amount;
                                    echo "<td>$id</td>";
                                    echo "<td style=\"background: #c91c33;color: #fff\">$mtrn</td>";
                                    echo "<td>$sender_name</td>";
                                    echo "<td>$sender_email</td>";
                                    echo "<td>$sender_expiary</td>";
                                    echo "<td>$receiver_name</td>";
                                    echo "<td>$receiver_email</td>";
                                    echo "<td>$receiver_country</td>";
                                    echo "<td>$amount</td>";
                                    echo "<td>$payment_currency</td>";
                                    echo "<td>$total_amount</td>";
                                    echo "<td>$fee</td>";
                                    echo "<td>$charge</td>";
                                    if($status == 'Pending'){
                                        $back = "background:;color:;";
                                    }else{
                                        $back = "background:#C39527;color:#fff;";
                                    }
                                    echo "<td style='$back' >$status</td>";


                                    echo "<td><a href='transaction.php?complete=$id'>Complete</a></td>";
                                    echo "<td><a href='transaction.php?pending=$id'>Pending</a></td>";

                                    echo "<td><a href='../pdf/{$sender_fname}{$sender_lname}{$receiver_fname}{$receiver_lname}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$account_Id}.pdf'>Download</a></td>";



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
    header("Location: transaction.php");
    echo "Agent Blocked!";
}

if(isset($_GET['pending'])){

    $id = $_GET['pending'];
    $query = "UPDATE TRANSITION SET Status = 'Pending' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: transaction.php");
    echo "Agent Activated!";
}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

