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
                               <form method="post" action="<?php echo base_url('panitia/updatetemplate_aksi')?>" enctype="multipart/form-data">                                     
                               <?php foreach ($template as $kel) : ?>
                                            <div class="form-group col-sm-11">
                                            <label for="exampleFormControlFile1"><h5> File template  : </h5></label><br>
                                                <input type="file" name="template" accept="image/*" class="form-control-file" id="exampleFormControlFile1">
                                                <?php echo form_error('template','<div class="text-danger small" ml-3>')?>
                                                <small>JPG/JPEG/PNG dengan ukuran template A4</small>
                                            </div>

                                           <div class="form-group col-sm-11">
                                            <label><h6>Keterangan : </h6></label>
                                                <input type="text" class="form-control form-control-user" id="nama_transfer" 
                                                name="keterangan" placeholder="keterangan" value="<?php echo $kel->keterangan?>" disabled >
                                                <?=form_error('keterangan','<small class="text-danger pl-3">','</small>');?>
                                            </div>
                                            <input type="hidden" name="id_template" value="<?php echo $kel->id_template?>">
                             <?php endforeach; ?>


                                        
                                        <div class="form-group row col-sm-11">
                                            <div class="form-group col-sm-1">
                                            <a class="btn btn-danger" href="<?php echo base_url('panitia/index_template')?>">Back</a>
                                            </div>

                                            <div class="form-group col-sm-1">
                                            <button type="submit" class="btn btn-dark">Simpan</button>
                                            </div>
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