<?php
include '../include/phpscripts/DB.php'
?>
<?php
if(isset($_POST['Submit'])) {
         //Sender

$sfName       = $_POST['Sender_fName'];
$slName       = $_POST['Sender_lName'];
$sStreetName  = $_POST['Sender_StreetName'];
$sHouseNumber = $_POST['Sender_HouseNumber'];
$sPostcode    = $_POST['Sender_Postcode'];
$sCity        = $_POST['Sender_City'];
$sCountry     = $_POST['Sender_Country'];
$sPhone       = $_POST['Sender_Phone'];
$sEmail       = $_POST['Sender_Email'];
        // Receiver
$rfName       = $_POST['Receiver_fName'];
$rlName       = $_POST['Receiver_lName'];
$rStreetName  = $_POST['Receiver_StreetName'];
$rHouseNumber = $_POST['Receiver_HouseNumber'];
$rPostcode    = $_POST['Receiver_Postcode'];
$rCity        = $_POST['Receiver_City'];
$rCountry     = $_POST['Receiver_Country'];
$rPhone       = $_POST['Receiver_Phone'];
$rEmail       = $_POST['Receiver_Email'];
    //Other Data
    $amount = $_POST['Amount'];
    $current = $_POST['Current_Currency'];
    $payment = $_POST['Payment_Currency'];
    $total = $_POST['Total'];
    $rate = $_POST['Rate'];
    $charge = $_POST['Charge'];
    $reason = $_POST['Reason'];
    $comment = $_POST['Comment'];

echo "$sfName";
echo "$rfName";

//Insert Customerrrr into database::
    $query = "INSERT INTO TRANSITION(Sender_fName,
                                    Sender_lName, 
                                    Sender_Phone, 
                                    Sender_Email, 
                                    Sender_StreetName, 
                                    Sender_HouseNo, 
                                    Sender_Postcode, 
                                    Sender_City, 
                                    Sender_Country, 
                                    Sender_BankAcount, 
                                    Sender_IdNumber, 
                                    Sender_Nationality, 
                                    Sender_IdExp, 
                                    Receiver_fName, 
                                    Receiver_lName, 
                                    Receiver_Phone, 
                                    Receiver_Email, 
                                    Receiver_StreetName, 
                                    Receiver_HouseNo, 
                                    Receiver_Postcode, 
                                    Receiver_City, 
                                    Receiver_Country, 
                                    Amount, 
                                    Current_Currency, 
                                    Payment_Currency, 
                                    Total_Amount, 
                                    Rate, 
                                    Charge, 
                                    Reason, 
                                    Comment,
                                    Time,
                                    Status) ";
    $query .= "VALUES('{$sfName}', 
                    '{$slName}', 
                    '{$sPhone}', 
                    '{$sEmail}', 
                    '{$sStreetName}', 
                    '{$sHouseNumber}', 
                    '{$sPostcode}',
                    '{$sCity}', 
                    '{$sCountry}',
                    '{$rfName}', 
                    '{$rlName}', 
                    '{$rPhone}', 
                    '{$rEmail}', 
                    '{$rStreetName}', 
                    '{$rHouseNumber}',
                    '{$rPostcode}', 
                    '{$rCity}', 
                    '{$rCountry}', 
                    '{$amount}', 
                    '{$current}', 
                    '{$payment}', 
                    '{$total}', 
                    '{$rate}',
                    '{$charge}', 
                    '{$reason}', 
                    '{$comment}',
                    now(),
                    '{$comment}') ";

$result =  mysqli_query($mysqli, $query);
if (!$result) {
die("Failed!" . mysqli_error($mysqli));
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Agent</title>
</head>
<body>
<form method="post" action="agent.php">
    <table>
        <thead> Sender </thead>
        <tbody>
        <td> First Name: </td>
        <td><input type="text" name="Sender_fName" required > </td>
        <tr></tr>
        <td> Last Name: </td>
        <td><input type="text" name="Sender_lName" required > </td>
        <tr></tr>
        <td> Street Name: </td>
        <td><input type="text" name="Sender_StreetName" required > </td>
        <tr></tr>
        <td> House Number: </td>
        <td><input type="text" name="Sender_HouseNumber" required > </td>
        <tr></tr>
        <td> Postcode: </td>
        <td><input type="text" name="Sender_Postcode" required > </td>
        <tr></tr>
        <td> City : </td>
        <td><input type="text" name="Sender_City" required > </td>
        <tr></tr>
        <td> Country: </td>
        <td><input type="text" name="Sender_Country" required > </td>
        <tr></tr>
        <td> Phone: </td>
        <td><input type="text" name="Sender_Phone" required > </td>
        <tr></tr>
        <td> Email: </td>
        <td><input type="text" name="Sender_Email" required > </td>
        </tbody>
    </table>
<hr>
    <table>
        <thead> Receiver </thead>
        <tbody>
        <td> First Name: </td>
        <td><input type="text" name="Receiver_fName" required > </td>
        <tr></tr>
        <td> Last Name: </td>
        <td><input type="text" name="Receiver_lName" required > </td>
        <tr></tr>
        <td> Street Name: </td>
        <td><input type="text" name="Receiver_StreetName" required > </td>
        <tr></tr>
        <td> House Number: </td>
        <td><input type="text" name="Receiver_HouseNumber" required > </td>
        <tr></tr>
        <td> Postcode: </td>
        <td><input type="text" name="Receiver_Postcode" required > </td>
        <tr></tr>
        <td> City : </td>
        <td><input type="text" name="Receiver_City" required > </td>
        <tr></tr>
        <td> Country: </td>
        <td><input type="text" name="Receiver_Country" required > </td>
        <tr></tr>
        <td> Phone: </td>
        <td><input type="text" name="Receiver_Phone" required > </td>
        <tr></tr>
        <td> Email: </td>
        <td><input type="text" name="Receiver_Email" required > </td>
        </tbody>
    </table>
<hr>
    <table>
        <thead>  </thead>
        <td> Amount: </td>
        <td> <input type="text" name="Amount"required></td>
        <tr></tr>
        <td> Current Currency: </td>
        <td> <input type="" name="Current_Currency"required></td>
        <tr></tr>
        <td> Payment Currency: </td>
        <td> <input type="text" name="Payment_Currency"required></td>
        <tr></tr>
        <td> Comments : </td>
        <td> <input type="text_area" name="Comment" ></td>
        <tr></tr>
        <td> Reason : </td>
        <td> <input type="text_area" name="Reason"></td>

        <tr></tr>
        <td> Rate : </td>
        <td> <input type="text" name="Rate" ></td>
        <tr></tr>
        <td> Charge : </td>
        <td> <input type="area" name="Charge" ></td>
        <tr></tr>
        <td> Total : </td>
        <td> <input type="text_area" name="Total" ></td>
        <tr></tr>
        <td> <input type="submit" name="Submit"></td>
    </table>
    <hr>
</form>
</body>
</html>