<?php
include '../../include/phpscripts/DB.php'
?>
<?php
if(isset($_POST['Submit'])) {
    //Sender

    $agName       = $_POST['Agent_Name'];
    $agEmail      = $_POST['Agent_Email'];
    $agPassword   = $_POST['Agent_Password'];
    $agSt         = $_POST['Agent_StreetName'];
    $agHn         = $_POST['Agent_HouseNumber'];
    $agPc         = $_POST['Agent_Postcode'];
    $agCity       = $_POST['Agent_City'];
    $agPhone      = $_POST['Agent_PhoneNumber'];
    $agArea       = $_POST['Agent_Area'];
    $agStats      = "Active";


    $enccode = ['cost' => 11];
    $encAgPassword = password_hash($agPassword, PASSWORD_BCRYPT, $enccode);


    if(!empty($agName) && !empty($agEmail) && !empty($agPassword) && !empty($agSt) && !empty($agHn) && !empty($agPc) && !empty($agCity) && !empty($agPhone) && !empty($agArea) && !empty($agStats)){
//Insert Customerrrr into database::
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
              <li><a class="sAdd" title="" href="#"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
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
<div id="sidebar"><a href="#" class="visible-phone"><i class="fa fa-tachometer"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a> </li>
    <li> <a href="charts.html"><i class="fa fa-exchange"></i> <span>Transactions</span> <span class="label label-important">0</span></a> </li>
      <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Agents</span></a>
          <ul>
              <li><a href="form-common.html">Current Agents</a></li>
              <li><a href="form-validation.html">Add Agent</a></li>
          </ul>
      </li>
    <li><a href="tables.html"><i class="fa fa-users"></i> <span>Users</span></a></li>
    <li><a href="grid.html"><i class="fa fa-money"></i> <span>Currency rates</span></a></li>

  </ul>
</div>
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
        <li class="bg_lb span3"> <a href="index.html"> <i class="fa fa-tachometer"></i> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="charts.html"> <i class="fa fa-exchange"></i> <span class="label label-important">0</span> Transactions</a> </li>
        <li class="bg_ls span3"> <a href="grid.html"> <i class="fa fa-pencil"></i> Agents</a> </li>
        <li class="bg_lo span3"> <a href="form-common.html"> <i class="fa fa-users"></i> Users</a> </li>
        <li class="bg_lb span3"> <a href="interface.html"> <i class="fa fa-money"></i>Currency Rates</a> </li>

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
