        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="inicio">
                <div class="sidebar-brand-icon rotate-n-15">
                </div>
                <div class="sidebar-brand-text mx-3">Floreria Samantha</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="inicio">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>


            <!-- Nav Item - Charts -->
            <?php
            if (isset($_SESSION['tipo'])) {
                if ($_SESSION['tipo'] == 'Administrador') { ?>
                    <!-- Divider -->
                    <hr class="sidebar-divider">

                    <!-- Heading -->
                    <div class="sidebar-heading">
                        Usuarios
                    </div>

                    <li class="nav-item">
                        <a class="nav-link" href="usuarios">
                            <i class="fas fa-fw fa-chart-area"></i>
                            <span>Mostrar Usuarios</span></a>
                    </li>
            <?php
                }
            }
            ?>

            <!----------- LOGO-------------->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Logo
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="logo">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Mostrar Logo</span></a>
            </li>



            <!----------- PRODUCTOS-------------->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Productos
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="productos">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Mostrar Productos</span></a>
            </li>



            <!----------- UBICACION-------------->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Ubicacion
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="ubicacion">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Mostrar Ubicacion</span></a>
            </li>



            <!----------- SLIDER-------------->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Sliders
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="sliders">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Mostrar Sliders</span></a>
            </li>



            <!----------- PIE DE PAGINA-------------->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Pie de Pagina
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="piepagina">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Mostrar Pie de pagina</span></a>
            </li>




            <!----------- NOSOTROS-------------->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Seccion nosotros
            </div>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="nosotros">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Nosotros</span></a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->