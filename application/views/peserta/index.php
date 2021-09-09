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
                                               <?php if (@$getjoin['status_bayar'] == 'Berhasil') { ?>
                                                <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                                    Pembayaran Terverifikasi
                                               </div>
                                                <?php } else if (@$getjoin['status_bayar'] == 'Bermasalah') { ?>
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

                    <div class="col-xl- col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Status Finalisasi </div>
                                               <?php if (@$getjudul['finalisasi'] == 'Finalisasi') { ?>
                                                <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                                    Peserta Sudah Finalisasi
                                               </div>
                                              
                                                <?php } else { ?>
                                                    <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                    Peserta Belum Finalisasi
                                               </div><?php } ?>
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Progress Propsosal</div>
                                                    <div class="stepper-wrapper">
                                                        <div class="stepper-item" id="step1">
                                                            <div class="step-counter">1</div>
                                                            <div class="step-name">Profil Perusahaan</div>
                                                        </div>
                                                        <div class="stepper-item" id="step2">
                                                            <div class="step-counter">2</div>
                                                            <div class="step-name">Biodata Tim</div>
                                                        </div>
                                                        <div class="stepper-item" id="step3">
                                                            <div class="step-counter">3</div>
                                                            <div class="step-name">Data Aplikasi</div>
                                                        </div>
                                                        <div class="stepper-item" id="step4">
                                                            <div class="step-counter">4</div>
                                                            <div class="step-name">Target Aplikasi</div>
                                                        </div>
                                                        <div class="stepper-item" id="step5">
                                                            <div class="step-counter">5</div>
                                                            <div class="step-name">Bisnis Plan</div>
                                                        </div>
                                                        <div class="stepper-item" id="step6">
                                                            <div class="step-counter">6</div>
                                                            <div class="step-name">Presentasi Singkat</div>
                                                        </div>
                                                    </div>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
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
<script>
    let step1 = <?= $step1 ?>;
    let step2 = <?= $step2 ?>;
    let step3 = <?= $step3 ?>;
    let step4 = <?= $step4 ?>;
    let step5 = <?= $step5 ?>;
    let step6 = <?= $step6 ?>;
    
    console.log(step1);
    if(step1 == 1){
        document.getElementById("step1").classList.add("completed");
    }
    if(step2 == 1){
        document.getElementById("step2").classList.add("completed");
    }
    if(step3 == 1){
        document.getElementById("step3").classList.add("completed");
    }
    if(step4 == 1){
        document.getElementById("step4").classList.add("completed");
    }
    if(step5 == 1){
        document.getElementById("step5").classList.add("completed");
    }
    if(step6 == 1){
        document.getElementById("step6").classList.add("completed");
    }
</script>