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
  <h1><a href="dashboard.html">Sneco Admin</a></h1>
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
              <li><a href="adminscripts/add_agent.php">Add Agent</a></li>
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
                <li class="bg_lh"><i class="fa fa-users"></i> <strong>2540</strong> <small>Total Users</small></li>
                <li class="bg_lh"><i class="fa fa-user-plus"></i> <strong>120</strong> <small>New Users </small></li>
                <li class="bg_lh"><i class="fa fa-exchange"></i> <strong>656</strong> <small>Total Transactions</small></li>
                <li class="bg_lh"><i class="fa fa-pencil"></i> <strong>9540</strong> <small>Total Agents</small></li>
                <li class="bg_lh"><i class="fa fa-check"></i> <strong>10</strong> <small>Delivered Transaction</small></li>
                <li class="bg_lh"><i class="fa fa-clock-o"></i> <strong>8540</strong> <small>Pending Transactions</small></li>
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
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
