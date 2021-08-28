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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Admin</h4>
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                   
                                    <?php echo anchor('administrator/tambah_admin','<button class="btn btn-sm btn-secondary mb-3"> 
                                    <i class="fas fa-plus fa-sm"></i> Tambah Admin </button> ')?>
                                    <div class="col mr-12 col-md-12">
                                        <table class="table table-bordered table-stripped table-hover">
                                            <tr>
                                                <th>NO</th>
                                                <th>USERNAME</th>
                                                <th>NAMA</th>
                                                <th colspan="2">AKSI</th>
                                            </tr>
                                            <?php 
                                                $no = 1;
                                                foreach ($daftaradmin as $adm) : ?>
                                                <tr>
                                                    <td width="20px"><?php echo $no++ ?></td>
                                                    <td width="100px"><?php echo $adm->uname_user?></td>
                                                    <td width="400px"><?php echo $adm->nama_admin?></td>
                                                    <td  width="20px"><button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#detailadmin">
                                                    </button></td>
                                                    <td width="20px"><?php echo anchor('administrator/edit_admin/'.$adm->id_user,'<div class="btn btn=sm btn-secondary">
                                                    <i class="fa fa-edit"></i></div>') ?></td>
                                                </tr>

                                               
                                            <?php endforeach; ?>
                                             <!-- Modal -->
                                             <div class="modal fade" id="detailadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Detail Admin</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="form-group">
                                                        <label><h6>NIP Admin : </h6></label>
                                                            <input type="number" class="form-control form-control-user" id="nip_admin" 
                                                            name="nip_admin" placeholder="Masukkan NIP" disabled>
                                                            <?=form_error('nip_admin','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label><h6>No. HP Admin : </h6></label>
                                                            <input type="number" class="form-control form-control-user" id="nohp_admin" 
                                                            name="nohp_admin" placeholder="Phone Number"  value="<?= @$daftaradmin['nohp_admin']; ?>"disabled >
                                                            <?=form_error('nohp_admin','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label><h6>Tanggal Input : </h6></label>
                                                            <input type="date" class="form-control form-control-user" id="date_admin" 
                                                            name="date_admin" placeholder="Phone Number" value="<?= $adm->date_admin ?>"disabled >
                                                            <?=form_error('date_admin','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label><h6>Input by : </h6></label>
                                                            <input type="text" class="form-control form-control-user" id="added_by" 
                                                            name="added_by" placeholder="Phone Number" value="<?= $adm->added_by ?>"disabled >
                                                            <?=form_error('added_by','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <!-- modal add admin-->
                    

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           