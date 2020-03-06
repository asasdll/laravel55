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
    <title>{{  'leave' }}</title>
      <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('/') }}/img/imgback/icon1.jpg" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets2/css/demo.css" rel="stylesheet" />
</head>

<body>

            <style>
                        h1 {
                            color: Black;
                            text-align: center;
                            font-size: 200%;
                            

                        }
                        label {
                            color: Black;
                            text-align: center;
                        }
            </style>
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
                        <a class="nav-link" href="tablech">
                            <i class="nc-icon nc-notes"></i>
                            <p>Time List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="leave3">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>ผลการอนุมัติลา</p>
                        </a>
                    </li>
                    <li class="nav-item active">
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
                    <a class="navbar-brand" href="#pablo">การขออนุมัติลา </a>
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{'logout'}}" method="POST" style="display: none;">
                                        @csrf
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
                                    <h4 class="card-title">การขออนุมัติลา</h4>
                                    <p class="card-category">การขออนุมัติลา</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <tbody>
                                        <form  method="POST" action="{{'letter'}}"  enctype="multipart/form-data">
                                        @csrf
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
                                                    <select class="form-control" name="head">
                                                            @foreach($boss as $boss1)
                                                            <option value="{{$boss1->idchief}}">{{$boss1->fname}}&nbsp;&nbsp;{{$boss1->lname}}&nbsp;&nbsp;&nbsp;({{$boss1->niname}})</option>
                                                                @endforeach
                                                      </select>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                <div class="col-md-2 pr-1">
                                                </div>
                                                @foreach($status as $ticket)
                                                <div class="row">
                                                <div class="col-md-4 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-sm-3 col-form-label">ชื่อ</label>
                                                    <div class="col-md-8 pr-1">
                                                    <input class="form-control" type="text" value="{{$ticket->firstnamebem}}" id="example-date-input" name="lea_fname" >
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col md-4 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-md-3 pr-1 col-form-label">นามสกลุ</label>
                                                    <div class="col-md-8 pr-1">
                                                    <input class="form-control" type="text" value="{{$ticket->lastnamebem}}" id="example-date-input" name="lea_lname" >
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-4 pr">
                                                <div class="form-group row">
                                                    <label for="text" class="col-md-3 pr-1 col-form-label">ชื่อเล่น</label>
                                                    <div class="col-md-6 pr-1">
                                                    <input class="form-control" type="text" value="{{$ticket->nickname}}" id="example-date-input" name="lea_niname" >
                                                    </div>
                                                  </div>
                                                 </div>
                                              </div>
                                              </div>
                                            @endforeach
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-sm-2 col-form-label">ตำเเหน่ง</label>
                                                    <div class="col-md-8 pr-1">
                                                    <select class="form-control" name="position">
                                                            @foreach($position as $ticketp)
                                                            <option>{{$ticketp->position}}</option>
                                                                @endforeach
                                                      </select>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6 pr-1">
                                                <div class="form-group row">
                                                    <label for="text" class="col-sm-2 col-form-label">ขอลา</label>
                                                    <div class="col-md-8 pr-1">
                                                      <select class="form-control" name="leave">
                                                            @foreach($leave as $ticketl)
                                                                <option>{{$ticketl->sickleave}}</option>
                                                                <option>{{$ticketl->personalleave}}</option>
                                                                <option>{{$ticketl->vacationleave}}</option>
                                                                @endforeach
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
                                                @foreach($status as $ticket)
                                                    <label for="text" class="col-md-2 pr-1 col-form-label">เบอร์ติดต่อ</label>
                                                    <div class="col-md-6 pr-1">
                                                    <input type="text" class="form-control" name="tel" value="{{$ticket->tel}}" id="tel">
                                                    </div>
                                                    @endforeach
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>
