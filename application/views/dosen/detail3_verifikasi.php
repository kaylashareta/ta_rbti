
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 3</h2>
                     <h1>Review Produk</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div> 
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <form method="post" action="<?= base_url('dosen/daftarproposal/verifikasi3/'.@$verif3['id_proposal']) ?>" enctype="multipart/form-data">  
                  <div class="row"><div class="col-md-2 form-group mb-3">
                       <h6>Tanggal Submit</h6>
                        <input type="text" class="form-control" id="tanggal_submit_solusi" name="tanggal_submit_solusi" value="<?= @$verif3['tanggal_submit_solusi']; ?>" disabled> 
                  </div></div>
                     <!-- nama aplikasi -->
                     <input type="hidden" name="id_proposal" value="<?= @$verif3['id_proposal']; ?>">
                 
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.1 NAMA APLIKASI</h4></label>
                        <input type="text" class="form-control" id="nama_solusi" name="nama_solusi" value="<?= @$verif3['nama_solusi']; ?>" disabled> 
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_nama_solusi" class="form-control"  value="<?php echo $verif3['status_nama_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_nama_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_solusi" class="form-control" > <?= @$verif3['catnama_solusi']; ?></textarea>
                        </div>
                        </div>



                         <!-- deskripsi aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>3.2 DESKRRIPSI APLIKASI</h4></label>
                        <textarea id="content9" type="text" rows="7" name="deksripsi_solusi" class="form-control" disabled> <?= @$verif3['deskripsi_solusi']; ?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_desk_solusi" class="form-control"  value="<?php echo $verif3['status_desk_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_desk_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catdesk_solusi" class="form-control" > <?= @$verif3['catdesk_solusi']; ?></textarea>
                        </div>
                        </div>

                         <!-- logo aplikasi -->
                         <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.3 LOGO APLIKASI</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#logorpModal">
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_logo_solusi" class="form-control"  value="<?php echo $verif3['status_logo_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_logo_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlogo_solusi" class="form-control" > <?= @$verif3['catlogo_solusi']; ?></textarea>
                        </div>
                        </div>

                        <!-- prev ui1 aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.4 PREVIEW UI/UX-1</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui1rpModal">
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_ui1_solusi" class="form-control"  value="<?php echo $verif3['status_ui1_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_ui1_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catui1_solusi" class="form-control" > <?= @$verif3['catui1_solusi']; ?></textarea>
                        </div>
                        </div>

                        <!-- prev ui2 aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.5 PREVIEW UI/UX-2</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui2rpModal">
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_ui2_solusi" class="form-control"  value="<?php echo $verif3['status_ui2_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_ui2_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catui2_solusi" class="form-control" > <?= @$verif3['catui2_solusi']; ?></textarea>
                        </div>
                        </div>

                        <!-- prev ui3 aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.6 PREVIEW UI/UX-3</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui3rpModal">
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_ui3_solusi" class="form-control"  value="<?php echo $verif3['status_ui3_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_ui3_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catui3_solusi" class="form-control" > <?= @$verif3['catui3_solusi']; ?></textarea>
                        </div>
                        </div>

                        <!-- prev ui4 aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.7 PREVIEW UI/UX-4</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui4rpModal">
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_ui4_solusi" class="form-control"  value="<?php echo $verif3['status_ui4_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_ui4_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catui4_solusi" class="form-control" > <?= @$verif3['catui4_solusi']; ?></textarea>
                        </div>
                        </div>

                        <!-- tahun buat aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.8 TAHUN PEMBUATAN APLIKASI</h4></label>
                        <input type="number" class="form-control" id="tahun_buat_solusi" name="tahun__buat_solusi" value="<?= @$verif3['tahun_buat_solusi']; ?>" disabled> 
                        </div>
                      
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_tahun_solusi" class="form-control"  value="<?php echo $verif3['status_tahun_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_tahun_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattahun_solusi" class="form-control" > <?= @$verif3['cattahun_solusi']; ?></textarea>
                        </div>
                        </div>


                        <!-- link video aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.9 LINK VIDEO APLIKASI</h4></label>
                        <input type="text" class="form-control" id="link_vid_solusi" name="link_vid_solusi" value="<?= @$verif3['link_vid_solusi']; ?>" disabled> 
                        </div>
                     
                       <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_linkvid_solusi" class="form-control"  value="<?php echo $verif3['status_linkvid_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_linkvid_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlinkvid_solusi" class="form-control" > <?= @$verif3['catlinkvid_solusi']; ?></textarea>
                        </div>
                        </div>

                        <!-- link produk aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.10 LINK PRODUK APLIKASI</h4></label>
                        <input type="text" class="form-control" id="link_prod_solusi" name="link_prod_solusi" value="<?= @$verif3['link_prod_solusi']; ?>" disabled> 
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_linkprod_solusi" class="form-control"  value="<?php echo $verif3['status_linkprod_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_linkprod_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlinkprod_solusi" class="form-control" > <?= @$verif3['catlinkprod_solusi']; ?></textarea>
                        </div>
                        </div>

                           <!-- teknologi yang digunakan aplikasi -->
                           <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>3.11 TEKNOLOGI YANG DIGUNAKAN</h4></label>
                        <textarea id="content10" type="text" rows="7" name="teknologi_solusi" class="form-control" disabled> <?= @$verif3['teknologi_solusi']; ?></textarea>
                        </div>
                      
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_tekn_solusi" class="form-control"  value="<?php echo $verif3['status_tekn_solusi']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif3['status_tekn_solusi'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattekn_solusi" class="form-control" > <?= @$verif3['cattekn_solusi']; ?></textarea>
                        </div>
                        </div>

                         <!-- Modal logo -->
                         <div class="modal fade" id="logorpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">LOGO APLIKASI</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>LOGO APLIKASI</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.$verif3['logo_solusi']?>" class="img-thumbnail" width="450px">
                              </div>
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                        <!-- Modal ui1 -->
                        <div class="modal fade" id="ui1rpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-1</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>PREVIEW UI/UX-1</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.$verif3['prev_ui1_solusi']?>" class="img-thumbnail" width="450px">
                              </div>
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                     
                        <!-- Modal ui2 -->
                        <div class="modal fade" id="ui2rpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-1</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>PREVIEW UI/UX-2</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.$verif3['prev_ui2_solusi']?>" class="img-thumbnail" width="450px">
                              </div>
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                        <!-- Modal ui3 -->
                        <div class="modal fade" id="ui3rpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-3</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>PREVIEW UI/UX-3</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.$verif3['prev_ui3_solusi']?>" class="img-thumbnail" width="450px">
                              </div>
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                        <!-- Modal ui4 -->
                        <div class="modal fade" id="ui4rpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-4</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>PREVIEW UI/UX-4</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.$verif3['prev_ui4_solusi']?>" class="img-thumbnail" width="450px">
                              </div>
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

               
                  
                   
                        <button type="submit" class='btn btn-primary'>Simpan</button>
                     
                     <br>
                     <br>
                     
                  </div>
                 
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content9' );
                CKEDITOR.replace( 'content10' );
               
            </script>
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->