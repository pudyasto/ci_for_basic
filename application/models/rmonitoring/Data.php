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
 * Description of Data
 *
 * @author Pudyasto
 */
class Data extends CI_Model{
    //put your code here
    
    public function get_data_monitoring() {
        date_default_timezone_set('Asia/Jakarta');
        error_reporting(-1);
        $data = array(
            'id',
            'ip_address',
            'timestamp',
            'data'
        );
        $this->db->select($data);
        $query = $this->db->get("ci_sessions");
        $no = 1;
        foreach ($query->result() as $row)
        {   
            $session_data = $row->data;
            $return_data = array();
            $offset = 0;
            while ($offset < strlen($session_data)) {
                if (!strstr(substr($session_data, $offset), "|")) {
                    throw new Exception("invalid data, remaining: " . substr($session_data, $offset));
                }
                $pos = strpos($session_data, "|", $offset);
                $num = $pos - $offset;
                $varname = substr($session_data, $offset, $num);
                $offset += $num + 1;
                $data = unserialize(substr($session_data, $offset));
                $return_data[$varname] = $data;
                $offset += strlen(serialize($data));
            }
            
            if(!empty($return_data['namapengguna'])){
                echo "<tr>";
                echo "<td style=\"width: 10%;text-align: right\"><div id=\"dv_ip_$no\">".date("d-m-Y H:i:s",$return_data['__ci_last_regenerate'])."</div></td>";
                echo "<td style=\"width: 20%;text-align: left\">".$return_data['namapengguna']."</td>";
                echo "<td style=\"width: 11%;text-align: center\"><div id=\"dv_$no\">".$row->ip_address."</div></td>";
                echo "<td style=\"text-align: left\">".$return_data['browser']."</td>";
                echo "<td style=\"width: 15%;text-align: left\">".$return_data['platform']."</td>";
                echo "<td style=\"width: 7%;text-align: center\">"
                    . " <button class=\"btn btn-sm btn-danger\" onclick=\"logout_user('".$row->id."','".$return_data['namapengguna']."');\">Logout</button></td>";
                echo "</tr>"; 
                $no++;
            }
        }
    }
}
