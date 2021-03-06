<?php
session_start();
ob_start();
include '../../include/phpscripts/DB.php'
?>
<?php
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Admin"){
    header("Location: ../admin_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}else if($_SESSION['role'] != "Accountant" && $_SESSION['role'] != "Admin" && $_SESSION['role'] != "Agent"){
    header("Location: ../index.php");
}
if (isset($_POST['add_item']))
{
    if (isset($_SESSION['shopping_cart']))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if (!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'         => $_GET["id"],
                'item_name'       => mysqli_real_escape_string($mysqli,$_POST["hidden_name"]),
                'item_price'      => mysqli_real_escape_string($mysqli,$_POST["hidden_price"]),
                'item_quantity'   => mysqli_real_escape_string($mysqli,$_POST["quantity"]),
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item already added")</script>';
            echo '<script>window.location="add_items_invoice.php"</script>';

        }
    }
    else
    {
        $item_array = array(
            'item_id'         => $_GET["id"],
            'item_name'       => mysqli_real_escape_string($mysqli,$_POST["hidden_name"]),
            'item_price'      => mysqli_real_escape_string($mysqli,$_POST["hidden_price"]),
            'item_quantity'   => mysqli_real_escape_string($mysqli,$_POST["quantity"]),
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }


}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
                echo '<script>window.location="add_items_invoice.php"</script>';
            }
        }
    }
}



$query = "SELECT COUNT(*)  AS ID FROM INVOICE";
$countInv = mysqli_query($mysqli,$query);
$num = mysqli_fetch_array($countInv);
$countcInvoices = $num["ID"];
$countcInvoices = $countcInvoices +1;


if(isset($_POST['submit']))
{
    foreach ($_SESSION["shopping_cart"] as $key => $values)
    {
        $item_id    = $values['item_id'];
        $item_price = $values['item_price'];
        $quantity   = $values['item_quantity'];
        $total      = $values['item_quantity'] * $values['item_price'];
        $last_id    = $_SESSION['last_id'];

//        $last_id =40;
//        echo $item_id. "<br>";
//        echo $item_price. "<br>";
//        echo $quantity. "<br>";
//        echo $total. "<br>";
//        $invoice_id = $_GET['invoice_number'];
//        $sql = "SELECT id FROM INVOICE WHERE invoice_number = '{$last_id}'";
//        echo $last_id . "<br>";

        $query1 = "INSERT INTO INVOICE_LINE (Invoice_id,
                                              ITEM_id,
                                              Quantity,
                                              Total)";

        $query1 .= "VALUES('{$last_id}',
                           '{$item_id}',
                           '{$quantity}',
                           '{$total}')";

        $result1 = mysqli_query($mysqli, $query1);
    }
    header("Location: ../gipdf.php?id=$last_id");
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
<div id="sidebar"><a href="../agent_index.php" class="visible-phone"><i class="fa fa-tachometer"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="../agent_index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a> </li>
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
                <li class="bg_lb span3"> <a href="../agent_index.php"> <i class="fa fa-tachometer"></i> My Dashboard </a> </li>
                <li class="bg_lg span3"> <a href="transaction.php"> <i class="fa fa-exchange"></i> <span class="label label-important"></span> Transactions</a> </li>
            </ul>
        </div>
        <!--End-Action boxes-->

        <div class="container-fluid"><hr>
            <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                <h5>Add Items</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <?php
                                $query = "SELECT * FROM ITEM ORDER BY ID ASC";
                                $select_posts = mysqli_query($mysqli, $query);
                                while($row = mysqli_fetch_assoc($select_posts))
                                {
                                    $item_id = $row['id'];
                                    $item_name = $row['item_name'];
                                    $item_price = $row['item_price'];
                                    $item_description = $row['item_description'];
                                    $item_size = $row['item_size'];

                                    ?>
                                    <form method="post" action="add_items_invoice.php?action=add&id=<?php echo $item_id; ?>" class="form-horizontal" name="basic_validate" id="basic_validate" novalidate="novalidate">
                                        <div class="widget-content nopadding">

                                        <div class="control-group">
                                            <label class="control-label"><?php echo $item_name ?></label>
                                            <div class="controls">
                                                <input type="text" name="quantity">
                                                <input type="hidden" name="hidden_name" value="<?php echo $item_name ?>">
                                                <input type="hidden" name="hidden_price" value="<?php echo $item_price ?>">
                                                <input type="submit" name="add_item" value="add item">
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                    <?php
                                }
                                ?>


                        <h4 class="text-center">Selected Items</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                    <th>total</th>
                    <th>Action</th>
                </tr>
                </thead>
                <?php
                if(isset($_SESSION['shopping_cart'])){
                $total = 0;
                foreach ($_SESSION["shopping_cart"] as $key => $values) {

                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $values['item_name'] ?></td>
                        <td><?php echo $values['item_price'] ?></td>
                        <td><?php echo $values['item_quantity'] ?></td>
                        <td><?php echo $values['item_quantity'] * $values['item_price'] ?></td>
                        <td><a href="add_items_invoice.php?action=delete&id=<?php echo $values['item_id']?>">Remove</a></td>

                    </tr>
                    </tbody>
                    <?php
                    $total = $total + ($values['item_quantity'] * $values['item_price']);
                }
                }
                ?>
            </table>
                                <form method="post" action="add_items_invoice.php">
                                    <div class="widget-content nopadding">
                                        <div class="form-actions">
                                            <input name="submit" type="submit" value="Add" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>


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
