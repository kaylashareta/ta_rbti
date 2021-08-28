<!DOCTYPE html>
        <html lang="en"><head>
        <title>Cetak E-Proposal RBTI</title>
        <style>
            
            .text_content{
                text-indent: 1px;
                padding-left: 60px;
                padding-right: 80px;
                text-align : justify;
            }
            .text_content1{
                text-indent: 50px;
                padding-left: 15px;
                padding-right: 25px;
                text-align : justify;
            }

            /* .text_content2{
                text-indent: 30px;
                padding-left: 75px;
                padding-right: 80px;
                text-align : justify;
                
                
            } */
            
            /* .text_content3{
                display: inline;
                max-width: 100px;
                text-indent: 50px;
                padding-left: 75px;
                padding-right: 80px;
                margin-left: 75px;
                margin-right: 80px;
                text-align : justify;
            } */
            
            p {
                text-indent: 50px;
                margin-left: 80px;
                margin-right: 80px;
                text-align : justify;
            }
            
            ol li {
                margin-left: 75px;
                margin-right: 80px;
                text-align : justify;

            }

            ul li {
                margin-left: 75px;
                margin-right: 80px;
                text-align : justify;

            }

            .container{
                max-width: 700px;
            }

            img {
                width: 270px;
                margin-left:220px;
                margin-right:100px;
            }

            img.logo {
                width: 50px;
            }

            .text-center {
                text-align: center;
            }

            @font-face {
                font-family: 'Elegance';
                font-weight: normal;
                font-style: normal;
                font-variant: normal;
                src: url("http://eclecticgeek.com/dompdf/fonts/Elegance.ttf") format("truetype");
            }
            body {
                font-family: Elegance, sans-serif;
            }

            .page_break { page-break-before: always; }
        </style>


        <head>
        <center>
        <h1>PROPOSAL</h1>
        <h1>RANCANGAN BISNIS TI</h1>
        </center>
        </head>

        <body>
        <div class="container">
        <?php $no=1; foreach($cetakpro as $c) :  ?>
        <center><h2 >BAB 1</h2>
        <h2 >START UP</h2></center><br><br>
        <h3 class="text_content">1.1 Nama Start Up</h3><p class="text_content2"><?php echo strtoupper ($c->nama_su); ?></p>
        <br>
        <h3 class="text_content">1.2 Visi Start Up</h3><p class="text_content3"><?php echo $c->visi_su ?></p>
        <br>
        <h3 class="text_content">1.3 Misi Start Up</h3><p class="text_content3"><?php echo $c->misi_su ?></p>
        <br>
        <h3 class="text_content">1.4 Struktur Start Up</h3><img  src="<?php echo base_url().'assets/files/'.$c->struktur_su?>"><br><br>
        <br>
        <h3 class="text_content">1.5 Logo Start Up</h3><img src="<?php echo base_url().'assets/files/'.$c->logo_su?>"><br><br>
        <br>
        <h3 class="text_content">1.6 Tagline Start Up</h3><p class="text_content2"><?php echo strtoupper ($c->tagline_su) ?></p>
        <br>
        <br>
        <br>
        <br>

        <div class="page_break"></div>
        <center><h2 >BAB 2</h2>
        <h2 >BIODATA TIM</h2></center><br><br>
        <h2 class="text_content1" class="text_content1">1. HUSTLER</h2><br>
        <h3 class="text_content">2.1.1 Nama Hustler</h3><p class="text_content2"><?php echo strtoupper ($c->nama_hustler); ?></p><br>
        <h3 class="text_content">2.2.2 Alamat Hustler</h3><p class="text_content3"><?php echo $c->alamat_hustler ?></p><br>
        <h3 class="text_content">2.3.3 Telepon Hustler</h3><p class="text_content2"><?php echo $c->telp_hustler ?></p><br>
        <h3 class="text_content">2.4.4 E-Mail Hustler</h3><p class="text_content2"><?php echo $c->email_hustler ?></p><br>
        <h3 class="text_content">2.5.5 Tugas Hustler</h3><p class="text_content3"><?php echo $c->tugas_hustler ?></p><br>
        <br><br>
        <h2 class="text_content1" class="text_content1">2. HIPSTER</h2>
        <h3 class="text_content">2.2.1 Nama Hipster</h3><p class="text_content2"><?php echo strtoupper ($c->nama_hipster); ?></p><br>
        <h3 class="text_content">2.2.2 Alamat Hipster</h3><p class="text_content3"><?php echo $c->alamat_hipster ?></p><br>
        <h3 class="text_content">2.2.3 Telepon Hipster</h3><p class="text_content2"><?php echo $c->telp_hipster ?></p><br>
        <h3 class="text_content">2.2.4 E-Mail Hipster</h3><p class="text_content2"><?php echo $c->email_hipster ?></p><br>
        <h3 class="text_content">2.2.5 Tugas Hipster</h3><p class="text_content3"><?php echo $c->tugas_hipster ?></p><br>
        <br><br>
        <h2 class="text_content1" class="text_content1">3. HACKER</h2>
        <h3 class="text_content">2.3.1 Nama Hacker</h3><p class="text_content2"><?php echo strtoupper ($c->nama_hacker); ?></p><br>
        <h3 class="text_content">2.3.2 Alamat Hacker</h3><p class="text_content3"><?php echo $c->alamat_hacker ?></p><br>
        <h3 class="text_content">2.3.3 Telepon Hacker</h3><p class="text_content2"><?php echo $c->telp_hacker ?></p><br>
        <h3 class="text_content">2.3.4 E-Mail Hacker</h3><p class="text_content2"><?php echo $c->email_hacker ?></p><br>
        <h3 class="text_content">2.3.5 Tugas Hacker</h3><p class="text_content3"><?php echo $c->tugas_hacker ?></p>
        <br><br>
        <br>
        <br>
        <br>

        <div class="page_break"></div>
        <center><h2> BAB 3</h2>
        <h2 >REVIEW PRODUK</h2></center>
        <h3 class="text_content">3.1 Nama Aplikasi</h3><p class="text_content2"><?php echo strtoupper ($c->nama_solusi); ?></p><br>
        <h3 class="text_content">3.2 Deskripsi Aplikasi</h3><p class="text_content3"><?php echo $c->deskripsi_solusi ?></p><br>
        <h3 class="text_content">3.3 Logo Aplikasi</h3><img src="<?php  echo base_url().'./assets/files/'.$c->logo_solusi?>"><br><br><br>
        <h3 class="text_content">3.4 Preview UI/UX-1</h3><img src="<?php  echo base_url().'./assets/files/'.$c->prev_ui1_solusi?>"><br><br><br>
        <h3 class="text_content">3.5 Preview UI/UX-2</h3><img src="<?php  echo base_url().'./assets/files/'.$c->prev_ui2_solusi?>"><br><br><br>
        <h3 class="text_content">3.6 Preview UI/UX-3</h3><img src="<?php  echo base_url().'./assets/files/'.$c->prev_ui3_solusi?>"><br><br><br>
        <h3 class="text_content">3.7 Preview UI/UX-4</h3><img src="<?php  echo base_url().'./assets/files/'.$c->prev_ui4_solusi?>"><br><br><br><br>
        <h3 class="text_content">3.8 Tahun Pembuatan</h3><p class="text_content2"><?php echo $c->tahun_buat_solusi ?></p><br>
        <h3 class="text_content">3.9 Link Video Aplikasi</h3><p class="text_content2"><?php echo $c->link_vid_solusi ?></p><br>
        <h3 class="text_content">3.10 Link Product Aplikasi</h3><p class="text_content2"><?php echo $c->link_prod_solusi ?></p><br>
        <h3 class="text_content">3.11 Teknologi yang digunakan</h3><p class="text_content2"><?php echo $c->teknologi_solusi ?></p><br>
        <br>
        <br>
        <br>
        <br>

        <div class="page_break"></div>
        <center><h2>BAB 4</h2>
        <h2 >PAPER PITCHING</h2></center>
        <h3 class="text_content">4.1 Ceritakan tentang Latar Belakang anda dan co-founder anda (jika ada)</h3><p class="text_content3"><?php echo $c->latar_belakang_pp ?></p><br>
        <h3 class="text_content">4.2 Permasalahan apa yang ingin anda atasi melalui usaha anda?</h3><p class="text_content3"><?php echo $c->permasalahan_pp ?></p><br>
        <h3 class="text_content">4.3 Solusi apa yang anda tawarkan untuk mengatasi masalah tersebut?</h3><p class="text_content3"><?php echo $c->solusi_pp ?></p><br>
        <h3 class="text_content">4.4 Bagaimana progres/traction usaha anda sejauh ini?</h3><p class="text_content3"><?php echo $c->progres_pp ?></p><br>
        <h3 class="text_content">4.5 Siapa saja competitor anda saat ini? Sebutkan</h3><p class="text_content3"><?php echo $c->kompetitor_pp ?></p><br>
        <p><h3 class="text_content">4.6 Apakah ada usaha/serupa yang sukses? Baik di nasional atau internasional? Sebutkan?</h3></p><p class="text_content3"><?php echo $c->kompetitor2_pp ?></p><br>
        <h3 class="text_content">4.7 Siapa target Pengguna solusi anda?</h3><p class="text_content3"><?php echo $c->target_pp ?></p><br>
        <h3 class="text_content">4.8 Data apa yang anda gunakan sehingga anda bisa menuliskan target pengguna dari solusi anda?</h3><p class="text_content3"><?php echo $c->data_pp ?></p><br>
        <h3 class="text_content">4.9 Bagaimana Proses Bisnis dari aplikasi/solusi yang dibuat?</h3><p class="text_content3"><?php echo $c->proses_bisnis_pp ?></p><br>
                                <img src="<?php  echo base_url().'./assets/files/'.$c->proses_bisnis2_pp?>"><br><br><br>
        <h3 class="text_content">4.10 Bagaimana proses/tahapan mewujudkan solusi yang akan anda buat?</h3><p class="text_content3"><?php echo $c->tahapan_pp ?></p><br>
        <h3 class="text_content">4.11 Kelebihan dari solusi/aplikasi yang ditawarkan daripada competitor (jika ada)</h3><p class="text_content3"><?php echo $c->kelebihan_pp ?></p><br>
        <br>
        <br>
        <br>
        <br>

        <div class="page_break"></div>
        <center><h2>BAB 5</h2>
        <h2 >BUSINESS PLAN</h2></center>
        <h3 class="text_content">5.1 Customer</h3><p class="text_content3"><?php echo $c->cust_plan ?></p><br>
        <h3 class="text_content">5.2 Value Propositions</h3><p class="text_content3"><?php echo $c->value_plan ?></p><br>
        <h3 class="text_content">5.3 Channels</h3><p class="text_content3"><?php echo $c->channels_plan ?></p><br>
        <h3 class="text_content">5.4 Relationships</h3><p class="text_content3"><?php echo $c->relation_plan ?></p><br>
        <h3 class="text_content">5.5 Key Activities</h3><p class="text_content3"><?php echo $c->key_act_plan ?></p><br>
        <h3 class="text_content">5.6 Key Resource</h3><p class="text_content3"><?php echo $c->key_res_plan ?></p><br>
        <h3 class="text_content">5.7 Key Partners</h3><p class="text_content3"><?php echo $c->key_partner_plan ?></p><br>
        <h3 class="text_content">5.8 Cost Structure</h3><p class="text_content3"><?php echo $c->cost_plan ?></p><br>
        <h3 class="text_content">5.9 Revenue Steams</h3><p class="text_content3"><?php echo $c->revenue_plan ?></p><br>

        <?php endforeach; ?>


        </div>
        </body>

        </html>
      