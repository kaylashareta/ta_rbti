<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Sub Judul Artikel</div>


        <?php foreach ($subjudul as $sub) : ?>

            <form method="post" action="<?php echo base_url('administrator/subjudul/update_aksi')?>">
            
            <div class="form-group">
                <label>SUBJUDUL</label>
                <input type="text" name="subjudul" style="text-transform:uppercase" class="form-control" value="<?php echo $sub->subjudul?>">
                <input type="hidden" name="id_subjudul" value="<?php echo $sub->id_subjudul?>">
            </div>

       
            <button type="submit" class='btn btn-primary'>Simpan</button>
                
        </form>
        
        <?php endforeach; ?>


</div>