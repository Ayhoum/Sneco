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
                    <h5>Clients</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client Name</th>
                            <th>Client Address</th>
                            <th>Client Phone</th>
                            <th>Client Email</th>
                            <th>Comments</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $query = "SELECT * FROM CLIENT ORDER BY ID DESC";
                        $select_posts = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($select_posts)){
                            $client_id          = $row['id'];
                            $client_name        = $row['Client_name'];
                            $client_address1       = $row['Client_address_1'];
                            $client_address2 = $row['Client_address_2'];
                            $client_phone = $row['Client_phone'];
                            $client_email = $row['Client_email'];
                            $comment = $row['Comments'];
                            echo "<tr>";
                            ?>
                            <?php
                            echo "<td>$client_id</td>";
                            echo "<td>$client_name</td>";
                            echo "<td>$client_address1 <br> $client_address2</td>";
                            echo "<td>$client_phone</td>";
                            echo "<td>$client_email</td>";
                            echo "<td>$comment</td>";

//                            echo "<td><a href='agents.php?block=$agent_id'>Block</a></td>";
//                            echo "<td><a href='agents.php?activate=$agent_id'>Activate</a></td>";
//
//                            echo "<td><a href='agent_transaction.php?agent_id=$agent_id'> View</a></td>";



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

