
@extends('master')
@section('main_content')

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

            <div id="templatemo_content">

                <h2>Portfolio Page</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi blandit sodales dolor, nec hendrerit nisi dictum ac. Proin pretium purus ut elit posuere venenatis. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>

                <div id="gallery">
                    <ul>

                        <li>
                            <a href="{{asset('public/front_end_asset/images/gallery/image_01_b.jpg')}}" class="pirobox" title="Project 1"><img src="{{asset('public/front_end_asset/images/gallery/image_01_b.jpg')}}" alt="1" /></a>
                            <h5>Project 1</h5>
                            <p>Integer sed nisi sapien, ut gravida mauris. Nam et tellus libero.</p>
                            <a href="#">Visit</a>
                        </li>
                        <li>
                            <a href="{{asset('public/front_end_asset/images/gallery/image_02_b.jpg')}}" class="pirobox" title="Project 2"><img src="{{asset('public/front_end_asset/images/gallery/image_02_b.jpg')}}" alt="2" /></a>
                            <h5>Project 2</h5>
                            <p>Mauris risus magna, blandit ac suscipit at, tristique id erat.</p>
                            <a href="#">Visit</a>
                        </li>
                        <li>
                            <a href="{{asset('public/front_end_asset/images/gallery/image_03_b.jpg')}}" class="pirobox" title="Project 3"><img src="{{asset('public/front_end_asset/images/gallery/image_03_b.jpg')}}" alt="3" /></a>
                            <h5>Project 3</h5>
                            <p>Etiam eu ipsum a arcu sodales consequat sit amet at orci. Nulla in luctus elit.</p>
                            <a href="#">Visit</a>
                        </li>
                        <li>
                            <a href="{{asset('public/front_end_asset/images/gallery/image_04_b.jpg')}}" class="pirobox" title="Project 4"><img src="{{asset('public/front_end_asset/images/gallery/image_04_b.jpg')}}" alt="4" /></a>
                            <h5>Project 4</h5>
                            <p>Divamus interdum, tortor at pellentesque pulvinar, diam quam blandit nulla.</p>
                            <a href="#">Visit</a>
                        </li>
                        <li>
                            <a href="{{asset('public/front_end_asset/images/gallery/image_05_b.jpg')}}" class="pirobox" title="Project 5"><img src="{{asset('public/front_end_asset/images/gallery/image_05_b.jpg')}}" alt="5" /></a>
                            <h5>Project 5</h5>
                            <p>Vivamus condimentum ligula sit amet lacus tincidunt imperdiet.</p>
                            <a href="#">Visit</a>
                        </li>
                        <li>
                            <a href="{{asset('public/front_end_asset/images/gallery/image_06_b.jpg')}}" class="pirobox" title="Project 6"><img src="{{asset('public/front_end_asset/images/gallery/image_06_b.jpg')}}" alt="6" /></a>
                            <h5>Project 6</h5>
                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra. </p>
                            <a href="#">Visit</a>
                        </li>
                    </ul>

                    <div class="cleaner"></div>
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