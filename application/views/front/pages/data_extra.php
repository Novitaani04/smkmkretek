<div style="background:#212121;width:100%;height: 100px;"></div>
<section class="w3l-blogpost-content py-5">
    <div class="container py-md-5">
        <div class="header-title mb-md-5 mt-5">

            <h3 class="hny-title text-left mb-2"><?= $data_extra->jenis_extra ?></h3>
        </div>
        <div class="row  ">

            <!-- <div class="col-lg-6 col-md-6 item"> -->
                <div style=" background: url(<?= base_url('foto/extra/') . $data_extra->foto ?>) no-repeat center;background-size: 100%;width: 100%;height: 500px;" class="card">
                    <div class=" position-relative">
                        <img class="card-img-bottom d-block radius-image-full" src="(<?= base_url('foto/extra/') . $data_extra->foto ?>" alt="">
                    </div>
                </div>
                <div class="card-body blog-details ">
                    <p class="entry-excerpt excerpt mb-3"><?= $data_extra->deskripsi?></p>
                    <div class="author align-items-center">
                        </ul>
                    </div>
                </div>
            <!-- </div> -->
        </div>
        
    </div>
</section>