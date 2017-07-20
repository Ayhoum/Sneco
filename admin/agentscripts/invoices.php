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
    <link rel="stylesheet" href="../css/datepicker.css" />
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!--Header-partttt-->
<div id="header">
    <h1><a href="../admin_index.php">Sneco Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-lock"></i>  <span class="text">Welcome User</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="../logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-users"></i> <span class="text">Online Users Now</span> <span class="label label-important">0</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<?php
include 'side_bar_agent.php' ;
?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Contact Support" class="tip-bottom"> Click here to contact the support</a></div>
    </div>
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="quick-actions_homepage">
            <ul class="quick-actions">
                <li class="bg_lb span3"> <a href="../agent_index.php"> <i class="fa fa-tachometer"></i> My Dashboard </a> </li>
                <li class="bg_lg span3"> <a href="transaction.php"> <i class="fa fa-exchange"></i> <span class="label label-important"><?php echo("$countTrans"); ?></span> Transactions</a> </li>
        </div>
        <!--End-Action boxes-->

        <div class="row-fluid">
            <div class="span12">

                <?php

                if(isset($_GET['source'])){
                    $source = $_GET['source'];
                }else{
                    $source = '';
                }
                switch($source){
                    default:
                        include "view_invoices.php";
                        break;
                }
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
<script src="../js/bootstrap-datepicker.js"></script>

</body>
</html>
