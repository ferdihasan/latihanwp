<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('container'); ?>

<div class="container">
    <h1>Post Category : <?php echo e($category); ?></h1>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="border-bottom">
            <h2><a href="/post/<?php echo e($post->slug); ?>" class="text-decoration-none"><?php echo e($post->title); ?></a></h2>
            <h5>By: <a href="/authors/<?php echo e($post->user->username); ?>" class="text-decoration-none"><?php echo e($post->user->name); ?></a> </h5>
            <p><?php echo e($post->excerpt); ?></p>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <br>
    <p><a href="/categories" class="text-decoration-none">View all categories</a></p>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/category.blade.php ENDPATH**/ ?>