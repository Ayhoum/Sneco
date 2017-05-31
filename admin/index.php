<?php

include '../include/phpscripts/DB.php';
?>
<?php
if(isset($_POST['login-form-submit']))
{
    $agentName = $_POST['login-form-username'];
    $agentPass  = $_POST['login-form-password'];

    $query = 'SELECT * From Agent WHERE Agent_Name = "'.$agentName.'" AND Agent_Pass ="'.$agentPass.'" ';

    $result =  mysqli_query($mysqli, $query);
    if (mysqli_num_rows($result) == 1) {
        echo 'Welcome';
    } else {
        echo 'Check your login data!';
    }
}
?>
<div class="tab-container">
    <div class="tab-content clearfix" id="tab-login">
        <div class="panel panel-default nobottommargin">
            <div class="panel-body" style="padding: 40px;">
                <form id="login-form" name="login-form" class="nobottommargin" action="index.php" method="post">
                    <h3>Login to your Account</h3>
                    <div class="col_full">
                        <label for="login-form-username">Username:</label>
                        <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
                    </div>
                    <div class="col_full">
                        <label for="login-form-password">Password:</label>
                        <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
                    </div>
                    <div class="col_full nobottommargin">
                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                        <a href="#" class="fright">Forgot Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

