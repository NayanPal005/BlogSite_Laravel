@extends('master')
@section('main_content')


<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <div id="templatemo_main_top">

            <div id="templatemo_content">


                <h2>Our Services</h2>
                <div>Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Donec hendrerit. Maecenas nisl ante, mollis et, tincidunt vitae,   feugiat sit amet, mi. Vestibulum urna. Vivamus eu tortor. Phasellus   tempus, justo et laoreet varius, odio mi ultrices libero, nec faucibus   dui felis eu dui. Cras ac odio ac mi imperdiet sollicitudin. In hac   habitasse platea dictumst. Curabitur euismod scelerisque lacus. Cras   pretium sem sed odio. <a href="#">Vestibulum nisl mauris</a>, malesuada nec, dictum in,   molestie in, pede.</div>
                <div><br />
                </div>
                <p>&nbsp;</p>

                <div class="cleaner_h30"></div>

                <div class="service_box">
                    <h3>Lorem ipsum dolor sit amet</h3>

                    <div class="left">
                        <img src="{{asset('public/front_end_asset/images/chart1.png')}}" alt="image" />
                    </div>
                    <div class="right">
                        <p>Curabitur ullamcorper neque et justo aliquet at pretium orci  scelerisque. Mauris sodales tristique dignissim. <a href="#">Phasellus ut augue</a>  nibh. Aliquam vel libero sit amet mauris posuere ullamcorper  sollicitudin ac eros. Vestibulum auctor euismod mi et tincidunt. </p>
                        <ol>
                            <li>Phasellus a neque in nisi sodales euismod vitae non sapien</li>
                            <li>Integer luctus porta mauris eu interdum</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes</li>
                            <li>Suspendisse in leo ligula, id congue justo.</li>
                            <li>Fusce bibendum placerat justo, sed cursus dui elementum </li>
                        </ol>

                    </div>
                    <div class="cleaner"></div>
                </div>

                <div class="service_box">

                    <h3>Morbi sed nulla ac est cursus suscipit</h3>

                    <div class="left">
                        <img src="{{asset('public/front_end_asset/images/chart2.png')}}" alt="image" />
                    </div>
                    <div class="right">

                        <p>Phasellus diam orci, rhoncus sed condimentum et, sodales vel leo. Nunc  dignissim quam a nisi placerat gravida. Suspendisse potenti. Curabitur  suscipit lacus vestibulum mi accumsan bibendum. <a href="#">Vivamus gravida</a>, dui  eget tincidunt rutrum, ante justo malesuada lacus.</p>

                        <ol>
                            <li>Suspendisse in leo ligula, id congue justo.</li>
                            <li>Fusce bibendum placerat justo, sed cursus dui elementum </li>
                            <li>Phasellus a neque in nisi sodales euismod vitae non sapien</li>
                            <li>Integer luctus porta mauris eu interdum</li>
                            <li>Cum sociis natoque penatibus et magnis dis parturient montes</li>
                        </ol>


                    </div>
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