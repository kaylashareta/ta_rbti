
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>E. BUSINESS PLAN</h2>
                      </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php echo ($businessplan)?'':anchor('mahasiswa/businessplan/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                  <?php $no=1; foreach($businessplan as $bp) :  ?>
                  
                  <!-- CUSTOMER -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.1 CUSTOMER</h4></label>
                        <textarea id="content22" type="text" rows="7" name="cust_plan" class="form-control" disabled> <?php echo $bp->cust_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_cust_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_cust_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    
                        </div>

                        <?php if ($bp->status_cust_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catcustplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catcustplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catcustplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                  </div>


                  <!-- VALUE PROPOSITIONS -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.2 VALUE PROPOSITIONS</h4></label>
                        <textarea id="content23" type="text" rows="7" name="value_plan" class="form-control" disabled> <?php echo $bp->value_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_value_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_value_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    
                           </div>

                           <?php if ($bp->status_value_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catvalueplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catvalueplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catvalueplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                  </div>


                  <!-- CHANNELS -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.3 CHANNELS</h4></label>
                        <textarea id="content24" type="text" rows="7" name="channels_plan" class="form-control" disabled> <?php echo $bp->channels_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_channels_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_channels_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    
                        </div>

                        <?php if ($bp->status_channels_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catchannelsplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catchannelsplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catchannelsplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                  <!--RELATIONSHIPS -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.4 RELATIONSHIPS</h4></label>
                        <textarea id="content25" type="text" rows="7" name="relation_plan" class="form-control" disabled> <?php echo $bp->relation_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_relation_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_relation_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    
                           </div>

                           <?php if ($bp->status_relation_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catrelationplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catrelationplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catrelationplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                   <!--KEY ACTIVITIES -->
                   <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.5 KEY ACTIVITIES</h4></label>
                        <textarea id="content26" type="text" rows="7" name="key_act_plan" class="form-control" disabled> <?php echo $bp->key_act_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_keyact_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_keyact_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    
                           </div>

                           <?php if ($bp->status_keyact_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkeyactplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catkeyacteplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkeyacteplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                  
                  <!--KEY RESOURCE -->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.6 KEY RESOURCE</h4></label>
                        <textarea id="content27" type="text" rows="7" name="key_res_plan" class="form-control" disabled> <?php echo $bp->key_res_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_keyres_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_keyres_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    </div>

                            <?php if ($bp->status_keyres_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkeyresplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catkeyresplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkeyresplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                   <!--KEY PARTNERS-->
                   <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.7 KEY PARTNERS</h4></label>
                        <textarea id="content28" type="text" rows="7" name="key_partner_plan" class="form-control" disabled> <?php echo $bp->key_partner_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_keypart_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_keypart_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    </div>

                            <?php if ($bp->status_keypart_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkeypartplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catkeypartplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catkeypartplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>

                  <!--COST STRUCTURE-->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.8 COST STRUCTURE</h4></label>
                        <textarea id="content29" type="text" rows="7" name="cost_plan" class="form-control" disabled> <?php echo $bp->cost_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_cost_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_cost_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    </div>

                            <?php if ($bp->status_cost_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catcostplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catcostplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catcostplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                  
                  <!--REVENUE STREAMS-->
                  <div class="row">
                        <div class="col-md-8 form-group mb-3">
                        <label for="textarea"><h4>5.9 REVENUE STREAMS</h4></label>
                        <textarea id="content30" type="text" rows="7" name="revenue_plan" class="form-control" disabled> <?php echo $bp->revenue_plan?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label><br>
                              <?php if ($bp->status_revenue_plan == 'Approve') { ?>
                                    <input type='button' class="btn btn-success btn-sm" value='Approve' disabled>
                              <?php } else if ($bp->status_revenue_plan == 'Revisi') { ?>
                                   <input type='button' class="btn btn-danger btn-sm" value='Revisi' disabled>
                             <?php } else { ?>
                                   <input type='button' class="btn btn-warning btn-sm" value='Menunggu Verifikasi' disabled>
                            <?php } ?>    
                        </div>

                        <?php if ($bp->status_revenue_plan == 'Revisi') { ?>
                           <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <?php echo anchor('mahasiswa/businessplan/update/'.$bp->id_plan,'<div class="btn btn=sm btn-primary">
                           <i class="fa fa-edit"></i></div>') ?></td>
                        </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catrevenueplanModal">
                        </button>
                        </div>
                            <?php } else { ?>
                              <div class="col-md-1 form-group mb-3">
                        <label><h6>EDIT</h6></label>
                        <br>
                        <button type="button" class="btn btn-primary fa fa-edit" data-toggle="modal" data-target="#catrevenueplanModal" disabled > 
                         </div>
                        
                       <div class="col-md-1 form-group mb-3">
                        <label><h6>CATATAN</h6></label>
                        <button type="button" class="btn btn-primary fa fa-comment" data-toggle="modal" data-target="#catrevenueplanModal" disabled > 
                        </button>
                        </div>
                       <?php } ?>
                        </div>


                           <!-- Modal cat cust plan -->
                           <div class="modal fade" id="catcustplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catcust_plan" class="form-control" disabled> <?php echo $bp->catcust_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                  

                        <!-- Modal cat value plan -->
                        <div class="modal fade" id="catvalueplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catvalue_plan" class="form-control" disabled> <?php echo $bp->catvalue_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>
                  
                         <!-- Modal cat channels plan -->
                         <div class="modal fade" id="catchannelsplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catchannels_plan" class="form-control" disabled> <?php echo $bp->catchannels_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat relation plan -->
                         <div class="modal fade" id="catrelationplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catrelation_plan" class="form-control" disabled> <?php echo $bp->catrelation_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat keyact plan -->
                         <div class="modal fade" id="catkeyactplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catkeyact_plan" class="form-control" disabled> <?php echo $bp->catkeyact_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat keyres plan -->
                         <div class="modal fade" id="catkeyresplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catkeyres_plan" class="form-control" disabled> <?php echo $bp->catkeyres_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat keypart plan -->
                         <div class="modal fade" id="catkeypartplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catkeypart_plan" class="form-control" disabled> <?php echo $bp->catkeypart_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat cost plan -->
                         <div class="modal fade" id="catcostplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catcost_plan" class="form-control" disabled> <?php echo $bp->catcost_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                         <!-- Modal cat revenue plan -->
                         <div class="modal fade" id="catrevenueplanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                              <textarea type="text" rows="1" name="catrevenue_plan" class="form-control" disabled> <?php echo $bp->catrevenue_plan?></textarea>
                              </div>
                              </div>
                              <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                             </div>
                           </div>
                        </div>
                        </div>

                
       
                     <?php endforeach; ?>

                     <?php echo anchor('mahasiswa/eproposal/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
               
                   
                  </div>
                </div>
               <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content22' );
                CKEDITOR.replace( 'content23' );
                CKEDITOR.replace( 'content24' );
                CKEDITOR.replace( 'content25' );
                CKEDITOR.replace( 'content26' );
                CKEDITOR.replace( 'content27' );
                CKEDITOR.replace( 'content28' );
                CKEDITOR.replace( 'content29' );
                CKEDITOR.replace( 'content30' );
               </script>
            </div>
         </div>
      </div>
      <!-- end cases -->