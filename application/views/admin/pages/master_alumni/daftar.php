<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Master Alumni</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekap master alumni</h6>
        <a href="<?=base_url('admin/MasterAlumni/form_add')?>"class="btn btn-primary mt-3"><i class="fa fa-plus"></i>Tambah data baru</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Foto</th>
                        <th>Jenis Kelamin</th>
                        <th>Angkatan</th>
                        <th>Tahun Lulus</th>
                        <th>Pekerjaan Sekarang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach ($data as $row) :?>
                    <tr>
                        <td><?=$row->nama?></td>
                        <td><img src="<?=base_url('foto/alumni/') . $row->foto ?>" alt="<?=$row->foto?>"width="120"height="120"></td>
                        <td><?=$row->jk?></td>
                        <td><?=$row->angkatan?></td>
                        <td><?=$row->tahun_lulus?></td>
                        <td><?=$row->pekerjaan_sekarang?></td>
                       
                        <td>
                            <a href="<?=base_url('admin/MasterAlumni/form_edit/') .$row->nama?>" class="btn btn-warning">Edit</a>
                            <a href="<?=base_url('admin/MasterAlumni/hapus/') .$row->nama?>" class="btn btn-danger"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>   
                    </tr>
                   <?php endforeach; ?>
                    </tbody>
            </table>
         
        </div>
    </div>
</div>

</div>