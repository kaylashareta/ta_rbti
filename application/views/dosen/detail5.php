
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 5</h2>
                     <h1>Business Plan</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <?php $no=1; foreach($detailpro5 as $bp) :  ?>
                     <!--<?php echo anchor('dosen/daftarproposal/verifikasi5/'.$bp->id_proposal,'<button class="btn btn-sm btn-primary mb-3"></i> Verifikasi </button> ')?>-->
                     <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                                     
                     
                     <div class="row"><div class="col-md-2 form-group mb-3">
                       <h6>Tanggal Submit</h6>
                        <input type="text" class="form-control" id="tanggal_submit_plan" name="tanggal_submit_plan" value="<?php echo ($bp->tanggal_submit_plan); ?>" disabled> 
                  </div></div>


                 

                    
                   <!-- CUSTOMER -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.1 CUSTOMER</h4></label>
                        <textarea id="content22" type="text" rows="7" name="cust_plan" class="form-control" disabled> <?php echo $bp->cust_plan?></textarea>
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_cust_plan" name="status_cust_plan" value="<?php echo ($bp->status_cust_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catcust_plan" class="form-control" disabled> <?php echo $bp->catcust_plan?></textarea>
                        </div>
                        </div>
 

                  <!-- VALUE PROPOSITIONS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.2 VALUE PROPOSITIONS</h4></label>
                        <textarea id="content23" type="text" rows="7" name="value_plan" class="form-control" disabled> <?php echo $bp->value_plan?></textarea>
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_value_plan" name="status_value_plan" value="<?php echo ($bp->status_value_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catvalue_plan" class="form-control" disabled> <?php echo $bp->catvalue_plan?></textarea>
                        </div>
                        </div>


                  <!-- CHANNELS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.3 CHANNELS</h4></label>
                        <textarea id="content24" type="text" rows="7" name="channels_plan" class="form-control" disabled> <?php echo $bp->channels_plan?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_channels_plan" name="status_channels_plan" value="<?php echo ($bp->status_channels_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catchannels_plan" class="form-control" disabled> <?php echo $bp->catchannels_plan?></textarea>
                        </div>
                        </div>

                  <!--RELATIONSHIPS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.4 RELATIONSHIPS</h4></label>
                        <textarea id="content25" type="text" rows="7" name="relation_plan" class="form-control" disabled> <?php echo $bp->relation_plan?></textarea>
                        </div>
                        
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_relation_plan" name="status_relation_plan" value="<?php echo ($bp->status_relation_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catrelation_plan" class="form-control" disabled> <?php echo $bp->catrelation_plan?></textarea>
                        </div>
                        </div>


                   <!--KEY ACTIVITIES -->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.5 KEY ACTIVITIES</h4></label>
                        <textarea id="content26" type="text" rows="7" name="key_act_plan" class="form-control" disabled> <?php echo $bp->key_act_plan?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_keyact_plan" name="status_keyact_plan" value="<?php echo ($bp->status_keyact_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkeyact_plan" class="form-control" disabled> <?php echo $bp->catkeyact_plan?></textarea>
                        </div>
                        </div>

                  
                  <!--KEY RESOURCE -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.6 KEY RESOURCE</h4></label>
                        <textarea id="content27"  type="text" rows="7" name="key_res_plan" class="form-control" disabled> <?php echo $bp->key_res_plan?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_keyres_plan" name="status_keyres_plan" value="<?php echo ($bp->status_keyres_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkeyres_plan" class="form-control" disabled> <?php echo $bp->catkeyres_plan?></textarea>
                        </div>
                        </div>
 

                   <!--KEY PARTNERS-->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.7 KEY PARTNERS</h4></label>
                        <textarea id="content28" type="text" rows="7" name="key_partner_plan" class="form-control" disabled> <?php echo $bp->key_partner_plan?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_keypart_plan" name="status_keypart_plan" value="<?php echo ($bp->status_keypart_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catkeypart_plan" class="form-control" disabled> <?php echo $bp->catkeypart_plan?></textarea>
                        </div>
                        </div>

                  <!--COST STRUCTURE-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.8 COST STRUCTURE</h4></label>
                        <textarea id="content29" type="text" rows="7" name="cost_plan" class="form-control" disabled> <?php echo $bp->cost_plan?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_cost_plan" name="status_cost_plan" value="<?php echo ($bp->status_cost_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catcost_plan" class="form-control" disabled> <?php echo $bp->catcost_plan?></textarea>
                        </div>
                        </div>


                  
                  <!--REVENUE STREAMS-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.9 REVENUE STREAMS</h4></label>
                        <textarea id="content30"  type="text" rows="7" name="revenue_plan" class="form-control" disabled> <?php echo $bp->revenue_plan?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <input type="text" class="form-control" id="status_revenue_plan" name="status_revenue_plan" value="<?php echo ($bp->status_revenue_plan); ?>" disabled> 
                       </div>
                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="7" name="catrevenue_plan" class="form-control" disabled> <?php echo $bp->catrevenue_plan?></textarea>
                        </div>
                        </div>
                  


                
       
                     <?php endforeach; ?>

                  
                   
                     <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                   
                     <br>
                     <br>
                     
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
      </div>
      <!-- end cases -->