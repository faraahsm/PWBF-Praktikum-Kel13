@extends('layouts.main')

@section('container')

    <!-- Header -->
    <header id="head">
        <div class="container">
            <div class="banner-content">
                <div id="da-slider" class="da-slider">
                    <div class="da-slide">
                        <h2>Lingkungan pembelajaran yang nyaman</h2>
                        <p>Jangan khawatir karena TPQ Banyu Urip memberikan lingkungan belajar yang terbaik</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Pengajar yang profesional</h2>
                        <p>Pengajar TPQ Banyu Urip sudah memiliki lisensi</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Pengetahuan Islam yang bermanfaat</h2>
                        <p>Selain belajar membaca Al-Quran, di TPQ Banyu Urip juga memiliki fasilitas untuk menambah wawasan tentang pengetahuan Islam</p>
                        <div class="da-img"></div>
                    </div>
                    <div class="da-slide">
                        <h2>Bergabung dengan kami</h2>
                        <p>Tunggu apa lagi? silakan daftar untuk merasakan manfaatnya!</p>
                        <div class="da-img"></div>
                    </div>
                    <nav class="da-arrows">
                        <span class="da-arrows-prev"></span>
                        <span class="da-arrows-next"></span>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- container -->
    <!-- Highlights - jumbotron -->
    <div class="jumbotron">
        <div class="container">

            <h3 class="text-center text-putih">Pembelajaran kami</h3>

            <div class="row">
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="hbox">
                        <div class="h-caption">
                            <h4><i class="fa fa-arrows fa-2x circle"></i>Membaca Iqro</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Pembelajaran ini dilakukan untuk anak yang belum pernah mengaji agar lancar membaca huruf hijaiyah.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="hbox">
                        <div class="h-caption">
                            <h4><i class="fa fa-css3 fa-2x circle"></i>Membaca Al-Quran</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Pembelajaran ini dilakukan untuk anak yang sudah bisa membaca Iqro sehingga bisa dilanjutkan untuk membaca Al-Quran.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="hbox">
                        <div class="h-caption">
                            <h4><i class="fa fa-lightbulb-o fa-2x circle"></i>Menghafal Surat</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Pembelajaran menghafal surat-surat Al-Quran sebagai bekal anak-anak untuk memperlancar bacaan serta memperkuat iman.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="hbox">
                        <div class="h-caption">
                            <h4><i class="fa fa-desktop fa-2x circle"></i>Pengetahuan Islam</h4>
                        </div>
                        <div class="h-body text-center">
                            <p>Pembelajaran pengetahuan Islam dilakukan untuk menambah wawasan anak-anak seputar Islam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

            <!-- /row  -->

            <div class="container">
                <div class="row">
                    <div class='col-md-12 text-center'>
                        <h3 style="color:#ffffff">Testimoni Santri</h3>
                    </div>
                </div>
                <div class='row'>
                    <div class='col-md-12'>
                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                            </ol>
        
                            <!-- Carousel Slides / Quotes -->
                            <div class="carousel-inner">
                                <!-- Quote 1 -->
                                <div class="item active">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="assets/images/diba.jpeg" style="width: 100px; height: 100px;">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Belajar disini asyik sekali, Ustadz dan Ustadzah nya baik baiik banget><</p>
                                                <small>Adhiba, Surabaya</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 2 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="assets/images/pandu.jpeg" style="width: 100px; height: 100px;">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Alhamdulillah nyaman sekali belajar di TPQ Banyu Urip, akhirnya saya khatam Al-Quran.</p>
                                                <small>Aryo pandu, Madiun</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                                <!-- Quote 3 -->
                                <div class="item">
                                    <blockquote>
                                        <div class="row">
                                            <div class="col-sm-3 text-center">
                                                <img class="img-circle" src="assets/images/nopi.jpeg" style="width: 100px; height: 100px;">
                                            </div>
                                            <div class="col-sm-9">
                                                <p>Tidak hanya bisa membaca Al-Quran, saya juga jadi hafal banyak surat-surat pendek dan panjang serta wawasan saya tentang Islam bertambah pesat.</p>
                                                <small>Novira, Surabaya</small>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
        
                            <!-- Carousel Buttons Next/Prev -->
                            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
    <!-- /Highlights -->

@endsection