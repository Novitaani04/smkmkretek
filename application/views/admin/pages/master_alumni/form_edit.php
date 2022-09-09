<div class="container-fluit px-4">
<form action="<?= base_url('admin/MasterAlumni/edit_data')?>" method="post" enctype="multipart/form-data">
<input type="number" class="form-control" name="id_alumni"value="<?=$data_alumni->id_alumni?>" id="inputid_alumni" hidden>
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama"value="<?=$data_alumni->nama?>" id="inputnama">
            </div>
            <div class="mb-3">
                <label for="inputFoto" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control"value="<?=$data_alumni->foto?>"id="inputFoto">
            </div>
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" value="L" name="jk"<?=($data_alumni->jk == 'L') ?'checked': ''?>> Laki Laki <br>
                <input type="radio" value="P" name="jk"<?=($data_alumni->jk == 'P') ?'checked': ''?>> Perempuan
            </div>
            <div class="mb-3">
                <label for="inputangkatan" class="form-label">Angkatan</label>
                <input type="text" class="form-control" name="angkatan" value="<?=$data_alumni->angkatan?>"id="inputangkatan">
            </div>
            <div class="mb-3">
                <label for="inputtahunlulus" class="form-label">Tahun Lulus</label>
                <input type="text" class="form-control" name="tahun_lulus" value="<?=$data_alumni->tahun_lulus?>"id="inputtahunlulus">
            </div>
            <div class="mb-3">
                <label for="inputpekerjaansekarang" class="form-label">Pekerjaan Sekarang</label>
                <input type="text" class="form-control" name="pekerjaan_sekarang" value="<?=$data_alumni->pekerjaan_sekarang?>"id="inputpekerjaansekarang">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
