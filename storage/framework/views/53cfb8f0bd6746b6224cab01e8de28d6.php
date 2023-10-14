

<?php $__env->startSection('title', 'Nuevo Producto'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Nuevo Producto</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-body">
            <?php echo Form::open(['route'=>'admin.productos.store']); ?>

                <div class="form-group">
                    <?php echo Form::label('nombre','Nombre'); ?>

                    <?php echo Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Nombre del producto']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('nombre','Nombre'); ?>

                    <?php echo Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Nombre del producto']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('nombre','Nombre'); ?>

                    <?php echo Form::text('nombre', null, ['class'=>'form-control','placeholder'=>'Nombre del producto']); ?>

                </div>                                
            <?php echo Form::close(); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\softcloud\resources\views/admin/productos/create.blade.php ENDPATH**/ ?>