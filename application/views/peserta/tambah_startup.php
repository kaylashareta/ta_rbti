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
                                       <h4 class="list-group-item list-group-item-dark">INPUT DATA PERUSAHAAN START-UP </h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/tambah_startup')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                        <label><h6>1.1 Nama Perusahaan Start-Up : </h6></label>
                                        <br>
                                        <input type="text"  name="nama_su" value="<?=set_value('nama_su');?>" style="text-transform:uppercase" class="form-control">
                                                    <?php echo form_error('nama_su','<div class="text-danger small" ml-3>')?>
                                        </div>
                                    
                                   
                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>1.2 Visi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content7" type="" rows="5" name="visi_su" placeholder="Masukkan Visi Perusahaan Start-Up Anda" class="form-control"><?=set_value('visi_su');?></textarea>
                                            <?php echo form_error('visi_su','<div class="text-danger small" ml-10>')?>
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>1.3 Misi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content8" type="" rows="5" name="misi_su" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control"><?=set_value('misi_su');?></textarea>
                                            <?php echo form_error('misi_su','<div class="text-danger small" ml-10>')?>
                                        </div>
                                        
                                        <div class="form-group row col-sm-11">
                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>1.4 Pilih File Struktur Organisasi : </h6></label>
                                        <input type="file" name="struktur_su"  accept="image/*" placeholder="Masukkan File Struktur Organisasi" class="form-control-file" id="exampleFormControlFile1">
                                            <?php echo form_error('struktur_su','<div class="text-danger small" ml-10>')?>
                                            <h6>JPG/JPEG/PNG max 2MB</h6>
                                        </div>

                                        <div class="form-group col-sm-5">
                                        <label for="exampleFormControlFile1"><h6>1.5 Pilih File Logo Perusahaan : </h6></label>
                                        <input type="file" name="logo_su" accept="image/*" placeholder="Masukkan File Logo Perusahaan" class="form-control-file" id="exampleFormControlFile1">
                                            <?php echo form_error('logo_su','<div class="text-danger small" ml-3>')?>
                                            <h6>JPG/JPEG/PNG max 2MB</h6>
                                        </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label><h6>1.6 Tagline Perusahaan Start-Up</h6></label>
                                            <input type="text" name="tagline_su" value="<?=set_value('tagline_su');?>" style="text-transform:uppercase" class="form-control">
                                            <?php echo form_error('tagline_su','<div class="text-danger small" ml-3>')?>
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
                        CKEDITOR.replace( 'content7' );
                        CKEDITOR.replace( 'content8' );
                        
                   </script>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->