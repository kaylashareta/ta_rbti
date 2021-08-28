<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> BAB 4 - PAPER PITCHING DETAIL
          
    </div>
    <div>
    <?php echo anchor('administrator/paperpitching/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
          
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
    <?php 
        foreach ($admpaperdetail as $apd) : ?>
      <tr>
                           <th>LATAR BELAKANG</th>
                           <td><?php echo $apd->latar_belakang_pp ?></td>
                         
                     </tr>
                     <tr>
                           <th>PERMASALAHAN YANG INGIN DIATASI</th>
                           <td><?php echo $apd->permasalahan_pp ?></td>
                       
                     </tr>
                     <tr>
                           <th>SOLUSI YANG DITAWARKAN</th>
                           <td><?php echo $apd->solusi_pp ?></td>
                        
                     </tr>
                     <tr>
                           <th>PROGRESS USAHA</th>
                           <td><?php echo $apd->progres_pp ?></td>
                        
                     </tr>
                     <tr>
                           <th>COMPETITOR USAHA</th>
                           <td><?php echo $apd->kompetitor_pp ?></td>
                         
                     </tr>
                     <tr>
                           <th>USAHA SERUPA</th>
                           <td><?php echo $apd->kompetitor2_pp ?></td>
                        
                     </tr>
                     <tr>
                           <th>TARGET PENGGUNA</th>
                           <td><?php echo $apd->target_pp ?></td>
                      

                     </tr>
                     <tr>
                           <th>DATA YANG DIGUNAKAN</th>
                           <td><?php echo $apd->data_pp ?></td>
                       

                     </tr>
                     <tr>
                           <th>PROSES BISNIS</th>
                           <td><?php echo $apd->proses_bisnis_pp ?></td>
                       

                     </tr>
                     <tr>
                           <th>PROSES BISNIS (GAMBAR)</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$apd->proses_bisnis2_pp?>" width="200px"></td>
                       

                     </tr>
                     <tr>
                           <th>TAHAPAN MEWUJUDKAN SOLUSI</th>
                           <td><?php echo $apd->tahapan_pp ?></td>
                       
                     </tr>
                     <tr>
                           <th>KELEBIHAN DARI SOLUSI ANDA</th>
                           <td><?php echo $apd->kelebihan_pp ?></td>
                        
                     </tr>
        <?php endforeach; ?>

</div>