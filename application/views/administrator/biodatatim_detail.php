<div class="container-fluid">

    <div class="alert alert-success" roles="alert">
        <i class="fas fa-user-friends"></i> BAB 2 - BIODATA TIM DETAIL
          
    </div>
    <div>
    <?php echo anchor('administrator/biodatatim/','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
          
    </div>

    <?php echo $this->session->flashdata('pesan')?>

    <table class="table table-bordered table-stripped table-hover">
    <?php 
        foreach ($admbiodatadetail as $abid) : ?>
    <tr>
                           <th>NAMA HUSTLER</th>
                           <td><?php echo strtoupper ($abid->nama_hustler); ?></td>
                           
                     
                     </tr>
                     <tr>
                           <th>ALAMAT HUSTLER</th>
                           <td><?php echo $abid->alamat_hustler ?></td>
                           

                     </tr>
                     <tr>
                           <th>TELP HUSTLER</th>
                           <td><?php echo $abid->telp_hustler ?></td>
                           

                     </tr>
                     <tr>
                           <th>EMAIL HUSTLER</th>
                           <td><?php echo $abid->email_hustler ?></td>
                          

                     </tr>
                     <tr>
                           <th>TUGAS HUSTLER</th>
                           <td><?php echo $abid->tugas_hustler ?></td>
                          
                     </tr>
                     <tr>
                           <th>NAMA HIPSTER</th>
                           <td><?php echo strtoupper ($abid->nama_hipster); ?></td>
                         
                     </tr>
                     <tr>
                           <th>ALAMAT HIPSTER</th>
                           <td><?php echo $abid->alamat_hipster ?></td>
                         

                     </tr>
                     <tr>
                           <th>TELP HIPSTER</th>
                           <td><?php echo $abid->telp_hipster ?></td>
                         

                     </tr>
                     <tr>
                           <th>EMAIL HIPSTER</th>
                           <td><?php echo $abid->email_hipster ?></td>
                      
                     

                     </tr>
                     <tr>
                           <th>TUGAS HIPSTER</th>
                           <td><?php echo $abid->tugas_hipster ?></td>
                       
                     

                     </tr>
                     <tr>
                           <th>NAMA HACKER</th>
                           <td><?php echo strtoupper ($abid->nama_hacker); ?></td>
                        

                     </tr>
                     <tr>
                           <th>ALAMAT HACKER</th>
                           <td><?php echo $abid->alamat_hacker ?></td>
                    

                     </tr>
                     <tr>
                           <th>TELP HACKER</th>
                           <td><?php echo $abid->telp_hacker ?></td>
                        

                     </tr>
                     <tr>
                           <th>EMAIL HACKER</th>
                           <td><?php echo $abid->email_hacker ?></td>
                        

                     </tr>
                     <tr>
                           <th>TUGAS HACKER</th>
                           <td><?php echo $abid->tugas_hacker ?></td>
                        

                     </tr>
                    
  
        <?php endforeach; ?>

</div>