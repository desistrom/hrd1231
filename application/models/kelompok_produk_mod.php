<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kelompok_produk_mod extends CI_Model{

	function Kelompok_produk_mod()
	{
		parent::__construct();
	}
	function add($data=null)
    {
        $return = 0;
        if($data != null){
            $this->db->insert('ds_kelompok_produk',$data);

            $return = $this->db->insert_id();
        }

        return $return;
    }
    function update($data,$id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->update('ds_kelompok_produk', $data);
    }
    function get_kelompok_produk($rows=false,$where=null,$limit=false,$skip=0,$take=10)
    {
        $this->db->select("*");
        $this->db->order_by('nama_kelompok','asc');

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
        $i = $this->db->get('ds_kelompok_produk');

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
        $i = $this->db->get('ds_kelompok_produk', 1, 0);

        return $var = ($i->num_rows() > 0) ? $i->row() : false;
    }
    function delete($id=0)
    {
        $this->db->where('id', mysql_real_escape_string($id));
        $this->db->delete('ds_kelompok_produk');
    }
}