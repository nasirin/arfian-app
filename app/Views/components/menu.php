<div class="page-sidebar" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput" />
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        <li class="active">
            <a href="/">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text"> Dashboard </span>
            </a>
        </li>
        <li>
            <a href="#" class="menu-dropdown">
                <i class="menu-icon glyphicon glyphicon-link"></i>

                <span class="menu-text">
                    STO
                </span>

                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <?php foreach ($lokasi as $data) : ?>
                    <li>
                        <a href="#" class="menu-dropdown">
                            <span class="menu-text">
                                <?= $data['nama_lokasi'] ?>
                            </span>
                            <i class="menu-expand"></i>
                        </a>

                        <ul class="submenu">
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <i class="menu-icon fa fa-asterisk"></i>

                                    <span class="menu-text">
                                        ODC
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu customenu">
                                    <?php foreach ($menu as $menus) : ?>
                                        <?php if ($data['nama_lokasi'] == $menus['nama_lokasi']) : ?>
                                            <li>
                                                <a href="/sto/odc/lokasi/<?= $data['nama_lokasi'] ?>/<?= $menus['nama_odc'] ?>">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text"><?= $menus['nama_odc'] ?></span>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <i class="menu-icon fa fa-asterisk"></i>

                                    <span class="menu-text">
                                        ODF-FTM
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu customenu">
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-bolt"></i>
                                            <span class="menu-text">ODF-FTM-ABR-FA</span>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-bug"></i>
                                            <span class="menu-text">ODF-FTM-ABR-FB</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="menu-icon fa fa-bug"></i>
                                            <span class="menu-text">ODF-FTM-ABR-FC</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="menu-dropdown">
                                    <i class="menu-icon fa fa-asterisk"></i>

                                    <span class="menu-text">
                                        OLT
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>

                                <ul class="submenu customenu">
                                    <?php foreach ($menu as $menuss) : ?>
                                        <?php if ($data['nama_lokasi'] == $menuss['nama_lokasi']) : ?>
                                            <li>
                                                <a href="/sto/lokasi/<?= $data['nama_lokasi'] ?>/<?= $menuss['olt'] ?>">
                                                    <i class="menu-icon fa fa-bolt"></i>
                                                    <span class="menu-text"><?= $menuss['olt'] ?></span>
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </li>

                        </ul>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <li class="">
            <a href="/lokasi">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text"> Lokasi </span>
            </a>
        </li>
        <li class="">
            <a href="/user">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text"> User </span>
            </a>
        </li>
    </ul>
</div>