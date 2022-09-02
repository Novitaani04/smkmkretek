<div class="container-fluit px-4">
<form action="<?= base_url('admin/Jurusan/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="number" class="form-control" name="id_jurusan" id="inputid_jurusan"hidden>
            </div> 
            <div class="mb-3">
                <label for="inputnama_jurusan" class="form-label">Nama jurusan</label>
                <input type="text" class="form-control" name="nama_jurusan" id="inputnama_jurusan">
            </div> 
   
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
