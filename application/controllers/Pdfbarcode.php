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
 * Description of Pdfbarcode
 *
 * @author pudyasto
 */
class Pdfbarcode extends CI_Controller {
    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->library('fpdf');
        $this->load->library('PDF_Code128');
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
    } 
    
    public function index() {
        $this->load->model('pdfbarcode/data');
        $res['data'] = $this->data->select_data();
        $this->load->view('pdfbarcode/index',$res);
    }
}
