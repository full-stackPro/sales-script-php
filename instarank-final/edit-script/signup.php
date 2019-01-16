<?php
session_start();

if(!isset($_SESSION['insta_user'])){
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up Trainee | Sale Script</title>
<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Jquery Notebook CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.notebook.css">
    
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/richtext.min.css" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="assets/css/colorpicker.css" type="text/css"> 
    
    <link href="assets/css/font-awesome.css" rel="stylesheet">
	<link rel="icon" href="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-32x32.png" sizes="32x32" />
	<link rel="icon" href="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-180x180.png" />
	<meta name="msapplication-TileImage" content="http://instascript.xyz/wp-content/uploads/2018/05/cropped-InstaHousLogoOnly-1-270x270.png" />
 

</head> 

<body>
 
    <ul id="fixed-nav">
		<li class=""><a href="" id="savechanges" type="signup">Save</a></li>
        <li class=""><a href="" id="export" type="signup">Export</a></li>
    </ul>

    <div class="ajax-response" style="display: none;">Updating current content...</div>
    <div class="popup" data-popup="popup-1">
        <div class="popup-inner">
            <form action="" id="addsection">
                <div class="form-element">
                    <label>Button Title</label>
                    <input type="text" placeholder="please enter button text" id="btn-title" />
                </div>
                <div class="form-element">
                    <label>Button id <small>(No space and special characters)</small></label>
                    <input type="text" placeholder="please enter button id" id="btn-id" />
                </div>
                <div class="form-element">
                    <label>Section Text</small>
                    </label>
                    <textarea class="text-editor" rows="5" id="section-des"></textarea>
                </div>
                <input type="submit" name="submit" id="submitbtn" value="Add New Question" />
            </form>
            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
        </div>
    </div>
    <div class="wrapper editor ">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Instarank Script</h3>
            </div>
		</nav>

        <!-- Page Content Holder -->
        <div id="content">

            <div id="topArea">
				<h5><strong>CLOSE PAGE</strong></h5>
                Now our pricing is actually the best part.  First of all, it's MONTH-TO-MONTH, WITHOUT a contract...Which I'm sure is a breath of fresh for you, RIGHT?<br>

				So normally WITHOUT the promotion I'm about to offer you...we would charge $350 a month for a guaranteed 1000 views.<br>

				However when you take our promotion, on this call...not only do we lower the price to only 159...WE ALSO honor that price for the lifetime of the account AND we DOUBLE the amount of views to 2000.  Does that make sense?
				<br>

				Great you're going to love it...<br>

				I'm excited to get you started...<br>

				(EMAIL)<br>

				&nbsp;&nbsp;&nbsp;--Now, just to let you know we always send out an emailed receipt, what's a good email address for ya.<br>

				----------------------------------------------<br>
				(CITY)<br>
				&nbsp;&nbsp;&nbsp;--Now just to confirm, is (city) the city where you want us to find you new customers or is there another area you prefer?<br>

				----------------------------------------------<br>

				(BILLING ADDRESS)<br>

				&nbsp;&nbsp;&nbsp;--Perfect so the next step is just getting a good billing address, what's a good billing address for you?<br>

				----------------------------------------------<br>
				(CREDIT CARD)<br>

				&nbsp;&nbsp;&nbsp;--Perfect so from here will you be using a Visa or MasterCard?<br>
				
				<p style="text-align:center"><a href="index.php">SCRIPT HOME</a></p>
            </div>
            

            </div>

        </div>
    </div>

    <!-- jQuery CDN - jquery -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/jquery.richtext.min.js"></script>
    <script src="assets/js/colorpicker.js"></script>
    <!-- Bootstrap JS -->
    <!-- Include JS file. -->
    <script type="text/javascript" src="assets/js/jquery.notebook.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
   

    
</body>

</html>