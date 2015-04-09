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
 * Description of queries
 *
 * @author Pudyasto
 */
class Queries extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct();
    }    
    function all_data() {
        $query = $this->db->get('spage');
        return $query->num_rows();
    }
    
    function data_pengguna($limit,$offset,$ordercol = 'id',$orderby = 'DESC'){
        $this->db->order_by($ordercol,$orderby);
        $this->db->limit($limit,$offset);
        $query = $this->db->get('spage');
        return $query->result();
    } 
    
    function select_data($id = NULL) {
        if(!empty($id)){
            $this->db->where('id', $id);
        }        
        $query = $this->db->get('spage');
        return $query->result();   
    }
    
    function save_data() {
        $data = array(
            'namalengkap' => $this->input->post('namalengkap'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('telepon'),
            'kelamin' => $this->input->post('kelamin'),
        );
        $this->db->insert('spage', $data);
        return true;        
    }
    
    function update_data() {
        $data = array(
            'namalengkap' => $this->input->post('namalengkap'),
            'alamat' => $this->input->post('alamat'),
            'nohp' => $this->input->post('telepon'),
            'kelamin' => $this->input->post('kelamin'),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('spage', $data);
        return true;        
    }
    
    function delete_data() {
        $this->db->delete('spage', array('id' => $this->input->post('id')));
        return true;        
    }
}
