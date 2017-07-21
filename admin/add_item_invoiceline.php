<?php
include "../include/phpscripts/DB.php";
?>
<?php
$query = "SELECT * FROM ITEM ORDER BY ID ASC";
$select_posts = mysqli_query($mysqli, $query);
while($row = mysqli_fetch_assoc($select_posts)) {
    $item_id = $row['id'];
    $item_name = $row['item_name'];
    $item_price = $row['item_price'];
    $item_description = $row['item_description'];
    $item_size = $row['item_size'];
//        echo "<tr>";
//        echo "<td>$item_name</td>";
//        echo "<td>$item_price</td>";
//        echo "</tr> <br> <br>";

    ?>
<?php
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
                'item_price'      => $_POST["hidden_price"],
                'item_quantity'   => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item already added")</script>';
            echo '<script>window.location="add_item_invoiceline.php"</script>';

        }
    }
    else
    {
        $item_array = array(
            'item_id'         => $_GET["id"],
            'item_price'      => $_POST["hidden_price"],
            'item_quantity'   => $_POST["quantity"],
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }


}
?>
<!--<table class="table table-bordered data-table">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th>Item Name</th>-->
<!--        <th>Item Price</th>-->
<!--        <th>Add Item</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        </tbody>-->
<!--        </table>-->

        <form method="post" action="add_item_invoiceline.php?action=add&id=<?php echo $item_id; ?>">
            <h4> <?php echo $item_name ?> </h4>
            <input type="number" name="quantity">
            <input type="hidden" name="hidden_name" value="<?php echo $item_name ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $item_price ?>">
            <input type="submit" name="add_item" value="add item">
        </form>
        <?php
    }
        ?>

<table>
    <tr>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>total</th>
        <th>Action</th>
    </tr>
    <?php
    if(!empty($_SESSION["shopping_cart"]))
    {
        $total = 0;
        foreach ($_SESSION["shopping_cart"] as $key => $value)
        {

    ?>
    <tr>
        <td><?php echo $value['item_name']?></td>
        <td><?php echo $value['item_quantity']?></td>
        <td><?php echo $value['item_price']?></td>
        <td><?php echo number_format($value['item_quantity'] * $value['item_price'], 2 )?></td>
        <td><a href="add_item_invoiceline.php?action=delete$id="<?php echo $value['id']?></td>

    </tr>
    <?php
            $total = $total+ ($value['item_quantity'] * $value['item_price']);
        }
    }
    ?>
<!--    <tr>-->
<!--        <td>Total</td>-->
<!--<!--        <td>-->--><?php ////echo number_format($total, 2)?><!--<!--</td>-->-->
<!--    </tr>-->
</table>
