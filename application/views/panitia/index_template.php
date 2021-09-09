                <!-- Begin Page Content -->
                <div class="container-fluid">
                <?= $this->session->flashdata('message');?>

                    <!-- Page Heading -->
                    
                    <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-12 col-md-12 mb-4">
                            <div class="card border-left-secondary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Template Sertifikat</h4>
                                       
                                        </div>
                                        
                                        
                                    </div>
                                    <br>
                                    <?php echo anchor('panitia/tambah_template','<button class="btn btn-sm btn-secondary mb-3"> 
                                    <i class="fas fa-plus fa-sm"></i> Tambah Template </button> ')?>

                                    <div class="col mr-12 col-md-12">
                                        <table class="table table-bordered table-stripped table-hover">
                                            <tr>
                                                
                                                <th style="text-align:center">NO</th>
                                                <th style="text-align:center">TEMPLATE</th>
                                                <th style="text-align:center">KETERANGAN</th>
                                                <th colspan='2' style="text-align:center">AKSI</th>
                                                
                                            </tr>
                                            <?php 
                                                $no = 1;
                                                foreach ($template as $adm) : ?>
                                            <tr>
                                                <td style="text-align:center" width="20px"><?php echo $no++ ?></td>
                                                <td width="500px">   
                                                    <center><a href="<?php echo base_url().'assets/files/'.$adm->template?>" data-lightbox="image-1" target="_blank" data-title="My caption">
                                                    <img src="<?php echo base_url().'assets/files/'.$adm->template?>" width="200" height=auto></td></center>
                                                <td style="text-align:center" width="400px"><?php echo $adm->keterangan?></td>
                                                <td width="20px"><?php echo anchor('panitia/update_template/'.$adm->id_template,'<div class="btn btn=sm btn-secondary">
                                                <i class="fa fa-edit"></i></div>') ?></td>
                                                <td width="20px"><?php echo anchor('panitia/delete_template/'.$adm->id_template,'<div class="btn btn=sm btn-danger">
                                                <i class="fa fa-trash"></i></div>') ?></td>
                                            </tr>
                                                <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>

                      

                                  

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           