<!doctype html>
<html>
<head>

    <script>
      $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
          format: 'mm/dd/yyyy',
          container: container,
          todayHighlight: true,
          autoclose: true,
        })
      })
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/layouts/app1.blade.php ENDPATH**/ ?>