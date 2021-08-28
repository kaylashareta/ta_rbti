$this->_rules();
                $nim_start_up     = $this->session->uname_user;
                $nama_start_up    = strtoupper($this->input->post('nama_start_up'));
                $visi_start_up    =$this->input->post('visi_start_up');
                $misi_start_up    =$this->input->post('misi_start_up');
                $struktur_start_up=$this->input->post('struktur_start_up');
                /*if($struktur_start_up=''){}else{
                    $config['upload_path']      ='./assets/file';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff';
                    $config['max_size']         = 2073; // 1MB
                    $this->load->library('upload',$config);
                    if($this->upload->do_upload('struktur_start_up')){
                        echo "photo gagal diupload!";
                    }else{
                        $photo=$this->upload->data('file_name');
                    }}*/
                
                $logo_start_up    =$this->input->post('logo_start_up');
                /*if($logo_start_up=''){}else{
                    $config['upload_path']      ='./assets/file';
                    $config['allowed_types']    ='jpg|jpeg|png|tiff';
                    $config['max_size']         = 2073; // 1MB
                    $this->load->library('upload',$config);
                    if($this->upload->do_upload('logo_start_up')){
                        echo "photo gagal diupload!";
                    }else{
                        $photo=$this->upload->data('file_name');
                    }}*/
                $tagline_start_up =strtoupper($this->input->post('tagline_start_up'));
                
                
       
        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
            $data=array(
                'nim_start_up'     =>$nim_start_up,
                'nama_start_up'    =>$nama_start_up,
                'visi_start_up'    =>$visi_start_up,
                'misi_start_up'    =>$misi_start_up,
                'struktur_start_up'=>$struktur_start_up,
                'logo_start_up'    =>$logo_start_up,
                'tagline_start_up' =>$tagline_start_up,

            );






            $this->_rules();
       
        if($this->form_validation->run()==FALSE){
            $this->input();
        }else{
            $data=array(
                'nim_start_up'     =>$this->session->uname_user,
                'nama_start_up'    =>strtoupper($this->input->post('nama_start_up',TRUE)),
                'visi_start_up'    =>$this->input->post('visi_start_up',TRUE),
                'misi_start_up'    =>$this->input->post('misi_start_up',TRUE),
                'struktur_start_up'=>$this->input->post('struktur_start_up',TRUE),
                'logo_start_up'    =>$this->input->post('logo_start_up',TRUE),
                'tagline_start_up' =>strtoupper($this->input->post('tagline_start_up',TRUE)),

            );

            $this->load->model('Startup_model');
            $this->Startup_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Startup Berhasil Ditambahkan! <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
            redirect('mahasiswa/startup');

        }
    }