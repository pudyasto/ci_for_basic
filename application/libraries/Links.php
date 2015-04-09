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
 * Description of Links
 *
 * @author Pudyasto
 */
class Links extends CI_Router{
    //put your code here
    public function __construct() {
        parent::__construct();
    }
    public function get_link() {
        return base_url() . $this->fetch_class();
    }
}
