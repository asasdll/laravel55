<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo e('leave'); ?></title>
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL::to('/')); ?>/img/imgback/icon1.jpg"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets2/css/demo.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  
        <script type="text/javascript">


        // Show function
            $(document).on('click', '.show-modal', function() {
            $('#show').modal('show');
            $('#i').text($(this).data('id'));
            $('#af').text($(this).data('affair'));
            $('#he').text($(this).data('head'));
            $('#fi').text($(this).data('lea_fname'));
            $('#la').text($(this).data('lea_lname'));
            $('#pt').text($(this).data('position'));
            $('#le').text($(this).data('leave'));
            $('#si').text($(this).data('since'));
            $('#dt1').text($(this).data('date1'));
            $('#dt2').text($(this).data('date2'));
            $('#d').text($(this).data('da'));
            $('#ad').text($(this).data('address'));
            $('#t').text($(this).data('tel'));
            $('#sc').text($(this).data('status_chief'));
            $('#st1').text($(this).data('status_text1'));
            $('#sh').text($(this).data('status_hr'));
            $('#st2').text($(this).data('status_text2'));
            $('.exampleModal').text('Show Post');
            });

            // function Edit POST
            $(document).on('click', '.edit-modal', function() {
            $('#footer_action_button').text(" Update Post");
            $('#footer_action_button').addClass('glyphicon-check');
            $('#footer_action_button').removeClass('glyphicon-trash');
            $('.actionBtn').addClass('btn-success');
            $('.actionBtn').removeClass('btn-danger');
            $('.actionBtn').addClass('edit');
            $('.modal-title').text('การอนุมัติ');
            $('.deleteContent').hide();
            $('.form-horizontal').show();
            $('#fid').val($(this).data('id'));
            $('#t').val($(this).data('status_chief'));
            $('#b').val($(this).data('status_text1'));
            $('#myModal').modal('show');
            });

            $('.modal-footer').on('click', '.edit', function() {
            $.ajax({
                type: 'POST',
                url: 'editPost',
                data: {
            '_token': $('input[name=_token]').val(),
            'id': $("#fid").val(),
            'status_chief': $('#t').val(),
            'status_text1': $('#b').val()
                },
            success: function(data) {
                $('.post' + data.id).replaceWith(" "+
                "<tr class='post" + data.id + "'>"+
                "<td>" + data.id + "</td>"+
                "<td>" + data.status_chief + "</td>"+
                "<td>" + data.status_text1 + "</td>"+
                "<td>" + data.created_at + "</td>"+
            "<td><button class='show-modal btn btn-info btn-sm' data-id='" + data.id + "' data-status_chief='" + data.status_chief + "' data-status_text1='" + data.status_text1 + "'><span class='fa fa-eye'></span></button> <button class='edit-modal btn btn-warning btn-sm' data-id='" + data.id + "' data-status_chief='" + data.status_chief + "' data-status_text1='" + data.status_text1 + "'><span class='glyphicon glyphicon-pencil'></span></button> <button class='delete-modal btn btn-danger btn-sm' data-id='" + data.id + "' data-status_chief='" + data.status_chief + "' data-status_text1='" + data.status_text1 + "'><span class='glyphicon glyphicon-trash'></span></button></td>"+
                "</tr>");
                }
            });
            });

        </script>
        <style>
        /*-----font ----*/
         b {
                font-weight: lighter;
            }

            label {
                font-weight: lighter;
            }
        #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
        }

        #myImg:hover {opacity: 0.7;}

        /* The Modal (background) */
            /* The Modal (background) */
            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.3); /* Black w/ opacity */
            }

        /* Modal Content (image) */
        .modal-content {
            margin: auto;
            width: 100%;
            max-width: 1300px;
        }

        /* Caption of Modal Image */
        #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
        }

        /* Add Animation */
        .modal-content, #caption {  
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
        }

        @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)} 
        to {-webkit-transform:scale(1)}
        }

        @keyframes  zoom {
        from {transform:scale(0)} 
        to {transform:scale(1)}
        }

        /* The Close Button */
        .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
        }

        .close:hover,
        .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media  only screen and (max-width: 700px){
        .modal-content {
            width: 100%;
        }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets2/img/sidebar-4.jpg">
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
                      <a class="nav-link" href="VH">
                          <i class="nc-icon nc-circle-09"></i>
                          <p>NewCompany</p>
                      </a>
                  </li>
                    <li>
                        <a class="nav-link" href="VH">
                            <i class="nc-icon nc-badge"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="tablepe">
                            <i class="nc-icon nc-notes"></i>
                            <p>Time List</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="leave3">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>ผลการอนุมัติลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="leave2">
                            <i class="nc-icon nc-align-left-2"></i>
                            <p>การขออนุมัติลา</p>
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
                    <a class="navbar-brand" href="#pablo"> การขออนุมัติลา </a>
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
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-align-left-2"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-refresh-02"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nc-icon nc-zoom-split"></i>
                                    <span class="d-lg-block">&nbsp;Search</span>
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
            <!-----End Navbar---->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">กำลังรอการอนุมัติ</h4>
                                    <p class="card-category">กำลังรอการอนุมัติ</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                    <thead>
                                            <th>id</th>
                                            <th>เรื่อง</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>ชื่อเล่น</th>
                                            <th>ประเภทการลา</th>
                                            <th>Image</th>
                                            <th>ผลการอนุมัติ</th>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $leave; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ticket1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($ticket1->id); ?></td>
                                                <td><?php echo e($ticket1->affair); ?></td>
                                                <td><?php echo e($ticket1->lea_fname); ?></td>
                                                <td><?php echo e($ticket1->lea_lname); ?></td>
                                                <td><?php echo e($ticket1->lea_niname); ?></td>
                                                <td><?php echo e($ticket1->leave); ?></td>
                                                <td>
                                                    <div id="image">
                                                        <a href="#modal" data-toggle="modal" data-target="#modalimage">
                                                            <img id="myImg" src="<?php echo e(URL::to('/')); ?>/img/file/<?php echo e($ticket1->image); ?>" width="30px" height="30px"/>
                                                        </a>
                                                    </div>
                                              </td>  
                                                <td><label style="color:#0000FF">กำลังรอการอนุมัติ</label></td>
                                                <td><a class="show-modal btn btn-info btn-fill pull-right"  href="#" 
                                                    data-id="<?php echo e($ticket1->id); ?>" data-affair="<?php echo e($ticket1->affair); ?>" data-head="<?php echo e($ticket1->fname); ?>&nbsp;&nbsp;&nbsp;<?php echo e($ticket1->lname); ?>&nbsp;&nbsp;&nbsp;(<?php echo e($ticket1->niname); ?>)" 
                                                    data-lea_fname="<?php echo e($ticket1->lea_fname); ?>" data-lea_lname="<?php echo e($ticket1->lea_lname); ?>&nbsp;&nbsp;&nbsp;(<?php echo e($ticket1->lea_niname); ?>)" data-position="<?php echo e($ticket1->position); ?>"
                                                    data-leave="<?php echo e($ticket1->leave); ?>" data-since="<?php echo e($ticket1->since); ?>" data-date1="<?php echo e($ticket1->date1); ?>" data-date2="<?php echo e($ticket1->date2); ?>"
                                                    data-da="<?php echo e($ticket1->da); ?>" data-address="<?php echo e($ticket1->address); ?>" data-tel="<?php echo e($ticket1->tel); ?>" data-toggle="modal" data-target="#exampleModal">View</a></td>
                                                <td><a href="#" class="edit-modal btn btn-success btn-fill pull-right" data-id="<?php echo e($ticket1->id); ?>" data-status_chief="<?php echo e($ticket1->status_chief); ?>" data-status_text1="<?php echo e($ticket1->status_text1); ?>"
                                                data-toggle="modal" data-target="#myModal">อนุมัติ</a>
                                                </a></td>
                                            </tr>
                                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">ผลการอนุมัติ</h4>
                                    <p class="card-category">ผลการอนุมัติ</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <th>id</th>
                                            <th>เรื่อง</th>
                                            <th>ชื่อ</th>
                                            <th>นามสกุล</th>
                                            <th>ประเภทการลา</th>
                                            <th>Image</th>
                                            <th>ผลการอนุมัติ</th>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                        <tbody>
                                        
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
            <!-- Modal show-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ข้อมูลการขออนุมัติลา</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                            <label for="">ID :</label>
                               <b id="i"/>
                            </div>
                            <div class="form-group">
                                <label for="">เรื่อง :</label>
                               <b id="af"/>
                            </div>
                            <div class="form-group">
                                <label for="">ชื่อหัวหน้า :</label>
                                <b id="he"/>
                            </div>
                            <div class="form-group">
                                <label for="">ชื่อ นามสกุล :</label>
                                <a-l><b id="fi"/></a-l><a-l>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b id="la"/></a-l>
                            </div>
                            <div class="form-group">
                                <label for="">ตำเเหน่ง :</label>
                               <b id="pt"/>
                            </div>
                            <div class="form-group">
                                <label for="">ประเภทการ :</label>
                                <b id="le"/>
                            </div>
                            <div class="form-group">
                                <label for="">เนื่่องจาก :</label>
                                <b id="si"/>
                            </div>
                            <div class="form-group">
                                <label for="">ตั้งเเต่- จนถึง :</label>
                                <a-l><b id="dt1"/></a-l><a-l>&nbsp;&nbsp;ถึง&nbsp;&nbsp;<b id="dt2"/></a-l>
                            </div>
                            <div class="form-group">
                                <label for="">ลาทั้งหมด :</label>
                                <b id="d"/>
                                <label for=""> วัน </label>
                            </div>
                            <div class="form-group">
                                <label for="">ที่อยุ่ขณะที่ลา :</label>
                                <b id="ad"/>
                            </div>
                            <div class="form-group">
                                <label for="">เบอร์ติดต่อ :</label>
                                <b id="t"/>
                            </div>
                        </div>
                </div>
            </div>
            </div>
        <!---END-- Modal -->
        </div>
    <!-- Modal Form Edit and Delete Post -->
    <div id="myModal"class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
            <form class="form-horizontal" role="modal">
            <div class="form-group">
                <label class="control-label col-sm-2"for="id">ID</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="fid" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4"for="title">การอนมุมัติ</label>
                <div class="col-sm-10">
                <select class="form-control" class="form-control" id="t">
                <option>อนุมัติ</option>
                <option>ไม่อนุมัติ</option>
                </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-4"for="body">หมายเหตุ</label>
                <div class="col-sm-10">
                <textarea type="name" class="form-control" id="b"></textarea>
                </div>
            </div>
            </form>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn actionBtn" data-dismiss="modal">
          <span id="footer_action_button" class="glyphicon"></span>
        </button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">
          <span class="glyphicon glyphicon"></span>close
        </button>
      </div>
    </div>
  </div>
</div></div>
        <div> 
           <div class="modal fade " id="modalimage" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                       <img  class="modal-img"/>
                    </div>
               </div>
            </div>
        </div>
<!--   Core JS Files   -->>
</div>
</body>
<!--   Core JS Files   -->
<script>
    $(function(){
    $("#image img").on("click",function(){
        var src = $(this).attr("src");
        $(".modal-img").prop("src",src);
    })
    })

    $(function () {
    // when the modal is closed
    $('#modal-container').on('hidden.bs.modal', function () {
        // remove the bs.modal data attribute from it
        $(this).removeData('bs.modal');
        // and empty the modal-content element
        $('#modal-container .modal-content').empty();
    });
});
    $('#prepare-quote').on('shown.bs.modal', function () {
        $(this).removeData('bs.modal');
    });
</script>
<script src="assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="assets2/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets2/js/demo.js"></script>

</html>
<?php /**PATH C:\xampp\htdocs\project\laravel\resources\views/chief/leave.blade.php ENDPATH**/ ?>