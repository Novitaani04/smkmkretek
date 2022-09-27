<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Video</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
        <?php
            if ($this->db->count_all_results('video') == 0){
        ?>
        <a href="<?=base_url('admin/Video/form_add')?>"class="btn btn-primary mt-3"><i class="fa fa-plus"></i>Tambah data baru</a>
       <?php }?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id Video</th>
                        <th>Judul Video</th>
                        <th>Background</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach ($data as $row) :?>
                    <tr>
                        <td><?=$row->id_video?></td>
                        <td><?=$row->judul_video?></td>
                        <td><img src="<?=base_url('foto/video/') . $row->background ?>" alt="<?=$row->background?>"width="120"height="120"></td>
                        <td>
                            <a href="<?=base_url('admin/Video/form_edit/') .$row->id_video?>" class="btn btn-warning">Edit</a>
                            <a href="<?=base_url('admin/Video/hapus/') .$row->id_video?>" class="btn btn-danger"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>   
                    </tr>
                   <?php endforeach; ?>
                    </tbody>
            </table>
         
        </div>
    </div>
</div>

</div>

