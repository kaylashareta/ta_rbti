<?php

class Businessplan extends CI_Controller {

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('hak_akses')!='3'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Anda belum login! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('welcome');
        }
    } 


    public function index($id_proposal){
        $data['title'] = "Business Plan";
        //$id= $this->session->userdata('uname_user');
        $this->session->set_userdata('id_proposal', $id_proposal);
        $data['businessplan'] = $this->db->query("SELECT * FROM tb_plan WHERE id_proposal='$id_proposal'")->result();


        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/businessplan', $data);
        $this->load->view('templates_mahasiswa/footer');
    }


    public function input()
    {
        $this->load->library('session');
        
        $data=array(
            'id_plan'     =>set_value('id_plan'),
            'id_proposal'     =>set_value('id_proposal'),
            'nim_plan'     =>set_value('nim_plan'),
            'tanggal_submit_plan'     =>set_value('tanggal_submit_plan'),
            'cust_plan'    =>set_value('cust_plan'),
            'value_plan'    =>set_value('value_plan'),
            'channels_plan'    =>set_value('channels_plan'),
            'relation_plan'=>set_value('relation_plan'),
            'key_act_plan'    =>set_value('key_act_plan'),
            'key_res_plan' =>set_value('key_res_plan'),
            'key_partner_plan' =>set_value('key_partner_plan'),
            'cost_plan'         =>set_value('cost_plan'),
            'revenue_plan' =>set_value('revenue_plan'),

        );

        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/businessplan_form', $data );
        $this->load->view('templates_mahasiswa/footer');
        
    }

    public function input_aksi(){
        $this->_rules();
                                
       
        if($this->form_validation->run()==FALSE){
            $this->input();
            
        }else{
                $id_proposal      = $this->session->id_proposal;
                $nim_plan    = $this->session->uname_user;
                $tanggal_submit_plan    =$this->input->post('tanggal_submit_plan');
                $cust_plan    =$this->input->post('cust_plan');
                $value_plan    =$this->input->post('value_plan');
                $channels_plan    =$this->input->post('channels_plan');
                $relation_plan    =$this->input->post('relation_plan');
                $key_act_plan    =$this->input->post('key_act_plan');
                $key_res_plan    =$this->input->post('key_res_plan');
                $key_partner_plan    =$this->input->post('key_partner_plan');
                $cost_plan    =$this->input->post('cost_plan');
                $revenue_plan    =$this->input->post('revenue_plan');

                
            
            
                $data=array(

                'id_proposal'      =>$id_proposal,
                'nim_plan'     =>$nim_plan,
                'tanggal_submit_plan'    =>$tanggal_submit_plan,
                'cust_plan'    =>$cust_plan,
                'value_plan'    =>$value_plan,
                'channels_plan'    =>$channels_plan,
                'relation_plan'=>$relation_plan,
                'key_act_plan '    =>$key_act_plan ,
                'key_res_plan' =>$key_res_plan,
                'key_partner_plan' =>$key_partner_plan,
                'cost_plan' =>$cost_plan,
                'revenue_plan' =>$revenue_plan,

            );

            
            $this->load->model('Businessplan_model');
            $this->Businessplan_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Business Plan Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect("mahasiswa/businessplan/index/$id_proposal");

        }
    }
  
            
    public function _rules(){
        $this->form_validation->set_rules('cust_plan','cust_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('value_plan','value_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('channels_plan','channels_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('relation_plan','relation_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_act_plan','key_act_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_res_plan','key_res_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('key_partner_plan','key_partner_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('cost_plan','cost_plan','required',['required'=>'wajib diisi!']);
        $this->form_validation->set_rules('revenue_plan','revenue_plan','required',['required'=>'wajib diisi!']);
        
    } 

    public function update($id_plan){
        $where=array('id_plan'=>$id_plan);
        $this->load->model('Businessplan_model');
        $data['businessplan']=$this->Businessplan_model->edit_data($where,'tb_plan')->result();
        $this->load->view('templates_mahasiswa/header_proposal');
        $this->load->view('mahasiswa/businessplan_update', $data );
        $this->load->view('templates_mahasiswa/footer');

    }

    public function update_aksi(){
        $id_proposal      = $this->session->id_proposal;
        $id_plan    =$this->input->post('id_plan');
        $nim_plan    = $this->session->uname_user;
        $cust_plan    =$this->input->post('cust_plan');
        $value_plan    =$this->input->post('value_plan');
        $channels_plan    =$this->input->post('channels_plan');
        $relation_plan    =$this->input->post('relation_plan');
        $key_act_plan    =$this->input->post('key_act_plan');
        $key_res_plan    =$this->input->post('key_res_plan');
        $key_partner_plan    =$this->input->post('key_partner_plan');
        $cost_plan    =$this->input->post('cost_plan');
        $revenue_plan    =$this->input->post('revenue_plan');
        

        $data=array(
            'cust_plan'    =>$cust_plan,
            'value_plan'    =>$value_plan,
            'channels_plan'    =>$channels_plan,
            'relation_plan'=>$relation_plan,
            'key_act_plan '    =>$key_act_plan ,
            'key_res_plan' =>$key_res_plan,
            'key_partner_plan' =>$key_partner_plan,
            'cost_plan' =>$cost_plan,
            'revenue_plan' =>$revenue_plan,
        );

        $where=array(
            'id_proposal'=>$id_proposal,
            'id_plan'=>$id_plan,
            
        );
        
        $this->load->model('Businessplan_model');
        $this->Businessplan_model->update_data($where,$data,'tb_plan');
        $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Business Plan Berhasil Diupdate! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect("mahasiswa/businessplan/index/$id_proposal");

    }

    public function delete($id_plan){
        $where = array('id_plan'=>$id_plan);
        $id_proposal      = $this->session->id_proposal;
        $this->load->model('Businessplan_model');
        $this->Businessplan_model->hapus_data($where,'tb_plan');
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Business Plan Berhasil Dihapus! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span></button></div>');
        redirect("mahasiswa/businessplan/index/$id_proposal");

    }





}

?>