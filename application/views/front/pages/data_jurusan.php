<div style="background:#212121;width:100%;height: 100px;"></div>
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
                    <p><?= $value->deskripsi ?>
                    </p>
                </div>
            <?php
            endforeach;
            ?>
            

        </div>
    </div>
</div>