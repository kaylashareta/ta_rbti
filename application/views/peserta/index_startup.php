                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (@$getjoin['status_bayar'] == '1') { ?>
                    <?= $this->session->flashdata('message');?>

                    <!-- Page Heading -->
                  
                    <!--sudah finalisasi-->
                    <?php if (@$getstartup['finalisasi'] == '1') { ?>
                    <div class="p-3 mb-2 bg-success text-white">
                         Peserta Sudah Finalisasi Proposal 
                          <span aria-hidden="true"></span>
                    </div>
                    <br>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-dark">DATA PERUSAHAAN START-UP </h4>
                                       
                                        </div>
                                       
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url('peserta/edit_startup/'.@$getstartup['id_proposal'])?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                        <label><h6>1.1 Nama Perusahaan Start-Up : </h6></label>
                                        <br>
                                        <input type="text"  name="nama_su" placeholder="Masukkan Nama Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control" value="<?= @$getstartup['nama_su']; ?>" disabled>
                                                    <?php echo form_error('nama_su','<div class="text-danger small" ml-3>')?>
                                        </div>
                                    
                                   
                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>1.2 Visi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content7" type="" rows="5" name="visi_su" placeholder="Masukkan Visi Perusahaan Start-Up Anda" class="form-control" disabled><?= @$getstartup['visi_su']; ?></textarea>
                                            <?php echo form_error('visi_su','<div class="text-danger small" ml-10>')?>
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>1.3 Misi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content8" type="" rows="5" name="misi_su" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control" disabled><?= @$getstartup['misi_su']; ?></textarea>
                                            <?php echo form_error('misi_su','<div class="text-danger small" ml-10>')?>
                                        </div>
                                        
                                        <div class="form-group row col-sm-11">
                                        <div class="form-group col-sm-6">
                                        <label for="exampleFormControlFile1"><h6>1.4 Struktur Organisasi : </h6></label>
                                        <br>
                                        <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#struktursuModal" ></button>
                                        <br> 
                                           
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="exampleFormControlFile1"><h6>1.5 Logo Perusahaan : </h6></label>
                                            <br>
                                            <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#logosuModal"></button>
                                            <br>
                                           
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label><h6>1.6 Tagline Perusahaan Start-Up</h6></label>
                                            <input type="text" name="tagline_su" placeholder="Masukkan Tagline Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control" value="<?= @$getstartup['tagline_su']; ?>" disabled>
                                            <?php echo form_error('tagline_su','<div class="text-danger small" ml-3>')?>
                                        </div>
                            
                               <div class="form-group col-sm-11">
                               <button type="submit" class="btn btn-dark" disabled>Update Data</button>
                           </div>
                            </div>
                        </div>
                   
                         <!-- Modal struktur -->
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
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>STRUKTUR ORGANISASI</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.@$getstartup['struktur_su']?>" class="img-thumbnail" width="450px">
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                         <!-- Modal struktur -->
                         <div class="modal fade" id="logosuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">LOGO PERUSAHAAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>LOGO PERUSAHAAN</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.@$getstartup['logo_su']?>" class="img-thumbnail" width="450px">
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        <!--Belum Finalisasi-->
                        <?php } else { ?>
                            <br>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-dark">DATA PERUSAHAAN START-UP </h4>
                                       
                                        </div>
                                       
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url('peserta/edit_startup')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                        <label><h6>1.1 Nama Perusahaan Start-Up : </h6></label>
                                        <br>
                                        <input type="text"  name="nama_su" placeholder="Masukkan Nama Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control" value="<?= @$getstartup['nama_su']; ?>">
                                                    <?php echo form_error('nama_su','<div class="text-danger small" ml-3>')?>
                                        </div>
                                    
                                   
                                        <div class="form-group col-sm-11">
                                        <label for="textarea"><h6>1.2 Visi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content7" type="" rows="5" name="visi_su" placeholder="Masukkan Visi Perusahaan Start-Up Anda" class="form-control"><?= @$getstartup['visi_su']; ?></textarea>
                                            <?php echo form_error('visi_su','<div class="text-danger small" ml-10>')?>
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>1.3 Misi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content8" type="" rows="5" name="misi_su" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control"><?= @$getstartup['misi_su']; ?></textarea>
                                            <?php echo form_error('misi_su','<div class="text-danger small" ml-10>')?>
                                        </div>
                                        
                                        <div class="form-group row col-sm-11">
                                        <div class="form-group col-sm-6">
                                        <label for="exampleFormControlFile1"><h6>1.4 Struktur Organisasi : </h6></label>
                                        <br>
                                        <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#struktursuModal"></button>
                                        <br> 
                                            <small>Update Gambar : </small><br>
                                            <input type="file" name="struktur_su" accept="image/*" placeholder="Masukkan File struktur Perusahaan" class="form-control-file" id="exampleFormControlFile1">
                                            <input type="hidden" name="old_image" value="<?php echo base_url().'assets/files/'.@$getstartup['struktur_su']?>">
                                        </div>

                                        <div class="form-group col-sm-6">
                                            <label for="exampleFormControlFile1"><h6>1.5 Logo Perusahaan : </h6></label>
                                            <br>
                                            <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#logosuModal"></button>
                                            <br>
                                            <small>Update Gambar : </small><br>
                                            <input type="file" name="logo_su" accept="image/*" placeholder="Masukkan File Logo Perusahaan" class="form-control-file" id="exampleFormControlFile1">
                                            <input type="hidden" name="old_image" value="<?php echo base_url().'assets/files/'.@$getstartup['logo_su']?>">
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label><h6>1.6 Tagline Perusahaan Start-Up</h6></label>
                                            <input type="text" name="tagline_su" placeholder="Masukkan Tagline Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control" value="<?= @$getstartup['tagline_su']; ?>">
                                            <?php echo form_error('tagline_su','<div class="text-danger small" ml-3>')?>
                                        </div>
                                  
                                 
                               <input type="hidden" name="date_updated"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                               
                               <div class="form-group col-sm-11">
                               <button type="submit" class="btn btn-dark">Update Data</button>
                           </div>
                            </div>
                        </div>
                   
                         <!-- Modal struktur -->
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
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>STRUKTUR ORGANISASI</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.@$getstartup['struktur_su']?>" class="img-thumbnail" width="450px">
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        </div>

                         <!-- Modal struktur -->
                         <div class="modal fade" id="logosuModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">LOGO PERUSAHAAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>LOGO PERUSAHAAN</h6></label>
                               <img src="<?php echo base_url().'assets/files/'.@$getstartup['logo_su']?>" class="img-thumbnail" width="450px">
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        <?php } ?>


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

           