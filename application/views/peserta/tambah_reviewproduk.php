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
                                       <h4 class="list-group-item list-group-item-dark">INPUT DATA APLIKASI START-UP </h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/tambah_reviewproduk')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                        <label><h6>3.1 Nama Aplikasi Start-Up : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_solusi" value="<?=set_value('nama_solusi');?>" style="text-transform:uppercase" class="form-control">
                                            <?=form_error('nama_solusi','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            
                                            
                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>3.2 Deskripsi Aplikasi : </h6></label>
                                            <textarea id="content9" type="" rows="5" name="deskripsi_solusi" class="form-control"><?=set_value('deskripsi_solusi');?></textarea>
                                            <?=form_error('deskripsi_solusi','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        
                                        <div class="form-group row col-sm-11">
                                            <div class="form-group col-sm-5">
                                            <label for="exampleFormControlFile1"><h6>3.3 Logo Aplikasi : </h6></label>
                                                <input type="file" name="logo_solusi" id="img" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
                                                <?=form_error('logo_solusi','<small class="text-danger pl-3">','</small>');?>
                                                <h6>JPG/JPEG/PNG max 2MB</h6>
                                            </div>

                                            <div class="form-group col-sm-5">
                                            <label for="exampleFormControlFile1"><h6>3.4 Preview UI/UX Aplikasi - 1 : </h6></label>
                                                <input type="file" name="prev_ui1_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                                                <?=form_error('prev_ui1_solusi','<small class="text-danger pl-3">','</small>');?>
                                                <h6>JPG/JPEG/PNG max 2MB</h6>
                                            </div>
                                        </div>

                                        <div class="form-group row col-sm-11">
                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>3.5 Preview UI/UX Aplikasi - 2 : </h6></label>
                                            <input type="file" name="prev_ui2_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                                            <?=form_error('prev_ui2_solusi','<small class="text-danger pl-3">','</small>');?>
                                            <h6>JPG/JPEG/PNG max 2MB</h6>
                                        </div>

                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>3.6 Preview UI/UX Aplikasi - 3 : </h6></label>
                                            <input type="file" name="prev_ui3_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                                            <?=form_error('prev_ui3_solusi','<small class="text-danger pl-3">','</small>');?>
                                            <h6>JPG/JPEG/PNG max 2MB</h6>
                                        </div>
                                        </div>

                                        <div class="form-group row col-sm-11">
                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>3.7 Preview UI/UX Aplikasi - 4 : </h6></label>
                                            <input type="file" name="prev_ui4_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                                            <?=form_error('prev_ui4_solusi','<small class="text-danger pl-3">','</small>');?>
                                            <h6>JPG/JPEG/PNG max 2MB</h6>
                                        </div>

                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>3.8 Tahun Pembuatan Aplikasi : </h6></label>
                                            <input type="number" name="tahun_buat_solusi" value="<?=set_value('tahun_buat_solusi');?>" class="form-control">
                                            <?=form_error('tahun_buat_solusi','<small class="text-danger pl-3">','</small>');?> 
                                        </div>
                                        </div>

                                        <div class="form-group row col-sm-11">
                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>3.9 Link Video Aplikasi : </h6></label>
                                            <input type="text" name="link_vid_solusi" value="<?=set_value('link_vid_solusi');?>"  class="form-control">
                                            <?=form_error('link_vid_solusi','<small class="text-danger pl-3">','</small>');?> 
                                        </div>

                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>3.10 Link Produk Aplikasi : </h6></label>
                                            <input type="text" name="link_prod_solusi"  value="<?=set_value('link_prod_solusi');?>"  class="form-control">
                                            <?=form_error('link_prod_solusi','<small class="text-danger pl-3">','</small>');?>     
                                        </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>3.11 Teknologi yang digunakan : </h6></label>
                                            <textarea id="content10" type="" rows="5" name="teknologi_solusi" class="form-control"><?=set_value('teknologi_solusi');?></textarea>
                                            <?=form_error('teknologi_solusi','<small class="text-danger pl-3">','</small>');?>
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
                    CKEDITOR.replace( 'content10' );
                </script>
      
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->