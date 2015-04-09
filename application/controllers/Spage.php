<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * ***************************************************************
 * Script : 
 * Version : 
 * Date :
 * Author : Pudyasto Adi W.
 * Email : mr.pudyasto@gmail.com
 * Description : Sample paging with codeigniter 3
 * ***************************************************************
 */

/**
 * Description of Spage
 *
 * @author Pudyasto
 */
class Spage extends CI_Controller{
    protected $href = '';
    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pagination');
        
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
        
        $this->href = array(
            'form' => $this->links->get_link().'/form',
            'refresh' => $this->links->get_link(),
            'batal' => $this->links->get_link(),
        );
    }    
    
    public function halaman() {
        $this->index();
    }
    
    public function index() {           
        $this->load->model('spage/data');
        $hal = number_format($this->uri->segment(3));
        $per_page = 10;
        
        $pcfg = array(
            'base_url' => $this->links->get_link() . '/halaman/',
            'per_page' => $per_page,
            'total_rows' => $this->data->all_data(),
            'attributes' => array('class' => 'btn btn-default'),
            'full_tag_open' => '<div class="btn-group">',
            'full_tag_close' => '</div>',
            'cur_tag_open' => '<button type="button" class="btn btn-danger">',
            'cur_tag_close' => '</button>',
            'first_link' => 'Awal',
            'last_link' => 'Akhir',
        );
        
        $this->pagination->initialize($pcfg);

        $res = array(
            'data' => $this->data->data_pengguna($per_page,$hal),
            'jmldata' => $pcfg['total_rows'],
        );
        
        $this->load->view('design/header');
        $this->load->view('spage/index',$res);
        $this->load->view('design/footer');
    }
}
