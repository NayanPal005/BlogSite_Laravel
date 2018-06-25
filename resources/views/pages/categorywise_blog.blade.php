@extends('master')
@section('main_content')

    <?php
//       echo '<pre>';
//        print_r($categorywise_blog);
//     exit();
    ?>

    <div id="templatemo_main_wrapper">
        <div id="templatemo_main">
            <div id="templatemo_main_top">

                <div id="templatemo_content">


                    <?php foreach ($categorywise_blog as $categorywise_blog): ?>
                    <div class="post_section">

                        <div class="post_date">
                            30<span>Nov</span>
                        </div>
                        <div class="post_content">

                            <h2><a href=""><?php echo $categorywise_blog ->blog_title?></a></h2>

                            <strong>Author:</strong><?php echo $categorywise_blog->author_name; ?> <strong>Category:</strong> <a href="#"></a>


                            <a href="http://www.templatemo.com/page/1" target="_parent"><img width="100%" class="img-circle" src="{{ URL::asset($categorywise_blog->blog_image) }}"></a>

                            <p><?php echo $categorywise_blog->blog_short_description; ?></p>
                            <p> <?php echo $categorywise_blog->blog_long_description; ?></p>

                        </div>


                    </div>

                    <?php endforeach; ?>


                </div>


                <div id="templatemo_sidebar">

                    <div id="templatemo_sidebar">


                    </div>

                </div>

                <div class="cleaner">

                </div>


            </div>

        </div>

        <div id="templatemo_main_bottom"></div>



    </div>

@endsection