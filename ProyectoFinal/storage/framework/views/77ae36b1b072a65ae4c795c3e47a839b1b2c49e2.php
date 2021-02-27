<?php $__env->startSection('title'); ?>
    Activos fijos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row mx-5">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Lista de activos fijos</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                        <label class="form-check-label" for="flexCheckIndeterminate">
                          Indeterminate checkbox
                        </label>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive-xxl">
                        <table class="table">
                            <caption>Lista de activos fijos</caption>
                            <thead class="table-dark">
                            <tr>
                                <th>Marca <span><i type="button" class="fas fa-sort-down" onclick="$orden='desc' <?php echo e(route('activos.index')); ?>" ></i></span></th>
                                <th>Color</th>
                                <th>Referencia</th>
                                <th>Serial</th>
                                <th>Categoria</th>
                                <th>Fecha de ingreso</td>
                                <th>Mantenimiento</th>
                                <th>Codigo aula</th>
                                <th>Responsable</th>
                                <th>Editar</th>
                                <th>Remover</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $activos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($activo->marca); ?></td>
                                    <td><?php echo e($activo->color); ?></td>
                                    <td><?php echo e($activo->referencia); ?></td>
                                    <td><?php echo e($activo->numeroSerial); ?></td>
                                    <td><?php echo e($activo->categoria); ?></td>
                                    <td><?php echo e($activo->fechaIngreso); ?></td>
                                    <td><?php echo e($activo->mantenimiento); ?></td>
                                    <?php if($activo->idAula == ''): ?>
                                        <td>Sin asignar</td>
                                    <?php else: ?>
                                    <?php $__currentLoopData = $ambientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ambiente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($ambiente->id == $activo->idAula): ?>
                                            <td>
                                                <?php echo e($ambiente->codigo); ?>

                                            </td>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <?php if($activo->idProfesor == ''): ?>
                                        <td>Sin asignar</td>
                                    <?php else: ?>
                                    <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($profesor->id == $activo->idProfesor): ?>
                                            <td>
                                                <?php echo e($profesor->nombre); ?> <?php echo e($profesor->apellido); ?>

                                            </td>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    <td>
                                        <a href="<?php echo e(route('activos.edit',$activo->id)); ?>">Lapiz</a>
                                    </td>
                                    <td>
                                        <a href="#">X</a>
                                    </td>
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


<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Angel\ProyectoFinal\resources\views/activos/index.blade.php ENDPATH**/ ?>