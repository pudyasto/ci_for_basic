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
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Rptpdf extends CI_Controller{
    //put your code here
     public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('fpdf');
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
    } 
    
    public function index() {
        $this->load->model('rptpdf/data');
        $res['data'] = $this->data->select_data();
        $this->load->view('rptpdf/index',$res);
    }
    
}    