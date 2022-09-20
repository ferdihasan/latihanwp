<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('container'); ?>
    <Header class="container">
        <h1>Daftar Author</h1>
    </Header>
    <div class="container">
        <?php $__currentLoopData = $author; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul>
                <li>
                    <a class="text-decoration-none" href="/authors/<?php echo e($usr->username); ?>"><?php echo e($usr->name); ?></a>
                </li>
            </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/authors.blade.php ENDPATH**/ ?>