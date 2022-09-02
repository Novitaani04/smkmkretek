<div class="container-fluit px-4">
<form action="<?= base_url('admin/About/add_new_data')?>" method="post" enctype="multipart/form-data">
<input type="number" class="form-control" name="id_about" id="inputid_about" hidden>
            
            <div class="mb-3">
                <label for="inputjudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="inputjudul">
            </div>
            <div class="mb-3">
                <label for="inputVisi" class="form-label">Visi</label>
                <input type="text" class="form-control" name="visi" id="inputVisi">
            </div>

            <div class="mb-3">
                <label for="inputmisi" class="form-label">Misi</label> <br>
                <textarea name="misi" id="summernote" cols="30" rows="10" class="form-control"></textarea>
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
