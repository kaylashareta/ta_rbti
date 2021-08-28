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
                                        <h4 class="m-0 font-weight-bold text-dark">Tambah Kabupaten / Kota</h4>
                                        <form method="post" action="<?php echo base_url('administrator/tambah_kota')?>" enctype="multipart/form-data">
        
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                        <label><h5>Provinsi :</h5></label>
                                        <br>
                                        <select class="theSelect" id="id_prov" name="id_prov">
                                        <option disabled selected>---Pilih Provinsi---</option>
                                        <?php foreach ($prov as $row) : ?>
                                        <option value="<?= $row['id_prov'];?>"><?= $row['prov'];?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                        
                                <div class="form-group">
                                <label><h5>Kabupaten / Kota :</h5></label>
                                    <input type="text" class="form-control form-control-user" id="kota" 
                                    name="kota" placeholder="Kabupaten / Kota" style="text-transform:capitalize" >
                                    <?=form_error('kota','<small class="text-danger pl-3">','</small>');?>
                                </div>
                              
                                <button type="submit" class="btn btn-secondary">Simpan</button>
                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- modal add admin-->
                    


               
                <!-- /.container-fluid -->

                <script>
                    $(".theSelect").select2();
                </script>

            </div>
            <!-- End of Main Content -->

           