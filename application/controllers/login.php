<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    function __construct(){
        parent::__construct();
		$this->load->model('Mlogin','Mlogin');
    }
    
	function index(){
        if($this->session->userdata('logged') !=TRUE){
            $this->load->view('login');
        }elseif($this->session->userdata('access')=='KepalaKantor'){
            $url=site_url('KepalaKantor');
            redirect($url);
        }elseif($this->session->userdata('access')=='KasubagTU'){
            $url=site_url('Kasubagtu');
            redirect($url);
        }elseif($this->session->userdata('access')=='StaffTu'){
            $url=site_url('StaffTu');
            redirect($url);
        }
        elseif($this->session->userdata('access')=='KepalaSeksi'){
            $url=site_url('KepalaSeksi');
            redirect($url);
        }
        elseif($this->session->userdata('access')=='StaffSeksi'){
            $url=site_url('StaffSeksi');
            redirect($url);
        }else{
            $url = base_url($this->session->userdata('access'));
            redirect($url);
        }

    }
    
    function autentikasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
                
        $validasi_username = $this->Mlogin->query_validasi_username($username);
        if($validasi_username->num_rows() > 0){
            $validate_ps=$this->Mlogin->query_validasi_password($username,$password);
            if($validate_ps->num_rows() > 0){
                $x = $validate_ps->row_array();
               
                    $this->session->set_userdata('logged',TRUE);
                    $this->session->set_userdata('user',$username);
                    $id=$x['id_user'];
                    $jabatan = $x['jabatan'];
                    $NIP = $x['NIP'];
                    $divisi = $x['divisi'];
                    $alamat = $x['alamat'];
                    $no_hp = $x['no_hp'];
                    $jenis_kelamin = $x['jenis_kelamin'];
                    $ttl = $x['ttl'];
                    if($x['hak_akses']=='1'){ //Kepala Kantor
                        $nama = $x['nama'];
                        $this->session->set_userdata('access','KepalaKantor');
                        $this->session->set_userdata('id_user',$id);
                        $this->session->set_userdata('nama',$nama);
                        $this->session->set_userdata('NIP',$NIP);
                        $this->session->set_userdata('divisi',$divisi);
                        $this->session->set_userdata('alamat',$alamat);
                        $this->session->set_userdata('no_hp',$no_hp);
                        $this->session->set_userdata('jenis_kelamin',$jenis_kelamin);
                        $this->session->set_userdata('ttl',$ttl);
                        $this->session->set_userdata('jabatan',$jabatan);
                        redirect('KepalaKantor');

                    }else if($x['hak_akses']=='2'){ //kasubagtu
                        $nama = $x['nama'];
                        $this->session->set_userdata('access','KasubagTu');
                        $this->session->set_userdata('id_user',$id);
                        $this->session->set_userdata('nama',$nama);
                        $this->session->set_userdata('NIP',$NIP);
                        $this->session->set_userdata('divisi',$divisi);
                        $this->session->set_userdata('alamat',$alamat);
                        $this->session->set_userdata('no_hp',$no_hp);
                        $this->session->set_userdata('jenis_kelamin',$jenis_kelamin);
                        $this->session->set_userdata('ttl',$ttl);
                        $this->session->set_userdata('jabatan',$jabatan);
                        redirect('Kasubagtu');

                    }else if($x['hak_akses']=='3'){ //stafftu
                        $nama = $x['nama'];
                        
                        $this->session->set_userdata('access','StaffTu');
                        $this->session->set_userdata('id_user',$id);
                        $this->session->set_userdata('nama',$nama);
                        $this->session->set_userdata('NIP',$NIP);
                        $this->session->set_userdata('divisi',$divisi);
                        $this->session->set_userdata('alamat',$alamat);
                        $this->session->set_userdata('no_hp',$no_hp);
                        $this->session->set_userdata('jenis_kelamin',$jenis_kelamin);
                        $this->session->set_userdata('ttl',$ttl);
                        $this->session->set_userdata('jabatan',$jabatan);
                        redirect('StaffTu');
                    }
                    else if($x['hak_akses']=='4'){ //KepalaSeksi
                        $nama = $x['nama'];
                        $this->session->set_userdata('access','KepalaSeksi');
                        $this->session->set_userdata('id_user',$id);
                        $this->session->set_userdata('nama',$nama);
                        $this->session->set_userdata('NIP',$NIP);
                        $this->session->set_userdata('divisi',$divisi);
                        $this->session->set_userdata('alamat',$alamat);
                        $this->session->set_userdata('no_hp',$no_hp);
                        $this->session->set_userdata('jenis_kelamin',$jenis_kelamin);
                        $this->session->set_userdata('ttl',$ttl);
                        $this->session->set_userdata('jabatan',$jabatan);
                        redirect('KepalaSeksi');
                    }
                    else if($x['hak_akses']=='5'){ //StaffSeksi
                        $nama = $x['nama'];
                        $this->session->set_userdata('access','StaffSeksi');
                        $this->session->set_userdata('id_user',$id);
                        $this->session->set_userdata('nama',$nama);
                        $this->session->set_userdata('NIP',$NIP);
                        $this->session->set_userdata('divisi',$divisi);
                        $this->session->set_userdata('alamat',$alamat);
                        $this->session->set_userdata('no_hp',$no_hp);
                        $this->session->set_userdata('jenis_kelamin',$jenis_kelamin);
                        $this->session->set_userdata('ttl',$ttl);
                        $this->session->set_userdata('jabatan',$jabatan);
                        redirect('StaffSeksi');
                    }
                
            }else{
                $url=base_url();
                echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
                    <h3>Uupps!</h3>
                    <p>Password yang kamu masukan salah.</p>');
                redirect($url);
            }

        }else{
            $url=base_url();
            echo $this->session->set_flashdata('msg','<span onclick="this.parentElement.style.display=`none`" class="w3-button w3-large w3-display-topright">&times;</span>
            <h3>Uupps!</h3>
            <p>username yang kamu masukan salah.</p>');
            redirect($url);
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url();
        redirect($url);
    }

}
