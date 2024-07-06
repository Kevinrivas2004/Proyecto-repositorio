

<?php $__env->startSection('content'); ?>
    <h1>Eliminar estudiante</h1>
    <form action="<?php echo e(route('estudiantes.destroy', $estudiante->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo e($estudiante->nombre); ?>"
                    disabled>
            </div>
            <div class="col-md-4">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo e($estudiante->apellido); ?>"
                    disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e($estudiante->email); ?>"
                    disabled>
            </div>
        </div>
        <br>
        <div  class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Eliminar</button>
                <a href="<?php echo e(route('estudiantes.index')); ?>" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rivas\OneDrive\Escritorio\PHP\example-app\resources\views/estudiantes/delete.blade.php ENDPATH**/ ?>