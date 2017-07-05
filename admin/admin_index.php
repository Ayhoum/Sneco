<?php
ob_start();
session_start();
if(!isset($_SESSION['role'])){
    header("Location: index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: accountant_index.php");
}
?>
<?php
include ("../include/phpscripts/DB.php");

function users_online(){
    global  $mysqli;
    if(isset($_GET['onlineusers'])){
        if(!$mysqli){
            session_start();
            $session = session_id();
            $time = time();
            $time_out_in_seconds = 05;
            $time_out = $time - $time_out_in_seconds;
            $query = "SELECT * FROM users_online WHERE session = '$session'";
            $send_query = mysqli_query($mysqli, $query);
            $count = mysqli_num_rows($send_query);
            if($count == NULL){
                mysqli_query($mysqli, "INSERT INTO users_online(session, time) VALUES('$session', '$time') ");
            }else{
                mysqli_query($mysqli, "UPDATE users_online SET time = '$time' WHERE session = '$session' ");
            }
            $users_online_query = mysqli_query($mysqli, "SELECT * FROM users_online WHERE time > '$time_out' ");
            echo $count_user = mysqli_num_rows($users_online_query);
        }
    }
}
users_online();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-partttt-->
<div id="header">
  <h1><a href="admin_index.php">Sneco Admin</a></h1>
</div>
<!--close-Header-part-->

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="fa fa-lock"></i>  <span class="text">Welcome Admin</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </li>
        <li class=""><a title="" href="../index.php"><i class="icon icon-home"></i> <span class="text">Home Page</span></a></li>
        <li class=""><a href="#"><i class="fa fa-users"></i> <span class="text">Online Users Now</span> <span class="label label-important useronline"></span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->

<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="admin_index.php" class="visible-phone"><i class="fa fa-tachometer"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="admin_index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a> </li>
      <?php
      $query = "SELECT COUNT(*)  AS ID FROM TRANSACTION";
      $counter = mysqli_query($mysqli,$query);
      $num = mysqli_fetch_array($counter);
      $countTrans = $num["ID"];
      ?>

      <?php
      $query = "SELECT COUNT(*)  AS ID FROM AGENT";
      $counter = mysqli_query($mysqli,$query);
      $num = mysqli_fetch_array($counter);
      $countAgent = $num["ID"];
      ?>
    <li> <a href="adminscripts/transaction.php"><i class="fa fa-exchange"></i> <span>Transactions</span> <span class="label label-important"><?php echo("$countTrans"); ?></span></a> </li>
      <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Agents</span> <span class="label label-important"><?php echo("$countAgent"); ?></span></a>
          <ul>
              <li><a href="adminscripts/agents.php">Current Agents </a></li>
              <li><a href="adminscripts/add_agent.php">Add Agent</a></li>
          </ul>
      </li>
    <li><a href="adminscripts/users.php"><i class="fa fa-users"></i> <span>Users</span> <span class="label label-important"><?php echo("$countTrans"); ?></span></a></li>
      <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Currency rates</span></a>
          <ul>
              <li><a href="adminscripts/currency.php">Current Currencies </a></li>
              <li><a href="adminscripts/add_currency.php">Add Currencies</a></li>
          </ul>
      </li>

  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="contact.php" title="Contact Support" class="tip-bottom"> Click here to contact the support</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb span3"> <a href="admin_index.php"> <i class="fa fa-tachometer"></i> My Dashboard </a> </li>
        <li class="bg_lg span3"> <a href="adminscripts/transaction.php"> <i class="fa fa-exchange"></i> <span class="label label-important"><?php echo("$countTrans"); ?></span> Transactions</a> </li>
        <li class="bg_ls span3"> <a href="adminscripts/agents.php"> <i class="fa fa-pencil"></i> <span class="label label-important"><?php echo("$countAgent"); ?></span> Agents</a> </li>
        <li class="bg_lo span3"> <a href="adminscripts/users.php"> <i class="fa fa-users"></i> <span class="label label-important"><?php echo("$countTrans"); ?></span> Users</a> </li>
        <li class="bg_lb span3"> <a href="adminscripts/currency.php"> <i class="fa fa-money"></i>Currency Rates</a> </li>

      </ul>
    </div>
<!--End-Action boxes-->


      <?php
      $query = "SELECT COUNT(*)  AS ID FROM TRANSACTION WHERE Status = 'Done' ";
      $counter = mysqli_query($mysqli,$query);
      $num = mysqli_fetch_array($counter);
      $countTransDone = $num["ID"];
      ?>

      <?php
      $query = "SELECT COUNT(*)  AS ID FROM TRANSACTION WHERE Status != 'Done'";
      $counter = mysqli_query($mysqli,$query);
      $num = mysqli_fetch_array($counter);
      $countTransNot = $num["ID"];
      ?>
<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">

            <div class="span12">
              <ul class="site-stats">
                <li class="bg_lh"><i class="fa fa-users"></i> <strong>0</strong> <small>Total Users</small></li>
                <li class="bg_lh"><i class="fa fa-user-plus"></i> <strong>0</strong> <small>New Users </small></li>
                <li class="bg_lh"><i class="fa fa-exchange"></i> <strong><?php echo("$countTrans"); ?></strong> <small>Total Transactions</small></li>
                <li class="bg_lh"><i class="fa fa-pencil"></i> <strong><?php echo("$countAgent"); ?></strong> <small>Total Agents</small></li>
                <li class="bg_lh"><i class="fa fa-check"></i> <strong><?php echo("$countTransDone"); ?></strong> <small>Delivered Transaction</small></li>
                <li class="bg_lh"><i class="fa fa-clock-o"></i> <strong><?php echo("$countTransNot"); ?></strong> <small>Pending Transactions</small></li>
              </ul>
            </div>
          </div>
        </div>
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

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<!--<script src="js/jquery.gritter.min.js"></script> -->
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script>
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

<script type="text/javascript">


// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}

  function loadUsersOnline(){

      $.get("onlineusers=result", function(data){

          $(".useronline").text(data);

      });

  }

  setInterval(function(){

      loadUsersOnline();

  },500);
</script>
</body>
</html>
