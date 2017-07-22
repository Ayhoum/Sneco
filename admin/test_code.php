<?php
include "../include/phpscripts/DB.php";
?>
<form name="add_name" id="add_name" method="post" action="test_code.php">
    <table class="table table-brodered" id="dynamic_field">
        <tr>
            <td><input type="text" name="name[]" id="name" placeholder="Enter Name" class="form-control name_list"></td>
            <td><button type="button" name="add" id ="add" class="btn btn-success"> Add More</button></td>
        </tr>
    </table>
    <input type="submit" name="submit" id="submit" value="submit">
</form>

<script>
    $(document).ready(function(){
        var i = 1;
        $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="name[]" id="name" placeholder="Enter Name" class="form-control name_list"></td><td><button name="remove" id ="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>')
        });
        $(document).on('click', '#btn_remove',function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
        });
        $('#submit').click(function(){
            .$ajax({
                url:"name.php",
                method:"post",
                data:$('#add_name').serialize(),
                success:function(data)
                {
                 alert(data);
                 $('#add_name')[0].reset();
                }
            });
        });

    });
</script>
<?php
$invoice_id = 58;
$total = 0;
$query = "SELECT * FROM INVOICE_LINE WHERE Invoice_id = '{$invoice_id}'";
$items = mysqli_query($mysqli, $query);
if (mysqli_num_rows($items) > 0 ) {
    while ($row = mysqli_fetch_assoc($items)) {

        $item_id = $row['ITEM_id'];
        $itemQuantity = $row['Quantity'];
        $itemTotal = $row['Total'];
        $total = $total + $itemTotal;

        echo "ID : ". $item_id. "<br>";
        echo "Quantity: ". $itemQuantity. "<br>";
        echo "Total : ".$itemTotal. "<br>";
        echo $total. "<br>";

        $query1 = "SELECT * FROM ITEM WHERE id = '{$item_id}'";
        $result= mysqli_query($mysqli, $query1);
        if (mysqli_num_rows($result)> 0 ){
            while ($row1 = mysqli_fetch_assoc($result)){
                $item_name = $row1['item_name'];
                $item_description = $row1['item_description'];
                $item_price = $row1['item_price'];
                $item_size = $row1['item_size'];

                echo "name : ". $item_name. "<br>";
                echo "des: ". $item_description. "<br>";
                echo "price : ".$item_price. "<br>";
                echo "size: ".$item_size. "<br>";



            }
        }
    }
}


//    echo $itemName. "<br>";
//    echo $itemPrice. "<br>";
//    echo $itemDescription. "<br>";
//    echo $itemSize. "<br>";

?>