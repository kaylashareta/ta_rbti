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
                                        <h4 class="m-0 font-weight-bold text-dark">Edit Admin</h4>
                                        <form method="post" action="<?php echo base_url('administrator/tambah_admin')?>" enctype="multipart/form-data">
        
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <?php foreach ($daftaradmin as $adm) : ?>
                                    <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="uname_user"
                                        name="uname_user" placeholder="Email Address" value="<?= $adm->uname_user ?>" disabled>
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
                                            <input type="text" class="form-control form-control-user" id="nama_admin" 
                                            name="nama_admin" placeholder="Full Name" >
                                            <?=form_error('nama_admin','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" id="nip_admin" 
                                            name="nip_admin" placeholder="Masukkan NIP" >
                                            <?=form_error('nip_admin','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control form-control-user" id="nohp_admin" 
                                            name="nohp_admin" placeholder="Phone Number" >
                                            <?=form_error('nohp_admin','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <input type="hidden" name="date_admin"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                                    <?php endforeach; ?>
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

           