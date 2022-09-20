<div style="background:#212121;width:100%;height: 100px;"></div>
<div class="w3l-homeblog py-5" id="homeblog">
    <div class="container py-lg-5 py-md-4">
        <div class="header-title mb-3 mt-5">
            <h3 class="hny-title text-left">Gallery</h3>
        </div>
        <div class="row top-pics ">
			<div class="gallery_container">
			<?php
            // $index = nomor urutanya
            // $value = isi data per baris
                foreach ($data_gallery as $index => $value) :
                ?>
 
                <div class="gallery_item" id="<?= $index ?>">
                    <img src="<?= base_url('foto/gallery/') . $value->foto ?>" alt="">
                    <div class="text">
                        <h3><?= $value->judul?></h4>
                            <!-- <p>Short Description</p> -->
                    </div>
                    <div class="button">Learn More</div>
                </div>
			<?php
            endforeach;
            ?>
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
                        <i id="github"></i>
                    </div>
                </div>
            </div>
 
        </div>
    </div>
</div>

<script>
    <?php
    // mempersiapkan variabel data dengan array kosong
        $data = [];
        foreach ( $data_gallery as $key => $value) {

            $res = [
                "title" => $value->judul,
                "info" => $value->deskripsi,
                "link" =>base_url('foto/gallery/') . $value->foto,
                "github" => "#",
            ];
            // menambahkan item baru pada variabel data
            array_push($data,$res);
        }
        // konversi dari array ke json
        $jsonData = json_encode($data);
   ?>
    //melakukan konversi lagi dari json ke array javascript    
    var modalInfo = JSON.parse('<?=$jsonData?>');
</script>
