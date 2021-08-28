<div class="container-fluid">
    <div class="alert alert-success" role="alert">
        <i class="fas fa-user-friends"></i>Update Tema Proposal</div>


        <?php foreach ($temaproposal as $tem) : ?>

            <form method="post" action="<?php echo base_url('administrator/temaproposal/update_aksi')?>">
            
            <div class="form-group">
                <label>KODE TEMA</label>
                <input type="text" name="kode_tema" style="text-transform:uppercase" class="form-control" value="<?php echo $tem->kode_tema?>">
                <input type="hidden" name="id_tema" value="<?php echo $tem->id_tema?>">
            </div>

            <div class="form-group">
                <label>TEMA PROPOSAL</label>
                <input type="text" name="tema_proposal" class="form-control" value="<?php echo $tem->tema_proposal?>">
            </div>


            <button type="submit" class='btn btn-primary'>Simpan</button>
                
        </form>
        
        <?php endforeach; ?>


</div>