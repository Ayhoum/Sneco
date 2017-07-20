<?php
include "../include/phpscripts/DB.php";
?>
    <select style="width:215px;" name="client_id">
        <option>Select One</option>
<?php
$query  = " SELECT * FROM CLIENT ";
$result = mysqli_query($mysqli,$query);
if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $client_id               = $row ['id'];
        $client_name             = $row ['Client_name'];
        echo "<option value=" . $client_id . ">" . $client_name . "</option>";
    }

    } else {
    echo "Error";
}
?>
    </select>
<?php
$invoice_number     = "665";
$invoice_type       = "Test type";
$address1           = "Test address";
$address2           = "Testaddress";
$address3           = "Test address";
$discount           = 0;
$advanced_payment   = 0;
$client             = 1;
$item_id            = 1;
$quantity           = 3;
$total              = 1;

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
//    echo $last_id;
//    echo $client;
// Inseret into INVOICE_LINE

$query1  = "INSERT INTO INVOICE_LINE (Invoice_id,
                                              ITEM_id,
                                              Quantity,
                                              Total)";

$query1 .= "VALUES('{$last_id}'
                           '{$item_id}'
                           '{$quantity}'
                           '{$total}')";

$result1 = mysqli_query($mysqli, $query1);

?>