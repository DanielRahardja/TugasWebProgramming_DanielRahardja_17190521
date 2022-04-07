<?php 
class Latihan1 extends CI_Controller{
    public function index(){
        echo "Selamat Datang... Selamat belajar web programming";
    }

    public function penjumlahan($n1 , $n2){
        $this->load->model('M_Latihan1');
        $data['nilai1']= $n1;
        $data['nilai2']= $n2;
        $data['hasil']= $this->M_Latihan1->jumlah($n1,$n2);

        $this->load->view('v_latihan', $data);
    }
}