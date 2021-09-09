                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <h1 class="h3 mb-4 text-gray-800">Dashboard Panitia</h1>
                    
                    <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">
                                               Jumlah Panitia</div>
                                               <div class= "h5 mb-0 font-weight-bold text-gray-800"><?php echo $panitia->num_rows(); ?></div>
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
                                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Juri</div>
                                                <div class= "h5 mb-0 font-weight-bold text-gray-800"><?php echo $juri->num_rows(); ?></div>
                                            </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                           <!-- Pending Requests Card Example -->
                           <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-warning text-uppercase mb-1">
                                                Provinsi Peserta </div>
                                                <canvas id="myChart3"></canvas>
                                                <?php
                                                //Inisialisasi nilai variabel awal
                                                $prov= "";
                                                $jumlah=null;
                                                foreach ($provinsi as $item)
                                                {
                                                    $pem=$item->prov;
                                                    $prov .= "'$pem'". ", ";
                                                    $jum=$item->total;
                                                    $jumlah .= "$jum". ", ";
                                                }
                                                ?>
                                                <script>
                                                    var ctx = document.getElementById('myChart3').getContext('2d');
                                                    var chart = new Chart(ctx, {
                                                        // The type of chart we want to create
                                                        type: 'bar',
                                                        // The data for our dataset
                                                        data: {
                                                            labels: [<?php echo $prov; ?>],
                                                            datasets: [{
                                                                label:'Data Provinsi Peserta ',
                                                                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                                                                borderColor: ['rgb(255, 99, 132)'],
                                                                data: [<?php echo $jumlah; ?>]
                                                            }]
                                                        },
                                                        // Configuration options go here
                                                        options: {
                                                            scales: {
                                                                yAxes: [{
                                                                    ticks: {
                                                                        beginAtZero:true
                                                                    }
                                                                }]
                                                            }
                                                        }
                                                    });
                                                </script>

                                            </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                </div>
                                                    <div class="col">
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                       
                                    </div>
                                </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-info text-uppercase mb-1">
                                                Data Pembayaran
                                                <canvas id="myChart"></canvas>
                                                <?php
                                                //Inisialisasi nilai variabel awal
                                                $status_bayar= "";
                                                $jumlah=null;
                                                foreach ($hasil as $item)
                                                {
                                                    $pem=$item->status_bayar;
                                                    $status_bayar .= "'$pem'". ", ";
                                                    $jum=$item->total;
                                                    $jumlah .= "$jum". ", ";
                                                }
                                                ?>
                                            <script>
                                                var ctx = document.getElementById('myChart').getContext('2d');
                                                var chart = new Chart(ctx, {
                                                    // The type of chart we want to create
                                                     type: 'pie',
                                                    // The data for our dataset
                                                    data: {
                                                        labels: [<?php echo $status_bayar; ?>],
                                                        datasets: [{
                                                            label:'Data Pembayaran Peserta ',
                                                            backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                                                            borderColor: ['rgb(255, 99, 132)'],
                                                            data: [<?php echo $jumlah; ?>]
                                                        }]
                                                    },
                                                    // Configuration options go here
                                                    options: {
                                                        scales: {
                                                            yAxes: [{
                                                                ticks: {
                                                                    beginAtZero:true
                                                                }
                                                            }]
                                                        }
                                                    }
                                                });
                                            </script>

                                        </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                               </div>
                                                <div class="col">
                                               </div>
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-success text-uppercase mb-1">
                                                Proposal Peserta </div>
                                                <canvas id="myChart2"></canvas>
                                                <?php
                                                //Inisialisasi nilai variabel awal
                                                $finalisasi= "";
                                                $jumlah=null;
                                                foreach ($hasil2 as $item)
                                                {
                                                    $pem=$item->finalisasi;
                                                    $finalisasi .= "'$pem'". ", ";
                                                    $jum=$item->total;
                                                    $jumlah .= "$jum". ", ";
                                                }
                                                ?>
                                                <script>
                                                    var ctx = document.getElementById('myChart2').getContext('2d');
                                                    var chart = new Chart(ctx, {
                                                        // The type of chart we want to create
                                                        type: 'pie',
                                                        // The data for our dataset
                                                        data: {
                                                            labels: [<?php echo $finalisasi; ?>],
                                                            datasets: [{
                                                                label:'Data Proposal Peserta ',
                                                                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                                                                borderColor: ['rgb(255, 99, 132)'],
                                                                data: [<?php echo $jumlah; ?>]
                                                            }]
                                                        },
                                                        // Configuration options go here
                                                        options: {
                                                            scales: {
                                                                yAxes: [{
                                                                    ticks: {
                                                                        beginAtZero:true
                                                                    }
                                                                }]
                                                            }
                                                        }
                                                    });
                                                </script>

                                            </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                </div>
                                                    <div class="col">
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                       
                                    </div>
                                </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-dark shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xl font-weight-bold text-dark text-uppercase mb-1">
                                                Tema Proposal Peserta </div>
                                                <canvas id="myChart4"></canvas>
                                                <?php
                                                //Inisialisasi nilai variabel awal
                                                $tema_proposal= "";
                                                $jumlah=null;
                                                foreach ($jumtema as $item)
                                                {
                                                    $pem=$item->tema_proposal;
                                                    $tema_proposal .= "'$pem'". ", ";
                                                    $jum=$item->total;
                                                    $jumlah .= "$jum". ", ";
                                                }
                                                ?>
                                                <script>
                                                    var ctx = document.getElementById('myChart4').getContext('2d');
                                                    var chart = new Chart(ctx, {
                                                        // The type of chart we want to create
                                                        type: 'bar',
                                                        // The data for our dataset
                                                        data: {
                                                            labels: [<?php echo $tema_proposal; ?>],
                                                            datasets: [{
                                                                label:'Data Proposal Peserta ',
                                                                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
                                                                borderColor: ['rgb(255, 99, 132)'],
                                                                data: [<?php echo $jumlah; ?>]
                                                            }]
                                                        },
                                                        // Configuration options go here
                                                        options: {
                                                            scales: {
                                                                yAxes: [{
                                                                    ticks: {
                                                                        beginAtZero:true
                                                                    }
                                                                }]
                                                            }
                                                        }
                                                    });
                                                </script>

                                            </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                </div>
                                                    <div class="col">
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

           