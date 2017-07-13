<?php
include '../../include/phpscripts/DB.php'
?>
<?php
session_start();
if(!isset($_SESSION['role'])){
    header("Location: index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: Agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: accountant_index.php");
}
?>
<?php
if(isset($_POST['Submit'])) {

//    $invoice_id       = $_POST['ID'];
    $invoice_number   = $_POST['invoice_number'];
    $address1         = $_POST['address_line1'];
    $address2         = $_POST['address_line2'];
    $address3         = $_POST['address_line3'];
    $item_id          = $_POST['item_id'];
    $quantity         = $_POST['quantity'];
    $total            = $_POST['total'];
    $discount         = $_POST['discount'];
    $advanced_payment = $_POST['advanced_payment'];
    $invoice_type     = $_POST['Invoice_type_type'];
    $client_id        = $_POST['Client_ID'];

    if(!empty($invoice_number) && !empty($address1) && !empty($address2) && !empty($address3)  && !empty($quantity) && !empty($total) && !empty($discount) && !empty($advanced_payment) && !empty($item_id) && !empty($invoice_type) && !empty($client_id)) {
//Insert Customerrrr into database::
    $query = "INSERT INTO INVOICE (invoice_number,
                                address_line1,
                                address_line2,
                                address_line3,
                                quantity,
                                total,
                                discount,
                                advanced_payment,
                                Item_ID,
                                Invoice_type,
                                Client_ID) ";
    $query .= "VALUES('{$invoice_number}',
                    '{$address1}',
                    '{$address2}',
                    '{$address3}',
                    '{$quantity}',
                    '{$total}',
                    '{$discount}',
                    '{$advanced_payment}',
                    '{$item_id}',
                    '{$invoice_type}',
                    '{$client_ID}') ";

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
        ?>

        <?php
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
        <li class="submenu"> <a href="invoices.php"><i class="fa fa-pencil"></i> <span>Invoices</span></a></li>
        <li class="submenu"> <a href="items.php.php"><i class="fa fa-pencil"></i> <span>Items</span></a></li>
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
                                  <label class="control-label">Invoice Number</label>
                                  <div class="controls">
                                      <input type="text" name="invoice_number" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Address </label>
                                  <div class="controls">
                                      <input type="text" name="address_line1"  required> <br>
                                      <input type="text" name="address_line2"  > <br>
                                      <input type="text" name="address_line3"  >
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Item ID </label>
                                  <div class="controls">
                                      <input type="text" name="item_id" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Quantity</label>
                                  <div class="controls">
                                      <input type="number" name="quantity" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Discount</label>
                                  <div class="controls">
                                      <input type="text" name="discount">
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Advanced Payment</label>
                                      <div class="controls">
                                          <input type="text" name="advanced_payment">
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Total</label>
                                      <div class="controls">
                                          <input type="text" name="total">
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Invoice Type</label>
                                      <div class="controls">
                                          <input type="text" name="Invoice_type_type" required>
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Invoice Type ID </label>
                                      <div class="controls">
                                          <input type="text" name="Invoice_type_type" required>
                                      </div>
                                  </div>
                                  <div class="control-group">
                                      <label class="control-label">Client ID</label>
                                      <div class="controls">
                                          <input type="text" name="Client_ID"required>
                                      </div>
                                  </div>
<!--                                  <div class="control-group">-->
<!--                                      <label class="control-label">Agent Area</label>-->
<!--                                      <div class="controls">-->
<!--                                          <input type="text" name="Agent_Area" id="Agent_Area" required>-->
<!--                                      </div>-->
<!--                                  </div>-->
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
