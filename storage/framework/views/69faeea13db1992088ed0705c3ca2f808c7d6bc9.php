<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('container'); ?>

<div class="container text-center">

    <p><img width="300px" src="img/<?php echo e($image); ?>" alt="<?php echo e($image); ?>" class=" img-thumbnail rounded-circle"></p>
    <p><?php echo e($name); ?></p>
    <p>Alamat : <?php echo e($Alamat); ?></p>
    <p>Tanggal lahir: <?php echo e($Tanggal_Lahir); ?></p>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/about.blade.php ENDPATH**/ ?>