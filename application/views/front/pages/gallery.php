<div style="background:#212121;width:100%;height: 100px;"></div>
<div class="w3l-homeblog py-5" id="homeblog">
    <div class="container py-lg-5 py-md-4">
        <div class="header-title mb-3 mt-5">
            <h3 class="hny-title text-left">Gallery</h3>
        </div>
        <div class="row top-pics ">
             <?php
                foreach ($data_gallery as $value) :
                ?>
            <div class="gallery_container">
                <div class="gallery_item" id="1">
                    <img src="<?= base_url('foto/gallery/') . $value->foto ?>" alt="">
                    <div class="text">
                        <h3><?= $value->judul?></h4>
                            <!-- <p>Short Description</p> -->
                    </div>
                    <div class="button">Learn More</div>
                </div>
            </div>

            <!-- Modal -->
            <div id="preview" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <img id="img" src="">
                    <div id="details">
                        <h3 id="title"></h3>
                        <p id="info">Some text</p>
                        <div class="button" id="live">View</div>
                        <i class="fab fa-github-square" id="github"></i>
                    </div>
                </div>
            </div>
            <?php
            endforeach;
            ?>
        </div>
    </div>
</div>