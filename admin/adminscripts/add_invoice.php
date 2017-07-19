<?php
include '../../include/phpscripts/DB.php'
?>
<?php
session_start();
if(!isset($_SESSION['role'])){
    header("Location: index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: ../Agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}
?>
<?php
$rand= rand(0,100000000);
?>
<?php

if(isset($_POST['submit'])){
    $invoice_number     = $_POST['invoice_number'];
    $invoice_type       = $_POST['invoice_type'];
    $address1           = $_POST['address_line1'];
    $address2           = $_POST['address_line2'];
    $address3           = $_POST['address_line3'];
    $discount           = $_POST['discount'];
    $advanced_payment   = $_POST['advanced_payment'];
    $client             = $_POST['client_id'];
    $item_id            = $_POST['item_id'];
    $quantity           = $_POST['quantity'];
    $total              = $_POST['total'];

//    echo $invoice_number ."<br>";
//    echo $invoice_type ."<br>";
//    echo $address1 ."<br>";
//    echo $address2 ."<br>";
//    echo $address3 ."<br>";
//    echo $discount ."<br>";
//    echo $advanced_payment ."<br>";
//    echo $client ."<br>";
//    echo $item_id ."<br>";
//    echo $quantity ."<br>";
//    echo $total ."<br>";
    // Inseret into INVOICE !
    $query = "INSERT INTO INVOICE(invoice_number,
                                    invoice_type,
                                    address_line1,
                                    address_line2,
                                    address_line3,
                                    discount,
                                    advanced_payment,
                                    CLIENT_id) ";

    $query .= "VALUES('{$invoice_number}',
                      '{$invoice_type}',
                      '{$address1}',
                      '{$address2}',
                      '{$address3}',
                      '{$discount}',
                      '{$advanced_payment}',
                      '{$client}') ";

    $result = mysqli_query($mysqli, $query);
    $last_id = mysqli_insert_id($mysqli);
    echo $last_id;
    echo $client;
    if (!$result) {
        die("Failed!" . mysqli_error($mysqli));
    } else {
        // Inseret into INVOICE_LINE

        $query1  = "INSERT INTO INVOICE_LINE (Invoice_id,
                                              ITEM_id,
                                              Quantity,
                                              Total)";

        $query1 .= "VALUES('{$last_id}'
                           '{$item_id}'
                           '{$quantity}'
                           '{$total}')";

        header("location: ../gipdf.php?invoice_number={$invoic1}");
        header("Location: invoices.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Invoice</title>
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
        <li class="submenu"> <a href="#"><i class="fa fa-pencil"></i> <span>Items</span></a>
            <ul>
                <li><a href="items.php">Current Items</a></li>
                <li><a href="add_item.php">Add Item</a></li>
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
              <form class="form-horizontal" method="post" action="add_invoice.php" name="basic_validate" id="basic_validate" novalidate="novalidate">
                  <div class="span12">
                      <div class="widget-box">
                          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                              <h5>New Invoice</h5>
                          </div>
                          <div class="widget-content nopadding">
                              <div class="control-group">
                                  <label class="control-label">Invoice Number</label>
                                  <div class="controls">
                                      <input type="text"  name="invoice_number" >
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Invoice Type</label>
                                  <div class="controls">
                                      <input type="text" name="invoice_type">
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Address </label>
                                  <div class="controls">
                                      <input type="text" name="address_line1" required> <br> <br>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Address Add.</label>
                                  <div class="controls">
                                      <input type="text" name="address_line2" required> <br> <br>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Address Add.2</label>
                                  <div class="controls">
                                      <input type="text" name="address_line3"> <br> <br>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Item ID </label>
                                  <div class="controls">
                                      <select style="width:215px;" name="item_id">
                                          <?php
                                          $query  = " SELECT * FROM ITEM ";
                                          $result = mysqli_query($mysqli,$query);
                                          if (mysqli_num_rows($result) == 1 ){
                                              while($row = mysqli_fetch_assoc($result)){
                                                  $item_id               = $row ['id'];
                                                  $item_name        = $row ['item_name'];
                                                  $item_price       = $row ['item_price'];
                                                  $item_description = $row ['item_description'];
                                                  echo "<option> Select One</option>";
                                                  echo "<option value= " ."{$item_id}". ">" ."{$item_name}". "</option>";
                                                  echo "</select>";
                                              }
                                          }
                                          ?>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Quantity</label>
                                  <div class="controls">
                                      <input type="text" name="quantity" required>
                                  </div>
                              </div>
                              <div class="control-group">
                                  <label class="control-label">Discount</label>
                                  <div class="controls">
                                      <input type="text" name="discount">
                                  </div>
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
                                  <label class="control-label">Client ID</label>
                                  <div class="controls">
                                      <select style="width:215px;" name="client_id">
                                          <?php
                                          $query  = " SELECT * FROM CLIENT ";
                                          $result = mysqli_query($mysqli,$query);
                                          if (mysqli_num_rows($result) == 1 ){

                                              while($row = mysqli_fetch_assoc($result)){
                                                  $client_id               = $row ['id'];
                                                  $client_name       = $row ['Client_name'];

                                                  echo "<option> Select One</option>";
                                                  echo "<option value= " ."{$client_id}". ">" ."{$client_name}". "</option>";
                                                  echo "</select> <br>";

                                              }
                                          }
                                          ?>
                                  </div>
                              </div>
                              <div class="widget-content nopadding">
                                  <div class="form-actions">
                                      <input name="submit" type="submit" value="Add" class="btn btn-success">
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
