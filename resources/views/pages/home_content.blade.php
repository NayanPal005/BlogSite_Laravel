@extends('master')
@section('main_content')


<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

            <div id="templatemo_content">

                <div class="post_section">

                    <div class="post_date">
                        30<span>Nov</span>
                    </div>
                    <div class="post_content">

                        <h2><a href="blog_post.html">Aliquam lorem ante dapibus</a></h2>

                        <strong>Author:</strong> Steven | <strong>Category:</strong> <a href="#">PSD</a>, <a href="#">Templates</a>

                        <a href="http://www.templatemo.com/page/1" target="_parent"><img src="{{asset('public/front_end_asset/images/templatemo_image_02.jpg')}}" alt="image" /></a>

                        <p><a href="http://www.templatemo.com" target="_parent">Red Blog </a> is a free HTML/CSS layout from templatemo.com for everyone. There are total 5 pages included (blog, <a href="blog_post.html">full  post</a>, services, portfolio, contact) Quisque at ante sit amet erat laoreet fermentum. Quisque nec nisl.</p>
                        <p>Fusce lacinia orci at nisi. Suspendisse at nisi nec diam pretium tincidunt. Ut vitae felis eu lectus ultrices varius. Aliquam lacus turpis, dapibus eget, tincidunt eu, lobortis et, magna. Integer pellentesque dignissim diam. </p>
                        <p><a href="blog_post.html">24 Comments</a> | <a href="blog_post.html">Continue reading...</a>                </p>
                    </div>
                    <div class="cleaner"></div>
                </div>

                <div class="post_section">





                    <div class="post_date">
                        24<span>Oct</span>
                    </div>

                    <div class="post_content">
                        <h2><a href="blog_post.html">Lorem ipsum dolor sit amet</a></h2>
                        <strong>Author:</strong> Templatemo <strong>Category:</strong> <a href="#">HTML</a>, <a href="#">CSS</a>

                        <a href="http://www.templatemo.com/page/2" target="_parent"><img src="{{asset('public/front_end_asset/images/templatemo_image_02.jpg')}}" alt="image" /></a>

                        <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Credits go to <a href="http://www.photovaco.com" target="_blank">free photos</a> for photos, <a href="http://www.smashingmagazine.com/2008/09/23/practika-a-free-icon-set/" target="_blank">Smashing Magazine</a> for icons and <a href="http://www.brusheezy.com" target="_blank">Nose-Meat</a> and <a href="http://www.brusheezy.com" target="_blank">FortuneGfx</a> for brushes. Phasellus cursus lobortis arcu. Donec scelerisque. Integer ultrices. Vivamus eu tortor. Phasellus tempus, justo et laoreet varius, odio mi ultrices libero, nec faucibus dui felis eu dui. Cras ac odio ac mi imperdiet sollicitudin.</p>
                        <a href="blog_post.html">58 Comments</a> | <a href="blog_post.html">Continue reading...</a>

                    </div>
                    <div class="cleaner"></div>
                </div>

            </div>


            <div id="templatemo_sidebar">

                <h4>Categories</h4>
                <?php

                //   print_r($all_category);
                   foreach ($all_published_category as $all_published_category):

                ?>

                <ul class="templatemo_list">
                    <li><a href="index.html"><?php echo  $all_published_category->category_name ?></a></li>
                    {{--<li><a href="index.html">Duis sed justo</a></li>--}}
                    {{--<li><a href="index.html">Mauris vulputate</a></li>--}}
                    {{--<li><a href="index.html">Nam auctor</a></li>--}}
                    {{--<li><a href="index.html">Aliquam quam</a></li>--}}
                </ul>
                <?php endforeach; ?>

                <div class="cleaner_h40"></div>

                <h4>Friends</h4>
                <ul class="templatemo_list">
                    <li><a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a></li>
                    <li><a href="http://www.flashmo.com" target="_parent">Flash Templates</a></li>
                    <li><a href="http://www.templatemo.com/page/1" target="_parent">Free Blog Themes</a></li>
                    <li><a href="http://www.webdesignmo.com/blog" target="_parent">Web Design Blog</a></li>
                    <li><a href="http://www.koflash.com" target="_parent">Flash Websites Gallery</a></li>
                    <li><a href="#">Vestibulum laoreet</a></li>
                    <li><a href="#">Nullam nec mi enim</a></li>
                    <li><a href="#">Aliquam quam nulla</a></li>
                </ul>

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