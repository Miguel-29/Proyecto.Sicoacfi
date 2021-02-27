<?php $__env->startSection('title'); ?>
    Profesores
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de profesores</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                        <caption>
                            <a type="button" href="<?php echo e(route('profesores.create')); ?>" class="btn btn-success">Registrar profesor</a>
                            <caption>Lista de profesores</caption>
                        </caption>
                        <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento</th>
                            <th>Licenciatura</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($profesor->nombre); ?></td>
                                <td><?php echo e($profesor->apellido); ?></td>
                                <td><?php echo e($profesor->licenciatura); ?></td>
                                <td><?php echo e($profesor->documento); ?></td>
                                <td>Lapiz</td>
                                <td>X</td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Angel\ProyectoFinal\resources\views/profesores/index.blade.php ENDPATH**/ ?>