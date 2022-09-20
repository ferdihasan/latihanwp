<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/post">
            <?php if(request('category')): ?>
                <input type="hidden" name="category" value="<?php echo e(request('category')); ?>" >
            <?php endif; ?>

            <?php if(request('author')): ?>
                <input type="hidden" name="author" value="<?php echo e(request('author')); ?>">
            <?php endif; ?>
            <div class="input-group mb-4">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="<?php echo e(request('search')); ?>">
                <button class="btn btn-primary" type="submit" >Search</button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/layout/search.blade.php ENDPATH**/ ?>