<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                   <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registration');?>">
                            
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="uname_user"
                                        name="uname_user" placeholder="Email Address" value="<?=set_value('uname_user');?>">
                                        <?=form_error('uname_user','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="pass_user" name="pass_user" placeholder="Password">
                                            <?=form_error('pass_user','<small class="text-danger pl-3">','</small>');?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        id="pass2_user" name="pass2_user" placeholder="Repeat Password">
                                    </div>
                                </div>

                                <input type="hidden" name="date_user"  class="form-control" value="<?php echo date("Y-m-d") ?>">
                                            
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama_peserta" 
                                    name="nama_peserta" placeholder="Full Name" value="<?=set_value('nama_peserta');?>">
                                    <?=form_error('nama_peserta','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="nik_peserta" 
                                    name="nik_peserta" placeholder="Masukkan NIK" value="<?=set_value('nik_peserta');?>">
                                    <?=form_error('nik_peserta','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" id="nohp_peserta" 
                                    name="nohp_peserta" placeholder="Phone Number" value="<?=set_value('nohp_peserta');?>">
                                    <?=form_error('nohp_peserta','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group row col-md-12">
                                <div class="form-group col-md-6">
                                        <select class="form-control form-control-user lokasi" id="prov_peserta" placeholder="Asal Provinsi" name="prov_peserta">
                                        <option disabled selected>---Asal Provinsi---</option>
                                        <?php foreach ($prov as $row) : ?>
                                        <option value="<?= $row['id_prov'];?>"><?= $row['prov'];?></option>
                                        <?php endforeach; ?>
                                        </select> 
                                </div>   
                                <div class="form-group col-md-6">
                                        <select class="form-control form-control-user lokasi" id="kota_peserta" placeholder="Asal Kota" name="kota_peserta">
                                        <option disabled selected>---Asal Kota---</option>
                                       
                                        </select> 
                                </div>   
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat_peserta" 
                                    name="alamat_peserta" placeholder="Masukkan Alamat" value="<?=set_value('alamat_peserta');?>">
                                    <?=form_error('alamat_peserta','<small class="text-danger pl-3">','</small>');?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="institusi_peserta" 
                                    name="institusi_peserta" placeholder="Masukkan Institusi" value="<?=set_value('institusi_peserta');?>">
                                    <?=form_error('institusi_peserta','<small class="text-danger pl-3">','</small>');?>
                                </div>


                                <button type="submit" class="btn btn-secondary btn-user btn-block">
                                    Register Account
                                </button>
                            
                            </form>
                            <hr>
                         
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth');?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
        <script type="text/javascript">
        $(document).ready(function() {
            $('.lokasi').select2();
        });
        </script>
        <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('#kota_peserta').select2();
        });
        </script> -->

<script type="text/javascript">
                $(document).ready(function() {
                    $('#prov_peserta').change(function() {
                        var id = $(this).val();
                        $.ajax({
                            url: "<?php echo site_url('Auth/get_kabupaten'); ?>",
                            method: "POST",
                            data: {
                                id: id
                            },
                            async: true,
                            dataType: 'json',
                            success: function(data) {
                                var html = '';
                                var i;
                                for (i = 0; i < data.length; i++) {
                                    html += '<option value=' + data[i].id_kota + '>' + data[i].kota + '</option>';
                                }
                                $('#kota_peserta').html(html);
                            }
                        });
                        return false;
                    });
                });
            </script>