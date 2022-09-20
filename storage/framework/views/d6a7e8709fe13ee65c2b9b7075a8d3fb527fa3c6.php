<?php $__env->startSection('container'); ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
</div>
<a href="/dashboard/posts/create" class="btn btn-success"><i class="bi bi-plus-lg"></i> Add Post</a>
<div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tbody>
            <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($post->title); ?></td>
            <td><?php echo e($post->category->name); ?></td>
            <td>
                <a href="/dashboard/posts/<?php echo e($post->slug); ?>" class="badge bg-info"><span data-feather="eye"></span></a>
                <a href="/dashboard/posts/edit/<?php echo e($post->slug); ?>" class="badge bg-warning"><span data-feather="edit"></span></a>
                <a href="/dashboard/posts/delete/<?php echo e($post->slug); ?>" class="badge bg-danger"><span data-feather="trash-2"></span></a>
            </td>
            </tr>
        </tbody>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/dashboard/posts/index.blade.php ENDPATH**/ ?>