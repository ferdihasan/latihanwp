
<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('container'); ?>

<div class="container table">
    <table width="450px">
        <tr>
            <td>Nama: </td>
            <td><?php echo e($name); ?></td>
        </tr>
        <tr>
            <td>Facebook: </td>
            <td><?php echo e($fb); ?></td>
        </tr>
        <tr>
            <td>Twitter: </td>
            <td><?php echo e($tw); ?></td>
        </tr>
        <tr>
            <td>Email: </td>
            <td><?php echo e($email); ?></td>
        </tr>
        <tr>
            <td>No. HP: </td>
            <td><?php echo e($no); ?></td>
        </tr>
    </table>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/contact.blade.php ENDPATH**/ ?>