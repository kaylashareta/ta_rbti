<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 5</h2>
                     <h1>Business Plan</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div> 

            

<!-- <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6> -->
      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    
    
        <form method="post" action="<?php echo base_url('mahasiswa/businessplan/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_plan"  class="form-control" value="<?php echo $this->session->uname_user ?>">
                <input type="hidden" name="tanggal_submit_plan"  class="form-control" value="<?php echo date("Y-m-d") ?>">
            
            </div>

            
            <div class="row">
            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.1 CUSTOMER</h4></label>
                <textarea id="content22" type="" rows="5" name="cust_plan" placeholder="Masukkan Customer Perusahan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('cust_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.2 VALUE PROPOSITIONS</h4></label>
                <textarea id="content23" type="" rows="5" name="value_plan" placeholder="Masukkan Value Propositions Perusahan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('value_plan','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.3 CHANNELS</h4></label>
                <textarea id="content24" type="" rows="5" name="channels_plan" placeholder="Masukkan Channels Perusahan Start-Up Anda" class="form-control"></textarea>
             <?php echo form_error('channels_plan','<div class="text-danger small" ml-3>')?>
            </div>
            
            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.4 RELATIONSHIPS</h4></label>
                <textarea id="content25" type="" rows="5" name="relation_plan" placeholder="Masukkan Relationships Perusahan Start-Up Anda"  class="form-control"></textarea>
              <?php echo form_error('relation_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.5 KEY ACTIVITIES</h4></label>
                <textarea id="content26" type="" rows="5" name="key_act_plan" placeholder="Masukkan Key Activities Perusahan Start-Up Anda" class="form-control"></textarea>
              <?php echo form_error('key_act_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.6 KEY RESOURCE</h4></label>
                <textarea id="content27" type="" rows="5" name="key_res_plan" placeholder="Masukkan Key Resource Perusahan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('key_res_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.7 KEY PARTNERS</h4></label>
                <textarea id="content28" type="" rows="5" name="key_partner_plan" placeholder="Masukkan Key Partner Perusahan Start-Up Anda" class="form-control"></textarea>
             <?php echo form_error('key_partner_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.8 COST STRUCTURE</h4></label>
                <textarea id="content29" type="" rows="5" name="cost_plan" placeholder="Masukkan Cost Strucuture Perusahan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('cost_plan','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-6 ">
                <label for="textarea"><h4>5.9 REVENUE STREAMS</h4></label>
                <textarea id="content30"  type="" rows="5" name="revenue_plan" placeholder="Masukkan Revenue Streams Perusahan Start-Up Anda" class="form-control"></textarea>
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
        </div>