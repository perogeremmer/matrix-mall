<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Register | Matrix Mall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Ultra Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="/assets/backends/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="/assets/backends/css/style.css" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <!-- font-awesome icons -->
    <link href="/assets/backends/css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js-->
    <script src="/assets/backends/js/jquery-1.11.1.min.js"></script>
    <script src="/assets/backends/js/modernizr.custom.js"></script>
    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!-- Metis Menu -->
    <script src="/assets/backends/js/metisMenu.min.js"></script>
    <script src="/assets/backends/js/custom.js"></script>
    <link href="/assets/backends/css/custom.css" rel="stylesheet">
    <!--//Metis Menu -->

</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <div id="page-wrapper">
        <div class="main-page" style="margin-left: 150pt">
            <div class="login-form">
                <h4>Register</h4>
                <form>
                    <input type="text" placeholder="Username" required>
                    <input type="password" class="pass" placeholder="Password" required>
                    <span class="check-left"><input type="checkbox">Remember me</span>
                    <span class="check-right"><a href="#">Forgot password?</a></span>
                    <div class="clearfix"></div>
                    <button class="btn btn-info btn-block" type="submit">Sign in</button>
                    <p class="center-block mg-t mg-b text-center">OR</p>
                    <a class="btn btn-primary btn-block mg-b-sm">
                        <i class="fa fa-facebook mg-r-md pull-left pd-l-md pd-r-md pd-t-xs"></i>Login with Facebook
                    </a>
                    <a class="btn btn-info btn-block">
                        <i class="fa fa-twitter mg-r-md pull-left pd-l-md pd-r-md pd-t-xs"></i>Login with Twitter
                    </a>
                    <p class="center-block mg-t mg-b">Dont have and account?
                        <a href="signup.html">Signup here.</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <!--typo-ends-->

    <div class="copy-section">
        <p>&copy; 2016 Ultra Modern. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>
<!-- Classie -->
<script src="/assets/backends/js/classie.js"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!-- Bootstrap Core JavaScript -->

<script type="text/javascript" src="/assets/backends/js/bootstrap.min.js"></script>
<!--scrolling js-->
<script src="/assets/backends/js/jquery.nicescroll.js"></script>
<script src="/assets/backends/js/scripts.js"></script>
<!--//scrolling js-->
</body>
</html>