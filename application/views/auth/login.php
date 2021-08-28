
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                          <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">LOGIN SI-RBTI</h1>
                                    </div>
                                    <?= $this->session->flashdata('message');?>
                                    <form class="user" method="post" action="<?= base_url('auth/index');?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="uname_user" name="uname_user" value="<?=set_value('uname_user');?>" 
                                                placeholder="Enter Email Address">
                                                <?=form_error('uname_user','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="pass_user" name="pass_user" placeholder="Password">
                                                <?=form_error('pass_user','<small class="text-danger pl-3">','</small>');?>
                                        </div>
                                     
                                        <button type="submit" class="btn btn-secondary btn-user btn-block">
                                            Login
                                       </button>
                                      
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('auth/registration');?>">Create Account Peserta!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   