<?php
$current_route = $_SERVER['REQUEST_URI'];
$is_pole_social_active = strpos($current_route, 'Pole-social') !== false;
?>

<aside class="main-sidebar sidebar-dark-info elevation-4 position-fixed">
    <!-- Logo de la marque -->
    <a href="/view/home.php" class="brand-link">
        <img src="/view/assets/images/logo.png" class="brand-image " alt="Image de groupe">
        <span class="brand-text font-weight-light text-center h6">MediaBenotman</span>
    </a>

    <!-- Barre latérale -->
    <div class="sidebar">
        <!-- Menu latéral -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/view/home.php"
                        class="nav-link <?php echo ($current_route == '/view/home.php') ? 'active' : ''; ?>">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Dashbord
                        </p>
                    </a>
                </li>

                <!-- Authorisation -->
                <li class="nav-item <?php echo $is_pole_social_active ? 'menu-open' : ''; ?>">
                    <a href="#"
                        class="nav-link <?php echo $is_pole_social_active ? 'active' : ''; ?>">
                        <i class="fa-solid fa-briefcase"></i>
                        <p class="pl-2">
                            ALL services 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/view/Pole-social/vidoe.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/vidoe.php') ? 'active' : ''; ?>">
                                <i class="fas fa-video pl-1 pr-1"></i>
                                <p>Video</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/desing.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/desing.php') ? 'active' : ''; ?>">
                                <i class="fas fa-palette pl-1 pr-1"></i>
                                <p>Design</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/WiningProduct.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/WiningProduct.php') ? 'active' : ''; ?>">
                                <i class="fas fa-trophy pl-1 pr-1"></i>
                                <p>Winning Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/ADS.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/ADS.php') ? 'active' : ''; ?>">
                                <i class="fas fa-ad pl-1 pr-1"></i>
                                <p>ADS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/StrategieMarketing.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/StrategieMarketing.php') ? 'active' : ''; ?>">
                                <i class="fas fa-chart-line pl-1 pr-1"></i>
                                <p>Marketing Strategy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/CRM.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/CRM.php') ? 'active' : ''; ?>">
                                <i class="fas fa-users pl-1 pr-1"></i>
                                <p>CRM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/Branding.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/Branding.php') ? 'active' : ''; ?>">
                                <i class="fas fa-tag pl-1 pr-1"></i>
                                <p>Branding</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/view/Pole-social/communitymanager.php"
                                class="nav-link <?php echo ($current_route == '/view/Pole-social/communitymanager.php') ? 'active' : ''; ?>">
                                <i class="fas fa-comments pl-1 pr-1"></i>
                                <p>Community Manager</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>