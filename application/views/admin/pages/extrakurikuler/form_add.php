<div class="container-fluit px-4">
<form action="<?= base_url('admin/Extrakurikuler/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_extraa" class="form-label">id_Extra</label>
                <input type="number" class="form-control" name="id_extraa" id="inputid_extra">
            </div>
            <div class="mb-3">
                <label for="inputjenisextra" class="form-label">Jenis Extra</label> <br>
                <select name="jenis_extra" class="form-control">
                    <option value="volli">Volli</option>
                    <option value="atletik">Atletik</option>
                    <option value="tekondo">Tekondo</option>
                </select>
            </div> 
   
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
