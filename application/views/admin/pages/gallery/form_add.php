<div class="container-fluit px-4">
<form action="<?= base_url('admin/Gallery/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="number" class="form-control" name="id_gallery" id="inputid_gallery"hidden>
            </div>
            <div class="mb-3">
                <label for="inputjudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="inputjudul">
            </div>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputdeskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" id="inputdeskripsi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
