
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>E-Proposal Rancangan Bisnis TI</h2>
                     <h3>NIM : <?php echo $this->session->userdata('uname_user')?></i></h3>
                     <br><br>

                     <div class="row d_flex" >
                        <div class=" col-md-12" >
                           <div class="latest text_align_center" >
                     <?php echo anchor('mahasiswa/eproposal/input','<button class="btn btn-sm btn-primary mb-3"></i> Tambah Proposal </button> ')?>
                     <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>JUDUL PROPOSAL</th>
                           <th>BAB 1<br>STARTUP</th>
                           <th>BAB 2<br>BIODATA TIM</th>
                           <th>BAB 3<br>REVIEW PRODUK</th>
                           <th>BAB 4<br>PAPER PITCHING</th>
                           <th>BAB 5<br>BUSINESS PLAN</th>
                           <th>CETAK</th>
               
                     </tr>  
 
                     <?php $no=1; foreach($masterproposal as $mp) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $mp->judul_proposal ?><br>(Tema : <?php echo $mp->tema_proposal ?>)</td>
                        <td width="20px"><?php echo anchor('mahasiswa/startup/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="START UP">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/biodatatim/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BIODATA TIM">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/reviewproduk/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="REVIEW PRODUK">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/paperpitching/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="PAPER PITCHING">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php echo anchor('mahasiswa/businessplan/index/'.$mp->id_proposal,'<div class="btn btn=sm btn-primary" data-toggle="tooltip" data-placement="top" title="BUSINESS PLAN">
                           <i class="fa fa-eye"></i></div>') ?></td>
                        <td width="10px"><?php  echo anchor('mahasiswa/cetak/cetakProposal/'.$mp->id_proposal,'<div class="btn btn=sm btn-success" data-toggle="tooltip" data-placement="top" title="CETAK PDF">
                           <i class="fa fa-download"></i></div>') ?></td>
                        
                     </tr>
                     <?php endforeach; ?>

                  
                     </table>
                     <br>
               
                   </div>
               </div>
                   


                     </div>