<div class="container-fluit px-4">
<form action="<?= base_url('admin/About/edit_data')?>" method="post" enctype="multipart/form-data">
    <input type="number" class="form-control" name="id_about" value="<?=$data_about->id_about?>"id="inputid_contact"hidden>
            </div>
            <div class="mb-3">
                <label for="inputjudul" class="form-label">Judul</label>
                <input type="text" class="form-control" name="judul"value="<?=$data_about->judul?>" id="inputjudul">
            </div>

            <div class="mb-3">
                <label for="inputvisi" class="form-label">Visi</label> <br>
                <textarea name="visi" id="inputvisi" cols="30" rows="10" class="form-control"><?=$data_contact->visi?></textarea>
            </div> 

            <div class="mb-3">
                <label for="inputmisi" class="form-label">Misi</label> <br>
                <textarea name="misi" id="inputmisi" cols="30" rows="10" class="form-control"><?=$data_contact->misi?></textarea>
            </div> 
            <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
