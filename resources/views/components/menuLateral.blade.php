<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu" style="height: 90vh;">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('bienvenida') }}" class="waves-effect">
                        <i class="mdi mdi-file-document-box-outline"></i>
                        <span>Home</span>
                    </a>
                </li>


                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-account"></i>
                        Usuarios
                    </a>
                    <ul class="dropdown-menu dark">
                        <li>
                            <a class="dropdown-item" href="{{ route('users') }}">
                                <i class="mdi mdi-account-group"></i>
                                Usuarios
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('newUser') }}">
                                <i class="mdi mdi-account-plus"></i>
                                Agregar Usuario
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-book-open-variant"></i>
                        Notas
                    </a>
                    <ul class="dropdown-menu dark">
                        <li>
                            <a class="dropdown-item" href="{{ route('notas') }}">
                                <i class="mdi mdi-book-open-page-variant"></i>
                                Todas
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('notas.new') }}">
                                <i class="mdi mdi-book-plus"></i>
                                Agregar Nota
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item dropdown" style="position: relative;">
                    <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-book-open-variant"></i>
                        Autores
                    </a>
                    <ul class="dropdown-menu dark">
                        <li>
                            <a class="dropdown-item" href="{{ route('autores') }}">
                                <i class="mdi mdi-book-open-page-variant"></i>
                                Todos
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('autores.new') }}">
                                <i class="mdi mdi-book-plus"></i>
                                Nuevo Autor
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->