
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Daftar E-Proposal</h2>
                                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
                  <?php $no=1; foreach($detailpro as $d) :  ?>
<h2>A. START UP</h2>
<h3>Nama Start Up</h3><p class="text_content"><?php echo strtoupper ($d->nama_start_up); ?></p>
<h3>Visi Start Up</h3><p class="text_content"><?php echo $d->visi_start_up ?></p>
<h3>Misi Start Up</h3><p class="text_content"><?php echo $d->misi_start_up ?></p>
<h3>Struktur Start Up</h3><img src="<?php echo base_url().'assets/files/'.$d->struktur_start_up?>">
<h3>Logo Start Up</h3><img src="<?php echo base_url().'assets/files/'.$d->logo_start_up?>">
<h3>Tagline Start Up</h3><p class="text_content"><?php echo strtoupper ($d->tagline_start_up) ?></p>
<br>
<br>
<br>

<h2>B. BIODATA TIM</h2>
<h2>1. Hustler</h2>
<h3>Nama Hustler</h3><p class="text_content"><?php echo strtoupper ($d->nama_hustler); ?></p>
<h3>Alamat Hustler</h3><p class="text_content"><?php echo $d->alamat_hustler ?></p>
<h3>Telepon Hustler</h3><p class="text_content"><?php echo $d->telp_hustler ?></p>
<h3>E-Mail Hustler</h3><p class="text_content"><?php echo $d->email_hustler ?></p>
<h3>Tugas Hustler</h3><p class="text_content"><?php echo $d->tugas_hustler ?></p>
<br>
<h2>2. Hipster</h2>
<h3>Nama Hipster</h3><p class="text_content"><?php echo strtoupper ($d->nama_hipster); ?></p>
<h3>Alamat Hipster</h3><p class="text_content"><?php echo $d->alamat_hipster ?></p>
<h3>Telepon Hipster</h3><p class="text_content"><?php echo $d->telp_hipster ?></p>
<h3>E-Mail Hipster</h3><p class="text_content"><?php echo $d->email_hipster ?></p>
<h3>Tugas Hipster</h3><p class="text_content"><?php echo $d->tugas_hipster ?></p>
<br>
<h2>3. Hacker</h2>
<h3>Nama Hacker</h3><p class="text_content"><?php echo strtoupper ($d->nama_hacker); ?></p>
<h3>Alamat Hacker</h3><p class="text_content"><?php echo $d->alamat_hacker ?></p>
<h3>Telepon Hacker</h3><p class="text_content"><?php echo $d->telp_hacker ?></p>
<h3>E-Mail Hacker</h3><p class="text_content"><?php echo $d->email_hacker ?></p>
<h3>Tugas Hacker</h3><p class="text_content"><?php echo $d->tugas_hacker ?></p>
<br>
<br>
<br>
<br>

<h2>C. REVIEW PRODUK</h2>
<h3>Nama Aplikasi</h3><p class="text_content"><?php echo strtoupper ($d->nama_solusi); ?>>/p>
<h3>Deskripsi Aplikasi</h3><p class="text_content"><?php echo $d->deskripsi_solusi ?></p>
<h3>Logo Aplikasi</h3><img src="<?php echo base_url().'assets/files/'.$d->logo_solusi?>">
<h3>Preview UI/UX-1</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui1_solusi?>">
<h3>Preview UI/UX-2</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui2_solusi?>">
<h3>Preview UI/UX-3</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui3_solusi?>">
<h3>Preview UI/UX-4</h3><img src="<?php echo base_url().'assets/files/'.$d->prev_ui4_solusi?>">
<h3>Tahun Pembuatan</h3><p class="text_content"><?php echo $d->tahun_buat_solusi ?></p>
<h3>Link Video Aplikasi</h3><p class="text_content"><?php echo $d->link_vid_solusi ?></p>
<h3>Link Product Aplikasi</h3><p class="text_content"><?php echo $d->link_prod_solusi ?></p>
<h3>Teknologi yang digunakan</h3><p class="text_content"><?php echo $d->teknologi_solusi ?></p>
<br>
<br>
<br>

<h2>D. PAPER PITCHING</h2>
<h3>Ceritakan tentang Latar Belakang anda dan co-founder anda (jika ada)</h3><p class="text_content"><?php echo $d->latar_belakang_pp ?></p>
<h3>Permasalahan apa yang ingin anda atasi melalui usaha anda?</h3><p class="text_content"><?php echo $d->permasalahan_pp ?></p>
<h3>Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?</h3><p class="text_content"><?php echo $d->solusi_pp ?></p>
<h3>Bagaimana progres/traction usaha anda sejauh ini?</h3><p class="text_content"><?php echo $d->progres_pp ?></p>
<h3>Siapa saja competitor anda saat ini? Sebutkan</h3><p class="text_content"><?php echo $d->kompetitor_pp ?></p>
<h3>Apakah ada usaha/serupa yang sukses? Baik di nasional atau internasional? Sebutkan?</h3><p class="text_content"><?php echo $d->kompetitor2_pp ?></p>
<h3>Siapa target oengguna solusi anda?</h3><p class="text_content"><?php echo $d->target_pp ?></p>
<h3>Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda?</h3><p class="text_content"><?php echo $d->data_pp ?></p>
<h3>Bagaimana Proses Bisnis dari aplikasi/solusi yang dibuat? Boleh dengan gambar</h3><p class="text_content"><?php echo $d->proses_bisnis_pp ?></p>
                        <img src="<?php echo base_url().'assets/files/'.$d->proses_bisnis2_pp?>">
<h3>Bagaimana proses/tahapan mewujudkan solusi yang akan anda buat?</h3><p class="text_content"><?php echo $d->tahapan_pp ?></p>
<h3>Kelebihan dari solusi/aplikasi yang ditawarkan daripada competitor (jika ada)</h3><p class="text_content"><?php echo $d->kelebihan_pp ?></p>
<br>
<br>
<br>

<h2>E. BUSINESS PLAN</h2>
<h3>Customer</h3><p class="text_content"><?php echo $d->cust_plan ?></p>
<h3>Value Propositions</h3><p class="text_content"><?php echo $d->value_plan ?></p>
<h3>Channels</h3><p class="text_content"><?php echo $d->channels_plan ?></p>
<h3>Relationships</h3><p class="text_content"><?php echo $d->relation_plan ?></p>
<h3>Key Activities</h3><p class="text_content"><?php echo $d->key_act_plan ?></p>
<h3>Key Resource</h3><p class="text_content"><?php echo $d->key_res_plan ?></p>
<h3>Key Partners</h3><p class="text_content"><?php echo $d->key_partner_plan ?></p>
<h3>Cost Structure</h3><p class="text_content"><?php echo $d->cost_plan ?></p>
<h3>Revenue Steams</h3><p class="text_content"><?php echo $d->revenue_plan ?></p>

<?php endforeach; ?>

<?php echo anchor('dosen/dashboard','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                     

                    

                    
                     
                     </table>
                     <br>
                     <br>
                     
                  </div>
                 
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->