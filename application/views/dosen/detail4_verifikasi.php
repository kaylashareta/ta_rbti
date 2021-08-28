
   
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
                  <form method="post" action="<?= base_url('dosen/daftarproposal/verifikasi4/'.@$verif4['id_proposal']) ?>" enctype="multipart/form-data">  
                  <div class="col-md-2 form-group mb-3">
                      <label> <h6>Tanggal Submit</h6></label>
                        <input type="text" class="form-control" id="tanggal_submit_pp" name="tanggal_submit_pp" value="<?= @$verif4['tanggal_submit_pp']; ?>" disabled> 
                  </div>
                     <!-- latar belakang -->
                     <input type="hidden" name="id_proposal" value="<?= @$verif4['id_proposal']; ?>">
                
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.1 LATAR BELAKANG</h4></label>
                        <textarea id="content11"  type="text" rows="7" name="latar_belakang_pp" class="form-control" disabled> <?= @$verif4['latar_belakang_pp']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_latarb_pp" class="form-control"  value="<?php echo $verif4['status_latarb_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_latarb_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catlatarb_pp" class="form-control" > <?= @$verif4['catlatarb_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                       </div>
                        </div>

                         <!-- permasalahan yang ditemui-->
                        <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.2 PERMASALAHAN YANG INGIN DIATASI</h4></label>
                        <textarea id="content12" type="text" rows="7" name="permasalahan_pp" class="form-control" disabled> <?= @$verif4['permasalahan_pp']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_permas_pp" class="form-control"  value="<?php echo $verif4['status_permas_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_permas_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catpermas_pp" class="form-control" > <?= @$verif4['catpermas_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                        </div>
                        </div>

                    <!-- SOLUSI YANG DITAWARKAN-->
                    <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.3 SOLUSI YANG DITAWARKAN</h4></label>
                        <textarea id="content13" type="text" rows="7" name="solusi_pp" class="form-control" disabled><?= @$verif4['solusi_pp']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_solusi_pp" class="form-control"  value="<?php echo $verif4['status_solusi_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_solusi_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catsolusi_pp" class="form-control" > <?= @$verif4['catsolusi_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                      </div>
                        </div>
                  
                  
                   <!-- SOLUSI YANG DITAWARKAN-->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.4 PROGRESS USAHA</h4></label>
                        <textarea id="content14"  type="text" rows="7" name="progres_pp" class="form-control" disabled> <?= @$verif4['progres_pp']; ?></textarea>
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_progres_pp" class="form-control"  value="<?php echo $verif4['status_progres_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_progres_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catprogres_pp" class="form-control" > <?= @$verif4['catprogres_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                       </div>
                        </div>
                  
                   <!-- KOMPETITOR USAHA-->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.5 KOMPETITOR USAHA</h4></label>
                        <textarea id="content15" type="text" rows="7" name="kompetitor_pp" class="form-control" disabled><?= @$verif4['kompetitor_pp']; ?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_komp_pp" class="form-control"  value="<?php echo $verif4['status_komp_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_komp_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catkomp_pp" class="form-control" > <?= @$verif4['catkomp_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                        </div>
                        </div>

                  <!-- USAHA SERUPA-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.6 USAHA SERUPA</h4></label>
                        <textarea id="content16" type="text" rows="7" name="kompetitor2_pp" class="form-control" disabled><?= @$verif4['kompetitor2_pp']; ?></textarea>
                        </div>
                        
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_komp2_pp" class="form-control"  value="<?php echo $verif4['status_komp2_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_komp2_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catkomp2_pp" class="form-control" > <?= @$verif4['catkomp2_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                       </div>
                        </div>


                  <!-- TARGET PENGGUNA-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.7 TARGET PENGGUNA</h4></label>
                        <textarea id="content17"  type="text" rows="7" name="target_pp" class="form-control" disabled><?= @$verif4['target_pp']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_target_pp" class="form-control"  value="<?php echo $verif4['status_target_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_target_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattarget_pp" class="form-control" > <?= @$verif4['cattarget_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                        </div>
                        </div>

                  
                  <!-- DATA YANG DIGUNAKAN-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.8 DATA YANG DIGUNAKAN</h4></label>
                        <textarea id="content18" type="text" rows="7" name="data_pp" class="form-control" disabled><?= @$verif4['data_pp']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_data_pp" class="form-control"  value="<?php echo $verif4['status_data_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_data_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catdata_pp" class="form-control" > <?= @$verif4['catdata_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                       </div>
                        </div>

                  
                  
                  <!-- PROSES BISNIS-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.9 PROSES BISNIS</h4></label>
                        <textarea id="content19" type="text" rows="7" name="proses_bisnis_pp" class="form-control" disabled><?= @$verif4['proses_bisnis_pp']; ?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_pb_pp" class="form-control"  value="<?php echo $verif4['status_pb_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_pb_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catpb_pp" class="form-control" > <?= @$verif4['catpb_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
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
                        <select name="status_pb2_pp" class="form-control"  value="<?php echo $verif4['status_pb2_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_pb2_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catpb2_pp" class="form-control" > <?= @$verif4['catpb2_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                       </div>
                        </div>


                  <!-- TAHAPAN MEWUJUDKAN SOLUSI-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.11 TAHAPAN MEWUJUDKAN SOLUSI</h4></label>
                        <textarea id="content20" type="text" rows="7" name="tahapan_pp" class="form-control" disabled> <?= @$verif4['tahapan_pp']; ?></textarea>
                        </div>
                       
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_tahap_pp" class="form-control"  value="<?php echo $verif4['status_tahap_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_tahap_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattahap_pp" class="form-control" > <?= @$verif4['cattahap_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                     </div>
                        </div>


                  <!-- KELEBIHAN DARI SOLUSI ANDA -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>4.12 KELEBIHAN DARI SOLUSI ANDA</h4></label>
                        <textarea id="content21" type="text" rows="7" name="kelebihan_pp" class="form-control" disabled> <?= @$verif4['kelebihan_pp']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_keleb_pp" class="form-control"  value="<?php echo $verif4['status_keleb_pp']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif4['status_keleb_pp'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catkeleb_pp" class="form-control" > <?= @$verif4['catkeleb_pp']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                      </div>
                        </div>

                 
                        <button type="submit" class='btn btn-primary'>Simpan</button>

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
                              <img src="<?php echo base_url().'assets/files/'.@$verif4['proses_bisnis2_pp']?>?>" class="img-thumbnail" width="450px"></div>
                     
                      
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>
                     
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