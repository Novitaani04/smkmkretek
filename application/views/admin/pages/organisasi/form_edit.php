<div class="container-fluit px-4">
<form action="<?= base_url('admin/Organisasi/edit_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_organisasi" class="form-label">Id_Organisasi</label>
                <input type="number" class="form-control" name="id_organisasi"value="<?=$data_organisasi->id_organisasi?>" id="inputid_organisasi">
            </div>
            <div class="mb-3">
                <label for="inputNam" class="form-label">Nama</label> <br>
                <select name="nama" class="form-control">
                    <option value="IPM"<?=($data_organisasi->nama== 'IPM') ?'selected': ''?>>IPM</option>
                    <option value="OSIS"<?=($data_organisasi->nama== 'OSIS') ?'selected': ''?>>OSIS</option>
                    <option value="PRAMUKA"<?=($data_organisasi->nama== 'PRAMUKA') ?'selected': ''?>>PRAMUKA</option>
                    <option value="PRM"<?=($data_organisasi->nama== 'PRM') ?'selected': ''?>>PRM</option>
                </select>
            </div> 
   
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
