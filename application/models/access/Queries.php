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
    
    function validate() {
        $usermail = $this->input->post('usermail');
        $userpass = $this->input->post('userpass');
        
        if ($this->agent->is_browser())
        {
            $agent = $this->agent->browser().' '.$this->agent->version();
        }
        elseif ($this->agent->is_robot())
        {
            $agent = $this->agent->robot();
        }
        elseif ($this->agent->is_mobile())
        {
            $agent = $this->agent->mobile();
        }
        else
        {
            $agent = 'Unidentified User Agent';
        }
        
        $data = array(
                'idpengguna' => '',
                'idgrup' => '',
                'namapengguna' => $usermail,
                'platform' => $this->agent->platform(),
                'browser' => $agent,
                'logged_in' => true,
            );
        $this->session->set_userdata($data);
        return true;        
    }
}
