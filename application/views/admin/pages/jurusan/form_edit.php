<div class="container-fluit px-4">
<form action="<?= base_url('admin/Jurusan/edit_data')?>" method="post" enctype="multipart/form-data">
<input type="number" name="id_jurusan"class="form-control" value="<?=$data_jurusan->id_jurusan?>" hidden>  
            
            <div class="mb-3">
                <label for="inpunama_jurusan" class="form-label">Nama jurusan</label>
                <input type="text" class="form-control" name="nama_jurusan" value="<?=$data_jurusan->nama_jurusan?>"id="inputnama_jurusan">
            </div> 
   
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
