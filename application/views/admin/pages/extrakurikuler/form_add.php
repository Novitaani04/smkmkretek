<div class="container-fluit px-4">
<form action="<?= base_url('admin/Extrakurikuler/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_extra" class="form-label">id_Extra</label>
                <input type="number" class="form-control" name="id_extra" id="inputid_extra">
            </div>
            <div class="mb-3">
                <label for="inputjenisextra" class="form-label">Jenis Extra</label> <br>
                <select name="jenis_extra" class="form-control">
                    <option value="Tapak Suci">Tapak Suci</option>
                    <option value="HW">HW</option>
                    <option value="Seni Musik">Seni Musik</option>
                    <option value="Tilawah">Tilawah</option>
                    <option value="Desain Grafis">Desain Grafis</option>
                    <option value="Bola Voli">Bola Voli</option>
                </select>
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
