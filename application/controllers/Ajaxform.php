<?php

/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : 
 * ***************************************************************
 */

/**
 * Description of Ajaxform
 *
 * @author pudyasto
 */
class Ajaxform extends CI_Controller{
    //put your code here    
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('design/header');
        $this->load->view('ajaxform/index');
        $this->load->view('design/footer');
    }
    
    public function save_data() {
        $data= array(
            'nama_lengkap' => $this->input->post('namalengkap'),
            'golongan_darah' => $this->input->post('goldarah'),
            'jenis_kelamin' => $this->input->post('kelamin'),
            'no_telepon' => $this->input->post('telp'),
            'alamat' => $this->input->post('alamat'),
        );
        $this->load->library('table');
        
        $template = array('table_open' => '<table class="table table-hover table-bordered">');
        $this->table->set_template($template);
        
        $this->table->set_heading(array('Nama Lengkap', 'Golongan Darah', 'Jenis Kelamin', 'No. Telp','Alamat'));
        $this->table->add_row($data);
        echo $this->table->generate();
    }
}
