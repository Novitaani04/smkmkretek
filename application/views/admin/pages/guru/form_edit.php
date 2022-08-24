<div class="container-fluit px-4">
<form action="<?= base_url('admin/Guru/edit_data')?>" method="post" enctype="multipart/form-data">
<input type="text" name="nip_lama" value="<?=$data_guru->nip?>" hidden>  
            <div class="mb-3">
                <label for="inputnip" class="form-label">Nip</label>
                <input type="number" class="form-control" name="nip"value="<?=$data_guru->nip?>" id="inputnip">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?=$data_guru->nama?>"id="inputNama">
            </div>
            <div class="mb-3">
                <label for="inputtempat" class="form-label">Tempat</label>
                <input type="text" class="form-control" name="tempat"value="<?=$data_guru->tempat?>"id="inputtempat">
            </div>
            <div class="mb-3">
                <label for="inputtanggallahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir"value="<?=$data_guru->tanggal_lahir?>"id="inputtanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="inputJurusan" class="form-label">Mapel</label> <br>
                <select name="mapel" class="form-control">
                    <option value="mtk"<?=($data_guru->mapel == 'mtk') ?'checked': ''?>>Matematika</option>
                    <option value="b.indo"<?=($data_guru->mapel == 'b.indo') ?'checked': ''?>>Bahasa Indonesia</option>
                    <option value="b.ing"<?=($data_guru->mapel == 'b.ing') ?'checked': ''?>>Bahasa Inggris</option>
                    <option value="b.arab"<?=($data_guru->mapel == 'b.arab') ?'checked': ''?>>Bahasa Arab</option>
                </select>
            </div> 
            <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label> <br>
                <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"><?=$data_guru->alamat?></textarea>
            </div> 
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" value="L" name="jk"<?=($data_guru->jk == 'L') ?'checked': ''?>> Laki Laki <br>
                <input type="radio" value="P" name="jk"<?=($data_guru->jk == 'L') ?'checked': ''?>> Perempuan
            </div>
            <div class="mb-3">
                <label for="inputstatus_kepegawaian" class="form-label">Status Kepegawaian</label>
                <input type="text" class="form-control" name="status_kepegawaian" value="<?=$data_guru->status_kepegawaian?>" id="inputstatus_kepegawaian">
            </div>
   
            <div class="mb-3">
                <label for="inputPassFoto" class="form-label">Pass foto</label>
                <input type="file" name="passfoto" class="form-control" id="inputPassFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
