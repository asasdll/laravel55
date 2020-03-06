<!--
=========================================================
 Light Bootstrap Dashboard - v2.0.1
=========================================================

 Product Page: https://www.creative-tim.com/product/light-bootstrap-dashboard
 Copyright 2019 Creative Tim (https://www.creative-tim.com)
 Licensed under MIT (https://github.com/creativetimofficial/light-bootstrap-dashboard/blob/master/LICENSE)

 Coded by Creative Tim

=========================================================

 The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.  -->
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets2/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo e('leave'); ?></title>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL::to('/')); ?>/img/imgback/icon1.jpg" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="<?php echo e(URL::to('/')); ?>/assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo e(URL::to('/')); ?>/assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="<?php echo e(URL::to('/')); ?>/assets2/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="<?php echo e(URL::to('/')); ?>/assets2/img/sidebar-2.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="http://www.creative-tim.com" class="simple-text">
                        Creative Tim
                    </a>
                </div>
                <ul class="nav">
                  <li class="nav-item ">
                      <a class="nav-link" href="<?php echo e(url('hr')); ?>">
                          <i class="nc-icon nc-circle-09"></i>
                          <p>NewCompany</p>
                      </a>
                  </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(url('hr')); ?>">
                            <i class="nc-icon nc-badge"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(url('table')); ?>">
                            <i class="nc-icon nc-notes"></i>
                            <p>Time List</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo e(url('pos')); ?>">
                            <i class="nc-icon nc-grid-45"></i>
                            <p>ตำเเหน่ง</p>
                        </a>
                    </li>
                      <li>
                          <a class="nav-link" href="<?php echo e(url('usersprofile')); ?>">
                              <i class="nc-icon nc-single-02"></i>
                              <p>พนักงาน</p>
                          </a>
                      </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(url('leave')); ?>">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>การขออนุมัติลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(url('record')); ?>">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>ประวัติการลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?php echo e(url('mac')); ?>">
                            <i class="nc-icon nc-circle"></i>
                            <p>Mac Address</p>
                        </a>
                    </li>
                    <li>
                      <a class="nav-link active" href="<?php echo e(url('status')); ?>">
                          <i class="nc-icon nc-refresh-02"></i>
                          <p>เปลี่ยนสถานะ</p>
                      </a>
                  </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="<?php echo e(url('upgrade.html')); ?>">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo e(url('pos')); ?>">เพิ่มตำเเหน่ง</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-grid-45"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(url('posup')); ?>">
                                    <span class="no-icon">เพิ่มพนักงานในตำเเหน่ง</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      <?php echo e(__('Logout')); ?>

                                  </a>

                                  <form id="logout-form" action="<?php echo e('logout'); ?>" method="POST" style="display: none;">
                                      <?php echo csrf_field(); ?>
                                  </form>
                              </div>
                          </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">เเก้ไขตำเเหน่งพนักงาน</h4>
                                    <p class="card-category">เเก้ไขตำเเหน่งพนักงาน</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                      <tbody>
                                        <form   method="POST" action="<?php echo e(action('PositionController@update',$id)); ?>"  enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-12 -pr-1">
                                                     <div class="row">
                                                     <?php $__currentLoopData = $ticket; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                     <div class="col-md-1 -pr-1">
                                                            <label for="exampleInputEmail1">id</label>
                                                                <input type="text" class="form-control"  value="<?php echo e($ticket2->id); ?>" readonly>
                                                            </div>
                                                            <div class="col-md-1 -pr-1">
                                                            <label for="exampleInputEmail1">idchief</label>
                                                                <input type="text" class="form-control"  value="<?php echo e($ticket2->idchief); ?>" readonly>
                                                            </div>
                                                            <div class="col-md-3 -pr-1">
                                                            <label for="exampleInputEmail1">ชื่อ นามสกุล</label>
                                                            <input type="text" class="form-control"  value="<?php echo e($ticket2->firstnamebem); ?>&nbsp;&nbsp;&nbsp;<?php echo e($ticket2->lastnamebem); ?>&nbsp;&nbsp;&nbsp;&nbsp; (<?php echo e($ticket2->nickname); ?>)" readonly>
                                                            </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="col-md-4 -pr-1">
                                                            <label for="exampleInputEmail1">ตำเเหน่ง</label>
                                                            <input type="text" class="form-control" name="position" value="<?php echo e($ticket2->position); ?>" required>
                                                            </div>
                                                            <div class="col-md-2 -pr-1">
                                                            <br>
                                                            <button type="submit" class="btn btn-info btn-fill pull-left">Sign in</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </tbody>
                                    </table>
                                    <input type="hidden" name="_method" value="PATCH" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav>
                        <ul class="footer-menu">
                            <li>
                                <a href="#">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Company
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Portfolio
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-center">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                            <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
                        </p>
                    </nav>
                </div>
            </footer>
        </div>
    </div>
    <!--   -->
    <!-- <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>

        <ul class="dropdown-menu">
			<li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="primary" data-off-color="primary"><span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple active" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>

            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-1.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-3.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="..//assets/img/sidebar-4.jpg" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="../assets/img/sidebar-5.jpg" alt="" />
                </a>
            </li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block btn-fill">Download, it's free!</a>
                </div>
            </li>

            <li class="header-title pro-title text-center">Want more components?</li>

            <li class="button-container">
                <div class="">
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block btn-fill">Get The PRO Version!</a>
                </div>
            </li>

            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>

            <li class="button-container">
				<button id="twitter" class="btn btn-social btn-outline btn-twitter btn-round sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-outline btn-facebook btn-round sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>
        </ul>
    </div>
</div>
 -->
</body>
<!--   Core JS Files   -->
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/plugins/chartist.min.js"></script>
<!--  Notificatons Plugin    -->
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo e(URL::to('/')); ?>/assets2/js/demo.js"></script>

</html>
<?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/hr/editpositionsup.blade.php ENDPATH**/ ?>