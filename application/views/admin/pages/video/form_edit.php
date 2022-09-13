<div class="container-fluit px-4">
<form action="<?= base_url('admin/Video/edit_data')?>" method="post" enctype="multipart/form-data">
    <input type="number" class="form-control" name="id_video" value="<?=$data_video->id_video?>"id="inputid_video"hidden>
            </div>
            <div class="mb-3">
                <label for="inputjudul_video" class="form-label">judul_video</label>
                <input type="text" class="form-control" name="judul_video"value="<?=$data_video->judul_video?>" id="inputjudulvideo">
            </div>
            <div class="mb-3">
                <label for="inputbackground" class="form-label">Background</label>
                <input type="text" class="form-control" name="background"value="<?=$data_video->background?>" id="inputjudulvideo">
            </div>
           

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
