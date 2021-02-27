<?php $__env->startSection('title'); ?>
    ¡Bienvenido a SICOACFI!
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid text-center">
    <div class="row">
        <br>
        <h1>¡Bienvenido a SICOACFI!</h1>
        <h4 class="my-5">¿Que quieres hacer hoy?</h4>
        <div class="h5 pt-lg-5">
            <a href="<?php echo e(route('activos.index')); ?>">Ver activos fijos</a>,
            <a href="<?php echo e(route('profesores.index')); ?>">gestionar profesores</a>,
            <a href="<?php echo e(route('aulas.index')); ?>">gestionar aulas </a>, o mejor quieres
            <a href="<?php echo e(route('categorias.index')); ?>">ver categorias</a>.
        </div>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Angel\ProyectoFinal\resources\views/index.blade.php ENDPATH**/ ?>