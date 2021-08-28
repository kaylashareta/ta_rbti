<?php

class Auth extends CI_Controller{
    public function index()
    {
        $this->load->view('templates_login/header');
        $this->load->view('administrator/login');
        $this->load->view('templates_login/footer');
    }
}