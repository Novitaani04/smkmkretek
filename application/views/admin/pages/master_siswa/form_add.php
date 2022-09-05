<div class="container-fluit px-4">
<form action="<?= base_url('admin/MasterSiswa/add_new_data')?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="inputNIK" class="form-label">NIK</label>
                <input type="number" class="form-control" name="nik" id="inputNIK">
            </div>
            <div class="mb-3">
                <label for="inputNama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" name="nama_siswa" id="inputNama">
            </div>
            <div class="mb-3">
                <label for="inputJK" class="form-label">Jenis Kelamin</label> <br>
                <input type="radio" value="L" name="jk"> Laki Laki <br>
                <input type="radio" value="P" name="jk"> Perempuan
            </div>
            <div class="mb-3">
                <label for="inputJurusan" class="form-label">Jurusan</label> <br>
                <select name="id_jurusan" class="form-control">
                    <?php
                        $result=$this->JurusanModel->select_all_jurusan();
                        foreach($result as $row){

                        
                    ?>
                    <option value="<?= $row->id_jurusan?>"><?= $row->nama_jurusan ?></option>
                    
                    <?php
                        }
                    ?>
                </select>
            </div> 
            <div class="mb-3">
                <label for="inputAlamat" class="form-label">Alamat</label> <br>
                <textarea name="alamat" id="inputAlamat" cols="30" rows="10" class="form-control"></textarea>
            </div> 
            <div class="mb-3">
                <label for="inputPassFoto" class="form-label">Pass foto</label>
                <input type="file" name="passfoto" class="form-control" id="inputPassFoto">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
