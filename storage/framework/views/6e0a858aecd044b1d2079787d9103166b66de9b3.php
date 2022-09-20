<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('container'); ?>
<article class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 shadow mt-0 rounded">
            <img src="https://source.unsplash.com/1200x400?<?php echo e($post->category->name); ?>" class=" mt-2 card-img-top rounded" alt="<?php echo e($post->category->name); ?>">
            <h2 class="mb-3 mt-3"><?php echo e($post->title); ?></h2>
            <h5>By: <a href="/post?author=<?php echo e($post->user->username); ?>" class="text-decoration-none"><?php echo e($post->user->name); ?></a> di kategori <a href="/post?category=<?php echo e($post->category->slug); ?>" class="text-decoration-none"><?php echo e($post->category->name); ?></a></h5>
            <p><?php echo $post->body; ?></p>    
            <a href="/post" class="text-decoration-none mt-3">back to post</a>
        </div>
    </div>

</article>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/singlepost.blade.php ENDPATH**/ ?>