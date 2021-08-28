
  
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>D. PAPER PITCHING</h2>
                </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo ($paperpitching)?'': anchor('mahasiswa/paperpitching/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <?php $no=1; foreach($paperpitching as $pp) :  ?>
                  
                  <!-- latar belakang -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.1 LATAR BELAKANG</h4></label>
                        <textarea id="content11" type="text" rows="7" name="latar_belakang_pp" class="form-control" disabled> <?php echo $pp->latar_belakang_pp ?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_latarb_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_latarb_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_latarb_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlatarbppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catlatarbppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlatarbppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                         <!-- permasalahan yang ditemui-->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.2 PERMASALAHAN YANG INGIN DIATASI</h4></label>
                        <textarea id="content12" type="text" rows="7" name="permasalahan_pp" class="form-control" disabled> <?php echo $pp->permasalahan_pp ?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_permas_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_permas_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_permas_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catpermasppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catpermasppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catpermasppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                    <!-- SOLUSI YANG DITAWARKAN-->
                    <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.3 SOLUSI YANG DITAWARKAN</h4></label>
                        <textarea id="content13" type="text" rows="7" name="solusi_pp" class="form-control" disabled> <?php echo $pp->solusi_pp ?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_solusi_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_solusi_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_solusi_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catsolusippModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catsolusippModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catsolusippModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>
                  
                  
                   <!-- SOLUSI YANG DITAWARKAN-->
                   <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.4 PROGRESS USAHA</h4></label>
                        <textarea id="content14" type="text" rows="7" name="progres_pp" class="form-control" disabled> <?php echo $pp->progres_pp ?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_progres_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_progres_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_progres_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catprogresppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catprogresppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catprogresppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>
                  
                   <!-- KOMPETITOR USAHA-->
                   <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.5 KOMPETITOR USAHA</h4></label>
                        <textarea id="content15" type="text" rows="7" name="kompetitor_pp" class="form-control" disabled> <?php echo $pp->kompetitor_pp?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_komp_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_komp_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_komp_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkompppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catkompppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkompppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                  <!-- USAHA SERUPA-->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.6 USAHA SERUPA</h4></label>
                        <textarea id="content16" type="text" rows="7" name="kompetitor2_pp" class="form-control" disabled> <?php echo $pp->kompetitor2_pp?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_komp2_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_komp2_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_komp2_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkomp2ppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catkomp2ppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkomp2ppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                  <!-- TARGET PENGGUNA-->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.7 TARGET PENGGUNA</h4></label>
                        <textarea id="content17" type="text" rows="7" name="target_pp" class="form-control" disabled> <?php echo $pp->target_pp?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_target_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_target_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_target_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#cattargetppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#cattargetppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#cattargetppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                  
                  <!-- DATA YANG DIGUNAKAN-->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.8 DATA YANG DIGUNAKAN</h4></label>
                        <textarea id="content18" type="text" rows="7" name="data_pp" class="form-control" disabled> <?php echo $pp->data_pp?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_data_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_data_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_data_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catdatappModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catdatappModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catdatappModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                  
                  
                  <!-- PROSES BISNIS-->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.9 PROSES BISNIS</h4></label>
                        <textarea id="content19" type="text" rows="7" name="proses_bisnis_pp" class="form-control" disabled> <?php echo $pp->proses_bisnis_pp?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_pb_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_pb_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_pb_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catpbppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catpbppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catpbppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                  <!-- PROSES BISNIS -->
                      <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>4.10 PROSES BISNIS</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#pb2ppModal">
                         </div>
                       <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_pb2_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_pb2_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_pb2_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catpb2ppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catpb2ppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catpb2ppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                  <!-- TAHAPAN MEWUJUDKAN SOLUSI-->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.11 TAHAPAN MEWUJUDKAN SOLUSI</h4></label>
                        <textarea id="content20" type="text" rows="7" name="tahapan_pp" class="form-control" disabled> <?php echo $pp->tahapan_pp?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_tahap_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_tahap_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_tahap_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#cattahapanppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#cattahapppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#cattahapppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                  <!-- KELEBIHAN DARI SOLUSI ANDA -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>4.12 KELEBIHAN DARI SOLUSI ANDA</h4></label>
                        <textarea id="content21" type="text" rows="7" name="kelebihan_pp" class="form-control" disabled> <?php echo $pp->kelebihan_pp?></textarea>
                        </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($pp->status_keleb_pp == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($pp->status_keleb_pp == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($pp->status_keleb_pp == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/paperpitching/update/'.$pp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkelebihanppModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catkelebppModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkelebppModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                         <!-- Modal cat latarb pp -->
                         <div class="modal fade" id="catlatarbppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catlatarb_pp" class="form-control" disabled> <?php echo $pp->catlatarb_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat permas pp -->
                        <div class="modal fade" id="catpermasppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catpermas_pp" class="form-control" disabled> <?php echo $pp->catpermas_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat solusi pp -->
                        <div class="modal fade" id="catsolusippModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catsolusi_pp" class="form-control" disabled> <?php echo $pp->catsolusi_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat progres pp -->
                        <div class="modal fade" id="catprogresppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catprogres_pp" class="form-control" disabled> <?php echo $pp->catprogres_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat komp pp -->
                        <div class="modal fade" id="catkompppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catkomp_pp" class="form-control" disabled> <?php echo $pp->catkomp_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat komp2 pp -->
                        <div class="modal fade" id="catkomp2ppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catkomp2_pp" class="form-control" disabled> <?php echo $pp->catkomp2_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat target pp -->
                        <div class="modal fade" id="cattargetppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="cattarget_pp" class="form-control" disabled> <?php echo $pp->cattarget_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat data pp -->
                        <div class="modal fade" id="catdatappModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catdata_pp" class="form-control" disabled> <?php echo $pp->catdata_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat pb pp -->
                        <div class="modal fade" id="catpbppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catpb_pp" class="form-control" disabled> <?php echo $pp->catpb_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat pb2 pp -->
                        <div class="modal fade" id="catpb2ppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catpb2_pp" class="form-control" disabled> <?php echo $pp->catpb2_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>


                        <!-- Modal cat tahap pp -->
                        <div class="modal fade" id="cattahapanppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="cattahap_pp" class="form-control" disabled> <?php echo $pp->cattahap_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        <!-- Modal cat keleb pp -->
                        <div class="modal fade" id="catkelebihanppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                               <label for="textarea"><h6>CATATAN</h6></label>
                              <textarea type="text" rows="1" name="catkeleb_pp" class="form-control" disabled> <?php echo $pp->catkeleb_pp?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                           <!-- Modal pb2 pp -->
                           <div class="modal fade" id="pb2ppModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">CATATAN</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              
                              <div class="col-md-12 form-group mb-3">
                              <img src="<?php echo base_url().'assets/files/'.$pp->proses_bisnis2_pp?>" class="img-thumbnail" width="450px">
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
                  <?php echo anchor('mahasiswa/eproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               </div>

               <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content11' );
                CKEDITOR.replace( 'content12' );
                CKEDITOR.replace( 'content13' );
                CKEDITOR.replace( 'content14' );
                CKEDITOR.replace( 'content15' );
                CKEDITOR.replace( 'content16' );
                CKEDITOR.replace( 'content17' );
                CKEDITOR.replace( 'content18' );
                CKEDITOR.replace( 'content19' );
                CKEDITOR.replace( 'content20' );
                CKEDITOR.replace( 'content21' );
            </script>
               
            </div>
         </div>
      </div>
      <!-- end cases -->