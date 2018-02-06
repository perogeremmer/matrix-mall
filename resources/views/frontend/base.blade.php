<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
   @include('frontend.component.head')
</head>

<body>
@include('frontend.component.header')

@yield('content')
<!--//banner -->

<!-- /newsletter-->
<!--<div class="newsletter_w3layouts_agile">
    <div class="col-sm-6 newsleft">
        <h3>Sign up for Newsletter !</h3>
    </div>
    <div class="col-sm-6 newsright">
        <form action="#" method="post">
            <input type="email" placeholder="Enter your email..." name="email" required="">
            <input type="submit" value="Submit">
        </form>
    </div>

    <div class="clearfix"></div>
</div>-->
<!-- //newsletter-->
<!-- footer -->
@include('frontend.component.footer')
</div>
<!-- //footer -->

@include('frontend.component.script')
</body>

</html>