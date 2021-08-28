<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> BAB 3 - REVIEW PRODUK DETAIL
          
    </div>
    <div>
    <?php echo anchor('administrator/reviewproduk/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
          
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
    <?php 
        foreach ($admreviewdetail as $arvd) : ?>
     <tr>
                           <th>NAMA APLIKASI</th>
                           <td><?php echo strtoupper ($arvd->nama_solusi); ?></td>
                         

                     </tr>
                     <tr>
                           <th>DESKRRIPSI APLIKASI</th>
                           <td><?php echo $arvd->deskripsi_solusi ?></td>
                          

                     </tr>
                     <tr>      
                           <th>LOGO APLIKASI</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$arvd->logo_solusi?>" width="200px"></td>
                       
                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -1</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$arvd->prev_ui1_solusi?>" width="200px"></td>
                         

                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -2</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$arvd->prev_ui2_solusi?>" width="200px"></td>
                    
                        

                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -3</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$arvd->prev_ui3_solusi?>" width="200px"></td>
                      

                     </tr>
                     <tr>
                           <th>PREVIEW UI/UX -4</th>
                           <td><img src="<?php echo base_url().'assets/files/'.$arvd->prev_ui4_solusi?>" width="200px"></td>
                       
                     </tr>
                     <tr>
                           <th>TAHUN PEMBUATAN</th>
                           <td><?php echo $arvd->tahun_buat_solusi ?></td>
                         
                     </tr>
                     <tr>
                           <th>LINK VIDEO</th>
                           <td><?php echo $arvd->link_vid_solusi ?></td>
                         

                     </tr>
                     <tr>
                           <th>LINK PRODUK</th>
                           <td><?php echo $arvd->link_prod_solusi ?></td>
                        

                     </tr>
                     <tr>
                           <th>TEKNOLOGI YANG DIGUNAKAN</th>
                           <td><?php echo $arvd->teknologi_solusi ?></td>
                       
                       

                     </tr>
  
        <?php endforeach; ?>

</div>