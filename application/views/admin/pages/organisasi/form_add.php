<div class="container-fluit px-4">
<form action="<?= base_url('admin/Organisasi/add_new_data')?>" method="post" enctype="multipart/form-data">
                <input type="id_organisasi" class="form-control" name="id_organisasi" id="inputid_organisasi"hidden>
            
            <div class="mb-3">
                <label for="inputnama" class="form-label">Nama organisasi</label>
                <input type="text" class="form-control" name="nama" id="inputnama">
            </div> 
   
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputdeskripsi" class="form-label">Deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="inputdeskripsi">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
