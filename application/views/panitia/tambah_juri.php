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
                                        <h4 class="m-0 font-weight-bold text-dark">Tambah Juri</h4>
                                        <form method="post" action="<?php echo base_url('panitia/tambah_juri')?>" enctype="multipart/form-data">
        
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="uname_user"
                                        name="uname_user" placeholder="Email Address">
                                        <?=form_error('uname_user','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="pass_user" name="pass_user" placeholder="Password">
                                            <?=form_error('pass_user','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        id="pass2_user" name="pass2_user" placeholder="Repeat Password">
                                    </div>
                                </div>

                                <input type="hidden" name="date_user"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                                            
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_juri" 
                                    name="nama_juri" placeholder="Full Name" style="text-transform:capitalize" >
                                    <?=form_error('nama_juri','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="nik_juri" 
                                    name="nik_juri" placeholder="Masukkan NIK" >
                                    <?=form_error('nik_juri','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="nohp_juri" 
                                    name="nohp_juri" placeholder="Phone Number" >
                                    <?=form_error('nohp_juri','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <input type="hidden" name="date_juri"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                        
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

           