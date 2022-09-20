<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('container'); ?>

    <header class="container">
        <h1>Filter dari author: <?php echo e($user); ?> </h1>
    </header>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <article class="container mb-5 border-bottom">
        <h2><a href="/post/<?php echo e($post->slug); ?>" class="text-decoration-none"><?php echo e($post->title); ?></a></h2>
        <h5>By: <a href="/authors/<?php echo e($post->user->username); ?>" class="text-decoration-none"><?php echo e($post->user->name); ?></a> di kategori <a href="/categories/<?php echo e($post->category->slug); ?>" class="text-decoration-none" ><?php echo e($post->category->name); ?></a></h5>
        <p><?php echo e($post->excerpt); ?></p>
        <a href="/post/<?php echo e($post->slug); ?>" class="text-decoration-none">Read more..</a>
    </article>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <p class="container text-decoration-none"><a href="/authors">View all authors</a></p>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/author.blade.php ENDPATH**/ ?>