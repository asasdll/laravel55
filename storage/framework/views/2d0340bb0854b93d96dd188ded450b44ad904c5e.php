<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                  <a class="card-header" href="<?php echo e(""); ?>">
                  <h3>register_member</h3>
                  </a>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('registermember')); ?>">
                        <?php echo csrf_field(); ?>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ชื่อ</label>
                              <input id="name" type="text" class="form-control is-invalid <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>
                              <?php $__errorArgs = ['name'];
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
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">นามสกุล</label>
                              <input id="name" type="text" class="form-control is-invalid <?php $__errorArgs = ['lastname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="lastname" value="<?php echo e(old('lastname')); ?>" required autocomplete="lastname" autofocus>
                              <?php $__errorArgs = ['lastname'];
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
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ชื่อเล่น</label>
                              <input id="name" type="text" class="form-control" name="nickname" value="<?php echo e(old('nickname')); ?>" >
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">อายุ</label>
                              <input id="name" type="text" class="form-control " name="age" value="<?php echo e(old('age')); ?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">ว/ด/ป</label>
                              <input type="text" class="form-control" id="date" name="date">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">เบอร์ติดต่อ</label>
                              <input id="name" type="text" class="form-control is-invalid <?php $__errorArgs = ['contactnumber'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="contactnumber" value="<?php echo e(old('contactnumber')); ?>" required autocomplete="contactnumber" autofocus>
                              <?php $__errorArgs = ['contactnumber'];
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
                          <div class="form-row">
                            <div class="form-group col-md-8">
                              <label for="inputEmail4">เบอร์ติดต่อฉุกเฉิน 1</label>
                              <input id="name" type="text" class="form-control is-invalid <?php $__errorArgs = ['emergencycontactnumber1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="emergencycontactnumber1" value="<?php echo e(old('emergencycontactnumber1')); ?>" required autocomplete="emergencycontactnumber1" autofocus>
                              <?php $__errorArgs = ['emergencycontactnumber1'];
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
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">ชื่อเบอร์ฉุกเฉิน</label>
                              <input id="name" type="text" class="form-control " name="emergencynumber" value="<?php echo e(old('emergencynumber')); ?>">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-8">
                              <label for="inputEmail4">เบอร์ติดต่อฉุกเฉิน 2</label>
                              <input id="name" type="text" class="form-control " name="emergencycontactnumber2" value="<?php echo e(old('emergencycontactnumber2')); ?>" >
                            </div>
                            <div class="form-group col-md-4">
                              <label for="inputPassword4">ชื่อเบอร์ฉุกเฉิน</label>
                              <input id="name" type="text" class="form-control " name="emergencynumber2" value="<?php echo e(old('emergencynumber2')); ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="inputAddress">ที่อยู่ตามทะเบียนบ้าน</label>
                            <input id="name" type="text" class="form-control" name="addresshome" value="<?php echo e(old('addresshome')); ?>">
                          </div>
                          <div class="form-group">
                            <label for="inputAddress2">ที่อยู่ปัจจุบัน</label>
                            <input id="name" type="text" class="form-control <?php $__errorArgs = ['currentaddress'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="currentaddress" value="<?php echo e(old('currentaddress')); ?>">
                          </div>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputCity">จังหวัด</label>
                              <input id="name" type="text" class="form-control " name="city" value="<?php echo e(old('city')); ?>" >
                            </div>
                            <div class="form-group col-md-4 " >
                              <label for="inputState">สถานะ</label>
                              <select id="inputState" class="form-control" name="status2">
                                <option selected>เลือก</option>
                                <option value="โสด">โสด</option>
                                <option value="เเต่งาน">เเต่งาน</option>
                                <option value="หย่าร้าง">หย่าร้าง</option>
                                <option value="เเยกกันอยู่">เเยกกันอยู่</option>
                              </select>
                            </div>
                            <div class="form-group col-md-2">
                              <label for="inputZip">รหัสไปรษณีย์</label>
                              <input id="name" type="text" class="form-control" name="postalcode" value="<?php echo e(old('postalcode')); ?>" >
                            </div>
                          </div>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="file">
                            <label class="custom-file-label" for="customFile">Choose file</label>
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

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/history/register_member.blade.php ENDPATH**/ ?>