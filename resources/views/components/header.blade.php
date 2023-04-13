<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        {{-- <img src="assets/images/logo-sm-dark.png" alt="" height="22"> --}}
                    </span>
                    <span class="logo-lg">
                        {{-- <img src="assets/images/logo-dark.png" alt="" height="20"> --}}
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        {{-- <img src="assets/images/logo-sm-light.png" alt="" height="22"> --}}
                    </span>
                    <span class="logo-lg">
                        {{-- <img src="assets/images/logo-light.png" alt="" height="20"> --}}
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-backburger"></i>
            </button>

        </div>

        <div class="d-flex">

            <div class="d-inline-block">
                <form class="form" action="{{ route('salir') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Cerrar Sesion</button>
                </form>
            </div>
    
        </div>
    </div>
</header>