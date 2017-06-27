<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Support</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="../css/uniform.css" />
    <link rel="stylesheet" href="../css/select2.css" />
    <link rel="stylesheet" href="../css/matrix-style.css" />
    <link rel="stylesheet" href="../css/matrix-media.css" />
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--main-container-part-->
<div id="content">
    <!--breadcrumbs-->
    <!--End-breadcrumbs-->
    <!--close-top-Header-menu-->
    <div class="container-fluid"><hr>
        <div class="row-fluid">
            <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                <div class="span12">
                    <div class="widget-box">
                        <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                            <h5>Send Email</h5>
                        </div>
                        <div class="widget-content nopadding">
                            <div class="control-group">
                                <label class="control-label">Subject</label>
                                <div class="controls">
                                    <input type="text" name="subject" id="subject"  required>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Message</label>
                                <div class="controls">
                                    <textarea name="message" id="subject" required></textarea>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Error</label>
                                <div class="controls">
                                    <select style="width:215px;" name="Error" id="Error">
                                        <option value="">-- select one --</option>
                                        <option value="Login Page">Login Page</option>
                                        <option value="Add a Transaction">Add a Transaction</option>
                                        <option value="Add Agent">Add Agent</option>
                                        <option value="Send Email">Send Email</option>
                                    </select>
                                </div>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="form-actions">
                                    <input name="Submit" type="submit" value="Send Email" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </form>
    </div>
</div>


<!--End-Chart-box-->

        <hr/>
        <div class="row-fluid">
            <div class="span6">
            </div>
            <div class="span6">
            </div>
        </div>
    </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
    <div id="footer" class="span12"> 2017 &copy; Matrix Admin. Designed by: Alaa & Ayham </div>
</div>

<!--end-Footer-part-->

<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.ui.custom.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.uniform.js"></script>
<script src="../js/select2.min.js"></script>
<script src="../js/jquery.validate.js"></script>
<script src="../js/matrix.js"></script>
<script src="../js/matrix.form_validation.js"></script>

</body>
</html>
