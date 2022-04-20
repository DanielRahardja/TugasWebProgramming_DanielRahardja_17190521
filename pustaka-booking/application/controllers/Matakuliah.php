<?php
    class Matakuliah extends CI_Controller
    {
        public function index()
        {
            $this->load->view('v_form-matakuliah');
        }
        public function cetak()
        {
            //Form Validation
            $this->form_validation->set_rules('kode', 'Kode Matakuliah',
            'required|min_length[3]', [
                'required' => 'Kode Matakuliah Harus diisi',
                'min_length' => 'Kode terlalu pendek'
            ]);
            $this->form_validation->set_rules('nama', 'Nama Matakuliah',
            'required|min_length[3]', [
                'required' => 'Nama Matakuliah Harus diisi',
                'min_length' => 'Nama terlalu pendek'
            ]);
            $this->form_validation->set_rules('sks', 'SKS',
            'required', array('required' => 'SKS tidak boleh kosong, woy!')
            );
            
            
            if ($this->form_validation->run() ==FALSE){
                $this->load->view('v_form-matakuliah');
            }else{
                $data= [
                    'kode'=>$this->input->post('kode'),
                    'nama'=>$this->input->post('nama'),
                    'sks'=>$this->input->post('sks')
                ];
                $this->load->view('v_data-matakuliah', $data);
            }
            
        }
    }