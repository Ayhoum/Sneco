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
                                    <th>Sender E.Name</th>
                                    <th>Sender Email</th>
                                    <th>Receiver E.Name</th>
                                    <th>Receiver Email</th>
                                    <th>Receiver Country</th>
                                    <th>Received Amount</th>
                                    <th>Payout Amount</th>
                                    <th>Rate</th>
                                    <th>Exchange</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    <th>View In details</th>
                                    <th>Download a PDF</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM TRANSACTION WHERE Agent_ID = '{$agent_id_val}' ORDER BY ID DESC";
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
//                                    $sender_name = $row['Sender_fName'] . " " . $row['Sender_lName'] ;
                                    $sender_ename = $row['Sender_eName'];
                                    $sender_aname = $row['Sender_aName'];
                                    $sender_email = $row['Sender_Email'];
                                    $sender_idnumber = $row['Sender_IdNumber'];
                                    $sender_expiary = $row['Sender_IdExp'];
//                                    $receiver_name = $row['Receiver_fName'] . " " . $row['Receiver_lName'] ;
                                    $receiver_ename = $row['Receiver_eName'];
                                    $receiver_aname = $row['Receiver_aName'];
                                    $receiver_email = $row['Receiver_Email'];
                                    $receiver_country = $row['Receiver_Country'];
                                    $receivedAmount = $row['Received_Amount'];
                                    $current = $row['Current_Currency'];
                                    $payout_amount = $row['Payout_Amount'] . " " . $row['Payment_Currency'];
                                    $rate = $row['Rate'];
                                    $total_received_amount = $receivedAmount + $rate;
                                    $charge = $row['Charge'];
                                    $status = $row['Status'];

                                    echo "<tr>";
                                    ?>
                                    <?php
                                    echo "<td>$id</td>";
                                    echo "<td style=\"background: #c91c33;color: #fff\">$mtrn</td>";
                                    echo "<td>$sender_ename</td>";
                                    echo "<td>$sender_email</td>";
                                    echo "<td>$receiver_ename</td>";
                                    echo "<td>$receiver_email</td>";
                                    echo "<td>$receiver_country</td>";
                                    echo "<td>$total_received_amount $current</td>";
                                    echo "<td>$payout_amount</td>";
                                    echo "<td>$rate</td>";
                                    echo "<td>$charge</td>";
                                    if($status == 'Pending'){
                                        $back = "background:#2f97b1;color:#000;";
                                    }else{
                                        $back = "background:#C39527;color:#fff;";
                                    }
                                    echo "<td style='$back' >$status</td>";


                                    echo "<td><a href='transaction.php?complete=$id'>Complete</a></td>";
                                    echo "<td><a href='transaction.php?pending=$id'>Pending</a></td>";

                                    echo "<td><a href='transaction_indetails.php?t_id={$id}'><p class='text-center'><i class=\"fa fa-info-circle fa-2x\" aria-hidden=\"true\"></i></p></a></td>";


                                    echo "<td><a href='../pdf/{$sender_ename}{$receiver_ename}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$account_Id}.pdf'><p class='text-center'><i class=\"fa fa-cloud-download fa-2x\" aria-hidden=\"true\"></i></p></a></td>";



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
    $query = "UPDATE TRANSACTION SET Status = 'Completed' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: transaction.php");
    echo "Agent Blocked!";
}

if(isset($_GET['pending'])){

    $id = $_GET['pending'];
    $query = "UPDATE TRANSACTION SET Status = 'Pending' WHERE ID = {$id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: transaction.php");
    echo "Agent Activated!";
}
?>

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

