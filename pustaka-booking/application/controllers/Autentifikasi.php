<?php

class Autentifikasi extends CI_Controller{

    public function index(){

        if($this->session->userdata('email')){
            redirect('user');
        }

        $this->form_validation->set_rules('email','Alamat Email','required|trim|valid_email',[
            'required'=> 'Email wajib diisi!',
            'valid_email'=> 'Email anda tidak dikenali!'
        ]);
        $this->form_validation->set_rules('password','Password','required|trim',[
            'required'=> 'Password wajib diisi!',
        ]);
        if($this->form_validation->run()== false){
            $data['judul']='Login';
            $data['user']='';

            $this->load->view('templates/authe_header',$data);
            $this->load->view('autentifikasi/login');
            $this->load->view('templates/authe_footer');
        }else{
            $this->login();
        }
    }

    private function _login(){
        $email= htmlspecialchars($this->input->post('email', true));
        $password= $this->input->post('password', true);

        $user= $this->M_User->CekData(['email'=>$email])->row_array();

        if($user){

            if($user['is_active'] == 1){

                if(md5($password, $user['password'])){
                    $data =[
                        'email' =>$user['email'],
                        'role_id' =>$user['role_id']
                    ];

                    $this->session->set_userdata($data);

                    if($user['role_id']==1){
                        redirect('admin');
                    }else{
                        if($user['image']=='default.png'){
                            $this->session->set_flashdata('pesan','<div class= "alert alert-info alert-message" role="alert">
                            Silahkan ubah profile anda untuk mengubah foto profil</div>');
                        }
                        redirect('user');
                    }
                }else{
                    $this->session->set_flashdata('pesan','<div class= "alert alert-danger alert-message" role="alert">
                    Silahkan ubah profile anda untuk mengubah foto profil</div>');
                    redirect('autentifikasi'); 
                }
            }
        }
    }

    public function logout(){
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan','<div class= "alert-success alert-message" 
        role="alert">Anda telah logout!</div>');
        redirect('autentifikasi');
    }
}