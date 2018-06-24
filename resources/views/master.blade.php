

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BLOG</title>
    <meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
    <meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
    <link href="{{asset('public/front_end_asset/templatemo_style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('public/front_end_asset/css_pirobox/white/style.css')}}" media="screen" title="shadow" rel="stylesheet" type="text/css" />
    <!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
    <script type="text/javascript" src="{{asset('public/front_end_asset/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/front_end_asset/js/piroBox.1_2.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $().piroBox({
                my_speed: 600, //animation speed
                bg_alpha: 0.5, //background opacity
                radius: 4, //caption rounded corner
                scrollImage : false, // true == image follows the page, false == image remains in the same open position
                pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
                pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
                close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
                slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
                slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
            });
        });
    </script>
    <!--////// END  \\\\\\\-->


</head>
<body>

<div id="templatemo_top_wrapper">
    <div id="templatemo_top">

        <div id="templatemo_menu">

            <ul>
                <li><a href="{{URL::to('/')}}" class="current">Home</a></li>

                <li><a href="{{\Illuminate\Support\Facades\URL::to('/portfolio')}}">Portfolio</a></li>
                <li><a href="{{\Illuminate\Support\Facades\URL::to('/services')}}">Services</a></li>
                <li><a href="{{\Illuminate\Support\Facades\URL::to('/contact')}}">Contact Us</a></li>
                <li><a href="{{\Illuminate\Support\Facades\URL::to('/admin-login')}}">Admin Login</a></li>
            </ul>

        </div> <!-- end of templatemo_menu -->

        <div id="twitter">
            <a href="{{\Illuminate\Support\Facades\URL::to('/admin-login')}}">Admin Login</a>
        </div>

    </div>
</div>

<div id="templatemo_header_wrapper">
    <div id="templatemo_header">

        <div id="site_title">
            <h1><a href="http://www.templatemo.com" target="_parent"><strong>Nayan's Blog</strong><span>First project in Laravel</span></a></h1>
        </div>
        <div>

                {!! Form::open(['url'=>'/search-blog','method'=>'post']) !!}

                @csrf

                <input type="text" name="search"  class="form-control" placeholder="Search Blog">

            <button type="submit" class="btn btn-default">Search</button>
            {!! Form::close() !!}

        </div>

    </div>
</div>


@yield('main_content')


<div id="templatemo_footer">

    Copyright © 2048 <a href="index.html">Nayan Pal</a> |
    <a href="http://www.iwebsitetemplate.com" target="_parent">Dept Of CSE</a> by <a href="http://www.templatemo.com" target="_parent">IIUC</a>

</div>

<div align=center>Customised By  <a href='http://all-free-download.com/free-website-templates/'>Nayan Pal</a></div></body>
</html>