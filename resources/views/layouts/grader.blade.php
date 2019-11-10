<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forte | Grader Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('css/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/bower_components/font-awesome/css/font-awesome.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/dist/css/AdminLTE.min.css')}}">
    {{--  Favicon  --}}
    <link rel='icon' href='{{ url ('storage/images/logo/fav.png') }}' type='image/x-icon' sizes="32x32" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/dist/css/skins/_all-skins.min.css')}}">
    {{--css--}}
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
    {{-- Print --}}
    <script type="text/javascript" src="js/jquery.printPage.js"></script>

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/freelance" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>FORTE</b> | Grader</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>FORTE</b> | Grader</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <li class="dropdown messages-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope-o"></i>
                            <span class="label label-success"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Message Center</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- start message -->
                                        <a href="#">

                                        </a>
                                    </li>
                                    <!-- end message -->

                                </ul>
                            </li>
                            <li class="footer"><a href="#">&copy; KVTC</a></li>
                        </ul>
                    </li>

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ asset('storage/uploads/avatars/'.Auth::user()->avatar) }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{ asset('storage/uploads/avatars/'.Auth::user()->avatar) }}" class="img-circle" alt="User Image">
                                <p>
                                    <small>Member since {{Auth::user()->created_at}} </small>
                                    <small>Logged in as: {{Auth::user()->role}} </small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a class="btn btn-danger btn-flat " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }} ( {{ Auth::user()->name }} )
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button -->

                </ul>
            </div>
        </nav>
    </header>







    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left ">
                    <img src="{{ asset('storage/uploads/avatars/'.Auth::user()->avatar) }}" class="img-circle profile" alt="User Image">
                </div>
                <div class="pull-right info ml-2">
                    <p>{{ Auth::user()->email }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>



            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li><a href="/grader"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                <li class="header">JOBS</li>
                <li><a href="/jobs/submitted"><i class="fa fa-list-alt"></i> <span>Submitted Jobs</span></a></li>
                <li><a href="/jobs/graded"><i class="fa fa-list"></i> <span>My Graded Jobs</span></a></li>
                <li class="header">ACCOUNT INFORMATION</li>
                <li><a href="/secretary"><i class="fa fa-bank"></i> <span>My Account</span></a></li>
                <li><a href="/client/paid_projects"><i class="fa fa-money"></i> <span>My Earnings</span></a></li>
                <li class="header">PROFILE INFORMATION</li>
                <li><a href="/grader/profile"><i class="fa fa-user-o"></i> <span>Update Profile</span></a></li>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('inc.messages')
        @yield('content')

        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace('article-ckeditor');
        </script>
        <script>
            var data = CKEDITOR.instances.editor1.getData();

            // Your code to save "data", usually through Ajax.
        </script>

        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <section class="content">


        </section>
    </div>

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>FORTE</b>
        </div>
        <strong>Copyright &copy; 2018-<?= date('Y');?> </strong> All rights
        reserved.
    </footer>


    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{asset('js/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('js/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('js/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Slimscroll -->
    <script src="{{asset('js/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{asset('js/dist/js/adminlte.min.js')}}"></script>

<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "252197102123723", // Facebook page ID
            whatsapp: "+254728515189", // WhatsApp number
            call_to_action: "Message us", // Call to action
            button_color: "#A8CE50", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp,facebook", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->

<script>
       $(function() {
    $("#num1, #num2").on("keydown keyup", sum);
 function sum() {
 $("#sum").val(Number($("#num1").val()) + Number($("#num2").val()));
 $("#subt").val(Number($("#num1").val()) - Number($("#num2").val()));
 }
});
    </script>
</body>
</html>
