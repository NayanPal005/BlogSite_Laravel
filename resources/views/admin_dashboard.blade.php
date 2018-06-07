

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>BlogSite by Nayan</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    <!-- start: CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link id="bootstrap-style" href="{{asset('public/admin_asset/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin_asset/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('public/admin_asset/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('public/admin_asset/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{asset('public/admin_asset/css/ie.css')}}" rel="stylesheet">
    <![endif]-->
    <!--[if IE 9]>
    <link id="ie9style" href="{{asset('public/admin_asset/css/ie9.css')}}" rel="stylesheet">
    <![endif]-->
    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{asset('public/admin_asset/img/favicon.ico')}}>">
    <!-- end: Favicon -->
</head>
<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="index.html"><span>Nayan's BLOG</span></a>


            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> Admin
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href=""><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href=""><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>

<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
            <div class="nav-collapse sidebar-nav">
                <ul class="nav nav-tabs nav-stacked main-menu">
                    <li><a href=""><i class="icon-bar-chart"></i><span class="hidden-tablet"> Dashboard</span></a></li>
                <!--   <li><a href=""><i class="icon-envelope"></i><span class="hidden-tablet"> Register Admin</span></a></li> -->
                    <!--<li><a href="admin-form"><i class="icon-envelope"></i><span class="hidden-tablet"> Register Admin</span></a></li>-->
                    <li><a href=""><i class="icon-envelope"></i><span class="hidden-tablet">Admin Registration</span></a></li>

                    <li><a href="{{\Illuminate\Support\Facades\URL::to('/add-blog')}}"><i class="icon-tasks"></i><span class="hidden-tablet">Add  Blog</span></a></li>

                    <li><a href="{{\Illuminate\Support\Facades\URL::to('/manage-blog')}}"><i class="icon-eye-open"></i><span class="hidden-tablet">Manage Blog</span></a></li>

                    <li><a href="{{url('add-category')}}"><i class="icon-dashboard"></i><span class="hidden-tablet"> Add Category</span></a></li>

                    <li><a href="manage-product"><i class="icon-dashboard"></i><span class="hidden-tablet"> Manage Post</span></a></li>



                    <li><a href="?>"><i class="icon-font"></i><span class="hidden-tablet">Manage Invoice</span></a></li>



                </ul>
            </div>
        </div>
        <!-- end: Main Menu -->


        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>
                <p>You  to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span10">


            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">Home</a>
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Dashboard</a></li>
            </ul>



            <div class="clearfix">

            </div>

@yield('main_content')

        <!--   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

            <footer>

                <p>
                    <span style="text-align:left;float:left">&copy; 2018 <a href="http://jiji262.github.io/Bootstrap_Metro_Dashboard/" alt="Bootstrap_Metro_Dashboard">Nayan Pal,CSE,IIUC.</a></span>

                </p>

            </footer>


            <!-- start: JavaScript-->

            <script src="{{asset('public/admin_asset/js/jquery-1.9.1.min.js')}}"></script>
            <script src="{{asset('public/admin_asset/js/jquery-migrate-1.0.0.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.ui.touch-punch.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/modernizr.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/bootstrap.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jjquery.cookie.js')}}"></script>

            <script src='{{asset('public/admin_asset/js/fullcalendar.min.js')}}'></script>

            <script src='{{asset('public/admin_asset/js/jquery.dataTables.min.js')}}'></script>

            <script src="{{asset('public/admin_asset/js/excanvas.js')}}"></script>
            <script src="{{asset('public/admin_asset/js/jquery.flot.js')}}"></script>
            <script src="{{asset('public/admin_asset/js/jquery.flot.pie.js')}}"></script>
            <script src="{{asset('public/admin_asset/js/jquery.flot.stack.js')}}"></script>
            <script src="{{asset('public/admin_asset/js/jquery.flot.resize.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.chosen.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.uniform.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.cleditor.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.noty.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.elfinder.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.raty.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.iphone.toggle.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.uploadify-3.1.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.gritter.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.imagesloaded.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.masonry.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.knob.modified.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jquery.sparkline.min.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/jcounter.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/retina.js')}}"></script>

            <script src="{{asset('public/admin_asset/js/custom.js')}}"></script>
            <!-- end: JavaScript-->

</body>
</html>
