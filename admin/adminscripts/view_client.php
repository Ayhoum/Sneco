<?php include("../../include/phpscripts/DB.php") ?>
<?php

if(!isset($_SESSION['role'])){
    header("Location: index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: Agent_index.php");
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
                    <h5>Agents</h5>
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
                            $item_id          = $row['ID'];
                            $item_name        = $row['Client_name'];
                            $item_price       = $row['Client_address_1'];
                            $item_description = $row['Client_address_1'];
                            echo "<tr>";
                            ?>
                            <?php
                            echo "<td>$item_id</td>";
                            echo "<td>$item_name</td>";
                            echo "<td>$item_price</td>";
                            echo "<td>$item_description</td>";

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

