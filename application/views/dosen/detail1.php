
   
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
                  <?php $no=1; foreach($detailpro1 as $su) :  ?>
                 <!-- <?php echo anchor('dosen/daftarproposal/verifikasi1/'.$su->id_proposal,'<button class="btn btn-sm btn-primary mb-3"></i> Verifikasi </button> ')?>-->
                  <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                
                  
                  <div class="row"><div class="col-md-2 form-group mb-3">
                       <h6>Tanggal Submit</h6>
                        <input type="text" class="form-control" id="tanggal_submit_su" name="tanggal_submit_su" value="<?php echo (@$su->tanggal_submit_su); ?>" disabled> 
                  </div></div>
                  

                   <!-- nama perusahaan -->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>1.1 NAMA PERUSAHAAN</h4></label>
                        <input type="text" class="form-control" id="nama_start_up" name="nama_start_up" value="<?php echo strtoupper ($su->nama_start_up); ?>" disabled> 
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_nama_su" name="status_nama_su" value="<?php echo (@$su->status_nama_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_su" class="form-control" disabled> <?php echo @$su->catnama_su?></textarea>
                        </div>
                        </div>

                  <!-- visi perusahaan -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>1.2 VISI START UP</h4></label>
                        <textarea id="content7" type="text" rows="7" name="visi_start_up" class="form-control" disabled> <?php echo $su->visi_start_up ?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_visi_su" name="status_visi_su" value="<?php echo (@$su->status_visi_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catvisi_su" class="form-control" disabled> <?php echo @$su->catvisi_su?></textarea>
                        </div>
                        </div>


                  <!-- misi perusahaan -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>1.3 MISI START UP</h4></label>
                        <textarea id="content8" type="text" rows="7" name="misi_start_up" class="form-control" disabled> <?php echo $su->misi_start_up ?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_misi_su" name="status_misi_su" value="<?php echo (@$su->status_misi_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catmisi_su" class="form-control" disabled> <?php echo @$su->catmisi_su?></textarea>
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
                        <input type="text" class="form-control" id="status_struktur_su" name="status_struktur_su" value="<?php echo (@$su->status_struktur_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catstruktur_su" class="form-control" disabled> <?php echo @$su->catstruktur_su?></textarea>
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
                        <input type="text" class="form-control" id="status_logo_su" name="status_logo_su" value="<?php echo (@$su->status_logo_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlogo_su" class="form-control" disabled> <?php echo @$su->catlogo_su?></textarea>
                        </div>
                        </div>


                    <!-- tagline perusahaan -->
                    <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>1.6 TAGLINE PERUSAHAAN</h4></label>
                        <input type="text" class="form-control" id="tagline_start_up" name="tagline_start_up" value="<?php echo strtoupper (@$su->tagline_start_up); ?>" disabled> 
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tagline_su" name="status_tagline_su" value="<?php echo (@$su->status_tagline_su); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattagline_su" class="form-control" disabled> <?php echo @$su->cattagline_su?></textarea>
                        </div>
                        </div>


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
                              <img src="<?php echo base_url().'assets/files/'.@$su->struktur_start_up?>" class="img-thumbnail" width="450px"></div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                               <img src="<?php echo base_url().'assets/files/'.@$su->logo_start_up?>" class="img-thumbnail" width="450px"></div>
                        
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                  

                  


                <?php endforeach; ?>

                  
                     
                     </table>
                     <br>
                     <br>
                     
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
