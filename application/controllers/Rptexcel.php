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
 * Description of Rptexcel
 *
 * @author adi
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rptexcel extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('fpdf');
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
    }
    
    public function index() {
        $this->load->model('rptexcel/data');
        $res['data'] = $this->data->select_data('');
        
        $this->load->view('design/header');
        $this->load->view('rptexcel/index',$res);
        $this->load->view('design/footer');
    }
    
    public function excelfiles() {
        
        $this->load->library('excel/Biffwriter');
        $this->load->library('excel/Format');
        $this->load->library('excel/OLEwriter');
        $this->load->library('excel/Parser');
        $this->load->library('excel/Workbook');
        $this->load->library('excel/Worksheet');
        
        $kelamin = $this->input->post('kelamin');
        
        $this->load->model('rptexcel/data');
        $res['data'] = $this->data->select_data($kelamin);
        
        $this->load->view('rptexcel/excelfiles',$res);
        
    }
    
}
