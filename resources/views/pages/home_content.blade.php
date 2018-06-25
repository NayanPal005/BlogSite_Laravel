   @extends('master')
   @section('main_content')
               <?php


               ?>

        <?php
        // echo '<pre>';
      //  print_r($latest_blog);
       // exit();
           ?>

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

            <div id="templatemo_content">

                <?php // foreach ($all_blog as $all_blog) : ?>
                <?php  foreach ($all_published_blog as $all_published_blog) : ?>

                <div class="post_section">

                    <div class="post_date">
                        30<span>Nov</span>
                    </div>
                    <div class="post_content">

                        <h2><a href="{{\Illuminate\Support\Facades\URL::to('/blog-details/'.$all_published_blog->blog_id)}}"><?php echo $all_published_blog->blog_title; ?></a></h2>

                        <strong>Author:</strong><?php echo $all_published_blog->author_name; ?> <strong>Category:</strong> <a href="#"></a>


                        <a href="http://www.templatemo.com/page/1" target="_parent"><img width="100%" class="img-circle" src="{{ URL::asset($all_published_blog->blog_image) }}"></a>

                        <p><?php echo $all_published_blog->blog_short_description; ?></p>
                        <p> <?php echo $all_published_blog->blog_long_description; ?></p>
                        <p><a href="{{\Illuminate\Support\Facades\URL::to('/blog-details/'.$all_published_blog->blog_id)}}">Continue reading...</a>                </p>
                    </div>
                    <div class="cleaner"></div>
                </div>

                <?php endforeach; ?>



            </div>


            <div id="templatemo_sidebar">

                <h4>Categories</h4>
                <?php

                //   print_r($all_category);
                   foreach ($all_published_category as $all_published_category):

                ?>

                <ul class="templatemo_list">
                    <li><a href="{{\Illuminate\Support\Facades\URL::to('/categorywise_blog/'.$all_published_category->category_id)}}"><?php echo  $all_published_category->category_name ?></a></li>

                </ul>
                <?php endforeach; ?>

                <div class="cleaner_h40"></div>

                <h4>Latest Blog</h4>
                <?php
                $latest_blog = DB::table('tbl_blog')
                    ->where('publication_status',1)
                    ->orderby('blog_id','desc')
                    ->limit(3)
                    ->get();


                   ?>


                <?php foreach ($latest_blog as $latest_blogs): ?>
                <ul class="templatemo_list">
                    <li><a href="{{\Illuminate\Support\Facades\URL::to('/blog-details/'.$latest_blogs->blog_id)}}"><?php echo $latest_blogs->blog_title;?></a></li>

                </ul>
                <?php endforeach; ?>

                <!-- =========================popular Blogs=============================-->
                <h4>Popular Blog</h4>
                <?php
                $popular_blog= \Illuminate\Support\Facades\DB::table('tbl_blog')
                ->orderBy('hit_counter','desc')
                    ->limit(5)
                ->get();


                ?>


                <?php foreach ($popular_blog as $popular_blog): ?>
                <ul class="templatemo_list">

                    <li><a href="{{\Illuminate\Support\Facades\URL::to('/blog-details/'.$popular_blog->blog_id)}}"><?php echo $popular_blog->blog_title;?></a></li>

                </ul>
                <?php endforeach; ?>

                <div id="ads">
                    <a href="#"><img src="{{asset('public/front_end_asset/images/templatemo_200x100_banner.jpg')}}" alt="banner 1" /></a>

                    <a href="#"><img src="{{asset('public/front_end_asset/images/templatemo_200x100_banner.jpg')}}" alt="banner 2" /></a>
                </div>

            </div>

            <div class="cleaner"></div>

        </div>

    </div>

    <div id="templatemo_main_bottom"></div>

</div>

      @endsection