
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 4</h2>
                     <h1>Paper Pitching</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                   <?php $no=1; foreach($detailpro4 as $pp) :  ?>
                    <!-- <?php echo anchor('dosen/daftarproposal/verifikasi4/'.$pp->id_proposal,'<button class="btn btn-sm btn-primary mb-3"></i> Verifikasi </button> ')?>-->
                    <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                                     
                     
                     <div class="row"><div class="col-md-2 form-group mb-3">
                       <h6>Tanggal Submit</h6>
                        <input type="text" class="form-control" id="tanggal_submit_pp" name="tanggal_submit_pp" value="<?php echo ($pp->tanggal_submit_pp); ?>" disabled> 
                  </div></div>
                    
                     <!-- latar belakang -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.1 LATAR BELAKANG</h4></label>
                        <textarea id="content11" type="text" rows="7" name="latar_belakang_pp" class="form-control" disabled> <?php echo $pp->latar_belakang_pp ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_latarb_pp" name="status_latarb_pp" value="<?php echo ($pp->status_latarb_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catlatarb_pp" class="form-control" disabled> <?php echo $pp->catlatarb_pp?></textarea>
                        </div>
                        </div>

                         <!-- permasalahan yang ditemui-->
                         <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.2 PERMASALAHAN YANG INGIN DIATASI</h4></label>
                        <textarea id="content12" type="text" rows="7" name="permasalahan_pp" class="form-control" disabled> <?php echo $pp->permasalahan_pp ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_permas_pp" name="status_permas_pp" value="<?php echo ($pp->status_permas_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catpermas_pp" class="form-control" disabled> <?php echo $pp->catpermas_pp?></textarea>
                        </div>
                        </div>

                    <!-- SOLUSI YANG DITAWARKAN-->
                    <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.3 SOLUSI YANG DITAWARKAN</h4></label>
                        <textarea id="content13" type="text" rows="7" name="solusi_pp" class="form-control" disabled> <?php echo $pp->solusi_pp ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_solusi_pp" name="status_solusi_pp" value="<?php echo ($pp->status_solusi_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catsolusi_pp" class="form-control" disabled> <?php echo $pp->catsolusi_pp?></textarea>
                        </div>
                        </div>
                  
                  
                   <!-- SOLUSI YANG DITAWARKAN-->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.4 PROGRESS USAHA</h4></label>
                        <textarea id="content14" type="text" rows="7" name="progres_pp" class="form-control" disabled> <?php echo $pp->progres_pp ?></textarea>
                        </div>
                        
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_progres_pp" name="status_solusi_pp" value="<?php echo ($pp->status_progres_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catprogres_pp" class="form-control" disabled> <?php echo $pp->catprogres_pp?></textarea>
                        </div>
                        </div>
                  
                   <!-- KOMPETITOR USAHA-->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.5 KOMPETITOR USAHA</h4></label>
                        <textarea id="content15" type="text" rows="7" name="kompetitor_pp" class="form-control" disabled> <?php echo $pp->kompetitor_pp?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_komp_pp" name="status_komp_pp" value="<?php echo ($pp->status_komp_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkomp_pp" class="form-control" disabled> <?php echo $pp->catkomp_pp?></textarea>
                        </div>
                        </div>

                  <!-- USAHA SERUPA-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.6 USAHA SERUPA</h4></label>
                        <textarea id="content16" type="text" rows="7" name="kompetitor2_pp" class="form-control" disabled> <?php echo $pp->kompetitor2_pp?></textarea>
                        </div>
                        
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_komp2_pp" name="status_komp2_pp" value="<?php echo ($pp->status_komp2_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkomp2_pp" class="form-control" disabled> <?php echo $pp->catkomp2_pp?></textarea>
                        </div>
                        </div>


                  <!-- TARGET PENGGUNA-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.7 TARGET PENGGUNA</h4></label>
                        <textarea id="content17" type="text" rows="7" name="target_pp" class="form-control" disabled> <?php echo $pp->target_pp?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_target_pp" name="status_target_pp" value="<?php echo ($pp->status_target_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="cattarget_pp" class="form-control" disabled> <?php echo $pp->cattarget_pp?></textarea>
                        </div>
                        </div>

                  
                  <!-- DATA YANG DIGUNAKAN-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.8 DATA YANG DIGUNAKAN</h4></label>
                        <textarea id="content18" type="text" rows="7" name="data_pp" class="form-control" disabled> <?php echo $pp->data_pp?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_data_pp" name="status_data_pp" value="<?php echo ($pp->status_data_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catdata_pp" class="form-control" disabled> <?php echo $pp->catdata_pp?></textarea>
                        </div>
                        </div>

                  
                  
                  <!-- PROSES BISNIS-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.9 PROSES BISNIS</h4></label>
                        <textarea id="content19" type="text" rows="7" name="proses_bisnis_pp" class="form-control" disabled> <?php echo $pp->proses_bisnis_pp?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_pb_pp" name="status_pb_pp" value="<?php echo ($pp->status_pb_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catpb_pp" class="form-control" disabled> <?php echo $pp->catpb_pp?></textarea>
                        </div>
                        </div>


                  <!-- PROSES BISNIS -->
                      <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>4.10 PROSES BISNIS</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#pb2bpModal">
                        </div>

                     
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_pb2_pp" name="status_pb2_pp" value="<?php echo ($pp->status_pb2_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catpb2_pp" class="form-control" disabled> <?php echo $pp->catpb2_pp?></textarea>
                        </div>
                        </div>


                  <!-- TAHAPAN MEWUJUDKAN SOLUSI-->
             
                 <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.11 TAHAPAN MEWUJUDKAN SOLUSI</h4></label>
                        <textarea id="content20"  type="text" rows="7" name="tahapan_pp" class="form-control" disabled> <?php echo $pp->tahapan_pp?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_tahap_pp" name="status_tahap_pp" value="<?php echo ($pp->status_tahap_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="cattahap_pp" class="form-control" disabled> <?php echo $pp->cattahap_pp?></textarea>
                        </div>
                        </div>


                  <!-- KELEBIHAN DARI SOLUSI ANDA -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.12 KELEBIHAN DARI SOLUSI ANDA</h4></label>
                        <textarea id="content21"  type="text" rows="7" name="kelebihan_pp" class="form-control" disabled> <?php echo $pp->kelebihan_pp?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_keleb_pp" name="status_keleb_pp" value="<?php echo ($pp->status_keleb_pp); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkeleb_pp" class="form-control" disabled> <?php echo $pp->catkeleb_pp?></textarea>
                        </div>
                        </div>

                         <!-- Modal pb2 -->
                         <div class="modal fade" id="pb2bpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PROSES BISNIS</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                              <img src="<?php echo base_url().'assets/files/'.$pp->proses_bisnis2_pp?>" class="img-thumbnail" width="450px"></div>
                     
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>
                  
         

                     <?php endforeach; ?>

                  <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                   
                     <br>
                     <br>
                     
                  </div>
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content11' );
                CKEDITOR.replace( 'content12' );
                CKEDITOR.replace( 'content13' );
                CKEDITOR.replace( 'content14' );
                CKEDITOR.replace( 'content15' );
                CKEDITOR.replace( 'content16' );
                CKEDITOR.replace( 'content17' );
                CKEDITOR.replace( 'content18' );
                CKEDITOR.replace( 'content19' );
                CKEDITOR.replace( 'content20' );
                CKEDITOR.replace( 'content21' );
            </script>
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->