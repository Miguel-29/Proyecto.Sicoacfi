
<?php $__env->startSection('title'); ?>
    'Activos fijos'
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row offset-lg-3 col-lg-6">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de aulas</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                            <caption>
                                <a type="buttom" href="<?php echo e(route('aulas.create')); ?>" class="btn btn-success">Registrar aula</a>
                                <caption>Lista de aulas</caption>
                            </caption>
                        <thead class="table-dark">
                        <tr>
                            <th>Codigo</th>
                            <th>Piso</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $ambientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ambiente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($ambiente->codigo); ?></td>
                                <td><?php echo e($ambiente->piso); ?></td>
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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Angel\ProyectoFinal\resources\views/aulas/index.blade.php ENDPATH**/ ?>