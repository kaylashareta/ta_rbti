<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Kelas</div>


        <?php foreach ($kelas as $kel) : ?>

            <form method="post" action="<?php echo base_url('administrator/kelas/update_aksi')?>">
            
            <div class="form-group">
                <label>NAMA KELAS</label>
                <input type="text" name="kelas" style="text-transform:uppercase" class="form-control" value="<?php echo $kel->kelas?>">
                <input type="hidden" name="id_kelas" value="<?php echo $kel->id_kelas?>">
            </div>


            <button type="submit" class='btn btn-primary'>Simpan</button>
                
        </form>
        
        <?php endforeach; ?>


</div>