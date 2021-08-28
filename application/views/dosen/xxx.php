 
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 2</h2>
                     <h1>Biodata Tim</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div> 
               </div> 
            </div>
            <div class="row d_flex" >
               <div class=" col-md-12" >
                  <div class="latest text_align_center" >
                  <form method="post" action="<?= base_url('dosen/daftarproposal/verifikasi2/'.@$verif2['id_proposal']) ?>" enctype="multipart/form-data">  
                 
                  <!-- nama hustler -->
               
                  <input type="hidden" name="id_proposal" value="<?= @$verif2['id_proposal']; ?>">
                    
                   <div class="row">
                        <div class="col-md-7 form-group mb-3">
                        <label><h4>2.1 NAMA HUSTLER</h4></label>
                        <input type="text" class="form-control" id="nama_start_up" name="nama_start_up" value="<?= @$verif2['nama_hustler']; ?>" disabled> 
                        
                    </div>
                        
                    <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_nama_hustler" class="form-control"  value="<?php echo $verif2['status_nama_hustler']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_nama_hustler'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div>

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_hustler" class="form-control" > <?= @$verif2['catnama_hustler']; ?></textarea>
                        </div>
                        </div>

                  <!-- alamat hustler -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.2 ALAMAT HUSTLER</h4></label>
                  <textarea id="content1" type="text" rows="5" name="alamat_hustler" class="form-control" disabled> <?= @$verif2['alamat_hustler']; ?></textarea>
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_alamat_hustler" class="form-control"  value="<?php echo $verif2['status_alamat_hustler']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_alamat_hustler'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catalamat_hustler" class="form-control" ><?= @$verif2['catalamat_hustler']; ?></textarea>
                        </div>
                  </div>


                  <!-- telp  hustler -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.3 TELPON HUSTLER</h4></label>
                  <input type="text" class="form-control" id="telp_hustler" name="telp_hustler" value="<?= @$verif2['telp_hustler']; ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_telp_hustler" class="form-control"  value="<?php echo $verif2['status_telp_hustler']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_telp_hustler'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattelp_hustler" class="form-control" ><?= @$verif2['cattelp_hustler']; ?></textarea>
                        </div>
                  </div>


                  <!-- email hustler -->
                  <div class="row"><div class="col-md-7 form-group mb-3">
                  <label><h4>2.4 EMAIL HUSTLER</h4></label>
                  <input type="text" class="form-control" id="email_hustler" name="email_hustler" value="<?= @$verif2['email_hustler']; ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_email_hustler" class="form-control"  value="<?php echo $verif2['status_email_hustler']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_email_hustler'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catemail_hustler" class="form-control" ><?= @$verif2['catemail_hustler']; ?></textarea>
                        </div>
                  </div>


                  <!-- tugas hustler -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.5 TUGAS HUSTLER</h4></label>
                  <textarea id="content2" type="text" rows="5" name="tugas_hustler" class="form-control" disabled> <?= @$verif2['tugas_hustler']; ?></textarea>
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_tugas_hustler" class="form-control"  value="<?php echo $verif2['status_tugas_hustler']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_tugas_hustler'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattugas_hustler" class="form-control" ><?= @$verif2['cattugas_hustler']; ?></textarea>
                        </div>
                  </div>



                  <!--hipster -->
                  <div class="alert alert-danger col-md-12" role="alert">
                  <i class="fas fa-user-friends"></i><h3>B. Hipster</h3></div>
                  <br>

                  <!-- nama hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.6 NAMA HIPSTER</h4></label>
                  <input type="text" class="form-control" id="nama_hipster" name="nama_hipster" value="<?= @$verif2['nama_hipster']; ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_nama_hipster" class="form-control"  value="<?php echo $verif2['status_nama_hipster']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_nama_hipster'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_hipster" class="form-control" ><?= @$verif2['catnama_hipster']; ?></textarea>
                        </div>
                  </div>

                  <!-- alamat hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.7 ALAMAT HIPSTER</h4></label>
                  <textarea id="content3" type="text" rows="5" name="alamat_hipster" class="form-control" disabled> <?= @$verif2['alamat_hipster']; ?></textarea>
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_alamat_hipster" class="form-control"  value="<?php echo $verif2['status_alamat_hipster']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_alamat_hipster'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catalamat_hipster" class="form-control" ><?= @$verif2['catalamat_hipster']; ?></textarea>
                        </div>
                  </div>


                  <!-- telp  hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.8 TELPON HIPSTER</h4></label>
                  <input type="text" class="form-control" id="telp_hipster" name="telp_hipster" value="<?= @$verif2['telp_hipster']; ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_telp_hipster" class="form-control"  value="<?php echo $verif2['status_telp_hipster']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_telp_hipster'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattelp_hipster" class="form-control" ><?= @$verif2['cattelp_hipster']; ?></textarea>
                        </div>
                  </div>


                  <!-- email hipster -->
                  <div class="row"><div class="col-md-7 form-group mb-3">
                  <label><h4>2.9 EMAIL HIPSTER</h4></label>
                  <input type="text" class="form-control" id="email_hipster" name="email_hipster" value="<?= @$verif2['email_hipster']; ?>" disabled> 
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_email_hipster" class="form-control"  value="<?php echo $verif2['status_email_hipster']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_email_hipster'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catemail_hipster" class="form-control" ><?= @$verif2['catemail_hipster']; ?></textarea>
                        </div>
                  </div>


                  <!-- tugas hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.10 TUGAS HIPSTER</h4></label>
                  <textarea id="content4" type="text" rows="5" name="tugas_hipster" class="form-control" disabled><?= @$verif2['tugas_hipster']; ?></textarea>
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_tugas_hipster" class="form-control"  value="<?php echo $verif2['status_tugas_hipster']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_tugas_hipster'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattugas_hipster" class="form-control" ><?= @$verif2['cattugas_hipster']; ?></textarea>
                        </div>
                  </div>


                  <!-- tugas hacker -->
                  <div class="alert alert-danger col-md-12" role="alert">
                  <i class="fas fa-user-friends"></i><h3>C. Hacker</h3></div>
                  <br>

                  <!-- nama hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.11 NAMA HACKER</h4></label>
                  <input type="text" class="form-control" id="nama_hacker" name="nama_hacker" value="<?= @$verif2['nama_hacker']; ?>" disabled> 
                  </div>
                  
                   
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_nama_hacker" class="form-control"  value="<?php echo $verif2['status_nama_hacker']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_nama_hacker'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catnama_hacker" class="form-control" ><?= @$verif2['catnama_hacker']; ?></textarea>
                        </div>
                  </div>

                  <!-- alamat hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.12 ALAMAT HACKER</h4></label>
                  <textarea id="content5" type="text" rows="5" name="alamat_hacker" class="form-control" disabled> <?= @$verif2['alamat_hacker']; ?></textarea>
                  </div>
                  
                  
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_alamat_hacker" class="form-control"  value="<?php echo $verif2['status_alamat_hacker']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_alamat_hacker'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catalamat_hacker" class="form-control" ><?= @$verif2['catalamat_hacker']; ?></textarea>
                        </div>
                  </div>


                  <!-- telp  hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.13 TELPON HACKER</h4></label>
                  <input type="text" class="form-control" id="telp_hacker" name="telp_hacker" value="<?= @$verif2['telp_hacker']; ?>" disabled> 
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_telp_hacker" class="form-control"  value="<?php echo $verif2['status_telp_hacker']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_telp_hacker'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattelp_hacker" class="form-control" ><?= @$verif2['cattelp_hacker']; ?></textarea>
                        </div>
                  </div>


                  <!-- email hacker -->
                  <div class="row"><div class="col-md-7 form-group mb-3">
                  <label><h4>2.14 EMAIL HACKER</h4></label>
                  <input type="text" class="form-control" id="email_hacker" name="email_hacker" value="<?= @$verif2['email_hacker']; ?>" disabled> 
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_email_hacker" class="form-control"  value="<?php echo $verif2['status_email_hacker']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_email_hacker'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="catemail_hacker" class="form-control" ><?= @$verif2['catemail_hacker']; ?></textarea>
                        </div>
                  </div>


                  <!-- tugas hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.15 TUGAS HACKER</h4></label>
                  <textarea id="content6" type="text" rows="5" name="tugas_hacker" class="form-control" disabled> <?= @$verif2['tugas_hacker']; ?></textarea>
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                        <label><h6>STATUS</h6></label>
                        <select name="status_tugas_hacker" class="form-control"  value="<?php echo $verif2['status_tugas_hacker']?>">
                        <option disabled selected>---Pilih Status---</option>
                                 <?php foreach ($status as $row) : ?>
                                 <option value="<?= $row['status'];?>" <?= ($verif2['status_tugas_hacker'] == $row['status']) ? 'selected' : '' ?>><?= $row['status'];?></option>
                                 <?php endforeach; ?>
                        </select>
                        </div> 
                  

                       <div class="col-md-3 form-group mb-3">
                       <label for="textarea"><h6>CATATAN</h6></label>
                        <textarea type="text" rows="1" name="cattugas_hacker" class="form-control" ><?= @$verif2['cattugas_hacker']; ?></textarea>
                        </div>
                  </div>



                


                  
                     
                     </table>
                     <button type="submit" class='btn btn-primary'>Simpan</button>
                     <br>
                     <br>
                     
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
      </div>
      <!-- end cases -->





  
   
