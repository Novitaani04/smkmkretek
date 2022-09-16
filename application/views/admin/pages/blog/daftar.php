<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Blog</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="<?=base_url('admin/Blog/form_add')?>"class="btn btn-primary mt-3"><i class="fa fa-plus"></i>Tambah data baru</a>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id_blog</th>
                        <th>Judul</th>
                        <th>Foto</th>
                        <th>Tanggal</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach ($data as $row) :?>
                    <tr>
                        <td><?=$row->id_blog?></td>
                        <td><?=$row->judul?></td>
                        <td><img src="<?=base_url('foto/blog/') . $row->foto ?>" alt="<?=$row->foto?>"width="120"height="120"></td>
                        <td><?=$row->tanggal?></td>
                        <td><?=$row->isi?></td>
                        
                       
                        <td>
                            <a href="<?=base_url('admin/Blog/form_edit/') .$row->id_blog?>" class="btn btn-warning">Edit</a>
                            <a href="<?=base_url('admin/Blog/hapus/') .$row->id_blog?>" class="btn btn-danger"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>   
                    </tr>
                   <?php endforeach; ?>
                    </tbody>
            </table>
         
        </div>
    </div>
</div>

</div>

