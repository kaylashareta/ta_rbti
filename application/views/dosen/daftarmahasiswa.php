
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                     <h2>Daftar Mahasiswa</h2>
                                                                                                                                                                                                                            </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <table class="table table-bordered table-stripped table-hover" >
                     <tr>
                           <th>NO</th>
                           <th>NIM MAHASISWA</th>
                           <th>NAMA MAHASISWA</th>
                           <th>KELAS MAHASISWA</th>
                         
                     </tr>
                     <?php $no=1; foreach($daftarmhs as $dm) :  ?>
                     <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $dm->nim_mhs ?></td>
                        <td><?php echo $dm->nama_mhs ?></td>
                        <td><?php echo $dm->kelas_mhs ?></td>
                        
                     </tr>
                     <?php endforeach; ?>
                    
                     
                     </table>
                     <br>
                     
                  </div>
                  <br>
                     <?php echo anchor('dosen/dashboard','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                     
               </div>
               
            </div>
         </div>
      </div>
      <!-- end cases -->