<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-sm">
      <br>
              <h1><div class=" col-md-4 text-md-center"><?php echo e(__('Login')); ?></div></h1>

              <div role="alert" class="col-md-8 col-form-label" >
              <h4>Don'have an acount  ?&nbsp;
        <a href="<?php echo e(route('register')); ?>" class="alert-link "><?php echo e(__('Create your account')); ?></a>.</h4>
      </div>
      <form method="POST" action="<?php echo e(route('login')); ?>">
          <?php echo csrf_field(); ?>

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-mail Address')); ?></label>

              <div class="col-md-8 ">
                  <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="E-mail">

                  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
          </div>

          <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password Address')); ?></label>
              <div class="col-md-8 .col-sm-">
                  <input id="password" type="password" class="form-control <?php $__errorArgs = ['passwordlogin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="passwordlogin" required autocomplete="current-password" placeholder="Password">

                  <?php $__errorArgs = ['passwordlogin'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                      <span class="invalid-feedback" role="alert">
                          <strong><?php echo e($message); ?></strong>
                      </span>
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
              </div>
          </div>

          <div class="form-group row">
              <div class="col-md-6  text-md-center">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>

                      <label class="form-check-label" for="remember">
                          <?php echo e(__('Remember Me')); ?>

                      </label>
                  </div>
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-8  text-md-center">
                  <button type="submit" class="btn btn-primary">
                      <?php echo e(__('Login')); ?>

                  </button>

                  <?php if(Route::has('password.request')): ?>
                      <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                          <?php echo e(__('Forgot Your Password?')); ?>

                      </a>
                  <?php endif; ?>
              </div>
          </div>
      </form>
    </div>
    <div class="col-sm">
      <div  >
        <div class="container">
    <div class="row">
      <div class="col-sm">

      </div>
      <div class="col-sm-10">
        <div  >
             <h2>Leave</h>
               <h3>Employee Time Management System</h>
        </div>
        <div >
          <p>online leave system,Time stamp,website,leave application form,leave,sick leave,Personal Leave,take day off ,take time off,on vacation</p>
          </div>
      </div>
    </div>
  </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/auth/login555.blade.php ENDPATH**/ ?>