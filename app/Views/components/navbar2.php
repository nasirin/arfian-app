<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                        <img src="/assets/logo-only.png" alt="" style="width: 25px; height: 30px;" />
                        Telkom Akses
                    </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings --->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a href="/" title="Layout">
                                <i class="icon fa fa-code"> Layout </i>
                            </a>
                        </li>
                        <li style="margin-left: 20px; margin-right: 20px;">
                            <a href="/" title="Layout" >
                                <i class="icon fa fa-code"> List ODP </i>
                            </a>
                        </li>
                        <li>
                            <a href="/" title="Layout">
                                <i class="icon fa fa-code"> Okupansi </i>
                            </a>
                        </li>
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="/assets/default-user-image.png">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?= session('nama') ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a><?= session('nama') ?></a></li>
                                <!--Avatar Area-->
                                <!--/Theme Selector Area-->
                                <li class="dropdown-footer">
                                    <a href="/auth/logout">
                                        Sign out
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>