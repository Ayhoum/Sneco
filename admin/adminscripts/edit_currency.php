<?php
ob_start();
?>
<?php
include '../../include/phpscripts/DB.php'
?>
<?php
session_start();
?>
<?php
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Agent"){
    header("Location: ../agent_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}
?>
<?php
if(isset($_GET['c_id'])){
    $currency_id = $_GET['c_id'];
}
$query = "SELECT * FROM CURRENCIES WHERE ID = $currency_id ";
$select_cur_by_id = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_cur_by_id)){

    $currency_id    = $row['ID'];
    $from           = $row['CurNameFr'];
   // $to           = $row['CurNameTo'];
    $value          = $row['Value'];


    if(isset($_POST['Update'])){

        $ID           = $_POST['ID'];
        //$from     = $_POST['Currency_From'];
       // $to       = $_POST['Currency_To'];
        $value       = $_POST['Value'];

        $query = "UPDATE CURRENCIES SET ";
        $query .= "ID = '{$ID}', ";
        //$query .= "CurNameFr = '{$from}', ";
       // $query .= "CurNameTo = '{$to}', ";
        $query .= "Value = '{$value}' ";
        $query .= "WHERE ID = {$currency_id} ";


        $update_post = mysqli_query($mysqli, $query);

        header("Location: currency.php");

    }
}
?>


<h1>EDIT TRANSACTION </h1>
<div class="container-fluid"><hr>
    <div class="row-fluid">
        <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Sender</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form action="#" method="get" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">ID</label>
                                <div class="controls">
                                    <input type="text" name="ID" id="ID" value="<?php echo $currency_id; ?>" readonly required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">From To Name</label>
                                <div class="controls">
                                    <input type="text" name="Currency_From" id="Currency_From" value="<?php echo $from; ?>" required readonly>
                                </div>
                            </div>
<!--                            <div class="control-group">-->
<!--                                <label class="control-label">To</label>-->
<!--                                <div class="controls">-->
<!--                                    <input type="text" name="Currency_To" id="Currency_To" value="--><?php //echo $to; ?><!--" required>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="control-group">
                                <label class="control-label">Value</label>
                                <div class="controls">
                                    <input type="text" name="Value" id="Value" value="<?php echo $value; ?>" required>
                                </div>
                            </div>
                                <div class="form-actions">
                                    <input name="Update" type="submit" value="Update" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                </div>
        </form>
    </div>
