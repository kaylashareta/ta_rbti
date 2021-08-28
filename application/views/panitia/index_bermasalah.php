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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Pembayaran Bermasalah</h4>
                                       
                                        </div>
                                   
                                    </div>
                                    <br>
                                    <ul class="nav nav-tabs">
                                     
                                     <li class="nav-item">
                                         <a class="nav-link active" href="#bermasalah" role="tab" data-toggle="tab">Pembayaran Bermasalah</a>
                                     </li>
                                     <li class=" nav-item">
                                         <a class="nav-link" href="#berhasil" role="tab" data-toggle="tab">Pembayaran Berhasil</a>
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
                                                         <th>E-Mail Peserta</th>
                                                         <th>Bank Transfer</th>
                                                         <th>Tanggal Transfer</th>
                                                         <th>Jumlah Transfer</th>
                                                         <th>Detail</th>
                                                         <th>Diterima</th>
                                                        </tr>
                                                     </thead>
                                                     <tbody>
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($daftarbermasalah as $adm) : ?>
                                                         <tr>
                                                             <td width="20px"><?php echo $no++ ?></td>
                                                             <td width="100px"><?php echo $adm->uname_user?></td>
                                                             <td width="400px"><?php echo $adm->rek_transfer?></td>
                                                             <td width="400px"><?php echo $adm->tanggal_bayar?></td>
                                                             <td width="400px"><?php echo $adm->jumlah_bayar?></td>
                                                             <td width="20px"><!--<img src="<?php echo base_url().'assets/files/'.$adm->bukti_transfer?>">--></td>
                                                             <td width="20px"><?php echo anchor('panitia/verifberhasil1/'.$adm->id_user,'<div class="badge badge-success">
                                                             <i class="fa fa-check"> Berhasil</i></div>') ?></td>
                                                           
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
                                                         <th>E-Mail Peserta</th>
                                                         <th>Bank Transfer</th>
                                                         <th>Tanggal Transfer</th>
                                                         <th>Jumlah Transfer</th>
                                                         <th>Nama Transfer</th>
                                                         <th>Bukti Transfer</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($daftarberhasil as $adm) : ?>
                                                         <tr>
                                                             <td width="20px"><?php echo $no++ ?></td>
                                                             <td width="100px"><?php echo $adm->uname_user?></td>
                                                             <td width="400px"><?php echo $adm->rek_transfer?></td>
                                                             <td width="400px"><?php echo $adm->tanggal_bayar?></td>
                                                             <td width="400px"><?php echo $adm->jumlah_bayar?></td>
                                                             <td width="400px"><?php echo $adm->nama_transfer?></td>
                                                             <td width="20px"><!--<img src="<?php echo base_url().'assets/files/'.$adm->bukti_transfer?>">--></td>
                                                       
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

           