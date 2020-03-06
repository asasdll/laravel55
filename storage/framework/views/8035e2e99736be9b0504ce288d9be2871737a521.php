<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e('leave'); ?></title>
    <style>
        body {
          background-image: url("img/imgback/Back-3.jpg");
        }
     </style>
     <link rel="shortcut icon" type="image/x-icon" href="img/imgback/icon1.jpg" />
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
        <style>
    body {
      background-color: lightblue;
    }

    h1 {
      color: Orange   ;
      text-align: right;
      font-family: Times, serif;
      font-size: 60px;
    }
    h2 {
      color: DarkGreen  ;
      text-align: right;
      font-family: Times, serif;
      font-size: 60px;
    }
    h3 {
      color: DarkGreen;
      text-align: right;
      font-family: Times, serif;
      font-size: 25px;
    }
    h4 {
      color: DarkGreen;
      text-align: left;
      font-family: Times, serif;
      font-size: 15px;
    }
    h5 {
      color: Orange;
      font-family: Times, serif;
      font-size: 30px;
    }


    p {
      color: DarkGreen;
      text-align: right;
      font-family: Times, serif ;
      font-size: 20px;
    }
    </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
<?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>