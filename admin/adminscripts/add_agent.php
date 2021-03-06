<?php
include '../../include/phpscripts/DB.php'
?>
<?php
session_start();
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
<?php
if(isset($_POST['Submit'])) {
    //Sender

    $agName       = $_POST['Agent_Name'];
    $agName       = mysqli_real_escape_string($mysqli,$agName);
    $agEmail      = $_POST['Agent_Email'];
    $agEmail      = mysqli_real_escape_string($mysqli,$agEmail);
    $agPassword   = $_POST['Agent_Password'];
    $agPassword   = mysqli_real_escape_string($mysqli,$agPassword);
    $agSt         = $_POST['Agent_StreetName'];
    $agSt         = mysqli_real_escape_string($mysqli,$agSt);
    $agHn         = $_POST['Agent_HouseNumber'];
    $agHn         = mysqli_real_escape_string($mysqli,$agHn);
    $agPc         = $_POST['Agent_Postcode'];
    $agPc         = mysqli_real_escape_string($mysqli,$agPc);
    $agCity       = $_POST['Agent_City'];
    $agCity       = mysqli_real_escape_string($mysqli,$agCity);
    $agPhone      = $_POST['Agent_PhoneNumber'];
    $agPhone      = mysqli_real_escape_string($mysqli,$agPhone);
    $agArea       = $_POST['Agent_Area'];
    $agArea       = mysqli_real_escape_string($mysqli,$agArea);
    $agStats      = "Active";
    $enccode = ['cost' => 11];
    $encAgPassword = password_hash($agPassword, PASSWORD_BCRYPT, $enccode);
    if(!empty($agName) && !empty($agEmail) && !empty($agPassword) && !empty($agSt) && !empty($agHn) && !empty($agPc) && !empty($agCity) && !empty($agPhone) && !empty($agArea) && !empty($agStats)){
    $query = "INSERT INTO AGENT(Agent_Name,
                                Agent_Email,
                                Agent_Pass,
                                Agent_StreetName,
                                Agent_HouseNo,
                                Agent_Postcode,
                                Agent_City,
                                Agent_Phone,
                                Agent_Area,
                                Agent_Status) ";
    $query .= "VALUES('{$agName}',
                    '{$agEmail}',
                    '{$encAgPassword}',
                    '{$agSt}',
                    '{$agHn}',
                    '{$agPc}',
                    '{$agCity}',
                    '{$agPhone}',
                    '{$agArea}',
                    '{$agStats}') ";
    $result =  mysqli_query($mysqli, $query);
    if (!$result) {
        die("Failed!" . mysqli_error($mysqli));
    }else{
        header("Location: agents.php");
    }
    }
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
<!--Header-part-->
<div id="header">
  <h1><a href="../admin_index.php">Sneco Admin</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-lock"></i>  <span class="text">Welcome Admin</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="../logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </li>
        <li class=""><a title="" href="../index.php"><i class="icon icon-home"></i> <span class="text">Home Page</span></a></li>
        <li class=""><a href="#"><i class="fa fa-users"></i> <span class="text">Online Users Now</span> <span class="label label-important">0</span></a></li>
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
<div id="sidebar"><a href="#" class="visible-phone"><i class="fa fa-tachometer"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="../admin_index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a> </li>
        <?php
        $query = "SELECT COUNT(*)  AS ID FROM TRANSACTION ";
        $counter = mysqli_query($mysqli,$query);
        $num = mysqli_fetch_array($counter);
        $countTrans = $num["ID"];
        $query = "SELECT COUNT(*)  AS ID FROM AGENT";
        $counter = mysqli_query($mysqli,$query);
        $num = mysqli_fetch_array($counter);
        $countAgent = $num["ID"];
        ?>
        <li> <a href="transaction.php"><i class="fa fa-exchange"></i> <span>Transactions</span> <span class="label label-important"><?php echo("$countTrans"); ?></span></a> </li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Agents</span> <span class="label label-important"><?php echo("$countAgent"); ?></span></a>
            <ul>
                <li><a href="agents.php">Current Agents </a></li>
                <li><a href="add_agent.php">Add Agent</a></li>
            </ul>
        </li>
        <li><a href="users.php"><i class="fa fa-users"></i> <span>Users</span> <span class="label label-important"><?php echo("$countTrans"); ?></span></a></li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Currency rates</span></a>
            <ul>
                <li><a href="currency.php">Current Currencies </a></li>
                <li><a href="add_currency.php">Add Currencies</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Items</span></a>
            <ul>
                <li><a href="items.php">Current Items</a></li>
                <li><a href="add_item.php">Add Item</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Clients</span></a>
            <ul>
                <li><a href="clients.php">Current Clients</a></li>
                <li><a href="add_client.php">Add Client</a></li>
            </ul>
        </li>
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Invoices</span></a>
            <ul>
                <li><a href="invoices.php">Current Invoices</a></li>
                <li><a href="add_invoice.php">Add Invoice</a></li>
            </ul>
        </li>
    </ul>
