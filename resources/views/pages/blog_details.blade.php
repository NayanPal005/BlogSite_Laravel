@extends('master')
@section('main_content')

    <?php
//      echo '<pre>';
//      print_r($blog_infoupdate);
//    exit();
    ?>

    <div id="templatemo_main_wrapper">
        <div id="templatemo_main">
            <div id="templatemo_main_top">

                <div id="templatemo_content">



                    <div class="post_section">

                        <div class="post_date">
                            30<span>Nov</span>
                        </div>
                        <div class="post_content">

                            <h2><a href=""><?php echo $blog_infoupdate->blog_title?></a></h2>

                            <strong>Author:</strong><?php echo $blog_infoupdate->author_name; ?> <strong>Category:</strong> <a href="#"></a>


                            <a href="http://www.templatemo.com/page/1" target="_parent"><img width="100%" class="img-circle" src="{{ URL::asset($blog_infoupdate->blog_image) }}"></a>

                            <p><?php echo $blog_infoupdate->blog_short_description; ?></p>
                            <p> <?php echo $blog_infoupdate->blog_long_description; ?></p>

                        </div>


                    </div>


                </div>


                        <div id="templatemo_sidebar">

                            <form action="" method="post">
                                Subject: <input type="text" name="subject"><br/>
                                Comment: <textarea name="body" placeholder="Your Comment Here"></textarea><br/>
                                <input type="submit" value="Send">
                            </form>


                        </div>

                        <div class="cleaner">

                        </div>


        </div>

        </div>

        <div id="templatemo_main_bottom"></div>



    </div>

@endsection