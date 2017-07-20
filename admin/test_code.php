<?php
include "../include/phpscripts/DB.php";
?>
<!--    <select style="width:215px;" name="client_id">-->
<!--        <option>Select One</option>-->
<?php
//$query  = " SELECT * FROM CLIENT ";
//$result = mysqli_query($mysqli,$query);
//if (mysqli_num_rows($result) > 0 ){
//    while($row = mysqli_fetch_assoc($result)){
//        $client_id               = $row ['id'];
//        $client_name             = $row ['Client_name'];
//        echo "<option value=" . $client_id . ">" . $client_name . "</option>";
//    }
//
//    } else {
//    echo "Error";
//}
//?><!--</select>-->

<form method="post" action="test_code.php">
    <select style="width:215px;" name="item" multiple="multiple">
        <option>Select One</option>
<?php
$query  = " SELECT * FROM ITEM ";
$result = mysqli_query($mysqli,$query);
if (mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
        $item_id               = $row ['id'];
        $item_name             = $row ['item_name'];
        echo "<option value=\"$item_id\">$item_name</option>";
    }

} else {
    echo "Error";
}
?>

    </select>
    <input type="submit" name="add_item" value="add">
</form>

<?php
$last_id = mysqli_insert_id($mysqli);
$itemss =  $_POST['item'];
if ($itemss){
    foreach ($itemss as $c){

        $query  = "INSERT INTO INVOICE_LINE (Invoice_id, ITEM_id)";
        $query .= " VALUES ('{$last_id}' , " . mysqli_real_escape_string($mysqli , $c);

        $result = mysqli_query($mysqli,$query);
        if (mysqli_num_rows($result)>0 ){
            echo "Done";
        } else{
            echo "Error";
        }
    }



}

?>