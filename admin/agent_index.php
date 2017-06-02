<!DOCTYPE html>
<html lang="en">
<head>
    <title>Matrix Admin</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="css/fullcalendar.css" />
    <link rel="stylesheet" href="css/matrix-style.css" />
    <link rel="stylesheet" href="css/matrix-media.css" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/jquery.gritter.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-partttt-->
<div id="header">
    <h1><a href="dashboard.html">Sneco Admin</a></h1>
</div>
<!--close-Header-part-->


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
            </ul>
        </li>
        <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Online Users Now</span> <span class="label label-important">5</span></a></li>
    </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li> <a href="charts.html"><i class="icon icon-signal"></i> <span>Transactions</span> <span class="label label-important">0</span></a> </li>
        <li class="submenu"> <a href="#"><i class="icon-user"></i> <span>Agents</span></a>
            <ul>
                <li><a href="form-common.html">Current Agents</a></li>
                <li><a href="form-validation.html">Add Agent</a></li>
            </ul>
        </li>
        <li><a href="tables.html"><i class="icon icon-th"></i> <span>Users</span></a></li>
        <li><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Currency rates</span></a></li>


        <li class="content"> <span>Monthly Bandwidth Transfer</span>
            <div class="progress progress-mini progress-danger active progress-striped">
                <div style="width: 77%;" class="bar"></div>
            </div>
            <span class="percent">77%</span>
            <div class="stat">21419.94 / 14000 MB</div>
        </li>
        <li class="content"> <span>Disk Space Usage</span>
            <div class="progress progress-mini active progress-striped">
                <div style="width: 87%;" class="bar"></div>
            </div>
            <span class="percent">87%</span>
            <div class="stat">604.44 / 4000 MB</div>
        </li>
    </ul>
</div>
<!--sidebar-menu-->
<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="agent_index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#">New Transaction </a>  </div>
        <h1>New Transaction</h1>
    </div>
    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5> Sender </h5>
                    </div>
                    <div class="widget-content nopadding">
                        <form class="form-horizontal" method="post" action="agent_index.php" name="basic_validate" id="basic_validate" novalidate="novalidate">
                            <div class="control-group">
                                <label class="control-label">First Name</label>
                                <div class="controls">
                                    <input type="text" name="Sender_fName" id="Sender_fName" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Last Name</label>
                                <div class="controls">
                                    <input type="text" name="Sender_lName" id="Sender_lName" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Street Name </label>
                                <div class="controls">
                                    <input type="text" name="Sender_StreetName" id="Sender_StreetName" required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">House Number</label>
                                <div class="controls">
                                    <input type="text" name="Sender_HouseNumber" id="Sender_HouseNumber" required>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Postcode </label>
                                    <div class="controls">
                                        <input type="text" name="Sender_Postcode" id="Sender_Postcode" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">City</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_City" id="Sender_City" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Country</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_Country" id="Sender_Country" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_Phone" id="Sender_Phone" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Email</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_Email" id="Sender_Email" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Nationality</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_Nationality" id="Sender_Nationality" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Bank Account</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_BankAccount" id="Sender_BankAccount" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ID Number</label>
                                    <div class="controls">
                                        <input type="text" name="Sender_IDNumber" id="Sender_IDNumber" required>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Expiry Date </label>
                                    <div class="controls">
                                        <input type="date" name="Sender_Expiary" id="Sender_Expiary" required>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Receiver</h5>
                    </div>
                    <div class="widget-content nopadding">
                            <div class="control-group">
                                <label class="control-label">First Name</label>
                                <div class="controls">
                                    <input type="text" name="Receiver_fName" id="Receiver_fName"required />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Last Name</label>
                                <div class="controls">
                                    <input type="text" name="Receiver_lName" id="Receiver_lName"required />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Street Name</label>
                                <div class="controls">
                                    <input type="text" name="Receiver_StreetName" id="Receiver_StreetName" required />
                                </div>
                            </div>
                        <div class="control-group">
                            <label class="control-label">House Number</label>
                            <div class="controls">
                                <input type="text" name="Receiver_HouseNumber" id="Receiver_HouseNumber" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Postcode</label>
                            <div class="controls">
                                <input type="text" name="Receiver_Postcode" id="Receiver_Postcode" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">City</label>
                            <div class="controls">
                                <input type="text" name="Receiver_City" id="Receiver_City" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Country</label>
                            <div class="controls">
                                <input type="text" name="Receiver_Country" id="Receiver_Country" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Phone</label>
                            <div class="controls">
                                <input type="text" name="Receiver_Phone" id="Receiver_Phone" required />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input type="text" name="Receiver_Email" id="Receiver_Email" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Other</h5>
                        </div>
                        <div class="widget-content nopadding">
                                <div class="control-group">
                                    <label class="control-label">Amount</label>
                                    <div class="controls">
                                        <input type="text" name="Amount" id="Amount" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Current Currency</label>
                                    <div class="controls">
                                        <input  type="text" name="Current_Currency" id="Current_Currency" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Payment Currency</label>
                                    <div class="controls">
                                        <input  type="text" name="Payment_Currency" id="Payment_Currency" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Reason</label>
                                    <div class="controls">
                                        <input  type="text" name="Reason" id="Reason" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                     <label class="control-label">Comment</label>
                                     <div class="controls">
                                         <input  type="text" name="Comment" id="Comment" required />
                                     </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Rate</label>
                                    <div class="controls">
                                        <input  type="text" name="Rate" id="Rate" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Charge</label>
                                    <div class="controls">
                                        <input  type="text" name="Charge" id="Charge" required />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Total</label>
                                    <div class="controls">
                                        <input  type="text" name="Total" id="Total" required />
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <input type="submit" value="Validate" class="btn btn-success" re>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.ui.custom.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.uniform.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/matrix.js"></script>
<script src="js/matrix.form_validation.js"></script>
<script type="text/javascript">
    // This function is called from the pop-up menus to transfer to
    // a different page. Ignore if the value returned is a null string:
    function goPage (newURL) {

        // if url is empty, skip the menu dividers and reset the menu selection to default
        if (newURL != "") {

            // if url is "-", it is this page -- reset the menu:
            if (newURL == "-" ) {
                resetMenu();
            }
            // else, send page to designated URL
            else {
                document.location.href = newURL;
            }
        }
    }

    // resets the menu selection upon entry to this page:
    function resetMenu() {
        document.gomenu.selector.selectedIndex = 2;
    }
</script>
</body>
</html>
