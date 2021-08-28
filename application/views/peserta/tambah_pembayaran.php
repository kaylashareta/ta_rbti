                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="p-3 mb-2 bg-danger text-white">
                            Peserta belum melakukan pembayaran
                            <span aria-hidden="true"></span>
                    </div>
                   <br>
                   <?= $this->session->flashdata('message');?>
                   <!-- Button trigger modal -->
                   <div class="col-xl-12 col-md-12 "> 
                   <button type="button" class="btn btn-secondary fa fa-eye" data-toggle="modal" data-target="#exampleModal">
                    Daftar Rekening Pembayaran
                    </button>
                    </div>

                    <br>
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <h4 class="list-group-item list-group-item-dark">Halaman Pembayaran </h4>
                                       
                                        </div>
                                     
                                    
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo base_url('peserta/tambah_pembayaran')?>" enctype="multipart/form-data">
                                      <div class="form-group row col-sm-11">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label><h6>Tanggal Transfer : </h6></label>
                                            <input type="date" class="form-control form-control-user" id="tanggal_bayar"
                                                name="tanggal_bayar" placeholder="Tanggal Transfer" value="<?=set_value('tanggal_bayar');?>">
                                                <?=form_error('tanggal_bayar','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label><h6>Jumlah Transfer : </h6></label>
                                                <input type="number" class="form-control form-control-user"
                                                    id="jumlah_bayar" name="jumlah_bayar" placeholder="Jumlah transfer (Hanya Angka, contoh : 50000)" value="<?=set_value('jumlah_bayar');?>" >
                                                    <?=form_error('jumlah_bayar','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div> 
                                            
                                        <div class="form-group col-sm-11">
                                            <label><h6>Rekening Tujuan Transfer : </h6></label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rek_transfer" id="rek_transfer" value="BCA">
                                            <label class="form-check-label" for="rek_transfer"> BCA </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rek_transfer" id="rek_transfer" value="BRI">
                                            <label class="form-check-label" for="rek_transfer"> BRI </label>
                                        </div>
                                        <?=form_error('rek_transfer','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                        <label><h6>Nama Pemilik Rekening Transfer : </h6></label>
                                            <input type="text" class="form-control form-control-user" id="nama_transfer" 
                                            name="nama_transfer" placeholder="Masukkan nama pemilik Rekening yang digunakan untuk transfer" style="text-transform:capitalize" value="<?=set_value('nama_transfer');?>" >
                                            <?=form_error('nama_transfer','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group col-sm-11">
                                        <label><h6>Bukti Transfer : </h6></label>
                                        <input type="file" name="bukti_transfer"  accept="image/*" placeholder="Masukkan File Struktur Organisasi" class="form-control-file" id="exampleFormControlFile1">
                                        <?=form_error('bukti_transfer','<small class="text-danger pl-3">','</small>');?>
                                        <small>PNG / JPG / JPEG / PDF max 2MB</small>
                                        </div>
                                    <input type="hidden" name="date_added"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                                    
                                    <div class="form-group col-sm-11">
                                    <button type="submit" class="btn btn-dark">Submit Pembayaran</button>
                                </div>
                            </div>
                        </div>
                   
                    </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Daftar Rekening</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                                       <table class="table table-bordered table-stripped table-hover">
                                      <tr>
                                          
                                              <th>Nama Bank</th>
                                              <th>Nama Pemilik</th>
                                              <th>Nomor Rekening</th>
                                            
                                          </tr>
                                          <?php 
                                             
                                              foreach ($daftarrekening as $adm) : ?>
                                              <tr>
                                                <td width="100px"><?php echo $adm->nama_bank?></td>
                                                  <td width="400px"><?php echo $adm->nama_rek?></td>
                                                  <td width="400px"><?php echo $adm->no_rek?></td>
                                               
                                              </tr>
                                              <?php endforeach; ?>
                                      </table>
                                  
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                        </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    
               
                                      
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           