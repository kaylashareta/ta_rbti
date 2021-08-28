 
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>A. START-UP</h2>
                    </div>
               </div>
            </div> 
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo ($startup)?'':anchor('mahasiswa/startup/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  
                  <?php $no=1; foreach($startup as $su) :  ?>

                  <!-- nama perusahaan -->
                   <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>1.1 NAMA PERUSAHAAN</h4></label>
                         <input type="text" class="form-control" id="nama_start_up" name="nama_start_up" value="<?php echo strtoupper ($su->nama_start_up); ?>" disabled> 
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($su->status_nama_su == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($su->status_nama_su == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                            <?php } ?>
                        </div>

                        <?php if ($su->status_nama_su == 'Revisi') { ?>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catnamasuModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catnamasuModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catnamasuModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                     </div>

                  <!-- visi perusahaan -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>1.2 VISI START UP</h4></label>
                        <textarea id="content7" type="text" rows="7" name="visi_start_up" class="form-control" disabled> <?php echo $su->visi_start_up ?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($su->status_visi_su == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($su->status_visi_su == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($su->status_visi_su == 'Revisi') { ?>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catvisisuModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catvisisuModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catvisisuModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                     </div>


                  <!-- misi perusahaan -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>1.3 MISI START UP</h4></label>
                        <textarea id="content8" type="text" rows="7" name="misi_start_up" class="form-control" disabled> <?php echo $su->misi_start_up ?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        
                        <label><h6>STATUS </h6></label><br>
                                                    <?php if ($su->status_misi_su == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                                                    <?php } else if ($su->status_misi_su == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                        
                                                      
                     <?php if ($su->status_misi_su == 'Revisi') { ?>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catmisisuModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catmisisuModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catmisisuModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                     </div>


                      <!-- struktur perusahaan -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>1.4 STRUKTUR PERUSAHAAN</h4></label><br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#struktursuModal">
                        </button>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                       
                        <label><h6>STATUS </h6></label><br>
                                                    <?php if ($su->status_struktur_su == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                                                    <?php } else if ($su->status_struktur_su == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                     <?php if ($su->status_struktur_su == 'Revisi') { ?>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catstruktursuModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catstruktursuModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catstruktursuModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                     </div>

                     
 
                     <!-- logo perusahaan -->
                     <div class="row">
                     <div class="col-md-8 form-group mb-3">
                        <label><h4>1.5 LOGO PERUSAHAAN</h4></label><br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#logosuModal">
                        </button>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                      
                        <label><h6>STATUS </h6></label><br>
                                                    <?php if ($su->status_logo_su == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                                                    <?php } else if ($su->status_logo_su == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                        
                                              
                        <?php if ($su->status_logo_su == 'Revisi') { ?>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlogosuModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catlogosuModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlogosuModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                     </div>



                    <!-- tagline perusahaan -->
                    <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>1.6 TAGLINE PERUSAHAAN</h4></label>
                        <input type="text" class="form-control" id="tagline_start_up" name="tagline_start_up" value="<?php echo strtoupper ($su->tagline_start_up); ?>" disabled> 
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        
                        <label><h6>STATUS </h6></label><br>
                                                    <?php if ($su->status_tagline_su == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                                                    <?php } else if ($su->status_tagline_su == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                     <?php if ($su->status_tagline_su == 'Revisi') { ?>
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/startup/update/'.$su->id_start_up,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#exampleModalLong">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#exampleModalLong" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#exampleModalLong" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                     </div>



                           <!-- Modal cat nama su -->
                           <div class="modal fade" id="catnamasuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catnama_su" class="form-control" disabled> <?php echo $su->catnama_su?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat visi su -->
                        <div class="modal fade" id="catvisisuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catvisi_su" class="form-control" disabled> <?php echo $su->catvisi_su?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat misi su -->
                        <div class="modal fade" id="catmisisuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catmisi_su" class="form-control" disabled> <?php echo $su->catmisi_su?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat struktur su -->
                        <div class="modal fade" id="catstruktursuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catstruktur_su" class="form-control" disabled> <?php echo $su->catstruktur_su?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        
                        <!-- Modal cat struktur su -->
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
                          
                               <img src="<?php echo base_url().'assets/files/'.$su->struktur_start_up?>" class="img-thumbnail" width="450px"></div>
                        
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                       

                        <!-- Modal cat logo su -->
                        <div class="modal fade" id="catlogosuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catlogo_su" class="form-control" disabled> <?php echo $su->catlogo_su?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat logo su -->
                         <div class="modal fade" id="logosuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">LOGO ORGANISASI</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                          
                               <img src="<?php echo base_url().'assets/files/'.$su->logo_start_up?>" class="img-thumbnail" width="450px"></div>
                        
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>


                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="cattagline_su" class="form-control" disabled> <?php echo $su->cattagline_su?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              </div>
                           </div>
                        </div>
                        </div>

          
                  
                     <?php endforeach; ?>
                     </table>
                     <br> 
                     <?php echo anchor('mahasiswa/eproposal/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
         
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