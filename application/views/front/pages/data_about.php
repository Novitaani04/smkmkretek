<div style="background:#212121;width:100%;height: 100px;"></div>
<div class="album py-5 bg-light">
        <div class="container">
            <!-- <h3 class="hny-title text-left mb-5">Extrakurikuler</h3> -->
            <div class="row row-cols-1 row-cols-sm-6 row-cols-md-6mt-5 g-3">
                <?php
                foreach ($data_about as $value) :
                ?>
                    <div class="col-lg-6 content-1-right pl-lg-5 mt-lg-0 mt-4">
                        <h1>
                            <center>Visi</center>
                        </h1> <br>
                        <p class=""><?= $value->visi ?></p>
                    </div>
                    <div class="col-lg-6 content-1-right pl-lg-5 mt-lg-0 mt-4">
                        <h1>
                            <center>Misi</center>
                        </h1> <br>
                        <p class=""><?= $value->misi ?></p>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>