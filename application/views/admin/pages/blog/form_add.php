<div class="container-fluit px-4">
<form action="<?= base_url('admin/Blog/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputJudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul" id="inputJudul">
            </div>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputtanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" name="tanggal" id="inputtanggal">
            </div>
            <div class="mb-3">
                <label for="inputisi" class="form-label">Isi</label>
                <input type="text" class="form-control" name="isi" id="inputisi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
