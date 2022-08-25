<div class="container-fluit px-4">
<form action="<?= base_url('admin/Carousell/edit_data')?>" method="post" enctype="multipart/form-data">
<input type="number" class="form-control" name="id_carousell"value="<?=$data_carousell->id_carousell?>" id="inputid_carousell"hidden>   
            </div>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputJudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul"value="<?=$data_carousell->judul?>" id="inputJudul">
            </div>

            <div class="mb-3">
                <label for="inputdeskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="<?=$data_carousell->deskripsi?>"id="inputdeskripsi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
