<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forte | Freelance Dashboard</title>
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
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
            <span class="logo-mini"><b>FORTE</b> | Client</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>FORTE</b> | Client</span>
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
                            <i class="fa fa-user-circle"></i>
                            <span class="hidden-xs">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                    <i class="fa fa-user-circle-o fa-3x"></i>
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
                    <i style="color:white" class="fa fa-user-circle-o fa-4x"></i>
                </div>
                <div class="pull-right info ml-2">
                    <p>{{ Auth::user()->email }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div> --}}



            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu white" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <div class="ml-3">
                <li><i class="fa fa-user"></i> Customer : <span class="green"> {{$job['name']}}</span> </li> <br>
                <li><i class="fa fa-id-card"></i> Project # : <span class="green"> {{$job['project_id']}}</span> </li> <br>
                <li><i class="fa fa-id-card"></i> Project Type : <span class="green"> {{$job['job_type']}}</span> </li> <br>
                <li><i class="fa fa-id-card"></i> Due In : <span class="green"></span> </li> <br>
                </div>
                <li class="header">Actions</li>
                <li><a href="{{ route('project.unclaim',$job->id) }}"><i class="fa fa-sign-out"></i> <span>Unclaim Project</span></a></li>
                <li class="header">Audio / Video</li>
                <li class="audio">
                    <audio controls class="audio">
                    <source src="{{asset('storage/uploads/files/transcription.m4a')}}" type="audio/ogg">
                        <source src="horse.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                    </audio>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

    @include('inc.messages')
    <section class="content-header">
            <h1>
                Dashboard
                <small></small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/project"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"></li>
            </ol>
            <hr>
        </section>
    <div class="container-fluid mt-3">
        {!! Form::open(['action' => ['ProjectController@update', $job->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{ method_field('PATCH') }}
                <textarea name="body" id="article-ckeditor" cols="30" rows="10"></textarea>
                <input type="hidden" name="name" value="{{$job['name']}}">
                <input type="hidden" name="project_id" value="{{$job['project_id']}}">
                <input type="hidden" name="project_type" value="{{$job['project_type']}}">
                <input type="hidden" name="subject" value="{{$job['subject']}}">
                <input type="hidden" name="amount_per_minute" value="{{$job['amount_per_minute']}}">
                <input type="hidden" name="length" value="{{$job['length']}}">
                <input type="hidden" name="total_amount" value="{{$job['total_amount']}}">
                <input type="hidden" name="due_in" value="{{$job['due_in']}}">
                <input type="hidden" name="no_of_speakers" value="{{$job['no_of_speakers']}}">
                <input type="hidden" name="title" value="{{$job['title']}}">
                <input type="hidden" name="instructions" value="{{$job['instructions']}}">
                <input type="hidden" name="job_type" value="{{$job['job_type']}}">
                <input type="hidden" name="file_name" value="{{$job['file_name']}}">

                {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
            {!! Form::close() !!}
    </div>





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
