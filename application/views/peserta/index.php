                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <h1 class="h3 mb-4 text-gray-800">Dashboard Peserta</h1>
                    
                    <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Status Pembayaran </div>
                                               <?php if (@$getjoin['status_bayar'] == '1') { ?>
                                                <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                                    Pembayaran Terverifikasi
                                               </div>
                                                <?php } else if (@$getjoin['status_bayar'] == '2') { ?>
                                                <div class="text-xl font-weight-bold text-danger text-uppercase mb-1">
                                                    Pembayaran Bermasalah
                                               </div>
                                                <?php } else { ?>
                                                    <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                    Menunggu Pembayaran / Verifikasi
                                               </div><?php } ?>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Progress Propsosal</div>
                                       
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
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

           