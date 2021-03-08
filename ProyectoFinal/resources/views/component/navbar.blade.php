<header class="navbar navbar-dark bg-dark sticky-top flex-md-nowrap shadow px-3">
    <a class="navbar-brand col-md-3 col-lg-2 bg-dark me-0 fs-5">
        <img src="/images/Logo4.png" width="40" height="40">
        SICOACFI
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"  aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav justify-content-end ">
        <li class="nav-item text-nowrap px-3">
            <a type="button" class="btn btn-dark " href="#">INICIO</a>
        </li>
        <li class="nav-item text-nowrap px-3">
            <a type="button" class="btn btn-dark" href="#">SOPORTE TECNICO</a>
        </li>
        <li class="nav-item text-nowrap">
            <form action="logout" method="post">
                @csrf
                <button class="btn btn-dark"type="submit">CERRAR SESION</button>
            </form>
        </li>
    </ul>
</header>
