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
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets2/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets2/img/sidebar-2.jpg">
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
                      <a class="nav-link" href="chief">
                          <i class="nc-icon nc-circle-09"></i>
                          <p>NewCompany</p>
                      </a>
                  </li>
                    <li>
                        <a class="nav-link" href="chief">
                            <i class="nc-icon nc-badge"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="tablech">
                            <i class="nc-icon nc-notes"></i>
                            <p>Time List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="usersprofilech">
                            <i class="nc-icon nc-single-02"></i>
                            <p>พนักงาน</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="leavech">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>การอนุมัติลา</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="canvassch">
                            <i class="nc-icon nc-align-left-2"></i>
                            <p>การขออนุมัติลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="recordch">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>ประวัติการลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="timestampch">
                            <i class="nc-icon nc-tap-01"></i>
                            <p>บันทึกเวลา</p>
                        </a>
                    </li>
                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="#">
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
                    <a class="navbar-brand" href="#pablo">การขออนุมัติลา</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-palette"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Account</span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="no-icon">Dropdown</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Log out</span>
                                </a>
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
                                    <h4 class="card-title">Striped Table with Hover</h4>
                                    <p class="card-category">Here is a subtitle for this table</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                        <form  method="POST" action="<?php echo e('letter'); ?>"  enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="container">
                                                <div class="row">
                                                        <div class="col-md">
                                                        </div>
                                                    <div class="col-md">
                                                        <h1  align = 'center'>ใบลา</h1>
                                                    </div>
                                                    <div class="col-md">
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="container">
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text"  class="col-md-2 col-form-label">เรื่อง</label>
                                                    <div class="col-md-10 pr-1">
                                                    <input type="text" class="form-control"   name="affair" id="affair" placeholder="affair" required autocomplete="affair" autofocus>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-2 pr-1"></div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-md-2 col-form-label">เรียน</label>
                                                    <div class="col-md-10 pr-1">
                                                    <input type="text" class="form-control"   name="head" id="head" placeholder="head" required autocomplete="head" autofocus>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-md-2 pr-1 col-form-label">ชื่อ</label>
                                                    <div class="col-md-8 pr-1">
                                                    <input type="text" class="form-control" value="<?php echo e($ticket->firstname); ?>"  name="firstname" id="inputPassword" readonly>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group row">
                                                        <label for="text" class="col-md-2 pr-1 col-form-label">นามสกุล</label>
                                                        <div class="col-md-8 pr-1">
                                                        <input type="text" class="form-control" value="<?php echo e($ticket->lastname); ?>" name="lastname" id="inputPassword" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-sm-2 col-form-label">ตำเเหน่ง</label>
                                                    <div class="col-md-8 pr-1">
                                                    <select class="form-control" name="position">
                                                            <?php $__currentLoopData = $position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticketp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option><?php echo e($ticketp->position); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-sm-2 col-form-label">ขอลา</label>
                                                    <div class="col-md-8 pr-1">
                                                      <select class="form-control" name="leave">
                                                            <?php $__currentLoopData = $leave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticketl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <option><?php echo e($ticketl->sickleave); ?></option>
                                                                <option><?php echo e($ticketl->personalleave); ?></option>
                                                                <option><?php echo e($ticketl->vacationleave); ?></option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </select>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 pr-1">
                                                    <div class="form-group row">
                                                        <label for="text" class="col-sm-2 col-form-label">เนื่องจาก</label>
                                                            <div class="col-md-8 pr-1">
                                                            <input type="text" class="form-control"  name="since" id="text">
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-sm-3 col-form-label">นับตั้งเเต่</label>
                                                    <div class="col-md-8 pr-1">
                                                    <input class="form-control" type="date" value="วว/ดด/ปป" id="example-date-input" name="date1" >
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col md-4 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-md-3 pr-1 col-form-label">ถึงวันที่</label>
                                                    <div class="col-md-8 pr-1">
                                                    <input class="form-control" type="date" value="วว/ดด/ปป" id="example-date-input" name="date2" >
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-4 pr">
                                                <div class="form-group row">
                                                    <label for="text" class="col-md-3 pr-1 col-form-label">มีกำหนด</label>
                                                    <div class="col-md-6 pr-1">
                                                        <input type="text" class="form-control" name="da" id="da">
                                                    </div>
                                                    <label for="text" class="col-md- pr-1 col-form-label">วัน</label>
                                                  </div>
                                                 </div>
                                              </div>
                                              <div class="row">
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-md-4 pr-1 col-form-label">ในระหว่างลาสมารถติดต่อข้าพเจ้าได้ที่</label>
                                                    <div class="col-md-8 pr-1">
                                                    <input type="text" class="form-control" name="address" id="address" placeholder="Address">
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <label for="text" class="col-md-2 pr-1 col-form-label">เบอร์ติดต่อ</label>
                                                    <div class="col-md-6 pr-1">
                                                    <input type="text" class="form-control" name="tel" value="<?php echo e($ticket->tel); ?>" id="tel">
                                                    </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                </div>
                                                <div class="col-md- pr-1">
                                                <div class="form-group">
                                                <input type="file" class="form-control" id="image"  name="image">
                                                </div>
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-info btn-fill pull-right">create Profile</button>
                                        </form>
                                        </tbody>
                                    </table>
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
<script src="assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets2/js/plugins/chartist.min.js"></script>
<!--  Notificatons Plugin    -->
<script src="assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets2/js/demo.js"></script>

</html>
<?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/chief/canvass.blade.php ENDPATH**/ ?>