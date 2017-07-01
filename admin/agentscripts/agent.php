<?php
ob_start();
date_default_timezone_set('Europe/Amsterdam');
?>
<?php
if(isset($_POST['Submit'])) {
         //Sender
$Agent_id     = $_POST['Agent_ID'];
$noAcc        = "NaN";
$sfName       = $_POST['Sender_fName'];
$slName       = $_POST['Sender_lName'];
$sStreetName  = $_POST['Sender_StreetName'];
$sHouseNumber = $_POST['Sender_HouseNumber'];
$sPostcode    = $_POST['Sender_Postcode'];
$sCity        = $_POST['Sender_City'];
$sCountry     = $_POST['Sender_Country'];
$sPhone       = $_POST['Sender_Phone'];
$sEmail       = $_POST['Sender_Email'];
$sNationality = $_POST['Sender_Nationality'];
$sBankAccount = $_POST['Sender_BankAccount'];
$sIDNumber    = $_POST['Sender_IDNumber'];
$sExpiary     = $_POST['Sender_Expiary'];

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
    $amount = $_POST['Totalg'];
    $current = $_POST['Current_Currency'];
    $payment = $_POST['Payment_Currency'];
    $total = $_POST['Totalt'];
    $rate = $_POST['Rate'];
    $charge = $_POST['ExRa'];
    $reason = $_POST['Reason'];
    $comment = $_POST['Comment'];
    $mtrn1 = rand(0, 9);
    $mtrn2 = rand(0, 9);
    $mtrn3 = rand(0, 9);
    $mtrn4 = rand(0, 9);
    $mtrn5 = rand(0, 9);
    $mtrn6 = rand(0, 9);
    $mtrn7 = rand(0, 9);
    $mtrn8 = rand(0, 9);
    $mtrn9 = rand(0, 9);
    $mtrn10 = rand(0, 9);
//Insert Customerrrr into database::
    $query = "INSERT INTO TRANSITION(Agent_ID,
                                    Account_ID,
                                    Sender_fName,
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
                                    MTRN1,
                                    MTRN2,
                                    MTRN3,
                                    MTRN4,
                                    MTRN5,
                                    MTRN6,
                                    MTRN7,
                                    MTRN8,
                                    MTRN9,
                                    MTRN10,
                                    Status) ";
    $query .= "VALUES('{$Agent_id}',
                    '{$noAcc}',
                    '{$sfName}', 
                    '{$slName}', 
                    '{$sPhone}', 
                    '{$sEmail}', 
                    '{$sStreetName}', 
                    '{$sHouseNumber}', 
                    '{$sPostcode}',
                    '{$sCity}', 
                    '{$sCountry}',
                    '{$sBankAccount}',
                    '{$sIDNumber}',
                    '{$sNationality}',
                    '{$sExpiary}',
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
                    date('Y-m-d H:i:s'),
                    '{$mtrn1}',
                    '{$mtrn2}',
                    '{$mtrn3}',
                    '{$mtrn4}',
                    '{$mtrn5}',
                    '{$mtrn6}',
                    '{$mtrn7}',
                    '{$mtrn8}',
                    '{$mtrn9}',
                    '{$mtrn10}',
                    'Pending') ";

$result =  mysqli_query($mysqli, $query);
if (!$result) {
die("Failed!" . mysqli_error($mysqli));
}else{
    header("Location: agentscripts/gpdf.php?sender={$sfName}&m1={$mtrn1}&m2={$mtrn2}&m3={$mtrn3}&m4={$mtrn4}&m5={$mtrn5}&m6={$mtrn6}&m7={$mtrn7}&m8={$mtrn8}&m9={$mtrn9}&m10={$mtrn10}");
}
}
?>