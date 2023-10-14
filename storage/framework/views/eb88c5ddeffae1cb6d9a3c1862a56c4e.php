

<?php $__env->startSection('title', 'Lista de Productos'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Productos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card-header">
        <a href="<?php echo e(route('admin.productos.create')); ?>" class="btn btn-primary">Nuevo Producto</a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="productos" class="table table-striped shadow-lg mt-4">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>ID</th>
                        <th>CODIGO</th>
                        <th>NOMBRE</th>
                        <th>CATEGORIA</th>
                        <th>ENVASE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($producto->id); ?></td>
                            <td><?php echo e($producto->prod_cod); ?></td>
                            <td><?php echo e($producto->prod_dsc); ?></td>
                            <td><?php echo e($producto->marca_id); ?></td>
                            <td><?php echo e($producto->envase_id); ?></td>
                            <td width="150px">
                                <form action="<?php echo e(route('admin.productos.destroy',$producto)); ?>" method="POST">
                                    <a href="<?php echo e(route('admin.productos.edit',$producto)); ?>" type="button" class="btn btn-primary btn-sm">Editar</a>
                                <?php echo method_field('delete'); ?>
                                <?php echo csrf_field(); ?>
                                <input type="submit" value="Eliminar" class="btn btn-danger btn-sm">
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#productos').DataTable( {
                "language": {
                    "search": "Buscar",
                    "lengthMenu": "Mostrar _MENU_ registros por página",
                    "zeroRecords": "No se encontró nada - lo siento",
                    "info": "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay registros disponibles",
                    "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Último",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    }
                }
            } );
        } );        
    </script>
<?php $__env->stopSection(); ?>


















<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\softcloud\resources\views/admin/productos/index.blade.php ENDPATH**/ ?>