

<?php $__env->startSection('content'); ?>
    <?php if(session('success')): ?>
        <div class="alert alert-success fade show" id="success-message"
         data-bs-dismiss="alert" role="alert">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>
    <h1>Lista de estudiantes grupos</h1>

    <form action="<?php echo e(route('estudiantes_grupos.index')); ?>" method="GET">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-sm-4">
                <label for="estudiante_id" class="form-label">Estudiante</label>
                <select name="estudiante_id" class="form-control">
                    <option value="">Seleccione un estudiante</option>
                    <?php $__currentLoopData = $estudiantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudiante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($estudiante->id); ?>"><?php echo e($estudiante->nombre); ?> <?php echo e($estudiante->apellido); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-4">
                <button type="submit" class="btn btn-primary">Buscar</button>
                <a href="<?php echo e(route('estudiantes_grupos.create')); ?>" class="btn btn-secondary">Ir a crear</a>
            </div>

        </div>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Estudiante</th>
                <th>Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $estudiantesGrupos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudianteGrupo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($estudianteGrupo->estudiante->nombre); ?> <?php echo e($estudianteGrupo->estudiante->apellido); ?></td>
                    <td><?php echo e($estudianteGrupo->grupo->nombre); ?></td>
                    <td>
                        <table>
                            <td>
                                <a href="<?php echo e(route('estudiantes_grupos.edit', $estudianteGrupo->id)); ?>" class="btn btn-warning">Editar</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('estudiantes_grupos.show', $estudianteGrupo->id)); ?>" class="btn btn-info">Ver</a>
                            </td>
                            <td>
                                <a href="<?php echo e(route('estudiantes_grupos.delete', $estudianteGrupo->id)); ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </table>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-sm-12">
            <?php echo e($estudiantesGrupos->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rivas\OneDrive\Escritorio\PHP\example-app\resources\views/estudiantes_grupos/index.blade.php ENDPATH**/ ?>