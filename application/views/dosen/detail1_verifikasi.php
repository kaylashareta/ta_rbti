 
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 1</h2>
                     <h1>Start-Up</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div> 
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <form method="post" action="<?= base_url('dosen/daftarproposal/verifikasi1/'.@$verif1['id_proposal']) ?>" enctype="multipart/form-data">  
                  <div class="row"><div class="col-md-2 form-group mb-3">
                       <h6>Tanggal Submit</h6>
                        <input type="text" class="form-control" id="tanggal_submit_su" name="tanggal_submit_su" value="<?= @$verif1['tanggal_submit_su']; ?>" disabled> 
                  </div></div>
                 
                  <!-- nama perusahaan -->
                 <input type="hidden" name="id_proposal" value="<?= @$verif1['id_proposal']; ?>">
                    
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>1.1 NAMA PERUSAHAAN</h4></label>
                        <input type="text" class="form-control" id="nama_start_up" name="nama_start_up" value="<?= @$verif1['nama_start_up']; ?>" disabled> 
                        
                    </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_nama_su" class="form-control"  value="<?php echo $verif1['status_nama_su']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif1['status_nama_su'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_su" class="form-control" ><?= @$verif1['catnama_su']; ?></textarea>
                        </div>
                        </div> 

                  <!-- visi perusahaan -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                       <label for="textarea"><h4>1.2 VISI START UP</h4></label>
                        <textarea id="content7" type="text" rows="7" name="visi_start_up" class="form-control" disabled><?= @$verif1['visi_start_up']; ?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_visi_su" class="form-control"  value="<?php echo $verif1['status_visi_su']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif1['status_visi_su'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catvisi_su" class="form-control" ><?= @$verif1['catvisi_su']; ?></textarea>
                        </div>
                        </div>


                  <!-- misi perusahaan -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                       <label for="textarea"><h4>1.3 MISI START UP</h4></label>
                        <textarea id="content8" type="text" rows="7" name="misi_start_up" class="form-control" disabled><?= @$verif1['misi_start_up']; ?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_misi_su" class="form-control"  value="<?php echo $verif1['status_misi_su']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif1['status_misi_su'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catmisi_su" class="form-control" ><?= @$verif1['catmisi_su']; ?></textarea>
                        </div>
                        </div>


                      <!-- struktur perusahaan -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>1.4 STRUKTUR ORGANISASI</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#struktursuModal">
                        </div>
                        
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_struktur_su" class="form-control"  value="<?php echo $verif1['status_struktur_su']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif1['status_struktur_su'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>
                        
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catstruktur_su" class="form-control" ><?= @$verif1['catstruktur_su']; ?></textarea>
                        </div>
                        </div>
 
                     <!-- logo perusahaan -->
                     <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>1.5 LOGO PERUSAHAAN</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#logosuModal">
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_logo_su" class="form-control"  value="<?php echo $verif1['status_logo_su']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif1['status_logo_su'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catlogo_su" class="form-control" ><?= @$verif1['catlogo_su']; ?></textarea>
                        </div>
                        </div>


                    <!-- tagline perusahaan -->
                    <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>1.6 TAGLINE PERUSAHAAN</h4></label>
                        <input type="text" class="form-control" id="tagline_start_up" name="tagline_start_up" value="<?= @$verif1['tagline_start_up']; ?>" disabled> 
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_tagline_su" class="form-control"  value="<?php echo $verif1['status_tagline_su']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif1['status_tagline_su'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattagline_su" class="form-control" > <?= @$verif1['cattagline_su']; ?></textarea>
                        </div>
                        </div>

                        <button type="submit" class='btn btn-primary'>Simpan</button>
                        <br>
                        <br>

                         <!-- Modal struktur -->
                         <div class="modal fade" id="struktursuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">STRUKTUR ORGANISASI</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>STRUKTUR ORGANISASI</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.@$verif1['struktur_start_up']?>" class="img-thumbnail" width="450px">
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                         <!-- Modal struktur -->
                         <div class="modal fade" id="logosuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">LOGO PERUSAHAAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>LOGO PERUSAHAAN</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.@$verif1['logo_start_up']?>" class="img-thumbnail" width="450px">
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                  


                    
                  
                     
                  </div>
                 
                     
               </div>
               <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content7' );
                CKEDITOR.replace( 'content8' );
                
            </script>
            </div>
         </div>
      </div>
      <!-- end cases -->
