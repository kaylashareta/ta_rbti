  
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 2</h2>
                     <h1>Biodata Tim</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun
                         </div>
               </div>
            </div> 

            

<!-- <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6> -->

      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

       
        <form method="post" action="<?php echo base_url('mahasiswa/biodatatim/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_biodata"  class="form-control" value="<?php echo $this->session->uname_user ?>">
                <input type="hidden" name="tanggal_submit_biodata"  class="form-control" value="<?php echo date("Y-m-d") ?>">
         
            </div>
            
            <div class="alert alert-danger col-md-12" role="success">
            <i class="fas fa-user-friends"></i><h3>A. HUSTLER</h3></div>
            <div class="form-group col-md-12 ">
                <label><h4>2.1 NAMA HUSTLER</h4></label>
                <input type="text"  name="nama_hustler" placeholder="Masukkan Nama Hustler Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_hustler','<div class="text-danger small" ml-3>')?>
            </div>
            

            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.2 ALAMAT HUSTLER</h4></label>
                <textarea id="content1" rows="6" name="alamat_hustler" placeholder="Masukkan Alamat Hustler Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('alamat_hustler','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.3 TELP HUSTLER</h4></label>
                <input type="number"  name="telp_hustler" placeholder="Masukkan Telp Hustler Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('telp_hustler','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.4 EMAIL HUSTLER</h4></label>
                <input type="text"  name="email_hustler" placeholder="Masukkan E-Mail Hustler Perusahan Start-Up Anda"class="form-control">
                <?php echo form_error('email_hustler','<div class="text-danger small" ml-3>')?>
            </div>
            </div>

            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.5 TUGAS HUSTLER</h4></label>
                <textarea id="content2" type="" rows="5" name="tugas_hustler" placeholder="Masukkan Tugas Hustler Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('tugas_hustler','<div class="text-danger small" ml-10>')?>
            </div>



            
            <div class="alert alert-danger col-md-12" role="success">
            <i class="fas fa-user-friends"></i><h3>B. HIPSTER</h3></div>
            <div class="form-group col-md-12 ">
                <label><h4>2.6 NAMA HIPSTER</h4></label>
                <input type="text"  name="nama_hipster" placeholder="Masukkan Nama Hipster Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_hipster','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.7 ALAMAT HIPSTER</h4></label>
                <textarea id="content3"  type="" rows="5" name="alamat_hipster" placeholder="Masukkan Alamat Hipster Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('alamat_hipster','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.8 TELP HIPSTER</h4></label>
                <input type="number"  name="telp_hipster" placeholder="Masukkan Telp Hipster Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('telp_hipster','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.9 EMAIL HIPSTER</h4></label>
                <input type="text"  name="email_hipster" placeholder="Masukkan E-Mail Hipster Perusahan Start-Up Anda"class="form-control">
                <?php echo form_error('email_hipster','<div class="text-danger small" ml-3>')?>
            </div>
            </div>

           
            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.10 TUGAS HIPSTER</h4></label>
                <textarea id="content4"  type="" rows="5" name="tugas_hipster" placeholder="Masukkan Tugas Hipster Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('tugas_hipster','<div class="text-danger small" ml-10>')?>
            </div>




            <div class="alert alert-danger col-md-12" role="alert">
            <i class="fas fa-user-friends"></i><h3>C. HACKER</h3></div>
            <div class="form-group col-md-12 ">
                <label><h4>2.11 NAMA HACKER</h4></label>
                <input type="text"  name="nama_hacker" placeholder="Masukkan Nama Hacker Perusahan Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_hacker','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.12 ALAMAT HACKER</h4></label>
                <textarea id="content5" id="froala-editor" rows="5" name="alamat_hacker" placeholder="Masukkan Alamat Hacker Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('alamat_hacker','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.13 TELP HACKER</h4></label>
                <input type="number"  name="telp_hacker" placeholder="Masukkan Telp Hacker Perusahan Start-Up Anda" class="form-control">
                <?php echo form_error('telp_hacker','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.14 EMAIL HACKER</h4></label>
                <input type="text"  name="email_hacker" placeholder="Masukkan E-Mail Hacker Perusahan Start-Up Anda"class="form-control">
                <?php echo form_error('email_hacker','<div class="text-danger small" ml-3>')?>
            </div>
            </div>


            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.15 TUGAS HACKER</h4></label>
                <textarea id="content6"  type="" rows="5" name="tugas_hacker" placeholder="Masukkan Tugas Hacker Perusahaan Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('tugas_hacker','<div class="text-danger small" ml-10>')?>
            </div>


            
            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content1' );
                CKEDITOR.replace( 'content2' );
                CKEDITOR.replace( 'content3' );
                CKEDITOR.replace( 'content4' );
                CKEDITOR.replace( 'content5' );
                CKEDITOR.replace( 'content6' );
            </script>
        
        </div>
        </div>



</div>
</div>

