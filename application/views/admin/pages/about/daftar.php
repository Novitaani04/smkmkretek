<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">About</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Rekap master About</h6>
        <?php
            if ($this->db->count_all_results('about') == 0){
        ?>
        <a href="<?=base_url('admin/About/form_add')?>"class="btn btn-primary mt-3"><i class="fa fa-plus"></i>Tambah data baru</a>
       <?php }?>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id About</th>
                        <th>Judul</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach ($data as $row) :?>
                    <tr>
                        <td><?=$row->id_about?></td>
                        <td><?=$row->judul?></td>
                        <td><?=$row->visi?></td>
                        <td><?=$row->misi?></td>

                        <td>
                            <a href="<?=base_url('admin/About/form_edit/') .$row->id_about?>" class="btn btn-warning">Edit</a>
                            <a href="<?=base_url('admin/About/hapus/') .$row->id_about?>" class="btn btn-danger"onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>   
                    </tr>
                   <?php endforeach; ?>
                    </tbody>
            </table>
         
        </div>
    </div>
</div>

</div>

