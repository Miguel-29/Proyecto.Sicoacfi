<header class="navbar navbar-dark bg-dark sticky-top flex-md-nowrap shadow px-3">
    <a class="navbar-brand col-md-3 col-lg-2 bg-dark me-0">
        <img src="/images/Logo4.png" width="40" height="40">
        SICOACFI
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed"  type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"  aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <form action="logout" method="post">
                @csrf
                <button class="btn btn-dark"type="submit">Cerrar sesion</button>
            </form>
        </li>
    </ul>
</header>

<script>
    mostrar = () => { 
        let busqueda = document.getElementById('busqueda');
        let boton = document.getElementById('butonBuscar');
        busqueda.style.display = 'inline';
        boton.style.display = 'none';
    }
</script>

<style>
    #busqueda {
        display: none
    }
</style>