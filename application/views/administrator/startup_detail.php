<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> BAB 1 - START-UP DETAIL
          
    </div>
    <div>
    <?php echo anchor('administrator/startup/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
          
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
    <?php 
        foreach ($admstartupdetail as $ast) : ?>
    <tr>
                           
                           <th>NAMA PERUSAHAAN</th>
                           <td><?php echo strtoupper ($ast->nama_start_up); ?></td>
                           
                     </tr>
                     <tr>
                           <th>VISI PERUSAHAAN</th>
                           <td><?php echo $ast->visi_start_up ?></td>
                           
                     </tr>
                     <tr>
                           <th>MISI PERUSAHAAN</th>
                           <td><?php echo $ast->misi_start_up ?></td>
                           
                     </tr> 
                     <tr>
                           <th>STRUKTUR ORGANISASI</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$ast->struktur_start_up?>" width="200px"></td>
                          
                     </tr>
                     <tr>
                           <th>LOGO PERUSAHAAN</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$ast->logo_start_up?>" width="200px"></td>
                           
                     
                     </tr>
                     <tr>
                           <th>TAGLINE PERUSAHAAN</th>
                           <td><?php echo strtoupper ($ast->tagline_start_up) ?></td>
                           
                     
                     </tr>
  
        <?php endforeach; ?>

</div>