<div class="container-fluit px-4">
<form action="<?= base_url('admin/Pesan/edit_data')?>" method="post" enctype="multipart/form-data">
    <input type="number" class="form-control" name="id_pesan" value="<?=$data_pesan->id_pesan?>"id="inputid_pesan"hidden>
            </div>
            <div class="mb-3">
                <label for="inputnama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama"value="<?=$data_pesan->nama?>" id="inputtelepon">
            </div>
            <div class="mb-3">
                <label for="inputemail" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?=$data_pesan->email?>"id="inputemail">
            </div>
            <div class="mb-3">
                <label for="inputpesan" class="form-label">Pesan</label> <br>
                <textarea name="pesan" id="inputpesan" cols="30" rows="10" class="form-control"><?=$data_pesan->pesan?></textarea>
            </div> 

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
