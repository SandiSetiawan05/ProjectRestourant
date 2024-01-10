<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-utensils"></i>
                </div>
                <div class="sidebar-brand-text mx-3"><?= $nama; ?><sup><?= $role ?></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?= $halaman == 'admin' ? 'active' : ''; ?> <?= $halaman == 'barista' ? 'active' : ''; ?> <?= $halaman == 'kasir' ? 'active' : ''; ?>">
                <a class="nav-link" href="<?php if ($role == 'admin') {
                                                echo "home_admin.php";
                                            } elseif ($role == 'barista') {
                                                echo 'home_barista.php';
                                            } elseif ($role == 'kasir') {
                                                echo "home_kasir.php";
                                            } ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profile</span></a>
            </li>

            <?php if($role == 'admin') : ?>
            <li class="nav-item <?= $halaman == 'barang' ? 'active' : ''; ?>">
                <a class="nav-link" href="data_admin.php">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu</span></a>
            </li>
            <?php endif; ?>

            <?php if($role == 'kasir') : ?>
            <li class="nav-item <?= $halaman == 'data_kasir' ? 'active' : ''; ?>">
                <a class="nav-link" href="data_kasir.php">
                    <i class="fas fa-fw fa-book-open"></i>
                    <span>Menu</span></a>
            </li>
            <?php endif; ?>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">



                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $nama ?></span>
                                <img class="img-profile rounded-circle" src="">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                
                                <a class="dropdown-item" href="../routers/r_login.php?aksi=logout">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>