<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse mt-3">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link " href="/">
                    <span>
                        <i class="btn fas fa-home" style="width: 45px"></i>
                    </span>
                    Inicio
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('activos.index')}}">
                    <span>
                        <i class="btn fas fa-folder-open" style="width: 45px"></i>
                    </span>
                    Mostrar activos
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{route('activos.create')}}">
                    <span>
                        <i class="btn fas fa-align-left" style="width: 45px"></i>
                    </span>
                    Registrar activos
                </a>
            </li>
            <li class="nav-item btn-group dropend">
                <a type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="true">
                    <span>
                        <i class="btn fas fa-sitemap" style="width: 45px"></i>
                    </span>
                    Categorias
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="btn nav-link" href="{{route('activos.index',['showtechnology'=>'tecnologia'])}}">
                            
                            Tecnologia
                        </a> 
                    </li>
                    <li>
                        <a class="btn nav-link" href="{{route('activos.index',['showfurniture'=>'muebles'])}}">
                            Muebles
                        </a> 
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('aulas.index')}}">
                    <span>
                        <i class="btn fas fa-users-class" style="width: 45px"></i>
                    </span>
                    Gestionar aulas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('profesores.index')}}">
                    <span>
                        <i class="btn fas fa-chalkboard-teacher" style="width: 45px"></i>
                    </span>
                    Gestionar profesores
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('reportes.index')}}">
                    <span>
                        <i class="btn far fa-clipboard" style="width: 45px" ></i>
                    </span>
                    Reportes
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('bajasActivos.index')}}">
                    <span>
                        <i class="btn fas fa-align-slash" style="width: 45px" ></i>
                    </span>
                    Activos dados de baja
                </a>
            </li>
        </ul>
    </div>
</nav>

<style>
    .dropend:hover>.dropdown-menu {
        display: block;
    }
</style>