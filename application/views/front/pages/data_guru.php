<div class="w3l-homeblog py-5" id="homeblog">
    <div class="container py-lg-5 py-md-4">
        <div class="header-title mb-3 mt-5">
            <h3 class="hny-title text-left">Data Guru</h3>
        </div>
        <div class="row top-pics ">
            <?php
                foreach($data_guru as $value):
            ?>
            <div class="col-lg-3 col-md-6 mt-5">
                <div style=" background: url(<?=base_url('foto/guru/') . $value->passfoto?>) no-repeat center;background-size: contain;" class="top-pic1">
                    <div class="card-body blog-details">
                        <!-- <p class="course-sub">283 online courses</p> -->
                        <a href="services.html" class="blog-desc"><?=$value->nama?>
                        </a>
                        <div class="author align-items-center">
                            <img src="<?=base_url('foto/guru/') . $value->passfoto?>" alt="" class="img-fluid rounded-circle">
                            <ul class="blog-meta">
                                <ul class="blog-meta">
                                    <li class="meta-item blog-lesson">
                                        <span class="meta-value"> <?=$value->mapel?> </span>.
                                        <!-- <span class="meta-value text-bold">$89.00</span> -->
                                    </li>
                                </ul>
                            </ul>
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