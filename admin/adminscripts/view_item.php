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
                            <th>Item Name</th>
                            <th>Item Price</th>
                            <th>Item Description</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM ITEM ORDER BY ID DESC";
                        $select_trans = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($select_trans)){
                            $id               = $row['ID'];
                            $item_name        = $row['item_name'];
                            $item_price       = $row['item_price'];
                            $item_description = $row['item_description'];
                            echo "<tr>";
                            ?>
                            <?php
                            echo "<td>$id</td>";
                            echo "<td>$item_name</td>";
                            echo "<td>$item_price</td>";
                            echo "<td>$item_description</td>";
//                            echo "<td><a href='item.php?delete={$id}&senderf={$sender_ename}&senderl={$sender_aname}&receiverf={$receiver_ename}&receiverl={$receiver_aname}&mtrn1={$mtrn1}&mtrn5={$mtrn5}&mtrn10={$mtrn10}&agentid={$agent_id}&accountid={$accountId}'>Delete</a></td>";
//                            echo "<td><a href='item.php?source=edit_transaction&t_id={$id}'>Edit</a></td>";
//

//                            $query = "SELECT * FROM AGENT WHERE ID = $agent_id ";
//                            $select_trans_by_id = mysqli_query($mysqli, $query);
//                            while($row = mysqli_fetch_assoc($select_trans_by_id)) {
//
//                                $agent_place = $row['Agent_Area'];
//                            }
//
//                            echo "<td><a href='../pdf/{$sender_ename}{$sender_aname}{$receiver_ename}{$receiver_aname}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$accountId}.pdf'>Download</a></td>";
//
//
//
                            echo "</tr>";
//                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
//
//if(isset($_GET['delete'])){
//
//    $id = $_GET['delete'];
//    $query = "DELETE FROM TRANSACTION WHERE ID = {$id} ";
//    $delete_query = mysqli_query($mysqli, $query);
//    $filelink = "../pdf/{$sender_ename}{$sender_aname}{$receiver_ename}{$receiver_aname}{$mtrn1}{$mtrn5}{$mtrn10}{$agent_id}{$accountId}.pdf";
//    unlink($filelink) or die("Couldn't delete file");
//    header("Location: transaction.php");
//}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

