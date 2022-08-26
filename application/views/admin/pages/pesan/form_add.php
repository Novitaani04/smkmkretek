<div class="container-fluit px-4">
<form action="<?= base_url('admin/Pesan/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_pesan" class="form-label">Id Pesan</label>
                <input type="number" class="form-control" name="id_pesan" id="inputid_carousell">
            </div>
            <div class="mb-3">
                <label for="inputnama" class="form-label">nama</label>
                <input type="text" class="form-control" name="nama" id="inputnama">
            </div>
            <div class="mb-3">
                <label for="inputemail" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="inputemail">
            </div>
            
            <div class="mb-3">
                <label for="inputpesan" class="form-label">Pesan</label>
                <input type="text" class="form-control" name="pesan" id="inputpesan">
            </div>

            
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
