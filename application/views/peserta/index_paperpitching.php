                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (@$getjoin['status_bayar'] == '1') { ?>
                    <?= $this->session->flashdata('message');?>
               
               <div class="row">
                   <!-- Earnings (Monthly) Card Example -->
                   <div class="col-xl-12 col-md-12 mb-4">
                       <div class="card border-left-secondary shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <h4 class="list-group-item list-group-item-dark">DATA TARGET USAHA </h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/edit_paperpitching')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                        <label><h6>4.1 Latar Belakang : </h6></label>
                                        <br>
                                        <small>Ceritakan tentang latar belakang anda dan co-founder anda dalam pembuatan Start-Up ini</small>
                                        <textarea id="content11"  type="" rows="5" name="latar_belakang_pp" class="form-control"><?= @$getpaperpitching['latar_belakang_pp']; ?></textarea>
                                            <?=form_error('latar_belakang_pp','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            
                                            
                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.2 Permasalahan yang ingin diatasi : </h6></label>
                                            <small>Permasalahan apa ingin anda atasi melalui usaha yang anda rintis ini?</small>
                                            <textarea id="content12" type="" rows="5" name="permasalahan_pp"  class="form-control"><?= @$getpaperpitching['permasalahan_pp']; ?></textarea>
                                            <?=form_error('permasalahan_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.3 Solusi yang ditawarkan : </h6></label>
                                            <small>Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?</small>
                                            <textarea id="content13" type="" rows="5" name="solusi_pp" class="form-control"><?= @$getpaperpitching['solusi_pp']; ?></textarea>
                                            <?=form_error('solusi_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.4 Progres usaha : </h6></label>
                                            <small>Bagaimana progres/traction usaha anda sejauh ini?</small>
                                            <textarea id="content14" type="" rows="5" name="progres_pp" class="form-control"><?= @$getpaperpitching['progres_pp']; ?></textarea>
                                            <?=form_error('progres_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.5 Kompetitor Usaha : </h6></label>
                                            <small>Siapa saja kompetitor anda terhadap usaha yang anda rintis saat ini? Sebutkan</small>
                                            <textarea id="content15" type="" rows="5" name="kompetitor_pp" class="form-control"><?= @$getpaperpitching['kompetitor_pp']; ?></textarea>
                                            <?=form_error('kompetitor_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.6 Usaha Serupa : </h6></label>
                                            <small>Adakah usaha/serupa yang berhasil? Baik di nasional atau internasional? Sebutkan</small>
                                            <textarea id="content16"  type="" rows="5" name="kompetitor2_pp" class="form-control"><?= @$getpaperpitching['kompetitor2_pp']; ?></textarea>
                                            <?=form_error('kompetitor2_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.7 Target Usaha : </h6></label>
                                            <small>Siapa target pengguna solusi anda? Sebutkan</small>
                                            <textarea id="content17" type="" rows="5" name="target_pp" class="form-control"><?= @$getpaperpitching['target_pp']; ?></textarea>
                                            <?=form_error('target_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.8 Data yang digunakan : </h6></label>
                                            <small>Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda?</small>
                                            <textarea id="content18" type="" rows="5" name="data_pp" class="form-control"><?= @$getpaperpitching['data_pp']; ?></textarea>
                                            <?=form_error('data_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.9 Proses Bisnis : </h6></label>
                                            <small>Bagaimana proses bisnis dari aplikasi/solusi yang anda tawarkan?</small>
                                            <textarea id="content19" type="" rows="5" name="proses_bisnis_pp" class="form-control"><?= @$getpaperpitching['proses_bisnis_pp']; ?></textarea>
                                            <?=form_error('proses_bisnis_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                            <div class="form-group col-sm-5">
                                                <small>Gambar Proses Bisnis : </small>
                                                <br>
                                                <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#pb2ppModal"></button>
                                                <br>
                                                <small>Update Gambar : </small><br>
                                                <input type="file" name="proses_bisnis2_pp" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                                                <?=form_error('proses_bisnis2_pp','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        
                                            <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.10 Proses mewujudkan : </h6></label>
                                            <small>Bagaimana proses/tahapan mewujudkan solusi yang akan anda ?</small>
                                            <textarea id="content20" type="" rows="5" name="tahapan_pp"  class="form-control"><?= @$getpaperpitching['tahapan_pp']; ?></textarea>
                                            <?=form_error('tahapan_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>4.11 Kelebihan Aplikasi : </h6></label>
                                            <small>Kelebihan dari solusi/aplikasi yang ditawarkan?</small>
                                            <textarea id="content21" type="" rows="5" name="kelebihan_pp"  class="form-control"><?= @$getpaperpitching['kelebihan_pp']; ?></textarea>
                                            <?=form_error('kelebihan_pp','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                   <input type="hidden" name="date_added"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                               
                               <div class="form-group col-sm-11">
                               <button type="submit" class="btn btn-dark">Update Data</button>
                           </div>
                       </div>
                   </div>
                 

                      <!-- Modal pb2 pp -->
                      <div class="modal fade" id="pb2ppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">Proses Bisnis</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                              <img src="<?php echo base_url().'assets/files/'.@$getpaperpitching['proses_bisnis2_pp']?>" class="img-thumbnail" width="450px">
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

           
             
                <?php } else { ?>
                    <!-- Page Heading -->
                    <div class="p-3 mb-2 bg-danger text-white">
                          Pembayaran belum diverifikasi, silakan melakukan pembayaran atau menunggu pembayaran di verifikasi 
                          <span aria-hidden="true"></span>
                    </div>
                 
                <?php } ?>
                   
                  
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->