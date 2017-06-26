<?php include("../../include/phpscripts/DB.php") ?>

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
                        $query = "SELECT * FROM USER ORDER BY ID DESC";
                        $select_posts = mysqli_query($mysqli, $query);
                        while($row = mysqli_fetch_assoc($select_posts)){
                            $id = $row['ID'];
                            $name = $row['First_Name'] . " " . $row['Last_Name'] ;
                            $email = $row['Email'];
                            $phone = $row['Phone'];
                            $streetName = $row['Street_Name'];
                            $houseName = $row['House_Number'];
                            $postCode = $row['Postcode'];
                            $city = $row['City'];

                            echo "<tr>";
                            ?>
                            <?php
                            echo "<td>$id</td>";
                            echo "<td>$name</td>";
                            echo "<td>$email</td>";
                            echo "<td>$phone</td>";
                            echo "<td>$streetName</td>";
                            echo "<td>$houseName</td>";
                            echo "<td>$postCode</td>";
                            echo "<td>$city</td>";



//                            echo "<td><a href='transaction.php?delete=$id'>Delete</a></td>";
//                            echo "<td><a href='transaction.php?source=edit_transaction&t_id={$id}'>Edit</a></td>";


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
//
//if(isset($_GET['delete'])){
//
//    $id = $_GET['delete'];
//    $query = "DELETE FROM TRANSITION WHERE ID = {$id} ";
//    $delete_query = mysqli_query($mysqli, $query);
//    header("Location: transaction.php");
//}
?>


<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>

