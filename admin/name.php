<?php
include '../include/phpscripts/DB.php';

?>
<?php
$number =count($_POST['name']);
if ($number > 0)
{
    for ($i=0; $i<$number; $i++)
    {
        if (trim($_POST['name'][$i]) != '')
        {
            $query = "INSERT INTO INVOICE_LINE Item_id VALUES ('".mysqli_real_escape_string($mysqli, $_POST['name'][$i])."')";
            $result = mysqli_query($mysqli, $query);
        }
    }
    echo 'Data added';
}
else
{
    echo "Enter Name";
}
?>
