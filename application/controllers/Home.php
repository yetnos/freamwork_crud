<?php 

// nama class harus sama dengan nama file ->extends cl_controller ini wajib
// untuk mengatur ||mengcontroll
class Home extends CI_controller{

    public function index($nama='')     //$nama=''->memberikan nilai default biar tidak error
    {
        // echo 'home / index';
        // memanggil file view('file foler||link')
        $data['judul'] ='Halaman home';     //membuat data[]
        $data['nama'] = $nama;
        $this->load->view('templates/header',$data);
        $this->load->view('home/index',$data);
        $this->load->view('templates/footer');
    }

}
