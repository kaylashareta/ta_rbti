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
                                       <h4 class="list-group-item list-group-item-dark">INPUT DATA BISNIS PLAN - BUSINESS MODEL CANVAS </h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                               <form method="post" action="<?php echo base_url('peserta/tambah_bisnisplan')?>" enctype="multipart/form-data">
                                        <div class="form-group col-sm-11">
                                            <label><h6>5.1 Customer : </h6></label>
                                            <br>
                                            <textarea id="content22" type="" rows="5" name="cust_plan"  class="form-control"><?=set_value('cust_plan');?></textarea>
                                            <?=form_error('cust_plan','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            
                                            
                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.2 Value Propositions : </h6></label><br>
                                            <textarea id="content23" type="" rows="5" name="value_plan"class="form-control"><?=set_value('value_plan');?></textarea>
                                            <?=form_error('value_plan','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.3 Channels : </h6></label><br>
                                            <textarea id="content24" type="" rows="5" name="channels_plan" class="form-control"><?=set_value('channels_plan');?></textarea>
                                            <?=form_error('channels_plan','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.4 Relationships : </h6></label><br>
                                            <textarea id="content25" type="" rows="5" name="relation_plan" class="form-control"><?=set_value('relation_plan');?></textarea>
                                            <?=form_error('relation_plan','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.5 Key Activities : </h6></label><br>
                                            <textarea id="content26" type="" rows="5" name="key_act_plan" class="form-control"><?=set_value('key_act_plan');?></textarea>
                                            <?=form_error('key_act_plan','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.6 Key Resource : </h6></label><br>
                                            <textarea id="content27" type="" rows="5" name="key_res_plan"  class="form-control"><?=set_value('key_res_plan');?></textarea>
                                            <?=form_error('key_res_plan','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.7 Key Partners : </h6></label><br>
                                            <textarea id="content28" type="" rows="5" name="key_partner_plan"  class="form-control"><?=set_value('key_partner_plan');?></textarea>
                                            <?=form_error('key_partner_plan','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.8 Cost Structure : </h6></label><br>
                                            <textarea id="content29" type="" rows="5" name="cost_plan"  class="form-control"><?=set_value('cost_plan');?></textarea>
                                            <?=form_error('cost_plan','<small class="text-danger pl-3">','</small>');?>
                                        </div>

                                        <div class="form-group col-sm-11">
                                            <label for="textarea"><h6>5.9 Revenue Streams : </h6></label><br>
                                            <textarea id="content30"  type="" rows="5" name="revenue_plan" class="form-control"><?=set_value('revenue_plan');?></textarea>
                                            <?=form_error('revenue_plan','<small class="text-danger pl-3">','</small>');?>
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
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->