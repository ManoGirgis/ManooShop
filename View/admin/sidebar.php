<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4" id ="logoside">
    <!-- Brand Logo -->
    <a href="?controller=Dashboard" class="brand-link">
        <img src="img/logo.png" alt="ManoShop Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <b>Mano</b><span class="brand-text font-weight-light">Shop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                    <li class="nav-item">
                            <a href="?controller=main&action=list" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Modo Cliente</p>
                            </a>
                            
                        </li>
                        <li class="nav-header">USUARIOS</li>
                        <li class="nav-item">
                            <a href="?controller=Dashboard&action=Login" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    <?php
                                    if (!isset($_SESSION["User"])) {
                                    ?>
                                        Log In
                                    <?php
                                    } else {
                                    ?>
                                        Show User
                                    <?php
                                    }
                                    ?>

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=Dashboard&action=regs" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Crear Usuario</p>
                            </a>
                        </li>

                        <li class="nav-header">ARTÍCULO</li>
                        <li class="nav-item">
                            <a href="?controller=Dashboard" class="nav-link">
                                <i class="nav-icon fas fa-eye"></i>
                                <p>Ver Artículos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="?controller=Dashboard&action=addarticle" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>Crear Artículo</p>
                            </a>
                        </li>
                        <li class="nav-header">CATEGORIAS</li>
                        <li class="nav-item">
                            <a href="?controller=dashboard&action=listcat" class="nav-link">
                                <i class="nav-icon fas fa-eye"></i>
                                <p>Ver Categorias</p>
                            </a>
                        </li>
                    </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>