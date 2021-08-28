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
                                       <h4 class="list-group-item list-group-item-dark">INPUT DATA BIODATA TIM </h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                                    <form method="post" action="<?php echo base_url('peserta/tambah_biodatatim')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                            <h6 class="list-group-item list-group-item-secondary">Data Hustler </h6>
                                        </div>
                                        <div class="form-group col-sm-11">
                                        <label><h6>2.1 Nama Hustler : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_hustler" style="text-transform:uppercase" class="form-control" value="<?=set_value('nama_hustler');?>">
                                            <?=form_error('nama_hustler','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                   
                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>2.2 Alamat Hustler : </h6></label>
                                            <textarea id="content1" rows="6" name="alamat_hustler" class="form-control" value=""><?=set_value('alamat_hustler');?></textarea>
                                            <?=form_error('alamat_hustler','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group row col-sm-11">
                                            <div class="form-group col-sm-6">
                                            <label><h6>2.3 No. Telp Hustler : </h6></label>
                                            <br>
                                                <input type="number"  name="telp_hustler" class="form-control" value="<?=set_value('telp_hustler');?>">
                                                <?=form_error('telp_hustler','<small class="text-danger pl-3">','</small>');?>
                                            </div>

                                            <div class="form-group col-sm-6">
                                            <label><h6>2.4 Email Hustler : </h6></label>
                                            <br>
                                                <input type="email"  name="email_hustler" class="form-control" value="<?=set_value('email_hustler');?>">
                                                <?=form_error('email_hustler','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>2.5 Tugas Hustler : </h6></label>
                                            <textarea id="content2" type="" rows="5" name="tugas_hustler" class="form-control" ><?=set_value('tugas_hustler');?></textarea>
                                            <?=form_error('tugas_hustler','<small class="text-danger pl-3">','</small>');?>
                                        </div>


                                        <div class="form-group col-sm-11">
                                            <h6 class="list-group-item list-group-item-secondary">Data Hipster </h6>
                                        </div>
                                        <div class="form-group col-sm-11">
                                        <label><h6>2.6 Nama Hipster : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_hipster" style="text-transform:uppercase" class="form-control" value="<?=set_value('nama_hipster');?>" >
                                            <?=form_error('nama_hipster','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                   
                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>2.7 Alamat Hipster : </h6></label>
                                            <textarea id="content1" rows="6" name="alamat_hipster" class="form-control" ><?=set_value('alamat_hipster');?></textarea>
                                            <?=form_error('alamat_hipster','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group row col-sm-11">
                                            <div class="form-group col-sm-6">
                                            <label><h6>2.8 No. Telp Hipster : </h6></label>
                                            <br>
                                                <input type="number"  name="telp_hipster" class="form-control" value="<?=set_value('telp_hipster');?>">
                                                <?=form_error('telp_hipster','<small class="text-danger pl-3">','</small>');?>
                                            </div>

                                            <div class="form-group col-sm-6">
                                            <label><h6>2.9 Email Hipster : </h6></label>
                                            <br>
                                                <input type="email"  name="email_hipster" class="form-control" value="<?=set_value('email_hipster');?>">
                                                <?=form_error('email_hipster','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>2.10 Tugas Hipster : </h6></label>
                                            <textarea id="content2" type="" rows="5" name="tugas_hipster" class="form-control" value=""><?=set_value('tugas_hipster');?></textarea>
                                            <?=form_error('tugas_hipster','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <h6 class="list-group-item list-group-item-secondary">Data Hacker </h6>
                                        </div>
                                        <div class="form-group col-sm-11">
                                        <label><h6>2.11 Nama Hacker : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_hacker" style="text-transform:uppercase" class="form-control" value="<?=set_value('nama_hacker');?>">
                                            <?=form_error('nama_hacker','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                   
                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>2.12 Alamat Hacker : </h6></label>
                                            <textarea id="content1" rows="6" name="alamat_hacker" class="form-control" value=""><?=set_value('alamat_hacker');?></textarea>
                                            <?=form_error('alamat_hacker','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group row col-sm-11">
                                            <div class="form-group col-sm-6">
                                            <label><h6>2.13 No. Telp Hacker : </h6></label>
                                            <br>
                                                <input type="number"  name="telp_hacker" class="form-control" value="<?=set_value('telp_hacker');?>">
                                                <?=form_error('telp_hacker','<small class="text-danger pl-3">','</small>');?>
                                            </div>

                                            <div class="form-group col-sm-6">
                                            <label><h6>2.14 Email Hacker : </h6></label>
                                            <br>
                                                <input type="email"  name="email_hacker" class="form-control" value="<?=set_value('email_hacker');?>">
                                                <?=form_error('email_hacker','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>2.15 Tugas Hacker : </h6></label>
                                            <textarea id="content2" type="" rows="5" name="tugas_hacker" class="form-control" value=""><?=set_value('tugas_hacker');?></textarea>
                                            <?=form_error('tugas_hacker','<small class="text-danger pl-3">','</small>');?>
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
                    CKEDITOR.replace( 'content1' );
                    CKEDITOR.replace( 'content2' );
                    CKEDITOR.replace( 'content3' );
                    CKEDITOR.replace( 'content4' );
                    CKEDITOR.replace( 'content5' );
                    CKEDITOR.replace( 'content6' );
                </script>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->