
      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

        <div class="alert alert-danger col-md-6" role="alert">
                <i class="fas fa-user-friends"></i><h2>INPUT JUDUL PROPOSAL<h2></div>

        <form method="post" action="<?php echo base_url('mahasiswa/eproposal/input')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_mhs"  class="form-control" value="<?php echo $this->session->uname_user ?>">
                <input type="hidden" name="datepro"  class="form-control" value="<?php echo date("Y-m-d") ?>">
            
             </div>
            <div class="form-group col-md-6 ">
                <label><h4>JUDUL PROPOSAL</h4></label>
                <input type="text"  name="judul_proposal" placeholder="Masukkan Judul Proposal Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('judul_proposal','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="form-group col-md-6 ">
                <label><h4>TEMA PROPOSAL</h4></label>
                <br>
                <select name="tema_proposal">
                <option disabled selected>---Pilih Tema Proposal---</option>
                <?php foreach ($tema as $row) : ?>
                <option value="<?= $row['tema_proposal'];?>"><?= $row['tema_proposal'];?></option>
                <?php endforeach; ?>
                </select>
               </div>
           <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>
        </div>