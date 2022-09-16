<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Gallery</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?=base_url('admin/Gallery/form_add')?>"class="btn btn-primary mt-3"><i class="fa fa-plus"></i>Tambah data baru</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id Gallery</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach ($data as $row) :?>
                    <tr>
                        <td><?=$row->id_gallery?></td>
                        <td><?=$row->judul?></td>
                        <td><img src="<?=base_url('foto/gallery/') . $row->foto ?>" alt="<?=$row->foto?>"width="120"height="120"></td>
                        <td><?=$row->deskripsi?></td>
                        <td>
                            <a href="<?=base_url('admin/Gallery/form_edit/') .$row->id_gallery ?>" class="btn btn-warning">Edit</a>
                            <a href="<?=base_url('admin/Gallery/hapus/') .$row->id_gallery ?>" class="btn btn-danger"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>   
                    </tr>
                   <?php endforeach; ?>
                    </tbody>
            </table>
         
        </div>
    </div>
</div>

</div>