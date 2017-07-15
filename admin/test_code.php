<?php
include "../include/phpscripts/DB.php";
?>
<?php
$rand= rand(0,100000000);
?>
<form name="test" method="post" action="test_code.php">
    i.no: <input type="text" value="<?php echo $rand; ?> " name="invoice_number" readonly><br>
    add.1:<input type="text" name="address_line1"><br>
    add.2:<input type="text" name="address_line2"><br>
    add.3:<input type="text" name="address_line3"><br>
    i.id: <select style="width:215px;" name="item_id">
        <?php
        $query  = " SELECT * FROM ITEM ";
        $result = mysqli_query($mysqli,$query);
        if (mysqli_num_rows($result) == 1 ){

            while($row = mysqli_fetch_assoc($result)){
                $item_id               = $row ['ID'];
                $item_name        = $row ['item_name'];
                $item_price       = $row ['item_price'];
                $item_description = $row ['item_description'];

                echo "<option> Select One</option>";
                echo "<option value= " ."{$item_id}". ">" ."{$item_name}". "</option>";
                echo "</select>";

            }
        }
        ?>
    quan: <input type="text" name="quantity"><br>
    disc: <input type="text" name="discount"><br>
    a.pay:<input type="text" name="advanced_payment"><br>
    tot:  <input type="text" name="total"><br>
          <select style="width:215px;" name="client_id">
            <?php
            $query  = " SELECT * FROM CLIENT ";
            $result = mysqli_query($mysqli,$query);
            if (mysqli_num_rows($result) == 1 ){

                while($row = mysqli_fetch_assoc($result)){
                    $client_id               = $row ['ID'];
                    $client_name       = $row ['Client_name'];

                    echo "<option> Select One</option>";
                    echo "<option value= " ."{$client_id}". ">" ."{$client_name}". "</option>";
                    echo "</select> <br>";

                }
            }
            ?>
    ty:   <input type="text" name="invoice_type"><br>
    sh:   <input type="text" name="type_shortcut"><br>
          <input type="submit" name="submit" value="GO !!">
</form>
<?php
if(isset($_POST['submit'])){
    $invoic1 = $_POST['invoice_number'];
    $invoic2 = $_POST['address_line1'];
    $invoic3 = $_POST['address_line2'];
    $invoic4 = $_POST['address_line3'];
    $invoic5 = $_POST['item_id'];
    $invoic6 = $_POST['quantity'];
    $invoic7 = $_POST['discount'];
    $invoic8 = $_POST['advanced_payment'];
    $invoic9 = $_POST['total'];
    $invoic10= $_POST['client_id'];
    $invoic11= $_POST['invoice_type'];
    $invoic12= $_POST['type_shortcut'];



$query = "INSERT INTO INVOICE(invoice_number, 
                                    address_line1, 
                                    address_line2, 
                                    address_line3, 
                                    quantity, 
                                    total, 
                                    discount, 
                                    advanced_payment, 
                                    Item_ID, 
                                    Client_ID, 
                                    invoice_type, 
                                    type_shortcut) ";

$query .= "VALUES('{$invoic1}',
                  '{$invoic2}',
                  '{$invoic3}',
                  '{$invoic4}',
                  '{$invoic6}',
                  '{$invoic9}',
                  '{$invoic7}',
                  '{$invoic8}',
                  '{$invoic5}',
                  '{$invoic10}',
                  '{$invoic11}',
                  '{$invoic12}') ";

    $result = mysqli_query($mysqli, $query);
    if (!$result) {
        die("Failed!" . mysqli_error($mysqli));
    } else {
        header("Location: test_code.php");
    }
}
?>









