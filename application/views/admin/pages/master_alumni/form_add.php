<div class="container-fluit px-4">
<form action="<?= base_url('admin/MasterAlumni/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama"id="inputnama">
            </div>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control" id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" value="L" name="jk"> Laki Laki <br>
                <input type="radio" value="P" name="jk"> Perempuan
            </div>
            <div class="mb-3">
                <label for="inputangkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control" name="angkatan" id="inputangkatan">
            </div>
            <div class="mb-3">
                <label for="inputtahunlulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" name="tahun_lulus" id="inputtahunlulus">
            </div>
            <div class="mb-3">
                <label for="inputpekerjaansekarang" class="form-label">Pekerjaan Sekarang</label>
                <input type="text" class="form-control" name="pekerjaan_sekarang" id="inputpekerjaansekarang">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
