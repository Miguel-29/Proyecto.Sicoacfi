<?php $__env->startSection('title'); ?>
    Registrar activos fijos
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Registrar activos fijos</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form action="<?php echo e(route('activos.store')); ?>" method="post" class="offset-lg-3 col-lg-6">
                            <?php echo csrf_field(); ?>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca" autofocus required>
                                <label for="marca">Marca</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="numeroSerial" name="numeroSerial" placeholder="serial" required>
                                <label for="serial">Numero de serial</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="referencia" name="referencia" placeholder="referencia" required>
                                <label for="referencia">Referencia</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" placeholder="fechaIngreso" required>
                                <label for="fechaIngreso">Fecha de ingreso</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="mantenimiento" name="mantenimiento" placeholder="mantenimiento">
                                <label for="mantenimiento">Fecha de mantenimiento</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="color" name="color" placeholder="color">
                                <label for="color">Color</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="categoria" name="categoria" aria-label="Floating label select example" required>
                                    <option selected>Categorias</option>
                                    <option value="Tecnologia">Tecnologia</option>
                                    <option value="Muebles">Muebles</option>
                                </select>
                                <label for="floatingSelect">Seleccionar categoria</label>
                            </div>
                            <div class="form-floating mb-3 ">
                                <select name="idAula" id="idAula" class="form-select"aria-label="seleccionar aula">
                                    <option selected value="">Sin asignar aula</option>
                                    <?php $__currentLoopData = $ambientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ambiente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ambiente->id); ?>">
                                            <?php echo e($ambiente->id); ?> <?php echo e($ambiente->piso); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="floatingSelect">Seleccione aula</label>
                            </div>
                            <div class="form-floating ">
                                <select name="idProfesor" id="idProfesor" class="form-select" aria-label="seleccionar profesor">
                                    <option selected value="">Sin asignar profesor</option>
                                    <?php $__currentLoopData = $profesores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($profesor->id); ?>">
                                            <?php echo e($profesor->nombre); ?> <?php echo e($profesor->apellido); ?> <?php echo e($profesor->licenciatura); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <label for="floatingSelect">Seleccione profesor</label>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <span><i class="fas fa-folder-plus"></i>  Guardar</span>
                            </button>
                            <button type="reset" class="btn btn-warning"><i class="fas fa-redo-alt"></i></button>
                        </form>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Angel\ProyectoFinal\resources\views/activos/create.blade.php ENDPATH**/ ?>