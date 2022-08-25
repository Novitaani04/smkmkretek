<div class="container-fluit px-4">
<form action="<?= base_url('admin/Extrakurikuler/edit_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_extra" class="form-label">id_Extra</label>
                <input type="number" class="form-control" name="id_extra" value="<?=$data_extra->id_extra?>"id="inputid_extra">
            </div>
            <div class="mb-3">
                <label for="inputjenis_extra" class="form-label">Jenis Extra</label> <br>
                <select name="jenis_extra" class="form-control">
                    <option value="tapak suci"<?=($data_extra->jenis_extra == 'Tapak Suci') ?'checked': ''?>>Tapak Suci</option>
                    <option value="hw"<?=($data_extra->jenis_extra == 'HW') ?'checked': ''?>>HW</option>
                </select>
            </div> 
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputdeskripsi" class="form-label">Deskripsi</label>
                <input type="text"  class="form-control" name="deskripsi"value="<?=$data_extra->deskripsi?>" id="inputdeskripsi">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
