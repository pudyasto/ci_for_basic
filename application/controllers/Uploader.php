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
class Uploader extends CI_Controller{
    //put your code here
     public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        
        $logged_in = $this->session->userdata('logged_in');
        if(!$logged_in){
            header("location: ".base_url());
        }
    } 
    
    public function index() {
        $this->load->view('design/header');
        $this->load->view('uploader/index');
        $this->load->view('design/footer');
    }
    
    public function upload_file() {
        $config = array(
            'upload_path' => './uploadfiles/',
            'allowed_types' => 'gif|jpg|png',
            'file_name' => 'file_'.date('dmYHis'),
            'file_ext_tolower' => TRUE,
            'overwrite' => TRUE,
            'max_size' => 100,
            'max_width' => 1024,
            'max_height' => 768,           
            'min_width' => 10,
            'min_height' => 7,     
            'max_filename' => 0,
            'remove_spaces' => TRUE
        );

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload())
        {
            $hasil = $this->upload->display_errors();
            ?>
                <h3><label class="label label-danger msg">Upload file gagal, Detail informasi</label></h3>
                <table class="table table-hover table-bordered">
                    <?php echo "<tr><td><strong>".$hasil."</strong></td></tr>"; ?>
                </table>
                <?php
        }
        else
        {
                $hasil = $this->upload->data();
                ?>
                <h2><label class="label label-success msg">Upload file berhasil, Detail informasi</label></h2>
                <table class="table table-hover table-bordered table-striped">
                    <tr>
                        <td colspan="2">
                            <img src="<?php echo base_url('uploadfiles/'.$hasil['orig_name']);?>" />
                        </td>
                    </tr>
                    <?php
                        foreach($hasil as $res => $value){
                            echo "<tr><td>".$res."</td>";
                            echo "<td>".$value."</td></tr>";
                        }
                    ?>
                </table>
                <?php
        }
    }
}    