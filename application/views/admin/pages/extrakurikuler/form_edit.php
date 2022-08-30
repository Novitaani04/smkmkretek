<div class="container-fluit px-4">
<form action="<?= base_url('admin/Extrakurikuler/edit_data')?>" method="post" enctype="multipart/form-data">
                <input type="number" class="form-control" name="id_extra" value="<?=$data_extra->id_extra?>"id="inputid_extra" hidden>
         
            <div class="mb-3">
                <label for="inputjenis_extra" class="form-label">Jenis Extra</label> <br>
                <select name="jenis_extra" class="form-control">
                    <option value="Tapak Suci"<?=($data_extra->jenis_extra == 'Tapak Suci') ?'checked': ''?>>Tapak Suci</option>
                    <option value="HW"<?=($data_extra->jenis_extra == 'HW') ?'checked': ''?>>HW</option>
                    <option value="Seni Musik"<?=($data_extra->jenis_extra == 'Seni Musik') ?'checked': ''?>>Seni Musik</option>
                    <option value="Tilawah"<?=($data_extra->jenis_extra == 'Tilawah') ?'checked': ''?>>Tilawah</option>
                    <option value="Desain Grafis"<?=($data_extra->jenis_extra == 'Desain Grafis') ?'checked': ''?>>Desain Grafis</option>
                    <option value="Bola Voli"<?=($data_extra->jenis_extra == 'Bola Voli') ?'checked': ''?>>Bola Voli</option>
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
