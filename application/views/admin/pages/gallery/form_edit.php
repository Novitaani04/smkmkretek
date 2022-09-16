<div class="container-fluit px-4">
<form action="<?= base_url('admin/Gallery/edit_data')?>" method="post" enctype="multipart/form-data">
<input type="text" name="id_gallery" value="<?=$data_gallery->id_gallery?>" hidden>  
            <div class="mb-3">
                <label for="inputjudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?=$data_gallery->judul?>"id="inputNama">
            </div>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputdeskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" value="<?=$data_gallery->deskripsi?>"id="inputNama">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
