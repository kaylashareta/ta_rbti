<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 3</h2>
                     <h1>Review Produk</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun
                         </div>
               </div>
            </div> 


            
<!-- <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6> -->
      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    

        <form method="post" action="<?php echo base_url('mahasiswa/reviewproduk/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_start_up"  class="form-control" value="<?php echo $this->session->uname_user ?>">
                <input type="hidden" name="tanggal_submit_solusi"  class="form-control" value="<?php echo date("Y-m-d") ?>">
         
            </div>
            <div class="form-group col-md-12 ">
                <label><h4>3.1 NAMA APLIKASI</h4></label>
                <input type="text"  name="nama_solusi" placeholder="Masukkan Nama Aplikasi Start-Up Anda" style="text-transform:uppercase" class="form-control">
                <?php echo form_error('nama_solusi','<div class="text-danger small" ml-3>')?>
            </div> 

            <div class="form-group col-md-12">
                <label for="textarea"><h4>3.2 DESKRIPSI APLIKASI</h4></label>
                <textarea id="content9" type="" rows="5" name="deskripsi_solusi" placeholder="Masukkan Deskripsi Aplikasi Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('deskripsi_solusi','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="row">
            <div class="form-group col-md-4">
            <label for="exampleFormControlFile1"><h4>3.3 Pilih File Logo Aplikasi</h4></label>
                <input type="file" name="logo_solusi" id="img" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('logo_solusi','<div class="text-danger small" ml-10>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>
             
            
            <div class="form-group col-md-4">
            <label for="exampleFormControlFile1"><h4>3.4 Pilih File Preview UI/UX - 1</h4></label>
                <input type="file" name="prev_ui1_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('prev_ui1_solusi','<div class="text-danger small" ml-3>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>

                
            <div class="form-group col-md-4">
            <label for="exampleFormControlFile1"><h4>3.5 Pilih File Preview UI/UX - 2</h4></label>
                <input type="file" name="prev_ui2_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('prev_ui2_solusi','<div class="text-danger small" ml-3>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>

             
            <div class="form-group col-md-4">
            <label for="exampleFormControlFile1"><h4>3.6 Pilih File Preview UI/UX - 3</h4></label>
                <input type="file" name="prev_ui3_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('prev_ui3_solusi','<div class="text-danger small" ml-3>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>
            
                
            <div class="form-group col-md-4">
            <label for="exampleFormControlFile1"><h4>3.7 Pilih File Preview UI/UX - 4</h4></label>
                <input type="file" name="prev_ui4_solusi"  id="img" accept="image/*"  class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('prev_ui24_solusi','<div class="text-danger small" ml-3>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>

            <div class="form-group col-md-4 ">
                <label><h4>3.8 TAHUN PEMBUATAN</h4></label>
                <input type="number" name="tahun_buat_solusi" placeholder="Masukkan Tahun Pembuatan Aplikasi Start-Up Anda" class="form-control">
                <?php echo form_error('tahun_buat_solusi','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>
            </div>

            <div class="row">
            <div class="form-group col-md-6 ">
                <label><h4>3.9 LINK VIDEO APLIKASI</h4></label>
                <input type="text" name="link_vid_solusi" placeholder="Masukkan Link VIdeo Aplikasi Start-Up Anda"  class="form-control">
                <?php echo form_error('link_vid_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            <div class="form-group col-md-6 ">
                <label><h4>3.10 LINK PRODUK APLIKASI</h4></label>
                <input type="text" name="link_prod_solusi" placeholder="Masukkan Link Produk Aplikasi Start-Up Anda" class="form-control">
                <?php echo form_error('link_prod_solusi','<div class="text-danger small" ml-3>')?>
            </div>
            </div>


            <div class="form-group col-md-12">
                <label for="textarea"><h4>3.11 TEKNOLOGI YANG DIGUNAKAN</h4></label>
                <textarea id="content10" type="" rows="5" name="teknologi_solusi" placeholder="Masukkan Teknologi yang digunakan dalam Aplikasi Start-Up Anda" class="form-control"></textarea>
                <?php echo form_error('teknologi_solusi','<div class="text-danger small" ml-10>')?>
            </div>


            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content9' );
                CKEDITOR.replace( 'content10' );
                
            </script>
      
        </div>
        </div>