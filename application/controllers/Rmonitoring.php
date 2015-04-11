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
 * Description of Rmonitoring
 *
 * @author Pudyasto
 */
class Rmonitoring extends CI_Controller{
    //put your code here
    public function __construct() {
        parent::__construct();
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
    }
    
    public function index() {
        $this->load->view('design/header');
        $this->load->view('rmonitoring/index');
        $this->load->view('design/footer');
    }
    
    public function get_data_monitoring() {
        $this->load->model('rmonitoring/data');
        $result = $this->data->get_data_monitoring();
        return $result;
    }
    
    public function logout_user() {
        $this->load->model('rmonitoring/queries');
        $result = $this->queries->logout_user();
        return $result;
    }
}
