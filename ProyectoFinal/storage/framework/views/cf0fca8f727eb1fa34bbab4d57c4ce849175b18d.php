<header class="navbar navbar-dark bg-dark sticky-top flex-md-nowrap shadow px-3">
    <a class="navbar-brand col-md-3 col-lg-2 bg-dark me-0">
        <img src="images/Logo4.png" width="40" height="40">
        SICOACFI
    </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <form action="<?php echo e(route('logout')); ?>" method="post" id="cierre">
                <button class="btn btn-dark">Cerrar sesion</button>
                <?php echo csrf_field(); ?>
            </form>
        </li>
    </ul>
</header>

<?php /**PATH C:\Users\Angel\ProyectoFinal\resources\views/component/navbar.blade.php ENDPATH**/ ?>