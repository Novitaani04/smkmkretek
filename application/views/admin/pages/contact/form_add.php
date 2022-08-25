<div class="container-fluit px-4">
<form action="<?= base_url('admin/Contact/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_contact" class="form-label">Id Contact</label>
                <input type="number" class="form-control" name="id_contact" id="inputid_carousell">
            </div>
            <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label> <br>
                <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"></textarea>
            </div> 
            <div class="mb-3">
                <label for="inputtelepon" class="form-label">Telepon</label>
                <input type="text" class="form-control" name="telepon" id="inputtelepon">
            </div>

            <div class="mb-3">
                <label for="inputemail" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="inputemail">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
