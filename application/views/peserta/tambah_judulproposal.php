                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?php if (@$getjoin['status_bayar'] == '1') { ?>
                    <?= $this->session->flashdata('message');?>
               
               <div class="row">
                   <!-- Earnings (Monthly) Card Example -->
                   <div class="col-xl-12 col-md-12 mb-4">
                       <div class="card border-left-secondary shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <h4 class="list-group-item list-group-item-dark">Halaman Input Judul Proposal </h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/tambah_judulproposal')?>" enctype="multipart/form-data">
                                   <div class="form-group col-sm-11">
                                   <label><h6>Judul Proposal Start-Up : </h6></label>
                                   <br>
                                   <input type="text" class="form-control form-control-user" id="judul_proposal" 
                                       name="judul_proposal" placeholder="Masukkan Judul Proposal Start-Up Anda" style="text-transform:capitalize" >
                                       <?=form_error('judul_proposal','<small class="text-danger pl-3">','</small>');?>
                                   </div>

                                   <div class="form-group col-sm-11">
                                   <label><h6>Tema Proposal : </h6></label>
                                       <input type="text" class="form-control form-control-user" id="tema_proposal" 
                                       name="tema_proposal" placeholder="tema proposal" style="text-transform:capitalize"  >
                                       <?=form_error('tema_proposal','<small class="text-danger pl-3">','</small>');?>
                                   </div>
                                 
                               <input type="hidden" name="date_added"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                               
                               <div class="form-group col-sm-11">
                               <button type="submit" class="btn btn-dark">Simpan</button>
                           </div>
                       </div>
                   </div>
              
               </div>
               </div>

           
             
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