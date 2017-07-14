<?php
include 'DB.php';
?>
<?php
// Login process:
if (isset($_POST['login-form-submit'])) {
    $email = $_POST['login-form-username'];
    $pass = $_POST['login-form-password'];

    $query = "SELECT * From USER WHERE Email = '{$email}' && Password = '{$pass}'";
    $result = mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) == 1) {
        while ($row = mysqli_fetch_assoc($result)) {
            $first_name = $row['First_Name'];
            $last_name = $row['Last_Name'];
            $username = $first_name + $last_name;
            $role = "user";
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            header("Location: user_index.php");
        }
    }
}
?>

<?php
// Sign-Up process:
if (isset($_POST['register-form-submit'])){
$first_name  =     $_POST  ['First_Name'];
$last_name   =     $_POST  ['Last_name'];
$email       =     $_POST  ['Email'];
$password    =     $_POST  ['Password'];
$phone       =     $_POST  ['Phone'];
$street_name =     $_POST  ['Street_Name'];
$house_nr    =     $_POST  ['House_Number'];
$postcode    =     $_POST  ['Postcode'];
$city        =     $_POST  ['City'];


$query  = "INSERT INTO USER (First_Name,
                            Last_Name,
                            Email,
                            Password,
                            Phone,
                            Street_Name,
                            House_Number,
                            Postcode,
                            City)";

        $query .= "VALUES ('{$first_name}',
                           '{$last_name}',
                           '{$email}',
                           '{$password}',
                           '{$phone}',
                           '{$street_name}',
                           '{$house_nr}',
                           '{$postcode}',
                           '{$city}')";
}
$result = mysqli_query($mysqli ,$query);
 header('login-register-2.php');
?>
