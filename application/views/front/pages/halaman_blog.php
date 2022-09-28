<div style="background:#212121;width:100%;height: 100px;"></div>
<section class="w3l-blogpost-content py-3">
        <div class="container py-md-3">
            <div class="header-title mb-md-5 mt-5">

                <h3 class="hny-title text-left">Halaman Blog </h3>
            </div>
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
                <?php
                foreach ($halaman_blog as $value) :
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
        </div>
    </section>