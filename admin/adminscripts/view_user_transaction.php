<?php include("../../include/phpscripts/DB.php") ?>
<?php
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
                                $query = "SELECT * FROM USER_TRANSACTION ORDER BY ID DESC";
                                $select_trans = mysqli_query($mysqli, $query);
                                while($row = mysqli_fetch_assoc($select_trans)){
                                    $id = $row['ID'];
                                    $accountId = $row['Account_ID'];
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
                                    $agent_id = $row['Agent_ID'];
//                                    $sender_name = $row['Sender_fName'] . " " . $row['Sender_lName'] ;
                                    $sender_ename = $row['Sender_eName'];
                                    $sender_aname = $row['Sender_aName'];
                                    $sender_email = $row['Sender_Email'];
                                    $sender_idnumber = $row['Sender_IdNumber'];
                                    $sender_expiary = $row['Sender_IdExp'];
//                                    $receiver_name = $row['Receiver_fName'] . " " . $row['Receiver_lName'] ;
                                    $receiver_aname = $row['Receiver_aName'];
                                    $receiver_ename = $row['Receiver_eName'];
                                    $receiver_email = $row['Receiver_Email'];
                                    $receiver_country = $row['Receiver_Country'];
                                    $amount = $row['Amount'] . " " . $row['Current_Currency'];
                                    $payment_currency = $row['Payment_Currency'];
                                    $total_amount = $row['Total_Amount'];
                                    $rate = $row['Rate'];
                                    $charge = $row['Charge'];
                                    $status = $row['Status'];
                                    $timestamp = strtotime($row['Time']);
                                    $date = date('Y-m-d',$timestamp);
                                    $time = date('h:m:s',$timestamp);

                                    echo "<tr>";
                                    ?>
                                    <?php
                                    echo "<td>$id</td>";
                                    echo "<td style=\"background: #c91c33;color: #fff\">$mtrn1 $mtrn2 $mtrn3 $mtrn4 $mtrn5 $mtrn6 $mtrn7 $mtrn8 $mtrn9 $mtrn10</td>";
                                    echo "<td>$sender_ename</td>";
                                    echo "<td>$sender_aname</td>";
                                    echo "<td>$sender_email</td>";
                                    echo "<td>$sender_expiary</td>";
                                    echo "<td>$receiver_ename</td>";
                                    echo "<td>$receiver_aname</td>";
                                    echo "<td>$receiver_email</td>";
                                    echo "<td>$receiver_country</td>";
                                    echo "<td>$amount</td>";
                                    echo "<td>$payment_currency</td>";
                                    echo "<td>$total_amount</td>";
                                    echo "<td>$rate</td>";
                                    echo "<td>$charge</td>";
                                    if($status == 'Pending'){
                                        $back = "background:;color:;";
                                    }else{
                                        $back = "background:#C39527;color:#fff;";
                                    }
                                    echo "<td style='$back' >$status</td>";



                                    echo "<td><a href='transaction.php?delete={$id}&senderf={$sender_ename}&senderl={$sender_aname}&receiverf={$receiver_ename}&receiverl={$receiver_aname}&mtrn1={$mtrn1}&mtrn5={$mtrn5}&mtrn10={$mtrn10}&agentid={$agent_id}&accountid={$accountId}'>Delete</a></td>";
                                    echo "<td><a href='transaction.php?source=edit_transaction&t_id={$id}'>Edit</a></td>";


                                    $query = "SELECT * FROM AGENT WHERE ID = $agent_id ";
                                    $select_trans_by_id = mysqli_query($mysqli, $query);
                                    while($row = mysqli_fetch_assoc($select_trans_by_id)) {

                                        $agent_place = $row['Agent_Area'];
                                    }

                                    echo "<td><a href='../pdf/{$sender_ename}{$sender_aname}{$receiver_ename}{$receiver_aname}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$accountId}.pdf'>Download</a></td>";



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
    $query = "DELETE FROM TRANSACTION WHERE ID = {$id} ";
    $delete_query = mysqli_query($mysqli, $query);
    $filelink = "../pdf/{$sender_ename}{$sender_aname}{$receiver_ename}{$receiver_aname}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$accountId}.pdf";
    unlink($filelink) or die("Couldn't delete file");
    header("Location: transaction.php");
}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

