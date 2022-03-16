<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Client_mod extends CI_Model{

	function client_mod()
	{
		parent::__construct();
	}
	function add($data=null)
    {
        $return = 0;
        if($data != null){
            $this->db->insert('ds_client',$data);

            $return = $this->db->insert_id();
        }

        return $return;
    }
    function update($data,$id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->update('ds_client', $data);
    }
    function get_client($rows=false,$where=null,$limit=false,$skip=0,$take=10)
    {
        $this->db->select("*");
        $this->db->order_by('date','desc');

        if($limit) {
            $this->db->limit($take,$skip);
        }

        if(!empty ($where)){
            if(count($where)){
                foreach ($where as $key=>$val){
                    if(!empty ($val)){
                        $this->db->where($key, mysql_real_escape_string($val));
                    }else{
                        $this->db->where($key, NULL, FALSE);
                    }
                }
            }
        }
        $i = $this->db->get('ds_client');

        if($rows){
            return $i->num_rows();
        }else{
            return $var = ($i->num_rows() > 0) ? $i->result_array() : FALSE;
        }
    }
    function get($id=0)
    {
        $this->db->select('*');
        $this->db->where('id', mysql_real_escape_string($id));
        $i = $this->db->get('ds_client', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }
    function delete($id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->delete('ds_client');
    }
}