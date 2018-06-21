   @extends('master')
   @section('main_content')

        <?php
        // echo '<pre>';
      //  print_r($latest_blog);
       // exit();
           ?>

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

            <div id="templatemo_content">

                <?php  foreach ($all_blog as $all_blog) : ?>

                <div class="post_section">

                    <div class="post_date">
                        30<span>Nov</span>
                    </div>
                    <div class="post_content">

                        <h2><a href="{{\Illuminate\Support\Facades\URL::to('/blog-details/'.$all_blog->blog_id)}}"><?php echo $all_blog->blog_title; ?></a></h2>

                        <strong>Author:</strong><?php echo $all_blog->author_name; ?> <strong>Category:</strong> <a href="#"></a>


                        <a href="http://www.templatemo.com/page/1" target="_parent"><img width="100%" class="img-circle" src="{{ URL::asset($all_blog->blog_image) }}"></a>

                        <p><?php echo $all_blog->blog_short_description; ?></p>
                        <p> <?php echo $all_blog->blog_long_description; ?></p>
                        <p><a href="{{\Illuminate\Support\Facades\URL::to('/blog-details/'.$all_blog->blog_id)}}">Continue reading...</a>                </p>
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
                    <li><a href=""><?php echo  $all_published_category->category_name ?></a></li>
                    {{--<li><a href="index.html">Duis sed justo</a></li>--}}
                    {{--<li><a href="index.html">Mauris vulputate</a></li>--}}
                    {{--<li><a href="index.html">Nam auctor</a></li>--}}
                    {{--<li><a href="index.html">Aliquam quam</a></li>--}}
                </ul>
                <?php endforeach; ?>

                <div class="cleaner_h40"></div>

                <h4>Latest Blog</h4>
                <?php
                $latest_blog = DB::table('tbl_blog')
                    ->latest()
                   ->get();

                   ?>

                <?php foreach ($latest_blog as $latest_blogs): ?>
                <ul class="templatemo_list">
                    <li><?php echo $latest_blogs->blog_title;?></li>

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