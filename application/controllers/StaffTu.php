<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StaffTu extends CI_Controller {

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
        if($this->session->userdata('access') != 'StaffTu'){
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
        $this->load->view("StaffTu/dashboard.php", $data);
	}
	public function report_surat_keluar(){
       $surat = $this->MTemplate;
        $validation = $this->form_validation;
        $validation->set_rules($surat->rules_tgl());

        if($validation->run()){
            $data["Surat"] = $this->MTemplate->getBetween();
		$this->load->view("StaffTu/report_surat_keluar.php", $data);
        } else{
        $data["Surat"] = $this->MTemplate->getAll();
		$this->load->view("StaffTu/report_surat_keluar.php", $data);}
    }
    public function report_kendali_surat(){
        $surat = $this->MKendaliSurat;
         $validation = $this->form_validation;
         $validation->set_rules($surat->rules_tgl());
 
         if($validation->run()){
             $data["Kendali"] = $this->MKendaliSurat->getBetween();
         $this->load->view("StaffTu/report_kendali_surat.php", $data);
         } else{
         $data["Kendali"] = $this->MKendaliSurat->getAll();
         $this->load->view("StaffTu/report_kendali_surat.php", $data);}
     }
    public function report_hasil_tindak_lanjut(){
        $surat = $this->MTindak_Lanjut;
         $validation = $this->form_validation;
         $validation->set_rules($surat->rules_tgl());
 
         if($validation->run()){
             $data["Surat"] = $this->MTindak_Lanjut->getBetween();
         $this->load->view("StaffTu/report_hasil_tindak_lanjut.php", $data);
         } else{
         $data["Surat"] = $this->MTindak_Lanjut->getAll();
         $this->load->view("StaffTu/report_hasil_tindak_lanjut.php", $data);}
     }
  //-------------Controller pegawai-------------//
	
public function user_profile(){
    $this->load->view("StaffTu/profile.php");
}

//-------------Controller Surat Masuk-------------//
	function tambahsuratmasuk()
	{

		$config['upload_path']          = './uploads/';
		$config['allowed_types']        = 'jpg|pdf';
		$config['max_size']             = 3072;
		$config['max_width']            = 0;
		$config['max_height']           = 0;
		$config['encrypt_name']			= false;
		$this->load->library('upload', $config); 

		$suratmasuk = $this->MSuratMasuk;
        $validation = $this->form_validation;
        $validation->set_rules($suratmasuk->rules());

			if ($validation->run() != false){

				if ( ! $this->upload->do_upload('isi_surat'))
				{
					$error = array('error' => $this->upload->display_errors());
					$this->load->view('StaffTu/VMasuk',$error);
				}
			 else {
			$suratmasuk->save();
			$this->session->set_flashdata('success', 'Berhasil disimpan');
			redirect(site_url('StaffTu/tambahdisposisi'));
			}
			
		
	}
	$this->load->view('StaffTu/VMasuk');
	}
    function datasurat_masuk()
	{
	$data  ["Surat_masuk"] = $this->MSuratMasuk->getAll();
		$this->load->view("StaffTu/data_surat_masuk.php", $data);
	}
	function datasuratmasuk()
	{
	$data  ["Surat_masuk"] = $this->MSuratMasuk->getAll();
		$this->load->view("StaffTu/data_suratmasuk.php", $data);
	}
	public function delete_suratmasuk($id)
    {
        if (!isset($id)) show_404();
        $suratmasuk = $this->MSuratMasuk->getById($id); 
        if ($suratmasuk->isi_surat != null){
            $target_file = './uploads/'.$suratmasuk->isi_surat;
            unlink($target_file);
        }
        
        if ($this->MSuratMasuk->delete($id)) {
            redirect(site_url('StaffTu/datasuratmasuk'));
        }
	}

	public function editsuratmasuk($id = null)
    {
        if (!isset($id)) redirect('StaffTu/datasuratmasuk');
       
        $suratmasuk = $this->MSuratMasuk; 
		$validation = $this->form_validation;
        $validation->set_rules($suratmasuk->rules());

        if ($validation->run()) {
            $suratmasuk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["suratmasuk"] = $suratmasuk->getById($id);
        if (!$data["suratmasuk"]) show_404();
        
        $this->load->view("StaffTu/edit_suratmasuk", $data);
    }
//------------- END controller of  surat masuk-----------//

//------------- Controller Disposisi----------//
public function DataDisposisi()
	{
		$data["Disposisi"] = $this->MDisposisi->getAll();
		$this->load->view("StaffTu/data_disposisi.php", $data);
	}
	public function tambahdisposisi()
	{
		$disposisi = $this->MDisposisi;
        $validation = $this->form_validation;
        $validation->set_rules($disposisi->rules());

        if ($validation->run() != false) {
            $disposisi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('StaffTu/datasuratmasuk');
        }
		$data["DS"] = $disposisi->getMAX();
        $this->load->view("StaffTu/VDisposisi.php", $data);
	}
    public function tambahdisposisi_($id )
	{
		$disposisi = $this->MDisposisi;
        $validation = $this->form_validation;
        $validation->set_rules($disposisi->rules());

        if ($validation->run() != false) {
            $disposisi->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect('StaffTu/datasuratmasuk');
        }
		$data["DS"] = $disposisi->getById2($id);
        $this->load->view("StaffTu/input_disposisi.php", $data);
	}
	public function editdisposisi($id = null)
    {
        if (!isset($id)) redirect('StaffTu/VDisposisi');
       
        $disposisi = $this->MDisposisi; 
		$validation = $this->form_validation;
        $validation->set_rules($disposisi->rules());

        if ($validation->run()) {
            $disposisi->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["Disposisi"] = $disposisi->getById($id);
        if (!$data["Disposisi"]) show_404();
        
        $this->load->view("StaffTu/edit_disposisi", $data);
    }

    public function deletedisposisi($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->MDisposisi->delete($id)) {
            redirect(site_url('StaffTu/datadisposisi'));
        }
    }
//-------------END Controller disposisi-------------//



    
    public function laporan_pdf($id){
        $surat = $this->MTemplate;
        $data["Surat"] = $surat->join3table($id);
        
        $this->load->library('pdf');
        
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-petanikode.pdf";
        $this->pdf->load_view('StaffSeksi/laporan_pdf', $data);
        
        
        }
 
}
