<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>UPDATE BAB 1</h2>
                     <h1>Start Up</h1>
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
  

      <?php foreach($startup as $su) : ?>       
            

        <form method="post" action="<?php echo base_url('mahasiswa/startup/update_aksi')?>" enctype="multipart/form-data">
        

       
            <div class="form-group col-md-12 ">
            <label><h4>1.1 NAMA PERUSAHAAN</h4></label>
            <input type="text" name="nama_start_up" style="text-transform:uppercase" class="form-control" class="form-control" value="<?php echo $su->nama_start_up?>">
                <input type="hidden" name="id_start_up" value="<?php echo $su->id_start_up?>">
                <?php echo form_error('nama_start_up','<div class="text-danger small" ml-3>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>1.2 VISI PERUSAHAAN</h4></label>
                <textarea id="content7" type="" rows="5" name="visi_start_up" class="form-control"><?php echo $su->visi_start_up?></textarea>
                <?php echo form_error('visi_start_up','<div class="text-danger small" ml-10>')?>
          
            </div>
            <div class="col-md-6 form-group mb-3">
            <label for="textarea"><h4>1.3 MISI PERUSAHAAN</h4></label>
                <textarea id="content8" type="" rows="5" name="misi_start_up" class="form-control"><?php echo $su->misi_start_up?></textarea>
                <?php echo form_error('misi_start_up','<div class="text-danger small" ml-10>')?>
            </div>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label for="exampleFormControlFile1"><h4>1.4 Pilih File Struktur Organisasi</h4></label>
            <input type="file" name="struktur_start_up"  accept="image/*" placeholder="Masukkan File Struktur Organisasi"  value="<?php echo $su->struktur_start_up?>" class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('struktur_start_up','<div class="text-danger small" ml-10>')?>
                <h6>JPG/JPEG/PNG max 2MB</h6>

            </div>
            <div class="col-md-6 form-group mb-3">
            <label for="exampleFormControlFile1"><h4>1.5 Pilih File Logo Perusahaan</h4></label>
            <input type="file" name="logo_start_up" accept="image/*" placeholder="Masukkan File Logo Perusahaan" value="<?php echo $su->logo_start_up?>" class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('logo_start_up','<div class="text-danger small" ml-3>')?>
                <h6>JPG/JPEG/PNG max 2MB</h6>
            </div>
            </div>

            <div class="form-group col-md-12 ">
            <label><h4>1.6 TAGLINE PERUSAHAAN</h4></label>
                <input type="text" name="tagline_start_up" style="text-transform:uppercase" class="form-control" value="<?php echo $su->tagline_start_up?>" class="form-control">
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

        <?php endforeach; ?>

</div>
</div>