<div class="container-fluit px-4">
<form action="<?= base_url('admin/Video/add_new_data')?>" method="post" enctype="multipart/form-data">
            
                <input type="number" class="form-control" name="id_blog" id="inputJudul"hidden>
            
            <div class="mb-3">
                <label for="inputJudul_video" class="form-label">Judul Video</label>
                <input type="text" class="form-control" name="judul_video" id="inputJudul_video">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
