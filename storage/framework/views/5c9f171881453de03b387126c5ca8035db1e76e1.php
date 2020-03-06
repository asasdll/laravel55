<?php $__env->startSection('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
      <div class="panel-heading"><h3>พนักงาน</h3></div>
      <table class="table table-dark">
      <div class="col-md-8 col-md-offset-2">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">ชื่อ</th>
          <th scope="col">นามสกุล</th>
          <th scope="col">เบอร์ติดต่อ</th>
          <th scope="col">ภาพ</th>
          <th scope="col">เงินเดือน</th>
          <th scope="col">view</th>
          <th scope="col">&nbsp&nbspDELETE</th>
        </tr>
      </thead>
            <th><form method="post" class="delete_form" action="<?php echo e(action('VacationController@destroy')); ?>">
              <?php echo e(csrf_field()); ?>

              <input type="hidden" name="_method" value="DELETE"/>
              <button type="submit" class="btn btn-danger">Delete</button>
            </form></th>
          </tr>
        </tbody>

      </table>
      </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.company', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/test.blade.php ENDPATH**/ ?>