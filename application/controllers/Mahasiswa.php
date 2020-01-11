<?php 
// class untuk mengcontroll file mahasiswa di views
class Mahasiswa extends CI_controller{
    public function __construct()           //mencetak otomatis
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model'); //meload bisa digunakan semua method
    }

    // method index
    public function index()
    {
        // $this->load->model('Mahasiswa_model'); //meload terlebih dahulu hanya bisa digunakan satu method
        $data['judul']='Halaman Mahasiswa';
// mengelola data dengan folder-> models      /nama file->nama_method();
        $data['mahasiswa']=$this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header',$data);
        $this->load->view('mahasiswa/index',$data);
        $this->load->view('templates/footer');
    }
}