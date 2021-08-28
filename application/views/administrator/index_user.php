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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar User</h4>
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                    
                                    <div class="col mr-12 col-md-12">
                                        <table class="table table-bordered table-stripped table-hover">
                                            <tr>
                                                <th>NO</th>
                                                <th>USERNAME</th>
                                                <th>PASSWORD</th>
                                                <th>HAK ASKES</th>
                                            </tr>
                                            <?php 
                                                $no = 1;
                                                foreach ($daftaruser as $adm) : ?>
                                                <tr>
                                                    <td width="20px"><?php echo $no++ ?></td>
                                                    <td><?php echo $adm->uname_user?></td>
                                                    <td><?php echo $adm->pass_user?></td>
                                                    <?php if($adm->hak_akses=='1'){?> <td>Admin</td>
                                                    <?php }else if ($adm->hak_akses=='2'){?> <td>Panitia</td>
                                                    <?php }else if ($adm->hak_akses=='3'){?> <td>Juri</td>
                                                    <?php }else {?><td>Peserta</td>
                                                    <?php } ?>
                                                
                                                </tr>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>

                      

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           