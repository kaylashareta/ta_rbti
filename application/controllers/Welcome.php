<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
    {
        $this->load->model('login_model');
        $this-> _rules();

        if($this->form_validation->run()==FALSE){
            $data['title'] = "Form Login";
           
            $this->load->view('login');
            
        }else {
            $uname_user= $this->input->post('uname_user');
            $pass_user= $this->input->post('pass_user');


            $cek= $this->login_model->cek_login($uname_user, $pass_user);


            if($cek==FALSE){
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Username atau password salah <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button></div>');
                redirect('welcome');
            }else{
                $this->session->set_userdata('hak_akses', $cek->hak_akses);
                $this->session->set_userdata('uname_user', $cek->uname_user);
                switch($cek->hak_akses){
                    case 1 : redirect('administrator/dashboard');
                             break;
                    case 2 : redirect('dosen/daftarproposal');
                             break;
                    case 3 : redirect('mahasiswa/eproposal');
                             break;

                    default : break;

                }
            }
        }

       
    }
 

    public function _rules(){
            $this->form_validation->set_rules('uname_user','uname_user','required');
            $this->form_validation->set_rules('pass_user','pass_user','required');
            
    }

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}