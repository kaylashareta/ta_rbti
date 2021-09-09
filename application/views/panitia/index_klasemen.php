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
                                                             <td width="150px"><center><?php echo $adm->nilai ?></center></td>
                                                            
                                                        
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

           