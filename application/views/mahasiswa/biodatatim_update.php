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
      <form method="post" action="<?php echo base_url('mahasiswa/biodatatim/update_aksi')?>" enctype="multipart/form-data">
           
                <?php foreach($biodatatim as $bt) : ?>   
                
        <div class="alert alert-danger col-md-12" role="alert">
            <i class="fas fa-user-friends"></i><h3>A. Hustler</h3></div>
            <div class="form-group col-md-12 ">
                <label><h4>2.1 NAMA HUSTLER</h4></label>
                <input type="text" style="text-transform:uppercase" name="nama_hustler" class="form-control" class="form-control" value="<?php echo $bt->nama_hustler?>"> 
                <input type="hidden" name="id_biodatatim" value="<?php echo $bt->id_biodatatim?>">
                <?php echo form_error('nama_hustler','<div class="text-danger small" ml-3>')?>
            </div>
       
            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.2 ALAMAT HUSTLER</h4></label>
                <textarea id="content1" type="text" rows="5" name="alamat_hustler" class="form-control"><?php echo $bt->alamat_hustler?></textarea>
                <?php echo form_error('alamat_hustler','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.3 TELP HUSTLER</h4></label>
                <input type="text"  name="telp_hustler" class="form-control" value="<?php echo $bt->telp_hustler?>">
                <?php echo form_error('telp_hustler','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.4 EMAIL HUSTLER</h4></label>
                <input type="text"  name="email_hustler" class="form-control" value="<?php echo $bt->email_hustler?>">
                <?php echo form_error('email_hustler','<div class="text-danger small" ml-3>')?>
            </div>
            </div>


            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.5 TUGAS HUSTLER</h4></label>
                <textarea id="content2"  type="" rows="5" name="tugas_hustler" class="form-control"><?php echo $bt->tugas_hustler?></textarea>
                <?php echo form_error('tugas_hustler','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="alert alert-danger col-md-12" role="alert">
            <i class="fas fa-user-friends"></i><h3>B. Hipster</h3></div>
            <div class="form-group col-md-12 ">
                <label><h4>2.6 NAMA HIPSTER</h4></label>
                <input type="text" style="text-transform:uppercase" name="nama_hipster" class="form-control" class="form-control" value="<?php echo $bt->nama_hipster?>"> 
                <?php echo form_error('nama_hipster','<div class="text-danger small" ml-3>')?>
            </div>
       
            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.7 ALAMAT HIPSTER</h4></label>
                <textarea id="content3" type="" rows="5" name="alamat_hipster" class="form-control"><?php echo $bt->alamat_hipster?></textarea>
                <?php echo form_error('alamat_hipster','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.8 TELP HIPSTER</h4></label>
                <input type="text"  name="telp_hipster" class="form-control" value="<?php echo $bt->telp_hipster?>">
                <?php echo form_error('telp_hipster','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.9 EMAIL HIPSTER</h4></label>
                <input type="text"  name="email_hipster" class="form-control" value="<?php echo $bt->email_hipster?>">
                <?php echo form_error('email_hipster','<div class="text-danger small" ml-3>')?>
            </div>
            </div>

            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.10 TUGAS HIPSTER</h4></label>
                <textarea id="content4" type="" rows="5" name="tugas_hipster" class="form-control"><?php echo $bt->tugas_hipster?></textarea>
                <?php echo form_error('tugas_hipster','<div class="text-danger small" ml-10>')?>
            </div>

        
            <div class="alert alert-danger col-md-12" role="alert">
            <i class="fas fa-user-friends"></i><h3>C. Hacker</h3></div>
            <div class="form-group col-md-12 ">
                <label><h4>2.11 NAMA HACKER</h4></label>
                <input type="text" style="text-transform:uppercase" name="nama_hacker" class="form-control" class="form-control" value="<?php echo $bt->nama_hacker?>"> 
                <?php echo form_error('nama_hustler','<div class="text-danger small" ml-3>')?>
            </div>
       
            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.12 ALAMAT HACKER</h4></label>
                <textarea id="content5" type="" rows="5" name="alamat_hacker" class="form-control"><?php echo $bt->alamat_hacker?></textarea>
                <?php echo form_error('alamat_hacker','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="row">
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.13 TELP HACKER</h4></label>
                <input type="text"  name="telp_hacker" class="form-control" value="<?php echo $bt->telp_hacker?>">
                <?php echo form_error('telp_hacker','<div class="text-danger small" ml-3>')?>
                <h6>(Hanya angka)</h6>
            </div>
            <div class="col-md-6 form-group mb-3">
            <label><h4>2.14 EMAIL HACKER</h4></label>
                <input type="text"  name="email_hacker" class="form-control" value="<?php echo $bt->email_hacker?>">
                <?php echo form_error('email_hacker','<div class="text-danger small" ml-3>')?>
            </div>
            </div>


            <div class="form-group col-md-12">
                <label for="textarea"><h4>2.15 TUGAS HACKER</h4></label>
                <textarea id="content6" type="" rows="5" name="tugas_hacker" class="form-control"><?php echo $bt->tugas_hacker?></textarea>
                <?php echo form_error('tugas_hacker','<div class="text-danger small" ml-10>')?>
            </div>

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


            
                 



            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>

      
        </div>

        <?php endforeach; ?>

</div>
</div>