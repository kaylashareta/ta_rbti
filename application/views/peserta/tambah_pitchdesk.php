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
                                       <h4 class="list-group-item list-group-item-dark">INPUT DATA PITCH DESK - PRESENTASI SINGKAT</h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/tambah_pitchdesk')?>" enctype="multipart/form-data">
                                      
                                            <div class="form-group col-sm-11">
                                                <label for="textarea"><h5> Presentasikan / uraikan aplikasi anda secara singkat : </h5></label>
                                                <br>
                                                <small>pada bagian ini, anda dapat memberi uraian singkat mengenai perusahaan start-up / aplikasi start-up anda, 
                                                baik dalam kelebihan atau hal lainnya yang belum dapat diterangkan pada inputan sebelumnya</small>
                                                <textarea id="content9" type="" rows="5" name="uraian_singkat" class="form-control"><?=set_value('uraian_singkat');?></textarea>
                                                <?=form_error('uraian_singkat','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        
                                        
                                            <div class="form-group col-sm-11">
                                            <label for="exampleFormControlFile1"><h5> File presentasi  : </h5></label><br>
                                                <small>pada bagian ini, anda dapat mengirimkan file presentasi mengenai perusahaan start-up / aplikasi start-up anda, 
                                                baik dalam kelebihan atau hal lainnya yang belum dapat diterangkan pada inputan sebelumnya. File presentasi berupa pdf / dapat di export menjadi file pdf </small>
                                                <input type="file" name="file_pitchd" id="pdf" accept=".pdf" class="form-control-file" id="exampleFormControlFile1">
                                                <?=form_error('file_pitchd','<small class="text-danger pl-3">','</small>');?>
                                            </div>

                                       
                                   <input type="hidden" name="date_added"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                               
                               <div class="form-group col-sm-11">
                               <button type="submit" class="btn btn-dark">Simpan</button>
                           </div>
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
                    CKEDITOR.replace( 'content9' );
              </script>
      
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->