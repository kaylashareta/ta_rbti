
   
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
                  <form method="post" action="<?= base_url('dosen/daftarproposal/verifikasi5/'.@$verif5['id_proposal']) ?>" enctype="multipart/form-data">  
                  <div class="col-md-2 form-group mb-3">
                      <label> <h6>Tanggal Submit</h6></label>
                        <input type="text" class="form-control" id="tanggal_submit_plan" name="tanggal_submit_plan" value="<?= @$verif5['tanggal_submit_plan']; ?>" disabled> 
                  </div>
                     <!-- latar belakang -->
                     <input type="hidden" name="id_proposal" value="<?= @$verif5['id_proposal']; ?>">

                 

                    
                   <!-- CUSTOMER -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.1 CUSTOMER</h4></label>
                        <textarea id="content22" type="text" rows="7" name="cust_plan" class="form-control" disabled> <?= @$verif5['cust_plan']; ?></textarea>
                        </div>
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_cust_plan" class="form-control"  value="<?php echo $verif5['status_cust_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_cust_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catcust_plan" class="form-control" > <?= @$verif5['catcust_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                     </div>
                        </div>
 

                  <!-- VALUE PROPOSITIONS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.2 VALUE PROPOSITIONS</h4></label>
                        <textarea id="content23" type="text" rows="7" name="value_plan" class="form-control" disabled> <?= @$verif5['value_plan']; ?></textarea>
                        </div>

                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_value_plan" class="form-control"  value="<?php echo $verif5['status_value_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_value_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catvalue_plan" class="form-control" > <?= @$verif5['catvalue_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                     </div>
                        </div>


                  <!-- CHANNELS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.3 CHANNELS</h4></label>
                        <textarea id="content24" type="text" rows="7" name="channels_plan" class="form-control" disabled>  <?= @$verif5['channels_plan']; ?></textarea>
                        </div>
                      
                        
                       <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_channels_plan" class="form-control"  value="<?php echo $verif5['status_channels_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_channels_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catchannels_plan" class="form-control" > <?= @$verif5['catchannels_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                     </div>
                        </div>

                  <!--RELATIONSHIPS -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.4 RELATIONSHIPS</h4></label>
                        <textarea id="content25" type="text" rows="7" name="relation_plan" class="form-control" disabled>  <?= @$verif5['relation_plan']; ?></textarea>
                        </div>
                        
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_relation_plan" class="form-control"  value="<?php echo $verif5['status_relation_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_relation_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catrelation_plan" class="form-control" > <?= @$verif5['catrelation_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                      </div>
                        </div>


                   <!--KEY ACTIVITIES -->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.5 KEY ACTIVITIES</h4></label>
                        <textarea id="content26" type="text" rows="7" name="key_act_plan" class="form-control" disabled> <?= @$verif5['key_act_plan']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_keyact_plan" class="form-control"  value="<?php echo $verif5['status_keyact_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_keyact_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catkeyact_plan" class="form-control" > <?= @$verif5['catkeyact_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                      </div>
                        </div>

                  
                  <!--KEY RESOURCE -->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.6 KEY RESOURCE</h4></label>
                        <textarea id="content27"  type="text" rows="7" name="key_res_plan" class="form-control" disabled>  <?= @$verif5['key_res_plan']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_keyres_plan" class="form-control"  value="<?php echo $verif5['status_keyres_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_keyres_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catkeyres_plan" class="form-control" > <?= @$verif5['catkeyres_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                      </div>
                        </div>


                   <!--KEY PARTNERS-->
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.7 KEY PARTNERS</h4></label>
                        <textarea id="content28" type="text" rows="7" name="key_partner_plan" class="form-control" disabled>  <?= @$verif5['key_part_plan']; ?></textarea>
                        </div>
                      
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_keypart_plan" class="form-control"  value="<?php echo $verif5['status_keypart_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_keypart_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catkeypart_plan" class="form-control" > <?= @$verif5['catkeypart_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                     </div>
                        </div>

                  <!--COST STRUCTURE-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.8 COST STRUCTURE</h4></label>
                        <textarea id="content29" type="text" rows="7" name="cost_plan" class="form-control" disabled>  <?= @$verif5['cost_plan']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_cost_plan" class="form-control"  value="<?php echo $verif5['status_cost_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_cost_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catcost_plan" class="form-control" > <?= @$verif5['catcost_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                       </div>
                        </div>


                  
                  <!--REVENUE STREAMS-->
                  <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label for="textarea"><h4>5.9 REVENUE STREAMS</h4></label>
                        <textarea id="content30"  type="text" rows="7" name="revenue_plan" class="form-control" disabled>  <?= @$verif5['revenue_plan']; ?></textarea>
                        </div>
                       
                        
                        <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_revenue_plan" class="form-control"  value="<?php echo $verif5['status_revenue_plan']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif5['status_revenue_plan'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catrevenue_plan" class="form-control" > <?= @$verif5['catrevenue_plan']; ?></textarea>
                        <h6>jika tidak ada catatan, tulis - </h6>
                     </div>
                        </div>
                  

                        <button type="submit" class='btn btn-primary'>Simpan</button>
                 
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