<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting_mod extends CI_Model {

    function setting_mod()
    {
        parent::__construct();
    }

    function get_value($key=0)
    {
        $this->db->select('value');
        $this->db->where('key', mysql_real_escape_string($key));
        $i = $this->db->get('ds_settings', 1, 0);

        $var = false;
        if($i->num_rows() > 0){
            $value = $i->row()->value;
            if(!empty ($value)){
                $var = $value;
            }
        }

        return $var;
    }
    
    function update($value,$key=0)
    {
        $data = array('value'=>$value);
        $this->db->where('key',  mysql_real_escape_string($key));
        $this->db->update('ds_settings', $data);
    }
}