<section class="w3l-blogpost-content py-5">
        <div class="container py-md-5">
            <div class="header-title mb-md-5 mt-3">
                <!-- <span class="sub-title">Latest Posts</span> -->
                <h3 class="hny-title text-left">Blog </h3>
            </div>
            <div class="row">
            <?php
                foreach($data_blog as $value):
            ?>
                <div class="col-lg-4 col-md-6 item">
                    <div style=" background: url(<?=base_url('foto/blog/') . $value->foto?>) no-repeat center;background-size: contain;"class="card">
                        <div class="card-header p-0 position-relative">
                            <a href="blog-single.html">
                                <img class="card-img-bottom d-block radius-image-full" src="(<?=base_url('foto/blog/') . $value->foto?>" alt="">
                            </a>
                        </div>
                        <div class="card-body blog-details">
                            <a href="blog-single.html" class="blog-desc"><?=$value->judul?>
                            </a>
                            <div class="author align-items-center">
                                <img src="<?=base_url('foto/blog/') . $value->foto?>" alt="" class="img-fluid rounded-circle">
                                <ul class="blog-meta">
                                    <!-- <li>
                                        <a href="#">Isabella ava</a> 
                                    </li> -->
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"><?=$value->tanggal?> </span>.
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