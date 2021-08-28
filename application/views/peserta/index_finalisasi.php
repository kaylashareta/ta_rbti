                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (@$getjoin['status_bayar'] == '1') { ?>
                    

                <?php if (@$getjudul['finalisasi'] == '1') { ?>
                    <div class="p-3 mb-2 bg-success text-white">
                         Peserta Sudah Finalisasi Proposal 
                          <span aria-hidden="true"></span>
                    </div>
                    <?= $this->session->flashdata('message');?>

                    <div class="row">
                   <!-- Earnings (Monthly) Card Example -->
                   <div class="col-xl-12 col-md-12 mb-4">
                       <div class="card border-left-secondary shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <h4 class="list-group-item list-group-item-dark">HALAMAN FINALISASI</h4>
                                  
                                   </div>
                                
                               
                               </div> 
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/finalisasi/')?>" enctype="multipart/form-data">
                                      
                                            <div class="form-group col-sm-11">
                                                <h6 class="list-group-item list-group-item-danger">Dengan menekan tombol finalisasi, maka anda tidak dapat menambahkan atau mengedit
                                                     semua data yang terdapat pada bagian proposal. Pastikan semua menu serta inputan yang terdapat pada 
                                                    proposal sudah terisi dan benar. 
                                                </h6>
                                               </div>

                                               <div class="form-group col-sm-11">
                                               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" disabled>
                                               Finalisasi Proposal
                                                </button>
                                               </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin untuk finalisasi proposal?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Finalisasi</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                               
                       </div>
                   </div>
               </div>


           
                    <?php } else { ?>
                    <!-- Page Heading -->
                    <div class="p-3 mb-2 bg-warning text-white">
                          Peserta Belum Finalisasi Proposal 
                          <span aria-hidden="true"></span>
                    </div>
                    <?= $this->session->flashdata('message');?>
                    <div class="row">
                   <!-- Earnings (Monthly) Card Example -->
                   <div class="col-xl-12 col-md-12 mb-4">
                       <div class="card border-left-secondary shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <h4 class="list-group-item list-group-item-dark">HALAMAN FINALISASI</h4>
                                  
                                   </div>
                                
                               
                               </div> 
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/finalisasi/')?>" enctype="multipart/form-data">
                                      
                                            <div class="form-group col-sm-11">
                                                <h6 class="list-group-item list-group-item-danger">Dengan menekan tombol finalisasi, maka anda tidak dapat menambahkan atau mengedit
                                                     semua data yang terdapat pada bagian proposal. Pastikan semua menu serta inputan yang terdapat pada 
                                                    proposal sudah terisi dan benar. 
                                                </h6>
                                               </div>

                                               <div class="form-group col-sm-11">
                                               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                                               Finalisasi Proposal
                                                </button>
                                               </div>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah anda yakin untuk finalisasi proposal?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-primary">Finalisasi</button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>

                               
                       </div>
                   </div>
               </div>

                 
                <?php } ?>
               
               
             
                <?php } else { ?>
                    <!-- Page Heading -->
                    <div class="p-3 mb-2 bg-danger text-white">
                          Pembayaran belum diverifikasi, silakan melakukan pembayaran atau menunggu pembayaran di verifikasi 
                          <span aria-hidden="true"></span>
                    </div>
                 
                <?php } ?>
            
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->