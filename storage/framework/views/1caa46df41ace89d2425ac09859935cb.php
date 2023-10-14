

<?php $__env->startSection('title', 'Panel'); ?>

<?php $__env->startSection('plugins.Sweetalert2', true ); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Soft e-Fact</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <p>Welcome to this beautiful admin panel.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> 
        Swal.fire(
        'Good job!',
        'You clicked the button!',
        'success'
        )    
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\softcloud\resources\views/admin/index.blade.php ENDPATH**/ ?>