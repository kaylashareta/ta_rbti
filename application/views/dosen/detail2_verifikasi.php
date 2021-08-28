
      <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 2</h2>
                     <h1>Biodata Tim</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div> 
               </div> 
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <form method="post" action="<?= base_url('dosen/daftarproposal/verifikasi2/'.@$verif2['id_proposal']) ?>" enctype="multipart/form-data">  
                 

                  <div class="row">
                  <div class="col-md-3 form-group mb-3">
                  </div>
                  <div class="col-md-2 form-group mb-3">
                      <label> <h6>Tanggal Submit</h6></label>
                        <input type="text" class="form-control" id="tanggal_submit_biodata" name="tanggal_submit_biodata" value="<?= @$verif2['tanggal_submit_biodata']; ?>" disabled> 
                  </div>
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_nama_hustler" class="form-control"  value="<?php echo $verif2['status_nama_hustler']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_nama_hustler'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                         </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_hustler" class="form-control" > <?= @$verif2['catnama_hustler']; ?></textarea>
                        </div>
                        </div>


                  <!-- nama hustler -->
               
                  <input type="hidden" name="id_proposal" value="<?= @$verif2['id_proposal']; ?>">
                    
                   <div class="row">
                   <div class="col-md-2 form-group mb-3">
                  </div>
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>2.1 NAMA HUSTLER</h4></label>
                        <input type="text" class="form-control" id="nama_start_up" name="nama_start_up" value="<?= @$verif2['nama_hustler']; ?>" disabled> 
                        
                    </div>

                    <div class="col-md-1 form-group mb-3">
                        <label><h6>DETAIL</h6></label>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#hustlerModal">
                        </button>
                        </div>
                        
                   
                        </div>

               
            
                  <!-- nama hipster -->
                  <div class="row">
                  <div class="col-md-2 form-group mb-3">
                  </div>
                  <div class="col-md-8 form-group mb-3">
                  <label><h4>2.6 NAMA HIPSTER</h4></label>
                  <input type="text" class="form-control" id="nama_hipster" name="nama_hipster" value="<?= @$verif2['nama_hipster']; ?>" disabled> 
                  </div>
                  <div class="col-md-1 form-group mb-3">
                        <label><h6>DETAIL</h6></label>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#hipsterModal">
                        </button>
                        </div>
                                 </div>

                  <!-- nama hacker -->
                  <div class="row">
                  <div class="col-md-2 form-group mb-3">
                  </div>
                  <div class="col-md-8 form-group mb-3">
                  <label><h4>2.11 NAMA HACKER</h4></label>
                  <input type="text" class="form-control" id="nama_hacker" name="nama_hacker" value="<?= @$verif2['nama_hacker']; ?>" disabled> 
                  </div>
                  <div class="col-md-1 form-group mb-3">
                        <label><h6>DETAIL</h6></label>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#hackerModal">
                        </button>
                        </div>
                  </div>



                  
                     <button type="submit" class='btn btn-primary'>Simpan</button>
                     <br>
                     <br>





                        <!-- Modal Hustler -->
                        <div class="modal fade" id="hustlerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">DETAIL HUSTLER</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                 <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                    <label><h4>2.1 NAMA HUSTLER</h4></label>
                                    <input type="text" class="form-control" id="nama_start_up" name="nama_start_up" value="<?= @$verif2['nama_hustler']; ?>" disabled>                         
                                     </div>                                           
                                    </div>
                                    <!-- alamat hustler -->
                                    <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                    <label for="textarea"><h4>2.2 ALAMAT HUSTLER</h4></label>
                                    <textarea id="content1" type="text" rows="5" name="alamat_hustler" class="form-control" disabled> <?= @$verif2['alamat_hustler']; ?></textarea>
                                    </div>                                                                  
                                    </div>
                                    <!-- telp  hustler -->
                                    <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                    <label><h4>2.3 TELPON HUSTLER</h4></label>
                                    <input type="text" class="form-control" id="telp_hustler" name="telp_hustler" value="<?= @$verif2['telp_hustler']; ?>" disabled> 
                                    </div>                                                            
                                    </div>
                                    <!-- email hustler -->
                                    <div class="row"><div class="col-md-12 form-group mb-3">
                                    <label><h4>2.4 EMAIL HUSTLER</h4></label>
                                    <input type="text" class="form-control" id="email_hustler" name="email_hustler" value="<?= @$verif2['email_hustler']; ?>" disabled> 
                                    </div>                                                               
                                    </div>
                                   <!-- tugas hustler -->
                                    <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                    <label for="textarea"><h4>2.5 TUGAS HUSTLER</h4></label>
                                    <textarea id="content2" type="text" rows="5" name="tugas_hustler" class="form-control" disabled> <?= @$verif2['tugas_hustler']; ?></textarea>
                                     </div>                           
                                    </div>
                                 </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                         </div>
                        </div>

                         <!-- Modal Hipster -->
                         <div class="modal fade" id="hipsterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">DETAIL HIPSTER</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <!-- nama hipster -->
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label><h4>2.6 NAMA HIPSTER</h4></label>
                                 <input type="text" class="form-control" id="nama_hipster" name="nama_hipster" value="<?= @$verif2['nama_hipster']; ?>" disabled> 
                                 </div>                              
                                 </div>
                                 <!-- alamat hipster -->
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label for="textarea"><h4>2.7 ALAMAT HIPSTER</h4></label>
                                 <textarea id="content3" type="text" rows="5" name="alamat_hipster" class="form-control" disabled> <?= @$verif2['alamat_hipster']; ?></textarea>
                                 </div>                                                            
                                 </div>
                                 <!-- telp  hipster -->
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label><h4>2.8 TELPON HIPSTER</h4></label>
                                 <input type="text" class="form-control" id="telp_hipster" name="telp_hipster" value="<?= @$verif2['telp_hipster']; ?>" disabled> 
                                 </div>                                                            
                                 </div>
                                 <!-- email hipster -->
                                 <div class="row"><div class="col-md-12 form-group mb-3">
                                 <label><h4>2.9 EMAIL HIPSTER</h4></label>
                                 <input type="text" class="form-control" id="email_hipster" name="email_hipster" value="<?= @$verif2['email_hipster']; ?>" disabled> 
                                 </div>
                                 <!-- tugas hipster -->
                                 </div>
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label for="textarea"><h4>2.10 TUGAS HIPSTER</h4></label>
                                 <textarea id="content4" type="text" rows="5" name="tugas_hipster" class="form-control" disabled><?= @$verif2['tugas_hipster']; ?></textarea>
                                 </div>
                                 </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal Hacker -->
                         <div class="modal fade" id="hackerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">DETAIL HACKER</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label><h4>2.11 NAMA HACKER</h4></label>
                                 <input type="text" class="form-control" id="nama_hacker" name="nama_hacker" value="<?= @$verif2['nama_hacker']; ?>" disabled> 
                                 </div>                                                                                             
                                 </div>
                                 <!-- alamat hacker -->
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label for="textarea"><h4>2.12 ALAMAT HACKER</h4></label>
                                 <textarea id="content5" type="text" rows="5" name="alamat_hacker" class="form-control" disabled> <?= @$verif2['alamat_hacker']; ?></textarea>
                                 </div>                                                   
                                 </div>
                                 <!-- telp  hacker -->
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label><h4>2.13 TELPON HACKER</h4></label>
                                 <input type="text" class="form-control" id="telp_hacker" name="telp_hacker" value="<?= @$verif2['telp_hacker']; ?>" disabled> 
                                 </div>                                                              
                                 </div>
                                 <!-- email hacker -->
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label><h4>2.14 EMAIL HACKER</h4></label>
                                 <input type="text" class="form-control" id="email_hacker" name="email_hacker" value="<?= @$verif2['email_hacker']; ?>" disabled> 
                                 </div>                                                               
                                 </div>
                                 <!-- tugas hacker -->
                                 <div class="row">
                                 <div class="col-md-12 form-group mb-3">
                                 <label for="textarea"><h4>2.15 TUGAS HACKER</h4></label>
                                 <textarea id="content6" type="text" rows="5" name="tugas_hacker" class="form-control" disabled> <?= @$verif2['tugas_hacker']; ?></textarea>
                                 </div>                 
                                 </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                     
                  </div>
                  <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content1' );
                CKEDITOR.replace( 'content2' );
                CKEDITOR.replace( 'content3' );
                CKEDITOR.replace( 'content4' );
                CKEDITOR.replace( 'content5' );
                CKEDITOR.replace( 'content6' );
            </script>
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases --> 