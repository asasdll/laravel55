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
    <link href="{{ URL::to('/') }}/assets2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ URL::to('/') }}/assets2/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ URL::to('/') }}/assets2/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-image="{{ URL::to('/') }}/assets2/img/sidebar-5.jpg">
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
                      <a class="nav-link" href="{{url('hr')}}">
                          <i class="nc-icon nc-circle-09"></i>
                          <p>NewCompany</p>
                      </a>
                  </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('hr')}}">
                            <i class="nc-icon nc-badge"></i>
                            <p>Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('table')}}">
                            <i class="nc-icon nc-notes"></i>
                            <p>Time List</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="usersprofile">
                            <i class="nc-icon nc-single-02"></i>
                            <p>พนักงาน</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('leave')}}">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>การขออนุมัติลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('record')}}">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>ประวัติการลา</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('mac')}}">
                            <i class="nc-icon nc-circle"></i>
                            <p>Mac Address</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{url('status')}}">
                            <i class="nc-icon nc-refresh-02"></i>
                            <p>เปลี่ยนสถานะ</p>
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
                    <a class="navbar-brand" href="newcompany"> Company </a>
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
                                    <i class="nc-icon nc-notes"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ ('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ url('logout')}}" method="POST" style="display: none;">
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
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                  <form id="form1" name="form1"  action="" method="POST" action="{{action('NewcompaniesController@update', $id)}}"  enctype="multipart/form-data">
                                      @csrf
                                        <div class="form">
                                          <div class="row">
                                            <div class="col-md-5 pr-1">
                                                <div class="form-group">
                                                    <label>Company (Code)</label>
                                                    <input type="text" class="form-control" disabled="" placeholder="Company" value="{{$ticket->newcode}}">
                                                </div>
                                            </div>
                                          <div class="col-md-7 pr-1">
                                          <div class="form-group">
                                            <label for="inputEmail4">ชื่อบริษัท</label>
                                            <input id="name" type="text" class="form-control is-invalid @error('companyname') is-invalid @enderror" name="companyname" value="{{$ticket->companyname}}" placeholder="CompanyName" required autocomplete="companyname" autofocus>
                                            @error('companyname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message}}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                        </div>
                                          <div class="row">
                                              <div class="col-md-6 pr-1">
                                                  <div class="form-group">
                                                      <label>ชื่อ</label>
                                                      <input type="text" class="form-control is-invalid @error('firstname') is-invalid @enderror" placeholder="firstname"  name="firstname" value="{{$ticket->firstname}}"  required autocomplete="firstname" autofocus>
                                                      @error('firstname')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message}}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-6 pl-1">
                                                  <div class="form-group">
                                                      <label>นามสกุล</label>
                                                      <input type="text" class="form-control is-invalid @error('lastname') is-invalid @enderror" placeholder="LastName" name="lastname" value="{{$ticket->lastname}}" required autocomplete="lastname" autofocus>
                                                      @error('lastname')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message}}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-md-6 pr-1">
                                                  <div class="form-group">
                                                      <label>เบอร์ติดต่อ</label>
                                                      <input type="text"  onkeyup="autoTab(this)" class="form-control is-invalid @error('tel') is-invalid @enderror" placeholder="Tel"  name="tel"  value="{{$ticket->tel}}"   required autocomplete="firstname" autofocus>
                                                      @error('tel')
                                                          <span class="invalid-feedback" role="alert">
                                                            <font color="red">{{"กรุณากรอก ตัวเลข เท่านั้น"}}</font>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-6 pl-1">
                                                  <div class="form-group">
                                                      <label>เบอร์บริษัท</label>
                                                      <input type="text"  onkeyup="autoTab2(this)" class="form-control is- @error('tel') is-invalid @enderror " placeholder="tel2" value="{{$ticket->tel2}}" name="tel2"  autocomplete="tel2" autofocus>
                                                      @error('tel2')
                                                          <span class="invalid-feedback" role="alert">
                                                              <font color="red">{{"กรุณากรอก ตัวเลข เท่านั้น"}}</font>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                        <div class="col-md- pr-1">
                                          <div class="form-group">
                                            <label for="inputPassword4">ที่อยู่</label>
                                            <input id="name" type="text" class="form-control is-invalid @error('address') is-invalid @enderror" name="address" placeholder="Address"  value="{{$ticket->address}}" required autocomplete="address" autofocus>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message}}</strong>
                                                </span>
                                            @enderror
                                          </div>
                                        </div>
                                          <div class="row">
                                              <div class="col-md-6 pr-1">
                                                  <div class="form-group">
                                                      <label>จังหวัด</label>
                                                      <input type="text" class="form-control is-invalid @error('city') is-invalid @enderror" placeholder="City"  name="city" value="{{$ticket->city}}" required autocomplete="city" autofocus>
                                                      @error('city')
                                                          <span class="invalid-feedback" role="alert">
                                                              <strong>{{ $message}}</strong>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                              <div class="col-md-6 pl-1">
                                                  <div class="form-group">
                                                      <label>รหัสไปรษณีย์</label>
                                                      <input type="text" class="form-control is-invalid @error('postalcode') is-invalid @enderror" placeholder="ZIP Code" name="postalcode" value="{{$ticket->postalcode}}" required autocomplete="postalcode" autofocus>
                                                      @error('postalcode')
                                                          <span class="invalid-feedback" role="alert">
                                                                <font color="red">{{'ตรวจสอบ รหัสไปรษณีย์ อีกครั้ง'}}</frot>
                                                          </span>
                                                      @enderror
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleFormControlFile1">Uplode image</label>
                                            <input type="file" class="form-control" id="image"  name="image">
                                          </div>
                                        <button type="submit" class="btn btn-info btn-fill pull-right">create Profile</button>
                                        <div class="clearfix"></div>
                                          <input type="hidden" name="_method" value="PATCH" />
                                    </form>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-4  pl-1">
                            <div class="card card-user">
                                <div class="card-image">
                                      <img src="{{ URL::to('/') }}/img/imgback/large_2.jpg" alt="...">
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">

                                           <img class="avatar border-gray" src="{{ URL::to('/') }}/img/profile/{{$ticket->image}}" alt="...">

                                           <h5 class="title">{{$ticket->companyname}}</h5>
                                       </a>
                                       <p class="description">
                                                <font color="primary"> {{$ticket->newcode}}</font>
                                       </p>
                                   </div>
                                   <p class="description text-center">
                                     {{$ticket->firstname}}   {{$ticket->lastname}}
                                       <br>Tel- {{$ticket->tel}}
                                       <br>Tel- {{$ticket->tel2}}
                                       <br> {{$ticket->address}}
                                       <br> {{$ticket->city}}  {{$ticket->postalcode}}
                                   </p>

                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-facebook-square"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-twitter"></i>
                                    </button>
                                    <button href="#" class="btn btn-simple btn-link btn-icon">
                                        <i class="fa fa-google-plus-square"></i>
                                    </button>
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
     <script type="text/javascript">
    function autoTab(obj){
        /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
        หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
        4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
        รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
        หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
        ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
        */
            var pattern=new String("___-____-____"); // กำหนดรูปแบบในนี้
            var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
            var returnText=new String("");
            var obj_l=obj.value.length;
            var obj_l2=obj_l-1;
            for(i=0;i<pattern.length;i++){
                if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){
                    returnText+=obj.value+pattern_ex;
                    obj.value=returnText;
                }
            }
            if(obj_l>=pattern.length){
                obj.value=obj.value.substr(0,pattern.length);
            }
    }
    </script>
    <script type="text/javascript">
    function autoTab2(obj){
       /* กำหนดรูปแบบข้อความโดยให้ _ แทนค่าอะไรก็ได้ แล้วตามด้วยเครื่องหมาย
       หรือสัญลักษณ์ที่ใช้แบ่ง เช่นกำหนดเป็น  รูปแบบเลขที่บัตรประชาชน
       4-2215-54125-6-12 ก็สามารถกำหนดเป็น  _-____-_____-_-__
       รูปแบบเบอร์โทรศัพท์ 08-4521-6521 กำหนดเป็น __-____-____
       หรือกำหนดเวลาเช่น 12:45:30 กำหนดเป็น __:__:__
       ตัวอย่างข้างล่างเป็นการกำหนดรูปแบบเลขบัตรประชาชน
       */
           var pattern=new String("_-____-____"); // กำหนดรูปแบบในนี้
           var pattern_ex=new String("-"); // กำหนดสัญลักษณ์หรือเครื่องหมายที่ใช้แบ่งในนี้
           var returnText=new String("");
           var obj_l=obj.value.length;
           var obj_l2=obj_l-1;
           for(i=0;i<pattern.length;i++){
               if(obj_l2==i && pattern.charAt(i+1)==pattern_ex){
                   returnText+=obj.value+pattern_ex;
                   obj.value=returnText;
               }
           }
           if(obj_l>=pattern.length){
               obj.value=obj.value.substr(0,pattern.length);
           }
    }
    </script>
</body>
<!--   Core JS Files   -->
<script src="{{ URL::to('/') }}/assets2/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="{{ URL::to('/') }}/assets2/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ URL::to('/') }}/assets2/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ URL::to('/') }}/assets2/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="{{ URL::to('/') }}/assets2/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ URL::to('/') }}/assets2/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="{{ URL::to('/') }}/assets2/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ URL::to('/') }}/assets2/js/demo.js"></script>

</html>
