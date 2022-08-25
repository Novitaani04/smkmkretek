<div class="container-fluit px-4">
<form action="<?= base_url('admin/Contact/edit_data')?>" method="post" enctype="multipart/form-data">
    <input type="number" class="form-control" name="id_contact" value="<?=$data_contact->id_contact?>"id="inputid_contact"hidden>
            </div>
            <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label> <br>
                <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"><?=$data_contact->alamat?></textarea>
            </div> 
            <div class="mb-3">
                <label for="inputtelepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" name="telepon"value="<?=$data_contact->telepon?>" id="inputtelepon">
            </div>

            <div class="mb-3">
                <label for="inputemail" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?=$data_contact->email?>"id="inputemail">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
