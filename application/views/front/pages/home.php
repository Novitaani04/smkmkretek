    <!-- main-slider -->
    <section class="w3l-main-slider" id="home">
        <div class="companies20-content">

            <div class="owl-one owl-carousel owl-theme">
                <?php
                foreach ($data_carousell as $value) :
                ?>
                    <div class="item">
                        <li>
                            <div style=" background: url(<?= base_url('foto/carousell/') . $value->foto ?>);background-repeat:no-repeat;background-size:100%;" class="slider-info banner-view bg bg2">
                                <div class="<?= $value->foto ?>">
                                    <div class="container">
                                        <div class="banner-info-bg">
                                            <h5><?= $value->judul ?></h5>
                                            <p class="mt-4 pr-lg-4"><?= $value->deskripsi ?></p>
                                            <!-- <a class="btn btn-style btn-primary mt-xl-5 mt-4 mr-2" href="about.html"> Get
                                                Started <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                                            <a class="btn btn-style btn-white mt-xl-5 mt-4" href="services.html"> View
                                                Courses <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a> -->
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
    <div class="content-1 py-5">
        <div class="container py-md-5">
            <div class="row content-1-grids">
                <?php
                foreach ($data_about as $value) :
                ?>
                    <div class="col-lg-4 content-1-left forms-25-info">
                        <div class="header-title">
                            <!-- <span class="sub-title">About Us</span> -->
                            <h3 class="hny-title"><?= $value->judul ?></h3>

                        </div>
                    </div>
                    <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                        <p class=""><?= $value->visi ?>
                        </p>
                    </div>
                    <div class="col-lg-4 content-1-right pl-lg-5 mt-lg-0 mt-4">
                        <?= $value->misi ?>
                       
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <!-- //content-1-->
    <!--/courses-->
    <div class="w3l-homeblog py-5" id="homeblog">
        <div class="container py-lg-5 py-md-4">
            <div class="header-title mb-3 mt-5">
                <!-- <span class="sub-title">Top Courses</span> -->
                <h3 class="hny-title text-left">Jurusan</h3>
            </div>
            <div class="row top-pics ">
                <?php
                foreach ($data_jurusan as $value) :
                ?>
                    <div class="col-lg-3 col-md-6 mt-5">
                        <div style=" background: url(<?= base_url('foto/jurusan/') . $value->foto ?>) no-repeat center;background-size: contain;" class="top-pic1">
                            <div class="card-body blog-details">
                                <!-- <p class="course-sub">283 online courses</p> -->
                                <a href="services.html" class="blog-desc"><?= $value->nama_jurusan ?>
                                </a>
                                <div class="author align-items-center">
                                    <img src="<?= base_url('foto/jurusan/') . $value->foto ?>" alt="" class="img-fluid rounded-circle">
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <div class="readhny-btm text-center mx-auto mt-md-4">
                    <a class="btn btn-primary btn-style mt-md-5 mt-4" href="about.html">Read More <span class="fa fa-chevron-right ml-2" aria-hidden="true"></span></a>
                </div>

            </div>
        </div>
    </div>
    <!--//courses-->
    <!-- extrakurikuler -->
    <div class="album py-5 bg-light">
        <div class="container">
            <h3 class="hny-title text-left mb-5">Extrakurikuler</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php
                foreach ($data_extra as $value) :
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= base_url('foto/extra/') . $value->foto ?>" alt="">
                            <h1><?= $value->jenis_extra ?></h1>
                            <div class="card-body">
                                <p class="card-text"><?= $value->deskripsi ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div> -->
                                    <!-- <small class="text-muted">9 mins</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <!-- endextrakurikuler -->
    <!-- organisasi -->
    <div class="album py-5 bg-light">
        <div class="container">
            <h3 class="hny-title text-left mb-5">Organisasi</h3>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <?php
                foreach ($data_organisasi as $value) :
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img src="<?= base_url('foto/organisasi/') . $value->foto ?>" style="width:200px;height: 200px;">
                            <h2><?= $value->nama ?></h2>
                            <!-- <div class="card-body">
                            <p class="card-text"></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div> -->
                            <!-- <small class="text-muted">9 mins</small> -->
                            <!-- </div> -->
                            <!-- </div> -->
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <!-- endorganisasi -->

    <!-- //bottom-grids-->

    <!-- middle -->

    <!-- //middle -->

    <!-- //stats -->
    <!-- home page video popup section -->
    <section class="w3l-videohny" id="video" style="background: url('http://i3.ytimg.com/vi/dDeyzuvF0uk/hqdefault.jpg') no-repeat center;">
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
                        <iframe src="https://www.youtube.com/embed/dDeyzuvF0uk" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                    </div>
                    <!--//video-->
                </div>

                <!-- dialog itself, mfp-hide class is required to make dialog hidden -->
                <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
                    <iframe src="https://www.youtube.com/embed/dDeyzuvF0uk" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- //home page video popup section -->
    <!--/blog-post-->
    <section class="w3l-blogpost-content py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mt-5">
                <!-- <span class="sub-title">Latest Posts</span> -->
                <h3 class="hny-title text-left">Blog </h3>
            </div>
            <div class="row ">
                <?php
                foreach ($data_blog as $value) :
                ?>
                    <div class="col-lg-4 col-md-6 item">
                        <div style=" background: url(<?= base_url('foto/blog/') . $value->foto ?>) no-repeat center;background-size: 100%;width: 350px;height: 200px;" class="card">
                            <div class="card-header p-0 position-relative">
                                <a href="blog-single.html">
                                    <img class="card-img-bottom d-block radius-image-full" src="(<?= base_url('foto/blog/') . $value->foto ?>" alt="">
                                </a>
                            </div>
                            <div class="card-body blog-details">
                                <a href="blog-single.html" class="blog-desc"><?= $value->judul ?>
                                </a>
                                <div class="author align-items-center">
                                    <img src="<?= base_url('foto/blog/') . $value->foto ?>" alt="" class="img-fluid rounded-circle">
                                    <ul class="blog-meta">
                                        <!-- <li>
                                        <a href="#">Isabella ava</a> 
                                    </li> -->
                                        <li class="meta-item blog-lesson">
                                            <span class="meta-value"><?= $value->tanggal ?> </span>.
                                            <!-- <span class="meta-value ml-2"><span class="fa fa-clock-o"></span> 1 min</span> -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>
    <!--//blog-posts-->
    <!--/w3l-newsletter-->
    <section class="w3l-newsletter">
        <!-- /form-25-section -->
        <div class="form-25-main py-5">
            <div class="container py-lg-5">
                <div class="forms-25-info">

                    <div class="header-title mb-md-5 mt-4">
                        <!-- <span class="sub-title">Subscribe to our Newsletter</span> -->
                        <h3 class="hny-title text-left">Form Pendaftaran</h3>
                    </div>
                    <form action="<?=base_url('admin/MasterSiswa/add_new_data_siswa')?>" method="post" class="signin-form mt-4 mb-2" enctype="multipart/form-data">
                        <div class="forms-gds">

                            <div class="row">
                                <input class="mb-2" type="number" name="nik" placeholder="NIK" required />
                                <input class="mb-2" type="text" name="nama_siswa" placeholder="Nama Siswa" required />
                                <select name="jk" class="form-control mb-2">
                                    <option value="l">Laki-Laki</option>
                                    <option value="p">Perempuan</option>   
                                </select>
                                <select name="jurusan" class="form-control mb-2">
                                    <option value="rpl">Rekayasa Perangkat Lunak</option>
                                    <option value="akl">Akuntansi</option>
                                    <option value="tbsm">Teknik Bisnis Sepeda Motor</option>
                                </select>
                                <input class="mb-2" type="text" name="alamat" placeholder="Alamat" required />
                                <input type="file" name="passfoto" class="form-control mb-2" id="inputPassFoto">
   
                                <button class="btn btn-style btn-primary">Daftar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--//w3l-newsletter-->
    <!-- testimonials -->

    <!-- //testimonials -->