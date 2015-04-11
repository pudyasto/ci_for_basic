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
    
    function logout_user() {
        $this->db->delete('ci_sessions', array('id' => $this->input->post('id')));
        return true;        
    }
}
