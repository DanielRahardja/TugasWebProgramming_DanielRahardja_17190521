<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Web extends CI_Controller{
    function __construct(){
        parent::__construct();

    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_header',$data);
        $this->load->view('v_index',$data);
        $this->load->view('v_footer',$data);
    }
    public function about(){
        $data['judul'] = "About";
        $this->load->view('v_header',$data);
        $this->load->view('v_about',$data);
        $this->load->view('v_footer',$data);
    }
    public function tampilUser(){
        $data['judul'] = "Halaman User";
        $data['user']= $this->M_User->getUser()->result_array();
        $this->load->view('v_header',$data);
        $this->load->view('v_user',$data);
        $this->load->view('v_footer',$data);
    }
    public function tampilBuku(){
        $data['judul_buku'] = "Halaman Buku";
        $data['buku']= $this->M_Buku->getBuku()->result_array();
        $this->load->view('v_header',$data);
        $this->load->view('v_buku',$data);
        $this->load->view('v_footer',$data);
    }
}