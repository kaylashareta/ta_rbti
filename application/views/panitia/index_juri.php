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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Juri</h4>
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <?php echo anchor('panitia/tambah_juri','<button class="btn btn-sm btn-secondary mb-3"> 
                                    <i class="fas fa-plus fa-sm"></i> Tambah Juri </button> ')?>

                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#belumverif" role="tab" data-toggle="tab">Juri Aktif</a>
                                        </li>
                                     
                                        <li class=" nav-item">
                                            <a class="nav-link" href="#berhasil" role="tab" data-toggle="tab">Juri Non Aktif</a>
                                        </li>
                                    </ul>
                                    </br>
                                    </br>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="belumverif">
                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed" id="dataTable">
                                                        <thead>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>USERNAME</th>
                                                            <th>NAMA</th>
                                                            <th>NO HP</th>
                                                            <th colspan="3">AKSI</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $no = 1;
                                                            foreach ($daftarjuri as $adm) : ?>
                                                            <tr>
                                                                <td width="20px"><?php echo $no++ ?></td>
                                                                <td width="100px"><?php echo $adm->uname_user?></td>
                                                                <td width="400px"><?php echo $adm->nama_juri?></td>
                                                                <td width="400px"><?php echo $adm->nohp_juri?></td>
                                                                <td  width="20px"><button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#detailjuri">
                                                                </button></td>
                                                                <td width="20px"><?php echo anchor('panitia/edit_juri/'.$adm->id_user,'<div class="btn btn=sm btn-secondary">
                                                                <i class="fa fa-edit"></i></div>') ?></td>
                                                                <td width="20px"><?php echo anchor('panitia/nonaktifjuri/'.$adm->id_user,'<div class="badge badge-danger">
                                                                <i class="fa fa-exclamation"> Non-Aktif </i></div>') ?></td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>

                                       
                                        <div role="tabpanel" class="tab-pane" id="berhasil">
                                            <div class="form-group">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed" id="dataTable2">
                                                        <thead>
                                                        <tr>
                                                            <th>NO</th>
                                                            <th>USERNAME</th>
                                                            <th>NAMA</th>
                                                            <th>NO HP</th>
                                                            <th colspan="2">AKSI</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $no = 1;
                                                            foreach ($daftarnonjuri as $adm) : ?>
                                                            <tr>
                                                                <td width="20px"><?php echo $no++ ?></td>
                                                                <td width="100px"><?php echo $adm->uname_user?></td>
                                                                <td width="400px"><?php echo $adm->nama_juri?></td>
                                                                <td width="400px"><?php echo $adm->nohp_juri?></td>
                                                                <td  width="20px"><button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#detailjuri">
                                                                </button></td>
                                                                <td width="20px"><?php echo anchor('panitia/aktifjuri/'.$adm->id_user,'<div class="badge badge-success">
                                                                <i class="fa fa-check"> Aktivasi </i></div>') ?></td>
                                                            </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                  
                                    </div>
                                </div>
                            </div>
                    </div>

                      

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           