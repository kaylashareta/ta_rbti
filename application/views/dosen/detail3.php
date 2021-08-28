
   
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
                <?php $no=1; foreach($detailpro3 as $rp) :  ?>
                  <!--<?php echo anchor('dosen/daftarproposal/verifikasi3/'.$rp->id_proposal,'<button class="btn btn-sm btn-primary mb-3"></i> Verifikasi </button> ')?>-->
                  <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                   
                  <div class="row"><div class="col-md-2 form-group mb-3">
                       <h6>Tanggal Submit</h6>
                        <input type="text" class="form-control" id="tanggal_submit_solusi" name="tanggal_submit_solusi" value="<?php echo ($rp->tanggal_submit_solusi); ?>" disabled> 
                  </div></div>
                     <!-- nama aplikasi -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.1 NAMA APLIKASI</h4></label>
                        <input type="text" class="form-control" id="nama_solusi" name="nama_solusi" value="<?php echo strtoupper ($rp->nama_solusi); ?>" disabled> 
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_nama_solusi" name="status_nama_solusi" value="<?php echo ($rp->status_nama_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_solusi" class="form-control" disabled> <?php echo $rp->catnama_solusi?></textarea>
                        </div>
                        </div>


                         <!-- deskripsi aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>3.2 DESKRRIPSI APLIKASI</h4></label>
                        <textarea id="content9" type="text" rows="7" name="deksripsi_solusi" class="form-control" disabled> <?php echo $rp->deskripsi_solusi ?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_desk_solusi" name="status_desk_solusi" value="<?php echo ($rp->status_desk_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catdesk_solusi" class="form-control" disabled> <?php echo $rp->catdesk_solusi?></textarea>
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
                        <input type="text" class="form-control" id="status_logo_solusi" name="status_logo_solusi" value="<?php echo ($rp->status_logo_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catlogo_solusi" class="form-control" disabled> <?php echo $rp->catlogo_solusi?></textarea>
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
                        <input type="text" class="form-control" id="status_ui1_solusi" name="status_ui1_solusi" value="<?php echo ($rp->status_ui1_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catui1_solusi" class="form-control" disabled> <?php echo $rp->catui1_solusi?></textarea>
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
                        <input type="text" class="form-control" id="status_ui2_solusi" name="status_ui2_solusi" value="<?php echo ($rp->status_ui2_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catui2_solusi" class="form-control" disabled> <?php echo $rp->catui2_solusi?></textarea>
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
                        <input type="text" class="form-control" id="status_ui3_solusi" name="status_ui3_solusi" value="<?php echo ($rp->status_ui3_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catui3_solusi" class="form-control" disabled> <?php echo $rp->catui3_solusi?></textarea>
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
                        <input type="text" class="form-control" id="status_ui4_solusi" name="status_ui4_solusi" value="<?php echo ($rp->status_ui1_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="5" name="catui4_solusi" class="form-control" disabled> <?php echo $rp->catui4_solusi?></textarea>
                        </div>
                        </div>

                        <!-- tahun buat aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.8 TAHUN PEMBUATAN APLIKASI</h4></label>
                        <input type="number" class="form-control" id="tahun_buat_solusi" name="tahun__buat_solusi" value="<?php echo strtoupper ($rp->tahun_buat_solusi); ?>" disabled> 
                        </div>
                      
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tahun_solusi" name="status_tahun_solusi" value="<?php echo ($rp->status_tahun_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattahun_solusi" class="form-control" disabled> <?php echo $rp->cattahun_solusi?></textarea>
                        </div>
                        </div>

                        <!-- link video aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.9 LINK VIDEO APLIKASI</h4></label>
                        <input type="text" class="form-control" id="link_vid_solusi" name="link_vid_solusi" value="<?php echo $rp->link_vid_solusi ?>" disabled> 
                        </div>
                     
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_linkvid_solusi" name="status_linkvid_solusi" value="<?php echo ($rp->status_linkvid_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlinkvid_solusi" class="form-control" disabled> <?php echo $rp->catlinkvid_solusi?></textarea>
                        </div>
                        </div>

                        <!-- link produk aplikasi -->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>3.10 LINK PRODUK APLIKASI</h4></label>
                        <input type="text" class="form-control" id="link_prod_solusi" name="link_prod_solusi" value="<?php echo $rp->link_prod_solusi ?>" disabled> 
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_linkprod_solusi" name="status_linkprod_solusi" value="<?php echo ($rp->status_linkprod_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlinkprod_solusi" class="form-control" disabled> <?php echo $rp->catlinkprod_solusi?></textarea>
                        </div>
                        </div>

                           <!-- teknologi yang digunakan aplikasi -->
                           <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>3.11 TEKNOLOGI YANG DIGUNAKAN</h4></label>
                        <textarea id="content10" type="text" rows="7" name="teknologi_solusi" class="form-control" disabled> <?php echo $rp->teknologi_solusi ?></textarea>
                        </div>
                      
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tekn_solusi" name="status_tekn_solusi" value="<?php echo ($rp->status_tekn_solusi); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="cattekn_solusi" class="form-control" disabled> <?php echo $rp->cattekn_solusi?></textarea>
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
                               <img src="<?php echo base_url().'assets/files/'.$rp->logo_solusi?>" class="img-thumbnail" width="450px"></div>
                      
                      
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
                               <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui1_solusi?>" class="img-thumbnail" width="450px"></div>
                      
                      
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
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-2</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>PREVIEW UI/UX-2</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui2_solusi?>" class="img-thumbnail" width="450px"></div>
                      
                      
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
                               <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui3_solusi?>" class="img-thumbnail" width="450px"></div>
                      
                      
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
                               <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui4_solusi?>" class="img-thumbnail" width="450px"></div>
                      
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                
                     <?php endforeach; ?>

                  
                   
                   
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