<div class="container-fluit px-4">
<form action="<?= base_url('admin/Organisasi/edit_data')?>" method="post" enctype="multipart/form-data">
            <input type="number" class="form-control" name="id_organisasi"value="<?=$data_organisasi->id_organisasi?>" id="inputid_organisasi" hidden>
           
            <div class="mb-3">
               <label for="inputnama" class="form-label">Nama Organisasi</label>
                <input type="text" class="form-control" name="nama" value="<?=$data_organisasi->nama?>" id="inputnama">
            </div> 
   
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
