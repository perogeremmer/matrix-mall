<div class="sticky-header header-section ">
    <div class="header-left">
        <!--logo -->
        <div class="logo">
            <a href="/"><h1>Matrix Mall</h1></a>
        </div>
        <!--//logo-->
        <div class="user-right">
            <div class="profile_details_left"><!--notifications of menu start -->
                <div class="profile_details">
                    <ul>
                        <li class="dropdown profile_details_drop">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <div class="profile_img">
                                    <span class="prfil-img"><img class="fa fa-cog" src="/assets/backends/images/user.png" style="height: 50px; width: 50px;" alt=""> </span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            <ul class="dropdown-menu drp-mnu">
                                {{--<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>--}}
                                @if(\Illuminate\Support\Facades\Session::get('supplier_isLogin'))
                                <li> <a href="/supplier/profile"><i class="fa fa-user"></i> Profile</a> </li>
                                <li> <a href="/supplier/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                @else
                                    <li> <a href="/admin/logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="profile_medile"><!--notifications of menu start -->
        <div class="profile_details_left"><!--notifications of menu start -->
            <div class="profile_details">
                <ul>
                    <li class="dropdown profile_details_drop">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <div class="profile_img">
                                <span class="prfil-img"><img class="fa fa-cog" src="assets/backends/images/a.png" alt=""> </span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                        <ul class="dropdown-menu drp-mnu">
                            <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                            <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                            <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="header-right">
        <!--toggle button start-->
        <div class="search-box">
            {{--<form class="input">--}}
            {{--<input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31">--}}
            {{--</form>--}}
        </div>
        <button id="showLeftPush"><i class="fa fa-bars"></i></button>
        <div class="clearfix"> </div>
        <!--toggle button end-->
    </div>
    <div class="clearfix"> </div>
</div>