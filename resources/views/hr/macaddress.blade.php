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
    <link href="assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets2/css/demo.css" rel="stylesheet" />
    <script>
      function confirmDelete(delUrl) {
        if (confirm("คุณแน่ใจหรือว่าต้องการลบ")) {
          document.location = delUrl;
        }
      }
    </script>
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
                    <li>
                        <a class="nav-link" href="hr">
                            <i class="nc-icon nc-chart-pie-35"></i>
                            <p>NewCompany</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="hr">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="table">
                            <i class="nc-icon nc-notes"></i>
                            <p>Time List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="pos">
                            <i class="nc-icon nc-grid-45"></i>
                            <p>ตำเเหน่ง</p>
                        </a>
                    </li>
                      <li>
                          <a class="nav-link" href="usersprofile">
                              <i class="nc-icon nc-single-02"></i>
                              <p>พนักงาน</p>
                          </a>
                      </li>
                    <li>
                        <a class="nav-link" href="leave">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>การขออนุมัติลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="record">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>ประวัติการลา</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="mac">
                            <i class="nc-icon nc-circle"></i>
                            <p>Mac Address</p>
                        </a>
                    </li>
                    <li>
                      <a class="nav-link active" href="status">
                          <i class="nc-icon nc-refresh-02"></i>
                          <p>เปลี่ยนสถานะ</p>
                      </a>
                  </li>
                    <li class="nav-item active">
                        <a class="nav-link active" href="upgrade.html">
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
                    <a class="navbar-brand" href="#pablo">MAC Address</a>
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
                                    <i class="nc-icon nc-circle"></i>
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
                                    <h4 class="card-title">Mac Address</h4>
                                    <p class="card-category">Mac Address</p>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                  @if (Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ session::get('success') }}
                                    </div>
                                @endif
                                                <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Mac Address</th>
                                            <th>name</th>
                                        </thead>
                                        <tbody>
                                          @foreach($addmac as $ticket)
                                            <tr>
                                                <td>{{$ticket->id}}</td>
                                                <td>{{$ticket->addmac}}</td>
                                                <td>{{$ticket->name}}</td>
                                                <td><a href="{{action('AddmacaddressController@edit',$ticket->id)}}" class="btn btn-info btn-fill pull-right" role="button" aria-pressed="true">Edit</a></td>
                                                <td><form  method="post" class="delete_form" action="{{action('AddmacaddressController@destroy',$ticket->id)}}">
                                                  {{ csrf_field() }}
                                                  <input type="hidden" name="_method" value="DELETE"/>
                                                  <button type="submit"  onclick="return confirm('คุณแน่ใจหรือว่าต้องการลบ')"  class="btn btn-danger">Delete</button>
                                                </form></td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                                <a href="newmac" class="btn btn-info btn-fill pull-right" role="button" aria-pressed="true">New MacAddress</a>
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
