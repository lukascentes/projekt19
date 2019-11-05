<!doctype html>
<html>
<head>

    <title> @yield('title_area') </title>

    @include('frontView.home.meta')

    @yield('css_js')


</head>

<body>

<div class="fh5co-loader"></div>

<div id="page">

<!-- NAVBAR -->
@include('frontView.home.navbar')


<br>
    <div class="container-wrap">
        <br>
<div style="margin-left: 200px">
        <img src="https://www.tlu.ee/sites/default/files/styles/image_1300xn/public/2019-10/Erasmus-2018-fb-20%25-eng%201.png?itok=h5yKFn4K" style="height: 500px" width="80%">
</div>


        <div id="fh5co-blog">
            <div class="row">
                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/usa1.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Pracovná stáž</span>
                            <h2>USA</h2>
                            <p>Florida Institute for Human and Machine Cognition (IHMC) se nachází ve městě Pensacola na Floridě (USA).</p>
                            <ul class="stuff">

                                <li><a href="#">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/London3.jpg	);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Pracovné stáže</span>
                            <h2>Európa</h2>
                            <p>Program Erasmus+ je zaměřen na vysokoškolské vzdělávání a je určen především pro studenty.                                                  </p>
                            <ul class="stuff">
                                <li><a href="#">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="fh5co-blog animate-box">
                        <a href="#" class="blog-bg" style="background-image: url({{ asset('frontEnd') }}/images/taipei.jpg);"></a>
                        <div class="blog-text">
                            <span class="posted_on">Študijný pobyt</span>
                            <h2>Malajzia</h2>
                            <p>Od roku 2015 jsou v rámci programu Erasmus+ nově podporovány výměny studentů a zaměstnanců vysokých škol se zeměmi mimo Evropu.</p>
                            <ul class="stuff">
                                <li><a href="#">Čítajte viac<i class="icon-arrow-right22"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div><!-- END container-wrap -->
</div>

@include('frontView.home.footer')

</body>
</html>

