<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('container'); ?>

<?php if($posts->count()): ?>
    <div class="container">
        <div class="card mb-3 text-center shadow">
            <div class="position-absolute px-3 fs-4 rounded" style="background-color: rgba(0, 0, 0, 0.6)"><a href="/categories/<?php echo e($posts[0]->category->slug); ?> " class="text-decoration-none text-white"><?php echo e($posts[0]->category->name); ?></a></div>
            <img src="https://source.unsplash.com/1200x400?<?php echo e($posts[0]->category->name); ?>" class="card-img-top" alt="<?php echo e($posts[0]->category->name); ?>">
            <div class="card-body">
            <h5 class="card-title"><a href="/post/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none text-black"><?php echo e($posts[0]->title); ?></a></h5>
            <p>
                <small class="text-muted">By: <a href="/authors/<?php echo e($posts[0]->user->username); ?>" class="text-decoration-none"><?php echo e($posts[0]->user->name); ?></a> <?php echo e($posts[0]->created_at->diffForHumans()); ?></small>
            </p>
            <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>
            <a href="/post/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none btn btn-primary">Read more</a>
        </div>
    </div>

<?php else: ?>

    <p class="text-center fs-4">Post not found</p>

<?php endif; ?>



    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 mb-3">
                <div class="card shadow">
                    <div class=" px-2 position-absolute rounded" style="background-color: rgba(0, 0, 0, 0.6)"><a href="/categories/<?php echo e($post->category->slug); ?> " class="text-decoration-none text-white"><?php echo e($post->category->name); ?></a></div>
                    <img src="https://source.unsplash.com/500x300?<?php echo e($post->category->name); ?>" class="card-img-top" alt="<?php echo e($post->category->name); ?>">
                    <div class="card-body">
                      <h5 class="card-title"><a href="/post/<?php echo e($post->slug); ?>" class="text-decoration-none text-black"><?php echo e($post->title); ?></a></h5>
                      <p>
                        <small class="text-muted">By: <a href="/authors/<?php echo e($post->user->username); ?>" class="text-decoration-none"><?php echo e($posts[0]->user->name); ?></a> <?php echo e($post->created_at->diffForHumans()); ?></small>
                      </p>
                      <p class="card-text"><?php echo e($post->excerpt); ?></p>
                      <a href="/post/<?php echo e($post->slug); ?>" class="btn btn-primary">Read more</a>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/home.blade.php ENDPATH**/ ?>