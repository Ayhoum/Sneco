<?php
ob_start();
date_default_timezone_set('Europe/Amsterdam');
?>
<?php
session_start();
if(!isset($_SESSION['role'])){
    header("Location: ../index.php");
}else if($_SESSION['role'] == "Admin"){
    header("Location: ../admin_index.php");
}else if($_SESSION['role'] == "Accountant"){
    header("Location: ../accountant_index.php");
}else if($_SESSION['role'] != "Accountant" && $_SESSION['role'] != "Admin" && $_SESSION['role'] != "Agent"){
    header("Location: ../index.php");
}
?>
<?php
if(isset($_POST['Submit'])) {
         //Sender
$Agent_id     = $_POST['Agent_ID'];
$Agent_id     = mysqli_real_escape_string($mysqli,$Agent_id);
$noAcc        = "NaN";
$sfName       = $_POST['Sender_eName'];
$sfName       = mysqli_real_escape_string($mysqli,$sfName);
$slName       = $_POST['Sender_aName'];
$slName       = mysqli_real_escape_string($mysqli,$slName);
$sStreetName  = $_POST['Sender_StreetName'];
$sStreetName  = mysqli_real_escape_string($mysqli,$sStreetName);
$sHouseNumber = $_POST['Sender_HouseNumber'];
$sHouseNumber = mysqli_real_escape_string($mysqli,$sHouseNumber);
$sPostcode    = $_POST['Sender_Postcode'];
$sPostcode    = mysqli_real_escape_string($mysqli,$sPostcode);
$sCity        = $_POST['Sender_City'];
$sCity        = mysqli_real_escape_string($mysqli,$sCity);
$sCountry     = $_POST['Sender_Country'];
$sCountry     = mysqli_real_escape_string($mysqli,$sCountry);
$sPhone       = $_POST['Sender_Phone'];
$sPhone       = mysqli_real_escape_string($mysqli,$sPhone);
$sEmail       = $_POST['Sender_Email'];
$sEmail       = mysqli_real_escape_string($mysqli,$sEmail);
$sNationality = $_POST['Sender_Nationality'];
$sNationality = mysqli_real_escape_string($mysqli,$sNationality);
$sIDNumber    = $_POST['Sender_IDNumber'];
$sIDNumber    = mysqli_real_escape_string($mysqli,$sIDNumber);
$sExpiary     = $_POST['Sender_Expiary'];
$sExpiary     = mysqli_real_escape_string($mysqli,$sExpiary);

        // Receiver
$rfName       = $_POST['Receiver_eName'];
$rfName       = mysqli_real_escape_string($mysqli,$rfName);
$rlName       = $_POST['Receiver_aName'];
$rlName       = mysqli_real_escape_string($mysqli,$rlName);
$rStreetName  = $_POST['Receiver_StreetName'];
$rStreetName  = mysqli_real_escape_string($mysqli,$rStreetName);
$rHouseNumber = $_POST['Receiver_HouseNumber'];
$rHouseNumber = mysqli_real_escape_string($mysqli,$rHouseNumber);
$rPostcode    = $_POST['Receiver_Postcode'];
$rPostcode    = mysqli_real_escape_string($mysqli,$rPostcode);
$rCity        = $_POST['Receiver_City'];
$rCity        = mysqli_real_escape_string($mysqli,$rCity);
$rCountry     = $_POST['Receiver_Country'];
$rCountry     = mysqli_real_escape_string($mysqli,$rCountry);
$rPhone       = $_POST['Receiver_Phone'];
$rPhone       = mysqli_real_escape_string($mysqli,$rPhone);
$rEmail       = $_POST['Receiver_Email'];
$rEmail       = mysqli_real_escape_string($mysqli,$rEmail);

    //Other Data
    $ReceivedAmount = $_POST['Amount'];
    $ReceivedAmount = mysqli_real_escape_string($mysqli,$ReceivedAmount);
    $current        = $_POST['Current_Currency'];
    $current        = mysqli_real_escape_string($mysqli,$current);
    $payment        = $_POST['Payment_Currency'];
    $payment        = mysqli_real_escape_string($mysqli,$payment);
    $payoutAmount   = $_POST['Totalg'];
    $payoutAmount   = mysqli_real_escape_string($mysqli,$payoutAmount);
    $rate           = $_POST['Rate'];
    $rate           = mysqli_real_escape_string($mysqli,$rate);
    $charge         = $_POST['ExRa'];
    $charge         = mysqli_real_escape_string($mysqli,$charge);
    $reason         = $_POST['Reason'];
    $reason         = mysqli_real_escape_string($mysqli,$reason);
    $comment        = $_POST['Comment'];
    $comment        = mysqli_real_escape_string($mysqli,$comment);
    $mtrn1          = rand(0, 9);
    $mtrn2          = rand(0, 9);
    $mtrn3          = rand(0, 9);
    $mtrn4          = rand(0, 9);
    $mtrn5          = rand(0, 9);
    $mtrn6          = rand(0, 9);
    $mtrn7          = rand(0, 9);
    $mtrn8          = rand(0, 9);
    $mtrn9          = rand(0, 9);
    $mtrn10         = rand(0, 9);
//Insert Customerrrr into database::
    $query = "INSERT INTO TRANSACTION(Agent_ID,
                                    Account_ID,
                                    Sender_eName, 
                                    Sender_aName, 
                                    Sender_Phone, 
                                    Sender_Email, 
                                    Sender_StreetName, 
                                    Sender_HouseNo, 
                                    Sender_Postcode, 
                                    Sender_City, 
                                    Sender_Country, 
                                    Sender_IdNumber, 
                                    Sender_Nationality, 
                                    Sender_IdExp, 
                                    Receiver_eName, 
                                    Receiver_aName,  
                                    Receiver_Phone, 
                                    Receiver_Email, 
                                    Receiver_StreetName, 
                                    Receiver_HouseNo, 
                                    Receiver_Postcode, 
                                    Receiver_City, 
                                    Receiver_Country, 
                                    Received_Amount, 
                                    Current_Currency, 
                                    Payment_Currency, 
                                    Payout_Amount, 
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
                    '{$ReceivedAmount}', 
                    '{$current}', 
                    '{$payment}', 
                    '{$payoutAmount}', 
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