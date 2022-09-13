<div style="background:#212121;width:100%;height: 100px;"></div>
<section class="w3l-blogpost-content py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mt-5">

                <h3 class="hny-title text-left">Blog </h3>
            </div>
            <div class="row ">
               
                    <div class="col-lg-4 col-md-6 item">
                        <div style=" background: url(<?= base_url('foto/blog/') . $data_blog->foto ?>) no-repeat center;background-size: 100%;width: 350px;height: 200px;" class="card">
                            <div class="card-header p-0 position-relative">

                                <img class="card-img-bottom d-block radius-image-full" src="(<?= base_url('foto/blog/') . $data_blog->foto ?>" alt="">

                            </div>

                        </div>
                        <div class="card-body blog-details ">
                            <h3 class="mb-2"><?= $data_blog->judul ?></h3>
                            <p class="entry-excerpt excerpt mb-3"><?= $data_blog->isi?></p>
                           
                            <div class="author align-items-center">
                                <!-- <img src="" alt="" class="img-fluid rounded-circle"> -->

                                <!-- <li class="meta-item blog-lesson">
                                    <span class="meta-data_blog"></span>.
                               
                                </li> -->
                                
                                </ul>
                                
                            </div>
                        </div>

                    </div>
                
            </div>
        </div>
    </section>