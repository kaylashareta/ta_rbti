<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>UPDATE BAB 2</h2>
                     <h1>Biodata Tim</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun
                         </div>
               </div>
            </div> 
            
<div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

       
        



<!-- <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6> -->
        
      <div class="container-fluid">
      <br>
    <br>
  

          
    <form method="post" action="<?php echo base_url('mahasiswa/businessplan/update_aksi')?>" enctype="multipart/form-data">
        
                <?php foreach($businessplan as $bp) : ?> 
                    
                    <div class="row">
            
            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.1 CUSTOMER</h4></label>
                <textarea id="content22"  type="" rows="5" name="cust_plan" class="form-control"><?php echo $bp->cust_plan?> class="form-control</textarea>
                <input type="hidden" name="id_plan" value="<?php echo $bp->id_plan?>">
                <?php echo form_error('cust_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.2 VALUE PROPOSITIONS</h4></label>
                <textarea id="content23"  type="" rows="5" name="value_plan" class="form-control"><?php echo $bp->value_plan?></textarea>
               <?php echo form_error('value_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.3 CHANNELS</h4></label>
                <textarea id="content24" type="" rows="5" name="channels_plan" class="form-control"><?php echo $bp->channels_plan?></textarea>
              <?php echo form_error('channels_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.4 RELATIONSHIPS</h4></label>
                <textarea id="content25" type="" rows="5" name="relation_plan" class="form-control"><?php echo $bp->relation_plan?></textarea>
              <?php echo form_error('relation_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.5 KEY ACTIVITIES</h4></label>
                <textarea id="content26" type="" rows="5" name="key_act_plan" class="form-control"><?php echo $bp->key_act_plan?></textarea>
              <?php echo form_error('key_act_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.6 KEY RESOURCE</h4></label>
                <textarea id="content27" type="" rows="5" name="key_res_plan" class="form-control"><?php echo $bp->key_res_plan?></textarea>
              <?php echo form_error('key_res_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.7 KEY PARTNER</h4></label>
                <textarea id="content28" type="" rows="5" name="key_partner_plan" class="form-control"><?php echo $bp->key_partner_plan?></textarea>
              <?php echo form_error('key_partner_plan','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.8 COST STRUCTURE</h4></label>
                <textarea id="content29" type="" rows="5" name="cost_plan" class="form-control"><?php echo $bp->cost_plan?></textarea>
              <?php echo form_error('cost_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>5.9 REVENUE STREAMS</h4></label>
                <textarea id="content30" type="" rows="5" name="revenue_plan" class="form-control"><?php echo $bp->revenue_plan?></textarea>
              <?php echo form_error('revenue_plan','<div class="text-danger small" ml-3>')?>
            </div>
          
        
            </div>      

            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>
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

        <?php endforeach; ?>

</div>
</div>
</div>
</div>