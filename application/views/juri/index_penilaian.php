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
                                        <h4 class="m-0 font-weight-bold text-dark">Halaman Penilaian Proposal</h4>
                                       
                                        </div>
                                   
                                    </div>
                                    <br>
                              
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
                                                         <th>E-Mail Peserta</th>
                                                         <th>Judul Proposal</th>
                                                         <th>Tema Proposal</th>
                                                         <th>Tanggal Finalisasi</th>
                                                         <th>Keterangan</th>
                                                         <th>Nilai</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody> 
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($daftarfinalisasi as $adm) : ?>
                                                         <tr>
                                                   
                                                             <td width="20px"><?php echo $no++ ?></td>
                                                             <td width="100px"><?php echo $adm->uname_user?></td>
                                                             <td width="700px"><?php echo $adm->judul_proposal?></td>
                                                             <td width="400px"><?php echo $adm->tema_proposal?></td>
                                                             <td width="300px"><?php echo $adm->date_finalisasi?></td>
                                                             <td width="20px">
                                                                <?php $data2 = $this->db->query("SELECT * FROM tb_penilaian JOIN tb_user ON tb_penilaian.id_juri=tb_user.id_user WHERE tb_penilaian.id_proposal=$adm->id_proposal AND tb_penilaian.id_juri=$id_user ");/**/ 
                                                                $hsl=$data2->result();
                                                                
                                                                if(count($hsl)==0){?>
                                                                    <spann class="badge badge-danger fas fa-times"> Belum Dinilai </spann> 
                                                                <?php } else{?>
                                                                    <spann class="badge badge-success fa fa-check"> Sudah Dinilai </spann> 
                                                                    <?php }?>
                                                             </td>
                                                              <td width="20px"><?php echo anchor('juri/index_sudahnilai/'.$adm->id_proposal,'<div class="badge badge-primary">
                                                             <i class="fa fa-eye"> Nilai Proposal </i></div>') ?></td> 
                                                           
                                                         </tr>
                                                         <?php endforeach; ?>
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

           