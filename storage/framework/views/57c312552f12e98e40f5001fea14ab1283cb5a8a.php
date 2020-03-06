<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                  <a class="New Macaddress" href="<?php echo e(""); ?>">
                  <h3>New Macaddress</h3>
                  </a>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(('Macaddress')); ?>"  enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                          <div class="form">
                            <div class="form-group">
                              <label for="inputEmail4">New-Macaddress</label>
                              <input id="name" type="text" class="form-control is-invalid <?php $__errorArgs = ['Macaddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Macaddress" value="<?php echo e(old('Macaddress')); ?>" required autocomplete="Macaddress" autofocus>
                              <?php $__errorArgs = ['Macaddress'];
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
                          <br>
                          <br>
                        <div class="form-group">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('สมัคร')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/history/NewMacaddress.blade.php ENDPATH**/ ?>