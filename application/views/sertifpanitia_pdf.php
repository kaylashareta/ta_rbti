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
        <?php $no=1; foreach($cetakpanitia as $c) :  ?>
        <center><h2 >BAB 1</h2>
        <h2 >START UP</h2></center><br><br>
        <h3 class="text_content">1.1 Nama Start Up</h3><p class="text_content2"><?php echo strtoupper ($c->nama_panitia); ?></p>
     
        <?php endforeach; ?>


        </div>
        </body>

        </html>
      