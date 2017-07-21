<?php
session_start();
include "../include/phpscripts/DB.php";
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
                'item_name'       => $_POST["hidden_name"],
                'item_price'      => $_POST["hidden_price"],
                'item_quantity'   => $_POST["quantity"],
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
        else
        {
            echo '<script>alert("Item already added")</script>';
            echo '<script>window.location="2.php"</script>';

        }
    }
    else
    {
        $item_array = array(
            'item_id'         => $_GET["id"],
            'item_name'       => $_POST["hidden_name"],
            'item_price'      => $_POST["hidden_price"],
            'item_quantity'   => $_POST["quantity"],
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
                echo '<script>window.location="2.php"</script>';
            }
        }
    }
}
?>
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
    <form method="post" action="2.php?action=add&id=<?php echo $item_id; ?>">
        <h5> <?php echo $item_name ?> </h5>
        <input type="text" name="quantity">
        <input type="hidden" name="hidden_name" value="<?php echo $item_name ?>">
        <input type="hidden" name="hidden_price" value="<?php echo $item_price ?>">
        <input type="submit" name="add_item" value="add item">
    </form>
    <?php
}
?>
<h2> Selected Items </h2>
<table>
    <tr>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Quantity</th>
        <th>total</th>
        <th>Action</th>
    </tr>
    <?php
    if(!empty($_SESSION["shopping_cart"]))
    {
    $total = 0;
    foreach ($_SESSION["shopping_cart"] as $key => $values) {

        ?>
        <tr>
            <td><?php echo $values['item_name'] ?></td>
            <td><?php echo $values['item_price'] ?></td>
            <td><?php echo $values['item_quantity'] ?></td>
            <td><?php echo number_format($values['item_quantity'] * $values['item_price'], 2) ?></td>
            <td><a href="2.php?action=delete&id=<?php echo $values['item_id']?>">Remove</a></td>

        </tr>
        <?php
        $total = $total + ($values['item_quantity'] * $values['item_price']);
    }

    ?>
    <tr>
        <td>Total</td>
        <td><?php echo number_format($total, 2) ?></td>
    </tr>
</table>
<?php
}
?>

