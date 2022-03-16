<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class tglpush_mod extends CI_Model {

    function tglpush_mod()
    {
        parent::__construct();
    }

    function get_value($id=0)
    {
        $this->db->select('punch_date');
        $this->db->where('user_id', mysql_real_escape_string($id));
        $this->db->order_by("punch_date", "desc");
        $i = $this->db->get('ds_today', 1, 0);

        $var = false;
        if($i->num_rows() > 0){
            $punch_date = $i->row()->punch_date;
            if(!empty ($punch_date)){
                $var = $punch_date;
            }
        }

        return $var;
    }
    
}