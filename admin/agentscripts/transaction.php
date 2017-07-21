<?php
ob_start();
include '../../include/phpscripts/DB.php'
?>

<?php
session_start();
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Admin"){
    header("Location: ../admin_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}
?>
<?php
if(isset($_SESSION['email'])){
    $agent_email_get_id = $_SESSION['email'];
}
$query = "SELECT * FROM AGENT WHERE Agent_Email = '{$agent_email_get_id}' ";
$select_agent_by_id = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_agent_by_id)){
    $agent_id_val = $row['ID'];
    $agent_name = $row['Agent_Name'];

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/uniform.css" />
    <link rel="stylesheet" href="../css/select2.css" />
    <link rel="stylesheet" href="../css/matrix-style.css" />
    <link rel="stylesheet" href="../css/matrix-media.css" />
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!--Header-partttt-->
<div id="header">
    <h1><a href="../agent_index.php">Sneco Agent</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome <?php echo $agent_name; ?></span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="../logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="agent_index.php" class="visible-phone"><i class="fa fa-tachometer"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="agent_index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon icon-signal"></i> <span>Transactions</span> <span class="label label-important"></span></a>
            <ul>
                <li><a href="transaction.php">All transactions </a></li>
                <li><a href="ctransaction.php">Completed transactions </a></li>
                <li><a href="ptransaction.php">Pending transactions</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Currency rates</span></a>
            <ul>
                <li><a href="currency.php">Current Currencies </a></li>
            </ul>
        </li>

        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Invoices</span></a>
            <ul>
                <li><a href="invoices.php">Current Invoices</a></li>
                <li><a href="add_invoice.php">Add Invoice</a></li>
            </ul>
        </li>
</div>

<!--sidebar-menu-->

<?php
if(isset($_SESSION['email'])){
    $agent_email_get_id = $_SESSION['email'];
}
$query = "SELECT * FROM AGENT WHERE Agent_Email = '{$agent_email_get_id}' ";
$select_agent_by_id = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_agent_by_id)){
    $agent_id_val = $row['ID'];
}
?>
<div id="content">
    <div id="content-header">

        <div id="breadcrumb"> <a href="../contact.php" title="Contact Support" class="tip-bottom"> Click here to contact the support</a></div>

    </div>
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb span3"> <a href="../agent_index.php"> <i class="fa fa-tachometer"></i> My Dashboard </a> </li>
                <li class="bg_lg span3"> <a href="transaction.php"> <i class="fa fa-exchange"></i> <span class="label label-important"></span> Transactions</a> </li>

            </ul>
        </div>

        <div class="row-fluid">
            <div class="span12">

                <?php
                include "view_transaction.php";
                ?>

            </div>
        </div>
        <!--End-Chart-box-->
        <hr/>

    </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Designed by: Alaa & Ayham </div>
</div>

<!--end-Footer-part-->

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.custom.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.uniform.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>
<script src="../js/matrix.form_validation.js"></script>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/matrix.tables.js"></script>
</body>
</html>
