<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="index.php?vista=home">
        <img src="./img/logo.png.png" width="65" height="28">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link"><i class="fa-solid fa-user-tie fa-fw"></i> &nbsp; Usuarios</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="index.php?vista=user_new" ><i class="fa-solid fa-user-plus fa-fw"></i> &nbsp; Nuevo</a>
                    <a class="navbar-item" href="index.php?vista=user_list" ><i class="fa-solid fa-clipboard-list fa-fw"></i> &nbsp; Lista</a>
                    <a class="navbar-item" href="index.php?vista=user_search" ><i class="fa-solid fa-magnifying-glass fa-fw"></i> &nbsp; Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link"><i class="fa-solid fa-tags fa-fw"></i> &nbsp; Categorias</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="index.php?vista=category_new" ><i class="fa-solid fa-plus fa-fw"></i> &nbsp; Nueva</a>
                    <a class="navbar-item" href="index.php?vista=category_list" ><i class="fa-solid fa-clipboard-list fa-fw"></i> &nbsp; Lista</a>
                    <a class="navbar-item" href="index.php?vista=category_search" ><i class="fa-solid fa-magnifying-glass fa-fw"></i> &nbsp; Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link"><i class="fa-solid fa-dolly fa-fw"></i> &nbsp; Productos</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="index.php?vista=product_new" ><i class="fa-solid fa-plus fa-fw"></i> &nbsp; Nuevo</a>
                    <a class="navbar-item" href="index.php?vista=product_list" ><i class="fa-solid fa-clipboard-list fa-fw"></i> &nbsp; Lista</a>
                    <a class="navbar-item" href="index.php?vista=product_category" ><i class="fa-solid fa-dolly fa-fw"></i> &nbsp; Por categorias</a>
                    <a class="navbar-item" href="index.php?vista=product_search" ><i class="fa-solid fa-magnifying-glass fa-fw"></i> &nbsp; Buscar</a>
                </div>
            </div>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link"><i class="fa-regular fa-file-pdf fa-fw"></i> &nbsp; Reportes</a>

                <div class="navbar-dropdown">
                    <a class="navbar-item" href="index.php?vista=report_inventory" ><i class="fa-regular fa-file fa-fw"></i> &nbsp; Reporte de inventario</a>
                </div>
            </div>

        </div>

        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary is-rounded">
                        <i class="fa-solid fa-circle-user fa-fw"></i> &nbsp; Mi cuenta
                    </a>
                    <a href="index.php?vista=logout" class="button is-link is-rounded">
                        <i class="fa-solid fa-power-off fa-fw"></i> &nbsp; Salir
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>