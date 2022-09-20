<?php $__env->startSection('container'); ?>

<div class="row">
    <div class="col-lg-8 shadow mt-0 rounded">
        <img src="https://source.unsplash.com/1200x400?<?php echo e($post->category->name); ?>" class=" mt-2 card-img-top rounded" alt="<?php echo e($post->category->name); ?>">
        <h2 class="mb-3 mt-3"><?php echo e($post->title); ?></h2>
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to my posts</a>
        <a href="" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="trash-2"></span>Delete</a>
        <p><?php echo $post->body; ?></p>    
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/dashboard/posts/show.blade.php ENDPATH**/ ?>