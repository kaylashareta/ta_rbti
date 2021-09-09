                <!-- Begin Page Content -->
                <div class="container-fluid">
              
               <div class="row">
                   <!-- Earnings (Monthly) Card Example -->
                   <div class="col-xl-12 col-md-12 mb-4">
                       <div class="card border-left-secondary shadow h-100 py-2">
                           <div class="card-body">
                               <div class="row no-gutters align-items-center">
                                   <div class="col mr-2">
                                       <h4 class="list-group-item list-group-item-dark">INPUT TEMPLATE SERTIFIKAT</h4>
                                  
                                   </div>
                                
                               
                               </div>
                               <br>
                               <form method="post" action="<?php echo base_url('panitia/tambah_template')?>" enctype="multipart/form-data">                                     
                                        
                                            <div class="form-group col-sm-11">
                                            <label for="exampleFormControlFile1"><h5> File template  : </h5></label><br>
                                                <input type="file" name="template" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
                                                <?php echo form_error('template','<div class="text-danger small" ml-3>')?>
                                                <small>JPG/JPEG/PNG dengan ukuran template A4</small>
                                            </div>

                                            <div class="form-group col-md-6 ">
                                                <label><h5>Keterangan</h5></label>
                                                <br>
                                                <select name="keterangan">
                                                <option disabled selected>---Pilih Keterangan---</option>
                                                <?php foreach ($keterangan as $row) : ?>
                                                <option value="<?= $row['keterangan'];?>"><?= $row['keterangan'];?></option>
                                                <?php endforeach; ?>
                                                </select>
                                                <?php echo form_error('keterangan','<div class="text-danger small" ml-3>')?>
                                            </div>

                                       
                                   <input type="hidden" name="date_added"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                               
                               <div class="form-group col-sm-11">
                               <button type="submit" class="btn btn-dark">Simpan</button>
                           </div>
                       </div>
                   </div>
               </div>
               </div>

                   
                  
                <script>
                // Replace the <textarea id="editor1"> with a CKEditor 4
                // instance, using default configuration.
                    CKEDITOR.replace( 'content9' );
              </script>
      
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->