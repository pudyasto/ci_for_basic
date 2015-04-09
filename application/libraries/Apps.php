<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Apps {
    var $name="Codeigniter for Basic";
    var $title="<b>Codeigniter</b> for Basic";
    var $release="Version 1.0.0 Beta";
    var $ver="Version 1.0.0 Beta";
    var $modname="";
    var $moddesc="";
    var $copyright = "Codeigniter &copy; 2015";
    var $statnav="active";
    
    public function __construct(){

    }
        
    public function modulname() {
        return $this->modname;
    }
    
    public function moduldesc() {
        return $this->moddesc;
    }
    
    public function titlepage($param) {
        return $param;
    }
    
    public function modulsource($param) {
        return $param;
    }
    
    public function idmenu($param) {
        return $param;
    }
    
    public function namamenu($param) {
        return $param;
    }
}

/* 
 * Created by Pudyasto Adi Wibowo
 * Email : mr.pudyasto@gmail.com
 * pudyasto.wibowo@gmail.com
 */

