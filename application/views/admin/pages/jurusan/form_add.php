<div class="container-fluit px-4">
<form action="<?= base_url('admin/Jurusan/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_jurusan" class="form-label">id_jurusan</label>
                <input type="number" class="form-control" name="id_jurusan" id="inputid_jurusan">
            </div>
            <div class="mb-3">
                <label for="inputNamaJurusan" class="form-label">Nama Jurusan</label> <br>
                <select name="nama_jurusan" class="form-control">
                    <option value="rpl">Rekayasa Perangkat Lunak</option>
                    <option value="tbsm">Teknik Sepeda Motor</option>
                    <option value="akuntansi">Akuntansi</option>
                </select>
            </div> 
   
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
