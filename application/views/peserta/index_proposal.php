                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (@$getjoin['status_bayar'] == 'Berhasil') { ?>
                    <?= $this->session->flashdata('message');?>
                    <!-- Page Heading -->
                    <!-- Sudah Finalisasi -->
                    <?php if (@$getjudul['finalisasi'] == 'Finalisasi') { ?>
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
                                            <h4 class="list-group-item list-group-item-dark">Halaman Judul Proposal </h4>
                                       
                                        </div>
                           
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url('peserta/edit_judulproposal')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                        <label><h6>Judul Proposal Start-Up : </h6></label>
                                        <br>
                                        <input type="text" class="form-control form-control-user" id="judul_proposal" 
                                            name="judul_proposal" placeholder="Masukkan Judul Proposal Start-Up Anda" style="text-transform:uppercase" value="<?= @$getjudul['judul_proposal']; ?>" disabled>
                                            <?=form_error('judul_proposal','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label><h6>Tema Proposal : </h6></label>
                                            <input type="text" class="form-control form-control-user" id="nama_transfer" 
                                            name="nama_transfer" placeholder="tema proposal" style="text-transform:capitalize" value="<?= @$getjudul['tema_proposal']; ?>" disabled >
                                            <?=form_error('nama_transfer','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                            <input type="hidden" name="date_updated"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                                            
                                        <div class="form-group col-sm-11">
                                        <button type="submit" class="btn btn-dark" disabled>Update Data</button>
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
                                            <h4 class="list-group-item list-group-item-dark">Download PDF Proposal </h4>
                                       
                                        </div> 
                                    </div>
                                    
                                        <div class="form-group col-sm-11">
                                            
                                        Anda dapat mendownload proposal yang sudah di finalisasi
                                        <br><br>
                                        <a class="btn btn-dark fa fa-download" href="<?php echo base_url('proposal/cetakProposal/'.@$getjudul['id_proposal'])?>"> Download File Proposal </a><br><br>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                   

                    
                          <!-- Earnings (Monthly) Card Example --> 
                          <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                      
                                       <br>
                                         <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-capitalize mb-1">
                                           
                                            <br>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#su" role="tablist" data-toggle="tab">Profile Perusahaan</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#bt" role="tablist" data-toggle="tab">Biodata Tim</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#rp" role="tablist" data-toggle="tab">Data Aplikasi Start-Up</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#pp" role="tablist" data-toggle="tab">Data Target Usaha Start-Up</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#bp" role="tablist" data-toggle="tab">Bisnis Plan - BMC</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#pd" role="tablist" data-toggle="tab">Presentasi Singkat</a>
                                                </li>
                                            </ul>
                                        <br>

                                        <div class="tab-content">
                                     
                                            <div role="tabpanel" class="tab-pane active" id="su">
                                                <div class="form-group">
                                                <?php if (!$getstartup) { ?>
                                                        <a class="btn btn-dark " href="<?php echo base_url('peserta/index_startup/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Data Perusahaan </i> </a>
                                                <?php }else{?>
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
                                                        <textarea id="content8" type="" rows="5" name="misi_su" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control"disabled><?= @$getstartup['misi_su']; ?></textarea>
                                                        <?php echo form_error('misi_su','<div class="text-danger small" ml-10>')?>
                                                    </div>
                                                    
                                                    <div class="form-group row col-sm-11">
                                                    <div class="form-group col-sm-6">
                                                    <label for="exampleFormControlFile1"><h6>1.4 Struktur Organisasi : </h6></label>
                                                    <br>
                                                    <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#struktursuModal"></button>
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
                                                   
                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="bt">
                                                <div class="form-group">
                                                <?php if (!$getbiodatatim) { ?>
                                                        <a class="btn btn-dark " href="<?php echo base_url('peserta/index_biodatatim/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Data Biodata Tim </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                        <h6 class="list-group-item list-group-item-secondary">Data Hustler </h6>
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>2.1 Nama Hustler : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_hustler" style="text-transform:uppercase" class="form-control" value="<?= @$getbiodatatim['nama_hustler']; ?>" disabled>
                                                        <?=form_error('nama_hustler','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            
                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.2 Alamat Hustler : </h6></label>
                                                        <textarea id="content1" rows="6" name="alamat_hustler" class="form-control"disabled><?= @$getbiodatatim['alamat_hustler']; ?></textarea>
                                                        <?=form_error('alamat_hustler','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.3 No. Telp Hustler : </h6></label>
                                                        <br>
                                                            <input type="number"  name="telp_hustler" class="form-control" value="<?= @$getbiodatatim['telp_hustler']; ?>" disabled>
                                                            <?=form_error('telp_hustler','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.4 Email Hustler : </h6></label>
                                                        <br>
                                                            <input type="email"  name="email_hustler" class="form-control" value="<?= @$getbiodatatim['email_hustler']; ?>" disabled>
                                                            <?=form_error('email_hustler','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.5 Tugas Hustler : </h6></label>
                                                        <textarea id="content2" type="" rows="5" name="tugas_hustler" class="form-control"disabled><?= @$getbiodatatim['tugas_hustler']; ?></textarea>
                                                        <?=form_error('tugas_hustler','<small class="text-danger pl-3">','</small>');?>
                                                    </div>


                                                    <div class="form-group col-sm-11">
                                                        <h6 class="list-group-item list-group-item-secondary">Data Hipster </h6>
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>2.6 Nama Hipster : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_hipster" style="text-transform:uppercase" class="form-control" value="<?= @$getbiodatatim['nama_hipster']; ?>"disabled>
                                                        <?=form_error('nama_hipster','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            
                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.7 Alamat Hipster : </h6></label>
                                                        <textarea id="content1" rows="6" name="alamat_hipster" class="form-control"disabled><?= @$getbiodatatim['alamat_hipster']; ?></textarea>
                                                        <?=form_error('alamat_hipster','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.8 No. Telp Hipster : </h6></label>
                                                        <br>
                                                            <input type="number"  name="telp_hipster" class="form-control" value="<?= @$getbiodatatim['telp_hipster']; ?>"disabled>
                                                            <?=form_error('telp_hipster','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.9 Email Hipster : </h6></label>
                                                        <br>
                                                            <input type="email"  name="email_hipster" class="form-control" value="<?= @$getbiodatatim['email_hipster']; ?>"disabled>
                                                            <?=form_error('email_hipster','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.10 Tugas Hipster : </h6></label>
                                                        <textarea id="content2" type="" rows="5" name="tugas_hipster" class="form-control"disabled><?= @$getbiodatatim['tugas_hipster']; ?></textarea>
                                                        <?=form_error('tugas_hipster','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <h6 class="list-group-item list-group-item-secondary">Data Hacker </h6>
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>2.11 Nama Hacker : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_hacker" style="text-transform:uppercase" class="form-control" value="<?= @$getbiodatatim['nama_hacker']; ?>"disabled>
                                                        <?=form_error('nama_hacker','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            
                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.12 Alamat Hacker : </h6></label>
                                                        <textarea id="content1" rows="6" name="alamat_hacker" class="form-control"disabled><?= @$getbiodatatim['alamat_hacker']; ?></textarea>
                                                        <?=form_error('alamat_hacker','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.13 No. Telp Hacker : </h6></label>
                                                        <br>
                                                            <input type="number"  name="telp_hacker" class="form-control" value="<?= @$getbiodatatim['telp_hipster']; ?>"disabled>
                                                            <?=form_error('telp_hacker','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.14 Email Hacker : </h6></label>
                                                        <br>
                                                            <input type="email"  name="email_hacker" class="form-control" value="<?= @$getbiodatatim['email_hacker']; ?>"disabled> 
                                                            <?=form_error('email_hacker','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.15 Tugas Hacker : </h6></label>
                                                        <textarea id="content2" type="" rows="5" name="tugas_hacker" class="form-control"disabled><?= @$getbiodatatim['tugas_hacker']; ?></textarea>
                                                        <?=form_error('tugas_hacker','<small class="text-danger pl-3">','</small>');?>
                                                    </div>


                                                 
                                                
                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="rp">
                                                <div class="form-group">
                                                <?php if (!$getreviewproduk) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_reviewproduk/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Data Aplikasi </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>3.1 Nama Aplikasi : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_solusi" value="<?= @$getreviewproduk['nama_solusi']; ?>" style="text-transform:uppercase" class="form-control"disabled>
                                                        <?=form_error('nama_solusi','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        
                                                        
                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>3.2 Deskripsi Aplikasi : </h6></label>
                                                        <textarea id="content9" type="" rows="5" name="deskripsi_solusi"  class="form-control"disabled><?= @$getreviewproduk['deskripsi_solusi']; ?></textarea>
                                                        <?=form_error('deskripsi_solusi','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                    
                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.3 Logo Aplikasi : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#logoappModal"> </button>   
                                                            <br>
                                                            
                                                        </div>

                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.4 Preview UI/UX Aplikasi - 1 : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui1Modal"></button>
                                                            <br>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.5 Preview UI/UX Aplikasi - 2 : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui2Modal"></button>
                                                            <br>
                                                            
                                                        </div>

                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.6 Preview UI/UX Aplikasi - 3 : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui3Modal"></button>
                                                            <br>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.7 Preview UI/UX Aplikasi - 4 : </h6></label>
                                                            <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui4Modal"></button>
                                                            <br>
                                                        
                                                        </div>

                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.8 Tahun Pembuatan Aplikasi : </h6></label>
                                                            <input type="number" name="tahun_buat_solusi" value="<?= @$getreviewproduk['tahun_buat_solusi']; ?>" class="form-control"disabled>
                                                            <?=form_error('tahun_buat_solusi','<small class="text-danger pl-3">','</small>');?> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                    <div class="form-group col-sm-5">
                                                    <label for="exampleFormControlFile1"><h6>3.9 Link Video Aplikasi : </h6></label>
                                                        <input type="text" name="link_vid_solusi" value="<?= @$getreviewproduk['link_vid_solusi']; ?>"  class="form-control"disabled>
                                                        <?=form_error('link_vid_solusi','<small class="text-danger pl-3">','</small>');?> 
                                                    
                                                    </div>

                                                    <div class="form-group col-sm-5">
                                                    <label for="exampleFormControlFile1"><h6>3.10 Link Produk Aplikasi : </h6></label>
                                                        <input type="text" name="link_prod_solusi" value="<?= @$getreviewproduk['link_prod_solusi']; ?>" class="form-control"disabled>
                                                        <?=form_error('link_prod_solusi','<small class="text-danger pl-3">','</small>');?>     
                                                    </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>3.11 Teknologi yang digunakan : </h6></label>
                                                        <textarea id="content10" type="" rows="5" name="teknologi_solusi" class="form-control"disabled><?= @$getreviewproduk['teknologi_solusi']; ?></textarea>
                                                        <?=form_error('teknologi_solusi','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                            

                                                  
                                                <?php } ?>
                                                </div>
                                            </div>

                                            
                                            <div role="tabpanel" class="tab-pane" id="pp">
                                                <div class="form-group">
                                                <?php if (!$getpaperpitching) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_paperpitching/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Target Aplikasi </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                        <label><h6>4.1 Latar Belakang : </h6></label>
                                                        <br>
                                                        <small>Ceritakan tentang latar belakang anda dan co-founder anda dalam pembuatan Start-Up ini</small>
                                                        <textarea id="content11"  type="" rows="5" name="latar_belakang_pp" class="form-control" disabled><?= @$getpaperpitching['latar_belakang_pp']; ?></textarea>
                                                            <?=form_error('latar_belakang_pp','<small class="text-danger pl-3">','</small>');?>
                                                            </div>
                                                            
                                                            
                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.2 Permasalahan yang ingin diatasi : </h6></label>
                                                            <small>Permasalahan apa ingin anda atasi melalui usaha yang anda rintis ini?</small>
                                                            <textarea id="content12" type="" rows="5" name="permasalahan_pp"  class="form-control" disabled><?= @$getpaperpitching['permasalahan_pp']; ?></textarea>
                                                            <?=form_error('permasalahan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.3 Solusi yang ditawarkan : </h6></label>
                                                            <small>Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?</small>
                                                            <textarea id="content13" type="" rows="5" name="solusi_pp" class="form-control" disabled><?= @$getpaperpitching['solusi_pp']; ?></textarea>
                                                            <?=form_error('solusi_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.4 Progres usaha : </h6></label>
                                                            <small>Bagaimana progres/traction usaha anda sejauh ini?</small>
                                                            <textarea id="content14" type="" rows="5" name="progres_pp" class="form-control" disabled><?= @$getpaperpitching['progres_pp']; ?></textarea>
                                                            <?=form_error('progres_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.5 Kompetitor Usaha : </h6></label>
                                                            <small>Siapa saja kompetitor anda terhadap usaha yang anda rintis saat ini? Sebutkan</small>
                                                            <textarea id="content15" type="" rows="5" name="kompetitor_pp" class="form-control" disabled><?= @$getpaperpitching['kompetitor_pp']; ?></textarea>
                                                            <?=form_error('kompetitor_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.6 Usaha Serupa : </h6></label>
                                                            <small>Adakah usaha/serupa yang berhasil? Baik di nasional atau internasional? Sebutkan</small>
                                                            <textarea id="content16"  type="" rows="5" name="kompetitor2_pp" class="form-control" disabled><?= @$getpaperpitching['kompetitor2_pp']; ?></textarea>
                                                            <?=form_error('kompetitor2_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.7 Target Usaha : </h6></label>
                                                            <small>Siapa target pengguna solusi anda? Sebutkan</small>
                                                            <textarea id="content17" type="" rows="5" name="target_pp" class="form-control" disabled><?= @$getpaperpitching['target_pp']; ?></textarea>
                                                            <?=form_error('target_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.8 Data yang digunakan : </h6></label>
                                                            <small>Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda?</small>
                                                            <textarea id="content18" type="" rows="5" name="data_pp" class="form-control" disabled><?= @$getpaperpitching['data_pp']; ?></textarea>
                                                            <?=form_error('data_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.9 Proses Bisnis : </h6></label>
                                                            <small>Bagaimana proses bisnis dari aplikasi/solusi yang anda tawarkan?</small>
                                                            <textarea id="content19" type="" rows="5" name="proses_bisnis_pp" class="form-control" disabled><?= @$getpaperpitching['proses_bisnis_pp']; ?></textarea>
                                                            <?=form_error('proses_bisnis_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                            <div class="form-group col-sm-5">
                                                                <small>Gambar Proses Bisnis : </small>
                                                                <br>
                                                                <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#pb2ppModal"></button>
                                                                <br>
                                                                
                                                            </div>
                                                        
                                                            <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.10 Proses mewujudkan : </h6></label>
                                                            <small>Bagaimana proses/tahapan mewujudkan solusi yang akan anda ?</small>
                                                            <textarea id="content20" type="" rows="5" name="tahapan_pp"  class="form-control" disabled><?= @$getpaperpitching['tahapan_pp']; ?></textarea>
                                                            <?=form_error('tahapan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.11 Kelebihan Aplikasi : </h6></label>
                                                            <small>Kelebihan dari solusi/aplikasi yang ditawarkan?</small>
                                                            <textarea id="content21" type="" rows="5" name="kelebihan_pp"  class="form-control" disabled><?= @$getpaperpitching['kelebihan_pp']; ?></textarea>
                                                            <?=form_error('kelebihan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                       
                                                       
                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="bp">
                                                <div class="form-group">
                                                <?php if (!$getbisnisplan) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_bisnisplan/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Bisnis Plan </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                        <label><h6>5.1 Customer : </h6></label>
                                                        <br>
                                                        <textarea id="content22" type="" rows="5" name="cust_plan"  class="form-control"disabled><?= @$getbisnisplan['cust_plan']; ?></textarea>
                                                        <?=form_error('cust_plan','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        
                                                        
                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.2 Value Propositions : </h6></label><br>
                                                        <textarea id="content23" type="" rows="5" name="value_plan"class="form-control"disabled><?= @$getbisnisplan['value_plan']; ?></textarea>
                                                        <?=form_error('value_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.3 Channels : </h6></label><br>
                                                        <textarea id="content24" type="" rows="5" name="channels_plan" class="form-control"disabled><?= @$getbisnisplan['channels_plan']; ?></textarea>
                                                        <?=form_error('channels_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.4 Relationships : </h6></label><br>
                                                        <textarea id="content25" type="" rows="5" name="relation_plan" class="form-control"disabled><?= @$getbisnisplan['relation_plan']; ?></textarea>
                                                        <?=form_error('relation_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.5 Key Activities : </h6></label><br>
                                                        <textarea id="content26" type="" rows="5" name="key_act_plan" class="form-control"disabled><?= @$getbisnisplan['key_act_plan']; ?></textarea>
                                                        <?=form_error('key_act_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.6 Key Resource : </h6></label><br>
                                                        <textarea id="content27" type="" rows="5" name="key_res_plan"  class="form-control"disabled><?= @$getbisnisplan['key_res_plan']; ?></textarea>
                                                        <?=form_error('key_res_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.7 Key Partners : </h6></label><br>
                                                        <textarea id="content28" type="" rows="5" name="key_partner_plan"  class="form-control"disabled><?= @$getbisnisplan['key_partner_plan']; ?></textarea>
                                                        <?=form_error('key_partner_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.8 Cost Structure : </h6></label><br>
                                                        <textarea id="content29" type="" rows="5" name="cost_plan"  class="form-control"disabled><?= @$getbisnisplan['cost_plan']; ?></textarea>
                                                        <?=form_error('cost_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.9 Revenue Streams : </h6></label><br>
                                                        <textarea id="content30"  type="" rows="5" name="revenue_plan" class="form-control"disabled><?= @$getbisnisplan['revenue_plan']; ?></textarea>
                                                        <?=form_error('revenue_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                   
                                               
                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="pd">
                                                <div class="form-group">
                                                <?php if (!$getpitchdesk) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_pitchdesk/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Presentasi Singkat </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                            <label for="textarea"><h5> Presentasikan / uraikan aplikasi anda secara singkat : </h5></label>
                                                            <br>
                                                            <small>pada bagian ini, anda dapat memberi uraian singkat mengenai perusahaan start-up / aplikasi start-up anda, 
                                                            baik dalam kelebihan atau hal lainnya yang belum dapat diterangkan pada inputan sebelumnya</small>
                                                            <textarea id="content31" type="" rows="5" name="uraian_singkat" class="form-control" disabled><?= @$getpitchdesk['uraian_singkat']; ?></textarea>
                                                           
                                                        </div>
                                                    
                                                    
                                                        <div class="form-group col-sm-11">
                                                        <label for="exampleFormControlFile1"><h5> File presentasi  : </h5></label><br>
                                                            <small>pada bagian ini, anda dapat mengirimkan file presentasi mengenai perusahaan start-up / aplikasi start-up anda, 
                                                            baik dalam kelebihan atau hal lainnya yang belum dapat diterangkan pada inputan sebelumnya. File presentasi berupa pdf / dapat di export menjadi file pdf </small><br>
                                                            <br><a class="btn btn-dark" type='application/pdf' href="<?= base_url().'assets/files/'. $getpitchdesk['file_pitchd']; ?>" target="_blank"> <i class=" fas fa-eye">Lihat File</i></a>
                                                       
                                                        </div>
                                                      
                                                <?php } ?>
                                                </div>
                                            </div>
                                          
                                            </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                     </div>
                     </div>
                   

                  

                   
                    <!-- Belum Finalisasi -->
                    <?php } else { ?>
                        <br>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-dark">Judul Proposal </h4>
                                       
                                        </div>
                           
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url('peserta/edit_judulproposal')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                        <label><h6>Judul Proposal Start-Up : </h6></label>
                                        <br>
                                        <input type="text" class="form-control form-control-user" id="judul_proposal" 
                                            name="judul_proposal" placeholder="Masukkan Judul Proposal Start-Up Anda" style="text-transform:uppercase" value="<?= @$getjudul['judul_proposal']; ?>" >
                                            <?=form_error('judul_proposal','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label><h6>Tema Proposal : </h6></label>
                                            <input type="text" class="form-control form-control-user" id="nama_transfer" 
                                            name="nama_transfer" placeholder="tema proposal" style="text-transform:capitalize" value="<?= @$getjudul['tema_proposal']; ?>" disabled >
                                            <?=form_error('nama_transfer','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                            <input type="hidden" name="date_updated"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                                            
                                        <div class="form-group col-sm-11">
                                        <button type="submit" class="btn btn-dark">Update Judul</button>
                                    </div>
                            </div>
                        </div>
                   
                    </div>
                 

                          <!-- Earnings (Monthly) Card Example --> 
                          <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-dark">Tambah Data Proposal </h4>
                                       <br>
                                         <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-capitalize mb-1">
                                           
                                            <br>
                                            </div>
                                            <ul class="nav nav-tabs">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#su" role="tablist" data-toggle="tab">Profile Perusahaan</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#bt" role="tablist" data-toggle="tab">Biodata Tim</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#rp" role="tablist" data-toggle="tab">Data Aplikasi Start-Up</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#pp" role="tablist" data-toggle="tab">Data Target Usaha Start-Up</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#bp" role="tablist" data-toggle="tab">Bisnis Plan - BMC</a>
                                                </li>
                                                <li class=" nav-item">
                                                    <a class="nav-link" href="#pd" role="tablist" data-toggle="tab">Presentasi Singkat</a>
                                                </li>
                                            </ul>
                                        <br>

                                        <div class="tab-content">
                                     
                                            <div role="tabpanel" class="tab-pane active" id="su">
                                                <div class="form-group">
                                                <?php if (!$getstartup) { ?>
                                                        <a class="btn btn-dark " href="<?php echo base_url('peserta/index_startup/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Data Perusahaan </i> </a>
                                                <?php }else{?>
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
                                                        <textarea id="content8" type="" rows="5" name="misi_su" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control"disabled><?= @$getstartup['misi_su']; ?></textarea>
                                                        <?php echo form_error('misi_su','<div class="text-danger small" ml-10>')?>
                                                    </div>
                                                    
                                                    <div class="form-group row col-sm-11">
                                                    <div class="form-group col-sm-6">
                                                    <label for="exampleFormControlFile1"><h6>1.4 Struktur Organisasi : </h6></label>
                                                    <br>
                                                    <button type="button" class="btn btn-dark fa fa-eye" data-toggle="modal" data-target="#struktursuModal"></button>
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
                                                    <a class="btn btn-dark fa fa-edit" href="<?php echo base_url('peserta/edit_startup/'.@$getjudul['id_proposal'])?>"> Edit  </a>
                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="bt">
                                                <div class="form-group">
                                                <?php if (!$getbiodatatim) { ?>
                                                        <a class="btn btn-dark " href="<?php echo base_url('peserta/index_biodatatim/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Data Biodata Tim </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                        <h6 class="list-group-item list-group-item-secondary">Data Hustler </h6>
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>2.1 Nama Hustler : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_hustler" style="text-transform:uppercase" class="form-control" value="<?= @$getbiodatatim['nama_hustler']; ?>" disabled>
                                                        <?=form_error('nama_hustler','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            
                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.2 Alamat Hustler : </h6></label>
                                                        <textarea id="content1" rows="6" name="alamat_hustler" class="form-control"disabled><?= @$getbiodatatim['alamat_hustler']; ?></textarea>
                                                        <?=form_error('alamat_hustler','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.3 No. Telp Hustler : </h6></label>
                                                        <br>
                                                            <input type="number"  name="telp_hustler" class="form-control" value="<?= @$getbiodatatim['telp_hustler']; ?>" disabled>
                                                            <?=form_error('telp_hustler','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.4 Email Hustler : </h6></label>
                                                        <br>
                                                            <input type="email"  name="email_hustler" class="form-control" value="<?= @$getbiodatatim['email_hustler']; ?>" disabled>
                                                            <?=form_error('email_hustler','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.5 Tugas Hustler : </h6></label>
                                                        <textarea id="content2" type="" rows="5" name="tugas_hustler" class="form-control"disabled><?= @$getbiodatatim['tugas_hustler']; ?></textarea>
                                                        <?=form_error('tugas_hustler','<small class="text-danger pl-3">','</small>');?>
                                                    </div>


                                                    <div class="form-group col-sm-11">
                                                        <h6 class="list-group-item list-group-item-secondary">Data Hipster </h6>
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>2.6 Nama Hipster : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_hipster" style="text-transform:uppercase" class="form-control" value="<?= @$getbiodatatim['nama_hipster']; ?>"disabled>
                                                        <?=form_error('nama_hipster','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            
                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.7 Alamat Hipster : </h6></label>
                                                        <textarea id="content1" rows="6" name="alamat_hipster" class="form-control"disabled><?= @$getbiodatatim['alamat_hipster']; ?></textarea>
                                                        <?=form_error('alamat_hipster','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.8 No. Telp Hipster : </h6></label>
                                                        <br>
                                                            <input type="number"  name="telp_hipster" class="form-control" value="<?= @$getbiodatatim['telp_hipster']; ?>"disabled>
                                                            <?=form_error('telp_hipster','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.9 Email Hipster : </h6></label>
                                                        <br>
                                                            <input type="email"  name="email_hipster" class="form-control" value="<?= @$getbiodatatim['email_hipster']; ?>"disabled>
                                                            <?=form_error('email_hipster','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.10 Tugas Hipster : </h6></label>
                                                        <textarea id="content2" type="" rows="5" name="tugas_hipster" class="form-control"disabled><?= @$getbiodatatim['tugas_hipster']; ?></textarea>
                                                        <?=form_error('tugas_hipster','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <h6 class="list-group-item list-group-item-secondary">Data Hacker </h6>
                                                    </div>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>2.11 Nama Hacker : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_hacker" style="text-transform:uppercase" class="form-control" value="<?= @$getbiodatatim['nama_hacker']; ?>"disabled>
                                                        <?=form_error('nama_hacker','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                            
                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.12 Alamat Hacker : </h6></label>
                                                        <textarea id="content1" rows="6" name="alamat_hacker" class="form-control"disabled><?= @$getbiodatatim['alamat_hacker']; ?></textarea>
                                                        <?=form_error('alamat_hacker','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.13 No. Telp Hacker : </h6></label>
                                                        <br>
                                                            <input type="number"  name="telp_hacker" class="form-control" value="<?= @$getbiodatatim['telp_hipster']; ?>"disabled>
                                                            <?=form_error('telp_hacker','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-6">
                                                        <label><h6>2.14 Email Hacker : </h6></label>
                                                        <br>
                                                            <input type="email"  name="email_hacker" class="form-control" value="<?= @$getbiodatatim['email_hacker']; ?>"disabled> 
                                                            <?=form_error('email_hacker','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>2.15 Tugas Hacker : </h6></label>
                                                        <textarea id="content2" type="" rows="5" name="tugas_hacker" class="form-control"disabled><?= @$getbiodatatim['tugas_hacker']; ?></textarea>
                                                        <?=form_error('tugas_hacker','<small class="text-danger pl-3">','</small>');?>
                                                    </div>


                                                    <a class="btn btn-dark fa fa-edit" href="<?php echo base_url('peserta/edit_biodatatim/'.@$getjudul['id_proposal'])?>"> Edit  </a>
                                                
                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="rp">
                                                <div class="form-group">
                                                <?php if (!$getreviewproduk) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_reviewproduk/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Data Aplikasi </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                    <label><h6>3.1 Nama Aplikasi : </h6></label>
                                                    <br>
                                                        <input type="text"  name="nama_solusi" value="<?= @$getreviewproduk['nama_solusi']; ?>" style="text-transform:uppercase" class="form-control"disabled>
                                                        <?=form_error('nama_solusi','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        
                                                        
                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>3.2 Deskripsi Aplikasi : </h6></label>
                                                        <textarea id="content9" type="" rows="5" name="deskripsi_solusi"  class="form-control"disabled><?= @$getreviewproduk['deskripsi_solusi']; ?></textarea>
                                                        <?=form_error('deskripsi_solusi','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                    
                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.3 Logo Aplikasi : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#logoappModal"> </button>   
                                                            <br>
                                                            
                                                        </div>

                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.4 Preview UI/UX Aplikasi - 1 : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui1Modal"></button>
                                                            <br>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.5 Preview UI/UX Aplikasi - 2 : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui2Modal"></button>
                                                            <br>
                                                            
                                                        </div>

                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.6 Preview UI/UX Aplikasi - 3 : </h6></label>
                                                        <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui3Modal"></button>
                                                            <br>
                                                        
                                                        </div>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.7 Preview UI/UX Aplikasi - 4 : </h6></label>
                                                            <br>
                                                            <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui4Modal"></button>
                                                            <br>
                                                        
                                                        </div>

                                                        <div class="form-group col-sm-5">
                                                        <label for="exampleFormControlFile1"><h6>3.8 Tahun Pembuatan Aplikasi : </h6></label>
                                                            <input type="number" name="tahun_buat_solusi" value="<?= @$getreviewproduk['tahun_buat_solusi']; ?>" class="form-control"disabled>
                                                            <?=form_error('tahun_buat_solusi','<small class="text-danger pl-3">','</small>');?> 
                                                        </div>
                                                    </div>

                                                    <div class="form-group row col-sm-11">
                                                    <div class="form-group col-sm-5">
                                                    <label for="exampleFormControlFile1"><h6>3.9 Link Video Aplikasi : </h6></label>
                                                        <input type="text" name="link_vid_solusi" value="<?= @$getreviewproduk['link_vid_solusi']; ?>"  class="form-control"disabled>
                                                        <?=form_error('link_vid_solusi','<small class="text-danger pl-3">','</small>');?> 
                                                    
                                                    </div>

                                                    <div class="form-group col-sm-5">
                                                    <label for="exampleFormControlFile1"><h6>3.10 Link Produk Aplikasi : </h6></label>
                                                        <input type="text" name="link_prod_solusi" value="<?= @$getreviewproduk['link_prod_solusi']; ?>" class="form-control"disabled>
                                                        <?=form_error('link_prod_solusi','<small class="text-danger pl-3">','</small>');?>     
                                                    </div>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                    <label for="textarea"><h6>3.11 Teknologi yang digunakan : </h6></label>
                                                        <textarea id="content10" type="" rows="5" name="teknologi_solusi" class="form-control"disabled><?= @$getreviewproduk['teknologi_solusi']; ?></textarea>
                                                        <?=form_error('teknologi_solusi','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                            

                                                    <a class="btn btn-dark fa fa-edit" href="<?php echo base_url('peserta/edit_reviewproduk/'.@$getjudul['id_proposal'])?>"> Edit  </a>
                                                <?php } ?>
                                                </div>
                                            </div>

                                            
                                            <div role="tabpanel" class="tab-pane" id="pp">
                                                <div class="form-group">
                                                <?php if (!$getpaperpitching) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_paperpitching/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Target Aplikasi </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                        <label><h6>4.1 Latar Belakang : </h6></label>
                                                        <br>
                                                        <small>Ceritakan tentang latar belakang anda dan co-founder anda dalam pembuatan Start-Up ini</small>
                                                        <textarea id="content11"  type="" rows="5" name="latar_belakang_pp" class="form-control" disabled><?= @$getpaperpitching['latar_belakang_pp']; ?></textarea>
                                                            <?=form_error('latar_belakang_pp','<small class="text-danger pl-3">','</small>');?>
                                                            </div>
                                                            
                                                            
                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.2 Permasalahan yang ingin diatasi : </h6></label>
                                                            <small>Permasalahan apa ingin anda atasi melalui usaha yang anda rintis ini?</small>
                                                            <textarea id="content12" type="" rows="5" name="permasalahan_pp"  class="form-control" disabled><?= @$getpaperpitching['permasalahan_pp']; ?></textarea>
                                                            <?=form_error('permasalahan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.3 Solusi yang ditawarkan : </h6></label>
                                                            <small>Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?</small>
                                                            <textarea id="content13" type="" rows="5" name="solusi_pp" class="form-control" disabled><?= @$getpaperpitching['solusi_pp']; ?></textarea>
                                                            <?=form_error('solusi_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.4 Progres usaha : </h6></label>
                                                            <small>Bagaimana progres/traction usaha anda sejauh ini?</small>
                                                            <textarea id="content14" type="" rows="5" name="progres_pp" class="form-control" disabled><?= @$getpaperpitching['progres_pp']; ?></textarea>
                                                            <?=form_error('progres_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.5 Kompetitor Usaha : </h6></label>
                                                            <small>Siapa saja kompetitor anda terhadap usaha yang anda rintis saat ini? Sebutkan</small>
                                                            <textarea id="content15" type="" rows="5" name="kompetitor_pp" class="form-control" disabled><?= @$getpaperpitching['kompetitor_pp']; ?></textarea>
                                                            <?=form_error('kompetitor_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.6 Usaha Serupa : </h6></label>
                                                            <small>Adakah usaha/serupa yang berhasil? Baik di nasional atau internasional? Sebutkan</small>
                                                            <textarea id="content16"  type="" rows="5" name="kompetitor2_pp" class="form-control" disabled><?= @$getpaperpitching['kompetitor2_pp']; ?></textarea>
                                                            <?=form_error('kompetitor2_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.7 Target Usaha : </h6></label>
                                                            <small>Siapa target pengguna solusi anda? Sebutkan</small>
                                                            <textarea id="content17" type="" rows="5" name="target_pp" class="form-control" disabled><?= @$getpaperpitching['target_pp']; ?></textarea>
                                                            <?=form_error('target_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.8 Data yang digunakan : </h6></label>
                                                            <small>Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda?</small>
                                                            <textarea id="content18" type="" rows="5" name="data_pp" class="form-control" disabled><?= @$getpaperpitching['data_pp']; ?></textarea>
                                                            <?=form_error('data_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.9 Proses Bisnis : </h6></label>
                                                            <small>Bagaimana proses bisnis dari aplikasi/solusi yang anda tawarkan?</small>
                                                            <textarea id="content19" type="" rows="5" name="proses_bisnis_pp" class="form-control" disabled><?= @$getpaperpitching['proses_bisnis_pp']; ?></textarea>
                                                            <?=form_error('proses_bisnis_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                            <div class="form-group col-sm-5">
                                                                <small>Gambar Proses Bisnis : </small>
                                                                <br>
                                                                <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#pb2ppModal"></button>
                                                                <br>
                                                                
                                                            </div>
                                                        
                                                            <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.10 Proses mewujudkan : </h6></label>
                                                            <small>Bagaimana proses/tahapan mewujudkan solusi yang akan anda ?</small>
                                                            <textarea id="content20" type="" rows="5" name="tahapan_pp"  class="form-control" disabled><?= @$getpaperpitching['tahapan_pp']; ?></textarea>
                                                            <?=form_error('tahapan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                        <div class="form-group col-sm-11">
                                                            <label for="textarea"><h6>4.11 Kelebihan Aplikasi : </h6></label>
                                                            <small>Kelebihan dari solusi/aplikasi yang ditawarkan?</small>
                                                            <textarea id="content21" type="" rows="5" name="kelebihan_pp"  class="form-control" disabled><?= @$getpaperpitching['kelebihan_pp']; ?></textarea>
                                                            <?=form_error('kelebihan_pp','<small class="text-danger pl-3">','</small>');?>
                                                        </div>

                                                       
                                                        <a class="btn btn-dark fa fa-edit" href="<?php echo base_url('peserta/edit_paperpitching/'.@$getjudul['id_proposal'])?>"> Edit  </a>

                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="bp">
                                                <div class="form-group">
                                                <?php if (!$getbisnisplan) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_bisnisplan/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Bisnis Plan </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                        <label><h6>5.1 Customer : </h6></label>
                                                        <br>
                                                        <textarea id="content22" type="" rows="5" name="cust_plan"  class="form-control"disabled><?= @$getbisnisplan['cust_plan']; ?></textarea>
                                                        <?=form_error('cust_plan','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        
                                                        
                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.2 Value Propositions : </h6></label><br>
                                                        <textarea id="content23" type="" rows="5" name="value_plan"class="form-control"disabled><?= @$getbisnisplan['value_plan']; ?></textarea>
                                                        <?=form_error('value_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.3 Channels : </h6></label><br>
                                                        <textarea id="content24" type="" rows="5" name="channels_plan" class="form-control"disabled><?= @$getbisnisplan['channels_plan']; ?></textarea>
                                                        <?=form_error('channels_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.4 Relationships : </h6></label><br>
                                                        <textarea id="content25" type="" rows="5" name="relation_plan" class="form-control"disabled><?= @$getbisnisplan['relation_plan']; ?></textarea>
                                                        <?=form_error('relation_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.5 Key Activities : </h6></label><br>
                                                        <textarea id="content26" type="" rows="5" name="key_act_plan" class="form-control"disabled><?= @$getbisnisplan['key_act_plan']; ?></textarea>
                                                        <?=form_error('key_act_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.6 Key Resource : </h6></label><br>
                                                        <textarea id="content27" type="" rows="5" name="key_res_plan"  class="form-control"disabled><?= @$getbisnisplan['key_res_plan']; ?></textarea>
                                                        <?=form_error('key_res_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.7 Key Partners : </h6></label><br>
                                                        <textarea id="content28" type="" rows="5" name="key_partner_plan"  class="form-control"disabled><?= @$getbisnisplan['key_partner_plan']; ?></textarea>
                                                        <?=form_error('key_partner_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.8 Cost Structure : </h6></label><br>
                                                        <textarea id="content29" type="" rows="5" name="cost_plan"  class="form-control"disabled><?= @$getbisnisplan['cost_plan']; ?></textarea>
                                                        <?=form_error('cost_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>

                                                    <div class="form-group col-sm-11">
                                                        <label for="textarea"><h6>5.9 Revenue Streams : </h6></label><br>
                                                        <textarea id="content30"  type="" rows="5" name="revenue_plan" class="form-control"disabled><?= @$getbisnisplan['revenue_plan']; ?></textarea>
                                                        <?=form_error('revenue_plan','<small class="text-danger pl-3">','</small>');?>
                                                    </div>
                                                    <a class="btn btn-dark fa fa-edit" href="<?php echo base_url('peserta/edit_bisnisplan/'.@$getjudul['id_proposal'])?>"> Edit  </a>
                                               
                                                <?php } ?>
                                                </div>
                                            </div>

                                            <div role="tabpanel" class="tab-pane" id="pd">
                                                <div class="form-group">
                                                <?php if (!$getpitchdesk) { ?>
                                                        <a class="btn btn-dark" href="<?php echo base_url('peserta/index_pitchdesk/'.@$getjudul['id_proposal'])?>"><i class=" fas fa-plus"> Tambah Presentasi Singkat </i> </a>
                                                <?php }else{?>
                                                    <div class="form-group col-sm-11">
                                                            <label for="textarea"><h5> Presentasikan / uraikan aplikasi anda secara singkat : </h5></label>
                                                            <br>
                                                            <small>pada bagian ini, anda dapat memberi uraian singkat mengenai perusahaan start-up / aplikasi start-up anda, 
                                                            baik dalam kelebihan atau hal lainnya yang belum dapat diterangkan pada inputan sebelumnya</small>
                                                            <textarea id="content31" type="" rows="5" name="uraian_singkat" class="form-control" disabled><?= @$getpitchdesk['uraian_singkat']; ?></textarea>
                                                           
                                                        </div>
                                                    
                                                    
                                                        <div class="form-group col-sm-11">
                                                        <label for="exampleFormControlFile1"><h5> File presentasi  : </h5></label><br>
                                                            <small>pada bagian ini, anda dapat mengirimkan file presentasi mengenai perusahaan start-up / aplikasi start-up anda, 
                                                            baik dalam kelebihan atau hal lainnya yang belum dapat diterangkan pada inputan sebelumnya. File presentasi berupa pdf / dapat di export menjadi file pdf </small><br>
                                                            <br><a class="btn btn-dark" type='application/pdf' href="<?= base_url().'assets/files/'. $getpitchdesk['file_pitchd']; ?>" target="_blank"> <i class=" fas fa-eye">Lihat File</i></a>
                                                       
                                                        </div>
                                                        <a class="btn btn-dark fa fa-edit" href="<?php echo base_url('peserta/edit_pitchdesk/'.@$getjudul['id_proposal'])?>"> Edit</a>
                                                <?php } ?>
                                                </div>
                                            </div>

                                          




                                        </div> 
                                
                                     
                                          
                                            </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                     </div>
                   

                      <!-- Earnings (Monthly) Card Example --> 
                      <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-danger">Finalisasi Proposal </h4>
                                       <br>
                                         <div class="col mr-2">
                                         
                                         <div class="form-group col-sm-11">
                                                <h6 class="list-group-item list-group-item-danger">Dengan menekan tombol finalisasi, maka anda tidak dapat menambahkan atau mengedit
                                                     semua data yang terdapat pada bagian proposal. Pastikan semua menu serta inputan yang terdapat pada 
                                                    proposal sudah terisi dan benar. 
                                                </h6>
                                               </div>
                                               <div class="form-group col-sm-11">
                                               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                               Finalisasi Proposal
                                                </button>
                                               </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Finalisasi</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin untuk finalisasi proposal? Setelah memilih opsi finalisasi, anda tidak dapat menambah maupun mengedit data proposal anda apapun keadaannya! Jika data proposal belum lengkap atau belum final, anda dapat memilih option "Batal" dan melengkapi isian proposal anda.
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <a class="btn btn-danger" href="<?php echo base_url('peserta/finalisasi')?>"> Finalisasi </a>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                                            </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    

                        <?php } ?>


                    <!-- Belum Bayar -->
                    <?php } else { ?>
                    <!-- Page Heading -->
                    <div class="p-3 mb-2 bg-danger text-white">
                          Pembayaran belum diverifikasi, silakan melakukan pembayaran atau menunggu pembayaran di verifikasi 
                          <span aria-hidden="true"></span>
                    </div>
                 
                <?php } ?>
                    
                    
                    
                    
               
                                      
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
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
                        </div>
            <!-- Modal logo -->
                    <div class="modal fade" id="logoappModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">LOGO APLIKASI</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.@$getreviewproduk['logo_solusi'];?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        
                         <!-- Modal ui1 -->
                         <div class="modal fade" id="ui1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-1</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.@$getreviewproduk['prev_ui1_solusi'];?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal ui2 -->
                         <div class="modal fade" id="ui2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-2</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.@$getreviewproduk['prev_ui2_solusi'];?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal ui3 -->
                         <div class="modal fade" id="ui3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-3</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.@$getreviewproduk['prev_ui3_solusi'];?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal ui4 -->
                         <div class="modal fade" id="ui4Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-4</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.@$getreviewproduk['prev_ui4_solusi'];?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
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

           