</div>
<!--sidebar-menu-->
<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="../contact.php" title="Contact Support" class="tip-bottom"> Click here to contact the support</a></div>
  </div>
<!--End-breadcrumbs-->
<!--Action boxes-->
  <div class="container-fluid">
      <div class="quick-actions_homepage">
          <ul class="quick-actions">
              <li class="bg_lb span3"> <a href="../admin_index.php"> <i class="fa fa-tachometer"></i> My Dashboard </a> </li>
              <li class="bg_lg span3"> <a href="transaction.php"> <i class="fa fa-exchange"></i> <span class="label label-important"><?php echo("$countTrans"); ?></span> Transactions</a> </li>
              <li class="bg_ls span3"> <a href="agents.php"> <i class="fa fa-pencil"></i> <span class="label label-important"><?php echo("$countAgent"); ?></span> Agents</a> </li>
              <li class="bg_lo span3"> <a href="users.php"> <i class="fa fa-users"></i> <span class="label label-important"><?php echo("$countTrans"); ?></span> Users</a> </li>
              <li class="bg_lb span3"> <a href="currency.php"> <i class="fa fa-money"></i>Currency Rates</a> </li>
          </ul>
      </div>
<!--End-Action boxes-->
      <div class="container-fluid"><hr>
          <div class="row-fluid">
              <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                  <div class="span12">
                      <div class="widget-box">
                          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                              <h5>New Agent</h5>
                          </div>
                          <div class="widget-content nopadding">
                              <div class="control-group">
                                  <label class="control-label">Agent Name</label>
                                  <div class="controls">
                                      <input type="text" name="Agent_Name" id="Agent_Name" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Agent Email Address</label>
                                  <div class="controls">
                                      <input type="text" name="Agent_Email" id="Agent_Email" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Agent Password</label>
                                  <div class="controls">
                                      <input type="text" name="Agent_Password" id="Agent_Password" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Agent Street Name</label>
                                  <div class="controls">
                                      <input type="text" name="Agent_StreetName" id="Agent_StreetName" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Agent House Number</label>
                                  <div class="controls">
                                      <input type="text" name="Agent_HouseNumber" id="Agent_HouseNumber" required>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Agent Postcode</label>
                                      <div class="controls">
                                          <input type="text" name="Agent_Postcode" id="Agent_Postcode" required>
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Agent City</label>
                                      <div class="controls">
                                          <input type="text" name="Agent_City" id="Agent_City" required>
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Agent Phone Number</label>
                                      <div class="controls">
                                          <input type="text" name="Agent_PhoneNumber" id="Agent_PhoneNumber" required>
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Agent Area</label>
                                      <div class="controls">
                                          <input type="text" name="Agent_Area" id="Agent_Area" required>
                                      </div>
                                  </div>
                                  <div class="widget-content nopadding">
                                      <div class="form-actions">
                                          <input name="Submit" type="submit" value="Add" class="btn btn-success">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </form>
          </div>
      </div>
<!--End-Chart-box--> 
    <hr/>
    <div class="row-fluid">
      <div class="span6">
      </div>
      <div class="span6">
      </div>
    </div>
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
</body>
</html>
