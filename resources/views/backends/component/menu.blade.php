<div class="sidebar" role="navigation">
    <div class="navbar-collapse">
        <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
            <div class="scrollbar scrollbar1">
                <ul class="nav" id="side-menu">
                    @if(\Illuminate\Support\Facades\Session::get('supplier_isLogin'))
                    <li>
                        <a href="#"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cogs nav_icon"></i>Products <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="/supplier/product">List of Products</a>
                            </li>
                            <li>
                                <a href="/supplier/product/create">Add New Product</a>
                            </li>
                        </ul>
                        <!-- /nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cogs nav_icon"></i>Transaction <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li>
                                <a href="/supplier/transaction/un-process">List of Not Process Transaction</a>
                            </li>
                            <li>
                                <a href="/supplier/transaction/on-process">List of On Process Transaction</a>
                            </li>
                        </ul>
                        <!-- /nav-second-level -->
                    </li>
                    @else
                        <li>
                            <a href="#"><i class="fa fa-home nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cogs nav_icon"></i>Suppliers <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="/admin/supplier">List of Suppliers</a>
                                </li>
                            </ul>
                            <!-- /nav-second-level -->
                        </li>
                    @endif
                </ul>
            </div>
            <!-- //sidebar-collapse -->
        </nav>
    </div>
</div>