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
                                        <h4 class="m-0 font-weight-bold text-dark">Klasemen Nilai</h4>
                                       
                                        </div>
                                   
                                    </div>
                                    <br>
                                    <ul class="nav nav-tabs">
                                     
                                     <li class="nav-item">
                                         <a class="nav-link active" href="#bermasalah" role="tab" data-toggle="tab">Penilaian Saya</a>
                                     </li>
                                     <li class=" nav-item">
                                         <a class="nav-link" href="#berhasil" role="tab" data-toggle="tab">Total Penilaian Semua Juri</a>
                                     </li>
                                 </ul>
                                 </br>
                                 </br>
                                 <div class="tab-content">
                                     
                                     <div role="tabpanel" class="tab-pane active" id="bermasalah">
                                         <div class="form-group">
                                             <div class="table-responsive">
                                                 <table class="table table-condensed" id="dataTable">
                                                     <thead>
                                                         <tr>
                                                         <th>NO</th>
                                                         <th>Judul Proposal</th>
                                                         <th>Tema Proposal</th>
                                                         <?php
                                                            foreach ($kriteria as  $value) {
                                                                echo '<th>'.$value->kriteria.'</th>';
                                                            }
                                                         ?>
                                                         <th>Jumlah Nilai</th>
                                                     </thead>
                                                     <tbody>
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($satujuri as $adm) : ?>
                                                         <tr>
                                                             <td width="20px"><?php echo $no++ ?></td>
                                                             <td width="400px"><?php echo $adm->judul_proposal?></td>
                                                             <td width="150px"><?php echo $adm->tema_proposal?></td>
                                                             <td><center><?php echo $adm->Kre ?></center></td>
                                                             <td><center><?php echo $adm->Ori ?></center></td>
                                                             <td><center><?php echo $adm->nilai ?></center></td>
                                                            
                                                        
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
                                                         <th>Judul Proposal</th>
                                                         <th>Tema Proposal</th>
                                                         <th>Jumlah Nilai</th>
                                                        
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($allnilai as $adm) : ?>
                                                         <tr>
                                                             <td width="20px"><?php echo $no++ ?></td>
                                                             <td width="400px"><?php echo $adm->judul_proposal?></td>
                                                             <td width="150px"><?php echo $adm->tema_proposal?></td>
                                                             <td><center><?php echo $adm->nilai ?></center></td>
                                                            
                                                        
                                                         </tr>
                                                         <?php endforeach; ?>
                                                     </tbody>
                                                     </tbody>
                                                 </table>

                                             </div>
                                         </div>
                                     </div>
                           

                     
                 </div>

                   

                    <script>
                    $(document).ready(function() {
                        $('#dataTable3').DataTable();
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        $('#dataTable2').DataTable();
                    });
                </script>

                      

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           