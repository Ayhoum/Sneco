<?php

include '../include/phpscripts/DB.php';
?>
<?php
if(isset($_POST['login-form-submit']))
{
    $agentEmail = $_POST['login-form-username'];
    $agentPass  = $_POST['login-form-password'];
    $agentStatus = "Active";

    $query = "SELECT * From AGENT WHERE Agent_Email = '{$agentEmail}' AND Agent_Pass = '{$agentPass}' AND Agent_Status = '{$agentStatus}' ";

    $result =  mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) == 1) {
        echo 'Welcome';
    } else {
        echo 'Check your login data!';
    }
}
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Matrix Admin</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
    <div id="loginbox">
        <form id="login-form" name="login-form" class="form-vertical" action="index.php" method="post">
            <div class="control-group normal_text"> <h3><img src="img/logo.png" alt="Logo" /></h3></div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" id="login-form-username" name="login-form-username" value="" type="text" placeholder="Username" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" id="login-form-password" name="login-form-password" value="" type="password" placeholder="Password" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                <span class="pull-right">
                    <button class="btn btn-success" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                </span>
            </div>
        </form>
        <form id="recoverform" action="#" class="form-vertical">
            <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>

            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                </div>
            </div>

            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
            </div>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/matrix.login.js"></script>
    </body>

    </html>
