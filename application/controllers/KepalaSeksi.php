<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KepalaSeksi extends CI_Controller {

	  public function __construct()
    {
        parent::__construct();
        $this->load->model("MUser");
        $this->load->model("MSuratMasuk");
		$this->load->model("MDisposisi");
		$this->load->model("MKendaliSurat");

        $this->load->model("MTindak_Lanjut");
        $this->load->model("MTemplate");
        $this->load->library('form_validation');
		
		if($this->session->userdata('logged') !=TRUE){
            $url=base_url('login');
            redirect($url);
		};
        if($this->session->userdata('access') != 'KepalaSeksi'){
            $url=base_url();
            redirect($url);
        }
        
    }
	public function index()
	{

		
        $this->load->model("Dashboard");
        $DB = $this->Dashboard;
		$data["surat_masuk"] = $DB->jumlah_surat_masuk();
        $data ["disposisi"] = $DB->jumlah_disposisi();
        $data ["user"] = $DB->jumlah_user();
        $data ["surat_keluar"] = $DB->jumlah_surat_keluar();
        $this->load->view("KepalaSeksi/dashboard.php", $data);
	}
    public function user_profile(){
        $this->load->view("KepalaSeksi/profile.php");
    }
    public function ACCkepala_kantor($id){
        if (!isset($id)) redirect('KepalaSeksi/data_disposisi');
       
        $acc = $this->MDisposisi; 
		$validation = $this->form_validation;
        $validation->set_rules($acc->rules2());

        if ($validation->run()) {
            $acc->update_status();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["acc"] = $acc->getById($id);
        if (!$data["acc"]) show_404();
        
        $this->load->view("KepalaSeksi/persetujuan", $data);

    }
    public function ACCsuratkeluar($id){
        if (!isset($id)) redirect('KepalaSeksi/data_surat2');
       
        $acc = $this->MTemplate; 
		$validation = $this->form_validation;
        $validation->set_rules($acc->rules2());

        if ($validation->run()) {
            $acc->update_status();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["acc"] = $acc->getById($id);
        if (!$data["acc"]) show_404();
        
        $this->load->view("KepalaSeksi/persetujuan_surat_keluar", $data);

    }
    public function persetujuan_disposisi()
	{
		$data["Disposisi"] = $this->MDisposisi->join2table();
		$this->load->view("KepalaSeksi/data_disposisi2.php", $data);
	}
    public function persetujuan_suratkeluar()
	{
		$data["Surat"] = $this->MTemplate->getJoin();
		$this->load->view("KepalaSeksi/data_surat2.php", $data);
	}
    
    public function laporan_pdf($id){
        $surat = $this->MTemplate;
        $data["Surat"] = $surat->join3table($id);
        
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('KepalaSeksi/laporan_pdf', $data);
        
        
        }
    
//-------------END Controller surat-------------//
	public function dashboard()
	{
	}
}
