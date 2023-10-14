<!-- Main Sidebar Container -->
<font size="2">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="vistas/assets/dist/img/LogoSoftCloud2.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Soft Cloud - eFact</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link active" onclick="CargarContenido('vistas/dashboard.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Panel de Control
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Catálogos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Productos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/productos.php','content-wrapper')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Productos</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/comboskits.php','content-wrapper')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Combos-Kits</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/precios.php','content-wrapper')">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Precios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/clientes.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                Clientes
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/precios.php','content-wrapper')">
                                <i class="far fa-circle nav-icon"></i>
                                Vendedores
                            </a>
                        </li>
                    </ul>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/ventas.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Ventas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/compras.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Compras
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/reportes.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Reportes
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a style="cursor: pointer;" class="nav-link" onclick="CargarContenido('vistas/consulta.php','content-wrapper')">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Configuración
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
</font>

<script>
    $(".nav-link").on('click', function() {
        $(".nav-link").removeClass('active');;
        $(this).addClass('active');
    })
</script>