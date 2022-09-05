<div class="container-fluit px-4">
<form action="<?= base_url('admin/Guru/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputnip" class="form-label">Nip</label>
                <input type="number" class="form-control" name="nip" id="inputnip">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="inputNama">
            </div>
            <div class="mb-3">
                <label for="inputtempat" class="form-label">Tempat</label>
                <input type="text" class="form-control" name="tempat" id="inputtempat">
            </div>
            <div class="mb-3">
                <label for="inputtanggallahir" class="form-label">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" id="inputtanggal_lahir">
            </div>
            <div class="mb-3">
                <label for="inputJurusan" class="form-label">Mapel</label> <br>
                <select name="mapel" class="form-control">
                    <option value="MTK">Matematika</option>
                    <option value="B.INDO">Bahasa Indonesia</option>
                    <option value="B.ING">Bahasa Inggris</option>
                    <option value="B.ARAB">Bahasa Arab</option>
                </select>
            </div> 
            <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label> <br>
                <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"></textarea>
            </div> 
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" value="L" name="jk"> Laki Laki <br>
                <input type="radio" value="P" name="jk"> Perempuan
            </div>
            <div class="mb-3">
                <label for="inputstatus_kepegawaian" class="form-label">Status Kepegawaian</label>
                <input type="text" class="form-control" name="status_kepegawaian" id="inputstatus_kepegawaian">
            </div>
   
            <div class="mb-3">
                <label for="inputPassFoto" class="form-label">Pass foto</label>
                <input type="file" name="passfoto" class="form-control" id="inputPassFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
