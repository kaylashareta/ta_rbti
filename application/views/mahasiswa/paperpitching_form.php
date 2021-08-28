<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 4</h2>
                     <h1>Paper Pitching</h1>
                     <p>Dalam pengisian, anda bebas mulai mengisi dari bab berapapun, dimanapun, dan kapanpun
                         </div>
               </div>
            </div>


      <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
    


        <form method="post" action="<?php echo base_url('mahasiswa/paperpitching/input_aksi')?>" enctype="multipart/form-data">
        
                <input type="hidden" name="nim_pp"  class="form-control" value="<?php echo $this->session->uname_user ?>">
                <input type="hidden" name="tanggal_submit_pp"  class="form-control" value="<?php echo date("Y-m-d") ?>">
         
            </div>

            <div class="row">
            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.1 LATAR BELAKANG</h4></label>
                <textarea id="content11"  type="" rows="5" name="latar_belakang_pp" placeholder="Ceritakan tentang latar belakang anda dan co-founder anda (jjika ada)" class="form-control"></textarea>
                <?php echo form_error('latar_belakang_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.2 PERMASALAHAN YANG INGIN DIATASI</h4></label>
                <textarea id="content12" type="" rows="5" name="permasalahan_pp" placeholder="Permasalahan apa ingin anda atasi melalui usaha anda?" class="form-control"></textarea>
                <?php echo form_error('permasalahan_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.3 SOLUSI YANG ADA TAWARKAN</h4></label>
                <textarea id="content13" type="" rows="5" name="solusi_pp" placeholder="Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?" class="form-control"></textarea>
                <?php echo form_error('solusi_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.4 PROGRES USAHA</h4></label>
                <textarea id="content14" type="" rows="5" name="progres_pp" placeholder="Bagaimana progres/traction usaha anda sejauh ini?" class="form-control"></textarea>
                <?php echo form_error('progres_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.5 KOMPETITOR USAHA</h4></label>
                <textarea id="content15" type="" rows="5" name="kompetitor_pp" placeholder="Siapa saja kompetitor anda saat ini? Sebutkan" class="form-control"></textarea>
                <?php echo form_error('kompetitor_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.6 USAHA SERUPA</h4></label>
                <textarea id="content16"  type="" rows="5" name="kompetitor2_pp" placeholder="Adakah usaha/serupa yang sukses? Baik di nasional atau internasional? Sebutkan" class="form-control"></textarea>
                <?php echo form_error('kompetitor2_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.7 TARGET USAHA</h4></label>
                <textarea id="content17" type="" rows="5" name="target_pp" placeholder="Siapa target pengguna solusi anda? Sebutkan" class="form-control"></textarea>
                <?php echo form_error('target_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.8 DATA YANG DIGUNAKAN</h4></label>
                <textarea id="content18" type="" rows="5" name="data_pp" placeholder="Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda" class="form-control"></textarea>
                <?php echo form_error('data_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.9 PROSES BISNIS</h4></label>
                <textarea id="content19" type="" rows="5" name="proses_bisnis_pp" placeholder="Bagaimana proses bisnis dari aplikasi/solusi yang dibuat. Boleh dengan gambar" class="form-control"></textarea>
                <?php echo form_error('proses_bisnis_pp','<div class="text-danger small" ml-10>')?>
            </div>
            <div class="form-group col-md-6">
            <label for="exampleFormControlFile1"><h4>4.10 Pilih File Logo Perusahaan</h4></label>
            <br>
                <input type="file" name="proses_bisnis2_pp"  id="img" accept="image/*" placeholder="Masukkan File Proses Bisnis" class="form-control-file" id="exampleFormControlFile1">
                <?php echo form_error('proses_bisnis2_pp','<div class="text-danger small" ml-3>')?>
                <h6>(JPG/JPEG/TIFF/PNG Max 2 MB)</h6>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>4.11 PROSES MEWUJUDKAN</h4></label>
                <textarea id="content20" type="" rows="5" name="tahapan_pp" placeholder="Bagaimana proses/tahapan mewujudkan solusi yang akan anda buat" class="form-control"></textarea>
                <?php echo form_error('tahapan_pp','<div class="text-danger small" ml-10>')?>
            </div>

            <div class="form-group col-md-6">
                <label for="textarea"><h4>KELEBIHAN APLIKASI</h4></label>
                <textarea id="content21" type="" rows="5" name="kelebihan_pp" placeholder="Kelebihan dari solusi/aplikasi yang ditawarkan daripada kompetitor (jika ada)" class="form-control"></textarea>
                <?php echo form_error('kelebihan_pp','<div class="text-danger small" ml-10>')?>
            </div>

            </div>

        
            

            <button type="submit" class='btn btn-primary'>Simpan</button>
            <br>
            <br>

        </form>
        <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                CKEDITOR.replace( 'content11' );
                CKEDITOR.replace( 'content12' );
                CKEDITOR.replace( 'content13' );
                CKEDITOR.replace( 'content14' );
                CKEDITOR.replace( 'content15' );
                CKEDITOR.replace( 'content16' );
                CKEDITOR.replace( 'content17' );
                CKEDITOR.replace( 'content18' );
                CKEDITOR.replace( 'content19' );
                CKEDITOR.replace( 'content20' );
                CKEDITOR.replace( 'content21' );
            </script>
      
        </div>
        </div>
        </div>
        </div>