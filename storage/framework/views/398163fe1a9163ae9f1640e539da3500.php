

<?php $__env->startSection('content'); ?>
    <h1>ver docente grupo</h1>
        <div class="row">
            <div class="col-md-6">
                <label for="docente_nombre" class="form-label">Docente</label>
                <input type="text" class="form-control" id="docente_nombre" value=" <?php echo e($docenteGrupo->docente->nombre); ?> <?php echo e($docenteGrupo->docente->apellido); ?>" disabled>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="grupo_nombre" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo_nombre" value=" <?php echo e($docenteGrupo->grupo->nombre); ?>" disabled>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo e(route('docentes_grupos.index')); ?>" class="btn btn-primary">Retornar</a>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rivas\OneDrive\Escritorio\PHP\example-app\resources\views/docentes_grupos/show.blade.php ENDPATH**/ ?>