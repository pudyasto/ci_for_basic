<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

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
 * Description of Shelper
 *
 * @author Pudyasto
 */
class Sterbilang extends CI_Controller{
    //put your code here
     public function __construct()
    {
        parent::__construct();
        $this->load->helper('terbilang');
        
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
    } 
    
    public function index() {
        $this->load->view('design/header');
        $this->load->view('sterbilang/index');
        $this->load->view('design/footer');
    }
    
    public function konversi() {
        $angka = $this->input->post('txtTerbilang');
        echo terbilang($angka);
    }
}
