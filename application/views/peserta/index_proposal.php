                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (@$getjoin['status_bayar'] == '1') { ?>
                    <?= $this->session->flashdata('message');?>
                    <!-- Page Heading -->
                    <!-- Sudah Finalisasi -->
                    <?php if (@$getjudul['finalisasi'] == '1') { ?>
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
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-dark">Tambah Data Proposal </h4>
                                       <br>
                                         <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-capitalize mb-1">
                                            <h6>Tambah data profile perusahaan Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_startup/'.@$getjudul['id_proposal'])?>"> Data Start-Up </a><br><br>
                                            <h6>Tambah data biodata tim Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_biodatatim/'.@$getjudul['id_proposal'])?>"> Data Biodata Tim </a><br><br>
                                            <h6>Tambah data aplikasi Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_reviewproduk/'.@$getjudul['id_proposal'])?>")?> Data Aplikasi </a><br><br>
                                            <h6>Tambah data target usaha Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_paperpitching/'.@$getjudul['id_proposal'])?>"> Target Usaha </a><br><br>
                                            <h6>Tambah data bisnis plan Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_bisnisplan/'.@$getjudul['id_proposal'])?>"> Bisnis Plan - BMC </a><br><br>
                                            <h6>Tambah data presentasi singkat :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_pitchdesk/'.@$getjudul['id_proposal'])?>"> Presentasi Singkat </a><br><br>
                                          
                                            </div> 
                                      </div>
                                </div>
                            </div>
                        </div>
                     </div>
                    </div>
                    </div>

                    <div class="row">
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
                                            <h6>Tambah data profile perusahaan Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_startup/'.@$getjudul['id_proposal'])?>"> Data Start-Up </a><br><br>
                                            <h6>Tambah data biodata tim Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_biodatatim/'.@$getjudul['id_proposal'])?>"> Data Biodata Tim </a><br><br>
                                            <h6>Tambah data aplikasi Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_reviewproduk/'.@$getjudul['id_proposal'])?>")?> Data Aplikasi </a><br><br>
                                            <h6>Tambah data target usaha Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_paperpitching/'.@$getjudul['id_proposal'])?>"> Target Usaha </a><br><br>
                                            <h6>Tambah data bisnis plan Start-Up :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_bisnisplan/'.@$getjudul['id_proposal'])?>"> Bisnis Plan - BMC </a><br><br>
                                            <h6>Tambah data presentasi singkat :</h6>
                                            <a class="btn btn-dark fa fa-eye" href="<?php echo base_url('peserta/index_pitchdesk/'.@$getjudul['id_proposal'])?>"> Presentasi Singkat </a><br><br>
                                          
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

           