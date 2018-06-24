@extends('master')
@section('main_content')

    <?php
//        echo '<pre>';
//      print_r($search_result);
//     exit();
    ?>

    <div id="templatemo_main_wrapper">
        <div id="templatemo_main">
            <div id="templatemo_main_top">

                <div id="templatemo_content">


                      <?php foreach ($search_result as $search_result) : ?>
                    <div class="post_section">

                        <div class="post_date">
                            30<span>Nov</span>
                        </div>
                        <div class="post_content">

                            <h2><a href=""><?php echo $search_result->blog_title;?></a></h2>

                            <strong>Author:</strong><?php echo $search_result->author_name; ?> <strong>Category:</strong> <a href="#"></a>


                            <a href="http://www.templatemo.com/page/1" target="_parent"><img width="100%" class="img-circle" src="{{ URL::asset($search_result->blog_image) }}"></a>

                            <p><?php echo $search_result->blog_short_description; ?></p>
                            <p> <?php echo $search_result->blog_long_description; ?></p>

                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

                <div id="templatemo_sidebar">



                </div>

                <div class="cleaner"></div>


            </div>

        </div>

        <div id="templatemo_main_bottom"></div>


    </div>

@endsection