<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_mod extends CI_Model {

    function login_mod()
    {
        parent::__construct();
    }

    function get_bylogin($email = null,$pass = null)
    {
        $this->db->select('*');
        $this->db->where('email', mysql_real_escape_string($email));
        $this->db->where('password', mysql_real_escape_string($pass));
        $i = $this->db->get('ds_users', 1, 0);

        $var = ($i->num_rows() > 0) ? $i->row() : false;
        if($var){
            $data = array(
                'last_loggedin_date' => date('Y-m-d H:i:s')
            );
            $this->db->where('id', $var->id);
            $this->db->update('ds_users', $data);
        }
        return $var;
    }
}