<!-- cases -->
<div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>BAB 2</h2>
                     <h1>Biodata Tim</h1>
                     </div>                                                                                                                                                                                                     </p>
                  </div>
               </div>
            </div>
            <div class="row d_flex" > 
               <div class=" col-md-12" > 
                  <div class="latest text_align_center" >
                  <?php $no=1; foreach($detailpro2 as $bt) :  ?>
                     <?php echo anchor('dosen/daftarproposal/verifikasi2/'.$bt->id_proposal,'<button class="btn btn-sm btn-primary mb-3"></i> Verifikasi </button> ')?>
                     <div class="row"><div class="col-md-2 form-group mb-3">
                       <h6>Tanggal Submit</h6>
                        <input type="text" class="form-control" id="tanggal_submit_biodata" name="tanggal_submit_biodata" value="<?php echo (@$su->tanggal_submit_biodata); ?>" disabled> 
                  </div></div>
                  

                  <div class="alert alert-danger col-md-12" role="alert">
                  <i class="fas fa-user-friends"></i><h3>A. Hustler</h3></div>

                  <!-- nama hustler -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.1 NAMA HUSTLER</h4></label>
                  <input type="text" class="form-control" id="nama_hustler" name="nama_hustler" value="<?php echo strtoupper ($bt->nama_hustler); ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_nama_hustler" name="status_nama_hustler" value="<?php echo ($bt->status_nama_hustler); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="catnama_hustler" class="form-control" disabled> <?php echo $bt->catnama_hustler?></textarea>
                  </div>
                  </div>

                  <!-- alamat hustler -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.2 ALAMAT HUSTLER</h4></label>
                  <textarea id="content1" type="text" rows="5" name="alamat_hustler" class="form-control" disabled> <?php echo $bt->alamat_hustler?></textarea>
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_alamat_hustler" name="status_alamat_hustler" value="<?php echo ($bt->status_alamat_hustler); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="5" name="catalamat_hustler" class="form-control" disabled> <?php echo $bt->catalamat_hustler?></textarea>
                  </div>
                  </div>


                  <!-- telp  hustler -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.3 TELPON HUSTLER</h4></label>
                  <input type="text" class="form-control" id="telp_hustler" name="telp_hustler" value="<?php echo $bt->telp_hustler ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_telp_hustler" name="status_telp_hustler" value="<?php echo ($bt->status_telp_hustler); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="cattelp_hustler" class="form-control" disabled> <?php echo $bt->cattelp_hustler?></textarea>
                  </div>
                  </div>


                  <!-- email hustler -->
                  <div class="row"><div class="col-md-7 form-group mb-3">
                  <label><h4>2.4 EMAIL HUSTLER</h4></label>
                  <input type="text" class="form-control" id="email_hustler" name="email_hustler" value="<?php echo $bt->email_hustler ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_email_hustler" name="status_email_hustler" value="<?php echo ($bt->status_email_hustler); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="catemail_hustler" class="form-control" disabled> <?php echo $bt->catemail_hustler?></textarea>
                  </div>
                  </div>


                  <!-- tugas hustler -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.5 TUGAS HUSTLER</h4></label>
                  <textarea id="content2" type="text" rows="5" name="tugas_hustler" class="form-control" disabled> <?php echo $bt->tugas_hustler?></textarea>
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_tugas_hustler" name="status_tugas_hustler" value="<?php echo ($bt->status_tugas_hustler); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="5" name="cattugas_hustler" class="form-control" disabled> <?php echo $bt->cattugas_hustler?></textarea>
                  </div>
                  </div>



                  <!--hipster -->
                  <div class="alert alert-danger col-md-12" role="alert">
                  <i class="fas fa-user-friends"></i><h3>B. Hipster</h3></div>
                  <br>

                  <!-- nama hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.6 NAMA HIPSTER</h4></label>
                  <input type="text" class="form-control" id="nama_hipster" name="nama_hipster" value="<?php echo strtoupper ($bt->nama_hipster); ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_nama_hipster" name="status_nama_hipster" value="<?php echo ($bt->status_nama_hipster); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="catnama_hipster" class="form-control" disabled> <?php echo $bt->catnama_hipster?></textarea>
                  </div>
                  </div>

                  <!-- alamat hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.7 ALAMAT HIPSTER</h4></label>
                  <textarea id="content3" type="text" rows="5" name="alamat_hipster" class="form-control" disabled> <?php echo $bt->alamat_hipster?></textarea>
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_alamat_hipster" name="status_alamat_hipster" value="<?php echo ($bt->status_alamat_hipster); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="5" name="catalamat_hipster" class="form-control" disabled> <?php echo $bt->catalamat_hipster?></textarea>
                  </div>
                  </div>


                  <!-- telp  hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.8 TELPON HIPSTER</h4></label>
                  <input type="text" class="form-control" id="telp_hipster" name="telp_hipster" value="<?php echo $bt->telp_hipster ?>" disabled> 
                  </div>
                 
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_telp_hipster" name="status_telp_hipster" value="<?php echo ($bt->status_telp_hipster); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="cattelp_hipster" class="form-control" disabled> <?php echo $bt->cattelp_hipster?></textarea>
                  </div>
                  </div>


                  <!-- email hipster -->
                  <div class="row"><div class="col-md-7 form-group mb-3">
                  <label><h4>2.9 EMAIL HIPSTER</h4></label>
                  <input type="text" class="form-control" id="email_hipster" name="email_hipster" value="<?php echo $bt->email_hipster ?>" disabled> 
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_email_hipster" name="status_email_hipster" value="<?php echo ($bt->status_email_hipster); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="catemail_hipster" class="form-control" disabled> <?php echo $bt->catemail_hipster?></textarea>
                  </div>
                  </div>


                  <!-- tugas hipster -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.10 TUGAS HIPSTER</h4></label>
                  <textarea id="content4" type="text" rows="5" name="tugas_hipster" class="form-control" disabled> <?php echo $bt->tugas_hipster?></textarea>
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_tugas_hipster" name="status_tugas_hipster" value="<?php echo ($bt->status_tugas_hipster); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="5" name="cattugas_hipster" class="form-control" disabled> <?php echo $bt->cattugas_hipster?></textarea>
                  </div>
                  </div>


                  <!-- tugas hacker -->
                  <div class="alert alert-danger col-md-12" role="alert">
                  <i class="fas fa-user-friends"></i><h3>C. Hacker</h3></div>
                  <br>

                  <!-- nama hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.11 NAMA HACKER</h4></label>
                  <input type="text" class="form-control" id="nama_hacker" name="nama_hacker" value="<?php echo strtoupper ($bt->nama_hacker); ?>" disabled> 
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_nama_hacker" name="status_nama_hacker" value="<?php echo ($bt->status_nama_hacker); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="catnama_hacker" class="form-control" disabled> <?php echo $bt->catnama_hacker?></textarea>
                  </div>
                  </div>

                  <!-- alamat hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.12 ALAMAT HACKER</h4></label>
                  <textarea id="content5" type="text" rows="5" name="alamat_hacker" class="form-control" disabled> <?php echo $bt->alamat_hacker?></textarea>
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_alamat_hacker" name="status_alamat_hacker" value="<?php echo ($bt->status_alamat_hacker); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="5" name="catalamat_hacker" class="form-control" disabled> <?php echo $bt->catalamat_hacker?></textarea>
                  </div>
                  </div>


                  <!-- telp  hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label><h4>2.13 TELPON HACKER</h4></label>
                  <input type="text" class="form-control" id="telp_hacker" name="telp_hacker" value="<?php echo $bt->telp_hacker ?>" disabled> 
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_telp_hacker" name="status_telp_hacker" value="<?php echo ($bt->status_telp_hacker); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="cattelp_hacker" class="form-control" disabled> <?php echo $bt->cattelp_hacker?></textarea>
                  </div>
                  </div>


                  <!-- email hacker -->
                  <div class="row"><div class="col-md-7 form-group mb-3">
                  <label><h4>2.14 EMAIL HACKER</h4></label>
                  <input type="text" class="form-control" id="email_hacker" name="email_hacker" value="<?php echo $bt->email_hacker ?>" disabled> 
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_email_hacker" name="status_email_hacker" value="<?php echo ($bt->status_email_hacker); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="1" name="catemail_hacker" class="form-control" disabled> <?php echo $bt->catemail_hacker?></textarea>
                  </div>
                  </div>


                  <!-- tugas hacker -->
                  <div class="row">
                  <div class="col-md-7 form-group mb-3">
                  <label for="textarea"><h4>2.15 TUGAS HACKER</h4></label>
                  <textarea id="content6" type="text" rows="5" name="tugas_hacker" class="form-control" disabled> <?php echo $bt->tugas_hacker?></textarea>
                  </div>
                  
                  <div class="col-md-2 form-group mb-3">
                  <label><h6>STATUS</h6></label>
                  <input type="text" class="form-control" id="status_tugas_hacker" name="status_tugas_hacker" value="<?php echo ($bt->status_tugas_hacker); ?>" disabled> 
                  </div>
                  <div class="col-md-3 form-group mb-3">
                  <label for="textarea"><h6>CATATAN</h6></label>
                  <textarea type="text" rows="5" name="cattugas_hacker" class="form-control" disabled> <?php echo $bt->cattugas_hacker?></textarea>
                  </div>
                  </div>



                  <?php endforeach; ?>


                  
                     
                     </table>
                     <?php echo anchor('dosen/daftarproposal','<button class="btn btn-sm btn-primary mb-3"></i> Back </button> ')?>
                   
                     <br>
                     <br>
                     
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
      </div>
      <!-- end cases -->