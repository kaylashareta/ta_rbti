
  
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>C. REVIEW PRODUK</h2>
                   </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo ($reviewproduk)?'': anchor('mahasiswa/reviewproduk/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <?php $no=1; foreach($reviewproduk as $rp) :  ?>

                        <!-- nama aplikasi -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.1 NAMA APLIKASI</h4></label>
                        <input type="text" class="form-control" id="nama_solusi" name="nama_solusi" value="<?php echo strtoupper ($rp->nama_solusi); ?>" disabled> 
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_nama_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_nama_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($rp->status_nama_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catnamasolusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catnamasolusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catnamasolusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                         <!-- deskripsi aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>3.2 DESKRRIPSI APLIKASI</h4></label>
                        <textarea id="content9" type="text" rows="7" name="deksripsi_solusi" class="form-control" disabled> <?php echo $rp->deskripsi_solusi ?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_desk_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_desk_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                        <?php if ($rp->status_desk_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catdesksolusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catdesksolusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catdesksolusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                         <!-- logo aplikasi -->
                         <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.3 LOGO APLIKASI</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#logoappModal">
                        </div>
                      
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_logo_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_logo_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                                              <?php if ($rp->status_logo_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlogosolusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catlogosolusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlogosolusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                        <!-- prev ui1 aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.4 PREVIEW UI/UX-1</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui1Modal">
                            </div>
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_ui1_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_ui1_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                                              <?php if ($rp->status_ui1_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui1solusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catui1solusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui1solusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                        <!-- prev ui2 aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.5 PREVIEW UI/UX-2</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui2Modal">
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_ui2_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_ui2_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                                              <?php if ($rp->status_ui2_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui2solusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catui2solusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui2solusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                        <!-- prev ui3 aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.6 PREVIEW UI/UX-3</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui3Modal">
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_ui3_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_ui3_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                                              <?php if ($rp->status_ui3_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui3solusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catui3solusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui3solusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                        <!-- prev ui4 aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.7 PREVIEW UI/UX-4</h4></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-eye" data-toggle="modal" data-target="#ui4Modal">
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_ui4_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_ui4_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                                              <?php if ($rp->status_ui4_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui4solusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catui4solusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catui4solusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                        <!-- tahun buat aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.8 TAHUN PEMBUATAN APLIKASI</h4></label>
                        <input type="number" class="form-control" id="tahun_buat_solusi" name="tahun__buat_solusi" value="<?php echo strtoupper ($rp->tahun_buat_solusi); ?>" disabled> 
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_tahun_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_tahun_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>
                        
                                              <?php if ($rp->status_tahun_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#cattahunsolusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#cattahunsolusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#cattahunsolusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                        <!-- link video aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.9 LINK VIDEO APLIKASI</h4></label>
                        <input type="text" class="form-control" id="link_vid_solusi" name="link_vid_solusi" value="<?php echo $rp->link_vid_solusi ?>" disabled> 
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_linkvid_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_linkvid_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                                              <?php if ($rp->status_linkvid_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlinkvidsolusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catlinkvidsolusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlinkvidsolusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                        <!-- link produk aplikasi -->
                        <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label><h4>3.10 LINK PRODUK APLIKASI</h4></label>
                        <input type="text" class="form-control" id="link_prod_solusi" name="link_prod_solusi" value="<?php echo $rp->link_prod_solusi ?>" disabled> 
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_linkprod_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_linkprod_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>

                                              <?php if ($rp->status_linkprod_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlinkprodsolusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catlinkprodsolusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catlinkprodsolusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                           <!-- teknologi yang digunakan aplikasi -->
                           <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>3.11 TEKNOLOGI YANG DIGUNAKAN</h4></label>
                        <textarea id="content10" type="text" rows="7" name="teknologi_solusi" class="form-control" disabled> <?php echo $rp->teknologi_solusi ?></textarea>
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                                                    <?php if ($rp->status_tekn_solusi == 'Approve') { ?>
                                                        <input type='button' class="btn btn-success btn-sm" value='Approve'disabled>
                                                    <?php } else if ($rp->status_tekn_solusi == 'Revisi') { ?>
                                                        <input type='button' class="btn btn-danger btn-sm" value='Revisi'  disabled>
                                                    <?php } else { ?>
                                                        <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi'>
                                                    <?php } ?>
                                              </div>


                        <?php if ($rp->status_tekn_solusi == 'Revisi') { ?>                      
                        <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/reviewproduk/update/'.$rp->id_proposal,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catteknsolusiModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catteknsolusiModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catteknsolusiModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                         <!-- Modal cat nama solusi -->
                         <div class="modal fade" id="catnamasolusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catnama_solusi" class="form-control" disabled> <?php echo $rp->catnama_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catdesksolusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catdesk_solusi" class="form-control" disabled> <?php echo $rp->catdesk_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catlogosolusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catlogo_solusi" class="form-control" disabled> <?php echo $rp->catlogo_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catui1solusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catui1_solusi" class="form-control" disabled> <?php echo $rp->catui1_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catui2solusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catui2_solusi" class="form-control" disabled> <?php echo $rp->catui2_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                        
                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catui3solusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catui3_solusi" class="form-control" disabled> <?php echo $rp->catui3_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catui4solusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catui4_solusi" class="form-control" disabled> <?php echo $rp->catui4_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="cattahunsolusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="cattahun_solusi" class="form-control" disabled> <?php echo $rp->cattahun_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catlinkvidsolusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catlinkvid_solusi" class="form-control" disabled> <?php echo $rp->catlinkvid_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catlinkprodsolusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catlinkprod_solusi" class="form-control" disabled> <?php echo $rp->catlinkprod_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catteknsolusiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="cattekn_solusi" class="form-control" disabled> <?php echo $rp->cattekn_solusi?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                       

                         <!-- Modal logo -->
                         <div class="modal fade" id="logoappModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">LOGO APLIKASI</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.$rp->logo_solusi?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                        
                         <!-- Modal ui1 -->
                         <div class="modal fade" id="ui1Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-1</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui1_solusi?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal ui2 -->
                         <div class="modal fade" id="ui2Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-2</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui2_solusi?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal ui3 -->
                         <div class="modal fade" id="ui3Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-3</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui3_solusi?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal ui4 -->
                         <div class="modal fade" id="ui4Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                           <div class="modal-content">
                              <div class="modal-header">
                              <h3 class="modal-title" id="exampleModalLongTitle">PREVIEW UI/UX-4</h3>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                              </button>
                              </div>
                              <div class="modal-body">
                              <img src="<?php echo base_url().'assets/files/'.$rp->prev_ui4_solusi?>" class="img-thumbnail" width="450px">
                        
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                     

                 
                   

                
                     <?php endforeach; ?>

                  
                     </table>
                     <br>
                     <?php echo anchor('mahasiswa/eproposal/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                </div>
              </div>
               <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content9' );
                CKEDITOR.replace( 'content10' );
                
            </script>
            </div>
         </div>
      </div>
      <!-- end cases -->