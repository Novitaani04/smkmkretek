<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Master jurusan</h1>



<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?=base_url('admin/Jurusan/form_add')?>"class="btn btn-primary mt-3"><i class="fa fa-plus"></i>Tambah data baru</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id jurusan </th>
                        <th>Nama jurusan </th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach ($data as $row) :?>
                            
                    <tr>
                        <td><?=$row->id_jurusan ?></td>
                        <td><?=$row->nama_jurusan ?></td>
                        <td><img src="<?=base_url('foto/jurusan/') . $row->foto ?>" alt="<?=$row->foto?>"width="120"height="120"></td>
                        <td><?=$row->deskripsi?></td>
                        <td>
                            <a href="<?=base_url('admin/Jurusan/form_edit/') .$row->id_jurusan  ?>" class="btn btn-warning">Edit</a>
                            <?php
                            $jumlah =$this->JurusanModel->checksiswa($row->id_jurusan);
                            
                            if($jumlah == 0){
                      
                            ?>
                            <a href="<?=base_url('admin/Jurusan/hapus/') .$row->id_jurusan  ?>" class="btn btn-danger"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                            <?php
                                  }
                            ?>
                        </td>   
                    </tr>
                   <?php endforeach; ?>
                    </tbody>
            </table>
         
        </div>
    </div>
</div>

</div>