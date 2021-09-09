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
                                        <h4 class="m-0 font-weight-bold text-dark">Detail Pembayaran</h4>
                                       
                                        </div>
                                   
                                    </div>
                                    <br>
                                  
                                 </br>
                                 </br>
                                 <div class="tab-content">
                                     
                                        <div class="form-group col-xl-10 col-md-11 ">
                                             <div class="table-responsive">
                                                 <table class="table table-condensed" id="dataTable">
                                                     <?php 
                                                         $no = 1;
                                                         foreach ($daftarbermasalah as $adm) : ?>
                                                  
                                                         <tr>
                                                         <th width="200px">E-Mail Peserta</th>
                                                         <td> :</td>
                                                         <td> <?php echo $adm->uname_user?></td>
                                                         </tr>
                                                         <tr>
                                                         <th width="200px">Bank Tujuan</th>
                                                         <td> :</td>
                                                         <td> <?php echo $adm->rek_transfer?></td>
                                                         </tr>
                                                         <tr>
                                                         <th width="200px">Tanggal Transfer</th>
                                                         <td> :</td>
                                                         <td><?php echo $adm->tanggal_bayar?></td>
                                                         </tr>
                                                         <tr>
                                                         <th width="200px">Nominal Transfer</th>
                                                         <td> :</td>
                                                         <td> <?php echo $adm->jumlah_bayar?></td>
                                                         </tr>
                                                         <tr>
                                                         <th width="200px">Nama Rekening Pengirim</th>
                                                         <td> :</td>
                                                         <td> <?php echo $adm->nama_transfer?></td>
                                                         </tr>
                                                         <tr>
                                                         <th width="200px">Bukti Transfer</th>
                                                         <td> :</td>
                                                         <td>    <a href="<?php echo base_url().'assets/files/'.$adm->bukti_transfer?>" data-lightbox="image-1" target="_blank" data-title="My caption">
                                                                 <img src="<?php echo base_url().'assets/files/'.$adm->bukti_transfer?>" width="300" height=auto>
                                                         </a></td>
                                                        
                                                   
                                                
                                                         <?php endforeach; ?>
                                                         
                                                  
                                                 </table>
                                                 <div class="form-group col-xl-10 col-md-11">
                                                     <?php echo anchor('panitia/index_bayarbermasalah/','<button class="btn btn-sm btn-dark mb-5"></i> Back </button> ')?>    
                                                 </div>
                                                 

                                             </div>
                                         </div>
                                    
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

                <script>
                    lightbox.option({
                    'resizeDuration': 200,
                    'wrapAround': true
                    })
                </script>


                      

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           