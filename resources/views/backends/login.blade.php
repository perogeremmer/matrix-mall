<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Login | Matrix Mall</title>
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
                <h4>Login</h4>
                <h5><strong>Welcome</strong> login to get started!</h5>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{route('supplier.store')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" class="pass" name="name" placeholder="Name">
                    <input type="text" class="pass" name="email" placeholder="Email">
                    <input type="text" class="pass" name="slogan" placeholder="Supplier Slogan">
                    <input type="password" class="pass" name="password" placeholder="Password">
                    <input type="password" class="pass" name="confirmation password" placeholder="Confirmation Password">
                    <br>
                    <textarea placeholder="Address" class="pass"></textarea>
                    <hr>
                    <div class="clearfix"></div>
                    <button class="btn btn-info btn-block" type="submit">Sign in</button>
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