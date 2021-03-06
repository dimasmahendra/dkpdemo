<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('library_src');
        $this->load->model('Home_model');
    }

    public function index()
    {
    	$result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('publikasi/viewKalendarEvent');  
        $this->load->view('viewFooter');
    }

    public function publikasiTampildiBeranda()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('publikasi/viewTampildiBeranda');  
        $this->load->view('viewFooter');
    }

    public function publikasiResepPanganLokal()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('publikasi/viewResepPanganLokal');  
        $this->load->view('viewFooter');
    }

    public function publikasiTokoTaniIndonesia()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('publikasi/viewTokoTaniIndonesia');  
        $this->load->view('viewFooter');
    }

    public function publikasiJenisPelatihan()
    {
        $result['data'] = $this->Home_model->Header_source();        
        $this->load->view('viewHeader', $result);  
        $this->load->view('publikasi/viewJenisPelatihan');  
        $this->load->view('viewFooter');
    }
}
?>