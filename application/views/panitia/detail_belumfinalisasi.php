  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->

 <!-- Earnings (Monthly) Card Example -->
 <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Progress Propsosal</div>
                                                    <div class="stepper-wrapper">
                                                        <div class="stepper-item" id="step1">
                                                            <div class="step-counter">1</div>
                                                            <div class="step-name">Profil Perusahaan</div>
                                                        </div>
                                                        <div class="stepper-item" id="step2">
                                                            <div class="step-counter">2</div>
                                                            <div class="step-name">Biodata Tim</div>
                                                        </div>
                                                        <div class="stepper-item" id="step3">
                                                            <div class="step-counter">3</div>
                                                            <div class="step-name">Data Aplikasi</div>
                                                        </div>
                                                        <div class="stepper-item" id="step4">
                                                            <div class="step-counter">4</div>
                                                            <div class="step-name">Target Aplikasi</div>
                                                        </div>
                                                        <div class="stepper-item" id="step5">
                                                            <div class="step-counter">5</div>
                                                            <div class="step-name">Bisnis Plan</div>
                                                        </div>
                                                        <div class="stepper-item" id="step6">
                                                            <div class="step-counter">6</div>
                                                            <div class="step-name">Presentasi Singkat</div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-12 col-md-12 mb-4">
        <div class="card border-left-secondary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <h4 class="m-0 font-weight-bold text-dark">Data Proposal Belum Finalisasi</h4>
                        <!-- <?= print_r($proposal['id_proposal']) ?> -->
                        <br>
                        <div class="col-md-11 mr-2">
                            <!--Berikut merupakan data proposal yang sudah difinalisasi oleh peserta. Menu "Lihat Proposal" merupakan menu untuk melihat data proposal yang masuk. Menu "Lihat Presentasi Singkat" merupakan menu untuk melihat presentasi singkat yang dikirimkan oleh peserta. Menu "Download Proposal" merupakan menu untuk mendownload file proposal. Menu "Download file presentasi" merupakan menu untuk mendownload file presentasi.-->
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Detail Proposal : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> ID Proposal</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$proposal['id_proposal']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Judul Proposal</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$proposal['judul_proposal']; ?> </td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Tema Proposal</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$proposal['tema_proposal']; ?></td>
                                    </tr>
                                 
                                </table>
                                <br>
                             
                            </div>
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Detail Profil Perusahaan : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                 
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Perusahaan Start-Up</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$startup['nama_su']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Aplikasi Start-Up
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$reviewproduk['nama_solusi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Deskripsi Aplikasi Start-Up </h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$reviewproduk['deskripsi_solusi']; ?></td>
                                    </tr>

                                </table>
                                <br>
                                <div class="col-md-7 mr-4">
                                <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#suModal"></button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Detail Biodata Tim : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Hustler
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$tim['nama_hustler']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Hipster
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$tim['nama_hipster']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Hacker
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$tim['nama_hacker']; ?></td>
                                    </tr>
                                    

                                </table>
                                <br>
                                <div class="col-md-7 mr-4">
                                <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#btModal"></button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Detail Data Aplikasi Start-Up : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Nama Aplikasi Start-Up
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$reviewproduk['nama_solusi']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Deskripsi Aplikasi Start-Up </h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$reviewproduk['deskripsi_solusi']; ?></td>
                                    </tr>

                                </table>
                                <br>
                                <div class="col-md-7 mr-4">
                                <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#rpModal"></button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Detail Target Aplikasi Start-Up : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Target Usaha Aplikasi Start-Up
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$paperpitching['target_pp']; ?></td>
                                    </tr>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark">Kelebihan Aplikasi Start-Up </h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$paperpitching['kelebihan_pp']; ?></td>
                                    </tr>

                                </table>
                                <br>
                                <div class="col-md-7 mr-4">
                                <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#ppModal"></button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Detail Bisnis Plan - BMC : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                               
                                <div class="col-md-7 mr-4">
                                <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#bpModal"></button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-11 mr-3">
                            <h5 class="m-0 font-weight-bold text-dark">Presentasi singkat peserta : </h5>
                            <br>
                            <div class="col-md-11 mr-2 ml-3">
                                <table>
                                    <tr>
                                        <td width="250px">
                                            <h6 class="m-0 font-weight-bold text-dark"> Presentasi singkat</h6>
                                        </td>
                                        <td width="20px"> : </td>
                                        <td> <?= @$pitchdesk['uraian_singkat']; ?> </td>
                                    </tr>

                                </table>
                                <br>
                                <div class="col-md-7 mr-4">
                                <?php if (!$pitchdesk) { ?>
                                    <h6 class="m-0 font-weight-bold text-dark"> File Presentasi Belum Tersedia</h6>
                                      <?php }else{?>
                                          <a class="btn btn-dark fa fa-eye" type='application/pdf' href="<?= base_url() . 'assets/files/' . $pitchdesk['file_pitchd']; ?>" target="_blank"> Lihat File PPT Presentasi</a>
                                      <?php } ?>
                                   <!-- <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#pdModal"></button>-->
                                   <!-- <a class="btn btn-dark fa fa-eye" type='application/pdf' href="<?= base_url() . 'assets/files/' . $pitchdesk['file_pitchd']; ?>" target="_blank"> Lihat File PPT Presentasi</a>-->
                                </div>
                            </div>
                        <br>
                      

                        <div class="form-group col-xl-10 col-md-11">
                            <?php echo anchor('panitia/index_proposal/','<button class="btn btn-sm btn-dark mb-5"></i> Back </button> ')?>    
                        </div>
                    </div>
                </div>
                <br>


            </div>
        </div>
    </div>

  

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  <!-- Modal struktur -->
                    <div class="modal fade" id="suModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered " role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">Profil Perusahaan</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                    <div class="form-group col-sm-12">
                                        <label><h6>1.1 Nama Perusahaan Start-Up : </h6></label>
                                        <br>
                                        <input type="text"  name="nama_su" placeholder="Masukkan Nama Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control" value="<?= @$startup['nama_su']; ?>" disabled>
                                                    <?php echo form_error('nama_su','<div class="text-danger small" ml-3>')?>
                                        </div>
                                    
                                   
                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>1.2 Visi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content7" type="" rows="5" name="visi_su" placeholder="Masukkan Visi Perusahaan Start-Up Anda" class="form-control" disabled><?= @$startup['visi_su']; ?></textarea>
                                            <?php echo form_error('visi_su','<div class="text-danger small" ml-10>')?>
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>1.3 Misi Perusahaan Start-Up : </h6></label>
                                            <textarea id="content8" type="" rows="5" name="misi_su" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control" disabled><?= @$startup['misi_su']; ?></textarea>
                                            <?php echo form_error('misi_su','<div class="text-danger small" ml-10>')?>
                                        </div> 
                                        
                                        <div class="form-group row col-sm-12">
                                        <div class="form-group col-sm-12">
                                        <label for="exampleFormControlFile1"><h6>1.4 Struktur Organisasi : </h6></label>
                                        <br>
                                        <img src="<?php echo base_url().'assets/files/'.@$startup['struktur_su']?>" class="img-thumbnail" width="450px">
                                        <br> 
                                           
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <label for="exampleFormControlFile1"><h6>1.5 Logo Perusahaan : </h6></label>
                                            <br>
                                            <img src="<?php echo base_url().'assets/files/'.@$startup['logo_su']?>" class="img-thumbnail" width="450px">
                                            <br>
                                           
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label><h6>1.6 Tagline Perusahaan Start-Up</h6></label>
                                            <input type="text" name="tagline_su" placeholder="Masukkan Tagline Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control" value="<?= @$startup['tagline_su']; ?>" disabled>
                                            <?php echo form_error('tagline_su','<div class="text-danger small" ml-3>')?>
                                        </div>
                            
                              </div>
                            </div>
                        </div>
                    </div>

                      <!-- Modal struktur -->
                      <div class="modal fade" id="btModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">Biodata Tim</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <div class="form-group col-sm-12">
                                            <h6 class="list-group-item list-group-item-secondary">Data Hustler </h6>
                                        </div>
                                        <div class="form-group col-sm-12">
                                        <label><h6>2.1 Nama Hustler : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_hustler" style="text-transform:uppercase" class="form-control" value="<?= @$tim['nama_hustler']; ?>">
                                            <?=form_error('nama_hustler','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                   
                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>2.2 Alamat Hustler : </h6></label>
                                            <textarea id="content1" rows="6" name="alamat_hustler" class="form-control"><?= @$tim['alamat_hustler']; ?></textarea>
                                            <?=form_error('alamat_hustler','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group row col-sm-12">
                                            <div class="form-group col-sm-6">
                                            <label><h6>2.3 No. Telp Hustler : </h6></label>
                                            <br>
                                                <input type="number"  name="telp_hustler" class="form-control" value="<?= @$tim['telp_hustler']; ?>">
                                                <?=form_error('telp_hustler','<small class="text-danger pl-3">','</small>');?>
                                            </div>

                                            <div class="form-group col-sm-6">
                                            <label><h6>2.4 Email Hustler : </h6></label>
                                            <br>
                                                <input type="email"  name="email_hustler" class="form-control" value="<?= @$tim['email_hustler']; ?>">
                                                <?=form_error('email_hustler','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>2.5 Tugas Hustler : </h6></label>
                                            <textarea id="content2" type="" rows="5" name="tugas_hustler" class="form-control"><?= @$tim['tugas_hustler']; ?></textarea>
                                            <?=form_error('tugas_hustler','<small class="text-danger pl-3">','</small>');?>
                                        </div>


                                        <div class="form-group col-sm-12">
                                            <h6 class="list-group-item list-group-item-secondary">Data Hipster </h6>
                                        </div>
                                        <div class="form-group col-sm-12">
                                        <label><h6>2.6 Nama Hipster : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_hipster" style="text-transform:uppercase" class="form-control" value="<?= @$tim['nama_hipster']; ?>">
                                            <?=form_error('nama_hipster','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                   
                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>2.7 Alamat Hipster : </h6></label>
                                            <textarea id="content1" rows="6" name="alamat_hipster" class="form-control"><?= @$tim['alamat_hipster']; ?></textarea>
                                            <?=form_error('alamat_hipster','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group row col-sm-12">
                                            <div class="form-group col-sm-6">
                                            <label><h6>2.8 No. Telp Hipster : </h6></label>
                                            <br>
                                                <input type="number"  name="telp_hipster" class="form-control" value="<?= @$tim['telp_hipster']; ?>">
                                                <?=form_error('telp_hipster','<small class="text-danger pl-3">','</small>');?>
                                            </div>

                                            <div class="form-group col-sm-6">
                                            <label><h6>2.9 Email Hipster : </h6></label>
                                            <br>
                                                <input type="email"  name="email_hipster" class="form-control" value="<?= @$tim['email_hipster']; ?>">
                                                <?=form_error('email_hipster','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>2.10 Tugas Hipster : </h6></label>
                                            <textarea id="content2" type="" rows="5" name="tugas_hipster" class="form-control"><?= @$tim['tugas_hipster']; ?></textarea>
                                            <?=form_error('tugas_hipster','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-12">
                                            <h6 class="list-group-item list-group-item-secondary">Data Hacker </h6>
                                        </div>
                                        <div class="form-group col-sm-12">
                                        <label><h6>2.11 Nama Hacker : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_hacker" style="text-transform:uppercase" class="form-control" value="<?= @$tim['nama_hacker']; ?>">
                                            <?=form_error('nama_hacker','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                   
                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>2.12 Alamat Hacker : </h6></label>
                                            <textarea id="content1" rows="6" name="alamat_hacker" class="form-control"><?= @$tim['alamat_hacker']; ?></textarea>
                                            <?=form_error('alamat_hacker','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group row col-sm-12">
                                            <div class="form-group col-sm-6">
                                            <label><h6>2.13 No. Telp Hacker : </h6></label>
                                            <br>
                                                <input type="number"  name="telp_hacker" class="form-control" value="<?= @$tim['telp_hipster']; ?>">
                                                <?=form_error('telp_hacker','<small class="text-danger pl-3">','</small>');?>
                                            </div>

                                            <div class="form-group col-sm-6">
                                            <label><h6>2.14 Email Hacker : </h6></label>
                                            <br>
                                                <input type="email"  name="email_hacker" class="form-control" value="<?= @$tim['email_hacker']; ?>"> 
                                                <?=form_error('email_hacker','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm12">
                                        <label for="textarea"><h6>2.15 Tugas Hacker : </h6></label>
                                            <textarea id="content2" type="" rows="5" name="tugas_hacker" class="form-control"><?= @$tim['tugas_hacker']; ?></textarea>
                                            <?=form_error('tugas_hacker','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                              </div>
                            </div>
                        </div>
                    </div>

                      <!-- Modal struktur -->
                      <div class="modal fade" id="ppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">Data Aplikasi</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                                            <div class="form-group col-sm-12">
                                                        <label><h6>4.1 Latar Belakang : </h6></label>
                                                        <br>
                                                        <small>Ceritakan tentang latar belakang anda dan co-founder anda dalam pembuatan Start-Up ini</small>
                                                        <textarea id="content11"  type="" rows="5" name="latar_belakang_pp" class="form-control" disabled><?= @$paperpitching['latar_belakang_pp']; ?></textarea>
                                                            <?=form_error('latar_belakang_pp','<small class="text-danger pl-3">','</small>');?>
                                                            </div>
                                                            
                                                            
                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.2 Permasalahan yang ingin diatasi : </h6></label>
                                                            <small>Permasalahan apa ingin anda atasi melalui usaha yang anda rintis ini?</small>
                                                            <textarea id="content12" type="" rows="5" name="permasalahan_pp"  class="form-control" disabled><?= @$paperpitching['permasalahan_pp']; ?></textarea>
                                                            <?=form_error('permasalahan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.3 Solusi yang ditawarkan : </h6></label>
                                                            <small>Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?</small>
                                                            <textarea id="content13" type="" rows="5" name="solusi_pp" class="form-control" disabled><?= @$paperpitching['solusi_pp']; ?></textarea>
                                                            <?=form_error('solusi_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.4 Progres usaha : </h6></label>
                                                            <small>Bagaimana progres/traction usaha anda sejauh ini?</small>
                                                            <textarea id="content14" type="" rows="5" name="progres_pp" class="form-control" disabled><?= @$paperpitching['progres_pp']; ?></textarea>
                                                            <?=form_error('progres_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.5 Kompetitor Usaha : </h6></label>
                                                            <small>Siapa saja kompetitor anda terhadap usaha yang anda rintis saat ini? Sebutkan</small>
                                                            <textarea id="content15" type="" rows="5" name="kompetitor_pp" class="form-control" disabled><?= @$paperpitching['kompetitor_pp']; ?></textarea>
                                                            <?=form_error('kompetitor_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.6 Usaha Serupa : </h6></label>
                                                            <small>Adakah usaha/serupa yang berhasil? Baik di nasional atau internasional? Sebutkan</small>
                                                            <textarea id="content16"  type="" rows="5" name="kompetitor2_pp" class="form-control" disabled><?= @$paperpitching['kompetitor2_pp']; ?></textarea>
                                                            <?=form_error('kompetitor2_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.7 Target Usaha : </h6></label>
                                                            <small>Siapa target pengguna solusi anda? Sebutkan</small>
                                                            <textarea id="content17" type="" rows="5" name="target_pp" class="form-control" disabled><?= @$paperpitching['target_pp']; ?></textarea>
                                                            <?=form_error('target_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.8 Data yang digunakan : </h6></label>
                                                            <small>Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda?</small>
                                                            <textarea id="content18" type="" rows="5" name="data_pp" class="form-control" disabled><?= @$paperpitching['data_pp']; ?></textarea>
                                                            <?=form_error('data_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.9 Proses Bisnis : </h6></label>
                                                            <small>Bagaimana proses bisnis dari aplikasi/solusi yang anda tawarkan?</small>
                                                            <textarea id="content19" type="" rows="5" name="proses_bisnis_pp" class="form-control" disabled><?= @$paperpitching['proses_bisnis_pp']; ?></textarea>
                                                            <?=form_error('proses_bisnis_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                            <div class="form-group col-sm-12">
                                                                <small>Gambar Proses Bisnis : </small>
                                                                <br>
                                                                <img src="<?php echo base_url().'assets/files/'.@$paperpitching['proses_bisnis2_pp']?>" class="img-thumbnail" width="450px">
                              
                                                                <br>
                                                                
                                                            </div>
                                                        
                                                            <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.10 Proses mewujudkan : </h6></label>
                                                            <small>Bagaimana proses/tahapan mewujudkan solusi yang akan anda ?</small>
                                                            <textarea id="content20" type="" rows="5" name="tahapan_pp"  class="form-control" disabled><?= @$paperpitching['tahapan_pp']; ?></textarea>
                                                            <?=form_error('tahapan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-12">
                                                            <label for="textarea"><h6>4.11 Kelebihan Aplikasi : </h6></label>
                                                            <small>Kelebihan dari solusi/aplikasi yang ditawarkan?</small>
                                                            <textarea id="content21" type="" rows="5" name="kelebihan_pp"  class="form-control" disabled><?= @$paperpitching['kelebihan_pp']; ?></textarea>
                                                            <?=form_error('kelebihan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>


                              </div>
                            </div>
                        </div>
                    </div>

                      <!-- Modal struktur -->
                      <div class="modal fade" id="rpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">Data Target Aplikasi</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <div class="form-group col-sm-12">
                                        <label><h6>3.1 Nama Aplikasi : </h6></label>
                                        <br>
                                            <input type="text"  name="nama_solusi" value="<?= @$reviewproduk['nama_solusi']; ?>" style="text-transform:uppercase" class="form-control"disabled>
                                            <?=form_error('nama_solusi','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            
                                            
                                        <div class="form-group col-sm-12">
                                            <label for="textarea"><h6>3.2 Deskripsi Aplikasi : </h6></label>
                                            <textarea id="content9" type="" rows="5" name="deskripsi_solusi"  class="form-control"disabled><?= @$reviewproduk['deskripsi_solusi']; ?></textarea>
                                            <?=form_error('deskripsi_solusi','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                       
                                            <div class="form-group col-sm-12">
                                            <label for="exampleFormControlFile1"><h6>3.3 Logo Aplikasi : </h6></label>
                                            <br>
                                            <img src="<?php echo base_url().'assets/files/'.@$reviewproduk['logo_solusi'];?>" class="img-thumbnail" width="450px">
                        
                                                
                                            </div>

                                            <div class="form-group col-sm-12">
                                            <label for="exampleFormControlFile1"><h6>3.4 Preview UI/UX Aplikasi - 1 : </h6></label>
                                            <br>
                                            <img src="<?php echo base_url().'assets/files/'.@$reviewproduk['prev_ui1_solusi'];?>" class="img-thumbnail" width="450px">
                        
                                              
                                            </div>
                                      

                                      
                                            <div class="form-group col-sm-12">
                                            <label for="exampleFormControlFile1"><h6>3.5 Preview UI/UX Aplikasi - 2 : </h6></label>
                                            <br>
                                            <img src="<?php echo base_url().'assets/files/'.@$reviewproduk['prev_ui2_solusi'];?>" class="img-thumbnail" width="450px">
                        
                                                
                                            </div>

                                            <div class="form-group col-sm-12">
                                            <label for="exampleFormControlFile1"><h6>3.6 Preview UI/UX Aplikasi - 3 : </h6></label>
                                            <br>
                                            <img src="<?php echo base_url().'assets/files/'.@$reviewproduk['prev_ui3_solusi'];?>" class="img-thumbnail" width="450px">
                        
                                               
                                            </div>
                                       
                                            <div class="form-group col-sm-12">
                                            <label for="exampleFormControlFile1"><h6>3.7 Preview UI/UX Aplikasi - 4 : </h6></label>
                                                <br>
                                                <img src="<?php echo base_url().'assets/files/'.@$reviewproduk['prev_ui4_solusi'];?>" class="img-thumbnail" width="450px">
                        
                                              
                                            </div>

                                            <div class="form-group col-sm-12">
                                            <label for="exampleFormControlFile1"><h6>3.8 Tahun Pembuatan Aplikasi : </h6></label>
                                                <input type="number" name="tahun_buat_solusi" value="<?= @$reviewproduk['tahun_buat_solusi']; ?>" class="form-control"disabled>
                                                <?=form_error('tahun_buat_solusi','<small class="text-danger pl-3">','</small>');?> 
                                            </div>
                                     
                                        <div class="form-group col-sm-12">
                                        <label for="exampleFormControlFile1"><h6>3.9 Link Video Aplikasi : </h6></label>
                                            <input type="text" name="link_vid_solusi" value="<?= @$reviewproduk['link_vid_solusi']; ?>"  class="form-control"disabled>
                                            <?=form_error('link_vid_solusi','<small class="text-danger pl-3">','</small>');?> 
                                          
                                        </div>

                                        <div class="form-group col-sm-12">
                                        <label for="exampleFormControlFile1"><h6>3.10 Link Produk Aplikasi : </h6></label>
                                            <input type="text" name="link_prod_solusi" value="<?= @$reviewproduk['link_prod_solusi']; ?>" class="form-control"disabled>
                                            <?=form_error('link_prod_solusi','<small class="text-danger pl-3">','</small>');?>     
                                        </div>
                                   
                                        <div class="form-group col-sm-12">
                                        <label for="textarea"><h6>3.11 Teknologi yang digunakan : </h6></label>
                                            <textarea id="content10" type="" rows="5" name="teknologi_solusi" class="form-control"disabled><?= @$reviewproduk['teknologi_solusi']; ?></textarea>
                                            <?=form_error('teknologi_solusi','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                               
                              </div>
                            </div>
                        </div>
                    </div>

                      <!-- Modal struktur -->
                      <div class="modal fade" id="bpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">Bisnis Plan</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <div class="form-group col-sm-12">
                                                        <label><h6>5.1 Customer : </h6></label>
                                                        <br>
                                                        <textarea id="content22" type="" rows="5" name="cust_plan"  class="form-control"disabled><?= @$bisnisplan['cust_plan']; ?></textarea>
                                                        <?=form_error('cust_plan','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        
                                                        
                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.2 Value Propositions : </h6></label><br>
                                                        <textarea id="content23" type="" rows="5" name="value_plan"class="form-control"disabled><?= @$bisnisplan['value_plan']; ?></textarea>
                                                        <?=form_error('value_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.3 Channels : </h6></label><br>
                                                        <textarea id="content24" type="" rows="5" name="channels_plan" class="form-control"disabled><?= @$bisnisplan['channels_plan']; ?></textarea>
                                                        <?=form_error('channels_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.4 Relationships : </h6></label><br>
                                                        <textarea id="content25" type="" rows="5" name="relation_plan" class="form-control"disabled><?= @$bisnisplan['relation_plan']; ?></textarea>
                                                        <?=form_error('relation_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.5 Key Activities : </h6></label><br>
                                                        <textarea id="content26" type="" rows="5" name="key_act_plan" class="form-control"disabled><?= @$bisnisplan['key_act_plan']; ?></textarea>
                                                        <?=form_error('key_act_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.6 Key Resource : </h6></label><br>
                                                        <textarea id="content27" type="" rows="5" name="key_res_plan"  class="form-control"disabled><?= @$bisnisplan['key_res_plan']; ?></textarea>
                                                        <?=form_error('key_res_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.7 Key Partners : </h6></label><br>
                                                        <textarea id="content28" type="" rows="5" name="key_partner_plan"  class="form-control"disabled><?= @$bisnisplan['key_partner_plan']; ?></textarea>
                                                        <?=form_error('key_partner_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.8 Cost Structure : </h6></label><br>
                                                        <textarea id="content29" type="" rows="5" name="cost_plan"  class="form-control"disabled><?= @$bisnisplan['cost_plan']; ?></textarea>
                                                        <?=form_error('cost_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-12">
                                                        <label for="textarea"><h6>5.9 Revenue Streams : </h6></label><br>
                                                        <textarea id="content30"  type="" rows="5" name="revenue_plan" class="form-control"disabled><?= @$bisnisplan['revenue_plan']; ?></textarea>
                                                        <?=form_error('revenue_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                              </div>
                            </div>
                        </div>
                    </div>

                     <!-- Modal struktur -->
                     <div class="modal fade" id="pdModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">File Presentasi</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <embed class="btn btn-dark fa fa-eye" type='application/pdf' href="<?= base_url() . 'assets/files/' . $pitchdesk['file_pitchd']; ?>" > Lihat File PPT Presentasi</embed>    
                 
                              </div>
                            </div>
                        </div>
                    </div>
<script>
    let step1 = <?= $step1 ?>;
    let step2 = <?= $step2 ?>;
    let step3 = <?= $step3 ?>;
    let step4 = <?= $step4 ?>;
    let step5 = <?= $step5 ?>;
    let step6 = <?= $step6 ?>;
    
    console.log(step1);
    if(step1 == 1){
        document.getElementById("step1").classList.add("completed");
    }
    if(step2 == 1){
        document.getElementById("step2").classList.add("completed");
    }
    if(step3 == 1){
        document.getElementById("step3").classList.add("completed");
    }
    if(step4 == 1){
        document.getElementById("step4").classList.add("completed");
    }
    if(step5 == 1){
        document.getElementById("step5").classList.add("completed");
    }
    if(step6 == 1){
        document.getElementById("step6").classList.add("completed");
    }
</script>

<script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                
                    CKEDITOR.replace( 'content1' );
                    CKEDITOR.replace( 'content2' );
                    CKEDITOR.replace( 'content3' );
                    CKEDITOR.replace( 'content4' );
                    CKEDITOR.replace( 'content5' );
                    CKEDITOR.replace( 'content6' );
                    CKEDITOR.replace( 'content7' );
                    CKEDITOR.replace( 'content8' );
                    CKEDITOR.replace( 'content9' );
                    CKEDITOR.replace( 'content10' );
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
                    CKEDITOR.replace( 'content22' );
                    CKEDITOR.replace( 'content23' );
                    CKEDITOR.replace( 'content24' );
                    CKEDITOR.replace( 'content25' );
                    CKEDITOR.replace( 'content26' );
                    CKEDITOR.replace( 'content27' );
                    CKEDITOR.replace( 'content28' );
                    CKEDITOR.replace( 'content29' );
                    CKEDITOR.replace( 'content30' );
                    CKEDITOR.replace( 'content31' );
            </script>

           