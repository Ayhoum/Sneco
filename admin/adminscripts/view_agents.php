<?php include("../../include/phpscripts/DB.php") ?>
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
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Street Name</th>
        <th>House Number</th>
        <th>Postcode</th>
        <th>City</th>
        <th>Phone Number</th>
        <th>Area</th>
        <th>Status</th>
        <th>Block</th>
        <th>Activate</th>
        <th>View Transactions</th>
    </tr>
    </thead>
    <tbody>

    <?php
    $query = "SELECT * FROM AGENT ORDER BY Agent_Status ASC";
    $select_posts = mysqli_query($mysqli, $query);
    while($row = mysqli_fetch_assoc($select_posts)){
        $agent_id = $row['ID'];
        $agent_name = $row['Agent_Name'];
        $agent_email = $row['Agent_Email'];
        $agent_pass = $row['Agent_Pass'];
        $agent_sn = $row['Agent_StreetName'];
        $agent_hn = $row['Agent_HouseNo'];
        $agent_pc = $row['Agent_Postcode'];
        $agent_city = $row['Agent_City'];
        $agent_phone = $row['Agent_Phone'];
        $agent_area = $row['Agent_Area'];
        $agent_status = $row['Agent_Status'];

        echo "<tr>";
        ?>
        <?php
        echo "<td>$agent_id</td>";
        echo "<td>$agent_name</td>";
        echo "<td>$agent_email</td>";
        echo "<td>$agent_pass</td>";
        echo "<td>$agent_sn</td>";
        echo "<td>$agent_hn</td>";
        echo "<td>$agent_pc</td>";
        echo "<td>$agent_city</td>";
        echo "<td>$agent_phone</td>";
        echo "<td>$agent_area</td>";
        echo "<td>$agent_status</td>";
        echo "<td><a href='agents.php?block=$agent_id'>Block</a></td>";
        echo "<td><a href='agents.php?activate=$agent_id'>Activate</a></td>";

        echo "<td>View</td>";



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
if(isset($_GET['block'])){

    $the_agent_id = $_GET['block'];
    $query = "UPDATE AGENT SET Agent_Status = 'Blocked' WHERE ID = {$the_agent_id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: agents.php");
    echo "Agent Blocked!";
}

if(isset($_GET['activate'])){

    $the_agent_id = $_GET['activate'];
    $query = "UPDATE AGENT SET Agent_Status = 'Active' WHERE ID = {$the_agent_id}";
    $block_agent_query = mysqli_query($mysqli, $query);
    header("Location: agents.php");
    echo "Agent Activated!";
}
?>