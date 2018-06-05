
@extends('master')
@section('main_content')


<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

            <div id="templatemo_content">


                <h2>Contact Information</h2>

                <p>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Suspendisse sed odio ut mi auctor blandit. Duis luctus nulla metus, a vulputate mauris. Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero. Cras purus libero, dapibus nec rutrum in, dapibus nec risus. Ut interdum mi sit amet magna feugiat auctor.</p>
                <div class="cleaner_h40"></div>

                <div class="float_l">

                    <h6>Company Address One</h6>
                    410-220 Quisque odio quam, <br />
                    Venenatis ut turpis 10290<br />
                    Tel: 010-030-0820

                </div>

                <div class="float_r">

                    <h6>Company Address Two</h6>
                    290-570 Duis lacinia dictum, <br />
                    Nam rhoncus, diam a mollis 10470<br />
                    Tel: 010-020-0460

                </div>

                <div class="cleaner_h50"></div>

                <div id="contact_form">

                    <h3>Contact Form</h3>

                    <form method="post" name="contact" action="#">

                        <input type="hidden" name="post" value="Send" />
                        <label for="author">Name:</label> <input type="text" id="author" name="author" class="required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="email">Email:</label> <input type="text" id="email" name="email" class="validate-email required input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="phone">Phone:</label> <input type="text" name="phone" id="phone" class="input_field" />
                        <div class="cleaner_h10"></div>

                        <label for="text">Message:</label> <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                        <div class="cleaner_h10"></div>

                        <input type="submit" class="submit_btn" name="submit" id="submit" value="Send" />
                        <input type="reset" class="submit_btn" name="reset" id="reset" value="Reset" />

                    </form>

                </div>


            </div>

            <div id="templatemo_sidebar">

                <h4>Categories</h4>
                <ul class="templatemo_list">
                    <li><a href="index.html">Praesent adipiscing</a></li>
                    <li><a href="index.html">Duis sed justo</a></li>
                    <li><a href="index.html">Mauris vulputate</a></li>
                    <li><a href="index.html">Nam auctor</a></li>
                    <li><a href="index.html">Aliquam quam</a></li>
                </ul>

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
    </div><div id="templatemo_main_bottom"></div>
</div>
    @endsection