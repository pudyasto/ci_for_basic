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
 * Description of Crud
 *
 * @author Pudyasto
 */
class Crud extends CI_Controller{
    //put your code here
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library(array('form_validation','pagination'));
    }
    
    public function index() {
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            $this->load->view('access/login');
        }
        
        $this->load->model('crud/queries');
        $hal = number_format($this->uri->segment(3));
        $per_page = 10;
        
        $pcfg = array(
            'base_url' => $this->links->get_link() . '/index/',
            'per_page' => $per_page,
            'total_rows' => $this->queries->all_data(),
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
            'data' => $this->queries->data_pengguna($per_page,$hal),
            'jmldata' => $pcfg['total_rows'],
        );
        
        $this->load->view('design/header');
        $this->load->view('crud/index',$res);
        $this->load->view('design/footer');
    }
    
    public function add() {
        $this->load->view('design/header');
        $this->load->view('crud/add');
        $this->load->view('design/footer');
    }
    
    public function edit() {
        $id = $this->uri->segment(3);
        if(empty($id)){
            redirect('crud/add');
        }
        
        $this->load->model('crud/queries');
        $res['data'] = $this->queries->select_data($id);
        
        if(empty($res['data'])){
            redirect('crud/add');
        }
        
        $this->load->view('design/header');
        $this->load->view('crud/edit',$res);
        $this->load->view('design/footer');
    }
    
    public function validate() {
        $config = array(
                array(
                        'field' => 'namalengkap',
                        'label' => 'Nama Lengkap',
                        'rules' => 'required',
                        'errors' => array( 'required' => 'Nama Lengkap harus diisi', ),
                ),
                array(
                        'field' => 'alamat',
                        'label' => 'Alamat',
                        'rules' => 'required',
                        'errors' => array( 'required' => 'Alamat harus diisi', ),
                ),
                array(
                        'field' => 'telepon',
                        'label' => 'Nomor Telepon',
                        'rules' => 'required|numeric',
                        'errors' => array( 'required' => 'Nomor Telepon harus diisi',
                                           'numeric' => 'Nomor Telepon harus angka',),
                ),
                array(
                        'field' => 'kelamin',
                        'label' => 'Jenis Kelamin',
                        'rules' => 'required',
                        'errors' => array( 'required' => 'Jenis kelamin harus dipilih', ),
                )
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run() == FALSE)
        {
            return false;
        }else{
            return true;
        }
    }
    
    public function save() {
        if($this->validate() == TRUE){
            $this->load->model('crud/queries');
            $res = $this->queries->save_data();
            if($res){
                redirect('crud');
            }
        }else{
            $this->load->view('design/header');
            $this->load->view('crud/add');
            $this->load->view('design/footer');
        }
    }
    
    public function update() {
        $id = $this->uri->segment(3);
        if($this->validate() == TRUE){
            $this->load->model('crud/queries');
            $res = $this->queries->update_data();
            if($res){
                redirect('crud');
            }
        }else{
            redirect('crud/edit/' . $id);
        }
    }
    
    public function delete() {
        $id = $this->uri->segment(3);
        if(empty($id)){
            redirect('crud');
        }
        
        if($this->input->post('id')){
            $this->load->model('crud/queries');
            $res = $this->queries->delete_data();
            if($res){
                redirect('crud');
            }
        }
        
        $this->load->model('crud/queries');
        $res['data'] = $this->queries->select_data($id);
        
        if(empty($res['data'])){
            redirect('crud');
        }
        
        $this->load->view('design/header');
        $this->load->view('crud/delete',$res);
        $this->load->view('design/footer');        
    }
}