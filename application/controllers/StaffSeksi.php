<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffSeksi extends CI_Controller {

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
        if($this->session->userdata('access') != 'StaffSeksi'){
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
        $this->load->view("StaffSeksi/dashboard.php", $data);
	}
	public function user_profile(){
        $this->load->view("StaffSeksi/profile.php");
    }
    public function report_surat_keluar(){
        $surat = $this->MTemplate;
         $validation = $this->form_validation;
         $validation->set_rules($surat->rules_tgl());
 
         if($validation->run()){
             $data["Surat"] = $this->MTemplate->getBetween();
         $this->load->view("StaffSeksi/report_surat_keluar.php", $data);
         } else{
         $data["Surat"] = $this->MTemplate->getAll();
         $this->load->view("StaffSeksi/report_surat_keluar.php", $data);}
     }
     public function report_hasil_tindak_lanjut(){
        $surat = $this->MTindak_Lanjut;
         $validation = $this->form_validation;
         $validation->set_rules($surat->rules_tgl());
 
         if($validation->run()){
             $data["Surat"] = $this->MTindak_Lanjut->getBetween();
         $this->load->view("StaffSeksi/report_hasil_tindak_lanjut.php", $data);
         } else{
         $data["Surat"] = $this->MTindak_Lanjut->getAll();
         $this->load->view("StaffSeksi/report_hasil_tindak_lanjut.php", $data);}
     }
    


//------------- Controler Kendali surat ------------//
function tambahkendalisurat()
	{

		$kendali = $this->MKendaliSurat;
        $validation = $this->form_validation;
        $validation->set_rules($kendali->rules());

			if ($validation->run() != false){
			
			$kendali->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			}
			
            $data ["Kendali"] = $kendali->getMAX();
            $this->load->view('StaffSeksi/input_kendalisurat',$data);
	}

	function datakendalisurat()
	{
	$data["Kendali"] = $this->MKendaliSurat->getAll();
		$this->load->view("StaffSeksi/data_kendalisurat.php", $data);
	}
	public function deletekendali($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->MKendaliSurat->delete($id)) {
            redirect(site_url('StaffSeksi/datakendalisurat'));
        }
	}
    function tambah_surat_keluar()
	{
	$data["Kendali"] = $this->MKendaliSurat->getAll();
		$this->load->view("StaffSeksi/tambah_surat_keluar.php", $data);
	}
	
	public function editkendalisurat($id)
    {
        if (!isset($id)) redirect('StaffSeksi/datakendalisurat');
       
        $kendali = $this->MKendaliSurat; 
		$validation = $this->form_validation;
        $validation->set_rules($kendali->rules());

        if ($validation->run()) {
            $kendali->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["kendali"] = $kendali->getById($id);
        if (!$data["kendali"]) show_404();
        
        $this->load->view("StaffSeksi/edit_kendalisurat", $data);
    }
//------------- END Controller kendali surat ----------//
//------------ Controller Tanggapan ------------------//

	public function datatindak_lanjut()
	{
		$data["Disposisi"] = $this->MDisposisi->getALL();
		$this->load->view("StaffSeksi/data_tindak_lanjut.php", $data);
	}
    public function data_hasil_tindak_lanjut()
	{
		$data["tindak_lanjut"] = $this->MTindak_Lanjut->getALL();
		$this->load->view("StaffSeksi/data_hasil_tindak_lanjut.php", $data);
	}
	public function tambahtindak_lanjut($id)
	{
		$tindak_lanjut = $this->MTindak_Lanjut;
        $validation = $this->form_validation;
        $validation->set_rules($tindak_lanjut->rules());

        if ($validation->run() != false) {
            $tindak_lanjut->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $data["tindak_lanjut"] = $tindak_lanjut->getById2($id);
        $this->load->view("StaffSeksi/input_tindak_lanjut.php", $data);
	}
	public function edittindak_lanjut($id = null)
    {
        if (!isset($id)) redirect('StaffSeksi/data_hasil_tindak_lanjut');
       
        $tindak_lanjut = $this->MTindak_Lanjut; 
		$validation = $this->form_validation;
        $validation->set_rules($tindak_lanjut->rules());

        if ($validation->run()) {
            $tindak_lanjut->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tindak_lanjut"] = $tindak_lanjut->getByIdTanggapan($id);
        if (!$data["tindak_lanjut"]) show_404();
        
        $this->load->view("StaffSeksi/edit_hasil_tindak_lanjut", $data);
    }

    public function delete_tindak_lanjut($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->MTindak_Lanjut->delete($id)) {
            redirect(site_url('StaffSeksi/data_hasil_tindak_lanjut'));
        }
    }
//------------ END Of Tanggapan -----------------//

     //-------------Controller Template-------------//
	public function data_surat()
	{
		$data["Surat"] = $this->MTemplate->join2table();
		$this->load->view("StaffSeksi/data_surat.php", $data);
	}
	public function tambah_surat($id)
	{
		$surat = $this->MTemplate;
        
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        if ($validation->run() != false) {

            $surat->save();
            $this->session->set_flashdata('success', 'Berhasil ditambahkan');
            redirect('StaffSeksi/tambah_surat_keluar');
        }
      
        $data["user"] = $this->MUser->getALL();
        $data["Kendali"] = $this->MKendaliSurat->getById($id);
        $this->load->view("StaffSeksi/buat_surat.php", $data);
	}
	public function edit_surat($id = null)
    {
        if (!isset($id)) redirect('StaffSeksi/data_surat');
       
        $surat = $this->MTemplate; 
		$validation = $this->form_validation;
        $validation->set_rules($surat->rules());

        if ($validation->run()) {
            $surat->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["surat"] = $surat->getById($id);
        if (!$data["surat"]) show_404();
        
        $this->load->view("StaffSeksi/edit_data_surat", $data);
    }
    public function delete_surat($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->MTemplate->delete($id)) {
            redirect(site_url('StaffSeksi/data_surat'));
        }
    }
    
    public function laporan_pdf($id){
        $surat = $this->MTemplate;
        $data["Surat"] = $surat->join3table($id);
        
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('StaffSeksi/laporan_pdf', $data);
        
        
        }
    
//-------------END Controller surat-------------//

}
