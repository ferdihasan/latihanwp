<?php echo $__env->make('layout.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('container'); ?>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            
            <?php if($errors->all()): ?>
            <div class="alert alert-danger text-center" role="alert"><i class="bi bi-exclamation-circle"></i> Email or password invalid!</div>
            <?php endif; ?>
            <?php if(session()->has('loginError')): ?>
            <div class="alert alert-danger text center" role="alert"><i class="bi bi-exclamation-circle"></i> <?php echo e(session('loginError')); ?></div>
            <?php endif; ?>
            <form action="/login" method="POST">
                <?php echo csrf_field(); ?>
              <div class="form-floating">
                <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required autofocus value="<?php echo e(old('email')); ?>">
                <label for="email">Email address</label>
                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="invalid-feedback">
                    <?php echo e($message); ?>

                </div>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
            </form>
            <small class="d-block text-center">Not registered? <a class="text-decoration-none" href="/register">Register now!</a></small>
          </main>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\learn\laravel\latihanwp\resources\views/login/index.blade.php ENDPATH**/ ?>