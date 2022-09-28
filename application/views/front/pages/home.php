    <!-- main-slider -->
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <?php
                foreach ($data_carousell as $value) :
                ?>
                    <div class="item">
                        <li>
                            <div style="background: url(<?= base_url('foto/carousell/') . $value->foto ?>);background-repeat:no-repeat;background-size:cover;" class="slider-info banner-view bg bg2">
                                <div class="<?= $value->foto ?>">
                                    <div class="container">
                                        <div class="banner-info-bg">
                                            <h5 style="-webkit-text-stroke: 1px black;"><?= $value->judul ?></h5>
                                            <p class="mt-4 pr-lg-4"><?= $value->deskripsi ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </div>
                <?php
                endforeach;
                ?>
            </div>

        </div>
    </section>
    <!-- /main-slider -->
    <!-- //banner section -->
    <!-- /content-1-->

    <!-- //content-1-->
    <!--/courses-->
    <div class="w3l-homeblog py-5" id="homeblog">
        <div class="container py-lg-5 py-md-4">
            <div class="header-title mb-3 mt-5">
                <h3 class="hny-title text-left">Jurusan</h3>
            </div>
            <div class="row top-pics ">
                <?php
                foreach ($data_jurusan as $value) :
                ?>
                    <div class="col-lg-3 col-md-6 mt-5">
                        <div style=" background: url(<?= base_url('foto/jurusan/') . $value->foto ?>) no-repeat center;background-size: contain;" class="top-pic1">
                            <div class="card-body blog-details ">
                                <a href="<?= base_url('front/DataJurusan/index/') . $value->id_jurusan ?>" class="blog-desc"><?= $value->nama_jurusan ?>
                                </a>
                                <div class="author align-items-center">
                                    <img src="<?= base_url('foto/jurusan/') . $value->foto ?>" alt="" class="img-fluid rounded-circle">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-body">
                            <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div> -->
                        </p>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="text-right mx-auto mt-md-4">
                <a class="btn btn-primary btn-style mt-md-5 mt-4" href="HalamanJurusan">Selengkapnya<span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
            </div>
        </div>
    </div>
    <!--//courses-->
    <!-- extrakurikuler -->
    <section class="w3l-blogpost-content py-3">
        <div class="container py-md-3">
            <div class="header-title mb-md-5 mt-5">

                <h3 class="hny-title text-left">Extrakurikuler</h3>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($data_extra as $value) :
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div style=" background: url(<?= base_url('foto/extra/') . $value->foto ?>) no-repeat center;background-size: 100%;width: 350px;height: 200px;" class="card">
                            <div class="card-header p-0 position-relative">
                                <img class="card-img-bottom d-block radius-image-full" src="(<?= base_url('foto/extra/') . $value->foto ?>" alt="">
                            </div>

                        </div>
                        <div class="card-body blog-details ">
                            <a href="<?= base_url('front/DataExtra/index/') . $value->id_extra ?>" class="blog-desc"><?= $value->jenis_extra ?>
                            </a>
                        </div>

                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="text-right mx-auto">
                <a class="btn btn-primary btn-style mt-md-5 mt-4" href="HalamanExtra">Selengkapnya<span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
            </div>
        </div>
    </section>
    <!-- endextrakurikuler -->
    <!-- organisasi -->
    <section class="w3l-blogpost-content py-3">
        <div class="container py-md-3">
            <div class="header-title mb-md-5 mt-5">

                <h3 class="hny-title text-left">Organisasi</h3>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($data_organisasi as $value) :
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div style=" background: url(<?= base_url('foto/organisasi/') . $value->foto ?>) no-repeat center;background-size: 100%;width: 350px;height: 200px;" class="card">
                        </div>
                        <div class="card-body blog-details ">
                            <a href="<?= base_url('front/Organisasi/index/') . $value->id_organisasi ?>" class="blog-desc"><?= $value->nama ?>
                            </a>
                        </div>

                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="readhny-btm text-right mx-auto ">
                <a class="btn btn-primary btn-style mt-md-5 mt-4" href="HalamanOrganisasi">Selengkapnya<span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
            </div>
        </div>
    </section>
    <!-- endorganisasi -->

    <!-- //bottom-grids-->

    <!-- middle -->

    <!-- //middle -->

    <!-- //stats -->
    <!-- home page video popup section -->
    <?php
    foreach ($data_video as $value) :
    ?>
        <section class="w3l-videohny" id="video" style="  background: url('https://i3.ytimg.com/vi/dDeyzuvF0uk/sddefault.jpg' ) no-repeat center;">
            <div class="new-block py-5">
                <div class="container py-lg-5">
                    <div class="history-info position-relative">

                        <!--//video-->

                        <a href="#small-dialog" class="popup-with-zoom-anim play-view text-center pl-3">
                            <span class="video-play-icon">
                                <span class="fa fa-play"></span>
                            </span>
                        </a>

                        <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                            <iframe src="<?= $value->judul_video ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        <!--//video-->
                    </div>

                    <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                    <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                        <iframe src="<?= $value->judul_video ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </section>
    <?php
    endforeach;
    ?>
    <!-- //home page video popup section -->
    <!--/blog-post-->
    <section class="w3l-blogpost-content py-3">
        <div class="container py-md-3">
            <div class="header-title mb-md-5 mt-5">

                <h3 class="hny-title text-left">Blog </h3>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($data_blog as $value) :
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div style=" background: url(<?= base_url('foto/blog/') . $value->foto ?>) no-repeat center;background-size: 100%;width: 350px;height: 200px;" class="card">
                            <div class="card-header p-0 position-relative">
                                <img class="card-img-bottom d-block radius-image-full" src="(<?= base_url('foto/blog/') . $value->foto ?>" alt="">
                            </div>

                        </div>
                        <div class="card-body blog-details ">
                            <a href="<?= base_url('front/DataBlog/index/') . $value->id_blog ?>" class="blog-desc"><?= $value->judul ?>
                            </a>
                            <div class="author align-items-center">
                                <img src="<?= base_url('foto/blog/') . $value->foto ?>" alt="" class="img-fluid rounded-circle">

                                <li class="meta-item blog-lesson">
                                    <span class="meta-value"><?= $value->tanggal ?> </span>.
                                </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                <?php
                endforeach;
                ?>
            </div>
            <div class="readhny-btm text-right mx-auto">
                <a class="btn btn-primary btn-style" href="HalamanBlog">Selengkapnya<span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
            </div>
        </div>
    </section>

    <!--//blog-posts-->
    <!--/w3l-newsletter-->
    <section class="w3l-newsletter">
        <!-- /form-25-section -->
        <div class="form-25-main py-3">
            <div class="container py-lg-5">
                <div class="forms-25-info">

                    <div class="header-title mb-md-5 mt-4">
                        <!-- <span class="sub-title">Subscribe to our Newsletter</span> -->
                        <h3 class="hny-title text-left">Alamat</h3>
                    </div>
                    <div class="map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3951.1685942794256!2d110.3133911!3d-7.9815179!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7b00130761f6d9%3A0x44559777792fcdf1!2sSmp%20Muhammadiyah%20Kretek!5e0!3m2!1sen!2sid!4v1661738256150!5m2!1sen!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-newsletter-->
    <!-- testimonials -->

    <!-- //testimonials -->
    <!-- <div class="readhny-btm text-center mx-auto mt-md-4">
                <a class="btn btn-primary btn-style mt-md-5 mt-4" href="DataBlog">Read More <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
            </div> -->