<div style="background:#212121;width:100%;height: 100px;"></div>
<section class="w3l-blogpost-content py-3">
        <div class="container py-md-3">
            <div class="header-title mb-md-5 mt-5">

                <h3 class="hny-title text-left">Organisasi</h3>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($halaman_organisasi as $value) :
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
        </div>
    </section>