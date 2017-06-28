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
                                    <th>Delete</th>
                                    <th>Edit</th>
                                    <th>Download a PDF</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $query = "SELECT * FROM TRANSITION ORDER BY ID DESC";
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
                                    $timestamp = strtotime($row['Time']);
                                    $date = date('Y-m-d',$timestamp);
                                    $time = date('h:m:s',$timestamp);

                                    echo "<tr>";
                                    ?>
                                    <?php
                                    echo "<td>$id</td>";
                                    echo "<td style=\"background: #c91c33;color: #fff\">$mtrn1 $mtrn2 $mtrn3 $mtrn4 $mtrn5 $mtrn6 $mtrn7 $mtrn8 $mtrn9 $mtrn10</td>";
                                    echo "<td>$sender_name</td>";
                                    echo "<td>$sender_email</td>";
                                    echo "<td>$sender_expiary</td>";
                                    echo "<td>$receiver_name</td>";
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



                                    echo "<td><a href='transaction.php?delete={$id}&senderf={$sender_fname}&senderl={$sender_lname}&receiverf={$receiver_fname}&receiverl={$receiver_lname}&mtrn1={$mtrn1}&mtrn5={$mtrn5}&mtrn10={$mtrn10}&agentid={$agent_id}&accountid={$accountId}'>Delete</a></td>";
                                    echo "<td><a href='transaction.php?source=edit_transaction&t_id={$id}'>Edit</a></td>";


                                    $query = "SELECT * FROM AGENT WHERE ID = $agent_id ";
                                    $select_trans_by_id = mysqli_query($mysqli, $query);
                                    while($row = mysqli_fetch_assoc($select_trans_by_id)) {

                                        $agent_place = $row['Agent_Area'];
                                    }

                                    echo "<td><a href='../pdf/{$sender_fname}{$sender_lname}{$receiver_fname}{$receiver_lname}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$accountId}.pdf'>Download</a></td>";



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
    $filelink = "../pdf/{$sender_fname}{$sender_lname}{$receiver_fname}{$receiver_lname}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$accountId}.pdf";
    unlink($filelink) or die("Couldn't delete file");
    header("Location: transaction.php");
}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

