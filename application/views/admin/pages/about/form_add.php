<div class="container-fluit px-4">
<form action="<?= base_url('admin/About/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputid_about" class="form-label">Id About</label>
                <input type="number" class="form-control" name="id_about" id="inputid_about">
            </div>
            <div class="mb-3">
                <label for="inputjudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="inputjudul">
            </div>
            <div class="mb-3">
                <label for="inputVisi" class="form-label">Visi</label>
                <input type="text" class="form-control" name="visi" id="inputVisi">
            </div>

            <div class="mb-3">
                <label for="inputMisi" class="form-label">Misi</label>
                <input type="text" class="form-control" name="misi" id="inputMisi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
