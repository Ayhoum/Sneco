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
                    <h5>Users</h5>
                </div>
                <div class="widget-content nopadding">
                    <table class="table table-bordered data-table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                           <!-- <th>To</th>-->
                            <th>Value</th>
                            <th>Edit</th>
<!--                            <th>Delete</th>-->
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = "SELECT * FROM CURRENCIES ORDER BY ID DESC";
                        $select_posts = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($select_posts)){
                            $id = $row['ID'];
                            $from = $row['CurNameFr'];
                            //$to = $row['CurNameTo'];
                            $value = $row['Value'];

                            echo "<tr>";
                            ?>
                            <?php
                            echo "<td>$id</td>";
                            echo "<td>$from</td>";
                            //echo "<td>$to</td>";
                            echo "<td>$value</td>";


                            echo "<td><a href='currency.php?source=edit_currency&c_id={$id}'><p class='text-center'><i class=\"fa fa-pencil-square-o fa-2x\" aria-hidden=\"true\"></i></p></a></td>";

//                            echo "<td><a href='currency.php?delete=$id'><p class='text-center'><i class=\"fa fa-trash-o fa-2x\" aria-hidden=\"true\"></i></p></a></td>";


//                            $query = "SELECT * FROM AGENT WHERE ID = $agent_id ";
//                            $select_trans_by_id = mysqli_query($mysqli, $query);
//                            while($row = mysqli_fetch_assoc($select_trans_by_id)) {
//
//                                $agent_place = $row['Agent_Area'];
//                            }
//
//                            echo "<td><a href='../../pdf.php?agent_code={$agent_id}&place={$agent_place}&time={$time}&date={$date}&sender_name={$sender_name}&sender_email={$sender_email}'>Download</a></td>";
//
//
//
//                            echo "</tr>";
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
    $query = "DELETE FROM Currencies WHERE ID = {$id} ";
    $delete_query = mysqli_query($mysqli, $query);
    header("Location: currency.php");
}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

