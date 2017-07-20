<?php
include 'include/phpscripts/login-register.php';
$username = $_SESSION['username'];
$id =$_SESSION['ID'];
if(!isset($_SESSION['role'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
        Made by Alaa,
        23-05-2017
    ============================================= -->
    <title>Senco.nl | <?php echo $username;?> Page</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="full-header">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="one-page_index.php" class="standard-logo" data-dark-logo="images/sneco/logo/sneco_logo.png"><img src="images/sneco/logo/sneco_logo.png" alt="Canvas Logo"></a>
                    <a href="one-page_index.php" class="retina-logo" data-dark-logo="images/sneco/logo/sneco_logo.png"><img src="images/sneco/logo/sneco_logo.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">
                    <ul>
                        <li><a href="index.php"><div>Home</div></a></li>
                        <?php if(!isset($_SESSION['logged'])) { ?>
                            <li><a href="login-register-2.php"><div> Login & Register </div></a></li>
                        <?php }
                        else { ?>
                            <li><a href="user_index.php"><div><?php echo $username; ?> </div> </a>
                                <ul>
                                    <li><a href="transaction.php"><div>Create Transactions</div></a></li>
                                    <li><a href="user_transaction.php"><div>Old Transactions</div></a></li>
                                    <li><a href="logout.php"><div>logout</div></a></li>
                                </ul>
                            </li>
                        <?php } ?>
                    </ul>
                    </ul>
                </nav><!-- #primary-menu end -->
            </div>
        </div>
    </header><!-- #header end -->
    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">
            <h3 style="align:center">Your Transaction History</h3>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th style="background: #c9302c;color: #fff">MTRN</th>
                    <th>Sender E.Name</th>
                    <th>Sender Email</th>
                    <th>Receiver E.Name</th>
                    <th>Receiver Email</th>
                    <th>Receiver Country</th>
                    <th>Received Amount</th>
                    <th>Payout Amount</th>
                    <th>Rate</th>
                    <th>Exchange</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $query = "SELECT * FROM USER_TRANSACTION WHERE USER_ID = $id";
                $select_trans = mysqli_query($mysqli, $query);
                while($row = mysqli_fetch_assoc($select_trans)) {
                    $id = $row['ID'];
                    $mtrn1 = $row['MTRN1'];
                    $mtrn2 = $row['MTRN2'];
                    $mtrn3 = $row['MTRN3'];
                    $mtrn4 = $row['MTRN4'];
                    $mtrn5 = $row['MTRN5'];
                    $mtrn6 = $row['MTRN6'];
                    $mtrn7 = $row['MTRN7'];
                    $mtrn8 = $row['MTRN8'];
                    $mtrn9 = $row['MTRN9'];
                    $mtrn10 = $row['MTRN10'];
                    //sender
                    $sender_ename = $row['Sender_eName'];
                    $sender_aname = $row['Sender_aName'];
                    $sender_email = $row['Sender_Email'];
                    $sender_idnumber = $row['Sender_IdNumber'];
                    $sender_expiary = $row['Sender_IdExp'];
                    //receiver
                    $receiver_aname = $row['Receiver_aName'];
                    $receiver_ename = $row['Receiver_eName'];
                    $receiver_email = $row['Receiver_Email'];
                    $receiver_country = $row['Receiver_Country'];
                    $receivedAmount = $row['Received_Amount'];
                    $current = $row['Current_Currency'];
                    $payout_amount = $row['Payout_Amount'] . " " . $row['Payment_Currency'];
                    $rate = $row['Rate'];
                    $total_received_amount = $receivedAmount + $rate;
                    $charge = $row['Charge'];
                    $status = $row['Status'];
                    $timestamp = strtotime($row['Time']);
                    $date = date('Y-m-d', $timestamp);
                    $time = date('h:m:s', $timestamp);

                    echo "<tr>";
                    ?>
                    <?php
                    echo "<td>$id</td>";
                    echo "<td style=\"background: #c91c33;color: #fff\">$mtrn1 $mtrn2 $mtrn3 $mtrn4 $mtrn5 $mtrn6 $mtrn7 $mtrn8 $mtrn9 $mtrn10</td>";
                    echo "<td>$sender_ename</td>";
                    echo "<td>$sender_email</td>";
                    echo "<td>$receiver_ename</td>";
                    echo "<td>$receiver_email</td>";
                    echo "<td>$receiver_country</td>";
                    echo "<td>$total_received_amount $current</td>";
                    echo "<td>$payout_amount</td>";
                    echo "<td>$rate</td>";
                    echo "<td>$charge</td>";
                    if ($status == 'Pending') {
                        $back = "background:#2f97b1;color:#000;";
                    } else {
                        $back = "background:#C39527;color:#fff;";
                    }
                    echo "<td style='$back' >$status</td>";
                }
                ?>
                </tbody>

                </tbody>
            </table>
        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/sneco/logo/sneco_logo.png" alt="" class="footer-logo">

                            <p>We provide a <strong>Worldwide</strong>, <strong>Easy</strong> &amp; <strong>Flexible</strong> services.</p>

                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarter:</strong><br>
                                    Weesperstraat 118 H<br>
                                    1112 AP, Diemen<br>
                                    The Netherlands <br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@sneco.nl
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">
                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>
                        </div>
                    </div>
                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                            </div>
                        </form>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>
        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>

        <!-- External JavaScripts
        ============================================= -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <!-- Footer Scripts
        ============================================= -->
        <script type="text/javascript" src="js/functions.js"></script>

</body>
</html>
