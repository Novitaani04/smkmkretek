<div style="background:#212121;width:100%;height: 100px;"></div>
<section class="w3l-blogpost-content py-3">
        <div class="container py-md-3">
            <div class="header-title mb-md-5 mt-5">

                <h3 class="hny-title text-left">Extrakurikuler</h3>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($halaman_extra as $value) :
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
        </div>
    </section>