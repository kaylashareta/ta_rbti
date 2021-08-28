<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 1</h2>
                     <h1>Start-Up</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div> 

            

<!-- <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6> -->

      <div class="row d_flex" >
               <div class=" col-md-12" >
                   
                  <div class="latest text_align_center" >
                      
                  <table class="table table-bordered table-stripped table-hover" >
    
        <form method="post" action="<?php echo base_url('mahasiswa/startup/input_aksi')?>" enctype="multipart/form-data">
         
        <input type="hidden" name="id_proposal"  class="form-control" value="<?php echo $this->session->id_proposal ?>">
        <input type="hidden" name="nim_start_up"  class="form-control" value="<?php echo $this->session->uname_user ?>">
        <input type="hidden" name="tanggal_submit_su"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                   
    </div>
            <div class="form-group col-md-12 ">
                <label><h4>1.1 NAMA PERUSAHAAN</h4></label>
                <input type="text"  name="nama_start_up" placeholder="Masukkan Nama Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_start_up','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>1.2 VISI PERUSAHAAN</h4></label>
                <textarea id="content7" type="" rows="5" name="visi_start_up" placeholder="Masukkan Visi Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('visi_start_up','<div class="text-danger small" ml-10>')?>
          
            </div>
            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>1.3 MISI PERUSAHAAN</h4></label>
                <textarea id="content8" type="" rows="5" name="misi_start_up" placeholder="Masukkan Misi Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('misi_start_up','<div class="text-danger small" ml-10>')?>
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label for="exampleFormControlFile1"><h4>1.4 Pilih File Struktur Organisasi</h4></label>
            <input type="file" name="struktur_start_up"  accept="image/*" placeholder="Masukkan File Struktur Organisasi" class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('struktur_start_up','<div class="text-danger small" ml-10>')?>
                <h6>JPG/JPEG/PNG max 2MB</h6>
            </div>
            <div class="col-md-6 form-group mb-3">
            <label for="exampleFormControlFile1"><h4>1.5 Pilih File Logo Perusahaan</h4></label>
            <input type="file" name="logo_start_up" accept="image/*" placeholder="Masukkan File Logo Perusahaan" class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('logo_start_up','<div class="text-danger small" ml-3>')?>
                <h6>JPG/JPEG/PNG max 2MB</h6>
            </div>
            </div>

          
            <div class="form-group col-md-12 ">
                <label><h4>1.6 TAGLINE PERUSAHAAN</h4></label>
                <input type="text" name="tagline_start_up" placeholder="Masukkan Tagline Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('tagline_start_up','<div class="text-danger small" ml-3>')?>
            </div>

            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content7' );
                CKEDITOR.replace( 'content8' );
                
            </script>
        </div>
        </div>
        <!-- <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6> -->
        </div>
        </div>
        </div>
       