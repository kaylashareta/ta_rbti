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
                                        <h4 class="m-0 font-weight-bold text-dark">Daftar Peserta</h4>
                                       
                                        </div>
                                        
                                        <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <br>
                                   
                                    <div class="col mr-12 col-md-12">
                                        <table class="table table-bordered table-stripped table-hover">
                                            <tr>
                                                <th>NO</th>
                                                <th>ID DAFTAR</th>
                                                <th>NAMA LENGKAP</th>
                                                <th>INSTITUSI</th>
                                                <th>AKSI</th>
                                            </tr>
                                            <?php 
                                                $no = 1;
                                                foreach ($daftarpeserta as $adm) : ?>
                                                <tr>
                                                    <td width="20px"><?php echo $no++ ?></td>
                                                    <td width="100px"><?php echo $adm->id_daftar?></td>
                                                    <td width="400px"><?php echo $adm->nama_peserta?></td>
                                                    <td><?php echo $adm->institusi_peserta?></td>
                                                    <td  width="20px"><button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#detailpeserta" <?= $adm->id_user?>>
                                                    </button></td>
                                                </tr>

                                                <!-- Modal -->
                                                <div class="modal fade" id="detailpeserta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Detail Peserta</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <div class="form-group">
                                                        <label><h6>NIK Peserta : </h6></label>
                                                            <input type="number" class="form-control form-control-user" id="nik_peserta" 
                                                            name="nik_peserta" placeholder="Masukkan nik" value="<?= $adm->nik_peserta ?>"disabled>
                                                            <?=form_error('nik_peserta','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label><h6>No. HP Peserta : </h6></label>
                                                            <input type="number" class="form-control form-control-user" id="nohp_peserta" 
                                                            name="nohp_peserta" placeholder="Phone Number" value="<?= $adm->nohp_peserta ?>"disabled >
                                                            <?=form_error('nohp_peserta','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        <div class="form-group">
                                                        <label><h6>Alamat Peserta </h6></label>
                                                            <input type="text" class="form-control form-control-user" id="alamat_peserta" 
                                                            name="alamat_peserta" placeholder="Phone Number" value="<?= $adm->alamat_peserta ?>"disabled >
                                                            <?=form_error('alamat_peserta','<small class="text-danger pl-3">','</small>');?>
                                                        </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                            <?php endforeach; ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>

                      

               
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           