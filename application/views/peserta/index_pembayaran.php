                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <?php if (@$getjoin['status_bayar'] == 'Berhasil') { ?>
                                        <div class="p-3 mb-2 bg-success text-white">
                                        Pembayaran Berhasil terverifikasi
                                        <span aria-hidden="true"></span>
                                    </div>
                                    <?php } else if (@$getjoin['status_bayar'] == 'Bermasalah') { ?>
                                        <div class="p-3 mb-2 bg-danger text-white">
                                        Pembayaran Belum Dapat di verifikasi, silakan menghubungi panitia untuk pengecekan lebih lanjut
                                        <span aria-hidden="true"></span>
                                    </div>
                                    <?php } else { ?>
                                        <div class="p-3 mb-2 bg-warning text-white">
                                        Menunggu Verifikasi 
                                        <span aria-hidden="true"></span>
                                    </div><?php } ?>
                    

                   <?= $this->session->flashdata('message');?>
            

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
                                                    name="tanggal_bayar" placeholder="Tanggal Transfer" value="<?= @$getjoin['tanggal_bayar']; ?>" disabled>
                                                    <?=form_error('tanggal_bayar','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <label><h6>Jumlah Transfer : </h6></label>
                                                <input type="number" class="form-control form-control-user"
                                                    id="jumlah_bayar" name="jumlah_bayar" placeholder="Jumlah transfer (Hanya Angka, contoh : 50000)"  value="<?= @$getjoin['jumlah_bayar']; ?>" disabled>
                                                    <?=form_error('jumlah_bayar','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                        </div> 
                                          
                                        <div class="form-group col-sm-11">
                                            <label><h6>Rekening Tujuan Transfer : </h6></label>
                                            <br>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rek_transfer" id="rek_transfer" value="BCA" <?php if($getjoin['rek_transfer']=='BCA') echo 'checked'?> disabled>
                                            <label class="form-check-label" for="rek_transfer"> BCA </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="rek_transfer" id="rek_transfer" value="BRI" <?php if($getjoin['rek_transfer']=='BRI') echo 'checked'?> disabled>
                                            <label class="form-check-label" for="rek_transfer"> BRI </label>
                                            </div>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label><h6>Nama Pemilik Rekening Transfer : </h6></label>
                                            <input type="text" class="form-control form-control-user" id="nama_transfer" 
                                            name="nama_transfer" placeholder="Masukkan nama pemilik Rekening yang digunakan untuk transfer" value="<?= @$getjoin['nama_transfer']; ?>" disabled >
                                            <?=form_error('nama_transfer','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="col-lg-3 col-md-3 col-xs-3 thumb">
                                            <label for="exampleFormControlFile1"><h6>Bukti Pembayaran : </h6></label>
                                            <a class="thumbnail" >
                                            <img src="<?php echo base_url().'assets/files/'.@$getjoin['bukti_transfer']?>" class="img-thumbnail">
                                            </a>
                                        </div>
                                        
                                        <input type="hidden" name="date_added"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                                    
                                  
                            </div>
                        </div>
                   
                    </div> 
                    </div>

                 
                    
                    
                    
                    
               
                                      
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           