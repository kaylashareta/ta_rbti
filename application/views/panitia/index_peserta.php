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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Peserta</h4>
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="#belumverif" role="tab" data-toggle="tab">Peserta Aktif</a>
                                        </li>
                                     
                                        <li class=" nav-item">
                                            <a class="nav-link" href="#berhasil" role="tab" data-toggle="tab">Peserta Non Aktif</a>
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
                                                            <th>INSTITUSI</th>
                                                            <th>NO HP</th>
                                                            <th colspan="3">AKSI</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $no = 1;
                                                            foreach ($daftarpeserta as $adm) : ?>
                                                            <tr>
                                                                <td width="20px"><?php echo $no++ ?></td>
                                                                <td width="100px"><?php echo $adm->uname_user?></td>
                                                                <td width="400px"><?php echo $adm->nama_peserta?></td>
                                                                <td><?php echo $adm->institusi_peserta?></td>
                                                                <td><?php echo $adm->nohp_peserta?></td>
                                                                <td  width="20px"><button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#detailpeserta" <?= $adm->id_user?>>
                                                                </button></td>
                                                                <td width="20px"><?php echo anchor('panitia/nonaktifpeserta/'.$adm->id_user,'<div class="badge badge-danger" data-toggle="tooltip" data-placement="top" title="NON-AKTIFKAN PESERTA">
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
                                                            <th>INSTITUSI</th>
                                                            <th>NO HP</th>
                                                            <th colspan="2">AKSI</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php 
                                                            $no = 1;
                                                            foreach ($daftarnonpeserta as $adm) : ?>
                                                            <tr>
                                                                <td width="20px"><?php echo $no++ ?></td>
                                                                <td width="100px"><?php echo $adm->uname_user?></td>
                                                                <td width="400px"><?php echo $adm->nama_peserta?></td>
                                                                <td><?php echo $adm->institusi_peserta?></td>
                                                                <td><?php echo $adm->nohp_peserta?></td>
                                                                <td  width="20px"><button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#detailpeserta" <?= $adm->id_user?>>
                                                                </button></td>
                                                                <td width="20px"><?php echo anchor('panitia/aktifpeserta/'.$adm->id_user,'<div class="badge badge-success" data-toggle="tooltip" data-placement="top" title="AKTIFKAN PESERTA" > 
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

           