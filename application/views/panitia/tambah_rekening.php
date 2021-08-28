                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <h4 class="m-0 font-weight-bold text-dark">Tambah Rekening</h4>
                                        <form method="post" action="<?php echo base_url('panitia/tambah_rekening')?>" enctype="multipart/form-data">
                                   
                                        </div>
                                        
                                      
                                    </div>
                                    <br>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_bank" 
                                    name="nama_bank" placeholder="Nama Bank" style="text-transform:uppercase">
                                    <?=form_error('nama_bank','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_rek" 
                                    name="nama_rek" placeholder="Masukkan Nama Pemilik Rekening" style="text-transform:capitalize" >
                                    <?=form_error('nama_rek','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="no_rek" 
                                    name="no_rek" placeholder="Nomor Rekening" >
                                    <?=form_error('no_rek','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <input type="hidden" name="date_panitia"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                        
                                <button type="submit" class="btn btn-secondary">Simpan</button>
                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- modal add admin-->
                    


               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           