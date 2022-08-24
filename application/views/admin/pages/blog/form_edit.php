<div class="container-fluit px-4">
<form action="<?= base_url('admin/Blog/edit_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputJudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" value="<?=$data_blog->judul?>" id="inputJudul">
            </div>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputtanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" value="<?=$data_blog->tanggal?>"id="inputtanggal">
            </div>
            <div class="mb-3">
                <label for="inputisi" class="form-label">Isi</label>
                <textarea name="isi" cols="30" rows="10" class="form-control"><?=$data_blog->isi?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
