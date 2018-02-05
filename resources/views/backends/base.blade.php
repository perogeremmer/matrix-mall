<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    @include('backends.component.head')
    <!--//Metis Menu -->
</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <!--left-fixed -navigation-->
    @include('backends.component.menu')
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    @include('backends.component.header')
    <!-- //header-ends -->
    <!-- //header-ends -->
    @yield('content')
    <!--typo-ends-->

    @include('backends.component.footer')
</div>
    @include('backends.component.script')
</body>
</html>